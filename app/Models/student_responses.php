<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student_responses extends Model
{
    protected $fillable = [
    'math', 'creativity', 'problem_solving', 'communication_skills',
    'technology_interest', 'leadership', 'analytical_thinking',
    'attention_to_details', 'biology_interest', 'fitness_interest',
    'teamwork', 'stress_tolerance', 'ethics', 'patience', 'empathy',
    'spatial_thinking', 'research_drive', 'persuasion', 'social_interest',
    'risk_taking', 'aesthetic_sensitivity', 'recommended_major', 'chosen_major', 
    'disagreement_majors'
];
}
