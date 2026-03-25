<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //this one will handle the homepage
    public function index() 

    {
        //trying to have the uni's view:
        $Universities = [
            [
            'University' => 'University of Bahrain',
            'Overview' => '......',
            'Type' => 'Public University', 
            'Image' => 'images/UoB.jpg'
            ],
            [
            'University' => 'Bahrain Polytrchnic',
            'Overview' => '......',
            'Type' => 'Public University'
            ],
            [
            'University' => 'Royal College of Surgeons in Ireland',
            'Overview' => '......',
            'Type' => 'Private University'
            ]
        ];
        return view('home', ['Universities'=> $Universities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
