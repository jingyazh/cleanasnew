<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'Watch Our Info Video',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'en',
        ]);
        
        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => '观看您的信息视频',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'cn',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'Bekijk uw informatievideo',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'de',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'Vea su video de información',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'es-us',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'Vea su video de información',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'es',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'Regardez votre vidéo d\'information',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'fr',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'आपकी जानकारी वीडियो देखें',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'hi-in',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'あなたの情報ビデオを見る',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'jp',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'Tonton Video Maklumat Anda',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'ml',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'Vea su video de información',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'mx',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'ਆਪਣੀ ਜਾਣਕਾਰੀ ਵੀਡੀਓ ਦੇਖੋ',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'pa-pk',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'Assista ao vídeo de informações',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'pt-br',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'Посмотрите информационное видео',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'ru',
        ]);

        DB::table('posts')->insert([
            'postid' => '111111',            
            'title' => 'ดูวิดีโอข้อมูลของคุณ',
            'image_landing' => 'assets/img/2020-clean-as-new-facility-baytown.jpg',
            'embed' => '<iframe type="text/html" width="870" height="491" src="https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1&controls=1&autohide=0&rel=0" frameborder="0"></iframe>',
            'image_article' => '',
            'locale' => 'th',
        ]);
    }
}
