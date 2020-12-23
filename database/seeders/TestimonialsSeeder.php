<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///  Case Studies
        /////////////////
        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'Case Studies',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'en',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => '实例探究',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'cn',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'Case Studies',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'de',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'Estudios de caso',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'es-us',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'Estudios de caso',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'es',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'Études de cas',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'fr',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'मामले का अध्ययन',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'hi-in',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'ケーススタディ',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'jp',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'Kajian kes',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'ml',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'Estudios de caso',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'mx',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'ਕੇਸ ਸਟੱਡੀਜ਼',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'pa-pk',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'Estudos de caso',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'pt-br',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'Примеры из практики',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'ru',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '11111111',
            'title' => 'กรณีศึกษา',
            'image_1' => 'assets/img/lowering-heat-exchanger.jpg',
            'image_2' => 'assets/img/lowering-heat-exchanger-sm.jpg',
            'locale' => 'th',
        ]);

        ///  Feedback
        /////////////////
        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'Feedback',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'en',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => '反馈',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'cn',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'Feedback',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'de',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'Retroalimentación',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'es-us',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'Retroalimentación',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'es',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'Retour d\'information',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'fr',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'प्रतिपुष्टि',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'hi-in',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'フィードバック',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'jp',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'Maklum balas',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'ml',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'Retroalimentación',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'mx',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'ਸੁਝਾਅ',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'pa-pk',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'Comentários',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'pt-br',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'Обратная связь',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'ru',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '22222222',
            'title' => 'ข้อเสนอแนะ',
            'image_1' => 'assets/img/heat-exchanger.jpg?v=20201001',
            'image_2' => 'assets/img/heat-exchanger-sm2.jpg?v=20201001',
            'locale' => 'th',
        ]);

        ///  Referred Journal Publications
        /////////////////
        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'Referred Journal Publications',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'en',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => '参考期刊出版物',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'cn',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'Refereed Journal Publications',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'de',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'Publicaciones de revistas arbitradas',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'es-us',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'Publicaciones de revistas arbitradas',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'es',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'Publications de revues à comité de lecture',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'fr',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'रेफरी जर्नल प्रकाशन',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'hi-in',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => '査読付きジャーナル出版物',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'jp',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'Penerbitan Jurnal Pengadil',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'ml',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'Publicaciones de revistas arbitradas',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'mx',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'ਰੈਫ਼ਰਡ ਜਰਨਲ ਪਬਲੀਕੇਸ਼ਨਜ਼',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'pa-pk',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'Publicações de periódicos referenciados',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'pt-br',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'Реферируемые публикации в журналах',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'ru',
        ]);

        DB::table('testimonials')->insert([
            'testimonialid' => '33333333',
            'title' => 'สิ่งพิมพ์วารสารอ้างอิง',
            'image_1' => 'assets/img/tech-sonic-vessel.jpg',
            'image_2' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'th',
        ]);
    }
}
