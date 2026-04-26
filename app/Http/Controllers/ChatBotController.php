<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ChatBotController extends Controller
{
    
    public function askDB(Request $request){
        $message = strtolower($request->message);
        //As an extra protection
        $request -> validate([
            'message' => 'required|string|max:255',
        ]);

        //have all majors: 
        $majors = \App\Models\Major::all();

        foreach($majors as $major){
            $majorName = strtolower($major->name);
            $name = str_replace(['Bachelor of ', 'Science in'], '', $majorName);
            $keywords = explode(' ', $name);

            foreach($keywords as $keyword){
                if (strlen($keyword)>3){
                    similar_text($keyword, $message, $percent);
                    if (str_contains($message, $keyword) || $percent > 70) {
                         $universities = \App\Models\University::whereHas('colleges.majors', function($query) use ($major){
                        $query->where('id', $major->id);
                        })->pluck('name');

                        return response()->json([
                        'answer' => "The major of {$major->name} is offered in the following universities: " . $universities->implode(', ')
                        ]);
                    }

                }
            }
        }
    }
}