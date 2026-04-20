<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { //will be fed to the DB
         \DB::table('universities')->insert([ 
            [   'name' => 'Bahrain Polytechnic', 
                'overview'=>'Bahrain Polytechnic is a government university that is located in Isa Town, it is focused on providing professional education to prepare students for the work environment', 
                'requirements' => 'To be accepted in Bahrain Polytechnic the applicant must pass the initial admissions test which examines Maths and English levels, then if passed they need to provide IELTS with a minimum of 4 for foundation admissions or 4.5 for undergraduate admissions or equivalent ', 
                'University_fees' => '2 BHD per credit for Bahraini students. A full time student takes 60 credits per semester therefore 120BD.', 
                'available_scholarships' => 'Fee exemption for students in need', 
                'created_at' => now(),
                'Updated_at' => now(), 
                'image' => 'images/poly2.jpg' 
            ],
            [   'name' => 'Royal College of Surgeons in Ireland', 
                'overview'=>'RCSI Bahrain is a private university located in Muharraq, it is specialized in providing high quality healthcare education including medicine and nursing programs.', 
                'requirements' => ' Applicant must demonstrate strong academic performance and provide IELTS score of at least 6.5 overall. Relevant experience in healthcare settings and voluntary experience is required.', 
                'University_fees' => ' Medicine: 14,900 BHD/year  (Bahraini students), 18,600 BHD  (Non-Bahraini students). Nursing: 4,500 BHD/year  (Bahraini students),  5,700  (Non-Bahraini students)', 'available_scholarships' => 'RCSI offers merit based scholerships. Medicine Scholarships provides up to  one-third disscount on tution fees, while Nursing scholarship covers the gull tuitoin fees. Applocats must meet a high academic requirements, submit a 200 word essay and attend an interview.', 
                'available_scholarships' => 'RCSI offers merit based scholerships. Medicine Scholarships provides up to  one-third disscount on tution fees, while Nursing scholarship covers the gull tuitoin fees. Applocats must meet a high academic requirements, submit a 200 word essay and attend an interview.', 
                'created_at' => now(),
                'Updated_at' => now(), 
                'image' => 'images/RCSI2.jpg' 
            ],
            [
                'name' => 'Gulf University', 
                'overview'=>'Gulf university is a private university located in Sanad, it is focused on providing a flexible schedule to give an opportunity for employees to complete their studies.', 
                'requirements' => ' Applicant must take an initial admission tests, it has a flexible acceptance policy.', 
                'University_fees' => ' Fees defers depending on the major. A 100 BHD/Hour or 180BHD/Hour.', 
                'available_scholarships' => 'Gulf University provides a GPA-Based scholarships that offers tuition fee discounts. Students must maintain a GPA more than 2.33, Scholarships apply to credit hour fees only and do not cover additional costs such as application or exam fees.',
                'created_at' => now(),
                'updated_at' => now(), 
                'image' => 'images/GULF.jpg'
            ],
            [
                'name' => 'University of Technology', 
                'overview'=>'UTB is a private university previously known as AMA and is located in Salmabad.', 
                'requirements' => ' Applicant must take an initial admission test, an IELTS score of 5.0 or its equivalent and a minimum GPA of 60%.', 
                'University_fees' => 'Tuition fees: 75 BHD per credit. Registration fees: 50 BHD/semester. Technology Fees: 30 BHD/semester.', 
                'available_scholarships' => 'UTB provides three scholarships. First is a GPA-Based scholarships that offers tuition fee discounts up to 30% the GPA must stay 3.5 and above. Second is a corporate based for the staff and their children and it goes up to 25%. Third is athletics scholarships and it is determined after the universities approval.',
                'created_at' => now(),
                'updated_at' => now(), 
                'image' => 'images/UTB2.jpg' 
            ], 
            [
                'name' => 'American University of Bahrain', 
                'overview'=>'The American University of Bahrain is a private university ans is located in Riffa, it is a comprehensive purpose-built, American-model co-educational University. The university offers a holistic educational experience for students and a unique curriculum that fosters interaction and collaboration among students, faculty, and the professional community.', 
                'requirements' => 'Applicants can be accepted with full, conditional, or provisional admission, depending on their academic background and the documents they send in. To get full admission, you have to meet all of the academic and document requirements. You can get conditional admission until you send in the missing documents. Students who show promise but may need to finish foundation or English programs can get provisional admission. Applicants must send in a high school transcript, proof of English proficiency, and any other documents that are needed.', 
                'University_fees' => 'Tuition fees: 200 BHD per credit. Students activities fees: 110 BHD/semester. Technology Fees: 50 BHD/semester. Seat reservation deposit: 600 BHD/semester and it is deduced from the tuition fees.', 
                'available_scholarships' => 'AUBH offers a range of scholarships, such as full scholarships for top Bahraini students, academic scholarships based on GPA, and talent-based awards for leadership, sports, or community service. The school also gives discounts to siblings and alumni scholarship for their students who wish to finish their masters. Depending on eligibility and performance, scholarship coverage can be anywhere from partial to full tuition.',
                'created_at' => now(),
                'updated_at' => now(), 
                'image' => 'images/AUBH2.jpg'
            ]

         ]);

        
    }
}
