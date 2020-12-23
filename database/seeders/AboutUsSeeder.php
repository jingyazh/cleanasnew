<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            'compid' => '11111111',
            'title' => 'Sustainability',
            'image' => '/assets/img/esg-sustainability2.jpg?v=20200928',
            'link' => 'esg',
            'locale' => 'en',
        ]);

        DB::table('about_us')->insert([
            'compid' => '22222222',
            'title' => 'Company',
            'image' => '/assets/img/clean-as-new-in-baytown2.jpg?v=20200925',
            'link' => 'about-us/index',
            'locale' => 'en',
        ]);

        DB::table('about_us')->insert([
            'compid' => '33333333',
            'title' => 'Advisory Board',
            'image' => '/assets/img/board-meeting.jpg',
            'link' => 'about-us/advisory-board',
            'locale' => 'en',
        ]);

        DB::table('about_us')->insert([
            'compid' => '44444444',
            'title' => 'News and Events',
            'image' => '/assets/img/clean-as-new-news-events.jpg',
            'link' => 'about-us/news-and-events',
            'locale' => 'en',
        ]);
    }
}
