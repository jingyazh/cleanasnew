<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvisoryBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advisory_boards')->insert([
            'memberid' => '11111111',
            'name' => 'James Griffin',
            'image' => 'https://cleanasnew.com/assets/img/advisory-board-profiles/James-Griffin.jpg',
            'embed' => '<p>James Griffin earned his BS and MS from the University of Wisconsin. He is currently the Senior Vice President of Petrochemicals, Energy and Technology at San Jacinto College.</p>
            <p>Griffin began his career as an associate engineer with The BF Goodrich Chemical Company. He has held positions in plant operations, corporate leadership and R&amp;D. Prior to joining the college, James was a VP of Manufacturing for Mitsubishi Chemical.</p>
            <p>James is a past board chair of The East Harris County Manufacturing Association, an alliance of 132 refineries and petrochemical plants. He is also past board chairman of The Economic Alliance Port Region, an organization representing 12 cities, the Port of Houston Authority, Harris County, and 250 private industry members.</p>',
            'quote' => '<p>The&nbsp;<span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sub style="font-size: 1.1em; color: #227cbe;">&reg;</sub>&nbsp;technology addresses 3 key plant issues: Safety, Environmental Sustainability and Reliability. I&rsquo;m excited to be engaged with the future success of&nbsp;<span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sub style="font-size: 1.1em; color: #227cbe;">&reg;</sub>&nbsp;as an advisory board member.</p>',
            'locale' => 'en',
        ]);

        DB::table('advisory_boards')->insert([
            'memberid' => '22222222',
            'name' => 'Don Empfield',
            'image' => 'https://cleanasnew.com/assets/img/advisory-board-profiles/Don-Empfield.jpg',
            'embed' => '<p>Don Empfield is an experienced business leader with a broad range of manufacturing and consulting experience in the petro/specialty chemicals industry. After receiving his chemical engineering degree from the University of South Alabama, Don began a 24-year career with Akzo Nobel, where he was ultimately the site manager for the Deer Park metal alkyls facility.</p>
            <p>Following his tenure at Akzo Nobel, Don served as the General manager for Sunoco Chemicals for 7 years.</p>
            <p>Don joined the Zachry Group in 2010, where he was the General manager for Maintenance Services and Turnarounds, and the Senior Director of Business Development for 10 years.</p>
            <p>Don has continued to provide independent consulting services related to the safe and effective provision of Turnaround and Specialty Services. Don sits on the Advisory Council for San Jacinto College and an active member of the Texas Chemical Council and the Association of Chemical Industry of Texas.</p>
            <p><br /><br /></p>',
            'quote' => '<p>I joined the&nbsp;<span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sub style="font-size: 1.1em; color: #227cbe;">&reg;</sub>&nbsp;Board because I have a keen interest in promoting the technology for safer and more reliable operations and a focus on the future value it can bring.</p>',
            'locale' => 'en',
        ]);
    }
}
