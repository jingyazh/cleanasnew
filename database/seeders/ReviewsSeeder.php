<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
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
        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'Removal Of Iron Carbonate Deposits From Heat Exchangers Used In Ammonia Production Using Tech Sonic Cleaning',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>The use of ultrasonic technology for cleaning refinery and chemical plant components has been undertaken by Tech Sonic since 2003.</p>',
            'image' => '',
            'locale' => 'en',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => '使用Tech Sonic清洁技术去除氨生产中使用的热交换器中的碳酸铁沉积物',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>自2003年以来，Tech Sonic便开始使用超声波技术清洁炼油厂和化工厂的部件。</p>',
            'image' => '',
            'locale' => 'cn',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'Verwijdering van afzettingen van ijzercarbonaat van warmtewisselaars die worden gebruikt bij de productie van ammoniak met behulp van technische sonische reiniging',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>Tech Sonic gebruikt sinds 2003 ultrasone technologie voor het reinigen van onderdelen van raffinaderijen en chemische fabrieken.</p>',
            'image' => '',
            'locale' => 'de',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'Eliminación de depósitos de carbonato de hierro de los intercambiadores de calor utilizados en la producción de amoníaco mediante Tech Sonic Cleaning',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>El uso de tecnología ultrasónica para la limpieza de componentes de plantas químicas y refinerías ha sido realizado por Tech Sonic desde 2003.</p>',
            'image' => '',
            'locale' => 'es-us',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'Eliminación de depósitos de carbonato de hierro de los intercambiadores de calor utilizados en la producción de amoníaco mediante Tech Sonic Cleaning',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>El uso de tecnología ultrasónica para la limpieza de componentes de plantas químicas y refinerías ha sido realizado por Tech Sonic desde 2003.</p>',
            'image' => '',
            'locale' => 'es',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'Élimination des dépôts de carbonate de fer des échangeurs de chaleur utilisés dans la production d\'ammoniac à l\'aide de Tech Sonic Cleaning',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>L\'utilisation de la technologie ultrasonique pour le nettoyage des composants des raffineries et des usines chimiques est entreprise par Tech Sonic depuis 2003.</p>',
            'image' => '',
            'locale' => 'fr',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'टेक सोनिक क्लीनिंग का उपयोग करते हुए अमोनिया उत्पादन में हीट एक्सचेंजर्स से लौह कार्बोनेट डिपॉजिट को हटाना',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>रिफाइनरी और रासायनिक संयंत्र घटकों की सफाई के लिए अल्ट्रासोनिक तकनीक का उपयोग टेक सोनिक द्वारा 2003 से किया गया है।</p>',
            'image' => '',
            'locale' => 'hi-in',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'TechSonicCleaningを使用したアンモニア製造で使用される熱交換器からの炭酸鉄堆積物の除去',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>製油所および化学プラントのコンポーネントを洗浄するための超音波技術の使用は、2003年からTechSonicによって行われています。</p>',
            'image' => '',
            'locale' => 'jp',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'Penyingkiran Deposit Besi Karbonat Dari Penukar Haba Yang Digunakan Dalam Pengeluaran Amonia Menggunakan Pembersihan Teknologi Sonic',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>Penggunaan teknologi ultrasonik untuk membersihkan kilang dan komponen kilang kimia telah dilakukan oleh Tech Sonic sejak tahun 2003.</p>',
            'image' => '',
            'locale' => 'ml',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'Eliminación de depósitos de carbonato de hierro de los intercambiadores de calor utilizados en la producción de amoníaco mediante Tech Sonic Cleaning',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>El uso de tecnología ultrasónica para la limpieza de componentes de plantas químicas y refinerías ha sido realizado por Tech Sonic desde 2003.</p>',
            'image' => '',
            'locale' => 'mx',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'ਤਕਨੀਕ ਸੋਨਿਕ ਕਲੀਨਿੰਗ ਦੀ ਵਰਤੋਂ ਕਰਦਿਆਂ ਅਮੋਨੀਆ ਦੇ ਉਤਪਾਦਨ ਵਿੱਚ ਵਰਤੇ ਜਾਂਦੇ ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਤੋਂ ਆਇਰਨ ਕਾਰਬਨੇਟ ਜਮ੍ਹਾਂ ਨੂੰ ਹਟਾਉਣਾ',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>ਰਿਫਾਇਨਰੀ ਅਤੇ ਰਸਾਇਣਕ ਪਲਾਂਟ ਦੇ ਹਿੱਸਿਆਂ ਦੀ ਸਫਾਈ ਲਈ ਅਲਟਰਾਸੋਨਿਕ ਤਕਨਾਲੋਜੀ ਦੀ ਵਰਤੋਂ ਟੈਕ ਸੋਨਿਕ ਦੁਆਰਾ 2003 ਤੋਂ ਕੀਤੀ ਗਈ ਹੈ.</p>',
            'image' => '',
            'locale' => 'pa-pk',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'Remoção de depósitos de carbonato de ferro de trocadores de calor usados na produção de amônia usando a limpeza do Tech Sonic',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>O uso de tecnologia ultrassônica para limpeza de componentes de refinarias e fábricas de produtos químicos foi realizado pela Tech Sonic desde 2003.</p>',
            'image' => '',
            'locale' => 'pt-br',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'Удаление отложений карбоната железа из теплообменников, используемых при производстве аммиака, с помощью технологии Tech Sonic Cleaning',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>Использование ультразвуковой технологии для очистки компонентов нефтеперерабатывающих и химических заводов используется Tech Sonic с 2003 года.</p>',
            'image' => '',
            'locale' => 'ru',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '11111111',
            'testimonialid' => '11111111',
            'title' => 'การกำจัดเหล็กคาร์บอเนตฝากจากอุปกรณ์แลกเปลี่ยนความร้อนที่ใช้ในการผลิตแอมโมเนียโดยใช้เทคโนโลยีการทำความสะอาดโซนิค',
            'embed' => '<h2><img style="height: auto;" src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." data-src="https://cleanasnew.com/assets/img/fouling.jpg" /></h2>
            <p>Tech Sonic ใช้เทคโนโลยีอัลตราโซนิกในการทำความสะอาดโรงกลั่นและส่วนประกอบของโรงงานเคมีตั้งแต่ปี 2546 เป็นต้นมา</p>',
            'image' => '',
            'locale' => 'th',
        ]);

        ///  Feedback
        /////////////////
        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>I thought everything you guys did was awesome and have already been spreading recommendations to continue using you guys whenever we can!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'Turnaround Manager',            
            'locale' => 'en',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>我认为你们所做的一切都很棒，并且已经在散布建议，以便我们尽可能继续使用你们！</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => '周转经理',            
            'locale' => 'cn',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>Ik dacht dat alles wat jullie deden geweldig was en ik heb al aanbevelingen verspreid om jullie te blijven gebruiken wanneer we maar kunnen!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'Turnaround Manager',            
            'locale' => 'de',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>¡Pensé que todo lo que hicieron fue increíble y ya he estado difundiendo recomendaciones para seguir usándolos siempre que podamos!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'Gerente de Turnaround',            
            'locale' => 'es-us',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>¡Pensé que todo lo que hicieron fue increíble y ya he estado difundiendo recomendaciones para seguir usándolos siempre que podamos!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'Gerente de Turnaround',            
            'locale' => 'es',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>Je pensais que tout ce que vous faisiez était génial et j\'ai déjà diffusé des recommandations pour continuer à vous utiliser chaque fois que nous le pouvons!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'Gestionnaire de redressement',            
            'locale' => 'fr',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>मुझे लगा कि आप लोगों ने जो कुछ भी किया वह भयानक था और जब भी हम कर सकते हैं आप लोगों का उपयोग जारी रखने के लिए पहले से ही सिफारिशें फैला रहे हैं!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'टर्नअराउंड मैनेजर',            
            'locale' => 'hi-in',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>私はあなたたちがしたことはすべて素晴らしいと思いました、そして私たちができるときはいつでもあなたたちを使い続けるための推奨事項をすでに広めています！</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'ターンアラウンドマネージャー',            
            'locale' => 'jp',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>Saya rasa semua yang anda lakukan adalah hebat dan telah menyebarkan cadangan untuk terus menggunakan anda setiap kali kami boleh!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'Pengurus Giliran',            
            'locale' => 'ml',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>¡Pensé que todo lo que hicieron fue increíble y ya he estado difundiendo recomendaciones para seguir usándolos siempre que podamos!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'Gerente de Turnaround',            
            'locale' => 'mx',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>ਮੈਂ ਸੋਚਿਆ ਕਿ ਤੁਹਾਡੇ ਦੁਆਰਾ ਕੀਤਾ ਸਭ ਕੁਝ ਸ਼ਾਨਦਾਰ ਸੀ ਅਤੇ ਪਹਿਲਾਂ ਹੀ ਸਿਫਾਰਸ਼ਾਂ ਫੈਲਾ ਰਿਹਾ ਹੈ ਕਿ ਤੁਸੀਂ ਮੁੰਡਿਆਂ ਨੂੰ ਵਰਤਣਾ ਜਾਰੀ ਰੱਖੋ ਜਦੋਂ ਵੀ ਅਸੀਂ ਕਰ ਸਕਦੇ ਹਾਂ!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'ਮੋੜ ਪ੍ਰਬੰਧਕ',            
            'locale' => 'pa-pk',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>Achei incrível tudo o que vocês fizeram e já estou espalhando recomendações para continuar usando vocês sempre que pudermos!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'Gerente de Turnaround',            
            'locale' => 'pt-br',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>Я думал, что все, что вы, ребята, делали, было круто, и я уже распространял рекомендации продолжать использовать вас, ребята, когда это возможно!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'Менеджер по обороту',            
            'locale' => 'ru',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '22222222',
            'testimonialid' => '22222222',
            'title' => 'Shell Deer Park',
            'embed' => '<p>ฉันคิดว่าทุกสิ่งที่พวกคุณทำนั้นยอดเยี่ยมมากและได้เผยแพร่คำแนะนำเพื่อใช้กับพวกคุณต่อไปทุกเมื่อที่ทำได้!</p>',
            'image' => '/assets/img/feedback/Shell-Deer-Park.jpg',
            'role' => 'ผู้จัดการเทิร์นอะราวด์',            
            'locale' => 'th',
        ]);

        ///  Referred Journal Publications
        /////////////////
        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'The Application Of Industrial Scale Ultrasonic Cleaning To Heat Exchangers',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>The cleaning of fouled heat exchangers often presents a significant challenge to the maintenance and operation of chemical, petroleum and food processes.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">Read more</span> &rarr;</a></p>',
            'image' => '',
            'locale' => 'en',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => '工业规模超声波清洗在热交换器中的应用',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>积垢的热交换器的清洁通常对化学，石油和食品加工的维护和操作提出了重大挑战。</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">了解详情</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'cn',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'De toepassing van ultrasone reiniging op industriële schaal op warmtewisselaars',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>Het reinigen van vervuilde warmtewisselaars vormt vaak een aanzienlijke uitdaging voor het onderhoud en de werking van chemische, petroleum- en voedselprocessen.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">Lees meer</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'de',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'La aplicación de la limpieza ultrasónica a escala industrial a los intercambiadores de calor',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>La limpieza de intercambiadores de calor sucios a menudo presenta un desafío significativo para el mantenimiento y operación de procesos químicos, petroleros y alimentarios.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">Leer más</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'es-us',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'La aplicación de la limpieza ultrasónica a escala industrial a los intercambiadores de calor',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>La limpieza de intercambiadores de calor sucios a menudo presenta un desafío significativo para el mantenimiento y operación de procesos químicos, petroleros y alimentarios.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">Leer más</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'es',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'L\'application du nettoyage ultrasonique d\'échelle industrielle aux échangeurs de chaleur',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>Le nettoyage des échangeurs de chaleur encrassés présente souvent un défi important pour l\'entretien et le fonctionnement des procédés chimiques, pétroliers et alimentaires.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">En savoir plus</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'fr',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'हीट एक्सचेंजर्स को औद्योगिक स्केल अल्ट्रासोनिक सफाई का अनुप्रयोग',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>फाउल्ड हीट एक्सचेंजर्स की सफाई अक्सर रासायनिक, पेट्रोलियम और खाद्य प्रक्रियाओं के रखरखाव और संचालन के लिए एक महत्वपूर्ण चुनौती प्रस्तुत करती है।</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">और पढ़ें</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'hi-in',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => '熱交換器への工業規模の超音波洗浄の応用',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>汚れた熱交換器の洗浄は、化学、石油、食品プロセスの保守と運用に重大な課題をもたらすことがよくあります。</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">続きを読む</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'jp',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'Aplikasi Pembersihan Ultrasonik Skala Industri Untuk Penukar Panas',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>Pembersihan penukar haba yang tercemar sering kali memberikan cabaran yang besar bagi penyelenggaraan dan pengendalian proses kimia, petroleum dan makanan.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">Baca lebih lanjut/span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'ml',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'La aplicación de la limpieza ultrasónica a escala industrial a los intercambiadores de calor',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>La limpieza de intercambiadores de calor sucios a menudo presenta un desafío significativo para el mantenimiento y operación de procesos químicos, petroleros y alimentarios.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">Leer más</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'mx',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'ਉਦਯੋਗਿਕ ਪੈਮਾਨੇ ਦੀ ਅਲਟਰਾਸੋਨਿਕ ਸਫਾਈ ਦੀ ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਲਈ ਉਪਯੋਗਤਾ',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>ਫਿledਲਡ ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਦੀ ਸਫਾਈ ਅਕਸਰ ਰਸਾਇਣਕ, ਪੈਟਰੋਲੀਅਮ ਅਤੇ ਭੋਜਨ ਪ੍ਰਕਿਰਿਆਵਾਂ ਦੀ ਦੇਖਭਾਲ ਅਤੇ ਸੰਚਾਲਨ ਲਈ ਮਹੱਤਵਪੂਰਣ ਚੁਣੌਤੀ ਪੇਸ਼ ਕਰਦੀ ਹੈ.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">ਹੋਰ ਪੜ੍ਹੋ</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'pa-pk',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'A aplicação de limpeza ultrassônica em escala industrial para trocadores de calor',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>A limpeza de trocadores de calor sujos frequentemente apresenta um desafio significativo para a manutenção e operação de processos químicos, petrolíferos e alimentícios.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">Leia mais</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'pt-br',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'Применение ультразвуковой очистки в промышленных масштабах для теплообменников',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>Очистка загрязненных теплообменников часто представляет собой серьезную проблему для обслуживания и эксплуатации химических, нефтяных и пищевых производств.</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">Узнать больше</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'ru',
        ]);

        DB::table('reviews')->insert([
            'reviewid' => '33333333',
            'testimonialid' => '33333333',
            'title' => 'การประยุกต์ใช้การทำความสะอาดอัลตราโซนิกในระดับอุตสาหกรรมกับเครื่องแลกเปลี่ยนความร้อน',
            'embed' => '<p>B. Kieser, R. Phillion, T. McCartney</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img style="height: auto;" src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" /></a></p>
            <p>การทำความสะอาดเครื่องแลกเปลี่ยนความร้อนที่เปรอะเปื้อนมักเป็นความท้าทายที่สำคัญในการบำรุงรักษาและการดำเนินการของกระบวนการทางเคมีปิโตรเลียมและอาหาร</p>
            <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><span style="color: #3598db;">อ่านเพิ่มเติม</span> &rarr;</a></p>',
            'image' => 'assets/img/tech-sonic-vessel-sm.jpg',
            'locale' => 'th',
        ]);
    }
}
