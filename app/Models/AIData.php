<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AIData extends Model
{
 protected $table = 'AI_data';
    protected $fillable = [
            'Major',
            'Math',
            'Creativity',
            'Problem_Solving',
            'Communication_Skills',
            'Technology_Interest',
            'Leadership',
            'Analytical_Thinking',
            'Attention_to_Details',
            'Biology_Interest',
            'Fitness_Interest',
            'Teamwork',
            'Stress_Tolerance',
            'Ethics',
            'Patience',
            'Empathy',
            'Spatial_Thinking',
            'Research_Drive'
        ];
}

?>