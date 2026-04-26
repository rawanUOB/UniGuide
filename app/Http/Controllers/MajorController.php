<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;

class MajorController extends Controller
{
    public function show($id)
    {
        $major = Major::findOrFail($id);
        return view('Majors', compact('major'));
    }
}
