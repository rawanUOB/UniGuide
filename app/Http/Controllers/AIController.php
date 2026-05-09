<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\student_responses;

class AIController extends Controller
{
        public function show()
    {
        return view('academic');
    }

    public function predict(Request $request)
    {
        //Validate the incoming data
        $validatedData = $request->validate([
            'math' => 'required|numeric',
            'creativity' => 'required|numeric',
            'problem_solving' => 'required|numeric',
            'communication_skills' => 'required|numeric',
            'technology_interest' => 'required|numeric',
            'leadership' => 'required|numeric',
            'analytical_thinking' => 'required|numeric',
            'attention_to_details' => 'required|numeric',
            'biology_interest' => 'required|numeric',
            'fitness_interest' => 'required|numeric',
            'teamwork' => 'required|numeric',
            'stress_tolerance' => 'required|numeric',
            'ethics' => 'required|numeric',
            'patience' => 'required|numeric',
            'empathy' => 'required|numeric',
            'spatial_thinking' => 'required|numeric',
            'research_drive' => 'required|numeric',
            'persuasion' => 'required|numeric',
            'social_interest' => 'required|numeric',
            'risk_taking' => 'required|numeric',
            'aesthetic_sensitivity' => 'required|numeric'
        ]);

        // Here we'll use this to call our python API:
        $response = \Illuminate\Support\Facades\Http::post('http://localhost:8002/predict', $request->only([
            'math', 'creativity', 'problem_solving', 'communication_skills',
            'technology_interest', 'leadership', 'analytical_thinking',
            'attention_to_details', 'biology_interest', 'fitness_interest',
            'teamwork', 'stress_tolerance', 'ethics', 'patience', 'empathy', 
            'spatial_thinking', 'research_drive', 'persuasion', 'social_interest',
            'risk_taking', 'aesthetic_sensitivity'
        ]));

        $result = $response->json();
        \App\Models\student_responses::create([
        'math' => $request->math,
        'creativity' => $request->creativity,
        'problem_solving' => $request->problem_solving,
        'communication_skills' => $request->communication_skills,
        'technology_interest' => $request->technology_interest,
        'leadership' => $request->leadership,
        'analytical_thinking' => $request->analytical_thinking,
        'attention_to_details' => $request->attention_to_details,
        'biology_interest' => $request->biology_interest,
        'fitness_interest' => $request->fitness_interest,
        'teamwork' => $request->teamwork,
        'stress_tolerance' => $request->stress_tolerance,
        'ethics' => $request->ethics,
        'patience' => $request->patience,
        'empathy' => $request->empathy,
        'spatial_thinking' => $request->spatial_thinking,
        'research_drive' => $request->research_drive,
        'persuasion' => $request->persuasion,
        'social_interest' => $request->social_interest,
        'risk_taking' => $request->risk_taking,
        'aesthetic_sensitivity' => $request->aesthetic_sensitivity,
        'recommended_major' => $result['final_recommendation'],
    ]);

        return view('results', compact('result'));
       
    }

    public function feedback(Request $request)
    {
        $latest = student_responses::latest()->first();
        if ($latest) {
            $chosenMajors = $request->chosen_majors ?? [];
            $disagreementMajors = $request->disagreement_majors ?? [];
            $latest->update([
                'chosen_major' => implode(', ', $chosenMajors),
                'disagreement_majors' => implode(', ', $disagreementMajors),
            ]);
        }
        return response()->json(['success' => true]);
    }
}
