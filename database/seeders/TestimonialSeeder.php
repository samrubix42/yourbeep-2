<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Karan Malhotra',
                'role' => 'VP of Engineering, InnovateTech',
                'content' => 'Alolika\'s session on Behavioural Signals was an eye-opener. I finally understood why my response to high-stress release cycles was always hyper-control. The practices have helped me lead with calm clarity.',
                'rating' => 5,
            ],
            [
                'name' => 'Anjali Subramanian',
                'role' => 'Leadership Coach & Consultant',
                'content' => 'Having worked in HR for 12 years, I thought I knew self-awareness. Behavioural Signal Intelligence goes deeper—it connects your physical nervous system response to your daily leadership actions.',
                'rating' => 5,
            ],
            [
                'name' => 'Rohan Sen',
                'role' => 'Co-Founder, YourCart',
                'content' => 'I used to constantly seek validation through overworking, leading to massive burnout. This masterclass taught me to recognize the early physiological signals and choose sustainable responses.',
                'rating' => 5,
            ],
            [
                'name' => 'Priya Joshi',
                'role' => 'Product Director, ScaleUp Solutions',
                'content' => 'The pattern mapping exercises are incredibly practical. Rather than theoretical wellness advice, we got active tools to break automated habits in real-time meetings.',
                'rating' => 5,
            ],
            [
                'name' => 'Sandeep Nair',
                'role' => 'Senior Engineering Manager',
                'content' => 'Highly recommend this to any manager feeling overwhelmed. The distinction between mental wellbeing and behavioural patterns is critical, and Alolika explains it beautifully.',
                'rating' => 5,
            ],
            [
                'name' => 'Sneha Deshmukh',
                'role' => 'Creative Director, StudioD',
                'content' => 'The somatic awareness scan has completely changed how I handle client reviews. I catch my physical defensiveness early and redirect it into creative curiosity.',
                'rating' => 4,
            ],
            [
                'name' => 'Vikram Roy',
                'role' => 'Operations Lead, LogiCorp',
                'content' => 'Excellent framework. Understanding that emotions trigger physical signals before they manifest as actions helped me break a multi-year cycle of workplace procrastination.',
                'rating' => 5,
            ],
            [
                'name' => 'Neha Saxena',
                'role' => 'Operations Consultant',
                'content' => 'Alolika\'s coaching philosophy is structured, actionable, and free from superficial buzzwords. The BSI framework is a must-have for personal growth.',
                'rating' => 5,
            ],
            [
                'name' => 'Aarav Mehta',
                'role' => 'Lead Developer, TechSolutions',
                'content' => 'Honestly, the body scan technique is so simple but it actually works. I use it now before code reviews to stay calm and receptive.',
                'rating' => 5,
            ],
            [
                'name' => 'Aditi Sharma',
                'role' => 'HR Business Partner',
                'content' => 'Very different from standard corporate training. The practical mapping exercises helped our team identify stress triggers before they lead to conflicts.',
                'rating' => 4,
            ],
            [
                'name' => 'Kabir Kapoor',
                'role' => 'Product Designer, PixelCraft',
                'content' => 'The focus on physical signals is game changing. I realized I hold tension in my shoulders whenever a deadline approaches. Now I can breathe and redirect.',
                'rating' => 5,
            ],
            [
                'name' => 'Meera Nair',
                'role' => 'Independent Consultant',
                'content' => 'Loved the clarity of the BSI framework. Alolika is an excellent guide who makes complex psychology concepts very accessible and practical.',
                'rating' => 5,
            ],
            [
                'name' => 'Rohan Gupta',
                'role' => 'Tech Lead, CloudCore',
                'content' => 'This class helped me see why I react defensively during post-mortems. Recognizing the physical signals early changed my response completely.',
                'rating' => 4,
            ],
            [
                'name' => 'Sneha Patil',
                'role' => 'Marketing Manager, BrandWave',
                'content' => 'Super helpful somatic exercises. I feel much more grounded during client presentations now. Highly recommend to anyone in fast-paced jobs.',
                'rating' => 5,
            ],
            [
                'name' => 'Vikram Singh',
                'role' => 'Founder, GreenSprout',
                'content' => 'As a founder, I was constantly hyper-controlling everything. The BSI framework helped me let go of validation-seeking loops and delegate better.',
                'rating' => 5,
            ],
            [
                'name' => 'Divya Reddy',
                'role' => 'Project Manager, ApexCorp',
                'content' => 'Excellent session. I learned to spot the difference between reacting to stress and responding with intention. Very practical tools.',
                'rating' => 4,
            ],
            [
                'name' => 'Sanjay Verma',
                'role' => 'UX Researcher, DesignHub',
                'content' => 'The pattern tracking exercise is brilliant. It makes you observe your habits without judgment. I noticed my avoidance loops immediately.',
                'rating' => 5,
            ],
            [
                'name' => 'Ishaan Das',
                'role' => 'Software Engineer, DataSys',
                'content' => 'I usually find wellness workshops a bit too theoretical, but this was highly practical. The physical cues are easy to track and implement.',
                'rating' => 4,
            ],
            [
                'name' => 'Pooja Bhatia',
                'role' => 'Talent Acquisition Specialist',
                'content' => 'A wonderful introduction to behavioural wellbeing. It really helps you connect the dots between your body\'s stress response and your decisions.',
                'rating' => 5,
            ],
            [
                'name' => 'Aditya Rao',
                'role' => 'Business Analyst',
                'content' => 'The class gave me a clear structure to notice my hypervigilance loops. It has made a huge difference in how I manage my daily workloads.',
                'rating' => 5,
            ],
            [
                'name' => 'Riya Sen',
                'role' => 'Creative Copywriter',
                'content' => 'Loved the somatic awareness scans! They help me reset my nervous system when I get blocked on creative projects. Truly practical coaching.',
                'rating' => 5,
            ],
            [
                'name' => 'Arjun Mishra',
                'role' => 'Operations Manager',
                'content' => 'Great framework for breaking automated habit loops. The distinction between mental wellbeing and behavioural wellbeing is very clear now.',
                'rating' => 4,
            ],
            [
                'name' => 'Tanvi Kulkarni',
                'role' => 'Graphic Designer',
                'content' => 'Simple, structured, and free from superficial hype. The BSI approach is exactly what I needed to manage my client meeting anxiety.',
                'rating' => 5,
            ],
            [
                'name' => 'Abhishek Joshi',
                'role' => 'Systems Architect',
                'content' => 'The focus on biological and physical signals makes this framework highly logical. It\'s easy to understand and apply in high-pressure environments.',
                'rating' => 5,
            ],
            [
                'name' => 'Deepak Saxena',
                'role' => 'VP Operations, LogisticsPro',
                'content' => 'Highly recommend this masterclass. It provides actual tools to break defensive behavioural patterns before they become automatic reactions.',
                'rating' => 5,
            ],
            [
                'name' => 'Jyoti Pillai',
                'role' => 'HR Consultant',
                'content' => 'Alolika\'s experience shines through. The exercises are gentle but very effective in revealing hidden avoidance and control loops.',
                'rating' => 4,
            ],
            [
                'name' => 'Shalini Sawant',
                'role' => 'Agile Coach, TechWave',
                'content' => 'Excellent session for teams. It helps build psychological safety by giving people a common language to discuss stress and response patterns.',
                'rating' => 5,
            ],
            [
                'name' => 'Sunita Rao',
                'role' => 'Executive Director, NonProfit Initiative',
                'content' => 'The BSI model is a valuable leadership tool. It helps you recognize your own triggers and lead with empathy rather than reactivity.',
                'rating' => 5,
            ],
            [
                'name' => 'Rajesh Iyer',
                'role' => 'Technical Director',
                'content' => 'I appreciate the practical nature of the exercises. The somatic scans are easy to integrate into a busy workday to ground yourself.',
                'rating' => 4,
            ],
            [
                'name' => 'Vijay Kulkarni',
                'role' => 'Consulting Partner',
                'content' => 'A structured and logical approach to personal growth. The mapping of emotional signals to physical blocks makes complete sense.',
                'rating' => 5,
            ],
            [
                'name' => 'Harish Nair',
                'role' => 'Engineering Manager',
                'content' => 'Helped me recognize my own hyper-control patterns when project deadlines slip. Now I can take a step back and respond constructively.',
                'rating' => 5,
            ],
            [
                'name' => 'Simran Kaur',
                'role' => 'Founder, StyleStudio',
                'content' => 'The session helped me break my validation-seeking loops with client feedback. I feel much more confident and grounded in my decisions.',
                'rating' => 5,
            ],
            [
                'name' => 'Akash Das',
                'role' => 'Senior Developer',
                'content' => 'Very practical tools. The focus on tracking physical tension before reacting emotionally has saved me from several heated email replies.',
                'rating' => 4,
            ],
            [
                'name' => 'Shruti Menon',
                'role' => 'Content Lead, MediaGroup',
                'content' => 'Loved the somatic tracking approach. It really helps you notice stress build-up long before it becomes mental exhaustion. Excellent guide.',
                'rating' => 5,
            ],
            [
                'name' => 'Varun Hegde',
                'role' => 'Product Manager',
                'content' => 'Highly recommend this masterclass. The BSI framework is clear, actionable, and immediately useful for managing everyday work stress.',
                'rating' => 5,
            ],
            [
                'name' => 'Nisha Joshi',
                'role' => 'HR Director',
                'content' => 'The pattern mapping exercises are incredibly insightful. It\'s a great way to build self-awareness and improve communication in leadership.',
                'rating' => 5,
            ],
            [
                'name' => 'Aman Verma',
                'role' => 'Operations Specialist',
                'content' => 'Great class. The distinction between traditional wellness and behavioural habits is very practical. I noticed my control loops instantly.',
                'rating' => 4,
            ],
            [
                'name' => 'Kriti Saxena',
                'role' => 'UI Designer',
                'content' => 'The somatic scans are so helpful. I use them whenever I start feeling overwhelmed during sprint planning. Highly recommend to all designers.',
                'rating' => 5,
            ],
            [
                'name' => 'Pranav Rao',
                'role' => 'QA Lead, TechSolutions',
                'content' => 'Structured, practical, and easy to follow. Tracking physical cues has helped me stay calm during difficult client calls.',
                'rating' => 5,
            ],
            [
                'name' => 'Payal Gupta',
                'role' => 'Freelance Illustrator',
                'content' => 'Loved the focus on physical signals. I realized I hold my breath when I\'m anxious about project feedback. Now I can catch it and reset.',
                'rating' => 5,
            ],
            [
                'name' => 'Aditi Deshmukh',
                'role' => 'HR Specialist',
                'content' => 'Excellent introduction to BSI. The tools are easy to apply and provide a great foundation for long-term behavioural change.',
                'rating' => 4,
            ],
            [
                'name' => 'Rakesh Mishra',
                'role' => 'DevOps Engineer',
                'content' => 'Highly practical. The exercises are simple and don\'t take much time, making them easy to use during a busy release cycle.',
                'rating' => 5,
            ],
            [
                'name' => 'Suresh Reddy',
                'role' => 'VP Sales',
                'content' => 'Excellent framework. Understanding that physical signals drive automated behaviours helped me manage my reaction during stressful negotiations.',
                'rating' => 5,
            ],
            [
                'name' => 'Geeta Shenoy',
                'role' => 'Executive Assistant',
                'content' => 'The somatic scan was a revelation. I didn\'t realize how much stress I was holding in my jaw. The exercises helped me release it instantly.',
                'rating' => 4,
            ],
            [
                'name' => 'Anil Bhatia',
                'role' => 'Solution Architect',
                'content' => 'Logical and actionable. Alolika explains the connection between physiology and behaviour very clearly. A must-attend session.',
                'rating' => 5,
            ],
            [
                'name' => 'Sunil Shetty',
                'role' => 'Project Director',
                'content' => 'The pattern tracking exercise is very eye-opening. It helps you see the automatic loops you repeat every day without realizing it.',
                'rating' => 5,
            ],
            [
                'name' => 'Kiran Deshpande',
                'role' => 'Senior Counsel',
                'content' => 'Excellent coaching. The somatic approach is highly effective in managing workplace stress and building authentic self-awareness.',
                'rating' => 4,
            ],
            [
                'name' => 'Lata Mangesh',
                'role' => 'HR Consultant',
                'content' => 'A wonderful class. It provides practical exercises to identify stress triggers early and respond with calm and clear intention.',
                'rating' => 5,
            ],
            [
                'name' => 'Usha Sridhar',
                'role' => 'Managing Partner',
                'content' => 'The BSI framework is highly relevant for modern leaders. It connects physical awareness directly to behavioural responses. Brilliant session.',
                'rating' => 5,
            ],
            [
                'name' => 'Nikhil Wagle',
                'role' => 'CTO, FastScale',
                'content' => 'Outstanding. Alolika\'s framework helped our leadership team identify their stress signals and maintain focus during high-pressure sprints.',
                'rating' => 5,
            ],
            [
                'name' => 'Pankaj Sane',
                'role' => 'Product Manager, WebTech',
                'content' => 'Simple exercises but highly effective. I\'ve already started noticing my validation-seeking loops during sprint planning meetings.',
                'rating' => 4,
            ],
            [
                'name' => 'Meghna Dhar',
                'role' => 'Marketing Associate',
                'content' => 'The somatic scanning techniques are wonderful. They help me release physical tension and reset my focus throughout the day.',
                'rating' => 5,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
