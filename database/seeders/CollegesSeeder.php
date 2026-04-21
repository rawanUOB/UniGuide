<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $polyticnic = \App\Models\University::where('name', 'Bahrain Polytechnic')->first();
        $polyticnic ->colleges()->createMany ([
            ['name' => 'School of Business' , 'created_at' => now(),'updated_at' => now()], 
            ['name' => 'School of Accounting and Finance', 'created_at' => now(),'updated_at' => now()],
            ['name' => 'School of Logistics and Maritime Studies' , 'created_at' => now(),'updated_at' => now()], 
            ['name' => 'School of Engineering' , 'created_at' => now(),'updated_at' => now()], 
            ['name' => 'School of Creative Media', 'created_at' => now(),'updated_at' => now()],
            ['name' => 'School of ICT', 'created_at' => now(),'updated_at' => now()]
           
        ]);
        $rcsi = \App\Models\University::where('name', 'Royal College of Surgeons in Ireland')->first();
        $rcsi->colleges()->createMany([
            ['name' => 'School of Medicine' , 'created_at' => now(),'updated_at' => now()], 
	        ['name' => 'School of Nursing' , 'created_at' => now(),'updated_at' => now()]
        ]);

        $GU = \App\Models\University::where('name', 'Gulf University')->first();
        $GU ->colleges()->createMany([ 
            ['name' => 'College of Engineering' ,  'created_at' => now(),'updated_at' => now()], 
            ['name' => 'College of Administrative & Financial Science' ,  'created_at' => now(),'updated_at' => now()], 
            ['name' => 'College of Communication & Media Technologies' ,  'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Law' , 'created_at' => now(),'updated_at' => now()]
        ]);

        $UTB = \App\Models\University::where('name', 'University of Technology')->first();
        $UTB ->colleges()->createMany ([
            ['name' => 'College of Computer Studies', 'created_at' => now(),'updated_at' => now()], 
	        ['name' => 'College of Administrative & Financial Science' ,  'created_at' => now(),'updated_at' => now()], 
	        ['name' => 'College of Engineering' , 'created_at' => now(),'updated_at' => now()]
        ]);

        $AUBH = \App\Models\University::where('name', 'American University of Bahrain')->first();
        $AUBH ->colleges()->createMany ([
            ['name' => 'College of Business and Managment' , 'created_at' => now(),'updated_at' => now()], 
            ['name' => 'College of Media and Design' , 'created_at' => now(),'updated_at' => now()], 
            ['name' => 'College of Engineering and Computing' , 'created_at' => now(),'updated_at' => now()], 
            ['name' => 'College of Arts and Science', 'created_at' => now(),'updated_at' => now()]	
           
        ]);



    
    }
}
