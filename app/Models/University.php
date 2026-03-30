<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //to create the relationship between the university and the colleges
    public function colleges(){
        return $this->hasMany(College::class);
    }
}
