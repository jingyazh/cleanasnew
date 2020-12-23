<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_companies')->insert([
            'articleid' => '11111111',
            'title' => 'Our Values',
            'image' => 'https://cleanasnew.com/assets/img/team-building.jpg',
            'embed' => '<h2>Our Values As A Company Are</h2>
            <h4>Health, Safety And Care For The Environment</h4>
            <p>We provide our workers, subcontractors and managers, with a healthy and safe working environment.</p>
            <p>Our success comes from planning the work and working the plan. Planning and safety go hand and hand. You can&rsquo;t have one without the other.</p>
            <p>To that end, we will prevent any situation, condition, or thing that may be dangerous to the safety or health of workers and/or the environment. We will identify and assess any hazards associated with:</p>
            <ul>
            <li><strong>M</strong>aterial(s)</li>
            <li><strong>E</strong>quipment (Tools and Machinery)</li>
            <li><strong>E</strong>nvironment</li>
            </ul>
            <p>The ongoing commitment to this value requires the dedication, commitment, involvement, and participation of all workers, subcontractors and managers.</p>
            <h4>Say What You Mean; Do What You Say</h4>
            <p>Strong, positive relationships that are open and honest are a big part of what differentiates us from most other companies.</p>
            <p>The hardest thing to do is to build trust, but if the trust exists, you can accomplish so much more. Being trustworthy develops the inner moral fiber of one\'s being.</p>
            <p>Be who you are and say what you feel.</p>
            <p>By doing what we say and living up to our commitments, we demonstrate our respect to one another.</p>
            <h4>Seek First To Understand, Then To Be Understood</h4>
            <p>Lack of communication is the source of almost all conflict.</p>
            <p>In any relationship, it\'s important to be a good listener as well as a good communicator.</p>
            <p>The best leaders listen to what the other person is saying until they understand their point of view before providing their own.</p>
            <p>Communication is always one of the weakest spots in any organization, no matter how good the communication is. We want everyone to always try to go the extra mile in encouraging thorough, complete, and effective communication.</p>
            <p>We embrace diversity in thoughts, opinions, and backgrounds. The more widespread and diverse your relationships are, the bigger the positive impact you can make on the company, and the more valuable you will be to the company.</p>
            <p>It is critical for relationship-building to have effective, open, and honest communication.</p>
            <h4>Have Fun At Work</h4>
            <p>Having fun builds and maintains excellent morale, communication, creative thinking and performance.</p>
            <p>A work environment that is friendly and warm encourages diversity in ideas and opinions.</p>
            <p>We foster effective teamwork with a work culture that values collaboration. Not only does every detail matter, we take pride in both quality and efficiency.</p>
            <p>It revitalizes people so they are healthier and have more energy to be contributing members of our team. In a teamwork environment, people understand and believe that thinking, planning, decisions and actions are best done cooperatively.</p>
            <p>Ultimately, we all share the Team&rsquo;s success.</p>
            <h4>Strive To Continually Improve</h4>
            <p>We create conditions in which people can find meaning and purpose in their work. We give our team members the autonomy to develop their mastery and grow as professionals within their roles while supporting and promoting our core values and processes.</p>
            <p>We will either find a way and/or make a way to overcome any challenge or problem.</p>
            <p>We vow to continuously examine and improve our business processes, while maintaining leadership and competitiveness in our industry.</p>
            <p>We can&rsquo;t succeed as a team without proper training.</p>
            <p>&ldquo;<strong>SEE one, DO one, TEACH one</strong>.&rdquo;</p>
            <p>Occupational Health and safety defines: Employees are deemed competent when they can teach what they have been taught.</p>
            <p>The ongoing commitment to this value requires the dedication, commitment, involvement, and participation of all workers, subcontractors and managers.</p>
            <h4>Legendary Customer Service</h4>
            <p>We are unified by a common goal: to do the very best for our Customers.</p>
            <p>Our greatest assets are our Customers, because without Customers there is no company.</p>
            <p>Build a great experience, whereby Customers tell each other. Nothing replaces &ldquo;<strong>Word of Mouth</strong>&rdquo;.</p>',
            'locale' => 'en',
        ]);

        DB::table('about_companies')->insert([
            'articleid' => '22222222',
            'title' => 'History',
            'image' => 'https://cleanasnew.com/assets/img/tech-sonic-headquarter.jpg',
            'embed' => '<p>We provide our workers, subcontractors and managers, with a healthy and safe working environment.</p>
            <p>Our success comes from planning the work and working the plan. Planning and safety go hand and hand. You can&rsquo;t have one without the other.</p>
            <p>To that end, we will prevent any situation, condition, or thing that may be dangerous to the safety or health of workers and/or the environment. We will identify and assess any hazards associated with:</p>
            <ul>
            <li><strong>M</strong>aterial(s)</li>
            <li><strong>E</strong>quipment (Tools and Machinery)</li>
            <li><strong>E</strong>nvironment</li>
            </ul>
            <p>The ongoing commitment to this value requires the dedication, commitment, involvement, and participation of all workers, subcontractors and managers.</p>
            <h4>Say What You Mean; Do What You Say</h4>
            <p>Strong, positive relationships that are open and honest are a big part of what differentiates us from most other companies.</p>
            <p>The hardest thing to do is to build trust, but if the trust exists, you can accomplish so much more. Being trustworthy develops the inner moral fiber of one\'s being.</p>
            <p>Be who you are and say what you feel.</p>
            <p>By doing what we say and living up to our commitments, we demonstrate our respect to one another.</p>
            <h4>Seek First To Understand, Then To Be Understood</h4>
            <p>Lack of communication is the source of almost all conflict.</p>
            <p>In any relationship, it\'s important to be a good listener as well as a good communicator.</p>
            <p>The best leaders listen to what the other person is saying until they understand their point of view before providing their own.</p>
            <p>Communication is always one of the weakest spots in any organization, no matter how good the communication is. We want everyone to always try to go the extra mile in encouraging thorough, complete, and effective communication.</p>
            <p>We embrace diversity in thoughts, opinions, and backgrounds. The more widespread and diverse your relationships are, the bigger the positive impact you can make on the company, and the more valuable you will be to the company.</p>
            <p>It is critical for relationship-building to have effective, open, and honest communication.</p>
            <h4>Have Fun At Work</h4>
            <p>Having fun builds and maintains excellent morale, communication, creative thinking and performance.</p>
            <p>A work environment that is friendly and warm encourages diversity in ideas and opinions.</p>
            <p>We foster effective teamwork with a work culture that values collaboration. Not only does every detail matter, we take pride in both quality and efficiency.</p>
            <p>It revitalizes people so they are healthier and have more energy to be contributing members of our team. In a teamwork environment, people understand and believe that thinking, planning, decisions and actions are best done cooperatively.</p>
            <p>Ultimately, we all share the Team&rsquo;s success.</p>
            <h4>Strive To Continually Improve</h4>
            <p>We create conditions in which people can find meaning and purpose in their work. We give our team members the autonomy to develop their mastery and grow as professionals within their roles while supporting and promoting our core values and processes.</p>
            <p>We will either find a way and/or make a way to overcome any challenge or problem.</p>
            <p>We vow to continuously examine and improve our business processes, while maintaining leadership and competitiveness in our industry.</p>
            <p>We can&rsquo;t succeed as a team without proper training.</p>
            <p>&ldquo;<strong>SEE one, DO one, TEACH one</strong>.&rdquo;</p>
            <p>Occupational Health and safety defines: Employees are deemed competent when they can teach what they have been taught.</p>
            <p>The ongoing commitment to this value requires the dedication, commitment, involvement, and participation of all workers, subcontractors and managers.</p>
            <h4>Legendary Customer Service</h4>
            <p>We are unified by a common goal: to do the very best for our Customers.</p>
            <p>Our greatest assets are our Customers, because without Customers there is no company.</p>
            <p>Build a great experience, whereby Customers tell each other. Nothing replaces &ldquo;<strong>Word of Mouth</strong>&rdquo;.</p>',
            'locale' => 'en',
        ]);
    }
}
