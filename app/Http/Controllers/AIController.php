<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


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
            'research_drive' => 'required|numeric'
        ]);

        // Here we'll use this to call our python API:
        $response = \Illuminate\Support\Facades\Http::post('http://localhost:8002/predict', $request->only([
            'math', 'creativity', 'problem_solving', 'communication_skills',
            'technology_interest', 'leadership', 'analytical_thinking',
            'attention_to_details', 'biology_interest', 'fitness_interest',
            'teamwork', 'stress_tolerance', 'ethics', 'patience', 'empathy', 
            'spatial_thinking', 'research_drive'
        ]));

        $result = $response->json();

        return view('results', compact('result'));
       
    }
}
