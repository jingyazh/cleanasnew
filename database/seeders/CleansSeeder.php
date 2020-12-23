<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CleansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /// Refineries
        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'Refineries',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hydrocarbons and Inorganic Scale</h4>
<p>Distillation Condensers, Crude/Coker Preheat Trains, FC/Steam/Hydro-Crackers, Reforming, Hydrotreating, Water/Steam Scale, and much more.</p>',
            'type' => '',
            'locale' => 'en',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => '炼油厂',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>碳氢化合物和无机垢</h4>
<p>蒸馏冷凝器，原油/焦化器预热系统，FC /蒸汽/加氢裂化器，重整，加氢处理，水/蒸汽规模等。</p>',
            'type' => '',
            'locale' => 'cn',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'Koolwaterstoffen en anorganische ketelsteen',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hydrocarbons and Inorganic Scale</h4>
<p>Destillatiecondensors, Ruwe / Coker-voorverwarmtreinen, FC / Steam / Hydro-Crackers, Reforming, Hydrotreating, Water / Steam Scale, en nog veel meer.</p>',
            'type' => '',
            'locale' => 'de',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'Refinerías',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrocarburos e incrustaciones inorgánicas</h4>
<p>Condensadores de destilación, trenes de precalentamiento de crudo / coque, FC / vapor / hidrocraqueadores, reformado, hidrotratamiento, báscula de agua / vapor y mucho más.</p>',
            'type' => '',
            'locale' => 'es-us',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'Refinerías',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrocarburos e incrustaciones inorgánicas</h4>
<p>Condensadores de destilación, trenes de precalentamiento de crudo / coque, FC / vapor / hidrocraqueadores, reformado, hidrotratamiento, báscula de agua / vapor y mucho más.</p>',
            'type' => '',
            'locale' => 'es',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'Raffineries',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hydrocarbures et échelle inorganique</h4>
<p>Condenseurs de distillation, trains de préchauffage brut / cokeur, FC / vapeur / hydro-craquelins, reformage, hydrotraitement, balance eau / vapeur, et bien plus encore.</p>',
            'type' => '',
            'locale' => 'fr',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'रिफाइनरीज',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>हाइड्रोकार्बन और अकार्बनिक स्केल</h4>
<p>आसवन कंडेनसर, क्रूड / कोकर प्रीहेट ट्रेनें, एफसी / स्टीम / हाइड्रो-क्रैकर्स, रिफॉर्मिंग, हाइड्रोट्रीटिंग, वाटर / स्टीम स्केल, और बहुत कुछ।</p>',
            'type' => '',
            'locale' => 'hi-in',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => '製油所',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>炭化水素と無機スケール</h4>
<p>蒸留コンデンサー、原油/コーカー予熱トレイン、FC /蒸気/ハイドロクラッカー、改質、水素化処理、水/蒸気スケールなど。</p>',
            'type' => '',
            'locale' => 'jp',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'Penyulingan',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrokarbon dan Skala Anorganik</h4>
<p>Kondensor Penyulingan, Keretapi Panas Mentah / Coker, FC / Steam / Hydro-Crackers, Reforming, Hydrotreating, Water / Steam Scale, dan banyak lagi.</p>',
            'type' => '',
            'locale' => 'ml',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'Refinerías',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrocarburos e incrustaciones inorgánicas</h4>
<p>Condensadores de destilación, trenes de precalentamiento de crudo / coque, FC / vapor / hidrocraqueadores, reformado, hidrotratamiento, báscula de agua / vapor y mucho más.</p>',
            'type' => '',
            'locale' => 'mx',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'ਰਿਫਾਇਨਰੀਆਂ',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>ਹਾਈਡਰੋਕਾਰਬਨ ਅਤੇ inorganic ਸਕੇਲ</h4>
<p>ਡਿਸਟਿਲਲੇਸ਼ਨ ਕੰਡੈਂਸਰ, ਕਰੂਡ / ਕੋਕਰ ਪ੍ਰੀਹੀਟ ਟ੍ਰੇਨਾਂ, ਐਫਸੀ / ਭਾਫ / ਹਾਈਡ੍ਰੋ-ਕਰੈਕਰਸ, ਸੁਧਾਰ, ਹਾਈਡ੍ਰੋਟਰੈਰੇਟਿੰਗ, ਪਾਣੀ / ਭਾਫ ਸਕੇਲ, ਅਤੇ ਹੋਰ ਬਹੁਤ ਕੁਝ.</p>',
            'type' => '',
            'locale' => 'pa-pk',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'Refinarias',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrocarbonetos e incrustações inorgânicas</h4>
<p>Condensadores de destilação, trens de pré-aquecimento de petróleo / coque, FC / vapor / hidro-crackers, reforma, hidrotratamento, escala de água / vapor e muito mais.</p>',
            'type' => '',
            'locale' => 'pt-br',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'НПЗ',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Углеводороды и неорганические отложения</h4>
<p>Конденсаторы дистилляции, линии предварительного нагрева сырой нефти / коксования, установки FC / пара / гидрокрекинга, риформинг, гидроочистка, водяной / паровой вес и многое другое.</p>',
            'type' => '',
            'locale' => 'ru',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '11111111',
            'title' => 'โรงกลั่น',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>ไฮโดรคาร์บอนและอนินทรีย์</h4>
<p>คอนเดนเซอร์กลั่น, น้ำมันดิบ / Coker อุ่นรถไฟ, FC / Steam / Hydro-Crackers, Reforming, Hydrotreating, Water / Steam Scale และอื่น ๆ อีกมากมาย</p>',
            'type' => '',
            'locale' => 'th',
        ]);

        /// Petrochemical Plants
        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'Petrochemical Plants',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hydrocarbons and Fouling</h4>
<p>Crack Gas Quenching, Bottoms, Fractionation Train, Preheat Trains, Water/Steam Scale.</p>',
            'type' => '',
            'locale' => 'en',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => '石化厂',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>碳氢化合物和结垢</h4>
<p>裂解气体淬火，底部，分馏塔，预热塔，水/蒸汽秤。</p>',
            'type' => '',
            'locale' => 'cn',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'Petrochemische fabrieken',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Koolwaterstoffen en vervuiling</h4>
<p>Scheurgas blussen, bodems, fractioneringstrein, treinen voorverwarmen, water / stoomschaal.</p>',
            'type' => '',
            'locale' => 'de',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'Plantas Petroquímicas',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrocarburos e incrustaciones</h4>
<p>Enfriamiento de gas de grietas, fondos, tren de fraccionamiento, trenes de precalentamiento, báscula de agua / vapor.</p>',
            'type' => '',
            'locale' => 'es-us',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'Plantas Petroquímicas',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrocarburos e incrustaciones</h4>
<p>Enfriamiento de gas de grietas, fondos, tren de fraccionamiento, trenes de precalentamiento, báscula de agua / vapor.</p>',
            'type' => '',
            'locale' => 'es',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'Usines pétrochimiques',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hydrocarbures et encrassement</h4>
<p>Trempe au gaz de fissure, fonds, train de fractionnement, trains de préchauffage, balance eau / vapeur.</p>',
            'type' => '',
            'locale' => 'fr',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'पेट्रोकेमिकल पौधे',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>हाइड्रोकार्बन और फॉलिंग</h4>
<p>क्रैक गैस शमन, बॉटम्स, फ्रैक्चरेशन ट्रेन, प्रीहीट ट्रेनें, पानी / स्टीम स्केल।</p>',
            'type' => '',
            'locale' => 'hi-in',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => '石油化学プラント',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>炭化水素とファウリング</h4>
<p>クラックガス焼入れ、ボトムス、分留トレイン、予熱トレイン、水/蒸気スケール。</p>',
            'type' => '',
            'locale' => 'jp',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'Tumbuhan Petrokimia',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrokarbon dan Fouling</h4>
<p>Pemadaman Gas Retak, Bahagian Bawah, Keretapi Pecahan, Keretapi Panas, Skala Air / Wap.</p>',
            'type' => '',
            'locale' => 'ml',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'Plantas Petroquímicas',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrocarburos e incrustaciones</h4>
<p>Enfriamiento de gas de grietas, fondos, tren de fraccionamiento, trenes de precalentamiento, báscula de agua / vapor.</p>',
            'type' => '',
            'locale' => 'mx',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'ਪੈਟਰੋ ਕੈਮੀਕਲ ਪਲਾਂਟ',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>ਹਾਈਡਰੋਕਾਰਬਨ ਅਤੇ ਫੂਲਿੰਗ</h4>
<p>ਕਰੈਕ ਗੈਸ ਕੁਨੈਚਿੰਗ, ਤਲ਼ੇ, ਫਰੈਕਸ਼ਨਨ ਟ੍ਰੇਨ, ਪ੍ਰੀਹੀਟ ਟ੍ਰੇਨਾਂ, ਪਾਣੀ / ਭਾਫ ਸਕੇਲ.</p>',
            'type' => '',
            'locale' => 'pa-pk',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'Plantas Petroquímicas',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Hidrocarbonetos e incrustação</h4>
<p>Têmpera a gás de crack, fundos, trem de fracionamento, trens de pré-aquecimento, balança de água / vapor.</p>',
            'type' => '',
            'locale' => 'pt-br',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'Нефтехимические заводы',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>Углеводороды и загрязнения</h4>
<p>Гашение крекинг-газом, кубы, линия фракционирования, линии предварительного нагрева, водяной / паровой вес.</p>',
            'type' => '',
            'locale' => 'ru',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '22222222',
            'title' => 'โรงงานปิโตรเคมี',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '<h4>ไฮโดรคาร์บอนและสิ่งสกปรก</h4>
<p>การดับแก๊ส, กางเกง, รถไฟเศษส่วน, อุ่นรถไฟ, เครื่องชั่งน้ำ / ไอน้ำ</p>',
            'type' => '',
            'locale' => 'th',
        ]);

        /// Heat Exchangers
        ////// Straight Tube
        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'Straight Tube',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'Heat Exchangers',
            'locale' => 'en',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => '直管',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => '换热器',
            'locale' => 'cn',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'Rechte buis',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'Warmtewisselaars',
            'locale' => 'de',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'Tubo recto',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'Intercambiadores de calor',
            'locale' => 'es-us',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'Tubo recto',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'Intercambiadores de calor',
            'locale' => 'es',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'Tube droit',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'Échangeurs de chaleur',
            'locale' => 'fr',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'सीधी नली',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'ताप विनियामक',
            'locale' => 'hi-in',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'ストレートチューブ',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => '熱交換器',
            'locale' => 'jp',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'Tiub Lurus',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'Penukar Haba',
            'locale' => 'ml',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'Tubo recto',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'Intercambiadores de calor',
            'locale' => 'mx',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'ਸਿੱਧੀ ਟਿ .ਬ',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'ਹੀਟ ਐਕਸਚੇਂਜਰ',
            'locale' => 'pa-pk',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'Tubo reto',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'Trocadores de Calor',
            'locale' => 'pt-br',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'Прямая трубка',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'Теплообменники',
            'locale' => 'ru',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '33333333',
            'title' => 'ท่อตรง',
            'image' => 'assets/img/petrochemical-plants.jpg',
            'embed' => '',
            'type' => 'เครื่องแลกเปลี่ยนความร้อน',
            'locale' => 'th',
        ]);
        
        ////////////////////////////////////////////
        ///// U-Tube
        ////////////////////////////////////////////
        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'U-Tube',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'Heat Exchangers',
            'locale' => 'en',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'U型管',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => '换热器',
            'locale' => 'cn',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'U-buis',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'Warmtewisselaars',
            'locale' => 'de',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'Tubo en U',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'Intercambiadores de calor',
            'locale' => 'es-us',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'Tubo en U',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'Intercambiadores de calor',
            'locale' => 'es',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'U-Tube',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'Échangeurs de chaleur',
            'locale' => 'fr',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'उ० — जूती',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'ताप विनियामक',
            'locale' => 'hi-in',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'U-Tube',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => '熱交換器',
            'locale' => 'jp',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'U -Tube',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'Penukar Haba',
            'locale' => 'ml',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'Tubo en U',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'Intercambiadores de calor',
            'locale' => 'mx',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'ਯੂ-ਟਿ .ਬ',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'ਹੀਟ ਐਕਸਚੇਂਜਰ',
            'locale' => 'pa-pk',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'U -Tube',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'Trocadores de Calor',
            'locale' => 'pt-br',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'U-трубка',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'Теплообменники',
            'locale' => 'ru',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '44444444',
            'title' => 'U - หลอด',
            'image' => 'assets/img/before-after/1heat-exchanger.jpg',
            'embed' => '',
            'type' => 'เครื่องแลกเปลี่ยนความร้อน',
            'locale' => 'th',
        ]);


        /// Parts
        ////////////////////////////////////////////
        ///// Valves
        ////////////////////////////////////////////
        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'Valves',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p>Valves of all types</p>',
            'type' => 'Parts',
            'locale' => 'en',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => '阀门',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p>所有类型的阀门</ p>',
            'type' => '部分',
            'locale' => 'cn',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'Kleppen',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> Alle soorten kleppen </p>',
            'type' => 'Onderdelen',
            'locale' => 'de',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'Valvulas',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> Válvulas de todo tipo </p>',
            'type' => 'Partes',
            'locale' => 'es-us',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'Valvulas',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> Válvulas de todo tipo </p>',
            'type' => 'Partes',
            'locale' => 'es',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'Vannes',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> Vannes de tous types </p>',
            'type' => 'les pièces',
            'locale' => 'fr',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'वाल्व',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> सभी प्रकार के वाल्व </ p>',
            'type' => 'पार्ट्स',
            'locale' => 'hi-in',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'バルブ',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p>すべてのタイプのバルブ</ p>',
            'type' => '部品',
            'locale' => 'jp',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'Injap',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> Injap semua jenis </p>',
            'type' => 'Bahagian',
            'locale' => 'ml',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'Valvulas',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> Válvulas de todo tipo </p>',
            'type' => 'Partes',
            'locale' => 'mx',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'ਵਾਲਵ',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> ਹਰ ਕਿਸਮ ਦੇ ਵਾਲਵ </p>',
            'type' => 'ਹਿੱਸੇ',
            'locale' => 'pa-pk',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'Válvulas',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> Válvulas de todos os tipos </p>',
            'type' => 'Peças',
            'locale' => 'pt-br',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'Клапаны',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p> Клапаны всех типов </p>',
            'type' => 'Запчасти',
            'locale' => 'ru',
        ]);

        DB::table('what_we_cleans')->insert([
            'cleanid' => '55555555',
            'title' => 'วาล์ว',
            'image' => 'assets/img/before-after/4valves.jpg',
            'embed' => '<p>วาล์วทุกประเภท</p>',
            'type' => 'อะไหล่',
            'locale' => 'th',
        ]);
    }
}
