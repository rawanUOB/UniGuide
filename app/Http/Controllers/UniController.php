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
        $PublicUniversities = [
            [
            'University' => 'University of Bahrain',
            'Overview' => '......',
            'Type' => 'Public University', 
            'Image' => 'images/UoB.jpg'
            ],
            [
            'University' => 'Bahrain Polytrchnic',
            'Overview' => '......',
            'Type' => 'Public University',
            'Image' => 'images/Poly.jpg'
            ],
            [
            'University' => 'Araibian Gulf University',
            'Overview' => '......',
            'Type' => 'Public University',
            'Image' => 'images/AGU.jpg'
            ]
            
        ];
        $PrivateUniversities = [
        [
            'University' => 'Royal College of Surgeons in Ireland',
            'Overview' => '......',
            'Type' => 'Private University',
            'Image' => 'images/RCSI.jpg'
            ]
            ,
            [
            'University' => 'Gulf University',
            'Overview' => '......',
            'Type' => 'Private University',
            'Image' => 'images/GulfUni.jpg'
            ],
            [
            'University' => 'American University of Bahrain',
            'Overview' => '......',
            'Type' => 'Private University',
            'Image' => 'images/AUBH.jpg'
            ],
            [
            'University' => 'University of Technlogy',
            'Overview' => '......',
            'Type' => 'Private University',
            'Image' => 'images/UTB.jpg'
            ],
            [
            'University' => 'Ahlia University ',
            'Overview' => '......',
            'Type' => 'Private University',
            'Image' => 'images/AU.jpg'
            ],
            [
            'University' => 'Royal University for Women',
            'Overview' => '......',
            'Type' => 'Private University',
            'Image' => 'images/RUW.jpg'
            ],
            [
            'University' => 'Kingdom University',
            'Overview' => '......',
            'Type' => 'Private University',
            'Image' => 'images/KU.jpg'
            ]
        ];

        return view('home', [
        'PublicUniversities'=> $PublicUniversities, 
        'PrivateUniversities' => $PrivateUniversities
        ]);
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
    public function show($name)
    {
        return view('university', ['name'=>$name]);
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
