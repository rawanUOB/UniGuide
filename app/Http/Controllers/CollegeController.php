<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\College; 

class CollegeController extends Controller
{
    public function show($id)
    {
        $college = College::with('majors')->findOrFail($id);
        if ($college->majors->count() == 1){
            return redirect()->route('majors.show' , $college->majors->first()->id);
        }
        if ($college->majors->count() == 0 ){
            return abort(404);
        }
        return view('Colleges', compact('college'));
    }
}
