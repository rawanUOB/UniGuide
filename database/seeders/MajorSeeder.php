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
        $BP = \App\Models\University::where('name', 'Bahrain Polytechnic')->firstOrFail();
        $ICT = $BP->colleges()->where('name', 'School of ICT')->firstOrFail(); //so that if the college is not found the system will not crash. 
        $majors = [
            [
                'name' => 'Bachelor of Cybersecurity',
                'description' => 'Cybersecurity in Bahrain Polytechnic is focused on protecting the network, digital systems and data from cyber threats
            The students will start learning core IT foundations such as programming, learning about systems and databases then they will dive into 
            cybersecurity topics such as ethical hacking, and defenses. 
            The program follows a hands-on project based approach that prepares students for real world challenges.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Will focus on building a foundational skills in mathematics, programming, computer systems, networking and database.',
                    'Year 2' => 'Will give an  introduction to information security, web designs and applied IT projects.',
                    'Year3' => 'Focus on advanced IT and cybersecurity topics such as ethical hacking, AI, threat intelligence and defense strategies.',
                    'Year 4' => 'Focuses on the graduation project, real world cybersecurity problems and industry based learning experience ',
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
                    'Year 1' => 'Focuses on building an IT foundation skills in computer systems, programming, databases, networks, operating systems and 
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
                'video_link' => 'Videos/programPoly.mp4',
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
                'video_link' => '/Videos/networkPoly.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Science in Cloud Computing and Information Systems',
                'description' => 'Cloud computing focuses on cloud architecture, enterprise systems, DevOps and cloud based solutions.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Focuses on developing a strong IT fundamentals for the students.',
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
                'video_link' => '/Videos/cloudPoly.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Science in Data Analytics',
                'description' => 'Data Analytics focuses on data science and extracting and understanding insights from datasets',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Building the fundamentals of IT such as programming, databases, networking and mathematics.',
                    'Year 2' => 'Develop a strong understanding of data structures, algorithms, analysis of systems and databases development.',
                    'Year 3' => 'Learn about data visualization, Automation of business processes, integrate with front-end and server side technologies and machine learning.',
                    'Year 4' => 'Have a deeper learning experience in data analytics and how to use generative AI for data insights'
                ],
                'Skills' => [
                    'The ability to analyze and interpret data to extract insights.',
                    'Have an understanding of data visualization techniques and be able to create effective visual representations of data.',
                    'The ability to apply machine learning algorithms techniques.'

                ],
                'Career_Opportunities' => [
                    'Data Analyst',
                    'Business Analyst',
                    'Data Manager',
                    'Machine Learning Specialist',
                    'Technology Analyst',
                    'Software Developer'
                ],
                'video_link' => '/Videos/analyticsPoly.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        //so if the major already exists it will update it not duplicate it: 
        foreach ($majors as $major) {
            $ICT->majors()->updateOrCreate(['name' => $major['name']], $major);
        }

        $SoB = $BP->colleges()->where('name', 'School of Business')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Digital and Social Media Marketing',
                'description' => 'Digital and Social Media Marketing is about learning how to prompt an idea, a service or a product using the social media platforms. Students will learn how to create content, understand the audience behavior, use the data to improve the marketing and run online campaigns, this major combines creativity, analysis, technology and communication in order to help a business to reach their target audience ',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Will focus on building the fundamental knowledges in business and marketing. ',
                    'Year 2' => 'Will focus on learning how to create digital content, what are the laws related to business , branding and how can a business use data for their benefits ',
                    'Year3' => 'Will be more focused on social media strategies and online marketing and advertisement ',
                    'Year 4' => 'Focus on more advanced digital marketing, strategies, gain practical experience and work on real project.',
                ],
                'Skills' =>
                [
                    'The ability to create an engaging content for online and social media platforms',
                    'Gain an understanding of how to promote products online.',
                    'The ability to analyze the audience behavior and improve the marketing strategies accordingly. '
                ],
                'Career_Opportunities' =>
                [
                    'Social Media Marketing Manager',
                    'SEO Executive',
                    'Content Marketer',
                    'Public relations Excusive',
                    'Marketing Analytics Analysis',
                    'Digital Marketing Manager',
                    'Entrepreneur',
                    'Social Media Specialist'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Business Management',
                'description' => 'Business management is about learning how organizations and companies work and how to precisely lead people, plan business strategies and make decisions in order to reach a business goal. The students will learn how to manage teams, how to solve problems, improve the business performance and organize project effectively. This major focuses on understanding business growth, leadership and communication..',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Build the basic business knowledge in business, finance, economics, management and communication skills.',
                    'Year 2' => 'Develop an understanding in business law, accounting, data analysis and research methods.',
                    'Year3' => 'Build an understanding of leadership, organizational behavior and organizational management. ',
                    'Year 4' => 'Learn about strategic management, development on enterprises and how to improve the quality in a work space.  ',
                ],
                'Skills' =>
                [
                    'The ability to manage teams and lead people and organizations.',
                    'The ability to analyze, plan and manage projects.',
                    'The understanding of how businesses operate and grows.'
                ],
                'Career_Opportunities' =>
                [
                    'Entry Level Consultant',
                    'Data Analyst',
                    'Management Consultant',
                    'Project Manager',
                    'Business Manager',
                    'General Manager'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of  Marketing',
                'description' => 'Marketing is about having an understanding of what people need and want, and then finding the best way to promote it. Students will learn how can a business attract customers, build a brand and create advertisement. This major combines business thinking, data analysis and creativity.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Basic introductions to finance, marketing, economics and fundamentals of business.',
                    'Year 2' => 'Dive into accounting, research methods, business laws and analytics.',
                    'Year3' => 'Advances on digital marketing, marketing researches, and create marketing campaigns.',
                    'Year 4' => 'Develop an advanced digital marketing, planning and management and work on real industry projects.',
                ],
                'Skills' =>
                [
                    'The ability to understand customers need and behaviors.',
                    'Build an understanding of branding and how can a business build its image.',
                    'Skills in creating and managing marketing campaigns and advertisements.',
                    'The ability to analyze and use data to make decisions.',
                ],
                'Career_Opportunities' =>
                [
                    'Marketing Manager',
                    'Digital Marketing Executive',
                    'Brand Manager',
                    'Product Manager',
                    'Marketing Coordinator',
                    'Public Relations Executive',
                    'SEO Executive',
                    'Entrepreneur'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Human Resource Management',
                'description' => 'Human Resource (HR) Management, focuses on managing the people within an organization, it teaches how companies hire employees, support their development, manage employers performance and create a positive work environment. Students will learn how to build a balance between the needs of employees and the organization, to ensure that both can grow together.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Build the basic understandings of business such as economics, finance and marketing.',
                    'Year 2' => 'Develop an understanding of business operations, human resource basics and research methods.',
                    'Year3' => 'Focuses on HR specializations such as employee relations, leadership and talent management. ',
                    'Year 4' => 'Learn about advanced HR strategies like performance management, HR strategies, international HR management and contemporary issues in HR.',
                ],
                'Skills' =>
                [
                    'Understanding how to effectively manage and support employees within an organization.',
                    'The ability to train and develop talent.',
                    'Develop a strong communication skills.',
                    'Have an understanding of laws, regulations, ethics and professional standards  related to business.',
                ],
                'Career_Opportunities' =>
                [
                    'HR manager',
                    'HR Consultant',
                    'Training Manager',
                    'Employee Relations Specialist'

                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($majors as $major) {
            $SoB->majors()->updateOrCreate(['name' => $major['name']], $major);
        }

        $SoLM = $BP->colleges()->where('name', 'School of Logistics and Maritime Studies')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of International Logistics Management',
                'description' => 'International Logistics Management focuses on how goods and services are moving around the world. It teaches how the products are stored, transported and delivered efficiently. Students will learn how the global supply chains work, and how the products will reach the right place at the right time in a cost effective way.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of logistics and supply chain , transport systems and geography.',
                    'Year 2' => 'Develop the knowledge in areas like  transportation methods, logistic operations and laws of transportations ',
                    'Year3' => 'Focuses on managing logistics operations, passenger transport, research methods and urban transport. ',
                    'Year 4' => 'Study advanced topics such as airport management, the use of AI in logistics, data analysis, transport communication, sustainability and finish an industry based project.',
                ],
                'Skills' =>
                [
                    'Develop an understanding of how global supply chains and transportation systems work.',
                    'Develop the ability to manage the movements of products effectively.',
                    'Knowledge of logistics technologies and data analysis tools.',
                    'Have an awareness on sustainability and environmental issues in transport.',
                ],
                'Career_Opportunities' =>
                [
                    'Logistics Manger',
                    'Warehouse Supervisor',
                    'Airport and Airfreight Operations Manager',
                    'Military Enforcer',
                    'Policy and Planning Development Manager',
                    'Container Inspector',
                    'Maritime , Port or Aviation Security'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Science in Supply Chain Management',
                'description' => 'Supply Chain Management focuses on how products are created, moved and delivered from the source to the customer. It teaches how businesses manage the flow of goods, information and resources, from raw materials to finished products. Students learn how to plan, organize and improve processes like purchasing, production, transportation and delivery to make sure everything runs efficiently and reaches customers on time.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of logistics, supply chain and business concepts.',
                    'Year 2' => 'Build a knowledge in transportation systems and supply chain operations.',
                    'Year3' => 'Focuses on procurement, manufacturing planning, logistics management and research methodologies.',
                    'Year 4' => 'Focus on advanced topics such as risk management, AI in supply chain, data analysis and completing an industry based project.',
                ],
                'Skills' =>
                [
                    'Understanding how supply chain operates starting from production to delivery.',
                    'The ability to plan and manage inventory, logistics and procurement processes.',
                    'Develop the knowledge of data analysis and modern technologies in the supply chain field.',
                    'Have the ability to mange arising risks and adapt to the supply chain challenges.',
                ],
                'Career_Opportunities' =>
                [
                    'Supply Chain Manager',
                    'Procurement Manger',
                    'Operations Manager',
                    'Inventory Controller'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($majors as $major) {
            $SoLM->majors()->updateOrCreate(['name' => $major['name']], $major);
        }


        $SoAF = $BP->colleges()->where('name', 'School of Accounting and Finance')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Science in Financial Technology',
                'description' => 'Financial Technology focuses on how technology is used to improve and automate financial services. It combines finance, business and computer technology to create faster, safer and more efficient ways to manage money. Students learn how digital systems like online banking, mobile payments, cryptocurrencies and financial apps work and how to build and improve these systems for modern businesses and users.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of  business, economics, finance and computer systems.',
                    'Year 2' => 'Build a knowledge in programming, databases, information security, business analysis and financial technology.',
                    'Year3' => 'Focuses advanced topics like data mining, cloud computing, corporate finance an investment management. ',
                    'Year 4' => 'Focuses on blockchain, cryptocurrencies, financial risk management and an industry based project.',
                ],
                'Skills' =>
                [
                    'Develop an understanding of how the financial system and technology works together.',
                    'Have a basic programming knowledge.',
                    'Develop the ability to analyze financial data and build digital financial solutions.',
                    'Develop a problem solving skill in the financial and technology enviroment.',
                ],
                'Career_Opportunities' =>
                [
                    'FinTech Analyst',
                    'FinTech Product Manager',
                    'FinTech Software Developer',
                    'Blockchain Developer',
                    'Compliance Expert',
                    'Financial Analyst'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Accounting in Business',
                'description' => 'Accounting is about understanding the money flow in a business. It teaches you how companies record their income and expenses, manage budgets and make financial decisions. Students learn how to track money, prepare financial reports and understand how businesses stay profitable and organized.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of business such as management, marketing, communication skills and economics ',
                    'Year 2' => 'Build a strong knowledge in accounting, information systems, business laws, research methods and data analysis',
                    'Year3' => 'Focus on Accounting topics such as financial accounting, taxation, accounting systems and cost accounting',
                    'Year 4' => 'Study more advanced topics including auditing, financial management and work on a real world industry project.',
                ],
                'Skills' =>
                [
                    'Develop an understanding of how money flows in the business',
                    'Develop the skill of how to prepare and read financial reports.',
                    'Learn how to use accounting tools and softwares.',
                    'The ability to communicate financial informations clearly.',
                ],
                'Career_Opportunities' =>
                [
                    'Cost Accountant',
                    'Financial Accountant',
                    'System Accountant',
                    'CFO (Chief Finance Officer)',
                    'CEO',
                    'Financial Analysis',
                    'Auditor (Internal or External)',
                    'Business Consultant'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Banking and Finance',
                'description' => 'Banking and Finance is about how money is managed in banks, companies and markets. It teaches you how people and businesses save, invest, borrow and grow their money. Students learn how banks work, how investments are made and how to make smart financial decisions',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of business like management, economics and marketing.',
                    'Year 2' => 'Build a knowledge in accounting, finance, data analysis and business law.',
                    'Year3' => 'Focuses on financial topics such as corporate finance, money and banking, investment and financial risks.',
                    'Year 4' => 'Focus on advanced topics such as international finance, derivatives, financial markets and work on a real world industry project.',
                ],
                'Skills' =>
                [
                    'Understanding how banks and financial systems work.',
                    'Learn how to manage and invest on money.',
                    'Develop the ability to analyze market trends and financial data.',
                    'Have a strong understanding of financial risks and how to manage them properly.',
                ],
                'Career_Opportunities' =>
                [
                    'Investment banker',
                    'Stock broker',
                    'Corporate treasury',
                    'Risk Analyst',
                    'Financial Analyst',
                    'Financial manager'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($majors as $major) {
            $SoAF->majors()->updateOrCreate(['name' => $major['name']], $major);
        }

        $SoCM = $BP->colleges()->where('name', 'School of Creative Media')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Web Media',
                'description' => 'Web Media focuses on creating and managing websites, online experience and digital content. It combines business, design and technology. The student will build modern websites and digital platforms used in e-commerce.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Develop the basic understanding of web development, eMarketing, internet and multimedia.',
                    'Year 2' => 'Focus on building and developing technical and creative skills such as content management,  mobile web development and animation.',
                    'Year3' => 'Study advanced topics such as user experience, web marketing and human computer interactions.',
                    'Year 4' => 'Work on advanced interactive applications, ecommerce, web media and  cooperative project.',
                ],
                'Skills' =>
                [
                    'Have the ability to design and develop a modern responsive website.',
                    'Learn how to understand and build a website based on the user experience.',
                    'The ability to work with eCommerce platforms',
                    'The ability to create animations and interactive media.',
                ],
                'Career_Opportunities' =>
                [
                    'Web Designer',
                    'User Interface Designer',
                    'User Experience Designer',
                    'Gen AI Creative Content Specialist',
                    'E-Commerce Consultant',
                    'eBusiness Entrepreneur',
                    'Digital Marketing Specialist',
                    'Search Engine Marketing Expert'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Film and Animation',
                'description' => 'Film and Animation is about creating movies, videos and animated content. It teaches you how to tell stories using visuals, sound and motion. Students learn filming, editing, animation and audio production to create content for movies, social media, games and more.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of the process of film making, animation and audio production.',
                    'Year 2' => 'Focus on building technical skills in screenwriting, storytelling, 3D animation and visual design, while also building an understanding on film industry(the history of cinematic arts).',
                    'Year3' => 'Advance more in animation, sound and film making and also work on real projects.',
                    'Year 4' => 'Focus on advanced productions like character animation and directing and also complete a senior project that shows your skills and understanding.',
                ],
                'Skills' =>
                [
                    'Develop the storytelling skills and how to communicate your ideas visually.',
                    'develop sound design skills.',
                    'The ability to edit ad create videos and films.',
                    'An understanding of animation techniques such as 2D and 3D.',
                ],
                'Career_Opportunities' =>
                [
                    'Video producer',
                    'Filmmaker',
                    'Cinematographer',
                    'Director',
                    'Producer',
                    'Audio Engineer',
                    'Sound designer',
                    'Character Designer and Animator'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Arts in Animation and Visual Effects',
                'description' => 'Animation and Visual Effects is about creating animated content and special effects used in movies, games and digital media. It teaches you how to design characters, create 2D and 3D animations and add visual effects like explosions or fantasy scenes using computer software.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of animation, audio production and filmmaking.',
                    'Year 2' => 'Build storytelling, 3D modelling an character design skills, while also developing an understanding of how the media and film industry works.',
                    'Year3' => 'Focus on advanced topics in visual effects and animation such as special effects, cinematography ,digital environment and 3D animation.',
                    'Year 4' => 'Learn hot topics such as virtual reality(VR), augmented reality (AR) and finish your final year project.',
                ],
                'Skills' =>
                [
                    'Develop skills in visual effects for games and movies.',
                    'The ability to design digital environments.',
                    'Understand creative visual communication.',
                    'An understanding of animation techniques such as 2D and 3D.',
                ],
                'Career_Opportunities' =>
                [
                    'Producer',
                    'Graphic Designer',
                    'AR & VR content Creator',
                    'Technical Director'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($majors as $major) {
            $SoCM->majors()->updateOrCreate(['name' => $major['name']], $major);
        }

        $SoE = $BP->colleges()->where('name', 'School of Engineering')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Mechanical Engineering',
                'description' => 'Mechanical Engineering is about designing, building and improving machines and systems we use every day. It teaches you how things like engines, air conditioning systems, machines and tools work. Students learn how to solve real-world problems by creating efficient and practical mechanical solutions.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of Engineering such as physics, mathematics and basic concepts of engineering.',
                    'Year 2' => 'Build knowledge in mechanics, materials, thermodynamics and how machines work.',
                    'Year3' => 'Focus on applying engineering skills in manufacturing, control systems and real world problem solving.',
                    'Year 4' => 'Focus on advanced topics such as heat transfer, machine design, energy systems and complete a senior project.',
                ],
                'Skills' =>
                [
                    'The ability to design mechanical components and systems.',
                    'An understanding on how the machines and mechanical systems function.',
                    'The ability to use engineering softwares and tools.',
                    'Develop critical thinking in an engineering environments.',
                ],
                'Career_Opportunities' =>
                [
                    'Mechanical Engineer',
                    'Industrial process engineer',
                    'Reliability and Maintenance engineering',
                    'Mechanical manufacturing',
                    'Computer-aided manufacturing'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Electronics Engineering',
                'description' => 'Electronics Engineering is about designing and building electronic systems like circuits, devices and communication systems. It teaches you how technologies like smartphones, computers and smart systems work. Students learn how to create and improve electronic solutions used in everyday life and modern industries.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of Engineering such as physics, mathematics and basic concepts of electrics and mechanics.',
                    'Year 2' => 'Build knowledge in electronic circuits, digital systems, Automatic controls and signals.',
                    'Year3' => 'Focus on advanced topics such as telecommunications, embedded systems and electronics through working on practical projects.',
                    'Year 4' => 'Focus on specialized areas such as microcontrollers, Sustainability and complete a senior project.',
                ],
                'Skills' =>
                [
                    'The ability to design mechanical components and systems.',
                    'An understanding on how the machines and mechanical systems function.',
                    'The ability to use engineering softwares and tools.',
                    'Develop critical thinking in an engineering environments.',
                ],
                'Career_Opportunities' =>
                [
                    'Electronics Engineer',
                    'Work in Petrochemical Industry',
                    'Design of hardware and software embedded systems',
                    'computer-aided design (CAD) for the Electronics sector.'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Electrical Engineering',
                'description' => 'Electrical Engineering is about working with electricity, power systems and electrical equipment used in homes, buildings and industries. It teaches you how electricity is generated, transmitted and used safely. Students learn how to design and manage electrical systems like power grids, machines and automation systems.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of Engineering such as physics, mathematics and basic concepts of electricity.',
                    'Year 2' => 'Build knowledge in circuits, digital systems, electrical machines and basic automation control systems.',
                    'Year3' => 'Focus on PLC programming, practical applications, signals and electronics.',
                    'Year 4' => 'Focus on advanced topics such as electrical drives, power systems and also work on senior project.',
                ],
                'Skills' =>
                [
                    'The ability to manage and design electrical installations and systems',
                    'An understanding on how machines and electrical power systems function.',
                    'The ability to use engineering softwares and tools.',
                    'Develop problem solving skills for engineering challenges.',
                ],
                'Career_Opportunities' =>
                [
                    'Power System Engineer',
                    'Electrical Engineer',
                    'Automation Engineer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Electromechanical Engineering',
                'description' => 'Electromechanical Engineering combines electrical and mechanical engineering. It focuses on systems that use both electricity and mechanical parts like robots, machines and automated systems. Students learn how to design, build and maintain systems used in industries such as manufacturing, energy and robotics',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of Engineering such as physics, mathematics and basic concepts of both electricity and mechanics.',
                    'Year 2' => 'Build knowledge in circuits, thermodynamics, fluid mechanics,  machines and basic control systems.',
                    'Year3' => 'Focus on learning about advanced topics such as power electronics, electrical machines and system control and environmental sustainability.',
                    'Year 4' => 'Focus on specialized topics of the field such as heat transfer and power systems, and complete a senior project.',
                ],
                'Skills' =>
                [
                    'The ability to manage, design and maintain automated systems',
                    'An understanding of mechanical and electrical systems and the way they work together.',
                    'The ability to use engineering softwares and tools.',
                    'Develop problem solving skills for engineering challenges.',
                ],
                'Career_Opportunities' =>
                [
                    'Electromechanical Engineer',
                    'Robotics Engineer',
                    'Automation Engineer',
                    'Manufacturing Engineer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Communications and Networks Engineering',
                'description' => 'Communications and Networks engineering is about how devices connect and communicate with each other. It teaches you how the internet, mobile networks, Wi-Fi and communication systems work. Students learn how to design, build, and manage networks that allow people and systems to share information quickly and safely.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of Engineering such as mathematics, electrical and mechanical basics.',
                    'Year 2' => 'Build knowledge in circuits, data communication, signals, programming and computer system.',
                    'Year3' => 'Focus on communication systems, wireless technologies,signal processing and networking.',
                    'Year 4' => 'Focus on studying advanced topics such as advanced networking, telecommunication networks, microwave & optical communications and complete a final year project.',
                ],
                'Skills' =>
                [
                    'The ability to design and manage communication systems and computer networks.',
                    'An understanding on how communication systems and networks work.',
                    'The ability to analyze and troubleshoot issues related to network .',
                    'Develop problem solving skills for technical problems.',
                ],
                'Career_Opportunities' =>
                [
                    'Network Engineer',
                    'Network Administrator',
                    'IT Specialist',
                    'Wireless Communication Engineer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Chemical and Industrial Processes Engineering',
                'description' => 'Chemical and Industrial Processes engineering is about how raw materials are turned into useful products. It teaches you how industries like oil, gas, food and manufacturing produce things safely and efficiently. Students learn how to design and improve processes that turn chemicals into everyday products we use.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of engineering including mathematics, chemistry and physics.',
                    'Year 2' => 'Build knowledge in chemical concepts, energy & material balance and basic industry processes.',
                    'Year3' => 'Focus on fluid mechanics, chemical processes and heat transfer.',
                    'Year 4' => 'Focus on studying advanced topics such as sustainability, reaction engineering and complete the final year projetc.',
                ],
                'Skills' =>
                [
                    'The ability to analyze and improve safety in chemical processes.',
                    'An understanding on how chemical systems work.',
                    'Develop problem skills in solving technical problems.',
                ],
                'Career_Opportunities' =>
                [
                    'Chemical Engineer',
                    'Plant Administrator',
                    'Energy Engineer',
                    'Quality control Engineer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Civil Engineering',
                'description' => 'Civil engineering is about designing and building the world around us. It teaches you how to create structures like buildings, roads, bridges and water systems. Students learn how to plan, design and manage construction projects to make sure they are safe, strong and efficient.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of Engineering such as physics and mathematics.',
                    'Year 2' => 'Build knowledge in engineering drawing, mechanics, construction material and surveying.',
                    'Year3' => 'Focus on civil centered topics such as hydraulics, water systems, structures and transportation engineering.',
                    'Year 4' => 'Focus on advanced topics such as geotechnical engineering,  steel design and complete a graduation project.',
                ],
                'Skills' =>
                [
                    'The ability to ensure safety in construction work.',
                    'An understanding on how infrastructures and buildings are designed and built.',
                    'The ability to use engineering tools.',
                    'The ability to analyze and solve construction and engineering problems.',
                ],
                'Career_Opportunities' =>
                [
                    'Civil Engineer',
                    'Site Engineer',
                    'Geotechnical Engineer',
                    'Construction Manager',
                    'Water resources Engineer',
                    'Site Engineer',
                    'Marine Engineer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of  Industrial Instrumentation and Automatic Control Engineering',
                'description' => 'Industrial Instrumentation and Automatic Control is about how machines and systems are monitored and controlled in industries. It teaches you how factories, power plants and production systems run automatically using sensors and control systems. Students learn how to design, manage, and maintain systems that keep machines working safely and efficiently.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of Engineering such as physics and mathematics.',
                    'Year 2' => 'Build knowledge in electronics, measurement systems, circuits and basic control systems.',
                    'Year3' => 'Focus on topics such as embedded systems, Industrial Communications and signals and systems .',
                    'Year 4' => 'Focus on advanced topics such as advanced sensors and actuators, digital signal processing  and work on a project.',
                ],
                'Skills' =>
                [
                    'The ability to design and manage control systems.',
                    'An understanding on how automated systems work.',
                    'The ability to work with sensors and electronic devices.',
                    'The ability to program an use automation tools.',
                ],
                'Career_Opportunities' =>
                [
                    'Instrument Maintenance engineering Engineer',
                    'Industrial process engineering Engineer',
                    'Analytical Instrumentation Specialist',
                    'Power plants instrumentation Engineer',
                    'Control Room Operator'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of  Renewable and Clean Energy Engineering',
                'description' => 'Renewable and Clean Energy engineering is about creating energy in ways that are safe for the environment. It teaches you how energy from sources like the sun, wind and other clean resources is produced and used. Students learn how to design and improve systems that generate energy without harming the planet.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of Engineering such as physics and mathematics.',
                    'Year 2' => 'Build knowledge in electrical systems, energy basics and sustainable energy concepts.',
                    'Year3' => 'Focus on renewable energy systems such as wind and solar systems as well as energy conversion  and  storage systems.',
                    'Year 4' => 'Focus on advanced topics in energy systems, sustainability and finish a graduation project',
                ],
                'Skills' =>
                [
                    'The ability to design and manage clean energy solutions.',
                    'An understanding on how renewable energy systems function.',
                    'The ability to analyze energy systems.',
                    'The ability to solve world problems with renewable energy.',
                ],
                'Career_Opportunities' =>
                [
                    'Solar Energy Engineer',
                    'Wind Energy Technician',
                    'Sustainable Energy Project Manager',
                    'Renewable Energy Systems Designer',
                    'Bioenergy Specialist',
                    'Smart Grid Engineer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of  Industrial Design and Process  Engineering',
                'description' => 'Industrial Design and Process engineering focuses on improving how products are designed and how systems work in industries. It teaches you how to make processes faster, cheaper, safer and more efficient. Students learn how factories, companies and systems operate and how to design better products while considering people, technology and the 
            environment.',
                'duration' => '4 years',
                'Study_Plan' =>
                [
                    'Year 1' => 'Learn the basics of Engineering such as physics and mathematics.',
                    'Year 2' => 'Build knowledge in manufacturing processes, engineering graphics ,material, design and basics of probability and statistics.',
                    'Year3' => 'Focus on industrial systems  designs, operations research and Industrial safety engineering.',
                    'Year 4' => 'Focus on advanced topics such as AI in engineering, 3D printing, production planning,  aerodynamics in industrial design and submitting a graduation project.',
                ],
                'Skills' =>
                [
                    'The ability to design products and production systems.',
                    'An understanding on how industrial systems and processes function.',
                    'The ability to use engineering tools such as CAD.'
                ],
                'Career_Opportunities' =>
                [
                    'Project Planning Engineer',
                    'Plant Engineer',
                    'Occupational Health and Safety engineer',
                    'Marketing Engineer',
                    'Energy Efficiency Engineer',
                    'Occupational Health and Safety Engineer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($majors as $major) {
            $SoE->majors()->updateOrCreate(['name' => $major['name']], $major);
        }

        $RCSI = \App\Models\University::where('name', 'Royal College of Surgeons in Ireland')->firstOrFail();
        $SoM = $RCSI->colleges()->where('name', 'School of Medicine')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Medicine',
                'description' => 'Medicine at RCSI Bahrain is focused on preparing students to become highly skilled doctors through a globally recognized program. Students gain strong foundations in biomedical sciences, clinical knowledge, and patient care from early stages. The program emphasizes hands-on clinical experience, communication skills, professionalism, and 
            real-world healthcare environments. Graduates receive internationally recognized degrees from RCSI and the National University of Ireland, allowing global career opportunities.',
                'duration' => '5 to 6 years',
                'Study_Plan' =>
                [
                    'Foundation Year' => 'Gives an introduction to biomedical sciences, chemistry, human biology and basic medical concepts. Not all students go through a foundation year.',
                    'Year 1' => 'Will focus on basic biochemistry, anatomy, pharmacology and an introduction to disease mechanisms with cases based learning.',
                    'Year 2' => 'Will focus on developing communication, diagnostic skills and an understanding of major diseases and body systems.',
                    'Year3' => 'Students will start clinical learning in hospitals, do research projects and will learn evidence-based medicine and public health, year 3 will not consist of 2 semesters, it will be delivered from September to May.',
                    'Year 4' => 'The study will be in the form of  clinical rotation  in various of areas such as surgery, Ophthalmology, ENT, psychiatry, family medicine, genecology and pediatrics',
                    'Year 5' => 'For the year the student will be working in a medicine and surgery rotation for 24 weeks, then they need to fulfil a sub-internship.',
                ],
                'Teaching_Methods' =>
                [
                    'Case-Based Learning (CBL)',
                    'Small group sessions',
                    'Clinical placements in hospitals',
                    'Simulation and practical labs'
                ],

                'Assessment_Methods' =>
                [
                    'MCQ exams',
                    'OSCE (clinical exams)',
                    'Coursework and research projects',
                    'Continuous assessment and GPA system'
                ],

                'Skills' =>
                [
                    'Excellent communication and patient interaction abilities.',
                    'Develop diagnostic and clinical decision making skills.',
                    'Develop the ability to work under pressure.',
                    'Have a high level of professionalism, ethics and responsibility.',
                ],
                'Career_Opportunities' =>
                [
                    'Medical Doctor (Family Doctor)',
                    'Medical Consultant',
                    'Healthcare Administrator',
                    'Clinical Researcher'
                ],
                'video_link' => 'Videos/MedicineRCSI.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($majors as $major) {
            $SoM->majors()->updateOrCreate(['name' => $major['name']], $major);
        };
        $SoN = $RCSI->colleges()->where('name', 'School of Nursing')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Nursing ',
                'description' => 'Nursing at RCSI Bahrain prepares students to become compassionate, skilled and professional nurses through a globally recognized program. Students develop strong clinical, communication and patient care skills through a combination of academic learning and hands-on clinical placements. The program emphasizes teamwork, leadership, ethical 
            practice and real-world healthcare experience.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Focuses introducing nursing fundamentals, physiology, communication and anatomy with early clinical placement.',
                    'Year 2' => 'Will focus on public health, nursing care, infection control, older persons health care, special needs and will continue with clinical training.',
                    'Year3' => 'Consist of advanced nursing practices such as maternal care, adult health, child and adolescent health, and critical care with clinical placement, also will learn ethics and legal issues.',
                    'Year 4' => 'Focuses full clinical immersion, standardized practice, and preparation for a professional nursing career.',
                ],
                'Teaching_Methods' => [
                    'Lectures and interactive sessions',
                    'Case-based learning',
                    'Simulation and skills laboratories',
                    'Supervised clinical placements in hospitals',
                    'Small group learning and practical sessions'
                ],

                'Assessment_Methods' => [
                    'Multiple-choice questions (MCQ)',
                    'Short-answer exams',
                    'Objective Structured Clinical Examination (OSCE)',
                    'Projects and assignments',
                    'Oral presentations',
                    'Clinical evaluation reports'
                ],
                'Skills' => [
                    'Patient care and clinical skills.',
                    'Develop strong communication and teamwork skills.',
                    'The ability to work for long hours and under pressure.',
                    'Have an understanding of ethics and patient safety and privacy.'
                ],
                'Career_Opportunities' => [
                    'Clinical Nurse specialist',
                    'Community Health Nurse',
                    'Nurse Educator',
                ],
                'video_link' => 'Videos/NursingRCSI.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($majors as $major) {
            $SoN->majors()->updateOrCreate(['name' => $major['name']], $major);
        };

        $GU = \App\Models\University::where('name', 'Gulf University')->firstOrFail();
        $CoE = $GU->colleges()->where('name', 'College of Engineering')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor in Interior Design Engineering',
                'description' => 'Interior Design Engineering combines creativity with engineering to design functional, safe and visually appealing indoor spaces. Students learn how to design interiors while understanding construction, materials, lighting, acoustics and building systems. The program mixes art, design, and technology to prepare students for real-world 
            interior and architectural projects with a focus on sustainability and modern design practices.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Will focus on building the fundamental knowledges in design, engineering basics, mathematics, materials and communication skills.',
                    'Year 2' => 'Will introduce interior design studios, construction materials, design history and digital design tools, with more focused practical projects.',
                    'Year3' => 'Will be more focused on advanced interior design, building systems, sustainability, lighting and detailed design projects.',
                    'Year 4' => 'Focus on graduation project, interior detailing, furniture design, professional practice and applying all learned skills in real world scenarios.',
                ],
                'Skills' =>
                [
                    'Develop creative thinking and design skills',
                    'Gain an understanding of construction materials and building systems.',
                    'The ability to design functional and aesthetic interior spaces.',
                    'The ability to use design software and digital tools.'
                ],
                'Career_Opportunities' =>
                [
                    'Interior Design Engineer',
                    'Exhibition Designer',
                    'Interior Project Manager',
                    'Furniture and Product Designer'
                ],
                'video_link' => 'Videos/interiorGU.mp4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Mechanical Engineering',
                'description' => 'Mechanical Engineering focuses on designing, building and improving machines and mechanical systems used in everyday life. Students learn how to apply physics, mathematics and materials science to develop solutions for real-world engineering problems. The program combines theory with hands-on practical work in labs and workshops, preparing students to work in industries such as manufacturing, energy, automotive and more, with a focus on innovation and sustainability.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Focuses on building a strong foundation in mathematics, engineering basics and general university skills before entering the core program.',
                    'Year 2' => 'Will introduce basic engineering concepts such as design, mathematics, material science, thermo-fluid and electrical principles.',
                    'Year3' => 'Will be more focused on advanced topics such as solid mechanics, control systems, engineering design and advanced mathematics, with practical project applications ',
                    'Year 4' => 'Focus on graduation project, and choose advanced topics to study such as manufacturing, fluid mechanics corrosion engineering and mechanisms and machines.',
                ],
                'Skills' =>
                [
                    'The ability to design and analyze mechanical systems.',
                    'Gain an understanding of engineering materials and manufacturing processes.',
                    'The ability to design functional and aesthetic interior spaces.',
                    'The ability to use engineering software and simulation tools.'
                ],
                'Career_Opportunities' =>
                [
                    'Mechanical Engineer',
                    'Manufacturing Engineer',
                    'Aerospace Engineer',
                    'Automotive Engineer',
                    'Energy or Renewable Energy Engineer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Electrical and Electronic Engineering',
                'description' => 'Electrical and Electronic Engineering focuses on designing, developing and improving electrical systems and electronic devices used in everyday life. Students learn how electricity works, how to build circuits, and how to work with systems like control systems, embedded systems and communication technologies. The program combines theory with hands-on lab work, preparing students to work in industries such as energy, telecommunications, automation and technology, with a focus on innovation and sustainability.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Focuses on building a strong foundation in mathematics, engineering basics, physics and an introduction to electrical systems and engineering design.',
                    'Year 2' => 'Will introduce core electrical and electronic concepts such as programming, curcuits, engineering design and computer systems with practical project applications.',
                    'Year3' => 'Will be more focused on advanced topics such as microprocessors, control systems, electronics, electromagnetism design and advanced mathematics, with more practical project applications ',
                    'Year 4' => 'Focus on graduation project, and  advanced topics to study such as embedded systems and signal processing',
                ],
                'Skills' =>
                [
                    'The ability to design and analyze electrical and electronic systems.',
                    'Gain an understanding of circuits, embedded systems and control systems.',
                    'The ability to design functional and aesthetic interior spaces.',
                    'The ability to use engineering software and simulation tools.',
                    'Understanding of basic programming.'
                ],
                'Career_Opportunities' =>
                [
                    'Electrical Engineer',
                    'Electronics Engineer',
                    'Telecommunication Engineer',
                    'Automation Engineer',
                    'Power System Engineer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]

        ];
        foreach ($majors as $major) {
            $CoE->majors()->updateOrCreate(['name' => $major['name']], $major);
        };

        $AGU = \App\Models\University::where('name', 'Arabian Gulf University')->firstOrFail();
        $CMHS = $AGU->colleges()->where('name', 'College of Medicine & Health Sciences')->firstOrFail();
        $majors = [
            [
                'name' => 'Doctor of Medicine',
                'description' => 'Doctor of Medicine at Arabian Gulf University prepares students to become professional doctors through strong medical education and clinical training. The program focuses on biomedical sciences, patient care, communication skills, and real healthcare practice. Students gain knowledge in human body systems, disease prevention, diagnosis, and treatment to prepare them for medical careers.',
                'duration' => '6 years',
                'Study_Plan' => [
                    'Phase I (Year 1)' => 'Students study basic sciences including English, Social Sciences, Islam & Medical Ethics, Psychology, Computer Sciences, Human Biology, Medical Physics, Biochemistry, and Biostatistics. The phase prepares students for self-directed learning, communication skills, medical ethics, and scientific evaluation.',
                    'Phase II (Years 2-4)' => 'The curriculum is based on integrated organ/system units using Problem-Based Learning (PBL) through small group tutorials and self-directed learning. Units include Respiratory System, Cardiovascular, Gastrointestinal and Renal, Endocrine & Reproductive, Immune System, Musculo-Skeletal, CNS and Multisystem Integration. Students who complete this phase receive a B.Sc. degree.',
                    'Phase III (Years 5-6)' => 'Students complete supervised clinical training in hospitals and healthcare centers. Clinical rotations include Pediatrics, Obstetrics/Gynecology, Internal Medicine, General Surgery, Family Medicine, Psychiatry, Ophthalmology, and ENT. Teaching methods include bedside teaching, outpatient clinics, clinical problem solving, workshops, seminars, and clinical simulations.',
                ],
                'Teaching_Methods' => [
                    'Problem-Based Learning (PBL)',
                    'Small group tutorials',
                    'Self-directed learning',
                    'Bedside teaching',
                    'Clinical problem solving sessions',
                    'Teaching in outpatient clinics',
                    'Teaching rounds and departmental seminars',
                    'Workshops',
                    'Computer-based case simulations',
                    'Clinical teaching in hospitals and primary health care centers'
                ],
                'Assessment_Methods' => [
                    'Problem-Based Learning (PBL) assessment',
                    'Written examinations',
                    'Clinical examinations',
                    'Professional skills assessment',
                    'Continuous assessment',
                    'Clinical performance evaluation',
                    'Case discussions and presentations',
                    'Assessment during clinical rotations',
                    'Simulation-based assessment'
                ],
                'Skills' => [
                    'Clinical and diagnostic skills',
                    'Problem solving and critical thinking skills',
                    'Communication and patient interaction skills',
                    'Professional and ethical medical practice',
                    'Self-directed learning skills',
                    'Teamwork and collaboration skills',
                    'Clinical decision-making skills',
                    'Research and scientific evaluation skills',
                    'Physical examination and history taking skills',
                    'Community healthcare and patient management skills'
                ],
                'Career_Opportunities' => [
                    'Medical Doctor (Family Doctor)',
                    'Medical Consultant',
                    'Healthcare Administrator',
                    'Clinical Researcher'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor of Science in Nursing',
                'description' => 'Bachelor of Science in Nursing at Arabian Gulf University prepares students to become qualified nurses with strong knowledge in patient care, health sciences, and clinical practice. The program focuses on nursing skills, communication, ethics, patient safety, and practical healthcare training.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Students study basic nursing concepts, English courses, anatomy, physiology, biochemistry, medical terminology, and computer skills.',
                    'Year 2' => 'Students study pathophysiology, microbiology, pharmacology, health assessment, nutrition, and medical-surgical nursing with clinical practice.',
                    'Year 3' => 'The programme focuses on advanced nursing subjects including pediatric nursing, maternity nursing, critical care nursing, and nursing research.',
                    'Year 4' => 'Students study mental health nursing, community health nursing, nursing leadership and management, and complete clinical training and graduation practicum.'
                ],
                'Teaching_Methods' => [
                    'Interactive lectures',
                    'Flipped learning sessions',
                    'Small group sessions',
                    'Student-led seminars',
                    'Practical sessions in basic sciences labs',
                    'Simulation-based training sessions',
                    'Clinical placements in healthcare facilities',
                    'Interprofessional sessions with medical and health professions students',
                    'Blended learning',
                    'E-learning through Learning Management System (LMS)'
                ],
                'Assessment_Methods' => [
                    'Written examinations',
                    'Practical examinations',
                    'Clinical performance evaluation',
                    'Assignments and projects',
                    'Oral presentations',
                    'Continuous assessment'
                ],
                'Skills' => [
                    'Clinical competency and patient care skills',
                    'Critical thinking and problem-solving skills',
                    'Professional communication skills',
                    'Leadership and teamwork skills',
                    'Ethical and professional nursing practice',
                    'Research and evidence-based practice skills',
                    'Cultural competence and compassionate care'
                ],
                'Career_Opportunities' => [
                    'Clinical Nurse',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        foreach ($majors as $major) {
            $CMHS->majors()->updateOrCreate(['name' => $major['name']], $major);
        };

        $RUW = \App\Models\University::where('name', 'Royal University for Women')->firstOrFail();

        $Art = $RUW->colleges()->where('name', 'College of Art & Design')->firstOrFail();
        $majors =
            [
                [
                    'name' => 'Bachelor of Arts in Fashion Design',
                    'description' => 'The Fashion Design programme prepares students for careers in the fashion industry through courses in fashion illustration, garment construction, pattern making, applied design, accessory design, and fashion presentation.',
                    'duration' => '4 years',
                    'Study_Plan' =>
                    [
                        'Year 1' => 'Introduces students to art, design principles, drawing, and basic fashion concepts.',
                        'Year 2' => 'Focuses on textiles, pattern making, fashion illustration, and garment construction.',
                        'Year 3' => 'Students develop advanced fashion design skills, creative projects, and industry knowledge.',
                        'Year 4' => 'Focuses on final fashion projects, portfolio development, and preparation for professional work.',

                    ],

                    'Teaching_Methods' =>
                    [
                        'Lectures',
                        'Studio work',
                        'Practical projects',
                        'Workshops',
                        'Portfolio development'
                    ],
                    'Assessment_Methods' =>
                    [
                        'Design projects',
                        'Coursework',
                        'Presentations',
                        'Portfolio assessment',
                        'Practical work'
                    ],
                    'Skills' =>
                    [
                        'Creative fashion design skills.',
                        'Textile and material understanding.',
                        'Garment construction and pattern making.',
                        'Portfolio and presentation skills.',
                    ],
                    'Career_Opportunities' =>
                    [
                        'Fashion Designer',
                        'Fashion Stylist',
                        'Textile Designer',
                        'Fashion Consultant'
                    ],
                    'video_link' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Bachelor of Arts in Graphic Design',
                    'description' => 'This programme prepares students for careers as practitioners in the media design industries. Students develop skills in typography, illustration, branding, digital media, motion graphics, photography, and visual communication.',
                    'Study_Plan' => [
                        'Year 1' => 'Introduces design principles, drawing, visual communication, and basic digital tools.',
                        'Year 2' => 'Focuses on typography, layout design, branding, and digital media.',
                        'Year 3' => 'Students work on advanced graphic design projects, advertising, and visual identity.',
                        'Year 4' => 'Focuses on professional portfolio development, final projects, and career preparation.',
                    ],
                    'Teaching_Methods' =>
                    [
                        'Lectures',
                        'Practical labs',
                        'Studio work',
                        'Design projects',
                        'Workshops'
                    ],
                    'Assessment_Methods' =>
                    [
                        'Design projects',
                        'Assignments',
                        'Presentations',
                        'Portfolio assessment',
                        'Coursework'

                    ],
                    'Skills' => [

                        'Visual communication skills.',

                        'Digital design and branding skills.',

                        'Creative problem solving.',

                        'Typography and layout design skills.',

                    ],
                    'Career_Opportunities' =>
                    [
                        'Graphic Designer',
                        'Brand Designer',
                        'UI/UX Designer',
                        'Digital Designer'
                    ],
                    'video_link' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Bachelor of Arts in Interior Design',
                    'description' => 'The Interior Design programme prepares students to work as professional interior designers through courses in interior illustration, construction technology, computer drafting, and space planning.',
                    'duration' => '4 years',
                    'Study_Plan' =>
                    [
                        'Year 1' => 'Introduces design basics, drawing, space concepts, and visual presentation.',
                        'Year 2' => 'Focuses on materials, lighting, furniture, drafting, and interior design principles.',
                        'Year 3' => 'Students work on advanced interior design projects and real space planning.',
                        'Year 4' => 'Focuses on final design projects, portfolio development, and professional preparation.',
                    ],

                    'Teaching_Methods' =>
                    [
                        'Studio work',
                        'Lectures',
                        'Practical projects',
                        'Workshops',
                        'Site-based learning'

                    ],
                    'Assessment_Methods' =>
                    [
                        'Design projects',
                        'Presentations',
                        'Coursework',
                        'Portfolio assessment',
                        'Practical work'
                    ],

                    'Skills' =>
                    [
                        'Space planning skills.',
                        'Creative interior design skills.',
                        'Material and lighting selection.',
                        'Technical drawing and presentation skills.',
                    ],
                    'Career_Opportunities' =>
                    [
                        'Interior Designer',
                        'Space Planner',
                        'Design Consultant',
                        'Furniture Designer',
                    ],
                    'video_link' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ];
        foreach ($majors as $major) {
            $Art->majors()->updateOrCreate(['name' => $major['name']], $major);
        };

        $Business = $RUW->colleges()->where('name', 'College of Business and Law')->firstOrFail();
        $majors = [
            [
                'name' => 'Banking & Finance',
                'description' => 'The Banking and Finance programme provides students with the theoretical framework and analytical tools required to handle a variety of finance, banking, and business functions. The programme prepares students for careers within corporations, financial institutions, and investment sectors.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces business, accounting, economics, and basic finance concepts.',
                    'Year 2' => 'Focuses on banking, financial management, and business law basics.',
                    'Year 3' => 'Students study investment, risk management, and financial analysis.',
                    'Year 4' => 'Focuses on advanced finance topics, projects, and preparation for professional careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Case studies',
                    'Group projects',
                    'Presentations',
                    'Business simulations'
                ],
                'Assessment_Methods' => [
                    'Exams',
                    'Assignments',
                    'Projects',
                    'Presentations',
                    'Case study analysis'
                ],
                'Skills' => [
                    'Financial analysis skills.',
                    'Banking and investment knowledge.',
                    'Decision making skills.',
                    'Analytical and problem solving skills.',
                ],
                'Career_Opportunities' => [
                    'Bank Officer',
                    'Financial Analyst',
                    'Investment Advisor',
                    'Finance Manager'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'International Business',
                'description' => 'This major provides students with a solid basic business education and a specific understanding of the international dimensions of business. Emphasis is placed on international economic factors and institutions including trade, financing, exchange rates, development, and government policies.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces business, management, economics, and communication skills.',
                    'Year 2' => 'Focuses on marketing, accounting, business law, and international business basics.',
                    'Year 3' => 'Students study global trade, international management, and business strategy.',
                    'Year 4' => 'Focuses on advanced international business projects and career preparation.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Case studies',
                    'Group work',
                    'Projects',
                    'Presentations'
                ],
                'Assessment_Methods' => [
                    'Exams',
                    'Assignments',
                    'Projects',
                    'Presentations',
                    'Case studies'
                ],
                'Skills' => [
                    'International business knowledge.',
                    'Communication and teamwork skills.',
                    'Strategic thinking.',
                    'Problem solving in business situations.',
                ],
                'Career_Opportunities' => [
                    'Business Manager',
                    'International Business Officer',
                    'Marketing Executive',
                    'Business Consultant'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Human Resource Management',
                'description' => 'Human Resource Management introduces students to the variety of programmes managed by a human resources department. The programme focuses on recruitment, employee development, organisational behaviour, communication, and workplace performance management.',
                'Study_Plan' => [
                    'Year 1' => 'Introduces business, management, communication, and basic HR concepts.',
                    'Year 2' => 'Focuses on organizational behavior, recruitment, and employee development.',
                    'Year 3' => 'Students study training, performance management, and employment relations.',
                    'Year 4' => 'Focuses on strategic HR management, projects, and preparation for HR careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Case studies',
                    'Role plays',
                    'Group projects',
                    'Presentations'
                ],
                'Assessment_Methods' => [
                    'Exams',
                    'Assignments',
                    'Projects',
                    'Presentations',
                    'Case study analysis'
                ],
                'Skills' => [
                    'Communication and leadership skills.',
                    'Recruitment and employee management skills.',
                    'Conflict resolution skills.',
                    'Organizational planning skills.',
                ],
                'Career_Opportunities' => [
                    'HR Officer',
                    'Recruitment Specialist',
                    'Training Coordinator',
                    'HR Manager'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing',
                'description' => 'The Marketing programme prepares students for the fast-paced and exciting field of marketing. Students develop an understanding of customer needs, product and service development, consumer behaviour, strategic marketing, and integrated marketing communications.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces business, management, communication, and marketing basics.',
                    'Year 2' => 'Focuses on consumer behavior, advertising, and market research.',
                    'Year 3' => 'Students study branding, digital marketing, and marketing strategy.',
                    'Year 4' => 'Focuses on advanced marketing projects, campaigns, and career preparation.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Case studies',
                    'Marketing projects',
                    'Group work',
                    'Presentations'
                ],
                'Assessment_Methods' => [
                    'Exams',
                    'Assignments',
                    'Marketing projects',
                    'Presentations',
                    'Campaign analysis'
                ],
                'Skills' => [
                    'Marketing and branding skills.',
                    'Communication and presentation skills.',
                    'Market research skills.',
                    'Creative thinking.',
                ],
                'Career_Opportunities' => [
                    'Marketing Executive',
                    'Brand Manager',
                    'Digital Marketing Specialist',
                    'Market Researcher'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'name' => 'Bachelor of Law',
                'description' => 'The Bachelor of Law programme prepares students with legal knowledge, analytical thinking, legal research skills, and understanding of legal systems and professional legal practice.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces legal systems, legal principles, and basic law concepts.',
                    'Year 2' => 'Focuses on public law, private law, and legal research skills.',
                    'Year 3' => 'Students study advanced legal topics, contracts, and legal procedures.',
                    'Year 4' => 'Focuses on legal practice, research projects, and preparation for law careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Case studies',
                    'Legal research',
                    'Discussions',
                    'Presentations'
                ],
                'Assessment_Methods' => [
                    'Exams',
                    'Legal research papers',
                    'Assignments',
                    'Presentations',
                    'Case analysis'
                ],
                'Skills' => [
                    'Legal research and writing skills.',
                    'Critical thinking skills.',
                    'Communication and argumentation skills.',
                    'Understanding of legal responsibilities.',
                ],
                'Career_Opportunities' => [
                    'Lawyer',
                    'Legal Advisor',
                    'Legal Researcher',
                    'Compliance Officer'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];



        foreach ($majors as $major) {
            $Business->majors()->updateOrCreate(['name' => $major['name']], $major);
        };
        $Eng = $RUW->colleges()->where('name', 'College of Engineering and Technology')->firstOrFail();
        $majors = [
            [
                'name' => 'BSc in Architecture',
                'description' => 'Architecture at Royal University for Women prepares students to design buildings and spaces using creative, technical, and environmental knowledge. The program focuses on architectural design, drawing, construction, materials, space planning, and design presentation. Students develop the skills needed to work on real architectural projects.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces architectural design, drawing, basic design principles, and visual communication.',
                    'Year 2' => 'Focuses on building materials, construction, space planning, and architectural history.',
                    'Year 3' => 'Students work on advanced architectural design projects and technical drawings.',
                    'Year 4' => 'Focuses on final design projects, portfolio development, and professional preparation.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Studio work',
                    'Design projects',
                    'Practical workshops',
                    'Site visits'
                ],
                'Assessment_Methods' => [
                    'Design projects',
                    'Presentations',
                    'Technical drawings',
                    'Coursework',
                    'Portfolio assessment'
                ],
                'Skills' => [
                    'Architectural design skills.',
                    'Technical drawing and model making.',
                    'Space planning and problem solving.',
                    'Creative and visual presentation skills.',
                ],
                'Career_Opportunities' => [
                    'Architect',
                    'Architectural Designer',
                    'Urban Planning Assistant',
                    'Design Consultant'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BSc in Digital Media and Interactive Technology',
                'description' => 'Digital Media and Interactive Technology at Royal University for Women prepares students to work with digital content, interactive media, and technology-based design. The program focuses on digital media production, interactive systems, web design, multimedia, and creative technology solutions.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces digital media, basic programming, design principles, and technology tools.',
                    'Year 2' => 'Focuses on web design, multimedia production, and interactive media concepts.',
                    'Year 3' => 'Students study advanced digital media, interactive systems, and creative technology projects.',
                    'Year 4' => 'Focuses on final projects, portfolio development, and preparation for digital media careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Computer labs',
                    'Practical projects',
                    'Workshops',
                    'Group work'
                ],
                'Assessment_Methods' => [
                    'Projects',
                    'Assignments',
                    'Presentations',
                    'Practical assessment',
                    'Portfolio assessment'
                ],
                'Skills' => [
                    'Digital media production skills.',
                    'Web and interactive design skills.',
                    'Creative technology skills.',
                    'Problem solving and teamwork skills.',
                ],
                'Career_Opportunities' => [
                    'Digital Media Designer',
                    'Web Designer',
                    'Interactive Media Developer',
                    'Multimedia Specialist'
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $Eng->majors()->updateOrCreate(['name' => $major['name']], $major);
        };

        $AU = \App\Models\University::where('name', 'Ahlia University')->firstOrFail();

        $Arts = $AU->colleges()->where('name', 'College of Arts and Sciences')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Mass Communication and Public Relations',
                'description' => 'The Bachelor of Mass Communication and Public Relations programme prepares students with communication, media, and public relations skills. The programme focuses on media production, public communication, journalism, digital media, and professional communication practices.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces communication basics, media studies, writing skills, and public relations foundations.',
                    'Year 2' => 'Focuses on journalism, media production, public communication, and digital media skills.',
                    'Year 3' => 'Students study advanced public relations, media campaigns, research methods, and practical projects.',
                    'Year 4' => 'Focuses on graduation projects, work placement, and preparation for media and PR careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Media projects',
                    'Case studies',
                    'Practical training',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Assignments',
                    'Media projects',
                    'Presentations',
                    'Practical work',
                ],
                'Skills' => [
                    'Communication skills',
                    'Media writing',
                    'Public relations skills',
                    'Research skills',
                    'Teamwork',
                ],
                'Career_Opportunities' => [
                    'Public Relations Officer',
                    'Media Specialist',
                    'Journalist',
                    'Content Creator',
                    'Communication Officer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Bachelor of Arts in English Language and Translation',
                'description' => 'The Bachelor of Arts in English Language and Translation programme develops students’ language, translation, communication, and analytical skills. The programme focuses on English linguistics, literature, translation techniques, and professional communication.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces English language skills, reading, writing, grammar, and translation basics.',
                    'Year 2' => 'Focuses on linguistics, literature, translation techniques, and professional communication.',
                    'Year 3' => 'Students study advanced translation, editing, interpreting, and research methods.',
                    'Year 4' => 'Focuses on translation projects, professional practice, and preparation for language careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Translation practice',
                    'Reading activities',
                    'Writing tasks',
                    'Group discussions',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Translation assignments',
                    'Presentations',
                    'Research projects',
                    'Class participation',
                ],
                'Skills' => [
                    'Translation skills',
                    'English communication',
                    'Writing skills',
                    'Editing and proofreading',
                    'Research skills',
                ],
                'Career_Opportunities' => [
                    'Translator',
                    'Interpreter',
                    'English Teacher',
                    'Content Writer',
                    'Editor',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Bachelor Degree in Interior Design',
                'description' => 'The Interior Design programme prepares students with creative and technical design skills in space planning, furniture design, construction technology, and interior visualisation. Students develop professional design and presentation abilities through practical and theoretical learning.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces space, form, colour, light, drawing skills, and interior design foundations.',
                    'Year 2' => 'Focuses on materials, finishes, construction methods, furniture design, and design software.',
                    'Year 3' => 'Students study advanced interior design, building codes, business practices, and design projects.',
                    'Year 4' => 'Focuses on final research, final design project, electives, and professional portfolio preparation.',
                ],
                'Teaching_Methods' => [
                    'Studio work',
                    'Lectures',
                    'Design projects',
                    'Practical workshops',
                    'Presentations',
                ],
                'Assessment_Methods' => [
                    'Design projects',
                    'Portfolio assessment',
                    'Presentations',
                    'Assignments',
                    'Practical work',
                ],
                'Skills' => [
                    'Space planning',
                    'Creative design',
                    'Technical drawing',
                    'Using design software',
                    'Presentation skills',
                ],
                'Career_Opportunities' => [
                    'Interior Designer',
                    'Furniture Designer',
                    'Design Consultant',
                    '3D Visualizer',
                    'Project Coordinator',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $Arts->majors()->updateOrCreate(['name' => $major['name']], $major);
        };

        $Business = $AU->colleges()->where('name', 'College of Administrative and Financial Sciences')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Banking and Finance',
                'description' => 'The Banking and Finance programme prepares students with knowledge and analytical skills in banking systems, financial management, investment, and financial markets. The programme focuses on financial decision making and professional business practices.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces business foundations, accounting, economics, and basic finance concepts.',
                    'Year 2' => 'Focuses on banking, financial management, investment, and financial markets.',
                    'Year 3' => 'Students study digital banking, risk management, public finance, and banking regulations.',
                    'Year 4' => 'Focuses on portfolio management, graduation projects, practical training, and banking careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Case studies',
                    'Projects',
                    'Simulations',
                    'Practical training',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Assignments',
                    'Projects',
                    'Presentations',
                    'Practical tasks',
                ],
                'Skills' => [
                    'Banking knowledge',
                    'Financial analysis',
                    'Risk management',
                    'Decision-making',
                    'Using financial tools',
                ],
                'Career_Opportunities' => [
                    'Banking Officer',
                    'Financial Analyst',
                    'Investment Officer',
                    'Risk Officer',
                    'Finance Officer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Bachelor of Accounting and Financial Science',
                'description' => 'The Accounting and Financial Science programme develops students’ skills in accounting principles, auditing, taxation, financial analysis, and business reporting. Students gain knowledge required for professional accounting careers.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces accounting principles, business foundations, economics, and financial basics.',
                    'Year 2' => 'Focuses on bookkeeping, financial accounting, managerial accounting, and business finance.',
                    'Year 3' => 'Students study auditing, investment, portfolio management, and international accounting.',
                    'Year 4' => 'Focuses on advanced finance, practical training, projects, and preparation for accounting careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Projects',
                    'Case studies',
                    'Field trips',
                    'Practical training',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Assignments',
                    'Projects',
                    'Presentations',
                    'Practical accounting tasks',
                ],
                'Skills' => [
                    'Accounting skills',
                    'Financial analysis',
                    'Auditing skills',
                    'Decision-making',
                    'Using accounting software',
                ],
                'Career_Opportunities' => [
                    'Accountant',
                    'Auditor',
                    'Financial Analyst',
                    'Investment Officer',
                    'Banking Officer',
                    'Financial Manager',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Bachelor of Management and Marketing',
                'description' => 'The Management and Marketing programme prepares students with business management, marketing, leadership, and communication skills. The programme focuses on marketing strategies, organisational management, and consumer behaviour.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces business foundations, management principles, marketing basics, and communication skills.',
                    'Year 2' => 'Focuses on consumer behaviour, marketing strategies, organisational management, and business applications.',
                    'Year 3' => 'Students study project management, service marketing, e-commerce, and research methods.',
                    'Year 4' => 'Focuses on graduation projects, practical training, and preparation for management and marketing careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Case studies',
                    'Projects',
                    'Group work',
                    'Practical training',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Assignments',
                    'Projects',
                    'Presentations',
                    'Case study analysis',
                ],
                'Skills' => [
                    'Marketing skills',
                    'Management skills',
                    'Communication skills',
                    'Analytical thinking',
                    'Teamwork',
                ],
                'Career_Opportunities' => [
                    'Marketing Officer',
                    'Sales Manager',
                    'Brand Executive',
                    'Business Manager',
                    'Customer Relations Officer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Bachelor of Economics and Finance',
                'description' => 'The Economics and Finance programme provides students with knowledge in economics, financial systems, investment, and market analysis. Students develop analytical and decision-making skills for financial and economic sectors.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces economics, finance, accounting, mathematics, and business foundations.',
                    'Year 2' => 'Focuses on microeconomics, macroeconomics, financial management, and market analysis.',
                    'Year 3' => 'Students study monetary systems, investment, public finance, and economic research methods.',
                    'Year 4' => 'Focuses on financial forecasting, derivative securities, graduation projects, and finance careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Projects',
                    'Case studies',
                    'Simulations',
                    'Practical training',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Assignments',
                    'Projects',
                    'Presentations',
                    'Data analysis tasks',
                ],
                'Skills' => [
                    'Economic analysis',
                    'Financial analysis',
                    'Quantitative skills',
                    'Decision-making',
                    'Research skills',
                ],
                'Career_Opportunities' => [
                    'Economist',
                    'Financial Analyst',
                    'Investment Officer',
                    'Banking Officer',
                    'Market Analyst',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Bachelor of Management Information Systems',
                'description' => 'The Management Information Systems programme combines business and technology knowledge. Students learn information systems, database management, business analysis, and technology solutions used in organisations.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces business foundations, information technology, computer applications, and management basics.',
                    'Year 2' => 'Focuses on databases, systems analysis, business data, and information systems.',
                    'Year 3' => 'Students study project management, enterprise systems, e-commerce, and IT auditing.',
                    'Year 4' => 'Focuses on MIS projects, practical training, and preparation for business and IT careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Computer lab work',
                    'Case studies',
                    'Projects',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Practical tasks',
                    'Projects',
                    'Assignments',
                    'Presentations',
                ],
                'Skills' => [
                    'Systems analysis',
                    'Database skills',
                    'Business analysis',
                    'IT project management',
                    'Problem-solving',
                ],
                'Career_Opportunities' => [
                    'Business Analyst',
                    'Systems Analyst',
                    'IT Project Coordinator',
                    'ERP Specialist',
                    'Database Officer',
                ],

                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $Business->majors()->updateOrCreate(['name' => $major['name']], $major);
        };

        $Engineering = $AU->colleges()->where('name', 'College of Engineering')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Mobile and Network Engineering',
                'description' => 'The Mobile and Network Engineering programme prepares students with technical skills in mobile systems, networking technologies, communication systems, and network security. Students develop practical engineering and problem-solving skills.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces engineering foundations, mathematics, physics, programming, and computer basics.',
                    'Year 2' => 'Focuses on computer networks, electronics, communication systems, and network design.',
                    'Year 3' => 'Students study wireless communications, switching and routing, mobile programming, and network security.',
                    'Year 4' => 'Focuses on multimedia communications, major projects, practical training, and network engineering careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Laboratory work',
                    'Engineering projects',
                    'Practical training',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Lab reports',
                    'Projects',
                    'Assignments',
                    'Presentations',
                ],
                'Skills' => [
                    'Network design',
                    'Mobile systems knowledge',
                    'Problem-solving',
                    'Technical communication',
                    'Teamwork',
                ],
                'Career_Opportunities' => [
                    'Network Engineer',
                    'Mobile Systems Engineer',
                    'Telecommunications Engineer',
                    'Network Security Officer',
                    'IT Infrastructure Engineer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Bachelor of Computer and Communication Engineering',
                'description' => 'The Computer and Communication Engineering programme develops students’ knowledge in computer systems, communication technologies, electronics, and network engineering. The programme combines theoretical and practical engineering applications.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces mathematics, science, programming, and basic engineering principles.',
                    'Year 2' => 'Focuses on computer architecture, electronics, microprocessors, and communication systems.',
                    'Year 3' => 'Students study embedded systems, digital signal processing, networks, and engineering design.',
                    'Year 4' => 'Focuses on wireless communications, optical communications, major projects, and engineering careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Laboratory work',
                    'Engineering experiments',
                    'Projects',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Lab reports',
                    'Projects',
                    'Assignments',
                    'Presentations',
                ],
                'Skills' => [
                    'Engineering problem-solving',
                    'Computer systems knowledge',
                    'Communication systems skills',
                    'Technical analysis',
                    'Teamwork and leadership',
                ],
                'Career_Opportunities' => [
                    'Computer Engineer',
                    'Communication Engineer',
                    'Embedded Systems Engineer',
                    'Network Engineer',
                    'Telecommunications Engineer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $Engineering->majors()->updateOrCreate(['name' => $major['name']], $major);
        };

        $IT = $AU->colleges()->where('name', 'College of Information Technology')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Information Technology',
                'description' => 'The Information Technology programme prepares students with technical knowledge in programming, networking, databases, cybersecurity, and information systems. Students develop practical computing and technology skills.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces programming, computer systems, mathematics, and information technology foundations.',
                    'Year 2' => 'Focuses on databases, networking, web development, and software applications.',
                    'Year 3' => 'Students study cybersecurity, systems analysis, cloud services, and advanced IT projects.',
                    'Year 4' => 'Focuses on graduation projects, practical training, and preparation for IT careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Computer lab work',
                    'Practical projects',
                    'Case studies',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Practical tasks',
                    'Projects',
                    'Assignments',
                    'Presentations',
                ],
                'Skills' => [
                    'Programming skills',
                    'Database skills',
                    'Networking knowledge',
                    'Cybersecurity awareness',
                    'Problem-solving',
                ],
                'Career_Opportunities' => [
                    'IT Specialist',
                    'Software Developer',
                    'Database Administrator',
                    'Network Administrator',
                    'Cybersecurity Analyst',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Bachelor of Multimedia Systems',
                'description' => 'The Multimedia Systems programme prepares students to work in multimedia production, animation, digital media, and interactive systems. The programme focuses on creative and technical multimedia skills.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces multimedia basics, computer skills, design principles, and programming foundations.',
                    'Year 2' => 'Focuses on web design, web programming, graphic design, and multimedia production.',
                    'Year 3' => 'Students study human-computer interaction, 3D design, animation, video, and audio processing.',
                    'Year 4' => 'Focuses on graduation projects, portfolio development, and preparation for multimedia careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Computer lab work',
                    'Practical projects',
                    'Design workshops',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Practical projects',
                    'Assignments',
                    'Presentations',
                    'Portfolio assessment',
                    'Written exams',
                ],
                'Skills' => [
                    'Multimedia design',
                    'Web design',
                    'Animation skills',
                    'Video and audio editing',
                    'Creative problem-solving',
                ],
                'Career_Opportunities' => [
                    'Multimedia Designer',
                    'Web Designer',
                    'Animator',
                    'Graphic Designer',
                    'Video Editor',
                    'UI Designer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $IT->majors()->updateOrCreate(['name' => $major['name']], $major);
        };


        $Medical = $AU->colleges()->where('name', 'College of Medical and Health Sciences')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor of Science in Physiotherapy',
                'description' => 'The Bachelor of Science in Physiotherapy programme prepares students with professional clinical knowledge and practical physiotherapy skills. The programme focuses on rehabilitation, patient care, movement science, and physical therapy techniques.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces foundation health knowledge, basic physiotherapy concepts, and patient care skills.',
                    'Year 2' => 'Focuses on practice applications, movement science, rehabilitation, and clinical preparation.',
                    'Year 3' => 'Students begin advanced physiotherapy skills and clinical training in healthcare settings.',
                    'Year 4' => 'Focuses on supervised clinical training, professional practice, and preparation for physiotherapy careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Practical sessions',
                    'Clinical training',
                    'Case studies',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Practical exams',
                    'Clinical evaluation',
                    'Assignments',
                    'Presentations',
                ],
                'Skills' => [
                    'Patient care',
                    'Rehabilitation skills',
                    'Communication skills',
                    'Clinical problem-solving',
                    'Teamwork',
                ],
                'Career_Opportunities' => [
                    'Physiotherapist',
                    'Rehabilitation Specialist',
                    'Clinical Physiotherapist',
                    'Sports Physiotherapist',
                    'Healthcare Assistant',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Bachelor of Science in Nutrition and Dietetics',
                'description' => 'The Bachelor of Science in Nutrition and Dietetics programme prepares students with scientific knowledge in nutrition, diet planning, food science, and health promotion. Students develop professional skills in nutritional assessment and dietary management.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces health sciences, basic nutrition, food science, and general education courses.',
                    'Year 2' => 'Focuses on diet planning, food production, psychology, sociology, and nutrition foundations.',
                    'Year 3' => 'Students study nutritional assessment, clinical nutrition, community nutrition, and dietetics practice.',
                    'Year 4' => 'Focuses on nutrition projects, food analysis, healthcare ethics, and preparation for nutrition careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Practical sessions',
                    'Laboratory work',
                    'Case studies',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Practical exams',
                    'Projects',
                    'Assignments',
                    'Presentations',
                ],
                'Skills' => [
                    'Nutrition assessment',
                    'Diet planning',
                    'Health promotion',
                    'Food analysis',
                    'Communication skills',
                ],
                'Career_Opportunities' => [
                    'Dietitian',
                    'Nutritionist',
                    'Clinical Dietitian',
                    'Public Health Nutritionist',
                    'Food Service Manager',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $Medical->majors()->updateOrCreate(['name' => $major['name']], $major);
        };
        $ASU = \App\Models\University::where('name', 'Applied Science University')->firstOrFail();

        $CAS = $ASU->colleges()->where('name', 'College of Administrative Sciences')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor in Business Administration',
                'description' => 'The Bachelor in Business Administration programme is structured around clearly stated aims and learning outcomes that graduates are expected to achieve.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces business foundations, management principles, economics, and communication skills.',
                    'Year 2' => 'Focuses on marketing, accounting, human resource management, and business applications.',
                    'Year 3' => 'Students study strategic management, entrepreneurship, business analysis, and practical projects.',
                    'Year 4' => 'Focuses on graduation projects, practical training, and preparation for business careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Class discussions',
                    'Case studies',
                    'Group work',
                    'Applied projects',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Quizzes',
                    'Assignments',
                    'Presentations',
                    'Projects',
                ],
                'Skills' => [
                    'Business management skills',
                    'Decision-making skills',
                    'Communication and teamwork',
                    'Problem-solving skills',
                    'Entrepreneurial thinking',
                ],
                'Career_Opportunities' => [
                    'Business Analyst',
                    'Marketing Manager',
                    'Sales Manager',
                    'Project Manager',
                    'Operations Manager',
                    'Human Resources Manager',
                    'Entrepreneur',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor in Accounting and Finance',
                'description' => 'The Accounting and Finance programme covers core disciplines within Accounting and Finance. It is studied in English, full time, over 4 years with 135 credit hours and 45 courses.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces accounting principles, mathematics, economics, and business foundations.',
                    'Year 2' => 'Focuses on financial accounting, finance, auditing, and accounting systems.',
                    'Year 3' => 'Students study taxation, financial analysis, investment management, and advanced accounting topics.',
                    'Year 4' => 'Focuses on graduation projects, professional preparation, and careers in accounting and finance.',
                ],

                'Teaching_Methods' => [
                    'Lectures',
                    'Practical exercises',
                    'Case studies',
                    'Computer-based learning',
                    'Group projects',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Quizzes',
                    'Assignments',
                    'Practical tasks',
                    'Projects',
                ],
                'Skills' => [
                    'Accounting skills',
                    'Financial analysis',
                    'Auditing skills',
                    'Problem-solving',
                    'Using financial tools',
                ],
                'Career_Opportunities' => [
                    'Accountant',
                    'Financial Manager',
                    'Financial Analyst',
                    'Investment Banker',
                    'Auditor',
                    'Risk Manager',
                    'Tax Consultant',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor in Accounting',
                'description' => 'The Bachelor in Accounting programme is built in a structured format with clearly defined goals that are reflected through learning outcomes.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces accounting basics, business foundations, economics, and communication skills.',
                    'Year 2' => 'Focuses on financial accounting, cost accounting, and accounting information systems.',
                    'Year 3' => 'Students study auditing, taxation, financial reporting, and practical accounting applications.',
                    'Year 4' => 'Focuses on graduation projects, professional training, and preparation for accounting careers.',
                ],

                'Teaching_Methods' => [
                    'Lectures',
                    'Class discussions',
                    'Practical accounting exercises',
                    'Case studies',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Quizzes',
                    'Assignments',
                    'Practical tasks',
                    'Presentations',
                ],
                'Skills' => [
                    'Accounting knowledge',
                    'Financial reporting',
                    'Critical thinking',
                    'Communication skills',
                    'Decision-making skills',
                ],
                'Career_Opportunities' => [
                    'Financial Accountant',
                    'Auditor',
                    'Cost Accountant',
                    'Tax Accountant',
                    'Financial Analyst',
                    'Financial Controller',
                    'Budget Analyst',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor in Political Science',
                'description' => 'The Bachelor in Political Science is one of the bachelor programmes offered by Applied Science University within the College of Administrative Sciences.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces political science concepts, history, communication, and social science foundations.',
                    'Year 2' => 'Focuses on political systems, public policy, international relations, and research skills.',
                    'Year 3' => 'Students study diplomacy, political analysis, regional studies, and practical research projects.',
                    'Year 4' => 'Focuses on graduation projects, policy analysis, and preparation for political science careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Class discussions',
                    'Research tasks',
                    'Case studies',
                    'Presentations',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Research papers',
                    'Assignments',
                    'Presentations',
                    'Participation',
                ],
                'Skills' => [
                    'Political analysis',
                    'Research skills',
                    'Critical thinking',
                    'Communication skills',
                    'Understanding public policy',
                ],
                'Career_Opportunities' => [
                    'Policy Researcher',
                    'Political Consultant',
                    'International Relations Analyst',
                    'Diplomat',
                    'Strategic Analyst',
                    'Public Opinion Researcher',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor in Management Information Systems',
                'description' => 'The Management Information Systems programme is delivered in English and is one of the fast-growing disciplines in leading industries and the contemporary marketplace.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces information technology basics, business foundations, and computer applications.',
                    'Year 2' => 'Focuses on database systems, systems analysis, programming, and business technology applications.',
                    'Year 3' => 'Students study IT project management, e-business, enterprise systems, and practical MIS projects.',
                    'Year 4' => 'Focuses on graduation projects, practical training, and preparation for MIS and IT careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Computer lab work',
                    'Practical projects',
                    'Case studies',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Quizzes',
                    'Practical tasks',
                    'Projects',
                    'Presentations',
                ],
                'Skills' => [
                    'Systems analysis',
                    'Data management',
                    'IT project skills',
                    'Business analysis',
                    'Communication and teamwork',
                ],
                'Career_Opportunities' => [
                    'Business Analyst',
                    'IT Consultant',
                    'ERP Specialist',
                    'Systems Analyst',
                    'Database Manager',
                    'IT Project Manager',
                    'Data Analyst',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $CAS->majors()->updateOrCreate(['name' => $major['name']], $major);
        }

        $CAScience = $ASU->colleges()->where('name', 'College of Arts and Science')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor in Computer Science',
                'description' => 'The Department of Computer Science offers a well-structured academic programme designed to produce graduates who can contribute to developing the IT sector in Bahrain and the region.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces programming basics, mathematics, computer systems, and IT foundations.',
                    'Year 2' => 'Focuses on data structures, databases, software development, and networking concepts.',
                    'Year 3' => 'Students study advanced programming, artificial intelligence, cybersecurity, and system analysis.',
                    'Year 4' => 'Focuses on graduation projects, practical training, and preparation for careers in the IT field.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Computer lab work',
                    'Practical projects',
                    'Group work',
                    'Research activities',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Programming assignments',
                    'Projects',
                    'Presentations',
                    'Lab assessments',
                ],
                'Skills' => [
                    'Programming skills',
                    'Problem-solving',
                    'Database management',
                    'Software development',
                    'Teamwork and communication',
                ],
                'Career_Opportunities' => [
                    'Software Developer',
                    'Systems Analyst',
                    'Database Administrator',
                    'Web Developer',
                    'IT Specialist',
                    'Cybersecurity Analyst',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor in Graphic Design',
                'description' => 'The Graphic Design Programme is a professional programme member of the International Council of Design. It focuses on design skills and their applications in publications, multimedia, and computer technologies.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces design principles, drawing skills, colour theory, and digital design basics.',
                    'Year 2' => 'Focuses on typography, branding, multimedia design, and creative software applications.',
                    'Year 3' => 'Students study advanced graphic design, advertising, animation, and visual communication projects.',
                    'Year 4' => 'Focuses on portfolio development, graduation projects, and preparation for creative design careers.',
                ],
                'Teaching_Methods' => [
                    'Studio practice',
                    'Lectures',
                    'Practical workshops',
                    'Design projects',
                    'Group discussions',
                ],
                'Assessment_Methods' => [
                    'Design projects',
                    'Presentations',
                    'Portfolio assessment',
                    'Assignments',
                    'Practical exams',
                ],
                'Skills' => [
                    'Creative thinking',
                    'Digital design skills',
                    'Typography skills',
                    'Communication through design',
                    'Using design software',
                ],
                'Career_Opportunities' => [
                    'Graphic Designer',
                    'Brand Designer',
                    'Multimedia Designer',
                    'Art Director',
                    'UI/UX Designer',
                    'Creative Designer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bachelor in Interior Design',
                'description' => 'The Interior Design programme is a member of the International Federation of Interior Architects/Designers and the International Council of Design. It supports students in understanding human experience and how people interact in workplaces, homes, and public spaces.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces interior design principles, drawing skills, and understanding of spaces and materials.',
                    'Year 2' => 'Focuses on furniture design, CAD software, lighting, and space planning concepts.',
                    'Year 3' => 'Students study advanced interior projects, 3D visualisation, and commercial design applications.',
                    'Year 4' => 'Focuses on graduation projects, professional practice, and preparation for interior design careers.',
                ],
                'Teaching_Methods' => [
                    'Studio work',
                    'Lectures',
                    'Practical workshops',
                    'Projects',
                    'Site visits',
                ],
                'Assessment_Methods' => [
                    'Design projects',
                    'Portfolio assessment',
                    'Presentations',
                    'Assignments',
                    'Practical evaluations',
                ],
                'Skills' => [
                    'Creative design skills',
                    '3D visualization',
                    'Space planning',
                    'Problem-solving',
                    'Using design software',
                ],
                'Career_Opportunities' => [
                    'Interior Designer',
                    'Furniture Designer',
                    'Exhibition Designer',
                    '3D Visualizer',
                    'Design Consultant',
                    'Project Coordinator',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $CAScience->majors()->updateOrCreate(['name' => $major['name']], $major);
        }

        $Law = $ASU->colleges()->where('name', 'College of Law')->firstOrFail();
        $majors = [
            [
                'name' => 'Bachelor in Law',
                'description' => 'The Bachelor Programme in Law is offered in Arabic and supports the local and regional labour market for Law Bachelor degree holders in the government sector and private legal institutions. The programme study plan consists of 135 credit hours.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces legal principles, legal terminology, and basic law subjects.',
                    'Year 2' => 'Focuses on civil law, criminal law, and commercial law studies.',
                    'Year 3' => 'Students study international law, labour law, and practical legal applications.',
                    'Year 4' => 'Focuses on legal research, case analysis, and preparation for professional legal careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Case studies',
                    'Legal discussions',
                    'Research activities',
                    'Court simulations',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Research papers',
                    'Assignments',
                    'Presentations',
                    'Participation',
                ],
                'Skills' => [
                    'Legal analysis',
                    'Critical thinking',
                    'Research skills',
                    'Communication skills',
                    'Problem-solving',
                ],
                'Career_Opportunities' => [
                    'Lawyer',
                    'Legal Consultant',
                    'Public Prosecutor',
                    'Legal Researcher',
                    'Corporate Legal Advisor',
                    'Judge Assistant',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $Law->majors()->updateOrCreate(['name' => $major['name']], $major);
        }


        $Engineering = $ASU->colleges()->where('name', 'College of Engineering')->firstOrFail();
        $majors = [
            [
                'name' => 'B.Eng (Hons) Electrical and Electronic Engineering',
                'description' => 'The Electrical and Electronic Engineering programme equips students with a solid foundation in electrical principles, circuit analysis, power systems, electronics, and telecommunications.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces engineering mathematics, physics, electrical principles, and basic engineering skills.',
                    'Year 2' => 'Focuses on electrical circuits, electronics, laboratory work, and programming applications.',
                    'Year 3' => 'Students study power systems, telecommunications, control systems, and advanced engineering projects.',
                    'Year 4' => 'Focuses on graduation projects, industrial training, and preparation for engineering careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Laboratory work',
                    'Engineering projects',
                    'Practical training',
                    'Group work',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Lab reports',
                    'Projects',
                    'Assignments',
                    'Presentations',
                ],
                'Skills' => [
                    'Circuit analysis',
                    'Technical problem-solving',
                    'Engineering design',
                    'Programming skills',
                    'Teamwork',
                ],
                'Career_Opportunities' => [
                    'Electrical Engineer',
                    'Electronics Engineer',
                    'Telecommunications Engineer',
                    'Power Systems Engineer',
                    'Maintenance Engineer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'B.Eng (Hons) Mechanical Engineering',
                'description' => 'The Mechanical Engineering programme prepares students to design, analyse, and develop mechanical systems and components. It covers thermodynamics, fluid mechanics, materials science, and manufacturing processes.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces engineering foundations, mathematics, physics, and technical drawing skills.',
                    'Year 2' => 'Focuses on thermodynamics, mechanics, manufacturing processes, and laboratory applications.',
                    'Year 3' => 'Students study fluid mechanics, machine design, heat transfer, and engineering analysis projects.',
                    'Year 4' => 'Focuses on graduation projects, practical training, and preparation for mechanical engineering careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Laboratory work',
                    'Engineering projects',
                    'Practical training',
                    'Workshops',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Lab reports',
                    'Projects',
                    'Assignments',
                    'Presentations',
                ],
                'Skills' => [
                    'Mechanical design',
                    'Technical analysis',
                    'Problem-solving',
                    'Engineering calculations',
                    'Teamwork',
                ],
                'Career_Opportunities' => [
                    'Mechanical Engineer',
                    'Maintenance Engineer',
                    'Manufacturing Engineer',
                    'Production Engineer',
                    'Design Engineer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'B.Eng (Hons) Architectural Engineering',
                'description' => 'The Architectural Engineering programme emphasises environmental architecture, building and construction, energy efficient designs, construction project management, CAD and BIM skills, forensic engineering, and conservation.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces architectural drawing, engineering basics, design principles, and construction fundamentals.',
                    'Year 2' => 'Focuses on building construction, CAD and BIM software, environmental design, and technical applications.',
                    'Year 3' => 'Students study urban planning, sustainable architecture, project management, and advanced design projects.',
                    'Year 4' => 'Focuses on graduation projects, professional practice, and preparation for architectural engineering careers.',
                ],
                'Teaching_Methods' => [
                    'Studio work',
                    'Lectures',
                    'Design projects',
                    'Practical workshops',
                    'Site visits',
                ],
                'Assessment_Methods' => [
                    'Design projects',
                    'Assignments',
                    'Portfolio assessment',
                    'Presentations',
                    'Written exams',
                ],
                'Skills' => [
                    'Architectural design',
                    '3D modelling',
                    'Project management',
                    'Creative thinking',
                    'Technical drawing',
                ],
                'Career_Opportunities' => [
                    'Architectural Engineer',
                    'Construction Project Manager',
                    'Urban Designer',
                    'CAD Specialist',
                    'Building Consultant',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'B.Eng (Hons) Civil Engineering',
                'description' => 'The Civil Engineering programme is a dual award programme from Applied Science University and London South Bank University in the UK.',
                'duration' => '4 years',
                'Study_Plan' => [
                    'Year 1' => 'Introduces engineering mathematics, physics, construction basics, and technical drawing skills.',
                    'Year 2' => 'Focuses on structural analysis, surveying, hydraulics, and construction materials.',
                    'Year 3' => 'Students study transportation engineering, geotechnical engineering, and advanced civil engineering projects.',
                    'Year 4' => 'Focuses on graduation projects, field training, and preparation for civil engineering careers.',
                ],
                'Teaching_Methods' => [
                    'Lectures',
                    'Laboratory work',
                    'Field training',
                    'Engineering projects',
                    'Group discussions',
                ],
                'Assessment_Methods' => [
                    'Written exams',
                    'Lab reports',
                    'Assignments',
                    'Projects',
                    'Presentations',
                ],
                'Skills' => [
                    'Structural analysis',
                    'Engineering calculations',
                    'Project management',
                    'Technical problem-solving',
                    'Teamwork',
                ],
                'Career_Opportunities' => [
                    'Civil Engineer',
                    'Site Engineer',
                    'Structural Engineer',
                    'Construction Manager',
                    'Project Engineer',
                ],
                'video_link' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($majors as $major) {
            $Engineering->majors()->updateOrCreate(['name' => $major['name']], $major);
        }
    }
}
