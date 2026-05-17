<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CollegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Schema::disableForeignKeyConstraints();
        \App\Models\College::truncate();
        Schema::enableForeignKeyConstraints();

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

        $AGU = \App\Models\University::where('name', 'Arabian Gulf University')->first();
        $AGU ->colleges()->createMany ([
            ['name' => 'College of Medicine & Health Sciences' , 'created_at' => now(),'updated_at' => now()]
        ]);

        $RUW = \App\Models\University::where('name', 'Royal University for Women')->first();
        $RUW ->colleges()->createMany ([
            ['name' => 'College of Art & Design' , 'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Business and Law' , 'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Engineering and Technology' , 'created_at' => now(),'updated_at' => now()]
        ]);

        $AU = \App\Models\University::where('name', 'Ahlia University')->first();
        $AU ->colleges()->createMany ([
            ['name' => 'College of Arts and Sciences' , 'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Administrative and Financial Sciences' , 'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Engineering' , 'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Information Technology' , 'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Medical and Health Sciences' , 'created_at' => now(),'updated_at' => now()]
        ]);

        $ASU = \App\Models\University::where('name', 'Applied Science University')->first();
        $ASU ->colleges()->createMany ([
            ['name' => 'College of Administrative Sciences' , 'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Arts and Science' , 'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Law' , 'created_at' => now(),'updated_at' => now()],
            ['name' => 'College of Engineering' , 'created_at' => now(),'updated_at' => now()]
        ]);

        $UOB = \App\Models\University::where('name', 'University of Bahrain')->first();

            $UOB->colleges()->createMany([
                ['name' => 'College of Applied studies', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Arts', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Business Administration', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Engineering', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Health and Sport Sciences', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Information Technology', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Law', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Science', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Bahrain Teachers College', 'created_at' => now(), 'updated_at' => now()]
            ]);


            $KU = \App\Models\University::where('name', 'Kingdom University')->first();

                $KU->colleges()->createMany([
                ['name' => 'College of Engineering and Design', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Business Administration', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Law', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Information Technology', 'created_at' => now(), 'updated_at' => now()],
            ]);

            $BIBF = \App\Models\University::where('name', 'Bahrain Institute of Banking and Finance')->first();

            $BIBF->colleges()->createMany([
            ['name' => 'BSc in Banking with Financial Technology', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BSc in Banking & Finance', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BSc in Accounting & Finance', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Diploma in Islamic Finance', 'created_at' => now(), 'updated_at' => now()],


            ['name' => 'BSc Economics & Management', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'BSc Data Science and Business Analytics', 'created_at' => now(), 'updated_at' => now()],
            ]);

            $AOU = \App\Models\University::where('name', 'Arab Open University')->first();

            $AOU->colleges()->createMany([
                ['name' => 'Faculty of Business Studies', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Faculty of Computer Studies', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'Faculty of Language Studies', 'created_at' => now(), 'updated_at' => now()],
            ]);

            $BUB = \App\Models\University::where('name', 'British University of Bahrain')->first();

            $BUB->colleges()->createMany([
                ['name' => 'College of Business', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Engineering and Built Environment', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'College of Information and Communication Technology', 'created_at' => now(), 'updated_at' => now()],
            ]);

        }

    }
