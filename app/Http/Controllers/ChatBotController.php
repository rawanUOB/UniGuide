<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Major; 
use App\Models\University; 


class ChatBotController extends Controller
{
    
    public function askDB(Request $request){
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        $message = strtolower(trim($request->message)); 

        //ready structure of answers the chatbot will use 
        if($this->isGreeting($message)){
            return response()->json([
                'answer' => "Hello! I'm UniGuide Bot. I am able to help you with:
                \n- What majors a university offers
                \n- Where do you find a specific major
                \n- Comparing two majors 
                \n- Explaining what a major is about"]);
        }

        if ($this ->isAcademicTest($message)){
                    return response() ->json([
                        'answer' => "Great! to take the test head to the Acedimic Test tab, and it will 
                        reccomend the top 3 majors."
                    ]); 
        }
        
        $majorsComparison = $this->compareMajorWithAI($message); //if the user asked to compare between two majors.
        if ($majorsComparison)
            return response()->json(['answer'=> $majorsComparison]); 

        $majorExplanation = $this->explainMajorWithAI($message); // a major explaination 
        if ($majorExplanation) 
            return response()->json(['answer' => $majorExplanation]);
        

        $universityMajors = $this->getUniversityMajors($message); // will list all majors in a university
        if($universityMajors)
            return response()->json(['answer' => $universityMajors]); 
        

        $majorsUniversity = $this->getMajorUniversities($message); //will check where can a major be found
        if ($majorsUniversity){
            return response()->json([
                'answer' => $majorsUniversity
            ]);
        }


        //If the user asked something other than the boundries specified redirect them to a logical AI we have inside our python (we have ollama)
        $AI_Logic = $this->askAI($message);
        return response()->json(['answer' => $AI_Logic]);
    }

    //private functoins the chatBot will use (they are called in the above lines.) 
    private function isGreeting($message)
    {
        $possibleGreeting = ['hi', 'hello', 'hey', 'good morning', 'good evening', 'good afternoon'];
        $words = explode(' ', $message);
        
        foreach($possibleGreeting as $g){
            if (in_array($g, $words)) 
                return true;
            if (str_word_count($g) > 1 && str_contains($message, $g))
                return true;
        }
        return false; 
    }

    private function isAcademicTest($message)
    {
        $possibleKeyWords = [
        'find my major', 'decide my major', 'dont know what to study', 
        'major quiz', 'not sure what to study', 'recommend a major',
        'help deciding', 'help me decide', 'which major should',
        'what major should', 'not sure which major', 'I need help deciding', 'help me choose a major'
        ];
        foreach($possibleKeyWords as $k){
            if(str_contains($message, $k))
                return true;
        }
        return false;
    }

    private function getUniversityMajors($message)
    {
        if (!str_contains($message, 'major') && !str_contains($message, 'offer') 
            && !str_contains($message, 'study') && !str_contains($message, 'have')) {
            return null;
        }

        $universities = University::with('colleges.majors')->get();
        foreach ($universities as $uni) {
            $uniName = strtolower($uni->name);
            similar_text($uniName, $message, $percent);
            if (str_contains($message, $uniName) || $percent > 70) {
                $majors = collect();
                foreach ($uni->colleges as $college) {
                    foreach ($college->majors as $major) {
                        $majors->push($major->name);
                    }
                }
                if ($majors->isEmpty()) {
                    return "I don't have major information for {$uni->name} yet.";
                }
                return "{$uni->name} offers the following majors:\n• " . $majors->implode("\n• ");
            }
        }
        return null;
    }

    private function getMajorUniversities($message)
    {
        if (str_contains($message, 'where can I find') || str_contains($message, 'whare to study') 
        || str_contains($message, 'is available') || str_contains($message, 'what university provides')) {
            return null;
        }

        $majors = Major::all(); 
        foreach ($majors as $major){
            $majorName = strtolower($major->name);
            $onlyName = strtolower(str_replace(
                ['Bachelor of ', 'Science in ', 'Bachelor of Science in  ' ],'',$majorName
            ));

            $keywords = array_merge([$onlyName],array_filter(explode(' ', $onlyName), fn($k) => strlen($k) > 3));

            foreach ($keywords as $keyword){
                similar_text($keyword, $message, $percent); 
                if (str_contains($message, $keyword) || $percent >70){
                    $universities = University::whereHas('colleges.majors', function($query) use($major){
                        $query->where('id', $major->id); 
                    })->pluck('name'); 
                    if($universities->isEmpty())
                        return "Sorry, I couldn't find universities offering {$major->name} in my database :( ";
                    
                    return "{$major->name} is offeref at: \n• " .$universities->implode("\n•");
                } 

            }
        }
        return null; 
    }


    private function explainMajorWithAI($message)
    {
        $triggers = ['what is', 'explain', 'tell me about', 'what does', 'describe'];
        $triggered = false;
        foreach ($triggers as $t) {
            if (str_contains($message, $t)) {
                $triggered = true;
                break;
            }
        }
        if (!$triggered) 
            return null;
        $majors = Major::all();
        $foundMajor = null;

        foreach ($majors as $major) {
            $onlyName = strtolower(str_replace(
                ['Bachelor of ', 'Science in ', 'Bachelor of Science in '], '', strtolower($major->name)
            ));

            if (str_contains($message, $onlyName)) {
                $foundMajor = $major->name;
                break;
            }

            $keywords = array_filter(explode(' ', $onlyName), fn($k) => strlen($k) > 3);
            foreach ($keywords as $keyword) {
                similar_text($keyword, $message, $percent);
                if (str_contains($message, $keyword) || $percent > 70) {
                    $foundMajor = $major->name;
                    break 2;
                }
            }
        }

        if (!$foundMajor) return null;

       try {
        $AIresponse = Http::timeout(30)->post('http://localhost:8002/chatbot', [
            'message' => "Explain the university major '{$foundMajor}' to a student in Bahrain. Keep it under 5 sentences. Cover what it is, what students learn, and career options."
        ]);
        $data = $AIresponse->json();
        return $data['answer'] ?? "I found {$foundMajor} in my database but couldn't generate an explanation right now. Try asking 'where can I study {$foundMajor}?' instead!";

        } catch (\Exception $e) {
            return "I found {$foundMajor} in my database but couldn't generate an explanation right now. Try asking 'where can I study {$foundMajor}?' instead!";
        }
    }

    private function compareMajorWithAI ($message){
        $trigger = ['difference', 'vs', 'versus', 'different', 'compare'];
        $isTriggered = false; 
         
        foreach ($trigger as $t){
             if (str_contains($message, $t)) {
                $isTriggered = true;
                break;
            }
        }
        if (!$isTriggered)
            return null; 

       try {
        $AIresponse = Http::timeout(30)->post('http://localhost:8002/chatbot', [
            'message' => "A student in Bahrain asked: '{$message}'. 
            If this is asking to compare two university majors, compare them in under 6 sentences covering what each one is, the core difference, what students learn, and career options.
            If one or both majors are not available in Bahrain, mention that briefly. If the message is not about comparing university majors, politely say you can only help with university 
            and major related questions."
        ]);
        $data = $AIresponse->json();
        return $data['answer'] ?? null; 
        } catch (\Exception $e) {
            return null; 
        }

    }


    private function askAI($message)
    {
        try{
            $AIresponse = Http::timeout(30)->post('http://localhost:8002/chatbot', [
                'message' => $message
            ]);
            $data = $AIresponse->json();
            return $data['answer'] ?? "I'm not sure about this. Try asking about a university or a major?";
        }
        catch (\Exception $e){
            return "Some issue happened. Try again."; 
        }
    }
}