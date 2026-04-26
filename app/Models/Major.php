<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    //to create the relationship between the major and the college
    public function college(){
        return $this->belongsTo(College::class); 
    }

    protected $casts = [
    'Study_Plan' => 'array',
    'Skills' => 'array',
    'Career_Opportunities' => 'array',
    ];
}

