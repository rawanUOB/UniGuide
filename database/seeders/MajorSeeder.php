<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ICT = \App\Models\College::where('name', 'School of ICT')->firstOrFail(); //so that if the college is not found the system will not crash. 
        $majors= [
        [
            'name' => 'Bachelor of Cybersecurity',
            'description' => 'Cybersecurity in Bahrain Polyticnic is focused on protecting the network, digital systems and data from cyber threats
            The students will start learning core IT foundations such as programming, learning about systems and databases then they will dive into 
            cybersecurity topics such as ethical hacking, and defenses. 
            The program follows a hands-on project based approach that prepares students fo real world challenges.',
            'duration' => '4 years',
            'Study_Plan' => [
                'Year 1' => 'Will focus on building a foundational skills in methamatics, programming, computer systems, networking and database.',
                'Year 2' => 'Will give an  introduction to information security, web designs and applied IT projects.',
                'Year3' => 'Focus on advanced IT and cybersecurity topics such as ethical hacking, AI, threat intelligence and defense startegies.',
                'Year 4' => 'Focuses on the graduation project, real workd cybersecurity problems and industry based learning experience ',
            ],
            'Skills' => [
                'Analytical thinking and problem solving skills.',
                'The ability to detect and prevent cyber attacks.',
                'Develop a knowledge of the ethical hacking techniques.',
                'Have an understanding of laws and regulations related to cybersecurity.',
            ],
            'Career_Opportunities' => [
                'Cybersecurity Analyst',
                'Freelance Ethical Hacker or Penetration Tester',
                'Digital Forensics Analyst',
                'Network Security Engineer'
            ],
            'video_link' => 'Videos/cyberPloy.mp4',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Programming ',
            'description' => '.......',
            'duration' => '4 years',
            'Study_Plan' => '.......',
            'Skills' => '.......',
            'Career_Opportunities' => '.......',
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Networking',
            'description' => '.......',
            'duration' => '4 years',
            'Study_Plan' => '.......',
            'Skills' => '.......',
            'Career_Opportunities' => '.......',
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Science in Cloud Computing and Information Systems',
            'description' => '.......',
            'duration' => '4 years',
            'Study_Plan' => '.......',
            'Skills' => '.......',
            'Career_Opportunities' => '.......',
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Science in Data Analytics',
            'description' => '.......',
            'duration' => '4 years',
            'Study_Plan' => '.......',
            'Skills' => '.......',
            'Career_Opportunities' => '.......',
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ] ];

        //so if the major already exists it will update it not duplicate it: 
        foreach($majors as $major){
            $ICT->majors()->updateOrCreate(['name' => $major['name']], $major);
        }

    

    }
}
