<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_events')->insert([
            'articleid' => '11111111',
            'title' => 'Join Us – Events',
            'embed' => '<h2><span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;Featured On Manufacturing Marvels<sup>&reg;</sup></h2>
            <p>Originally broadcast on Fox Business News September 1, 2020, Manufacturing Marvels<sup>&reg;</sup>&nbsp;features&nbsp;CLEAN&nbsp;AS&nbsp;NEW<sup>&reg;</sup>&rsquo;s revolutionary cleaning approach for heat exchangers and many other parts in the refinery and petrochemical industries.</p>
            <p><iframe id="player" title="YouTube video player" src="https://www.youtube.com/embed/rcM1fKiADXU?autoplay=1&amp;controls=1&amp;autohide=0&amp;rel=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Flocalhost%3A3000&amp;widgetid=1" width="797" height="450" frameborder="0" allowfullscreen="allowfullscreen" data-gtm-yt-inspected-31555613_42="true" data-gtm-yt-inspected-31555613_40="true" data-gtm-yt-inspected-31555613_38="true" data-gtm-yt-inspected-31555613_36="true" data-mce-fragment="1"></iframe></p>',
            'locale' => 'en',
        ]);

        DB::table('news_events')->insert([
            'articleid' => '22222222',
            'title' => '<h2><span style="color: #000000; background-color: #ffffff;">Join Us &ndash; Events</span></h2>',
            'embed' => '<h2>Join Us &ndash; Events</h2>
            <ul style="list-style-type: none;">
            <li><a href="https://l.feathr.co/landing-page---2020-aiche---exhibitor-clean-as-new" target="_blank" rel="nofollow noopener noreferrer">AIChE &ndash; Virtual Conference</a>&nbsp;&ndash; August 17-21, 2020</li>
            <li><a href="https://www.afpm.org/events/27741b00000003" target="_blank" rel="nofollow noopener noreferrer">AFPM &ndash; Virtual Conference</a>&nbsp;&ndash; August 25-27, 2020</li>
            <li><a href="https://www.heat-exchanger-world.com/hxw-americas-2020/introducing-heat-exchanger-world-conference-and-expo-americas" target="_blank" rel="nofollow noopener noreferrer" aria-invalid="true">Heat Exchanger World Conference and Expo Americas</a>&nbsp;&ndash; November 18-19, 2020</li>
            </ul>',
            'locale' => 'en',
        ]);
    }
}
