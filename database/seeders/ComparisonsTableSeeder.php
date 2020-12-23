<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComparisonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Cleaning cost
        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'Cleaning Cost',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'en',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => '清洁费用',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'cn',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'Schoonmaakkosten',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'de',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'Costo de limpieza',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es-us',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'Costo de limpieza',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'Coût de nettoyage',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'fr',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'सफाई का खर्च',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'hi-in',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => '清掃費',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'jp',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'Kos Pembersihan',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ml',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'Costo de limpieza',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'mx',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'ਸਫਾਈ ਦੀ ਲਾਗਤ',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pa-pk',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'Custo de limpeza',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pt-br',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'Стоимость уборки',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ru',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '11111111',
            'title' => 'ค่าทำความสะอาด',
            'image_landing_1' => 'assets/img/comparison/wash-pad-cost1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/wash-pad-cost.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'th',
        ]);

        // Heat Exchanger Performance
        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'Heat Exchanger Performance',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'en',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => '换热器性能',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'cn',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'Warmtewisselaarprestaties',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'de',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'Rendimiento del intercambiador de calor',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es-us',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'Rendimiento del intercambiador de calor',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'Performance de l\'échangeur de chaleur',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'fr',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'हीट एक्सचेंजर प्रदर्शन',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'hi-in',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => '熱交換器の性能',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'jp',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'Prestasi Penukar Haba',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ml',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'Rendimiento del intercambiador de calor',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'mx',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'ਹੀਟ ਐਕਸਚੇਂਜਰ ਪ੍ਰਦਰਸ਼ਨ',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pa-pk',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'Desempenho do trocador de calor',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pt-br',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'Производительность теплообменника',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ru',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '22222222',
            'title' => 'ประสิทธิภาพการแลกเปลี่ยนความร้อน',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'th',
        ]);

        // Parts Cleaning
        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'Parts Cleaning',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'en',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => '零件清洗',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'cn',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'Onderdelen reinigen',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'de',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'Limpieza de piezas',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es-us',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'Limpieza de piezas',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'Nettoyage des pièces',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'fr',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'भागों की सफाई',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'hi-in',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => '部品のクリーニング',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'jp',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'Pembersihan Bahagian',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ml',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'Limpieza de piezas',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'mx',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'ਭਾਗ ਸਫਾਈ',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pa-pk',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'Limpeza de peças',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pt-br',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'Очистка деталей',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ru',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '33333333',
            'title' => 'การทำความสะอาดชิ้นส่วน',
            'image_landing_1' => 'assets/img/comparison/parts-cleaning1.jpg',
            'image_landing_2' => 'assets/img/comparison/parts-cleaning.jpg',
            'embed' => '',
            'image_article' => '',
            'locale' => 'th',
        ]);

        // Facility
        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'Facility',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'en',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => '设施',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'cn',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'Faciliteit',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'de',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'Instalaciones',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es-us',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'Instalaciones',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'Établissement',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'fr',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'सुविधा',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'hi-in',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => '施設',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'jp',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'Kemudahan',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ml',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'Instalaciones',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'mx',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'ਸਹੂਲਤ',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pa-pk',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'Instalação',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pt-br',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'Объект',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ru',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '44444444',
            'title' => 'สิ่งอำนวยความสะดวก',
            'image_landing_1' => 'assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'th',
        ]);
        
        // ESG
        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'ESG',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'en',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => '设施',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'cn',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'Faciliteit',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'de',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'Instalaciones',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es-us',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'Instalaciones',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'es',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'Établissement',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'fr',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'सुविधा',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'hi-in',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => '施設',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'jp',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'Kemudahan',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ml',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'Instalaciones',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'mx',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'ਸਹੂਲਤ',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pa-pk',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'Instalação',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'pt-br',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'Объект',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'ru',
        ]);

        DB::table('comparisons')->insert([
            'compareid' => '55555555',
            'title' => 'สิ่งอำนวยความสะดวก',
            'image_landing_1' => 'assets/img/comparison/esg-father-son1.jpg?v=20200927',
            'image_landing_2' => 'assets/img/comparison/esg-father-son.jpg?v=20200928',
            'embed' => '',
            'image_article' => '',
            'locale' => 'th',
        ]);
    }
}
