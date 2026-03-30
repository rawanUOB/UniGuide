<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    //to create the relationship between the college and the university
    public function university(){
        return $this->belongsTo(University::class); 
    }
}
