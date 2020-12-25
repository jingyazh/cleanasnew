<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToDosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cleaner
        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'Cleaner',
            'embed' => '<h2>CLEANER</h2>
            <h4>What if Clean meant Like New?</h4>
            <p>Tech Sonic&rsquo;s patented and proprietary technology cleans heat exchangers and parts to a like new condition.</p>
            <div>
            <ul>
            <li>With the addition of Tech Sonic, heat exchangers and parts are cleaned and returned to service at 95% or better of the original design performance.</li>
            <li>Better cleaning means less energy consumption, improved production and longer maintenance intervals &ndash; great for a plant&rsquo;s bottom line.</li>
            <li>When we say&nbsp;<span id="tagyes" style="color: #3598db;">YES WE CAN</span>, we mean it - If we can&rsquo;t clean it, you don&rsquo;t pay! Who else in the industry offers that guarantee?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'en',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => '清洁器',
            'embed' => '<h2>清洁器</h2>
            <h4>如果清洁意味着像新的一样怎么办？</h4>
            <p>Tech Sonic的专利和专有技术可以将热交换器和零件清洗到新的状态。</p>
            <div>
            <ul>
            <li>通过添加Tech Sonic，可以清洁热交换器和零件，并使其恢复到原始设计性能的95％或更高。</li>
            <li>更好的清洁意味着更少的能源消耗，提高的生产效率和更长的维护间隔，这对于工厂的底线而言非常重要。</li>
            <li>当我们说&nbsp;<span id="tagyes" style="color: #3598db;">是的，我们可以</span>时, 是指-如果我们无法清洁，则您无需付款！ 行业中还有谁可以提供保证？</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'cn',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'SCHONER',
            'embed' => '<h2>SCHONER</h2>
            <h4>Wat als Clean als nieuw betekende?</h4>
            <p>De gepatenteerde en gepatenteerde technologie van Tech Sonic reinigt warmtewisselaars en onderdelen tot een als nieuwstaat.</p>
            <div>
            <ul>
            <li>Met de toevoeging van Tech Sonic worden warmtewisselaars en onderdelen gereinigd en weer in gebruik genomen met 95% of beter van de oorspronkelijke ontwerpprestaties.</li>
            <li>Betere reiniging betekent minder energieverbruik, verbeterde productie en langere onderhoudsintervallen - ideaal voor het bedrijfsresultaat van een plant.</li>
            <li>Als we zeggen&nbsp;<span id="tagyes" style="color: #3598db;">JA KUNNEN</span>, bedoelen we het: als we het niet kunnen schoonmaken, betaalt u niet! Wie biedt nog meer in de branche die garantie?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'de',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
            <h4>¿Qué pasa si limpio significa como nuevo?</h4>
            <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
            <div>
            <ul>
            <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
            <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
            <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'es-us',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
            <h4>¿Qué pasa si limpio significa como nuevo?</h4>
            <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
            <div>
            <ul>
            <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
            <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
            <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'es',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'NETTOYEUR',
            'embed' => '<h2>NETTOYEUR</h2>
            <h4>Et si Clean signifiait comme neuf?</h4>
            <p>La technologie brevetée et exclusive de Tech Sonic nettoie les échangeurs de chaleur et les pièces dans un état comme neuf.</p>
            <div>
            <ul>
            <li>Avec l\'ajout de Tech Sonic, les échangeurs de chaleur et les pièces sont nettoyés et remis en service à 95% ou plus des performances de conception d\'origine.</li>
            <li>Un meilleur nettoyage signifie moins de consommation d’énergie, une production améliorée et des intervalles de maintenance plus longs - parfait pour les résultats d’une usine.</li>
            <li>Quand nous disons&nbsp;<span id="tagyes" style="color: #3598db;">OUI, NOUS POUVONS</span>, nous le pensons - Si nous ne pouvons pas le nettoyer, vous ne payez pas! Qui d\'autre dans l\'industrie offre cette garantie?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'fr',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'सफाई वाला',
            'embed' => '<h2>सफाई वाला</h2>
            <h4>क्या होगा अगर क्लीन का मतलब न्यू जैसा हो?</h4>
            <p>टेक सोनिक की पेटेंटेड और मालिकाना तकनीक हीट एक्सचेंजर्स और पुर्जों को एक नई स्थिति की तरह साफ करती है।</p>
            <div>
            <ul>
            <li>टेक सोनिक के साथ, हीट एक्सचेंजर्स और भागों को साफ किया जाता है और मूल डिजाइन प्रदर्शन के 95% या बेहतर सेवा में वापस आ जाता है।</li>
            <li>बेहतर सफाई का मतलब है कम ऊर्जा की खपत, बेहतर उत्पादन और लंबे समय तक रखरखाव अंतराल - एक संयंत्र की निचली रेखा के लिए महान।</li>
            <li>जब हम कहते हैं&nbsp;<span id="tagyes" style="color: #3598db;">हाँ, हम कर सकते हैं</span>, तो हमारा मतलब है - यदि हम इसे साफ नहीं कर सकते, तो आप भुगतान नहीं करेंगे! उद्योग में और कौन गारंटी देता है?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'hi-in',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'クリーナー',
            'embed' => '<h2>クリーナー</h2>
            <h4>クリーンが新品のように意味する場合はどうなりますか？</h4>
            <p>クリーンが新品のように意味する場合はどうなりますか？</p>
            <div>
            <ul>
            <li>Tech Sonicを追加すると、熱交換器と部品が洗浄され、元の設計性能の95％以上でサービスに戻ります。</li>
            <li>より良い洗浄は、エネルギー消費の削減、生産の改善、およびメンテナンス間隔の延長を意味します。これは、プラントの収益に最適です。</li>
            <li>私たちが&nbsp;<span id="tagyes" style="color: #3598db;">はい、できます</span>と言うとき, それはそれを意味します-私たちがそれをきれいにすることができないならば、あなたは支払いません！ 業界の他の誰がその保証を提供していますか？</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'jp',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'PEMBERSIH',
            'embed' => '<h2>PEMBERSIH</h2>
            <h4>Bagaimana jika Bersih bermaksud Seperti Baru?</h4>
            <p>Teknologi yang dipatenkan dan dimiliki oleh Tech Sonic membersihkan penukar haba dan alat ganti ke keadaan baru yang serupa.</p>
            <div>
            <ul>
            <li>Dengan penambahan Tech Sonic, penukar haba dan alat ganti dibersihkan dan kembali berfungsi pada tahap 95% atau lebih baik daripada prestasi reka bentuk asal.</li>
            <li>Pembersihan yang lebih baik bermaksud penggunaan tenaga yang lebih sedikit, pengeluaran yang lebih baik dan selang penyelenggaraan yang lebih lama - bagus untuk bahagian bawah kilang.</li>
            <li>Apabila kita mengatakan&nbsp;<span id="tagyes" style="color: #3598db;">Ya, kita boleh</span>, kita bermaksud - Sekiranya kita tidak dapat membersihkannya, anda tidak membayar! Siapa lagi</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'ml',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
            <h4>¿Qué pasa si limpio significa como nuevo?</h4>
            <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
            <div>
            <ul>
            <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
            <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
            <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'mx',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'ਕਲੀਨਰ',
            'embed' => '<h2>ਕਲੀਨਰ</h2>
            <h4>ਕੀ ਜੇ ਕਲੀਨ ਦਾ ਅਰਥ ਨਵੇਂ ਵਰਗਾ ਹੈ?</h4>
            <p>ਤਕਨੀਕ ਸੋਨਿਕ ਦੀ ਪੇਟੈਂਟ ਅਤੇ ਮਾਲਕੀਅਤ ਵਾਲੀ ਤਕਨਾਲੋਜੀ ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਅਤੇ ਪੁਰਜ਼ਿਆਂ ਨੂੰ ਇਕ ਨਵੀਂ ਸਥਿਤੀ ਲਈ ਸਾਫ਼ ਕਰਦੀ ਹੈ.</p>
            <div>
            <ul>
            <li>ਟੈਕ ਸੋਨਿਕ ਦੇ ਸ਼ਾਮਲ ਹੋਣ ਦੇ ਨਾਲ, ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਅਤੇ ਪੁਰਜ਼ੇ ਸਾਫ਼ ਕੀਤੇ ਜਾਂਦੇ ਹਨ ਅਤੇ 95% ਜਾਂ ਅਸਲ ਡਿਜ਼ਾਈਨ ਕਾਰਗੁਜ਼ਾਰੀ ਤੋਂ ਬਿਹਤਰ ਸੇਵਾ ਤੇ ਵਾਪਸ ਆ ਜਾਂਦੇ ਹਨ.</li>
            <li>ਬਿਹਤਰ ਸਫਾਈ ਦਾ ਅਰਥ ਹੈ ਘੱਟ energyਰਜਾ ਦੀ ਖਪਤ, ਬਿਹਤਰ ਉਤਪਾਦਨ ਅਤੇ ਲੰਬੇ ਸਮੇਂ ਦੇ ਰੱਖ ਰਖਾਵ ਦੇ ਅੰਤਰਾਲ - ਇੱਕ ਪੌਦੇ ਦੇ ਹੇਠਲੇ ਹਿੱਸੇ ਲਈ ਵਧੀਆ.</li>
            <li>ਜਦੋਂ ਅਸੀਂ ਕਹਿੰਦੇ ਹਾਂ&nbsp;<span id="tagyes" style="color: #3598db;">ਹਾਂ, ਅਸੀਂ ਕਰ ਸਕਦੇ ਹਾਂ</span>, ਸਾਡਾ ਮਤਲਬ ਹੈ - ਜੇ ਅਸੀਂ ਇਸਨੂੰ ਸਾਫ ਨਹੀਂ ਕਰ ਸਕਦੇ, ਤਾਂ ਤੁਹਾਨੂੰ ਭੁਗਤਾਨ ਨਹੀਂ ਹੁੰਦਾ! ਉਦਯੋਗ ਵਿੱਚ ਹੋਰ ਕੌਣ ਉਸ ਗਰੰਟੀ ਦੀ ਪੇਸ਼ਕਸ਼ ਕਰਦਾ ਹੈ?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'pa-pk',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'LIMPADOR',
            'embed' => '<h2>LIMPADOR</h2>
            <h4>E se Limpar significasse como novo?</h4>
            <p>A tecnologia patenteada e proprietária da Tech Sonic limpa os trocadores de calor e peças para uma condição semelhante.</p>
            <div>
            <ul>
            <li>Com a adição do Tech Sonic, os trocadores de calor e as peças são limpos e colocados novamente em serviço com 95% ou mais do desempenho do projeto original.</li>
            <li>Melhor limpeza significa menos consumo de energia, melhor produção e intervalos de manutenção mais longos - ótimo para os resultados financeiros de uma fábrica.</li>
            <li>Quando dizemos&nbsp;<span id="tagyes" style="color: #3598db;">Sim, nós podemos</span>, estamos falando sério - Se não podemos limpar, você não paga! Quem mais na indústria oferece essa garantia?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'pt-br',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'ОЧИСТИТЕЛЬ',
            'embed' => '<h2>ОЧИСТИТЕЛЬ</h2>
            <h4>Что, если «Чистый» означает «как новый»?</h4>
            <p>Запатентованная и запатентованная технология Tech Sonic очищает теплообменники и детали до нового состояния.</p>
            <div>
            <ul>
            <li>С добавлением Tech Sonic теплообменники и детали очищаются и возвращаются в эксплуатацию с производительностью 95% или выше от исходной проектной производительности.</li>
            <li>Лучшая очистка означает меньшее потребление энергии, повышение производительности и более длительные интервалы технического обслуживания, что очень важно для чистой прибыли предприятия.</li>
            <li>Когда мы говорим:&nbsp;<span id="tagyes" style="color: #3598db;">Да, мы можем</span>, мы имеем в виду это - Если мы не можем его почистить, вы не платите! Кто еще в отрасли предлагает такую гарантию?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'ru',
        ]);

        DB::table('todos')->insert([
            'todoid' => '11111111',
            'title' => 'น้ำยาทำความสะอาด',
            'embed' => '<h2>น้ำยาทำความสะอาด</h2>
            <h4>จะเป็นอย่างไรถ้า Clean แปลว่าเหมือนใหม่</h4>
            <p>เทคโนโลยีที่จดสิทธิบัตรและเป็นกรรมสิทธิ์ของ Tech Sonic จะทำความสะอาดตัวแลกเปลี่ยนความร้อนและชิ้นส่วนต่างๆให้อยู่ในสภาพเหมือนใหม่</p>
            <div>
            <ul>
            <li>ด้วยการเพิ่ม Tech Sonic เครื่องแลกเปลี่ยนความร้อนและชิ้นส่วนต่างๆจะได้รับการทำความสะอาดและกลับมาให้บริการที่ 95% หรือดีกว่าของประสิทธิภาพการออกแบบเดิม.</li>
            <li>การทำความสะอาดที่ดีขึ้นหมายถึงการใช้พลังงานที่น้อยลงการผลิตที่ดีขึ้นและช่วงเวลาการบำรุงรักษาที่ยาวนานขึ้น - เหมาะสำหรับผลกำไรของโรงงาน</li>
            <li>เมื่อเราพูดว่า&nbsp;<span id="tagyes" style="color: #3598db;">ด้เราทำได้</span>, เราก็หมายความตามนั้น - ถ้าเราทำความสะอาดไม่ได้คุณก็ไม่ต้องจ่าย! มีใครอีกบ้างในอุตสาหกรรมนี้ที่ให้การรับประกัน?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/cleaner1.jpg',
            'locale' => 'th',
        ]);

        // Faster
        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'Faster',
            'embed' => '<h2>Faster</h2>
        <h4>What if Clean meant Like New?</h4>
        <p>Tech Sonic&rsquo;s patented and proprietary technology cleans heat exchangers and parts to a like new condition.</p>
        <div>
        <ul>
        <li>With the addition of Tech Sonic, heat exchangers and parts are cleaned and returned to service at 95% or better of the original design performance.</li>
        <li>Better cleaning means less energy consumption, improved production and longer maintenance intervals &ndash; great for a plant&rsquo;s bottom line.</li>
        <li>When we say&nbsp;<span id="tagyes" style="color: #3598db;">YES WE CAN</span>, we mean it - If we can&rsquo;t clean it, you don&rsquo;t pay! Who else in the industry offers that guarantee?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'en',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => '更快',
            'embed' => '<h2> <span style ="color：#f12f83;">更快</span> </h2>
            <h4>如果您的交换器可以在一半时间内被清洁怎么办？</h4>
            <p>关闭工厂的每个小时都会花费一大笔钱。</p>
            <div>
            <ul>
            <li>维护越快，工厂恢复运行的速度就越快。</li>
            <li><span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup>&nbsp;过程将清洗热交换器的速度是在自己的洗垫上进行水力喷射的两倍。</li>
            <li>根据壳牌荷兰的Moerdijk荷兰工厂，加上Tech Sonic <br />，清洗速度“快了两倍，成本却降低了一半"。</li>
            <li>我们安排并跟踪我们清洁的所有物品，如果您按时交货，我们将按时退货。</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'cn',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'SCHONER',
            'embed' => '<h2>SCHONER</h2>
        <h4>Wat als Clean als nieuw betekende?</h4>
        <p>De gepatenteerde en gepatenteerde technologie van Tech Sonic reinigt warmtewisselaars en onderdelen tot een als nieuwstaat.</p>
        <div>
        <ul>
        <li>Met de toevoeging van Tech Sonic worden warmtewisselaars en onderdelen gereinigd en weer in gebruik genomen met 95% of beter van de oorspronkelijke ontwerpprestaties.</li>
        <li>Betere reiniging betekent minder energieverbruik, verbeterde productie en langere onderhoudsintervallen - ideaal voor het bedrijfsresultaat van een plant.</li>
        <li>Als we zeggen&nbsp;<span id="tagyes" style="color: #3598db;">JA KUNNEN</span>, bedoelen we het: als we het niet kunnen schoonmaken, betaalt u niet! Wie biedt nog meer in de branche die garantie?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'de',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
        <h4>¿Qué pasa si limpio significa como nuevo?</h4>
        <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
        <div>
        <ul>
        <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
        <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
        <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'es-us',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
        <h4>¿Qué pasa si limpio significa como nuevo?</h4>
        <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
        <div>
        <ul>
        <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
        <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
        <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'es',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'NETTOYEUR',
            'embed' => '<h2>NETTOYEUR</h2>
        <h4>Et si Clean signifiait comme neuf?</h4>
        <p>La technologie brevetée et exclusive de Tech Sonic nettoie les échangeurs de chaleur et les pièces dans un état comme neuf.</p>
        <div>
        <ul>
        <li>Avec l\'ajout de Tech Sonic, les échangeurs de chaleur et les pièces sont nettoyés et remis en service à 95% ou plus des performances de conception d\'origine.</li>
        <li>Un meilleur nettoyage signifie moins de consommation d’énergie, une production améliorée et des intervalles de maintenance plus longs - parfait pour les résultats d’une usine.</li>
        <li>Quand nous disons&nbsp;<span id="tagyes" style="color: #3598db;">OUI, NOUS POUVONS</span>, nous le pensons - Si nous ne pouvons pas le nettoyer, vous ne payez pas! Qui d\'autre dans l\'industrie offre cette garantie?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'fr',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'सफाई वाला',
            'embed' => '<h2>सफाई वाला</h2>
        <h4>क्या होगा अगर क्लीन का मतलब न्यू जैसा हो?</h4>
        <p>टेक सोनिक की पेटेंटेड और मालिकाना तकनीक हीट एक्सचेंजर्स और पुर्जों को एक नई स्थिति की तरह साफ करती है।</p>
        <div>
        <ul>
        <li>टेक सोनिक के साथ, हीट एक्सचेंजर्स और भागों को साफ किया जाता है और मूल डिजाइन प्रदर्शन के 95% या बेहतर सेवा में वापस आ जाता है।</li>
        <li>बेहतर सफाई का मतलब है कम ऊर्जा की खपत, बेहतर उत्पादन और लंबे समय तक रखरखाव अंतराल - एक संयंत्र की निचली रेखा के लिए महान।</li>
        <li>जब हम कहते हैं&nbsp;<span id="tagyes" style="color: #3598db;">हाँ, हम कर सकते हैं</span>, तो हमारा मतलब है - यदि हम इसे साफ नहीं कर सकते, तो आप भुगतान नहीं करेंगे! उद्योग में और कौन गारंटी देता है?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'hi-in',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'クリーナー',
            'embed' => '<h2>クリーナー</h2>
        <h4>クリーンが新品のように意味する場合はどうなりますか？</h4>
        <p>クリーンが新品のように意味する場合はどうなりますか？</p>
        <div>
        <ul>
        <li>Tech Sonicを追加すると、熱交換器と部品が洗浄され、元の設計性能の95％以上でサービスに戻ります。</li>
        <li>より良い洗浄は、エネルギー消費の削減、生産の改善、およびメンテナンス間隔の延長を意味します。これは、プラントの収益に最適です。</li>
        <li>私たちが&nbsp;<span id="tagyes" style="color: #3598db;">はい、できます</span>と言うとき, それはそれを意味します-私たちがそれをきれいにすることができないならば、あなたは支払いません！ 業界の他の誰がその保証を提供していますか？</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'jp',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'PEMBERSIH',
            'embed' => '<h2>PEMBERSIH</h2>
        <h4>Bagaimana jika Bersih bermaksud Seperti Baru?</h4>
        <p>Teknologi yang dipatenkan dan dimiliki oleh Tech Sonic membersihkan penukar haba dan alat ganti ke keadaan baru yang serupa.</p>
        <div>
        <ul>
        <li>Dengan penambahan Tech Sonic, penukar haba dan alat ganti dibersihkan dan kembali berfungsi pada tahap 95% atau lebih baik daripada prestasi reka bentuk asal.</li>
        <li>Pembersihan yang lebih baik bermaksud penggunaan tenaga yang lebih sedikit, pengeluaran yang lebih baik dan selang penyelenggaraan yang lebih lama - bagus untuk bahagian bawah kilang.</li>
        <li>Apabila kita mengatakan&nbsp;<span id="tagyes" style="color: #3598db;">Ya, kita boleh</span>, kita bermaksud - Sekiranya kita tidak dapat membersihkannya, anda tidak membayar! Siapa lagi</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'ml',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
        <h4>¿Qué pasa si limpio significa como nuevo?</h4>
        <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
        <div>
        <ul>
        <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
        <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
        <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'mx',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'ਕਲੀਨਰ',
            'embed' => '<h2>ਕਲੀਨਰ</h2>
        <h4>ਕੀ ਜੇ ਕਲੀਨ ਦਾ ਅਰਥ ਨਵੇਂ ਵਰਗਾ ਹੈ?</h4>
        <p>ਤਕਨੀਕ ਸੋਨਿਕ ਦੀ ਪੇਟੈਂਟ ਅਤੇ ਮਾਲਕੀਅਤ ਵਾਲੀ ਤਕਨਾਲੋਜੀ ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਅਤੇ ਪੁਰਜ਼ਿਆਂ ਨੂੰ ਇਕ ਨਵੀਂ ਸਥਿਤੀ ਲਈ ਸਾਫ਼ ਕਰਦੀ ਹੈ.</p>
        <div>
        <ul>
        <li>ਟੈਕ ਸੋਨਿਕ ਦੇ ਸ਼ਾਮਲ ਹੋਣ ਦੇ ਨਾਲ, ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਅਤੇ ਪੁਰਜ਼ੇ ਸਾਫ਼ ਕੀਤੇ ਜਾਂਦੇ ਹਨ ਅਤੇ 95% ਜਾਂ ਅਸਲ ਡਿਜ਼ਾਈਨ ਕਾਰਗੁਜ਼ਾਰੀ ਤੋਂ ਬਿਹਤਰ ਸੇਵਾ ਤੇ ਵਾਪਸ ਆ ਜਾਂਦੇ ਹਨ.</li>
        <li>ਬਿਹਤਰ ਸਫਾਈ ਦਾ ਅਰਥ ਹੈ ਘੱਟ energyਰਜਾ ਦੀ ਖਪਤ, ਬਿਹਤਰ ਉਤਪਾਦਨ ਅਤੇ ਲੰਬੇ ਸਮੇਂ ਦੇ ਰੱਖ ਰਖਾਵ ਦੇ ਅੰਤਰਾਲ - ਇੱਕ ਪੌਦੇ ਦੇ ਹੇਠਲੇ ਹਿੱਸੇ ਲਈ ਵਧੀਆ.</li>
        <li>ਜਦੋਂ ਅਸੀਂ ਕਹਿੰਦੇ ਹਾਂ&nbsp;<span id="tagyes" style="color: #3598db;">ਹਾਂ, ਅਸੀਂ ਕਰ ਸਕਦੇ ਹਾਂ</span>, ਸਾਡਾ ਮਤਲਬ ਹੈ - ਜੇ ਅਸੀਂ ਇਸਨੂੰ ਸਾਫ ਨਹੀਂ ਕਰ ਸਕਦੇ, ਤਾਂ ਤੁਹਾਨੂੰ ਭੁਗਤਾਨ ਨਹੀਂ ਹੁੰਦਾ! ਉਦਯੋਗ ਵਿੱਚ ਹੋਰ ਕੌਣ ਉਸ ਗਰੰਟੀ ਦੀ ਪੇਸ਼ਕਸ਼ ਕਰਦਾ ਹੈ?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'pa-pk',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'LIMPADOR',
            'embed' => '<h2>LIMPADOR</h2>
        <h4>E se Limpar significasse como novo?</h4>
        <p>A tecnologia patenteada e proprietária da Tech Sonic limpa os trocadores de calor e peças para uma condição semelhante.</p>
        <div>
        <ul>
        <li>Com a adição do Tech Sonic, os trocadores de calor e as peças são limpos e colocados novamente em serviço com 95% ou mais do desempenho do projeto original.</li>
        <li>Melhor limpeza significa menos consumo de energia, melhor produção e intervalos de manutenção mais longos - ótimo para os resultados financeiros de uma fábrica.</li>
        <li>Quando dizemos&nbsp;<span id="tagyes" style="color: #3598db;">Sim, nós podemos</span>, estamos falando sério - Se não podemos limpar, você não paga! Quem mais na indústria oferece essa garantia?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'pt-br',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'ОЧИСТИТЕЛЬ',
            'embed' => '<h2>ОЧИСТИТЕЛЬ</h2>
        <h4>Что, если «Чистый» означает «как новый»?</h4>
        <p>Запатентованная и запатентованная технология Tech Sonic очищает теплообменники и детали до нового состояния.</p>
        <div>
        <ul>
        <li>С добавлением Tech Sonic теплообменники и детали очищаются и возвращаются в эксплуатацию с производительностью 95% или выше от исходной проектной производительности.</li>
        <li>Лучшая очистка означает меньшее потребление энергии, повышение производительности и более длительные интервалы технического обслуживания, что очень важно для чистой прибыли предприятия.</li>
        <li>Когда мы говорим:&nbsp;<span id="tagyes" style="color: #3598db;">Да, мы можем</span>, мы имеем в виду это - Если мы не можем его почистить, вы не платите! Кто еще в отрасли предлагает такую гарантию?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'ru',
        ]);

        DB::table('todos')->insert([
            'todoid' => '22222222',
            'title' => 'น้ำยาทำความสะอาด',
            'embed' => '<h2>น้ำยาทำความสะอาด</h2>
        <h4>จะเป็นอย่างไรถ้า Clean แปลว่าเหมือนใหม่</h4>
        <p>เทคโนโลยีที่จดสิทธิบัตรและเป็นกรรมสิทธิ์ของ Tech Sonic จะทำความสะอาดตัวแลกเปลี่ยนความร้อนและชิ้นส่วนต่างๆให้อยู่ในสภาพเหมือนใหม่</p>
        <div>
        <ul>
        <li>ด้วยการเพิ่ม Tech Sonic เครื่องแลกเปลี่ยนความร้อนและชิ้นส่วนต่างๆจะได้รับการทำความสะอาดและกลับมาให้บริการที่ 95% หรือดีกว่าของประสิทธิภาพการออกแบบเดิม.</li>
        <li>การทำความสะอาดที่ดีขึ้นหมายถึงการใช้พลังงานที่น้อยลงการผลิตที่ดีขึ้นและช่วงเวลาการบำรุงรักษาที่ยาวนานขึ้น - เหมาะสำหรับผลกำไรของโรงงาน</li>
        <li>เมื่อเราพูดว่า&nbsp;<span id="tagyes" style="color: #3598db;">ด้เราทำได้</span>, เราก็หมายความตามนั้น - ถ้าเราทำความสะอาดไม่ได้คุณก็ไม่ต้องจ่าย! มีใครอีกบ้างในอุตสาหกรรมนี้ที่ให้การรับประกัน?</li>
        </ul>
        </div>',
            'image' => 'assets/img/values/faster2.jpg',
            'locale' => 'th',
        ]);
        // Safer
        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'Safer',
            'embed' => '<h2>Safer</h2>
            <h4>What if Clean meant Like New?</h4>
            <p>Tech Sonic&rsquo;s patented and proprietary technology cleans heat exchangers and parts to a like new condition.</p>
            <div>
            <ul>
            <li>With the addition of Tech Sonic, heat exchangers and parts are cleaned and returned to service at 95% or better of the original design performance.</li>
            <li>Better cleaning means less energy consumption, improved production and longer maintenance intervals &ndash; great for a plant&rsquo;s bottom line.</li>
            <li>When we say&nbsp;<span id="tagyes" style="color: #3598db;">YES WE CAN</span>, we mean it - If we can&rsquo;t clean it, you don&rsquo;t pay! Who else in the industry offers that guarantee?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'en',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => '清洁器',
            'embed' => '<h2>清洁器</h2>
            <h4>如果清洁意味着像新的一样怎么办？</h4>
            <p>Tech Sonic的专利和专有技术可以将热交换器和零件清洗到新的状态。</p>
            <div>
            <ul>
            <li>通过添加Tech Sonic，可以清洁热交换器和零件，并使其恢复到原始设计性能的95％或更高。</li>
            <li>更好的清洁意味着更少的能源消耗，提高的生产效率和更长的维护间隔，这对于工厂的底线而言非常重要。</li>
            <li>当我们说&nbsp;<span id="tagyes" style="color: #3598db;">是的，我们可以</span>时, 是指-如果我们无法清洁，则您无需付款！ 行业中还有谁可以提供保证？</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'cn',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'SCHONER',
            'embed' => '<h2>SCHONER</h2>
            <h4>Wat als Clean als nieuw betekende?</h4>
            <p>De gepatenteerde en gepatenteerde technologie van Tech Sonic reinigt warmtewisselaars en onderdelen tot een als nieuwstaat.</p>
            <div>
            <ul>
            <li>Met de toevoeging van Tech Sonic worden warmtewisselaars en onderdelen gereinigd en weer in gebruik genomen met 95% of beter van de oorspronkelijke ontwerpprestaties.</li>
            <li>Betere reiniging betekent minder energieverbruik, verbeterde productie en langere onderhoudsintervallen - ideaal voor het bedrijfsresultaat van een plant.</li>
            <li>Als we zeggen&nbsp;<span id="tagyes" style="color: #3598db;">JA KUNNEN</span>, bedoelen we het: als we het niet kunnen schoonmaken, betaalt u niet! Wie biedt nog meer in de branche die garantie?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'de',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
            <h4>¿Qué pasa si limpio significa como nuevo?</h4>
            <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
            <div>
            <ul>
            <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
            <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
            <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'es-us',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
            <h4>¿Qué pasa si limpio significa como nuevo?</h4>
            <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
            <div>
            <ul>
            <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
            <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
            <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'es',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'NETTOYEUR',
            'embed' => '<h2>NETTOYEUR</h2>
            <h4>Et si Clean signifiait comme neuf?</h4>
            <p>La technologie brevetée et exclusive de Tech Sonic nettoie les échangeurs de chaleur et les pièces dans un état comme neuf.</p>
            <div>
            <ul>
            <li>Avec l\'ajout de Tech Sonic, les échangeurs de chaleur et les pièces sont nettoyés et remis en service à 95% ou plus des performances de conception d\'origine.</li>
            <li>Un meilleur nettoyage signifie moins de consommation d’énergie, une production améliorée et des intervalles de maintenance plus longs - parfait pour les résultats d’une usine.</li>
            <li>Quand nous disons&nbsp;<span id="tagyes" style="color: #3598db;">OUI, NOUS POUVONS</span>, nous le pensons - Si nous ne pouvons pas le nettoyer, vous ne payez pas! Qui d\'autre dans l\'industrie offre cette garantie?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'fr',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'सफाई वाला',
            'embed' =>'<h2>सफाई वाला</h2>
            <h4>क्या होगा अगर क्लीन का मतलब न्यू जैसा हो?</h4>
            <p>टेक सोनिक की पेटेंटेड और मालिकाना तकनीक हीट एक्सचेंजर्स और पुर्जों को एक नई स्थिति की तरह साफ करती है।</p>
            <div>
            <ul>
            <li>टेक सोनिक के साथ, हीट एक्सचेंजर्स और भागों को साफ किया जाता है और मूल डिजाइन प्रदर्शन के 95% या बेहतर सेवा में वापस आ जाता है।</li>
            <li>बेहतर सफाई का मतलब है कम ऊर्जा की खपत, बेहतर उत्पादन और लंबे समय तक रखरखाव अंतराल - एक संयंत्र की निचली रेखा के लिए महान।</li>
            <li>जब हम कहते हैं&nbsp;<span id="tagyes" style="color: #3598db;">हाँ, हम कर सकते हैं</span>, तो हमारा मतलब है - यदि हम इसे साफ नहीं कर सकते, तो आप भुगतान नहीं करेंगे! उद्योग में और कौन गारंटी देता है?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'hi-in',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'クリーナー',
            'embed' => '<h2>クリーナー</h2>
            <h4>クリーンが新品のように意味する場合はどうなりますか？</h4>
            <p>クリーンが新品のように意味する場合はどうなりますか？</p>
            <div>
            <ul>
            <li>Tech Sonicを追加すると、熱交換器と部品が洗浄され、元の設計性能の95％以上でサービスに戻ります。</li>
            <li>より良い洗浄は、エネルギー消費の削減、生産の改善、およびメンテナンス間隔の延長を意味します。これは、プラントの収益に最適です。</li>
            <li>私たちが&nbsp;<span id="tagyes" style="color: #3598db;">はい、できます</span>と言うとき, それはそれを意味します-私たちがそれをきれいにすることができないならば、あなたは支払いません！ 業界の他の誰がその保証を提供していますか？</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'jp',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'PEMBERSIH',
            'embed' => '<h2>PEMBERSIH</h2>
            <h4>Bagaimana jika Bersih bermaksud Seperti Baru?</h4>
            <p>Teknologi yang dipatenkan dan dimiliki oleh Tech Sonic membersihkan penukar haba dan alat ganti ke keadaan baru yang serupa.</p>
            <div>
            <ul>
            <li>Dengan penambahan Tech Sonic, penukar haba dan alat ganti dibersihkan dan kembali berfungsi pada tahap 95% atau lebih baik daripada prestasi reka bentuk asal.</li>
            <li>Pembersihan yang lebih baik bermaksud penggunaan tenaga yang lebih sedikit, pengeluaran yang lebih baik dan selang penyelenggaraan yang lebih lama - bagus untuk bahagian bawah kilang.</li>
            <li>Apabila kita mengatakan&nbsp;<span id="tagyes" style="color: #3598db;">Ya, kita boleh</span>, kita bermaksud - Sekiranya kita tidak dapat membersihkannya, anda tidak membayar! Siapa lagi</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'ml',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
            <h4>¿Qué pasa si limpio significa como nuevo?</h4>
            <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
            <div>
            <ul>
            <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
            <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
            <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'mx',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'ਕਲੀਨਰ',
            'embed' => '<h2>ਕਲੀਨਰ</h2>
            <h4>ਕੀ ਜੇ ਕਲੀਨ ਦਾ ਅਰਥ ਨਵੇਂ ਵਰਗਾ ਹੈ?</h4>
            <p>ਤਕਨੀਕ ਸੋਨਿਕ ਦੀ ਪੇਟੈਂਟ ਅਤੇ ਮਾਲਕੀਅਤ ਵਾਲੀ ਤਕਨਾਲੋਜੀ ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਅਤੇ ਪੁਰਜ਼ਿਆਂ ਨੂੰ ਇਕ ਨਵੀਂ ਸਥਿਤੀ ਲਈ ਸਾਫ਼ ਕਰਦੀ ਹੈ.</p>
            <div>
            <ul>
            <li>ਟੈਕ ਸੋਨਿਕ ਦੇ ਸ਼ਾਮਲ ਹੋਣ ਦੇ ਨਾਲ, ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਅਤੇ ਪੁਰਜ਼ੇ ਸਾਫ਼ ਕੀਤੇ ਜਾਂਦੇ ਹਨ ਅਤੇ 95% ਜਾਂ ਅਸਲ ਡਿਜ਼ਾਈਨ ਕਾਰਗੁਜ਼ਾਰੀ ਤੋਂ ਬਿਹਤਰ ਸੇਵਾ ਤੇ ਵਾਪਸ ਆ ਜਾਂਦੇ ਹਨ.</li>
            <li>ਬਿਹਤਰ ਸਫਾਈ ਦਾ ਅਰਥ ਹੈ ਘੱਟ energyਰਜਾ ਦੀ ਖਪਤ, ਬਿਹਤਰ ਉਤਪਾਦਨ ਅਤੇ ਲੰਬੇ ਸਮੇਂ ਦੇ ਰੱਖ ਰਖਾਵ ਦੇ ਅੰਤਰਾਲ - ਇੱਕ ਪੌਦੇ ਦੇ ਹੇਠਲੇ ਹਿੱਸੇ ਲਈ ਵਧੀਆ.</li>
            <li>ਜਦੋਂ ਅਸੀਂ ਕਹਿੰਦੇ ਹਾਂ&nbsp;<span id="tagyes" style="color: #3598db;">ਹਾਂ, ਅਸੀਂ ਕਰ ਸਕਦੇ ਹਾਂ</span>, ਸਾਡਾ ਮਤਲਬ ਹੈ - ਜੇ ਅਸੀਂ ਇਸਨੂੰ ਸਾਫ ਨਹੀਂ ਕਰ ਸਕਦੇ, ਤਾਂ ਤੁਹਾਨੂੰ ਭੁਗਤਾਨ ਨਹੀਂ ਹੁੰਦਾ! ਉਦਯੋਗ ਵਿੱਚ ਹੋਰ ਕੌਣ ਉਸ ਗਰੰਟੀ ਦੀ ਪੇਸ਼ਕਸ਼ ਕਰਦਾ ਹੈ?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'pa-pk',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'LIMPADOR',
            'embed' => '<h2>LIMPADOR</h2>
            <h4>E se Limpar significasse como novo?</h4>
            <p>A tecnologia patenteada e proprietária da Tech Sonic limpa os trocadores de calor e peças para uma condição semelhante.</p>
            <div>
            <ul>
            <li>Com a adição do Tech Sonic, os trocadores de calor e as peças são limpos e colocados novamente em serviço com 95% ou mais do desempenho do projeto original.</li>
            <li>Melhor limpeza significa menos consumo de energia, melhor produção e intervalos de manutenção mais longos - ótimo para os resultados financeiros de uma fábrica.</li>
            <li>Quando dizemos&nbsp;<span id="tagyes" style="color: #3598db;">Sim, nós podemos</span>, estamos falando sério - Se não podemos limpar, você não paga! Quem mais na indústria oferece essa garantia?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'pt-br',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'ОЧИСТИТЕЛЬ',
            'embed' => '<h2>ОЧИСТИТЕЛЬ</h2>
            <h4>Что, если «Чистый» означает «как новый»?</h4>
            <p>Запатентованная и запатентованная технология Tech Sonic очищает теплообменники и детали до нового состояния.</p>
            <div>
            <ul>
            <li>С добавлением Tech Sonic теплообменники и детали очищаются и возвращаются в эксплуатацию с производительностью 95% или выше от исходной проектной производительности.</li>
            <li>Лучшая очистка означает меньшее потребление энергии, повышение производительности и более длительные интервалы технического обслуживания, что очень важно для чистой прибыли предприятия.</li>
            <li>Когда мы говорим:&nbsp;<span id="tagyes" style="color: #3598db;">Да, мы можем</span>, мы имеем в виду это - Если мы не можем его почистить, вы не платите! Кто еще в отрасли предлагает такую гарантию?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'ru',
        ]);

        DB::table('todos')->insert([
            'todoid' => '33333333',
            'title' => 'น้ำยาทำความสะอาด',
            'embed' => '<h2>น้ำยาทำความสะอาด</h2>
            <h4>จะเป็นอย่างไรถ้า Clean แปลว่าเหมือนใหม่</h4>
            <p>เทคโนโลยีที่จดสิทธิบัตรและเป็นกรรมสิทธิ์ของ Tech Sonic จะทำความสะอาดตัวแลกเปลี่ยนความร้อนและชิ้นส่วนต่างๆให้อยู่ในสภาพเหมือนใหม่</p>
            <div>
            <ul>
            <li>ด้วยการเพิ่ม Tech Sonic เครื่องแลกเปลี่ยนความร้อนและชิ้นส่วนต่างๆจะได้รับการทำความสะอาดและกลับมาให้บริการที่ 95% หรือดีกว่าของประสิทธิภาพการออกแบบเดิม.</li>
            <li>การทำความสะอาดที่ดีขึ้นหมายถึงการใช้พลังงานที่น้อยลงการผลิตที่ดีขึ้นและช่วงเวลาการบำรุงรักษาที่ยาวนานขึ้น - เหมาะสำหรับผลกำไรของโรงงาน</li>
            <li>เมื่อเราพูดว่า&nbsp;<span id="tagyes" style="color: #3598db;">ด้เราทำได้</span>, เราก็หมายความตามนั้น - ถ้าเราทำความสะอาดไม่ได้คุณก็ไม่ต้องจ่าย! มีใครอีกบ้างในอุตสาหกรรมนี้ที่ให้การรับประกัน?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/safer3.jpg',
            'locale' => 'th',
        ]);
        // Greener
        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'Greener',
            'embed' => '<h2>Greener</h2>
            <h4>What if Clean meant Like New?</h4>
            <p>Tech Sonic&rsquo;s patented and proprietary technology cleans heat exchangers and parts to a like new condition.</p>
            <div>
            <ul>
            <li>With the addition of Tech Sonic, heat exchangers and parts are cleaned and returned to service at 95% or better of the original design performance.</li>
            <li>Better cleaning means less energy consumption, improved production and longer maintenance intervals &ndash; great for a plant&rsquo;s bottom line.</li>
            <li>When we say&nbsp;<span id="tagyes" style="color: #3598db;">YES WE CAN</span>, we mean it - If we can&rsquo;t clean it, you don&rsquo;t pay! Who else in the industry offers that guarantee?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'en',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => '清洁器',
            'embed' => '<h2>清洁器</h2>
            <h4>如果清洁意味着像新的一样怎么办？</h4>
            <p>Tech Sonic的专利和专有技术可以将热交换器和零件清洗到新的状态。</p>
            <div>
            <ul>
            <li>通过添加Tech Sonic，可以清洁热交换器和零件，并使其恢复到原始设计性能的95％或更高。</li>
            <li>更好的清洁意味着更少的能源消耗，提高的生产效率和更长的维护间隔，这对于工厂的底线而言非常重要。</li>
            <li>当我们说&nbsp;<span id="tagyes" style="color: #3598db;">是的，我们可以</span>时, 是指-如果我们无法清洁，则您无需付款！ 行业中还有谁可以提供保证？</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'cn',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'SCHONER',
            'embed' => '<h2>SCHONER</h2>
            <h4>Wat als Clean als nieuw betekende?</h4>
            <p>De gepatenteerde en gepatenteerde technologie van Tech Sonic reinigt warmtewisselaars en onderdelen tot een als nieuwstaat.</p>
            <div>
            <ul>
            <li>Met de toevoeging van Tech Sonic worden warmtewisselaars en onderdelen gereinigd en weer in gebruik genomen met 95% of beter van de oorspronkelijke ontwerpprestaties.</li>
            <li>Betere reiniging betekent minder energieverbruik, verbeterde productie en langere onderhoudsintervallen - ideaal voor het bedrijfsresultaat van een plant.</li>
            <li>Als we zeggen&nbsp;<span id="tagyes" style="color: #3598db;">JA KUNNEN</span>, bedoelen we het: als we het niet kunnen schoonmaken, betaalt u niet! Wie biedt nog meer in de branche die garantie?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'de',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
            <h4>¿Qué pasa si limpio significa como nuevo?</h4>
            <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
            <div>
            <ul>
            <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
            <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
            <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'es-us',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
            <h4>¿Qué pasa si limpio significa como nuevo?</h4>
            <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
            <div>
            <ul>
            <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
            <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
            <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'es',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'NETTOYEUR',
            'embed' => '<h2>NETTOYEUR</h2>
            <h4>Et si Clean signifiait comme neuf?</h4>
            <p>La technologie brevetée et exclusive de Tech Sonic nettoie les échangeurs de chaleur et les pièces dans un état comme neuf.</p>
            <div>
            <ul>
            <li>Avec l\'ajout de Tech Sonic, les échangeurs de chaleur et les pièces sont nettoyés et remis en service à 95% ou plus des performances de conception d\'origine.</li>
            <li>Un meilleur nettoyage signifie moins de consommation d’énergie, une production améliorée et des intervalles de maintenance plus longs - parfait pour les résultats d’une usine.</li>
            <li>Quand nous disons&nbsp;<span id="tagyes" style="color: #3598db;">OUI, NOUS POUVONS</span>, nous le pensons - Si nous ne pouvons pas le nettoyer, vous ne payez pas! Qui d\'autre dans l\'industrie offre cette garantie?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'fr',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'सफाई वाला',
            'embed' =>'<h2>सफाई वाला</h2>
            <h4>क्या होगा अगर क्लीन का मतलब न्यू जैसा हो?</h4>
            <p>टेक सोनिक की पेटेंटेड और मालिकाना तकनीक हीट एक्सचेंजर्स और पुर्जों को एक नई स्थिति की तरह साफ करती है।</p>
            <div>
            <ul>
            <li>टेक सोनिक के साथ, हीट एक्सचेंजर्स और भागों को साफ किया जाता है और मूल डिजाइन प्रदर्शन के 95% या बेहतर सेवा में वापस आ जाता है।</li>
            <li>बेहतर सफाई का मतलब है कम ऊर्जा की खपत, बेहतर उत्पादन और लंबे समय तक रखरखाव अंतराल - एक संयंत्र की निचली रेखा के लिए महान।</li>
            <li>जब हम कहते हैं&nbsp;<span id="tagyes" style="color: #3598db;">हाँ, हम कर सकते हैं</span>, तो हमारा मतलब है - यदि हम इसे साफ नहीं कर सकते, तो आप भुगतान नहीं करेंगे! उद्योग में और कौन गारंटी देता है?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'hi-in',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'クリーナー',
            'embed' => '<h2>クリーナー</h2>
            <h4>クリーンが新品のように意味する場合はどうなりますか？</h4>
            <p>クリーンが新品のように意味する場合はどうなりますか？</p>
            <div>
            <ul>
            <li>Tech Sonicを追加すると、熱交換器と部品が洗浄され、元の設計性能の95％以上でサービスに戻ります。</li>
            <li>より良い洗浄は、エネルギー消費の削減、生産の改善、およびメンテナンス間隔の延長を意味します。これは、プラントの収益に最適です。</li>
            <li>私たちが&nbsp;<span id="tagyes" style="color: #3598db;">はい、できます</span>と言うとき, それはそれを意味します-私たちがそれをきれいにすることができないならば、あなたは支払いません！ 業界の他の誰がその保証を提供していますか？</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'jp',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'PEMBERSIH',
            'embed' => '<h2>PEMBERSIH</h2>
            <h4>Bagaimana jika Bersih bermaksud Seperti Baru?</h4>
            <p>Teknologi yang dipatenkan dan dimiliki oleh Tech Sonic membersihkan penukar haba dan alat ganti ke keadaan baru yang serupa.</p>
            <div>
            <ul>
            <li>Dengan penambahan Tech Sonic, penukar haba dan alat ganti dibersihkan dan kembali berfungsi pada tahap 95% atau lebih baik daripada prestasi reka bentuk asal.</li>
            <li>Pembersihan yang lebih baik bermaksud penggunaan tenaga yang lebih sedikit, pengeluaran yang lebih baik dan selang penyelenggaraan yang lebih lama - bagus untuk bahagian bawah kilang.</li>
            <li>Apabila kita mengatakan&nbsp;<span id="tagyes" style="color: #3598db;">Ya, kita boleh</span>, kita bermaksud - Sekiranya kita tidak dapat membersihkannya, anda tidak membayar! Siapa lagi</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'ml',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'LIMPIADOR',
            'embed' => '<h2>LIMPIADOR</h2>
            <h4>¿Qué pasa si limpio significa como nuevo?</h4>
            <p>La tecnología patentada y patentada de Tech Sonic limpia los intercambiadores de calor y las piezas para dejarlos como nuevos.</p>
            <div>
            <ul>
            <li>Con la adición de Tech Sonic, los intercambiadores de calor y las piezas se limpian y se vuelven a poner en servicio al 95% o más del rendimiento del diseño original.</li>
            <li>Una mejor limpieza significa menos consumo de energía, producción mejorada e intervalos de mantenimiento más prolongados, lo que es excelente para los resultados finales de una planta.</li>
            <li>Cuando decimos&nbsp;<span id="tagyes" style="color: #3598db;">SÍ, PODEMOS</span>, lo decimos en serio: si no podemos limpiarlo, ¡no paga! ¿Quién más en la industria ofrece esa garantía?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'mx',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'ਕਲੀਨਰ',
            'embed' => '<h2>ਕਲੀਨਰ</h2>
            <h4>ਕੀ ਜੇ ਕਲੀਨ ਦਾ ਅਰਥ ਨਵੇਂ ਵਰਗਾ ਹੈ?</h4>
            <p>ਤਕਨੀਕ ਸੋਨਿਕ ਦੀ ਪੇਟੈਂਟ ਅਤੇ ਮਾਲਕੀਅਤ ਵਾਲੀ ਤਕਨਾਲੋਜੀ ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਅਤੇ ਪੁਰਜ਼ਿਆਂ ਨੂੰ ਇਕ ਨਵੀਂ ਸਥਿਤੀ ਲਈ ਸਾਫ਼ ਕਰਦੀ ਹੈ.</p>
            <div>
            <ul>
            <li>ਟੈਕ ਸੋਨਿਕ ਦੇ ਸ਼ਾਮਲ ਹੋਣ ਦੇ ਨਾਲ, ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਅਤੇ ਪੁਰਜ਼ੇ ਸਾਫ਼ ਕੀਤੇ ਜਾਂਦੇ ਹਨ ਅਤੇ 95% ਜਾਂ ਅਸਲ ਡਿਜ਼ਾਈਨ ਕਾਰਗੁਜ਼ਾਰੀ ਤੋਂ ਬਿਹਤਰ ਸੇਵਾ ਤੇ ਵਾਪਸ ਆ ਜਾਂਦੇ ਹਨ.</li>
            <li>ਬਿਹਤਰ ਸਫਾਈ ਦਾ ਅਰਥ ਹੈ ਘੱਟ energyਰਜਾ ਦੀ ਖਪਤ, ਬਿਹਤਰ ਉਤਪਾਦਨ ਅਤੇ ਲੰਬੇ ਸਮੇਂ ਦੇ ਰੱਖ ਰਖਾਵ ਦੇ ਅੰਤਰਾਲ - ਇੱਕ ਪੌਦੇ ਦੇ ਹੇਠਲੇ ਹਿੱਸੇ ਲਈ ਵਧੀਆ.</li>
            <li>ਜਦੋਂ ਅਸੀਂ ਕਹਿੰਦੇ ਹਾਂ&nbsp;<span id="tagyes" style="color: #3598db;">ਹਾਂ, ਅਸੀਂ ਕਰ ਸਕਦੇ ਹਾਂ</span>, ਸਾਡਾ ਮਤਲਬ ਹੈ - ਜੇ ਅਸੀਂ ਇਸਨੂੰ ਸਾਫ ਨਹੀਂ ਕਰ ਸਕਦੇ, ਤਾਂ ਤੁਹਾਨੂੰ ਭੁਗਤਾਨ ਨਹੀਂ ਹੁੰਦਾ! ਉਦਯੋਗ ਵਿੱਚ ਹੋਰ ਕੌਣ ਉਸ ਗਰੰਟੀ ਦੀ ਪੇਸ਼ਕਸ਼ ਕਰਦਾ ਹੈ?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'pa-pk',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'LIMPADOR',
            'embed' => '<h2>LIMPADOR</h2>
            <h4>E se Limpar significasse como novo?</h4>
            <p>A tecnologia patenteada e proprietária da Tech Sonic limpa os trocadores de calor e peças para uma condição semelhante.</p>
            <div>
            <ul>
            <li>Com a adição do Tech Sonic, os trocadores de calor e as peças são limpos e colocados novamente em serviço com 95% ou mais do desempenho do projeto original.</li>
            <li>Melhor limpeza significa menos consumo de energia, melhor produção e intervalos de manutenção mais longos - ótimo para os resultados financeiros de uma fábrica.</li>
            <li>Quando dizemos&nbsp;<span id="tagyes" style="color: #3598db;">Sim, nós podemos</span>, estamos falando sério - Se não podemos limpar, você não paga! Quem mais na indústria oferece essa garantia?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'pt-br',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'ОЧИСТИТЕЛЬ',
            'embed' => '<h2>ОЧИСТИТЕЛЬ</h2>
            <h4>Что, если «Чистый» означает «как новый»?</h4>
            <p>Запатентованная и запатентованная технология Tech Sonic очищает теплообменники и детали до нового состояния.</p>
            <div>
            <ul>
            <li>С добавлением Tech Sonic теплообменники и детали очищаются и возвращаются в эксплуатацию с производительностью 95% или выше от исходной проектной производительности.</li>
            <li>Лучшая очистка означает меньшее потребление энергии, повышение производительности и более длительные интервалы технического обслуживания, что очень важно для чистой прибыли предприятия.</li>
            <li>Когда мы говорим:&nbsp;<span id="tagyes" style="color: #3598db;">Да, мы можем</span>, мы имеем в виду это - Если мы не можем его почистить, вы не платите! Кто еще в отрасли предлагает такую гарантию?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'ru',
        ]);

        DB::table('todos')->insert([
            'todoid' => '44444444',
            'title' => 'น้ำยาทำความสะอาด',
            'embed' => '<h2>น้ำยาทำความสะอาด</h2>
            <h4>จะเป็นอย่างไรถ้า Clean แปลว่าเหมือนใหม่</h4>
            <p>เทคโนโลยีที่จดสิทธิบัตรและเป็นกรรมสิทธิ์ของ Tech Sonic จะทำความสะอาดตัวแลกเปลี่ยนความร้อนและชิ้นส่วนต่างๆให้อยู่ในสภาพเหมือนใหม่</p>
            <div>
            <ul>
            <li>ด้วยการเพิ่ม Tech Sonic เครื่องแลกเปลี่ยนความร้อนและชิ้นส่วนต่างๆจะได้รับการทำความสะอาดและกลับมาให้บริการที่ 95% หรือดีกว่าของประสิทธิภาพการออกแบบเดิม.</li>
            <li>การทำความสะอาดที่ดีขึ้นหมายถึงการใช้พลังงานที่น้อยลงการผลิตที่ดีขึ้นและช่วงเวลาการบำรุงรักษาที่ยาวนานขึ้น - เหมาะสำหรับผลกำไรของโรงงาน</li>
            <li>เมื่อเราพูดว่า&nbsp;<span id="tagyes" style="color: #3598db;">ด้เราทำได้</span>, เราก็หมายความตามนั้น - ถ้าเราทำความสะอาดไม่ได้คุณก็ไม่ต้องจ่าย! มีใครอีกบ้างในอุตสาหกรรมนี้ที่ให้การรับประกัน?</li>
            </ul>
            </div>',
            'image' => 'assets/img/values/greener4.jpg',
            'locale' => 'th',
        ]);
    }
}
