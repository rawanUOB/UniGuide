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
                'Network Security Engineer',
                'Security Engineer',
                'Risk and Vulnerability Analyst',
                'Web Application Security Engineer',
                'SOC Analyst'
            ],
            'video_link' => 'Videos/cyberPloy.mp4',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Programming ',
            'description' => 'Programming in Bahrain Polytechnic is focused on software development, programming languages, application development 
            and problem solving. This program is based on hands-on project based learning.',
            'duration' => '4 years',
            'Study_Plan' => [
                'Year 1' => 'Focuses on building an IT foundation skills in computer systems, programming, databases, netwoks, operating systems and 
                mathematical understanding.',
                'Year 2' => 'Will dive deeper into programming languages, databases, web development, information security fundamentals and start 
                applying the knowledge into projects.',
                'Year3' => 'Learn advanced programming topics such as AI, mobile programming, development of games and advanced programming.',
                'Year 4' => 'Focuses on the graduation project and Industry based learning experience.',
            ],
            'Skills' => [
                'Programming in multiple languages.', 
                'Problem solving and logical thinking skills.',
                'The ability to design and develop web and mobile applications.',
                'Have an understanding of software development life cycle.'
            ],
            'Career_Opportunities' => [
                'Analyst Programmer',
                'Software Developer', 
                'Software Engineer',
                'Mobile programmer',
                'Games developer',
                'Web developer'
            ],
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Networking',
            'description' => 'The major focuses on network design, wireless systems and security of network systems',
            'duration' => '4 years',
            'Study_Plan' => [
                'Year 1' => 'Focuses on basics of networking, operating systems, database, programing and mathematics.',
                'Year 2' => 'Focuses more on network design and fundamentals.',
                'Year 3' => 'More advanced topics such as AI, defense in depth, wireless communications, ethical hacking and advanced networking.',
                'Year 4' => 'Focuses on the graduation project.'
            ],
            'Skills' => [
                'The ability to design and manage network systems.',
                'Have an understanding of wireless communication systems.',
                'The ability to troubleshoot and resolve network issues.',
                'The ability to perform risk management in network environments.'
            ],
            'Career_Opportunities' => [
                'Network Administrator',
                'Network Engineer',
                'Information or Network Systems Manager',
                'CCNA/CCNP Engineer'
            ],
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Science in Cloud Computing and Information Systems',
            'description' => 'Cloud computing focuses on cloud architecture, enterprise systems, DevOps and cloud based solutions.',
            'duration' => '4 years',
            'Study_Plan' => [
                'Year 1' => 'Focuses on developing a strong IT fundimentals for the students.',
                'Year 2' => 'Dive into cloud computing concepts and learn about cloud service models.',
                'Year 3' => 'Focuses on AI, DevOps, eCommerce systems and enterprise systems.',
                'Year 4' => 'Will focus on developing an understanding of cloud security, Machine learning in cloud and advanced cloud topics.',
            ],
            'Skills' => [
                'The ability to design and implement cloud based solutions.',
                'Have an understanding of enterprise systems and eCommerce systems.',
                'The ability to manage and secure cloud environments.',
                'The ability to apply DevOps practices in cloud computing.'
            ],
            'Career_Opportunities' => [
                'Cloud Architect', 
                'DevOps Engineer', 
                'Data Engineer', 
                'Cloud Engineer', 
                'SAP Business analyst',
                'IT Consultant'
            ],
            'video_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Bachelor of Science in Data Analytics',
            'description' => 'Data Analytics focuses on data science and extracting and understanding insights from datasets',
            'duration' => '4 years',
            'Study_Plan' => [
                'Year 1' => 'Building the fundamentals of IT such as programming, databases, networking and mathematics.',
                'Year 2' => 'Develop a strong understanding of data structures, alghorithms, analysis of systems and databases development.',
                'Year 3' => 'Learn about data visualization, Automation of business processes, integrate with front-end and server side technologies and machine learning.',
                'Year 4' => 'Have a deeper learning experience in data analytics and how to use generative AI for data insights'
            ],
            'Skills' => [
                'The ability to analyze and interpret data to extract insights.',
                'Have an understanding of data visualization techniques and be able to create effective visual representations of data.',
                'The ability to apply machine learning algorithms tehcniques.' 
                
            ],
            'Career_Opportunities' => [
                'Data Analyst',
                'Business Analyst',
                'Data Manager',
                'Machine Learning Specialist',
                'Technology Analyst',
                'Software Developer'
            ],
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