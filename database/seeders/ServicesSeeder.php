<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Offsite Cleaning
        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Offsite Cleaning',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p>Getting results that are CLEANER, FASTER, SAFER and GREENER is easy! Our offsite facility in Baytown is ready to clean your fouled heat exchangers, filters, valves, rotating equipment, and many other parts.</p>
            <ul>
            <li>Most exchangers are cleaned in less than one day and often returned faster than you can clean it on your own wash pad.</li>
            <li>We can clean almost any bundle to like new performance &ndash; and we guarantee it.
            <h3><span style="color: #3598db;">If we can&rsquo;t clean it, you don&rsquo;t pay!</span></h3>
            </li>
            <li>We can support both routine maintenance as well as turnarounds, with a cleaning capacity that will outpaced most wash pads.</li>
            </ul>
            <h4>&nbsp;</h4>
            <p>Are you interested in:</p>
            <ul style="list-style-type: none;">
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Getting the risk of hydroblasting off of your site?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Reducing your water consumption by 100%?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Having exchangers that perform &ldquo;like new&rdquo;?</li>
            </ul>
            <p><a href="https://cleanasnew.com/contact" aria-invalid="true"><span style="color: #3598db;">Call<span style="text-decoration: underline;">us</span></span></a>&nbsp;today for our guaranteed, fixed price cleaner, faster, safer, greener services.</p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'en',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => '场外清洁',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p>获得更清洁，更快，更安全和更绿色的结果很容易！我们在Baytown的异地工厂可以随时清洁结垢的热交换器，过滤器，阀门，旋转设备以及许多其他零件。</p>
            <ul>
            <li>大多数交换器在不到一天的时间内进行清洁，而且返回的速度通常比您在自己的洗垫上清洁的速度快。</li>
            <li>我们可以清理几乎所有捆绑包以使其具有新性能&ndash;我们保证。
            <h3><span style="color: #3598db;">如果我们无法清洁它，您就不用付款！</h3>
            </li>
            <li>我们可以为日常维护和周转提供支持，其清洁能力将超过大多数清洗垫。</li>
            </ul>
            <h4>&nbsp;</h4>
            <p>您是否感兴趣：</p>
            <ul>
            <li><img src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&ldquo;检查标记！&quot;" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> 是否有发生喷水的风险？</li>
            <li><img src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&ldquo;检查标记！&quot;" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> 可以将耗水量减少100％？</li>
            <li><img src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&ldquo;检查标记！&quot;" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> 具有执行&ldquo;新"功能的交换器吗？</li>
            </ul>
            <p><a href="https://cleanasnew.com/contact" aria-invalid="true">致电我们今天 </a>为我们提供的有保证，固定价格的清洁，更快，更安全，更环保的服务。</p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'cn',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Offsite reiniging',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p>Resultaten behalen die SCHONER, SNELLER, VEILIGER en GROENER zijn, is eenvoudig! Onze externe faciliteit in Baytown staat klaar om uw vervuilde warmtewisselaars, filters, kleppen, roterende apparatuur en vele andere onderdelen te reinigen.</p>
            <ul>
            <li>De meeste wisselaars worden in minder dan een dag gereinigd en worden vaak sneller teruggestuurd dan dat u ze op uw eigen waskussen kunt reinigen.</li>
            <li>We kunnen bijna elke bundel opschonen om van nieuwe prestaties te houden &amp; ndash; en we garanderen het.
            <h3><span style="color: #3598db;"><span style="color: #3598db;">Als we het niet kunnen schoonmaken, betaal je niet!</span></h3>
            </li>
            <li>We kunnen zowel routineonderhoud als turnarounds ondersteunen, met een reinigingscapaciteit die de meeste waskussens overtreft.</li>
            </ul>
            <h4>&nbsp;</h4>
            <p>Ben je ge&iuml;nteresseerd in:</p>
            <ul style="list-style-type: none;">
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Vinkje!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; Krijgt u het risico van hydroblast van uw site?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Vinkje!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; Uw waterverbruik met 100% verminderen?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Vinkje!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; Wisselaars hebben die &amp; ldquo; als nieuw presteren &amp; rdquo ;?</li>
            </ul>
            <p><a href="https://cleanasnew.com/contact" aria-invalid="true"><span style="color: #3598db;">Bel<span style="text-decoration: underline;">ons</span></span> </a> &amp; nbsp; vandaag voor onze gegarandeerde schonere, snellere, veiligere en groenere diensten met een vaste prijs.</p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'de',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Limpieza externa',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p>&iexcl;Obtener resultados M&Aacute;S LIMPIOS, M&Aacute;S R&Aacute;PIDOS, M&Aacute;S SEGUROS y M&Aacute;S VERDES es f&aacute;cil! Nuestra instalaci&oacute;n externa en Baytown est&aacute; lista para limpiar sus intercambiadores de calor, filtros, v&aacute;lvulas, equipos rotativos y muchas otras partes sucias.</p>
            <ul>
            <li>La mayor&iacute;a de los intercambiadores se limpian en menos de un d&iacute;a y, a menudo, se devuelven m&aacute;s r&aacute;pido de lo que puede limpiarlos con su propia almohadilla de lavado.</li>
            <li>Podemos limpiar casi cualquier paquete para darle gusto al nuevo rendimiento &amp; ndash; y te lo garantizamos.
            <h3><span style="color: #3598db;"><span style="color: #3598db;">Si no podemos limpiarlo, &iexcl;no paga!</span></h3>
            </li>
            <li>Podemos respaldar tanto el mantenimiento de rutina como los cambios de servicio, con una capacidad de limpieza que superar&aacute; a la mayor&iacute;a de las almohadillas de lavado.</li>
            </ul>
            <h4>&nbsp;</h4>
            <p>&iquest;Est&aacute; interesado en:</p>
            <ul style="list-style-type: none;">
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&iexcl;Marca de verificaci&oacute;n!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; &iquest;Se corre el riesgo de que el hidroblasting salga de su sitio?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&iexcl;Marca de verificaci&oacute;n!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; &iquest;Reducir el consumo de agua en un 100%?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&iexcl;Marca de verificaci&oacute;n!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; &iquest;Tener intercambiadores que funcionen &amp; ldquo; como nuevos &amp; rdquo ;?</li>
            </ul>
            <p><a href="https://cleanasnew.com/contact" aria-invalid="true"><span style="color: #3598db;">Llame a<span style="text-decoration: underline;">nosotros</span></span> </a> &amp; nbsp; hoy por nuestros servicios garantizados, de precio fijo, m&aacute;s limpios, m&aacute;s r&aacute;pidos, m&aacute;s seguros y m&aacute;s ecol&oacute;gicos.</p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'es-us',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Limpieza externa',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p>&iexcl;Obtener resultados M&Aacute;S LIMPIOS, M&Aacute;S R&Aacute;PIDOS, M&Aacute;S SEGUROS y M&Aacute;S VERDES es f&aacute;cil! Nuestra instalaci&oacute;n externa en Baytown est&aacute; lista para limpiar sus intercambiadores de calor, filtros, v&aacute;lvulas, equipos rotativos y muchas otras partes sucias.</p>
            <ul>
            <li>La mayor&iacute;a de los intercambiadores se limpian en menos de un d&iacute;a y, a menudo, se devuelven m&aacute;s r&aacute;pido de lo que puede limpiarlos con su propia almohadilla de lavado.</li>
            <li>Podemos limpiar casi cualquier paquete para darle gusto al nuevo rendimiento &amp; ndash; y te lo garantizamos.
            <h3><span style="color: #3598db;"><span style="color: #3598db;">Si no podemos limpiarlo, &iexcl;no paga!</span></h3>
            </li>
            <li>Podemos respaldar tanto el mantenimiento de rutina como los cambios de servicio, con una capacidad de limpieza que superar&aacute; a la mayor&iacute;a de las almohadillas de lavado.</li>
            </ul>
            <h4>&nbsp;</h4>
            <p>&iquest;Est&aacute; interesado en:</p>
            <ul style="list-style-type: none;">
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&iexcl;Marca de verificaci&oacute;n!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; &iquest;Se corre el riesgo de que el hidroblasting salga de su sitio?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&iexcl;Marca de verificaci&oacute;n!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; &iquest;Reducir el consumo de agua en un 100%?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&iexcl;Marca de verificaci&oacute;n!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; &iquest;Tener intercambiadores que funcionen &amp; ldquo; como nuevos &amp; rdquo ;?</li>
            </ul>
            <p><a href="https://cleanasnew.com/contact" aria-invalid="true"><span style="color: #3598db;">Llame a<span style="text-decoration: underline;">nosotros</span></span> </a> &amp; nbsp; hoy por nuestros servicios garantizados, de precio fijo, m&aacute;s limpios, m&aacute;s r&aacute;pidos, m&aacute;s seguros y m&aacute;s ecol&oacute;gicos.</p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'es',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Nettoyage hors site',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p> Obtenir des résultats PLUS PROPRES, PLUS RAPIDES, PLUS SÛRS et PLUS VERTS est facile! Notre installation hors site de Baytown est prête à nettoyer vos échangeurs de chaleur, filtres, vannes, équipements rotatifs et bien d\'autres pièces encrassés. </p>
            <ul>
            <li> La plupart des échangeurs sont nettoyés en moins d\'un jour et sont souvent renvoyés plus rapidement que vous ne pouvez les nettoyer sur votre propre tampon de lavage. </li>
            <li> Nous pouvons nettoyer presque tous les bundles pour apprécier les nouvelles performances &ndash; et nous le garantissons.
            <h3><span style="color: #3598db;"><span style= "color: #3598db;">Si nous ne pouvons pas le nettoyer, vous ne payez pas!</span> </h3>
            </li>
            <li> Nous pouvons prendre en charge à la fois l\'entretien de routine et les délais d\'exécution, avec une capacité de nettoyage qui dépassera la plupart des tampons de lavage. </li>
            </ul>
            <h4>&nbsp;</h4>
            <p> Êtes-vous intéressé par: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Obtenir le risque d\'hydroblasting hors de votre site? </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Réduire votre consommation d\'eau de 100%? </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Disposer d\'échangeurs fonctionnant &ldquo; comme neufs &rdquo ;? </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"><span style= "color: #3598db;">Appelez<span style= "text-decoration: underline; ">nous</span></span> </a>&nbsp;aujourd\'hui pour nos services garantis, à prix fixe, plus propres, plus rapides, plus sûrs et plus écologiques. </p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'fr',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'ऑफसाइट क्लीनिंग',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p> ऐसे परिणाम प्राप्त करना जो CLEANER, FASTER, SAFER और GREENER आसान हैं! Baytown में हमारी ऑफसाइट सुविधा आपके फाउल्ड हीट एक्सचेंजर्स, फिल्टर, वाल्व, घूर्णन उपकरण, और कई अन्य भागों को साफ करने के लिए तैयार है। </p>
            <ul>
            <li> अधिकांश एक्सचेंजर्स को एक दिन से भी कम समय में साफ किया जाता है और अक्सर आप अपने वॉश पैड पर इसे साफ कर सकते हैं। </li>
            <li> हम नए प्रदर्शन और ndash को पसंद करने के लिए लगभग किसी भी बंडल को साफ कर सकते हैं; और हम इसकी गारंटी देते हैं।
            <h3><span style="color: #3598db;"><span style= "color: #3598db;">अगर हम इसे साफ नहीं कर सकते हैं, तो आप भुगतान नहीं करते हैं!</span> </h3>
            </li>
            <li> हम नियमित रखरखाव के साथ-साथ टर्नअराउंड दोनों का समर्थन कर सकते हैं, एक सफाई क्षमता के साथ जो अधिकांश वॉश पैड से आगे निकल जाएगी। </li>
            </ul>
            <h4>&nbsp;</h4>
            <p> क्या आप इसमें रुचि रखते हैं: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;आपकी साइट के हाइड्रोबलास्टिंग का जोखिम हो रहा है? </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;आपके पानी की खपत को 100% कम कर रहा है? </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;जो नए &rdquo; </li> जैसे प्रदर्शन &ldquo करते हैं;
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"><span style= "color: #3598db;">कॉल<span style= "पाठ-सजावट: को रेखांकित करें; ">हम</span></span> </a>&nbsp;आज हमारे गारंटीकृत, निश्चित मूल्य क्लीनर, तेज़, सुरक्षित, हरियाली सेवाओं के लिए। </p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'hi-in',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'オフサイトクリーニング',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p> CLEANER、FASTER、SAFER、GREENERの結果を簡単に取得できます。ベイタウンにある私たちのオフサイト施設は、汚れた熱交換器、フィルター、バルブ、回転機器、およびその他の多くの部品を掃除する準備ができています。</p>
            <ul>
            <li>ほとんどの交換器は1日以内にクリーニングされ、多くの場合、自分のウォッシュパッドでクリーニングするよりも早く返送されます。</li>
            <li>新しいパフォーマンスを好むように、ほぼすべてのバンドルをクリーンアップできます&ndash;そして私たちはそれを保証します。
            <h3><span style="color: #3598db;"><span style= "color：#3598db;">クリーニングできない場合は、お支払いいただきません！</span> </h3>
            </li>
            <li>ほとんどのウォッシュパッドを上回る洗浄能力で、日常のメンテナンスとターンアラウンドの両方をサポートできます。</li>
            </ul>
            <h4>&nbsp; </h4>
            <p>興味がありますか：</p>
            <ul style= "list-style-type：none;">
            <li> <img style= "height：auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "チェックマーク！" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;サイトからハイドロブラストのリスクを冒しますか？</li>
            <li> <img style= "height：auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "チェックマーク！" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;水の消費量を100％削減しますか？</li>
            <li> <img style= "height：auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "チェックマーク！" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;&ldquo;新品のように&rdquo;？</li>を実行するエクスチェンジャーがあります
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"><span style= "color：#3598db;"><span style= "text-decoration：underline;に電話してください。 ">私たち</span></span> </a>&nbsp;今日、保証付きの固定価格のよりクリーンで、より速く、より安全で、より環境に優しいサービスを提供します。</p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'jp',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Pembersihan di luar kawasan',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p> Mendapatkan hasil yang CUCI, CEPAT, SELAMAT dan HIJAU adalah mudah! Kemudahan di luar lokasi kami di Baytown siap membersihkan penukar haba, penapis, injap, peralatan berputar, dan banyak bahagian lain yang kotor. </p>
            <ul>
            <li> Sebilangan besar penukar dibersihkan dalam masa kurang dari satu hari dan sering dikembalikan lebih cepat daripada yang anda boleh membersihkannya di tempat mencuci anda sendiri. </li>
            <li> Kami dapat membersihkan hampir semua kumpulan untuk menyukai persembahan baru &ndash; dan kami menjaminnya.
            <h3><span style="color: #3598db;"><span style= "color: #3598db;">Sekiranya kami tidak dapat membersihkannya, anda tidak perlu membayar!</span> </h3>
            </li>
            <li> Kami dapat mendukung penyelenggaraan rutin dan juga pemulihan, dengan kapasiti pembersihan yang melebihi semua tempat mencuci. </li>
            </ul>
            <h4>&nbsp;</h4>
            <p> Adakah anda berminat: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Menyingkirkan risiko hidrob kekal dari laman web anda? </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Mengurangkan penggunaan air anda sebanyak 100%? </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Mempunyai penukar yang melakukan &ldquo; seperti baru &rdquo ;? </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"><span style= "color: #3598db;">Panggil<span style= "text-decoration: underline; ">kami</span></span> </a>&nbsp;hari ini untuk jaminan harga tetap kami yang lebih bersih, lebih cepat, lebih selamat, lebih hijau. </p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'ml',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Limpieza externa',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p>&iexcl;Obtener resultados M&Aacute;S LIMPIOS, M&Aacute;S R&Aacute;PIDOS, M&Aacute;S SEGUROS y M&Aacute;S VERDES es f&aacute;cil! Nuestra instalaci&oacute;n externa en Baytown est&aacute; lista para limpiar sus intercambiadores de calor, filtros, v&aacute;lvulas, equipos rotativos y muchas otras partes sucias.</p>
            <ul>
            <li>La mayor&iacute;a de los intercambiadores se limpian en menos de un d&iacute;a y, a menudo, se devuelven m&aacute;s r&aacute;pido de lo que puede limpiarlos con su propia almohadilla de lavado.</li>
            <li>Podemos limpiar casi cualquier paquete para darle gusto al nuevo rendimiento &amp; ndash; y te lo garantizamos.
            <h3><span style="color: #3598db;"><span style="color: #3598db;">Si no podemos limpiarlo, &iexcl;no paga!</span></h3>
            </li>
            <li>Podemos respaldar tanto el mantenimiento de rutina como los cambios de servicio, con una capacidad de limpieza que superar&aacute; a la mayor&iacute;a de las almohadillas de lavado.</li>
            </ul>
            <h4>&nbsp;</h4>
            <p>&iquest;Est&aacute; interesado en:</p>
            <ul style="list-style-type: none;">
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&iexcl;Marca de verificaci&oacute;n!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; &iquest;Se corre el riesgo de que el hidroblasting salga de su sitio?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&iexcl;Marca de verificaci&oacute;n!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; &iquest;Reducir el consumo de agua en un 100%?</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="&iexcl;Marca de verificaci&oacute;n!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" /> &amp; nbsp; &iquest;Tener intercambiadores que funcionen &amp; ldquo; como nuevos &amp; rdquo ;?</li>
            </ul>
            <p><a href="https://cleanasnew.com/contact" aria-invalid="true"><span style="color: #3598db;">Llame a<span style="text-decoration: underline;">nosotros</span></span> </a> &amp; nbsp; hoy por nuestros servicios garantizados, de precio fijo, m&aacute;s limpios, m&aacute;s r&aacute;pidos, m&aacute;s seguros y m&aacute;s ecol&oacute;gicos.</p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'mx',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Sਫਸਾਈਟ ਸਫਾਈ',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p> ਨਤੀਜੇ ਪ੍ਰਾਪਤ ਕਰਨੇ ਜੋ ਕਲੀਨਰ, ਤੇਜ਼, ਸੇਫ਼ਰ ਅਤੇ ਗ੍ਰੇਨਰ ਹਨ ਅਸਾਨ ਹੈ! ਬਾਈਟਾਉਨ ਵਿਚ ਸਾਡੀ ਆਫਸਾਈਟ ਸੁਵਿਧਾ ਤੁਹਾਡੇ ਫਿ fਲਡ ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ, ਫਿਲਟਰਾਂ, ਵਾਲਵ, ਘੁੰਮਾਉਣ ਵਾਲੇ ਉਪਕਰਣਾਂ ਅਤੇ ਹੋਰ ਬਹੁਤ ਸਾਰੇ ਹਿੱਸਿਆਂ ਨੂੰ ਸਾਫ ਕਰਨ ਲਈ ਤਿਆਰ ਹੈ. </P>
            <ul>
            <li> ਬਹੁਤੇ ਐਕਸਚੇਂਜਰ ਇਕ ਦਿਨ ਤੋਂ ਘੱਟ ਸਮੇਂ ਵਿਚ ਸਾਫ਼ ਕੀਤੇ ਜਾਂਦੇ ਹਨ ਅਤੇ ਅਕਸਰ ਇਸ ਤੋਂ ਕਿਤੇ ਤੇਜ਼ੀ ਨਾਲ ਵਾਪਸ ਆ ਜਾਂਦੇ ਹਨ ਜਦੋਂ ਤੁਸੀਂ ਇਸ ਨੂੰ ਆਪਣੇ ਵਾੱਸ਼ ਪੈਡ \'ਤੇ ਸਾਫ਼ ਕਰ ਸਕਦੇ ਹੋ. </li>
            <li> ਅਸੀਂ ਨਵੀਂ ਕਾਰਗੁਜ਼ਾਰੀ ਨੂੰ ਪਸੰਦ ਕਰਨ ਲਈ ਲਗਭਗ ਕਿਸੇ ਵੀ ਬੰਡਲ ਨੂੰ ਸਾਫ਼ ਕਰ ਸਕਦੇ ਹਾਂ &ndash; ਅਤੇ ਅਸੀਂ ਇਸਦੀ ਗਰੰਟੀ ਲੈਂਦੇ ਹਾਂ.
            <h3><span style="color: #3598db;"><span style= "color: #3598db;">ਜੇ ਅਸੀਂ ਇਸ ਨੂੰ ਸਾਫ ਨਹੀਂ ਕਰ ਸਕਦੇ, ਤਾਂ ਤੁਸੀਂ ਭੁਗਤਾਨ ਨਹੀਂ ਕਰਦੇ</span> </h3>
            </li>
            <li> ਅਸੀਂ ਸਫਾਈ ਸਮਰੱਥਾ ਦੇ ਨਾਲ ਰੁਟੀਨ ਮੇਨਟੇਨੈਂਸ ਦੇ ਨਾਲ ਨਾਲ ਟਰਨਰਾਉਂਡ ਦੋਵਾਂ ਦਾ ਸਮਰਥਨ ਕਰ ਸਕਦੇ ਹਾਂ ਜੋ ਜ਼ਿਆਦਾਤਰ ਵਾਸ਼ ਪੈਡਾਂ ਨੂੰ ਅੱਗੇ ਕਰ ਦੇਵੇਗਾ. </li>
            </ul>
            <h4>&nbsp;</h4>
            <p> ਕੀ ਤੁਸੀਂ ਇਸ ਵਿੱਚ ਦਿਲਚਸਪੀ ਰੱਖਦੇ ਹੋ: </p>
            <ul style= "ਸੂਚੀ-ਸ਼ੈਲੀ-ਕਿਸਮ: ਕੋਈ ਨਹੀਂ;">
            <li> <img style= "ਕੱਦ: ਆਟੋ;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" Alt = "ਚੈੱਕਮਾਰਕ!" ਡੇਟਾ- src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਆਪਣੀ ਸਾਈਟ ਤੋਂ ਹਾਈਡਰੋਬਲਾਈਸਟਿੰਗ ਦੇ ਜੋਖਮ ਨੂੰ ਪ੍ਰਾਪਤ ਕਰਨਾ? </li>
            <li> <img style= "ਕੱਦ: ਆਟੋ;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" Alt = "ਚੈੱਕਮਾਰਕ!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਆਪਣੀ ਪਾਣੀ ਦੀ ਖਪਤ ਨੂੰ 100% ਘਟਾਉਣਾ? </li>
            <li> <img style= "ਕੱਦ: ਆਟੋ;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" Alt = "ਚੈੱਕਮਾਰਕ!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਐਕਸਚੇਂਜਰਾਂ ਦਾ ਹੋਣਾ ਜੋ &ldquo ਪ੍ਰਦਰਸ਼ਨ ਕਰਦੇ ਹਨ; ਜਿਵੇਂ ਨਵਾਂ &rdquo ;? </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-inifications="true"><span style= "color: #3598db;">ਕਾਲ ਕਰੋ<span style= "ਪਾਠ-ਸਜਾਵਟ: ਰੇਖਾ ਰੇਖਾ; ਅੱਜ ਸਾਡੀ ਗਰੰਟੀਸ਼ੁਦਾ, ਨਿਸ਼ਚਤ ਕੀਮਤ ਕਲੀਨਰ, ਤੇਜ਼, ਸੁਰੱਖਿਅਤ, ਗਰੀਨ ਸੇਵਾਵਾਂ ਲਈ </p></span></span> </a>&nbsp;ਅੱਜ. </p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'pa-pk',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Limpeza externa',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p> Obter resultados MAIS LIMPOS, MAIS RÁPIDOS, MAIS SEGUROS e MAIS VERDES é fácil! Nossa instalação externa em Baytown está pronta para limpar seus trocadores de calor contaminados, filtros, válvulas, equipamentos rotativos e muitas outras peças. </p>
            <ul>
            <li> A maioria dos trocadores são limpos em menos de um dia e geralmente devolvidos mais rápido do que você pode limpar em seu próprio pano de lavagem. </li>
            <li> Podemos limpar quase qualquer pacote para gostar do novo desempenho &ndash; e nós garantimos isso.
            <h3><span style="color: #3598db;"><span style= "color: #3598db;">Se não pudermos &rsquo; limpar, você não paga!</span> </h3>
            </li>
            <li> Podemos apoiar tanto a manutenção de rotina quanto as paradas, com uma capacidade de limpeza que supera a maioria dos lavadores. </li>
            </ul>
            <h4>&nbsp;</h4>
            <p> Você está interessado em: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Correndo o risco de hidrojateamento fora de seu local? </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Reduzindo seu consumo de água em 100%? </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Ter trocadores que funcionam &ldquo; como novos &rdquo ;? </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"><span style= "color: #3598db;">Ligue para<span style= "text-decoration: underline; ">nós</span></span> </a>&nbsp;hoje por nossos serviços garantidos, de preço fixo mais limpos, mais rápidos, mais seguros e mais verdes. </p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'pt-br',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'Выездная уборка',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p> Получить более ЧИСТЫЕ, БЫСТРЕЕ, БЕЗОПАСНЫЕ и ЗЕЛЕНЫЕ результаты очень просто! Наш внешний объект в Бэйтауне готов очистить ваши загрязненные теплообменники, фильтры, клапаны, вращающееся оборудование и многие другие детали. </p>
            <ul>
            <li> Большинство теплообменников очищаются менее чем за один день и часто возвращаются быстрее, чем вы можете очистить их собственными губками. </li>
            <li> Мы можем очистить практически любой пакет, чтобы получить новую производительность &ndash; и мы это гарантируем.
            <h3><span style="color: #3598db;"><span style= "color: #3598db;">Если мы не можем очистить его, вы не платите!</span> </h3>
            </li>
            <li> Мы можем поддерживать как плановое техническое обслуживание, так и ремонтные работы, обеспечивая эффективность очистки, которая превосходит большинство моющих подушек. </li>
            </ul>
            <h4>&nbsp;</h4>
            <p> Вас интересует: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Есть ли риск гидроабразивной обработки для вашего сайта? </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Снизить потребление воды на 100%? </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Наличие обменников, которые работают &ldquo; как новые &rdquo ;? </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"><span style= "color: #3598db;">Вызов<span style= "text-decoration: underline; ">нам</span></span> </a>&nbsp;сегодня за наши гарантированные, фиксированные цены более чистые, более быстрые, безопасные и экологичные услуги. </p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'ru',
        ]);

        DB::table('services')->insert([
            'serviceid' => '11111111',
            'title' => 'ทำความสะอาดนอกสถานที่',
            'image_landing_1' => 'assets/img/services/baytown-cleaning-facility.jpg',
            'image_landing_2' => 'assets/img/services/baytown-cleaning-facility-sm.jpg',
            'embed' => '<p> การได้รับผลลัพธ์ที่สะอาดเร็วขึ้นปลอดภัยและเป็นมิตรกับสิ่งแวดล้อมนั้นง่ายมาก! สิ่งอำนวยความสะดวกนอกสถานที่ของเราในเบย์ทาวน์พร้อมที่จะทำความสะอาดเครื่องแลกเปลี่ยนความร้อนฟิลเตอร์วาล์วอุปกรณ์หมุนและชิ้นส่วนอื่น ๆ อีกมากมาย </p>
            <ul>
            <li> ตัวแลกเปลี่ยนส่วนใหญ่จะทำความสะอาดภายในเวลาไม่ถึงหนึ่งวันและมักจะส่งคืนเร็วกว่าที่คุณจะทำความสะอาดด้วยแผ่นซักของคุณเองได้ </li>
            <li> เราสามารถทำความสะอาดเกือบทุกกลุ่มเพื่อให้ชอบประสิทธิภาพใหม่ &ndash; และเรารับประกันได้
            <h3><span style="color: #3598db;"><span style= "color: #3598db;">หากเราไม่สามารถทำความสะอาดได้คุณจะไม่ต้องจ่ายเงิน!</span> </h3>
            </li>
            <li> เราสามารถรองรับทั้งการบำรุงรักษาตามปกติและการซ่อมแซมโดยมีความสามารถในการทำความสะอาดที่จะแซงหน้าแผ่นรองซักส่วนใหญ่ </li>
            </ul>
            <h4>&nbsp;</h4>
            <p> คุณสนใจ: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;เสี่ยงต่อการถูกไฮโดรบลาสต์จากไซต์ของคุณหรือไม่ </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ลดการใช้น้ำ 100%? </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;การมีตัวแลกเปลี่ยนที่ทำงาน &ldquo; เหมือนใหม่ &rdquo;? </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"><span style= "color: #3598db;">โทร<span style= "text-decoration: underline; ">เรา</span></span> </a>&nbsp;วันนี้สำหรับบริการที่รับประกันราคาคงที่สะอาดเร็วขึ้นปลอดภัยขึ้นและเป็นมิตรกับสิ่งแวดล้อมมากขึ้น </p>',
            'image_article' => 'assets/img/OffSiteMontage-min.gif"',
            'locale' => 'th',
        ]);

        // By The Basket
        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'By The Basket',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2>"Did you know&nbsp;<span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">A</span><span style="font-size: 1.1em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">N</span><span style="font-size: 1.1em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;cleans rotating equipment, piping components and parts by the basket."</h2>
            <p>Do you have parts like filters, valves, scaffolding and spools piling up on your wash pad waiting to be cleaned?</p>
            <p>Our &ldquo;By The Basket&rdquo; cleaning services might be just the thing to make your life easier, saving you time and money.</p>
            <p>A lot of smaller parts are cleaned on the wash pad using manual or semi-automated hydroblasting. It&rsquo;s dangerous, messy, noisy and inconvenient. We can help, and&hellip;</p>
            <p>We can clean almost anything!<br />Click here to&nbsp;<a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">compare parts cleaning with hydroblasting</a>&nbsp;to&nbsp;<span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup></p>
            <p><span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;will:</p>
            <ul style="list-style-type: none;">
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Work with you to determine the right size basket for your needs.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Drop a basket on your wash pad and you can fill it with your parts.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png"  />&nbsp;Pick up that basket when it&rsquo;s full or you need the cleaning done.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Clean your parts for a guaranteed, fixed price.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Return your basket of clean parts the next day!</li>
            </ul>
            <p>Check out our&nbsp;<a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo;By The Basket&rdquo; services video</a>&nbsp;and give us a call today to arrange a &ldquo;By The Basket&rdquo; service for your wash pad.</p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'en',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => '在篮子里',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2>"您知道吗？<span style=" font-size：1.3em; color：#227cbe;">C</span><span style=" font-size：1.1em; color：#227cbe;">LEAN</span>&nbsp;<span style=" font-size：1.3em; color：#227cbe;">A</span><span style=" font-size：1.1em; color：#227cbe;">S</span>&nbsp;<span style=" font-size：1.3em; color：#227cbe;">N</span><span style=" font-size：1.1em; color：#227cbe;">EW</span> <sup style=" font-size：1.1em; color：#227cbe;">&reg;</sup>&nbsp;清洁篮筐中的旋转设备，管道部件和零件。"</h2>
            <p>您的清洁垫上是否堆积有过滤器，阀门，脚手架和线轴之类的零件，等待清洁？</p>
            <p>我们的"按篮"清洁服务可能只是使您的生活更轻松，节省时间和金钱的事情。</p>
            <p>使用手动或半自动喷水清理，可在清洗垫上清洁许多较小的零件。这是危险，凌乱，嘈杂和不便的。我们可以提供帮助，并且&hellip;</p>
            <p>我们几乎可以清洁所有东西！<br />单击此处<a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">比较喷水清理部件</a>到&nbsp;到<span style=" font-size：1.15em; color：#227cbe;">C</span><span style=" font-size：0.9em; color：#227cbe;">精简</span>&nbsp;<span style=" font-size：1.15em; color：#227cbe;">A</span><span style=" font-size：0.9em; color：#227cbe;">S</span>&nbsp;<span style=" font-size：1.15em; color：#227cbe;">N</span><span style=" font-size：0.9em; color：#227cbe;">EW</span> <sup style=" font-size：1.1em; color：#227cbe;">&reg;</sup></p>
            <p><span style=" font-size：1.15em; color：#227cbe;">C</span><span style=" font-size：0.9em; color：#227cbe;">LEAN</span>&nbsp;<span style=" font-size：1.15em; color：#227cbe;">A</span><span style=" font-size：0.9em; color：#227cbe;">S</span>&nbsp;<span style=" font-size：1.15em; color：#227cbe;">N</span><span style=" font-size：0.9em; color：#227cbe;">EW</span> <sup style=" font-size：1.1em; color：#227cbe;">&reg;</sup>&nbsp;将：</p>
            <ul style=" list-style-type：none;">
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />与您一起确定适合您需求的尺寸篮子。</li>
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;将篮子放到洗垫上，即可将其装满部件。</li>
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />当篮子装满或您需要清洁时，请捡起篮子。</li>
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;以有保证的固定价格清洁零件。</li>
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;第二天退回一揽子清洁零件！</li>
           </ul>
            <p>查看我们的<a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">"通过购物篮"服务视频</a>&nbsp;并立即致电给我们，以安排"通过购物篮"您的洗垫服务。</p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'cn',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'Bij The Basket',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "Wist u dat &nbsp;<span style=" font-size: 1.3em; kleur: #227cbe; ">C</span><span style=" font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; kleur: #227cbe; ">S</span>&nbsp;<span style=" font-size: 1.3em; kleur: #227cbe; ">N</span><span style=" font-size: 1.1em; kleur: #227cbe; ">EW</span><sup style=" font-size: 1.1em; color: #227cbe; ">&reg;</sup>&nbsp;reinigt roterende apparatuur, leidingcomponenten en onderdelen bij de mand."</h2>
            <p> Heeft u onderdelen zoals filters, kleppen, steigers en spoelen die zich op uw waskussen opstapelen en wachten om te worden schoongemaakt?</p>
            <p> Onze &ldquo; By The Basket &rdquo; schoonmaakdiensten zijn misschien wel iets om uw leven gemakkelijker te maken en u tijd en geld te besparen.</p>
            <p> Veel kleinere onderdelen worden op het waskussen gereinigd met handmatige of semi-automatische hydroblasting. Het is gevaarlijk, rommelig, lawaaierig en lastig. We kunnen helpen, en &hellip;</p>
            <p> We kunnen bijna alles schoonmaken! <br /> Klik hier om&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">het reinigen van onderdelen te vergelijken met hydrostralen</a>&nbsp;naar &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg;</sup></p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;zal:</p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Werk samen met u om de juiste maat mand voor uw behoeften te bepalen.</li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Laat een mand op je waskussen vallen en je kunt hem vullen met je onderdelen.</li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Pak die mand op als hij vol is of als je schoongemaakt moet worden.</li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Reinig uw onderdelen voor een gegarandeerde, vaste prijs. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Breng uw mand met schone onderdelen de volgende dag terug! </li>
            </ul>
            <p> Bekijk onze&nbsp; a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; By The Basket &rdquo; servicesvideo </a>&nbsp;en bel ons vandaag nog om een ​​&ldquo; By The Basket &rdquo; service voor uw waskussen. </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'de',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'Rendimiento del intercambiador de calor',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "¿Sabías que &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">C</span><span style=" font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">N</span><span style=" font-size: 1.1em; color: #227cbe; ">EW</span><sup style=" font-size: 1.1em; color: #227cbe; ">&reg; </sup>&nbsp;limpia el equipo giratorio, los componentes de las tuberías y las piezas junto a la cesta". </h2>
            <p> ¿Tiene partes como filtros, válvulas, andamios y carretes apilados en su almohadilla de lavado esperando a ser limpiados? </p>
            <p> Nuestro &ldquo; By The Basket &rdquo; Los servicios de limpieza pueden ser lo ideal para hacerle la vida más fácil y ahorrarle tiempo y dinero. </p>
            <p> Muchas piezas más pequeñas se limpian en la almohadilla de lavado mediante chorro de agua manual o semiautomático. Es peligroso, desordenado, ruidoso e inconveniente. Podemos ayudar y &hellip; </p>
            <p> ¡Podemos limpiar casi cualquier cosa! <br /> Haga clic aquí para&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">comparar la limpieza de piezas con el hidroblasting </a>&nbsp;a &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;hará: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Trabaje con usted para determinar el tamaño de canasta adecuado para sus necesidades. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Deje caer una canasta en su almohadilla de lavado y podrá llenarla con sus partes. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Recoja esa canasta cuando esté llena o cuando necesite que la limpien. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Limpie sus piezas por un precio fijo garantizado. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;¡Devuelva su canasta de piezas limpias al día siguiente! </li>
            </ul>
            <p> Consulte nuestro&nbsp; a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; By The Basket &rdquo; video de servicios </a>&nbsp;y llámenos hoy para programar un &ldquo; By The Basket &rdquo; servicio para su almohadilla de lavado. </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'es-us',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'Rendimiento del intercambiador de calor',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "¿Sabías que &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">C</span><span style=" font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">N</span><span style=" font-size: 1.1em; color: #227cbe; ">EW</span><sup style=" font-size: 1.1em; color: #227cbe; ">&reg; </sup>&nbsp;limpia el equipo giratorio, los componentes de las tuberías y las piezas junto a la cesta". </h2>
            <p> ¿Tiene partes como filtros, válvulas, andamios y carretes apilados en su almohadilla de lavado esperando a ser limpiados? </p>
            <p> Nuestro &ldquo; By The Basket &rdquo; Los servicios de limpieza pueden ser lo ideal para hacerle la vida más fácil y ahorrarle tiempo y dinero. </p>
            <p> Muchas piezas más pequeñas se limpian en la almohadilla de lavado mediante chorro de agua manual o semiautomático. Es peligroso, desordenado, ruidoso e inconveniente. Podemos ayudar y &hellip; </p>
            <p> ¡Podemos limpiar casi cualquier cosa! <br /> Haga clic aquí para&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">comparar la limpieza de piezas con el hidroblasting </a>&nbsp;a &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;hará: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Trabaje con usted para determinar el tamaño de canasta adecuado para sus necesidades. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Deje caer una canasta en su almohadilla de lavado y podrá llenarla con sus partes. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Recoja esa canasta cuando esté llena o cuando necesite que la limpien. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Limpie sus piezas por un precio fijo garantizado. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;¡Devuelva su canasta de piezas limpias al día siguiente! </li>
            </ul>
            <p> Consulte nuestro&nbsp; a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; By The Basket &rdquo; video de servicios </a>&nbsp;y llámenos hoy para programar un &ldquo; By The Basket &rdquo; servicio para su almohadilla de lavado. </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'es',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'Par le panier',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "Saviez-vous que &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">C</span><span style=" font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">N</span><span style=" font-size: 1.1em; color: #227cbe; ">EW</span><sup style=" font-size: 1.1em; color: #227cbe; ">&reg; </sup>&nbsp;nettoie les équipements rotatifs, les composants de tuyauterie et les pièces près du panier." </h2>
            <p> Avez-vous des pièces comme des filtres, des vannes, des échafaudages et des bobines qui s’empilent sur votre plateau de lavage en attendant d’être nettoyées? </p>
            <p> Notre &ldquo; Au panier &rdquo; les services de nettoyage peuvent être la solution idéale pour vous simplifier la vie et vous faire gagner du temps et de l\'argent. </p>
            <p> Un grand nombre de pièces plus petites sont nettoyées sur le tampon de lavage en utilisant un hydroblastage manuel ou semi-automatique. C\'est dangereux, salissant, bruyant et peu pratique. Nous pouvons vous aider et &hellip; </p>
            <p> Nous pouvons nettoyer presque tout! <br /> Cliquez ici pour&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">comparer le nettoyage des pièces avec l\'hydroblasting </a>&nbsp;à &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;va: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Travaillez avec vous pour déterminer la taille de panier adaptée à vos besoins. </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Déposez un panier sur votre tampon de lavage et vous pourrez le remplir de vos pièces. </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Ramassez ce panier quand il est plein ou que vous avez besoin du nettoyage. </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Nettoyez vos pièces pour un prix fixe garanti. </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Renvoyez votre panier de pièces propres le lendemain! </li>
            </ul>
            <p> Découvrez notre <a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; Par le panier &rdquo; services vidéo </a>&nbsp;et appelez-nous dès aujourd\'hui pour organiser une &ldquo; Au panier &rdquo; service pour votre tampon de lavage. </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'fr',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'टोकरी द्वारा',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "क्या आप जानते हैं &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">C</span><span style=" font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; color: #227cbe; ">S</span> &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">N</span><span style=" font-size: 1.1em; color: #227cbe; ">EW</span> <sup style=" font-size: 1.1em; color: #227cbe; ">&reg; </sup>&nbsp;उपकरण को घुमाते हुए सफाई करता है, टोकरी द्वारा घटकों और भागों को पाइप करता है।" </h2>
            <p> क्या आपके पास अपने वॉश पैड पर फिल्टर, वाल्व, मचान और स्पूल जैसे पुर्ज़ हैं जो साफ़ होने की प्रतीक्षा कर रहे हैं? </p>
            <p> हमारी &ldquo; टोकरी द्वारा &rdquo; सफाई सेवाएं आपके जीवन को आसान बनाने के लिए सिर्फ एक चीज हो सकती हैं, जिससे आप समय और पैसा बचा सकते हैं। </p>
            <p> मैन्युअल या अर्ध-स्वचालित हाइड्रोबलास्टिंग का उपयोग करके वॉश पैड पर बहुत सारे छोटे हिस्से साफ किए जाते हैं। यह खतरनाक, गन्दा, शोर और असुविधाजनक है। हम मदद कर सकते हैं, और &hellip; </p>
            <p> हम लगभग कुछ भी साफ कर सकते हैं! <br /> यहां पर क्लिक करें&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">हाइड्रोबलास्टिंग से सफाई करने वाले भागों की तुलना करें </a>&nbsp;से &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> </p>;
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </p>&nbsp;इच्छा: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;अपनी आवश्यकताओं के लिए सही आकार की टोकरी निर्धारित करने के लिए आपके साथ काम करें। </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;अपने वॉश पैड पर एक टोकरी गिराएं और आप इसे अपने हिस्सों से भर सकते हैं। </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;उस टोकरी को तब उठाएं जब वह पूर्ण हो या आपको सफाई की आवश्यकता हो। </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;गारंटी, निश्चित मूल्य के लिए अपने भागों को साफ करें। </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;अगले दिन अपने साफ हिस्सों की टोकरी लौटाएं! </li>
            </ul>
            <p> हमारे&nbsp; a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; टोकरी और rdquo; सेवाएँ वीडियो </a>&nbsp;और टोकरी &rdquo द्वारा हमें &ldquo की व्यवस्था करने के लिए आज कॉल करें; अपने वॉश पैड के लिए सेवा। </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'hi-in',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'バスケットで',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2>"<span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">A</span><span style="font-size: 1.1em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">N</span><span style="font-size: 1.1em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;が回転機器、配管部品、部品をバスケットで洗浄することをご存知でしたか？"</h2>
            <p>フィルター、バルブ、足場、スプールなどの部品が洗浄パッドに積み重なって、掃除を待っていますか？</p>
            <p>私たちの&ldquo;バスケットで&rdquo;清掃サービスはあなたの生活を楽にし、時間とお金を節約するためのものかもしれません。</p>
            <p>多くの小さな部品は、手動または半自動のハイドロブラストを使用してウォッシュパッド上で洗浄されます。それは危険で、乱雑で、騒々しく、不便です。私たちは助けることができます、そして&hellip;</p>
            <p>ほぼ何でも掃除できます！<br /><a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">部品の洗浄とハイドロブラストの比較</a>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>はこちらをクリックしてください。</p>
            <p><span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;は次のようになります。</p>
            <ul style="list-style-type: none;">
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;あなたと協力して、あなたのニーズに合った適切なサイズのバスケットを決定してください。</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;バスケットをウォッシュパッドに落とすと、パーツを入れることができます。</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;バスケットがいっぱいになったとき、またはクリーニングが必要なときに、そのバスケットを手に取ります。</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;保証された固定価格で部品を清掃します。</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;翌日、きれいな部品のバスケットを返却してください。</li>
            </ul>
            <p><a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo;バスケットで&rdquo; サービスのビデオ</a>をチェックして、&nbsp;今日お電話ください。ウォッシュパッドの &ldquo;バスケットで&rdquo; サービスを手配してください。</p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'jp',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'Oleh Bakul',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "Tahukah anda &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">C</span><span style=" font-size: 1.1em; warna: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; warna: #227cbe; ">S</span> &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">N</span><span style=" font-size: 1.1em; color: #227cbe; ">EW</span> <sup style=" font-size: 1.1em; color: #227cbe; ">&reg; </sup>&nbsp;membersihkan peralatan berputar, komponen paip dan bahagian dengan bakul." </h2>
            <p> Adakah anda mempunyai bahagian seperti penapis, injap, perancah dan gulungan yang menumpuk di tempat mencuci anda menunggu untuk dibersihkan? </p>
            <p> Kami &ldquo; Oleh Bakul &rdquo; perkhidmatan pembersihan mungkin hanya menjadikan hidup anda lebih mudah, menjimatkan masa dan wang anda. </p>
            <p> Sebilangan besar bahagian yang lebih kecil dibersihkan di cuci dengan menggunakan hidrob kekal manual atau separa automatik. Ia berbahaya, tidak kemas, bising dan menyusahkan. Kami boleh membantu, dan &hellip; </p>
            <p> Kami dapat membersihkan hampir semua perkara! <br /> Klik di sini untuk&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">membandingkan pembersihan bahagian dengan hidrob kekal </a>&nbsp;hingga &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;"LEA</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;akan: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Bekerja dengan anda untuk menentukan keranjang ukuran yang tepat untuk keperluan anda. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Jatuhkan bakul di pad pencuci anda dan anda boleh mengisinya dengan bahagian anda. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Angkat bakul itu apabila sudah penuh atau anda memerlukan pembersihan. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Bersihkan bahagian anda dengan harga tetap dan dijamin. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Kembalikan bakul bahagian bersih anda keesokan harinya! </li>
            </ul>
            <p> Lihat&nbsp; a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; By The Basket &rdquo; video perkhidmatan </a>&nbsp;dan hubungi kami hari ini untuk mengatur &ldquo; By The Basket &rdquo; servis untuk tempat mencuci anda. </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'ml',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'Por la canasta',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "¿Sabías que &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">C</span><span style=" font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">N</span><span style=" font-size: 1.1em; color: #227cbe; ">EW</span><sup style=" font-size: 1.1em; color: #227cbe; ">&reg; </sup>&nbsp;limpia el equipo giratorio, los componentes de las tuberías y las piezas junto a la cesta". </h2>
            <p> ¿Tiene partes como filtros, válvulas, andamios y carretes apilados en su almohadilla de lavado esperando a ser limpiados? </p>
            <p> Nuestro &ldquo; By The Basket &rdquo; Los servicios de limpieza pueden ser lo ideal para hacerle la vida más fácil y ahorrarle tiempo y dinero. </p>
            <p> Muchas piezas más pequeñas se limpian en la almohadilla de lavado mediante chorro de agua manual o semiautomático. Es peligroso, desordenado, ruidoso e inconveniente. Podemos ayudar y &hellip; </p>
            <p> ¡Podemos limpiar casi cualquier cosa! <br /> Haga clic aquí para&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">comparar la limpieza de piezas con el hidroblasting </a>&nbsp;a &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;hará: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Trabaje con usted para determinar el tamaño de canasta adecuado para sus necesidades. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Deje caer una canasta en su almohadilla de lavado y podrá llenarla con sus partes. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png"  />&nbsp;Recoja esa canasta cuando esté llena o cuando necesite que la limpien. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Limpie sus piezas por un precio fijo garantizado. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;¡Devuelva su canasta de piezas limpias al día siguiente! </li>
            </ul>
            <p> Consulte nuestro&nbsp; a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; By The Basket &rdquo; video de servicios </a>&nbsp;y llámenos hoy para programar un &ldquo; By The Basket &rdquo; servicio para su almohadilla de lavado. </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'mx',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'ਟੋਕਰੀ ਦੁਆਰਾ',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2>"ਕੀ ਤੁਸੀਂ ਜਾਣਦੇ ਹੋ&nbsp;<span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">A</span><span style="font-size: 1.1em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">N</span><span style="font-size: 1.1em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;ਘੁੰਮਦੇ ਹੋਏ ਉਪਕਰਣ, ਪਾਈਪਿੰਗ ਹਿੱਸੇ ਅਤੇ ਟੋਕਰੀ ਦੁਆਰਾ ਹਿੱਸੇ ਸਾਫ ਕਰਦੀ ਹੈ."</h2>
            <p>ਕੀ ਤੁਹਾਡੇ ਕੋਲ ਫਿਲਟਰਜ਼, ਵਾਲਵ, ਸਕੈਫੋਲਡਿੰਗ ਅਤੇ ਸਪੂਲ ਸਾਫ਼ ਹੋਣ ਦੇ ਇੰਤਜ਼ਾਰ ਵਿਚ ਤੁਹਾਡੇ ਵਾਡ ਪੈਡ \'ਤੇ upੇਰ ਵਰਗੇ ਟੁਕੜੇ ਹਨ?</p>
            <p>ਸਾਡਾ &ldquo; ਟੋਕਰੀ ਦੁਆਰਾ &rdquo; ਸਫਾਈ ਸੇਵਾਵਾਂ ਤੁਹਾਡੀ ਜ਼ਿੰਦਗੀ ਨੂੰ ਸੌਖਾ ਬਣਾਉਣ ਲਈ ਤੁਹਾਡੇ ਲਈ ਸਮਾਂ ਅਤੇ ਪੈਸੇ ਦੀ ਬਚਤ ਕਰਨਾ ਸਿਰਫ ਇੱਕ ਚੀਜ ਹੋ ਸਕਦੀਆਂ ਹਨ.</p>
            <p>ਹੱਥੀਂ ਜਾਂ ਅਰਧ-ਸਵੈਚਾਲਤ ਹਾਈਡ੍ਰੋਬਲਾਸਟਿੰਗ ਦੀ ਵਰਤੋਂ ਕਰਦਿਆਂ ਵਾਸ਼ ਪੈਡ \'ਤੇ ਬਹੁਤ ਸਾਰੇ ਛੋਟੇ ਹਿੱਸੇ ਸਾਫ਼ ਕੀਤੇ ਜਾਂਦੇ ਹਨ. ਇਹ ਖਤਰਨਾਕ, ਗੜਬੜ, ਸ਼ੋਰ ਅਤੇ ਅਸੁਵਿਧਾਜਨਕ ਹੈ. ਅਸੀਂ ਮਦਦ ਕਰ ਸਕਦੇ ਹਾਂ, ਅਤੇ &hellip;</p>
            <p>ਅਸੀਂ ਲਗਭਗ ਕੁਝ ਵੀ ਸਾਫ਼ ਕਰ ਸਕਦੇ ਹਾਂ!<br />ਹਾਈਡ੍ਰੋਬਲਾਸਟਿੰਗ ਨਾਲ ਹਿੱਸੇ ਦੀ ਸਫਾਈ ਦੀ ਤੁਲਨਾ ਕਰਨ&nbsp;<a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">ਤੁਲਨਾ ਕਰਨ ਲਈ ਇੱਥੇ ਕਲਿੱਕ ਕਰੋ</a>&nbsp;to&nbsp;<span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>ਨਾਲ.</p>
            <p><span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;ਕਰੇਗਾ:</p>
            <ul style="list-style-type: none;">
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਤੁਹਾਡੀਆਂ ਜ਼ਰੂਰਤਾਂ ਲਈ ਸਹੀ ਅਕਾਰ ਦੀ ਟੋਕਰੀ ਨਿਰਧਾਰਤ ਕਰਨ ਲਈ ਤੁਹਾਡੇ ਨਾਲ ਕੰਮ ਕਰੋ.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਆਪਣੇ ਵਾੱਸ਼ ਪੈਡ \'ਤੇ ਇਕ ਟੋਕਰੀ ਸੁੱਟੋ ਅਤੇ ਤੁਸੀਂ ਇਸ ਨੂੰ ਆਪਣੇ ਹਿੱਸਿਆਂ ਨਾਲ ਭਰ ਸਕਦੇ ਹੋ.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਜਦੋਂ ਇਹ ਟੋਕਰੀ ਪੂਰੀ ਹੋ ਜਾਵੇ ਤਾਂ ਚੁੱਕੋ ਜਾਂ ਤੁਹਾਨੂੰ ਸਫਾਈ ਦੀ ਜ਼ਰੂਰਤ ਪਵੇ.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਗਾਰੰਟੀਸ਼ੁਦਾ, ਨਿਸ਼ਚਤ ਕੀਮਤ ਲਈ ਆਪਣੇ ਹਿੱਸੇ ਸਾਫ਼ ਕਰੋ.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਅਗਲੇ ਦਿਨ ਸਾਫ਼ ਹਿੱਸਿਆਂ ਦੀ ਆਪਣੀ ਟੋਕਰੀ ਵਾਪਸ ਕਰੋ!</li>
            </ul>
            <p>ਸਾਡੀ&nbsp;<a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo;ਬਾਸਕੇਟ ਦੁਆਰਾ</a>&nbsp;ਸੇਵਾਵਾਂ ਦੀ ਵੀਡੀਓ ਵੇਖੋ ਅਤੇ ਆਪਣੇ ਵਾਸ਼ ਪੈਡ ਲਈ "ਬਾਸਕੇਟ ਦੁਆਰਾ" ਸੇਵਾ ਦਾ ਪ੍ਰਬੰਧ ਕਰਨ ਲਈ ਸਾਨੂੰ ਅੱਜ ਇੱਕ ਕਾਲ ਕਰੋ.</p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'pa-pk',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'Pela cesta',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "Você sabia &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">C</span><span style=" font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; color: #227cbe; ">S</span> &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">N</span><span style=" font-size: 1.1em; color: #227cbe; ">EW</span> <sup style=" font-size: 1.1em; color: #227cbe; ">&reg; </sup>&nbsp;limpa equipamentos rotativos, componentes de tubulação e peças pela cesta." </h2>
            <p> Você tem peças como filtros, válvulas, andaimes e carretéis que se acumulam em sua almofada de lavagem esperando para serem limpos? </p>
            <p> Nosso &ldquo; By The Basket &rdquo; serviços de limpeza podem ser ideais para tornar sua vida mais fácil, economizando tempo e dinheiro. </p>
            <p> Muitas peças menores são limpas na almofada de lavagem usando hidrojateamento manual ou semiautomático. É perigoso, confuso, barulhento e inconveniente. Podemos ajudar e &hellip; </p>
            <p> Podemos limpar quase tudo! <br /> Clique aqui para&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">comparar a limpeza de peças com hidrojateamento </a>&nbsp;para &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;irá: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Trabalhe com você para determinar o tamanho de cesta certo para suas necessidades. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Solte uma cesta em seu pano de lavagem e você pode enchê-lo com suas peças. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png"  />&nbsp;Pegue a cesta quando estiver cheia ou quando precisar que a limpeza seja feita. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Limpe suas peças por um preço fixo garantido. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Devolva sua cesta de peças limpas no dia seguinte! </li>
            </ul>
            <p> Confira nosso&nbsp; a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; By The Basket &rdquo; vídeo de serviços </a>&nbsp;e ligue para nós hoje mesmo para agendar um evento &ldquo; By The Basket &rdquo; serviço para o seu pano de lavagem. </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'pt-br',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'У корзины',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "Знаете ли вы, &nbsp;<span style=" font-size: 1.3em; цвет: #227cbe; ">C</span><span style=" font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; color: #227cbe; ">S</span> &nbsp;<span style=" font-size: 1.3em; цвет: #227cbe; ">N</span><span style=" font-size: 1.1em; color: #227cbe; ">EW</span> <sup style=" font-size: 1.1em; color: #227cbe; ">&reg; </sup>&nbsp;очищает вращающееся оборудование, компоненты трубопроводов и детали около корзины." </h2>
            <p> У вас есть такие детали, как фильтры, клапаны, строительные леса и катушки, скапливающиеся на подушке для мытья посуды и ожидающие очистки? </p>
            <p> Наша &ldquo; В корзине &rdquo; услуги по уборке могут облегчить вам жизнь, сэкономить время и деньги. </p>
            <p> Множество мелких деталей очищается на губке для мытья рук с помощью ручной или полуавтоматической гидроабразивной очистки. Это опасно, беспорядочно, шумно и неудобно. Мы можем помочь и &hellip; </p>
            <p> Мы можем очистить практически все! <br /> Нажмите здесь, чтобы&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">сравнить очистку деталей с гидроабразивной очисткой </a>&nbsp;в &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;"A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;"A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;will: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Вместе с вами определите корзину подходящего размера для ваших нужд. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Бросьте корзину на подушку для мытья посуды, и вы сможете заполнить ее деталями. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png"  />&nbsp;Поднимите корзину, когда она заполнится или вам понадобится очистка. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Чистите детали по гарантированной фиксированной цене. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Верните корзину с чистыми деталями на следующий день! </li>
            </ul>
            <p> Ознакомьтесь с нашими&nbsp; a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; By The Basket &rdquo; видео услуг </a>&nbsp;и позвоните нам сегодня, чтобы организовать &ldquo; By The Basket &rdquo; сервис для вашей губки. </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'ru',
        ]);

        DB::table('services')->insert([
            'serviceid' => '22222222',
            'title' => 'ประสิทธิภาพการแลกเปลี่ยนความร้อน',
            'image_landing_1' => 'assets/img/services/basket-of-parts.jpg?v=20201005',
            'image_landing_2' => 'assets/img/services/basket-of-parts-sm.jpg?v=20201005',
            'embed' => '<h2> "คุณรู้หรือไม่ &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">C</span><span style=" font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">A</span><span style=" font-size: 1.1em; color: #227cbe; ">S</span> &nbsp;<span style=" font-size: 1.3em; color: #227cbe; ">N</span><span style=" font-size: 1.1em; color: #227cbe; ">EW</span> <sup style=" font-size: 1.1em; color: #227cbe; ">&reg; </sup>&nbsp;ทำความสะอาดอุปกรณ์หมุนส่วนประกอบท่อและชิ้นส่วนข้างตะกร้า" </h2>
            <p> คุณมีชิ้นส่วนต่างๆเช่นตัวกรองวาล์วนั่งร้านและแกนม้วนเก็บอยู่บนแผ่นซักเพื่อรอทำความสะอาดหรือไม่ </p>
            <p> &ldquo; By The Basket ของเรา &rdquo; บริการทำความสะอาดอาจเป็นเพียงสิ่งที่ช่วยให้ชีวิตคุณง่ายขึ้นประหยัดเวลาและค่าใช้จ่าย </p>
            <p> มีการทำความสะอาดชิ้นส่วนขนาดเล็กจำนวนมากบนแผ่นซักโดยใช้การเป่าด้วยน้ำด้วยมือหรือกึ่งอัตโนมัติ มันอันตรายยุ่งมีเสียงดังและไม่สะดวก เราช่วยได้และ &hellip; </p>
            <p> เราสามารถทำความสะอาดได้เกือบทุกอย่าง! <br /> คลิกที่นี่เพื่อ&nbsp; a href="http://localhost:3000/comparisons/parts-cleaning" aria-invalid="true">เปรียบเทียบการทำความสะอาดชิ้นส่วนกับการเป่าด้วยพลังน้ำ </a>&nbsp;ถึง &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span> <sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;จะ: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ทำงานร่วมกับคุณเพื่อกำหนดขนาดตะกร้าที่เหมาะสมกับความต้องการของคุณ </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;วางตะกร้าลงบนแผ่นซักและคุณสามารถเติมชิ้นส่วนของคุณได้ </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png"  />&nbsp;หยิบตะกร้าขึ้นมาเมื่อเต็มหรือต้องการทำความสะอาดให้เสร็จ </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ทำความสะอาดชิ้นส่วนของคุณเพื่อรับประกันราคาคงที่ </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;คืนตะกร้าชิ้นส่วนที่สะอาดในวันถัดไป! </li>
            </ul>
            <p> ดู&nbsp; a href="http://localhost:3000/posts/basket-of-parts" aria-invalid="true">&ldquo; By The Basket &rdquo; วิดีโอบริการ </a>&nbsp;และโทรหาเราวันนี้เพื่อนัดหมาย &ldquo; By The Basket &rdquo; บริการสำหรับแผ่นซักของคุณ </p>',
            'image_article' => 'assets/img/BasketMontage2-min.gif?v=20201005',
            'locale' => 'th',
        ]);

        // Wash Pad Services
        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'Wash Pad Services',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p>Do you understand the value of better cleaning, and want to get that advantage in your next turnaround?</p>
            <p>Not yet ready to abandon the wash pad? We have a solution for that too.</p>
            <p><span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span> &nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span> <sup style="font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;will:</p>
            <ul>
            <li>Work with you to understand the scope of your turnaround and determine the best combination of Tech Sonic&rsquo;s ultrasonic cleaning systems and hydroblasting support</li>
            <li>Train your incumbent hydroblasting service provider on the process and support required to utilize the Tech Sonic systems</li>
            <li>Work side-by-side with your service provider to perform the cleaning</li>
            <li>Provide our services at a fixed, up front price</li>
            </ul>
            <h2>&nbsp;</h2>
            <p>By using Tech Sonic&rsquo;s systems in your next turnaround you can save money by:</p>
            <ul style="list-style-type: none;">
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Reducing the hydroblasting labor required.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Eliminate risk and liability.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Saving up to 75% of the water normally required.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Producing up to 75% less wastewater</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;De-risk your cleaning schedule by providing faster cleaning.</li>
            <li><img style="height: auto;" src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt="Checkmark!" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Deliver exchangers that are cleaned to &ldquo;like new&rdquo; performance levels.</li>
            </ul>
            <p><a href="https://cleanasnew.com/contact" aria-invalid="true">Call us</a>&nbsp;today and improve your next TAR performance while saving money.</p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'en',
        ]);
        
        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => '洗垫服务',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p>您了解更好的清洁的价值，并希望在下一次周转中获得这种优势吗？</p>
            <p>还没准备放弃洗脚垫吗？我们也有解决方案。</p>
            <p><span style=" font-size：1.15em; color：#227cbe;">C</span><span style=" font-size：0.9em; color：#227cbe;">LEAN</span>&nbsp;<span style=" font-size：1.15em; color：#227cbe;">A</span><span style=" font-size：0.9em; color：#227cbe;">S</span>&nbsp;<span style=" font-size：1.15em; color：#227cbe;">N</span><span style=" font-size：0.9em; color：#227cbe;">EW</span> <sup style=" font-size：1.1em; color：#227cbe;">&reg;</sup>&nbsp;将：</p>
            <ul>
            <li>与您一起了解周转范围，并确定Tech Sonic超声波清洗系统和水力喷射支持的最佳组合</li>
            <li>培训您现有的喷水处理服务提供商有关使用Tech Sonic系统所需的过程和支持</li>
            <li>与服务提供商并肩合作进行清洁</li>
            <li>以固定的前期价格提供我们的服务</li>
            </ul>
            <h2>&nbsp; </h2>
            <p>通过在下一个周转周期中使用Tech Sonic的系统，您可以通过以下方式省钱：</p>
            <ul style=" list-style-type：none;">
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;减少所需的喷水劳动。</li>
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;消除风险和责任。</li>
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;节省通常需要的75％的水。</li>
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;减少多达75％的废水</li>
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;通过提供更快的清洁服务来降低清洁计划的风险。</li>
            <li> <img style=" height：auto;" src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt ="检查标记！" data-src =" https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;交付已清理为"新"的交换器。性能水平。</li>
            </ul>
            <p> <a>今天<a href="https://cleanasnew.com/contact" aria-invalid="true">致电我们</a>，并在节省资金的同时改善您的下一个TAR性能。</p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'cn',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'Waskussen Services',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> Begrijpt u de waarde van beter schoonmaken en wilt u dat voordeel behalen bij uw volgende ommekeer? </p>
            <p> Nog niet klaar om het waskussen te verlaten? Ook daar hebben wij een oplossing voor. </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;zal: </p>
            <ul>
            <li> Werk met u samen om de omvang van uw ommekeer te begrijpen en bepaal de beste combinatie van Tech Sonic &rsquo; s ultrasone reinigingssystemen en hydroblastondersteuning </li>
            <li> Train uw bestaande dienstverlener op het gebied van hydroblasting in het proces en de ondersteuning die nodig zijn om de Tech Sonic-systemen te gebruiken </li>
            <li> Werk zij aan zij met uw serviceprovider om de schoonmaak uit te voeren </li>
            <li> Bied onze diensten aan tegen een vaste prijs vooraf </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> Door Tech Sonic &rsquo; s-systemen te gebruiken in uw volgende turnaround, kunt u geld besparen door: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Het verminderen van de benodigde hydrostraalarbeid. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Elimineer risico en aansprakelijkheid. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Besparing tot 75% van het normaal benodigde water. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Produceert tot 75% minder afvalwater </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Verlaag het risico van uw schoonmaakschema door een snellere schoonmaak te bieden. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Vinkje!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Bezorg wisselaars die zijn schoongemaakt naar &ldquo; als nieuw &rdquo; prestatieniveaus. </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true">Bel ons </a>&nbsp;vandaag en verbeter uw volgende TAR-prestaties terwijl u geld bespaart. </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'de',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'Servicios de almohadillas de lavado',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> ¿Comprende el valor de una mejor limpieza y desea obtener esa ventaja en su próximo cambio? </p>
            <p> ¿Aún no estás listo para abandonar la almohadilla de lavado? También tenemos una solución para eso. </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "tamaño de fuente: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;hará: </p>
            <ul>
            <li> Trabaje con usted para comprender el alcance de su cambio y determinar la mejor combinación de los sistemas de limpieza ultrasónica y el soporte de hidroblasting de Tech Sonic </li>
            <li> Capacite a su proveedor titular de servicios de hidroblasting sobre el proceso y el soporte necesarios para utilizar los sistemas Tech Sonic </li>
            <li> Trabaje codo a codo con su proveedor de servicios para realizar la limpieza </li>
            <li> Brindar nuestros servicios a un precio fijo por adelantado </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> Al utilizar los sistemas de Tech Sonic en su próximo cambio, puede ahorrar dinero al: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Reducción de la mano de obra de hidroblasting requerida. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Elimina riesgos y responsabilidades. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Ahorrando hasta el 75% del agua que normalmente se requiere. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Produciendo hasta un 75% menos de aguas residuales </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Elimine el riesgo de su programa de limpieza proporcionando una limpieza más rápida. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Entregar intercambiadores que se limpian a &ldquo; como nuevos &rdquo; niveles de rendimiento. </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"> Llámenos </a>&nbsp;hoy y mejore su próximo rendimiento TAR mientras ahorra dinero. </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'es-us',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'Servicios de almohadillas de lavado',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> ¿Comprende el valor de una mejor limpieza y desea obtener esa ventaja en su próximo cambio? </p>
            <p> ¿Aún no estás listo para abandonar la almohadilla de lavado? También tenemos una solución para eso. </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "tamaño de fuente: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;hará: </p>
            <ul>
            <li> Trabaje con usted para comprender el alcance de su cambio y determinar la mejor combinación de los sistemas de limpieza ultrasónica y el soporte de hidroblasting de Tech Sonic </li>
            <li> Capacite a su proveedor titular de servicios de hidroblasting sobre el proceso y el soporte necesarios para utilizar los sistemas Tech Sonic </li>
            <li> Trabaje codo a codo con su proveedor de servicios para realizar la limpieza </li>
            <li> Brindar nuestros servicios a un precio fijo por adelantado </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> Al utilizar los sistemas de Tech Sonic en su próximo cambio, puede ahorrar dinero al: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Reducción de la mano de obra de hidroblasting requerida. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Elimina riesgos y responsabilidades. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Ahorrando hasta el 75% del agua que normalmente se requiere. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Produciendo hasta un 75% menos de aguas residuales </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Elimine el riesgo de su programa de limpieza proporcionando una limpieza más rápida. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Entregar intercambiadores que se limpian a &ldquo; como nuevos &rdquo; niveles de rendimiento. </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"> Llámenos </a>&nbsp;hoy y mejore su próximo rendimiento TAR mientras ahorra dinero. </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'es',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'Services de tampon de lavage',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> Comprenez-vous la valeur d\'un meilleur nettoyage et souhaitez-vous profiter de cet avantage lors de votre prochaine rotation? </p>
            <p> Vous n\'êtes pas encore prêt à abandonner le tampon de lavage? Nous avons également une solution pour cela. </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup> &nbsp;: </p>
            <ul>
            <li> Travaillez avec vous pour comprendre l\'étendue de votre délai d\'exécution et déterminer la meilleure combinaison des systèmes de nettoyage par ultrasons de Tech Sonic et de l\'assistance hydroblast </li>
            <li> Formez votre fournisseur de services d\'hydroblast en place sur le processus et l\'assistance nécessaires pour utiliser les systèmes Tech Sonic </li>
            <li> Travaillez côte à côte avec votre fournisseur de services pour effectuer le nettoyage </li>
            <li> Fournir nos services à un prix initial fixe </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> En utilisant les systèmes de Tech Sonic lors de votre prochain redressement, vous pouvez économiser de l\'argent en: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Réduction de la main-d\'œuvre de l\'hydroblastage requise. </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Éliminez les risques et la responsabilité. </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Économie jusqu\'à 75% de l\'eau normalement requise. </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Produire jusqu\'à 75% d\'eaux usées en moins </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Éliminez le risque de votre programme de nettoyage en offrant un nettoyage plus rapide. </li>
            <li> <img style= "hauteur: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Coche!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Fournissez des échangeurs nettoyés à &ldquo; comme neufs &rdquo; niveaux de performance. </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true">Appelez-nous </a>&nbsp;aujourd\'hui et améliorez vos prochaines performances TAR tout en économisant de l\'argent. </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'fr',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'पैड सेवाओं को धो लें',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> क्या आप बेहतर सफाई के मूल्य को समझते हैं, और अपने अगले बदलाव में उस लाभ को प्राप्त करना चाहते हैं? </p>
            <p> अभी तक वॉश पैड को छोड़ने के लिए तैयार नहीं हैं? हमारे पास इसका भी एक समाधान है। </p>
            <p><span style= "font-size: 1.15em; color: #227cbe?">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe?">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;करेंगे: </p>
            <ul>
            <li> अपने टर्नअराउंड के दायरे को समझने और टेक सोनिक &rsquo; एस की अल्ट्रासोनिक सफाई प्रणालियों और हाइड्रोबलास्टिंग समर्थन का सबसे अच्छा संयोजन निर्धारित करने के लिए आपके साथ काम करें </li>
            <li> टेक सोनिक सिस्टम का उपयोग करने के लिए आवश्यक प्रक्रिया और समर्थन पर अपने अवलंबी हाइड्रोबलास्टिंग सेवा प्रदाता को प्रशिक्षित करें </li>
            <li> सफाई सेवा करने के लिए अपने सेवा प्रदाता के साथ कंधे से कंधा मिलाकर काम करें </li>
            <li> हमारी सेवाओं को एक निश्चित, अप फ्रंट प्राइस </li> पर प्रदान करें
            </ul>
            <h2> &nbsp;</h2>
            <p> अपने अगले बदलाव में टेक सोनिक और सिस्टम के सिस्टम का उपयोग करके आप पैसे बचा सकते हैं: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;हाइड्रोबलास्टिंग श्रम की आवश्यकता को कम करना। </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;जोखिम और दायित्व को हटा दें। </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;सामान्य रूप से आवश्यक पानी का 75% तक बचाना। </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;75% तक कम अपशिष्ट पैदा करना </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;तेजी से सफाई प्रदान करके अपनी सफाई का जोखिम उठाएं। </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "चेकमार्क!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;जो नए और rdquo की तरह &ldquo पर साफ किए जाते हैं, उन्हें एक्सचेंजर्स को डिलीवर करें; प्रदर्शन स्तर। </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true">हमें कॉल करें </a>, आज पैसा बचाते हुए अपने अगले TAR प्रदर्शन में सुधार करें। </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'hi-in',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'ウォッシュパッドサービス',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p>より良いクリーニングの価値を理解していて、次のターンアラウンドでその利点を得たいですか？</p>
            <p>ウォッシュパッドを放棄する準備がまだできていませんか？そのための解決策もあります。</p>
            <p><span style= "font-size：1.15em; color：#227cbe;">C</span><span style= "font-size：0.9em; color：#227cbe;">LEAN</span>&nbsp;<span style= "font-size：1.15em; color：#227cbe;">A</span><span style= "font-size：0.9em; color：#227cbe;">S</span>&nbsp;<span style= "font-size：1.15em; color：#227cbe;">N</span><span style= "font-size：0.9em; color：#227cbe;">EW</span> <sup style= "font-size：1.1em; color：#227cbe;">&reg;</sup>&nbsp;予定：</p>
            <ul>
            <li>協力してターンアラウンドの範囲を理解し、TechSonicの超音波洗浄システムとハイドロブラストサポートの最適な組み合わせを決定します</li>
            <li> TechSonicシステムを利用するために必要なプロセスとサポートについて既存のハイドロブラストサービスプロバイダーをトレーニングします</li>
            <li>サービスプロバイダーと協力してクリーニングを実行します</li>
            <li>固定の前払い価格でサービスを提供します</li>
            </ul>
            <h2>&nbsp;</h2>
            <p>次のターンアラウンドでTechSonicのシステムを使用すると、次の方法で費用を節約できます。</p>
            <ul style= "list-style-type：none;">
            <li> <img style= "height：auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "チェックマーク！" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;必要なハイドロブラストの労力を削減します。</li>
            <li> <img style= "height：auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "チェックマーク！" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;リスクと責任を排除します。</li>
            <li> <img style= "height：auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "チェックマーク！" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;通常必要な水の最大75％を節約します。</li>
            <li> <img style= "height：auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "チェックマーク！" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;最大75％少ない廃水を生成</li>
            <li> <img style= "height：auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "チェックマーク！" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;より高速なクリーニングを提供することで、クリーニングスケジュールのリスクを軽減します。</li>
            <li> <img style= "height：auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "チェックマーク！" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;&ldquo;新品同様&rdquo;にクリーンアップされたエクスチェンジャーを配信します。パフォーマンスレベル。</li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true">今すぐお電話</a>&nbsp;今日は、コストを節約しながら次のTARパフォーマンスを向上させてください。</p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'jp',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'Perkhidmatan Pad Basuh',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> Adakah anda memahami nilai pembersihan yang lebih baik, dan ingin mendapatkan kelebihan itu dalam pemulihan anda seterusnya? </p>
            <p> Masih belum bersedia untuk meninggalkan tempat mencuci? Kami ada jalan keluar untuk itu juga. </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;akan: </p>
            <ul>
            <li> Bekerja dengan anda untuk memahami ruang lingkup perubahan anda dan tentukan kombinasi terbaik sistem pembersihan ultrasonik Tech Sonic dan sokongan hidrob kekal </li>
            <li> Latih penyedia perkhidmatan hidrob kekal anda semasa proses dan sokongan yang diperlukan untuk menggunakan sistem Tech Sonic </li>
            <li> Bekerjasama dengan penyedia perkhidmatan anda untuk melakukan pembersihan </li>
            <li> Berikan perkhidmatan kami dengan harga tetap di muka </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> Dengan menggunakan sistem Tech Sonic dalam proses seterusnya anda dapat menjimatkan wang dengan: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Mengurangkan tenaga hidrob kekal yang diperlukan. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Menghilangkan risiko dan tanggungjawab. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Menjimatkan hingga 75% air yang biasanya diperlukan. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Menghasilkan lebih kurang 75% air sisa </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Nyah risiko jadual pembersihan anda dengan menyediakan pembersihan yang lebih pantas. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Tanda semak!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Sampaikan penukar yang dibersihkan ke &ldquo; seperti baru &rdquo; tahap prestasi. </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"> Hubungi kami </a>&nbsp;hari ini dan tingkatkan prestasi TAR anda seterusnya sambil menjimatkan wang. </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'ml',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'Servicios de almohadillas de lavado',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> ¿Comprende el valor de una mejor limpieza y desea obtener esa ventaja en su próximo cambio? </p>
            <p> ¿Aún no estás listo para abandonar la almohadilla de lavado? También tenemos una solución para eso. </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "tamaño de fuente: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;hará: </p>
            <ul>
            <li> Trabaje con usted para comprender el alcance de su cambio y determinar la mejor combinación de los sistemas de limpieza ultrasónica y el soporte de hidroblasting de Tech Sonic </li>
            <li> Capacite a su proveedor titular de servicios de hidroblasting sobre el proceso y el soporte necesarios para utilizar los sistemas Tech Sonic </li>
            <li> Trabaje codo a codo con su proveedor de servicios para realizar la limpieza </li>
            <li> Brindar nuestros servicios a un precio fijo por adelantado </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> Al utilizar los sistemas de Tech Sonic en su próximo cambio, puede ahorrar dinero al: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Reducción de la mano de obra de hidroblasting requerida. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Elimina riesgos y responsabilidades. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Ahorrando hasta el 75% del agua que normalmente se requiere. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Produciendo hasta un 75% menos de aguas residuales </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Elimine el riesgo de su programa de limpieza proporcionando una limpieza más rápida. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Entregar intercambiadores que se limpian a &ldquo; como nuevos &rdquo; niveles de rendimiento. </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"> Llámenos </a>&nbsp;hoy y mejore su próximo rendimiento TAR mientras ahorra dinero. </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'mx',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'ਪੈਡ ਸੇਵਾਵਾਂ ਧੋਵੋ',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p>ਕੀ ਤੁਸੀਂ ਬਿਹਤਰ ਸਫਾਈ ਦੇ ਮੁੱਲ ਨੂੰ ਸਮਝਦੇ ਹੋ, ਅਤੇ ਆਪਣੇ ਅਗਲੇ ਬਦਲਾਓ ਵਿਚ ਉਹ ਲਾਭ ਪ੍ਰਾਪਤ ਕਰਨਾ ਚਾਹੁੰਦੇ ਹੋ?</p>
            <p> ਅਜੇ ਵੀ ਵਾਸ਼ ਪੈਡ ਨੂੰ ਛੱਡਣ ਲਈ ਤਿਆਰ ਨਹੀਂ ਹੈ? ਸਾਡੇ ਕੋਲ ਇਸਦਾ ਹੱਲ ਵੀ ਹੈ.</p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "tamaño de fuente: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;ਕਰੇਗਾ:</p>
            <ul>
            <li> ਆਪਣੇ ਬਦਲਾਅ ਦੀ ਗੁੰਜਾਇਸ਼ ਨੂੰ ਸਮਝਣ ਲਈ ਅਤੇ ਟੈਕ ਸੋਨਿਕ ਦੇ ਅਲਟਰਾਸੋਨਿਕ ਸਫਾਈ ਪ੍ਰਣਾਲੀਆਂ ਅਤੇ ਹਾਈਡ੍ਰੋਬਲਾਸਟਿੰਗ ਸਹਾਇਤਾ ਦੇ ਸਭ ਤੋਂ ਵਧੀਆ ਸੁਮੇਲ ਨੂੰ ਨਿਰਧਾਰਤ ਕਰਨ ਲਈ ਤੁਹਾਡੇ ਨਾਲ ਕੰਮ ਕਰੋ </li>
            <li> ਤਕਨੀਕੀ ਸੋਨਿਕ ਪ੍ਰਣਾਲੀਆਂ ਦੀ ਵਰਤੋਂ ਲਈ ਲੋੜੀਂਦੀ ਪ੍ਰਕਿਰਿਆ ਅਤੇ ਸਹਾਇਤਾ ਲਈ ਆਪਣੇ ਆਉਣ ਵਾਲੇ ਹਾਈਡ੍ਰੋਬਲਾਸਟਿੰਗ ਸੇਵਾ ਪ੍ਰਦਾਤਾ ਨੂੰ ਸਿਖਲਾਈ ਦਿਓ </li>
            <li> ਸਫਾਈ ਕਰਨ ਲਈ ਆਪਣੇ ਸੇਵਾ ਪ੍ਰਦਾਤਾ ਦੇ ਨਾਲ-ਨਾਲ ਕੰਮ ਕਰੋ </li>
            <li> ਸਾਡੀਆਂ ਸੇਵਾਵਾਂ ਇਕ ਨਿਸ਼ਚਤ, ਉੱਪਰ ਵਾਲੀ ਕੀਮਤ ਤੇ ਪ੍ਰਦਾਨ ਕਰੋ </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> ਆਪਣੇ ਅਗਲੇ ਬਦਲਾਅ ਵਿੱਚ ਟੈਕ ਸੋਨਿਕ ਦੇ ਪ੍ਰਣਾਲੀਆਂ ਦੀ ਵਰਤੋਂ ਕਰਕੇ ਤੁਸੀਂ ਪੈਸੇ ਦੀ ਬਚਤ ਕਰ ਸਕਦੇ ਹੋ:</p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਲੋੜੀਂਦੇ ਹਾਈਡ੍ਰੋਬਲਾਸਟਿੰਗ ਲੇਬਰ ਨੂੰ ਘਟਾਉਣਾ. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਜੋਖਮ ਅਤੇ ਦੇਣਦਾਰੀ ਨੂੰ ਖਤਮ ਕਰੋ. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਤੱਕ ਪਾਣੀ ਦੀ ਬਚਤ ਆਮ ਤੌਰ ਤੇ ਜ਼ਰੂਰੀ ਹੈ. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;75% ਘੱਟ ਗੰਦੇ ਪਾਣੀ ਦਾ ਉਤਪਾਦਨ </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਤੇਜ਼ੀ ਨਾਲ ਸਫਾਈ ਦੇ ਕੇ ਆਪਣੇ ਸਫਾਈ ਦੇ ਕਾਰਜਕ੍ਰਮ ਦਾ ਜੋਖਮ ਲਓ. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "¡Marca de verificación!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ਐਕਸਚੇਂਜਰਾਂ ਨੂੰ ਡਿਲੀਵਰ ਕਰੋ ਜੋ &ldquo; ਤੇ ਸਾਫ ਕੀਤੇ ਗਏ ਹਨ ਜਿਵੇਂ ਕਿ ਨਵਾਂ &rdquo; ਪ੍ਰਦਰਸ਼ਨ ਦੇ ਪੱਧਰ. </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"> ਅੱਜ ਸਾਨੂੰ ਕਾਲ ਕਰੋ </a>&nbsp;ਅਤੇ ਪੈਸੇ ਦੀ ਬਚਤ ਕਰਦੇ ਹੋਏ ਆਪਣੀ ਅਗਲੀ ਟੀਏਆਰ ਕਾਰਗੁਜ਼ਾਰੀ ਵਿੱਚ ਸੁਧਾਰ ਕਰੋ. </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'pa-pk',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'Serviços de lavabo',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> Você entende o valor de uma limpeza melhor e deseja obter essa vantagem em sua próxima parada? </p>
            <p> Ainda não está pronto para abandonar a almofada de lavagem? Também temos uma solução para isso. </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">E</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp; irá: </p>
            <ul>
            <li> Trabalhe com você para entender o escopo da sua recuperação e determinar a melhor combinação dos sistemas de limpeza ultrassônica da Tech Sonic e do suporte de hidrojateamento </li>
            <li> Treine seu provedor de serviços de hidrojateamento no processo e suporte necessários para utilizar os sistemas Tech Sonic </li>
            <li> Trabalhe lado a lado com seu provedor de serviços para realizar a limpeza </li>
            <li> Fornecer nossos serviços a um preço inicial fixo </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> Ao usar os sistemas da Tech Sonic em sua próxima parada, você pode economizar dinheiro: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Redução da mão de obra de hidrojateamento necessária. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Elimine riscos e responsabilidades. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Economizando até 75% da água normalmente necessária. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Produzindo até 75% menos água residual </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Desfaça o risco de sua programação de limpeza fornecendo uma limpeza mais rápida. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Marca de seleção!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Entregue trocadores que são limpos para &ldquo; como novos &rdquo; níveis de desempenho. </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"> Ligue para nós </a>&nbsp;hoje e melhore o desempenho do próximo TAR enquanto economiza dinheiro. </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'pt-br',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'Услуги мытья подушек',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> Понимаете ли вы ценность более качественной очистки и хотите ли вы воспользоваться этим преимуществом в следующий раз? </p>
            <p> Еще не готовы отказаться от губки? У нас тоже есть решение. </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;будет: </p>
            <ul>
            <li> Работайте вместе с вами, чтобы понять объем вашего ремонта и определить наилучшее сочетание систем ультразвуковой очистки Tech Sonic и поддержки гидроструйной обработки. </li>
            <li> Обучите своего действующего поставщика услуг гидроструйной очистки процессам и поддержке, необходимым для использования систем Tech Sonic </li>
            <li> Работайте бок о бок со своим поставщиком услуг, чтобы выполнить уборку. </li>
            <li> Предоставлять наши услуги по фиксированной предварительной цене. </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> Используя системы Tech Sonic в вашем следующем ремонте, вы можете сэкономить деньги: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Сокращение трудозатрат на гидроструйную очистку. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Устранение риска и ответственности. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Обычно требуется экономия до 75% воды. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Сокращение количества сточных вод до 75%. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Избавьтесь от рисков в расписании уборки, обеспечив более быструю уборку. </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "Галочка!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;Доставить обменники, очищенные до &ldquo; как новые &rdquo; уровни производительности. </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"> Позвоните нам </a>&nbsp;сегодня и улучшите производительность следующего TAR, сэкономив при этом деньги. </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'ru',
        ]);

        DB::table('services')->insert([
            'serviceid' => '33333333',
            'title' => 'บริการ Wash Pad',
            'image_landing_1' => 'assets/img/services/onsite-facility-service.jpg',
            'image_landing_2' => 'assets/img/services/onsite-facility-service-sm.jpg',
            'embed' => '<p> คุณเข้าใจคุณค่าของการทำความสะอาดที่ดีขึ้นและต้องการได้เปรียบดังกล่าวในการตอบสนองครั้งต่อไปหรือไม่ </p>
            <p> ยังไม่พร้อมที่จะทิ้งแผ่นซักผ้าใช่หรือไม่ เรามีวิธีแก้ไขเช่นกัน </p>
            <p><span style= "font-size: 1.15em; color: #227cbe;">C</span><span style= "font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">A</span><span style= "font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style= "font-size: 1.15em; color: #227cbe;">N</span><span style= "font-size: 0.9em; color: #227cbe;">EW</span><sup style= "font-size: 1.1em; color: #227cbe;">&reg; </sup>&nbsp;will: </p>
            <ul>
            <li> ทำงานร่วมกับคุณเพื่อทำความเข้าใจขอบเขตของการตอบสนองของคุณและพิจารณาการผสมผสานที่ดีที่สุดของระบบทำความสะอาดอัลตราโซนิกของ Tech Sonic และการสนับสนุนการเป่าด้วยพลังน้ำ </li>
            <li> ฝึกอบรมผู้ให้บริการการเป่าด้วยพลังน้ำของคุณเกี่ยวกับกระบวนการและการสนับสนุนที่จำเป็นในการใช้ระบบ Tech Sonic </li>
            <li> ทำงานเคียงข้างกันกับผู้ให้บริการของคุณเพื่อดำเนินการทำความสะอาด </li>
            <li> ให้บริการของเราในราคาที่กำหนดไว้ล่วงหน้า </li>
            </ul>
            <h2>&nbsp;</h2>
            <p> การใช้ระบบของ Tech Sonic ในการตอบสนองครั้งต่อไปคุณสามารถประหยัดเงินได้โดย: </p>
            <ul style= "list-style-type: none;">
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;การลดแรงงานการเป่าด้วยพลังน้ำที่จำเป็น </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ขจัดความเสี่ยงและความรับผิด </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ประหยัดน้ำได้ถึง 75% ตามปกติ </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ผลิตน้ำเสียน้อยลงถึง 75% </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ลดความเสี่ยงจากกำหนดการทำความสะอาดของคุณด้วยการทำความสะอาดที่เร็วขึ้น </li>
            <li> <img style= "height: auto;" src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" alt = "เครื่องหมายถูก!" data-src = "https://cleanasnew.com/assets/img/service-green-checkmark2.png" />&nbsp;ส่งมอบเครื่องแลกเปลี่ยนที่ทำความสะอาดให้ &ldquo; เหมือนใหม่ &rdquo; ระดับประสิทธิภาพ </li>
            </ul>
            <p> <a href="https://cleanasnew.com/contact" aria-invalid="true"> โทรหาเรา </a>&nbsp;วันนี้และปรับปรุงประสิทธิภาพ TAR ครั้งต่อไปของคุณในขณะที่ประหยัดเงิน </p>',
            'image_article' => 'assets/img/WashpadMontage-min.gif',
            'locale' => 'th',
        ]);

        // Replace Your Wash Pad
        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'Replace Your Wash Pad',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style="text-align: center;">Why Partner with&nbsp;<span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">A</span><span style="font-size: 1.1em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">N</span><span style="font-size: 1.1em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>?</h2>
            <p>Increasingly, the refining and petrochemical industries are faced with demand from investors, shareholders, regulatory bodies and John Q. Public to improve their&nbsp;<strong>ESG performance</strong>.</p>
            <p>By replacing your wash pad with a&nbsp;<span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;cleaning facility, you can restore operation to design capacity, reduce your cleaning costs, lower your carbon footprint all while improving your&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><strong>bottom line</strong></span>.</p>
            <h3>Facility</h3>
            <p><strong>Dedicated Cleaning Facility</strong>&nbsp;- Just outside your fence line</p>
            <p><strong>Capital Cost</strong>&nbsp;- No! You only pay for the cleaning</p>
            <p><strong>Design Concept</strong>&nbsp;- Ready for review in 7 days (from receipt of client information)</p>
            <p><strong>Design Detailed&nbsp;</strong>- Ready to submit for permit in 30 days (from execution of contract)</p>
            <p><strong>Construction Duration&nbsp;</strong>- Ready for use in 6 months (from notice to proceed)</p>
            <h3>Cleaning Costs</h3>
            <p><strong>Heat Exchangers&nbsp;</strong>- Fixed price based on exchanger size &amp; type</p>
            <p><strong>Parts</strong>&nbsp;&ndash; Fixed price - Based on basket size</p>
            <h3>Operations</h3>
            <p><span style="color: #1d70b9;"><strong>CLEANER</strong></span>&nbsp;- We clean to &rsaquo;95% of Clean Duty, and If we can&rsquo;t clean it, you DON&rsquo;T pay</p>
            <p><span style="color: #eb252f;"><strong>FASTER</strong></span>&nbsp;- We clean twice as fast as hydroblasting on your own wash pad</p>
            <p><span style="background-color: #ffffff; color: #f79321;"><strong>SAFER</strong></span>&nbsp;- We ensure 100% of the hydroblasting risk is eliminated</p>
            <p><span style="color: #25b574;"><strong>GREENER</strong></span>&nbsp;- We recycle &rsaquo;95% of our water</p>
            <h3>Value</h3>
            <p><strong>Reduced Cleaning Costs&nbsp;</strong>- &frac12; the cost compared to the&nbsp;<span style="box-sizing: border-box; text-decoration: underline;">total cost of cleaning</span>&nbsp;on your own wash pad</p>
            <p><strong>Shorter Outages</strong>&nbsp;- Scheduled certainty c/w historical cleaning data</p>
            <p><strong>Improved Operating Efficiency</strong></p>
            <ul>
            <li>Significant energy reduction - Heat exchangers, rotating and process equipment operate like new</li>
            <li>Provides option to replace heat exchangers with more efficient ones</li>
            <li>Provides option for less expensive process design</li>
            <li>Improve production</li>
            <li>Provides optional increased run-lengths (longer intervals between outages)</li>
            </ul>
            <p>&nbsp;</p>
            <p><strong>Lower Greenhouse Gas Emissions</strong>&nbsp;- Significant reduction in GHG&rsquo;s with improved efficiency</p>
            <p><strong>Better Environmental Performance</strong>&nbsp;- Significantly improves your ESG Scores</p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'en',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => '更换洗垫',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style="text-align：center;">为什么与<span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg; </sup>？</h2>
            <p>越来越多的炼油和石化行业面临投资者，股东，监管机构和John Q. Public的需求，以改善其<strong> ESG绩效</strong>。</p>
            <p>通过用<span style="font-size：1.15em; color：#227cbe;">C</span><span style="font-size：0.9em; color：#227cbe;">精益</span>&nbsp;<span style=" font-size：1.15em; color：#227cbe;">A</span><span style=" font-size：0.9em; color：#227cbe;">S</span>&nbsp;<span style=" font-size：1.15em; color：#227cbe;">N</span><span style=" font-size：0.9em; color：#227cbe;">EW</span> <sup style=" font-size：1.1em; color：#227cbe;">&reg;</sup>&nbsp;清洁设施，您可以恢复操作以达到设计能力，减少清洁工作成本，降低您的碳足迹，同时改善您的<span style="box-sizing：border-box;文本装饰：underline;"><strong>底行</strong></span>。</p>
            <h3>设施</h3>
            <p> <strong>专用清洁设施</strong>-刚好在栅栏外</p>
            <p> <strong>资金成本</strong>-不！您只需要支付清洁费用</p>
            <p> <strong>设计概念</strong>&nbsp;-准备在7天内进行审核（从收到客户信息开始）</p>
            <p> <strong>详细设计</strong>-准备在30天（自合同签订之日起）后提交许可</p>
            <p> <strong>施工工期</strong>-可以在6个月内使用（从通知到进行）</p>
            <h3>清洁费用</h3>
            <p> <strong>换热器</strong>-固定价格，基于交换器大小和输入</p>
            <p> <strong>零件</strong>&nbsp;&ndash;固定价格-根据购物篮尺寸</p>
            <h3>操作</h3>
            <p><span style="color：#1d70b9;"><strong>清洁剂</strong></span>&nbsp;-我们清洁了95％的清洁税，如果我们不能清洁它，你不付款</p>
            <p><span style="color：#eb252f;"><strong>更快</strong></span>&nbsp;-我们的清洗速度是在自己的洗垫上进行水力喷射的两倍。</p>
            <p><span style="background-color：#ffffff; color：#f79321;"><strong> SAFER </strong></span>&nbsp;-我们确保消除100％的喷水风险</ p >
            <p><span style="color：#25b574;"><strong>格里纳</strong></span>&nbsp;-我们回收了95％的水</p>
            <h3>值</h3>
            <p> <strong>降低了清洁成本</strong>-&frac12;费用与<span style="box-sizing：border-box; text-decoration：underline;">总清洁费用</span>&nbsp;在您自己的洗垫上相比</p>
            <p> <strong>更短的停机时间</strong>-计划的确定性连续清洗历史数据</p>
            <p> <strong>提高的运营效率</strong> </p>
            <ul>
            <li>显着降低能耗-热交换器，旋转设备和加工设备的运行方式像新的一样</li>
            <li>提供了用更高效的热交换器替换热交换器的选项</li>
            <li>提供用于更便宜的过程设计的选项</li>
            <li>提高产量</li>
            <li>提供可选的延长运行时间（更长的停机间隔）</li>
            </ul>
            <p>&nbsp; </p>
            <p> <strong>降低温室气体排放量</strong>-显着减少温室气体排放并提高效率</p>
            <p> <strong>更好的环境绩效</strong>-显着提高您的ESG得分</p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'cn',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'Vervang uw waskussen',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style="text-align: center;">Waarom samenwerken met&nbsp; span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg; </sup>? </h2>
            <p> In toenemende mate worden de raffinage- en petrochemische industrieën geconfronteerd met de vraag van investeerders, aandeelhouders, regelgevende instanties en John Q. Public om hun&nbsp; strong> ESG-prestaties </strong> te verbeteren. </p>
            <p> Door uw waskussen te vervangen door een&nbsp; span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; "> &reg; </sup>&nbsp;-reinigingsfaciliteit, u kunt de werking herstellen naar de ontwerpcapaciteit, uw reiniging verminderen kosten, verlaagt u uw ecologische voetafdruk en verbetert u tegelijkertijd uw&nbsp; span style="box-sizing: border-box; text-decoration: underline;"><strong> bottom line </strong></span>. </p>
            <h3> Faciliteit </h3>
            <p> <strong> Speciale reinigingsfaciliteit </strong>&nbsp;- Net buiten uw afrastering </p>
            <p> <strong> Kapitaalkosten </strong>&nbsp;- Nee! U betaalt alleen voor de schoonmaak </p>
            <p> <strong> Ontwerpconcept </strong>&nbsp;- Klaar voor beoordeling binnen 7 dagen (na ontvangst van klantinformatie) </p>
            <p> <strong> Ontwerp gedetailleerd&nbsp; /strong> - Klaar om in te dienen voor vergunning binnen 30 dagen (vanaf uitvoering van contract) </p>
            <p> <strong> Bouwduur&nbsp; /strong> - Klaar voor gebruik binnen 6 maanden (van kennisgeving tot procedure) </p>
            <h3> Schoonmaakkosten </h3>
            <p> <strong> Warmtewisselaars&nbsp; /strong> - Vaste prijs gebaseerd op de grootte van de wisselaar &amp; type </p>
            <p> <strong> Onderdelen </strong>&nbsp;&ndash; Vaste prijs - Op basis van mandgrootte </p>
            <h3> Bewerkingen </h3>
            <p> <span style="color: #1d70b9;"><strong> CLEANER </strong></span>&nbsp;- We reinigen tot &rsaquo; 95% van Clean Duty, en als we het niet kunnen reinigen, u betaalt NIET &rsquo; T </p>
            <p> <span style="color: #eb252f;"><strong> SNELLER </strong></span>&nbsp;- We reinigen twee keer zo snel als hydrostralen op je eigen waskussen </p>
            <p> <span style="background-color: #ffffff; color: #f79321;"><strong> VEILIGER </strong></span>&nbsp;- We zorgen ervoor dat 100% van het risico op hydroblasting wordt geëlimineerd </ p >
            <p> <span style="color: #25b574;"><strong> GROENER </strong></span>&nbsp;- We recyclen &rsaquo; 95% van ons water </p>
            <h3> Waarde </h3>
            <p> <strong> Lagere schoonmaakkosten&nbsp; /strong> - &frac12; de kosten in vergelijking met de&nbsp; span style="box-sizing: border-box; text-decoration: underline;">totale schoonmaakkosten</span>&nbsp;op uw eigen waskussen </p>
            <p> <strong> Kortere storingen </strong>&nbsp;- Geplande zekerheid met historische opschoningsgegevens </p>
            <p> <strong> Verbeterde operationele efficiëntie </strong> </p>
            <ul>
            <li> Aanzienlijke energiereductie - Warmtewisselaars, roterende en procesapparatuur werken als nieuw </li>
            <li> Biedt de mogelijkheid om warmtewisselaars te vervangen door efficiëntere exemplaren </li>
            <li> Biedt een optie voor minder duur procesontwerp </li>
            <li> Productie verbeteren </li>
            <li> Biedt optioneel grotere run-lengtes (langere intervallen tussen storingen) </li>
            </ul>
            <p>&nbsp;</p>
            <p> <strong> Lagere uitstoot van broeikasgassen </strong>&nbsp;- Aanzienlijke vermindering van broeikasgasemissies met verbeterde efficiëntie </p>
            <p> <strong> Betere milieuprestaties </strong>&nbsp;- Verbetert uw ESG-scores aanzienlijk </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'de',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'Reemplace su almohadilla de lavado',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align: center;"> Por qué asociarse con &nbsp; <span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup>? </h2>
<p> Cada vez más, las industrias de refinación y petroquímica se enfrentan a la demanda de inversores, accionistas, organismos reguladores y John Q. Public para mejorar su &nbsp; <strong> desempeño ESG </strong>. </p>
<p> Reemplazando la almohadilla de lavado con &nbsp; <span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup> &nbsp; instalación de limpieza, puede restaurar la operación a la capacidad de diseño, reducir su limpieza costos, reduzca su huella de carbono mientras mejora su &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> <strong> resultado final </strong> </span>. </p>
<h3> Instalación </h3>
<p> <strong> Instalación de limpieza dedicada </strong> &nbsp;: justo afuera de la línea de la cerca </p>
<p> <strong> Costo de capital </strong> &nbsp; - ¡No! Solo pagas por la limpieza </p>
<p> <strong> Concepto de diseño </strong> &nbsp;: listo para su revisión en 7 días (desde la recepción de la información del cliente) </p>
<p> <strong> Diseño detallado &nbsp; </strong>: listo para solicitar el permiso en 30 días (desde la ejecución del contrato) </p>
<p> <strong> Duración de la construcción &nbsp; </strong>: listo para usar en 6 meses (desde la notificación hasta el final) </p>
<h3> Costos de limpieza </h3>
<p> <strong> Intercambiadores de calor &nbsp; </strong>: precio fijo basado en el tamaño del intercambiador &amp; tipo </p>
<p> <strong> Piezas </strong> &nbsp; &ndash; Precio fijo: según el tamaño de la cesta </p>
<h3> Operaciones </h3>
<p> <span style = "color: #1d70b9;"> <strong> LIMPIADOR </strong> </span> &nbsp; - Limpiamos al 95% del servicio limpio y, si no podemos limpiarlo, usted NO paga </p>
<p> <span style = "color: #eb252f;"> <strong> MÁS RÁPIDO </strong> </span> &nbsp; - Limpiamos el doble de rápido que el hidroblasting en su propia almohadilla de lavado </p>
<p> <span style = "background-color: #ffffff; color: #f79321;"> <strong> MÁS SEGURO </strong> </span> &nbsp; - Nos aseguramos de eliminar el 100% del riesgo de hidroblasting </ p >
<p> <span style = "color: #25b574;"> <strong> MÁS VERDE </strong> </span> &nbsp; - Reciclamos &rsaquo; 95% de nuestra agua </p>
<h3> Valor </h3>
<p> <strong> Costos de limpieza reducidos &nbsp; </strong> - &frac12; el costo en comparación con el &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> costo total de limpieza </span> &nbsp; en su propia almohadilla de lavado </p>
<p> <strong> Interrupciones más breves </strong> &nbsp;: certeza programada con datos de limpieza históricos </p>
<p> <strong> Mejora de la eficiencia operativa </strong> </p>
<ul>
<li> Reducción significativa de energía: los intercambiadores de calor, los equipos rotativos y de proceso funcionan como nuevos </li>
<li> Proporciona la opción de reemplazar los intercambiadores de calor por otros más eficientes </li>
<li> Ofrece la opción de un diseño de proceso menos costoso </li>
<li> Mejorar la producción </li>
<li> Proporciona una mayor duración de ejecución opcional (intervalos más largos entre interrupciones) </li>
</ul>
<p> &nbsp; </p>
<p> <strong> Reducir las emisiones de gases de efecto invernadero </strong> &nbsp; - Reducción significativa de los gases de efecto invernadero con una mayor eficiencia </p>
<p> <strong> Mejor desempeño ambiental </strong> &nbsp;: mejora significativamente sus puntajes ESG </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'es-us',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'Reemplace su almohadilla de lavado',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align: center;"> Por qué asociarse con &nbsp; <span style = "font-size: 1.3em; color: #227cbe;"> C </span> <span style = "font-size: 1.1em; color: #227cbe; "> LEAN </span> &nbsp; <span style =" font-size: 1.3em; color: #227cbe; "> A </span> <span style =" font-size: 1.1em; color: #227cbe; "> S </span> &nbsp; <span style =" font-size: 1.3em; color: #227cbe; "> N </span> <span style =" font-size: 1.1em; color: #227cbe; "> EW </span> <sup style =" tamaño de fuente: 1.1em; color: #227cbe; "> &reg; </sup>? </h2>
<p> Cada vez más, las industrias de refinación y petroquímica se enfrentan a la demanda de inversores, accionistas, organismos reguladores y John Q. Public para mejorar su &nbsp; <strong> desempeño ESG </strong>. </p>
<p> Reemplazando la almohadilla de lavado con &nbsp; <span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup> &nbsp; instalación de limpieza, puede restaurar la operación a la capacidad de diseño, reducir su limpieza costos, reduzca su huella de carbono mientras mejora su &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> <strong> resultado final </strong> </span>. </p>
<h3> Instalación </h3>
<p> <strong> Instalación de limpieza dedicada </strong> &nbsp;: justo afuera de la línea de la cerca </p>
<p> <strong> Costo de capital </strong> &nbsp; - ¡No! Solo pagas por la limpieza </p>
<p> <strong> Concepto de diseño </strong> &nbsp;: listo para su revisión en 7 días (desde la recepción de la información del cliente) </p>
<p> <strong> Diseño detallado &nbsp; </strong>: listo para solicitar el permiso en 30 días (desde la ejecución del contrato) </p>
<p> <strong> Duración de la construcción &nbsp; </strong>: listo para usar en 6 meses (desde la notificación hasta el final) </p>
<h3> Costos de limpieza </h3>
<p> <strong> Intercambiadores de calor &nbsp; </strong>: precio fijo basado en el tamaño del intercambiador &amp; tipo </p>
<p> <strong> Piezas </strong> &nbsp; &ndash; Precio fijo: según el tamaño de la cesta </p>
<h3> Operaciones </h3>
<p> <span style = "color: #1d70b9;"> <strong> LIMPIADOR </strong> </span> &nbsp; - Limpiamos al 95% del servicio limpio y, si no podemos limpiarlo, usted NO paga </p>
<p> <span style = "color: #eb252f;"> <strong> MÁS RÁPIDO </strong> </span> &nbsp; - Limpiamos el doble de rápido que el hidroblasting en su propia almohadilla de lavado </p>
<p> <span style = "background-color: #ffffff; color: #f79321;"> <strong> MÁS SEGURO </strong> </span> &nbsp; - Nos aseguramos de eliminar el 100% del riesgo de hidroblasting </ p >
<p> <span style = "color: #25b574;"> <strong> MÁS VERDE </strong> </span> &nbsp; - Reciclamos &rsaquo; 95% de nuestra agua </p>
<h3> Valor </h3>
<p> <strong> Costos de limpieza reducidos &nbsp; </strong> - &frac12; el costo en comparación con el &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> costo total de limpieza </span> &nbsp; en su propia almohadilla de lavado </p>
<p> <strong> Interrupciones más breves </strong> &nbsp;: certeza programada con datos de limpieza históricos </p>
<p> <strong> Mejora de la eficiencia operativa </strong> </p>
<ul>
<li> Reducción significativa de energía: los intercambiadores de calor, los equipos rotativos y de proceso funcionan como nuevos </li>
<li> Proporciona la opción de reemplazar los intercambiadores de calor por otros más eficientes </li>
<li> Ofrece la opción de un diseño de proceso menos costoso </li>
<li> Mejorar la producción </li>
<li> Proporciona una mayor duración de ejecución opcional (intervalos más largos entre interrupciones) </li>
</ul>
<p> &nbsp; </p>
<p> <strong> Reducir las emisiones de gases de efecto invernadero </strong> &nbsp; - Reducción significativa de los gases de efecto invernadero con una mayor eficiencia </p>
<p> <strong> Mejor desempeño ambiental </strong> &nbsp;: mejora significativamente sus puntajes ESG </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'es',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'Remplacez votre tampon de lavage',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align: center;"> Pourquoi s\'associer avec&nbsp; span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg; </sup>? </h2>
            <p> De plus en plus, les industries du raffinage et de la pétrochimie sont confrontées à la demande des investisseurs, des actionnaires, des organismes de réglementation et de John Q. Public d\'améliorer leurs&nbsp; strong> performances ESG </strong>. </p>
            <p> En remplaçant votre tampon de lavage par un&nbsp; span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; "> &reg; </sup>&nbsp;installation de nettoyage, vous pouvez restaurer le fonctionnement à la capacité de conception, réduire votre nettoyage coûts, réduisez votre empreinte carbone tout en améliorant votre&nbsp; span style = "box-sizing: border-box; text-decoration: underline;"> <strong> ligne du bas </strong></span>. </p>
            <h3> Installation </h3>
            <p> <strong> Installation de nettoyage dédiée </strong>&nbsp;- Juste à l\'extérieur de votre clôture </p>
            <p> <strong> Coût en capital </strong>&nbsp;- Non! Vous ne payez que le nettoyage </p>
            <p> <strong> Design Concept </strong>&nbsp;- Prêt pour examen dans 7 jours (à compter de la réception des informations client) </p>
            <p> <strong> Conception détaillée&nbsp; /strong> - Prêt à soumettre une demande d\'autorisation dans les 30 jours (à compter de l\'exécution du contrat) </p>
            <p> <strong> Durée de la construction&nbsp; /strong> - Prêt à l\'emploi dans 6 mois (à partir de l\'avis de procéder) </p>
            <h3> Frais de nettoyage </h3>
            <p> <strong> Échangeurs de chaleur&nbsp; /strong> - Prix fixe basé sur la taille de l\'échangeur &amp; type </p>
            <p> <strong> Pièces </strong>&nbsp;&ndash; Prix ​​fixe - Basé sur la taille du panier </p>
            <h3> Opérations </h3>
            <p> <span style = "color: #1d70b9;"> <strong> NETTOYANT </strong></span>&nbsp;- Nous nettoyons à &rsaquo; 95% de Clean Duty, et si nous ne pouvons pas le nettoyer, vous NE payez PAS </p>
            <p> <span style = "color: #eb252f;"> <strong> PLUS RAPIDE </strong></span>&nbsp;- Nous nettoyons deux fois plus vite que l\'hydroblastage sur votre propre tampon de lavage </p>
            <p> <span style = "background-color: #ffffff; color: #f79321;"> <strong> PLUS SÛR </strong></span>&nbsp;- Nous nous assurons que 100% du risque d\'hydroblasting est éliminé </ p >
            <p> <span style = "color: #25b574;"> <strong> PLUS VERT </strong></span>&nbsp;- Nous recyclons &rsaquo; 95% de notre eau </p>
            <h3> Valeur </h3>
            <p> <strong> Coûts de nettoyage réduits&nbsp; /strong> - &frac12; le coût par rapport au&nbsp; span style = "box-sizing: border-box; text-decoration: underline;"> coût total du nettoyage</span>&nbsp;sur votre propre tampon de lavage </p>
            <p> <strong> Interruptions plus courtes </strong>&nbsp;- Certitude planifiée avec l\'historique des données de nettoyage </p>
            <p> <strong> Efficacité opérationnelle améliorée </strong> </p>
            <ul>
            <li> Réduction d\'énergie significative - Les échangeurs de chaleur, les équipements rotatifs et de process fonctionnent comme neufs </li>
            <li> Offre la possibilité de remplacer les échangeurs de chaleur par des plus efficaces </li>
            <li> Offre une option pour une conception de processus moins coûteuse </li>
            <li> Améliorer la production </li>
            <li> Fournit des longueurs d\'exécution supplémentaires facultatives (intervalles plus longs entre les pannes) </li>
            </ul>
            <p>&nbsp;</p>
            <p> <strong> Réduction des émissions de gaz à effet de serre </strong>&nbsp;- Réduction significative des GES grâce à une efficacité améliorée </p>
            <p> <strong> Meilleures performances environnementales </strong>&nbsp;- Améliore considérablement vos scores ESG </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'fr',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'अपना वॉश पैड बदलें',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align: center;"> क्यों साथी के साथ&nbsp; span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg; </sup>? </h2>
            <p> तेजी से, शोधन और पेट्रोकेमिकल उद्योग निवेशकों, शेयरधारकों, विनियामक निकायों और जॉन क्यू। पब्लिक की मांग के साथ सामना कर रहे हैं ताकि उनके&nbsp; strong> ESG प्रदर्शन </strong> </p> में सुधार हो सके।
            <p> अपने वॉश पैड को&nbsp; span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; "> &reg; </sup>&nbsp;सफाई की सुविधा, आप डिजाइन क्षमता के संचालन को बहाल कर सकते हैं, अपनी सफाई कम कर सकते हैं। अपनी&nbsp; धार करते समय अपने कार्बन फुटप्रिंट को कम करें; <span style = "box-sizing: border-box; text-सजावट: अंडरलाइन;"> <strong> निचला रेखा </strong></span> </p>।
            <h3> सुविधा </h3>
            <p> <strong> समर्पित सफाई सुविधा </strong>&nbsp;- अपनी बाड़ रेखा के ठीक बाहर </p>
            <p> <strong> कैपिटल कॉस्ट </strong>&nbsp;- नहीं! आप केवल सफाई </p> के लिए भुगतान करते हैं
            <p> <strong> डिज़ाइन कॉन्सेप्ट </strong>&nbsp;- 7 दिनों में समीक्षा के लिए तैयार (ग्राहक जानकारी प्राप्त होने से) </p>
            <p> <strong> विस्तृत और डिज़ाइन डिज़ाइन करें </strong> - 30 दिनों में परमिट के लिए प्रस्तुत करने के लिए तैयार (अनुबंध के निष्पादन से) </p>
            <p> <strong> निर्माण अवधि और nbsp; </strong> - 6 महीने में उपयोग के लिए तैयार (नोटिस से आगे बढ़ने के लिए) / />
            <h3> सफाई लागत </h3>
            <p> <strong> हीट एक्सचेंजर्स&nbsp; /strong> - एक्सचेंजर आकार और amp के आधार पर निश्चित मूल्य; प्रकार </p>
            <P> <strong> पार्ट्स </strong>&nbsp;&ndash; निश्चित मूल्य - टोकरी के आकार के आधार पर </p>
            <h3> संचालन </h3>
            <p> <span style = "color: #1d70b9;"> <strong> CLEANER </strong></span>&nbsp;- हम &rsaquo; 95% क्लीन ड्यूटी, और अगर हम कर सकते हैं &rsquo; इसे साफ करें; आप डॉन &rsquo; टी भुगतान </p>
            <p> <span style = "color: #eb252f;"> <strong> FASTER </strong></span>&nbsp;- हम अपने वॉश पैड पर हाइड्रोबलास्टिंग के रूप में दो बार तेजी से साफ करते हैं </p>
            <p> <span style = "background-color: #ffffff; color: #f79321;"> <strong> SAFER </strong></span>&nbsp;- हम सुनिश्चित करते हैं कि 100% हाइड्रोबलास्टिंग जोखिम समाप्त हो जाए </ p; >
            <p> <span style = "color: #25b574;"> <strong> GREENER </strong></span>&nbsp;- हम पुनरावर्तन करते हैं &rsaquo; हमारे पानी का 95% </p>
            <h3> मूल्य </h3>
            <p> <strong> कम लागत वाली सफाई&nbsp; /strong> - &frac12;&nbsp;की तुलना में लागत; <span style = "box-sizing: border-box; text-सजावट: रेखांकन;"> सफाई की कुल लागत</span>&nbsp;अपने स्वयं के वॉश पैड पर </p>
            <p> <strong> छोटा आउटेज </strong>&nbsp;- अनुसूचित निश्चितता c / w ऐतिहासिक सफाई डेटा </p>
            <p> <strong> बेहतर संचालन क्षमता </strong> </p>
            <Ul>
            <li> महत्वपूर्ण ऊर्जा में कमी - हीट एक्सचेंजर्स, घूर्णन और प्रक्रिया उपकरण नए </li> की तरह काम करते हैं
            <li> हीट एक्सचेंजर्स को अधिक कुशल लोगों के साथ बदलने का विकल्प प्रदान करता है </li>
            <li> कम महंगी प्रक्रिया डिज़ाइन के लिए विकल्प प्रदान करता है </li>
            <li> उत्पादन में सुधार करें </li>
            <li> वैकल्पिक बढ़ी हुई लंबाई (आउटेज के बीच लंबा अंतराल) प्रदान करता है </li>
            </ul>
            <P>&nbsp;</p>
            <p> <strong> लोअर ग्रीनहाउस गैस उत्सर्जन </strong>&nbsp;- जीएचजी और rsquo में महत्वपूर्ण कमी; बेहतर दक्षता के साथ </p>
            <p> <strong> बेहतर पर्यावरण प्रदर्शन </strong>&nbsp;- महत्वपूर्ण रूप से आपके ESG स्कोर में सुधार करता है </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'hi-in',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'ウォッシュパッドを交換してください',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align：center;">提携する理由&nbsp; <span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg; </sup>？</h2>
            <p>精製および石油化学業界は、投資家、株主、規制機関、およびJohn Q. Publicから、<strong> ESGパフォーマンスを改善する</strong>という要求にますます直面しています。</p>
            <p>ウォッシュパッドを&nbsp; <span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; "> &reg; </sup>&nbsp;クリーニング機能。操作を設計容量に戻し、クリーニングを減らすことができますコストを削減し、カーボンフットプリントをすべて削減しながら、&nbsp; <span style = "box-sizing：border-box; text-decoration：underline;"> <strong>収益</strong></span>を改善します。</p>
            <h3>施設</h3>
            <p> <strong>専用の清掃施設</strong>&nbsp;-フェンスラインのすぐ外</p>
            <p> <strong>資本コスト</strong>&nbsp;-いいえ！あなたは掃除の費用だけを支払います</p>
            <p> <strong>設計コンセプト</strong>&nbsp;-7日でレビューの準備が整います（クライアント情報の受信から）</p>
            <p> <strong>設計の詳細&nbsp; </strong>-30日以内に許可を申請する準備ができました（契約の締結から）</p>
            <p> <strong>建設期間&nbsp; </strong> -6か月で使用できるようになります（通知から続行まで）</p>
            <h3>清掃費</h3>
            <p> <strong>熱交換器&nbsp; </strong>-熱交換器のサイズとサイズに基づく固定価格タイプ</p>
            <p> <strong>パーツ</strong>&nbsp;&ndash;固定価格-バスケットサイズに基づく</p>
            <h3>操作</h3>
            <p> <span style = "color：#1d70b9;"> <strong>クリーナー</strong></span>&nbsp;-クリーンデューティの95％までクリーニングします。クリーニングできない場合は、あなたは支払わない</p>
            <p> <span style = "color：#eb252f;"> <strong>高速</strong></span>&nbsp;-独自のウォッシュパッドでのハイドロブラストの2倍の速度でクリーニングします</p>
            <p> <span style = "background-color：#ffffff; color：#f79321;"> <strong> SAFER </strong></span>&nbsp;-ハイドロブラストのリスクを100％排除します</p>
            <p> <span style = "color：#25b574;"> <strong> GREENER </strong></span>&nbsp;-水の95％をリサイクルしています</p>
            <h3>値</h3>
            <p> <strong>クリーニングコストの削減&nbsp; </strong>-&frac12; &nbsp; <spanstyle = "box-sizing：border-box; text-decoration：underline;">クリーニングの総費用</span>&nbsp;自分のウォッシュパッドと比較した費用</p>
            <p> <strong>より短い停止</strong>&nbsp;-スケジュールされた確実性c / w履歴クリーニングデータ</p>
            <p> <strong>運用効率の向上</strong> </p>
            <ul>
            <li>大幅なエネルギー削減-熱交換器、回転およびプロセス機器は新品のように動作します</li>
            <li>熱交換器をより効率的なものに交換するオプションを提供します</li>
            <li>より安価なプロセス設計のオプションを提供します</li>
            <li>生産を改善する</li>
            <li>オプションでランレングスを長くする（停止の間隔を長くする）</li>
            </ul>
            <p>&nbsp; </p>
            <p> <strong>温室効果ガス排出量の削減</strong>&nbsp;-効率の向上によるGHGの大幅な削減</p>
            <p> <strong>環境パフォーマンスの向上</strong>&nbsp; -ESGスコアが大幅に向上します</p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'jp',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'Ganti Pad Basuh Anda',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align: center;"> Mengapa Bermitra dengan &nbsp; <span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup>? </h2>
            <p> Semakin meningkat, industri penyulingan dan petrokimia menghadapi permintaan daripada pelabur, pemegang saham, badan pengawalseliaan dan John Q. Public untuk meningkatkan &nbsp; <strong> prestasi ESG </strong> mereka. </p>
            <p> Dengan mengganti pad pencuci anda dengan &nbsp; <span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup> &nbsp; kemudahan pembersihan, anda boleh mengembalikan operasi kepada reka bentuk kapasiti, mengurangkan pembersihan anda kos, turunkan jejak karbon anda sambil meningkatkan &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> <strong> garis bawah </strong></span> </p>
            <h3> Kemudahan </h3>
            <p> <strong> Kemudahan Pembersihan Khusus </strong> &nbsp; - Tepat di luar garisan pagar anda </p>
            <p> <strong> Kos Modal </strong> &nbsp; - Tidak! Anda hanya membayar untuk pembersihan </p>
            <p> <strong> Konsep Reka Bentuk </strong> &nbsp; - Sedia untuk disemak dalam 7 hari (dari penerimaan maklumat pelanggan) </p>
            <p> <strong> Reka Bentuk Reka Bentuk &nbsp; </strong> - Sedia dihantar untuk izin dalam 30 hari (dari pelaksanaan kontrak) </p>
            <p> <strong> Tempoh Pembinaan &nbsp; </strong> - Sedia untuk digunakan dalam 6 bulan (dari notis untuk meneruskan) </p>
            <h3> Kos Pembersihan </h3>
            <p> <strong> Penukar Haba &nbsp; </strong> - Harga tetap berdasarkan ukuran penukar &amp; taip </p>
            <p> <strong> Bahagian </strong> &nbsp; &ndash; Harga tetap - Berdasarkan saiz bakul </p>
            <h3> Operasi </h3>
            <p> <span style = "color: #1d70b9;"> <strong> CLEANER </strong></span>&nbsp; - Kami membersihkan untuk &rsaquo; 95% dari Clean Duty, dan Jika kami tidak dapat membersihkannya, anda TIDAK &rsquo; T bayar </p>
            <p> <span style = "color: #eb252f;"> <strong> LEBIH CEPAT </strong></span>&nbsp; - Kami membersihkan dua kali lebih cepat daripada hidrob kekal pada pad pencuci anda sendiri </p>
            <p> <span style = "background-color: #ffffff; color: #f79321;"> <strong> SELAMAT </strong></span>&nbsp; - Kami memastikan 100% risiko hidrob kekal dihilangkan </ p >
            <p> <span style = "color: #25b574;"> <strong> HIJAU </strong></span>&nbsp; - Kami mengitar semula &rsaquo; 95% air kami </p>
            <h3> Nilai </h3>
            <p> <strong> Mengurangkan Kos Pembersihan &nbsp; </strong> - &frac12; kosnya berbanding dengan &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> jumlah kos pembersihan</span>&nbsp; pada cuci anda sendiri </p>
            <p> <strong> Pemadaman Lebih pendek </strong> &nbsp; - Kepastian berjadual c / w data pembersihan sejarah </p>
            <p> <strong> Kecekapan Operasi yang Ditingkatkan </strong> </p>
            <ul>
            <li> Pengurangan tenaga yang ketara - Penukar haba, peralatan berputar dan proses beroperasi seperti baru </li>
            <li> Menyediakan pilihan untuk menggantikan penukar haba dengan yang lebih cekap </li>
            <li> Menyediakan pilihan untuk reka bentuk proses yang lebih murah </li>
            <li> Tingkatkan pengeluaran </li>
            <li> Menyediakan pilihan jangka panjang yang meningkat (selang waktu yang lebih lama antara gangguan) </li>
            </ul>
            <p> &nbsp; </p>
            <p> <strong> Lebih rendah Pelepasan Gas Rumah Kaca </strong> &nbsp; - Pengurangan GRK yang ketara dengan peningkatan kecekapan </p>
            <p> <strong> Prestasi Alam Sekitar yang Lebih Baik </strong> &nbsp; - Meningkatkan Skor ESG anda dengan ketara </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'ml',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'Reemplace su almohadilla de lavado',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align: center;"> Por qué asociarse con &nbsp; <span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup>? </h2>
<p> Cada vez más, las industrias de refinación y petroquímica se enfrentan a la demanda de inversores, accionistas, organismos reguladores y John Q. Public para mejorar su &nbsp; <strong> desempeño ESG </strong>. </p>
<p> Reemplazando la almohadilla de lavado con &nbsp; <span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup> &nbsp; instalación de limpieza, puede restaurar la operación a la capacidad de diseño, reducir su limpieza costos, reduzca su huella de carbono mientras mejora su &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> <strong> resultado final </strong> </span>. </p>
<h3> Instalación </h3>
<p> <strong> Instalación de limpieza dedicada </strong> &nbsp;: justo afuera de la línea de la cerca </p>
<p> <strong> Costo de capital </strong> &nbsp; - ¡No! Solo pagas por la limpieza </p>
<p> <strong> Concepto de diseño </strong> &nbsp;: listo para su revisión en 7 días (desde la recepción de la información del cliente) </p>
<p> <strong> Diseño detallado &nbsp; </strong>: listo para solicitar el permiso en 30 días (desde la ejecución del contrato) </p>
<p> <strong> Duración de la construcción &nbsp; </strong>: listo para usar en 6 meses (desde la notificación hasta el final) </p>
<h3> Costos de limpieza </h3>
<p> <strong> Intercambiadores de calor &nbsp; </strong>: precio fijo basado en el tamaño del intercambiador &amp; tipo </p>
<p> <strong> Piezas </strong> &nbsp; &ndash; Precio fijo: según el tamaño de la cesta </p>
<h3> Operaciones </h3>
<p> <span style = "color: #1d70b9;"> <strong> LIMPIADOR </strong> </span> &nbsp; - Limpiamos al 95% del servicio limpio y, si no podemos limpiarlo, usted NO paga </p>
<p> <span style = "color: #eb252f;"> <strong> MÁS RÁPIDO </strong> </span> &nbsp; - Limpiamos el doble de rápido que el hidroblasting en su propia almohadilla de lavado </p>
<p> <span style = "background-color: #ffffff; color: #f79321;"> <strong> MÁS SEGURO </strong> </span> &nbsp; - Nos aseguramos de eliminar el 100% del riesgo de hidroblasting </ p >
<p> <span style = "color: #25b574;"> <strong> MÁS VERDE </strong> </span> &nbsp; - Reciclamos &rsaquo; 95% de nuestra agua </p>
<h3> Valor </h3>
<p> <strong> Costos de limpieza reducidos &nbsp; </strong> - &frac12; el costo en comparación con el &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> costo total de limpieza </span> &nbsp; en su propia almohadilla de lavado </p>
<p> <strong> Interrupciones más breves </strong> &nbsp;: certeza programada con datos de limpieza históricos </p>
<p> <strong> Mejora de la eficiencia operativa </strong> </p>
<ul>
<li> Reducción significativa de energía: los intercambiadores de calor, los equipos rotativos y de proceso funcionan como nuevos </li>
<li> Proporciona la opción de reemplazar los intercambiadores de calor por otros más eficientes </li>
<li> Ofrece la opción de un diseño de proceso menos costoso </li>
<li> Mejorar la producción </li>
<li> Proporciona una mayor duración de ejecución opcional (intervalos más largos entre interrupciones) </li>
</ul>
<p> &nbsp; </p>
<p> <strong> Reducir las emisiones de gases de efecto invernadero </strong> &nbsp; - Reducción significativa de los gases de efecto invernadero con una mayor eficiencia </p>
<p> <strong> Mejor desempeño ambiental </strong> &nbsp;: mejora significativamente sus puntajes ESG </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'mx',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'ਆਪਣੇ ਵਾਸ਼ ਪੈਡ ਨੂੰ ਤਬਦੀਲ ਕਰੋ',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style="text-align: center;"><span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">A</span><span style="font-size: 1.1em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.3em; color: #227cbe;">N</span><span style="font-size: 1.1em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;ਨਾਲ ਸਹਿਭਾਗੀ ਕਿਉਂ ?</h2>
            <p>ਤੇਜ਼ੀ ਨਾਲ, ਰਿਫਾਇਨਿੰਗ ਅਤੇ ਪੈਟਰੋ ਕੈਮੀਕਲ ਉਦਯੋਗਾਂ ਨੂੰ ਨਿਵੇਸ਼ਕਾਂ, ਸ਼ੇਅਰ ਧਾਰਕਾਂ, ਰੈਗੂਲੇਟਰੀ ਸੰਸਥਾਵਾਂ ਅਤੇ ਜੌਨ ਕਿ Q ਪਬਲਿਕ ਦੀ ਆਪਣੀ&nbsp;<strong>ਈਐਸਜੀ ਕਾਰਗੁਜ਼ਾਰੀ</strong>ਵਿੱਚ ਸੁਧਾਰ ਕਰਨ ਦੀ ਮੰਗ ਦਾ ਸਾਹਮਣਾ ਕਰਨਾ ਪੈ ਰਿਹਾ ਹੈ.</p>
            <p>ਆਪਣੇ ਕਪੜੇ ਨੂੰ&nbsp;<span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe;">LEAN</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">A</span><span style="font-size: 0.9em; color: #227cbe;">S</span>&nbsp;<span style="font-size: 1.15em; color: #227cbe;">N</span><span style="font-size: 0.9em; color: #227cbe;">EW</span><sup style="font-size: 1.1em; color: #227cbe;">&reg;</sup>&nbsp;ਸਫਾਈ ਸਹੂਲਤ ਨਾਲ ਤਬਦੀਲ ਕਰਕੇ, ਤੁਸੀਂ ਡਿਜ਼ਾਇਨ ਸਮਰੱਥਾ ਲਈ ਅਪ੍ਰੇਸ਼ਨ ਨੂੰ ਬਹਾਲ ਕਰ ਸਕਦੇ ਹੋ, ਆਪਣੀ ਸਫਾਈ ਦੇ ਖਰਚੇ ਘਟਾ ਸਕਦੇ ਹੋ, ਆਪਣੀ ਕਾਰਬਨ ਫੁੱਟਪ੍ਰਿੰਟ ਨੂੰ ਘੱਟ ਕਰ ਸਕਦੇ ਹੋ, ਜਦੋਂ ਕਿ ਤੁਹਾਡੀ&nbsp;<span style="box-sizing: border-box; text-decoration: underline;"><strong>ਤਲ ਲਾਈਨ</strong></span>ਨੂੰ ਸੁਧਾਰਨਾ ਹੈ.</p>
            <h3>ਸਹੂਲਤ</h3>
            <p><strong>ਸਮਰਪਿਤ ਸਫਾਈ ਸਹੂਲਤ</strong>&nbsp;- ਆਪਣੀ ਵਾੜ ਲਾਈਨ ਦੇ ਬਿਲਕੁਲ ਬਾਹਰ</p>
            <p><strong>ਪੂੰਜੀ ਦੀ ਲਾਗਤ</strong>&nbsp;- ਨਹੀਂ! ਤੁਸੀਂ ਸਿਰਫ ਸਫਾਈ ਲਈ ਭੁਗਤਾਨ ਕਰਦੇ ਹੋ</p>
            <p><strong>ਡਿਜ਼ਾਇਨ ਧਾਰਨਾ</strong>&nbsp;- 7 ਦਿਨਾਂ ਵਿੱਚ ਸਮੀਖਿਆ ਲਈ ਤਿਆਰ (ਕਲਾਇੰਟ ਦੀ ਜਾਣਕਾਰੀ ਪ੍ਰਾਪਤ ਹੋਣ ਤੋਂ)</p>
            <p><strong>ਡਿਜ਼ਾਇਨ ਵੇਰਵਾ&nbsp;</strong>- 30 ਦਿਨਾਂ ਵਿੱਚ ਪਰਮਿਟ ਲਈ ਜਮ੍ਹਾ ਕਰਨ ਲਈ ਤਿਆਰ (ਇਕਰਾਰਨਾਮੇ ਤੋਂ ਬਾਅਦ)</p>
            <p><strong>ਨਿਰਮਾਣ ਅਵਧੀ&nbsp;</strong>- 6 ਮਹੀਨਿਆਂ ਵਿੱਚ ਵਰਤਣ ਲਈ ਤਿਆਰ (ਨੋਟਿਸ ਤੋਂ ਅੱਗੇ ਤੱਕ)</p>
            <h3>ਸਫਾਈ ਦੇ ਖਰਚੇ</h3>
            <p><strong>ਹੀਟ ਐਕਸਚੇਂਜਰ&nbsp;</strong>- ਐਕਸਚੇਂਜਰ ਦੇ ਆਕਾਰ ਅਤੇ ਕਿਸਮ ਦੇ ਅਧਾਰ ਤੇ ਸਥਿਰ ਕੀਮਤ</p>
            <p><strong>ਅੰਗ</strong>&nbsp;&ndash; ਸਥਿਰ ਕੀਮਤ - ਟੋਕਰੀ ਦੇ ਆਕਾਰ ਦੇ ਅਧਾਰ ਤੇ</p>
            <h3>ਸੰਚਾਲਨ</h3>
            <p><span style="color: #1d70b9;"><strong>ਕਲੀਨਰ</strong></span>&nbsp;- ਅਸੀਂ Clean 95% ਕਲੀਨ ਡਿutyਟੀ ਲਈ ਸਾਫ਼ ਕਰਦੇ ਹਾਂ, ਅਤੇ ਜੇ ਅਸੀਂ ਇਸ ਨੂੰ ਸਾਫ ਨਹੀਂ ਕਰ ਸਕਦੇ, ਤੁਸੀਂ ਭੁਗਤਾਨ ਨਹੀਂ ਕਰਦੇ.</p>
            <p><span style="color: #eb252f;"><strong>ਤੇਜ਼</strong></span>&nbsp;- ਅਸੀਂ ਤੁਹਾਡੇ ਆਪਣੇ ਵਾੱਸ਼ ਪੈਡ \'ਤੇ ਹਾਈਡ੍ਰੋਬਲਾਸਟਿੰਗ ਨਾਲੋਂ ਦੋ ਗੁਣਾ ਤੇਜ਼ੀ ਨਾਲ ਸਾਫ਼ ਕਰਦੇ ਹਾਂ</p>
            <p><span style="background-color: #ffffff; color: #f79321;"><strong>ਸੇਫ਼ਰ</strong></span>&nbsp;- ਅਸੀਂ ਪੱਕਾ ਕਰਦੇ ਹਾਂ ਕਿ 100% ਹਾਈਡ੍ਰੋਬਲਾਸਟਿੰਗ ਜੋਖਮ ਖ਼ਤਮ ਹੋ ਗਿਆ ਹੈ</p>
            <p><span style="color: #25b574;"><strong>ਗ੍ਰੇਨਰ</strong></span>&nbsp;- ਅਸੀਂ ਆਪਣੇ ਪਾਣੀ ਦੇ ›95% ਰੀਸਾਈਕਲ ਕਰਦੇ ਹਾਂ</p>
            <h3>ਮੁੱਲ</h3>
            <p><strong>ਘਟਾਏ ਸਫਾਈ ਦੇ ਖਰਚੇ&nbsp;</strong>- &frac12; ਤੁਹਾਡੇ ਆਪਣੇ ਵਾੱਸ਼ ਪੈਡ \'ਤੇ ਸਫਾਈ ਦੀ ਕੁਲ ਕੀਮਤ ਦੇ ਮੁਕਾਬਲੇ</p>
            <p><strong>ਛੋਟੀ ਜਿਹੀ ਰਕਮ</strong>&nbsp;- ਤਹਿ ਕੀਤੀ ਨਿਸ਼ਚਤਤਾ c / w ਇਤਿਹਾਸਕ ਸਫਾਈ ਡਾਟਾ</p>
            <p><strong>ਕਾਰਜਸ਼ੀਲ ਕੁਸ਼ਲਤਾ ਵਿੱਚ ਸੁਧਾਰ</strong></p>
            <ul>
            <li>ਮਹੱਤਵਪੂਰਣ energyਰਜਾ ਕਮੀ - ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ, ਘੁੰਮਣ ਅਤੇ ਪ੍ਰਕਿਰਿਆ ਦੇ ਉਪਕਰਣ ਨਵੇਂ ਵਾਂਗ ਕੰਮ ਕਰਦੇ ਹਨ</li>
            <li>ਹੀਟ ਐਕਸਚੇਂਜਰਾਂ ਨੂੰ ਵਧੇਰੇ ਕੁਸ਼ਲ ਲੋਕਾਂ ਨਾਲ ਤਬਦੀਲ ਕਰਨ ਲਈ ਵਿਕਲਪ ਪ੍ਰਦਾਨ ਕਰਦਾ ਹੈ</li>
            <li>ਘੱਟ ਮਹਿੰਗੀ ਪ੍ਰਕਿਰਿਆ ਡਿਜ਼ਾਈਨ ਲਈ ਵਿਕਲਪ ਪ੍ਰਦਾਨ ਕਰਦਾ ਹੈ</li>
            <li>ਉਤਪਾਦਨ ਵਿੱਚ ਸੁਧਾਰ ਕਰੋ</li>
            <li>ਵਿਕਲਪਿਕ ਰਨ-ਲੰਬਾਈ (ਆ outਟੇਜ ਦੇ ਵਿਚਕਾਰ ਲੰਬੇ ਅੰਤਰਾਲ) ਪ੍ਰਦਾਨ ਕਰਦਾ ਹੈ</li>
            </ul>
            <p>&nbsp;</p>
            <p><strong>ਲੋਅਰ ਗ੍ਰੀਨਹਾਉਸ ਗੈਸ ਨਿਕਾਸ</strong>&nbsp;- ਸੁਧਾਰੀ ਕੁਸ਼ਲਤਾ ਨਾਲ ਜੀ ਐਚ ਜੀ ਦੀ ਮਹੱਤਵਪੂਰਣ ਕਮੀ</p>
            <p><strong>ਬਿਹਤਰ ਵਾਤਾਵਰਣ ਦੀ ਕਾਰਗੁਜ਼ਾਰੀ</strong>&nbsp;- ਤੁਹਾਡੇ ESG ਸਕੋਰ ਨੂੰ ਮਹੱਤਵਪੂਰਨ improvesੰਗ ਨਾਲ ਸੁਧਾਰਦਾ ਹੈ</p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'pa-pk',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'Substitua sua almofada de lavagem',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align: center;"> Por que fazer parceria com &nbsp; <span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup>? </h2>
            <p> Cada vez mais, as indústrias de refino e petroquímica enfrentam a demanda de investidores, acionistas, órgãos reguladores e John Q. Public para melhorar seu &nbsp; <strong> desempenho ESG </strong>. </p>
            <p> Substituindo o seu pano de limpeza por um &nbsp; <span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup> &nbsp; instalação de limpeza, você pode restaurar a operação para a capacidade projetada, reduzir sua limpeza custos, reduza sua pegada de carbono enquanto melhora seu &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> <strong> resultados </strong> </span>. </p>
            <h3> Instalação </h3>
            <p> <strong> Instalação de limpeza dedicada </strong> &nbsp; - Fora da linha da cerca </p>
            <p> <strong> Custo de capital </strong> &nbsp; - Não! Você só paga pela limpeza </p>
            <p> <strong> Conceito de design </strong> &nbsp; - Pronto para revisão em 7 dias (a partir do recebimento das informações do cliente) </p>
            <p> <strong> Detalhamento do projeto &nbsp; </strong> - Pronto para enviar para autorização em 30 dias (a partir da execução do contrato) </p>
            <p> <strong> Duração da construção &nbsp; </strong> - Pronto para uso em 6 meses (a partir da notificação para prosseguir) </p>
            <h3> Custos de limpeza </h3>
            <p> <strong> Trocadores de calor &nbsp; </strong> - Preço fixo com base no tamanho do trocador &amp; tipo </p>
            <p> <strong> Peças </strong> &nbsp; &ndash; Preço fixo - com base no tamanho da cesta </p>
            <h3> Operações </h3>
            <p> <span style = "color: #1d70b9;"> <strong> CLEANER </strong> </span> &nbsp; - Limpamos até &rsaquo; 95% do trabalho limpo e, se não pudermos limpar, você NÃO paga </p>
            <p> <span style = "color: #eb252f;"> <strong> MAIS RÁPIDO </strong> </span> &nbsp; - Nós limpamos duas vezes mais rápido do que hidrojateamento em seu próprio pano de lavagem </p>
            <p> <span style = "background-color: #ffffff; color: #f79321;"> <strong> MAIS SEGURO </strong> </span> &nbsp; - Garantimos que 100% do risco de hidrojateamento seja eliminado </ p >
            <p> <span style = "color: #25b574;"> <strong> MAIS VERDE </strong> </span> &nbsp; - Reciclamos &rsaquo; 95% da nossa água </p>
            <h3> Valor </h3>
            <p> <strong> Custos de limpeza reduzidos &nbsp; </strong> - &frac12; o custo em comparação com o &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> custo total de limpeza </span> &nbsp; em seu próprio pano de lavagem </p>
            <p> <strong> Interrupções mais curtas </strong> &nbsp; - Certeza programada com dados históricos de limpeza </p>
            <p> <strong> Eficiência operacional aprimorada </strong> </p>
            <ul>
            <li> Redução significativa de energia - trocadores de calor, equipamentos rotativos e de processo operam como novos </li>
            <li> Oferece opção para substituir trocadores de calor por outros mais eficientes </li>
            <li> Oferece opção para design de processo menos caro </li>
            <li> Melhore a produção </li>
            <li> Fornece maiores durações opcionais (intervalos mais longos entre interrupções) </li>
            </ul>
            <p> &nbsp; </p>
            <p> <strong> Menor emissão de gases de efeito estufa </strong> &nbsp; - redução significativa de GEE com maior eficiência </p>
            <p> <strong> Melhor desempenho ambiental </strong> &nbsp; - melhora significativamente suas pontuações ESG </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'pt-br',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'Замените подушку для мытья посуды',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align: center;"> Зачем сотрудничать с &nbsp; <span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup>? </h2>
            <p> Нефтеперерабатывающая и нефтехимическая отрасли все чаще сталкиваются с требованиями инвесторов, акционеров, регулирующих органов и компании John Q. Public улучшить свои &nbsp; <strong> показатели ESG </strong>. </p>
            <p> Заменив губку для мытья посуды на &nbsp; <span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup> &nbsp; средство очистки, вы можете восстановить работу до проектной мощности, сократить затраты на очистку затрат, уменьшите свой углеродный след, одновременно улучшив &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> <strong> нижняя строка </strong> </span>. </p>
            <h3> Объект </h3>
            <p> <strong> Специальное предприятие по уборке </strong> &nbsp; - сразу за линией забора </p>
            <p> <strong> Капитальные затраты </strong> &nbsp; - Нет! Вы платите только за уборку </p>
            <p> <strong> Концепция дизайна </strong> &nbsp; - Готова к рассмотрению через 7 дней (с момента получения информации о клиенте) </p>
            <p> <strong> Детальный проект &nbsp; </strong> - готов к выдаче разрешения в течение 30 дней (с момента заключения контракта) </p>
            <p> <strong> Срок строительства &nbsp; </strong> - готов к использованию через 6 месяцев (с момента уведомления до продолжения) </p>
            <h3> Стоимость уборки </h3>
            <p> <strong> Теплообменники &nbsp; </strong> - фиксированная цена в зависимости от размера и размера теплообменника. тип </p>
            <p> <strong> Детали </strong> &nbsp; &ndash; Фиксированная цена - в зависимости от размера корзины </p>
            <h3> Операции </h3>
            <p> <span style = "color: #1d70b9;"> <strong> CLEANER </strong> </span> &nbsp; - Мы очищаем до &rsaquo; 95% чистоты, и если мы не можем ее очистить, вы НЕ платите </p>
            <p> <span style = "color: #eb252f;"> <strong> БЫСТРЕЕ </strong> </span> &nbsp; - мы очищаем в два раза быстрее, чем гидроструйная очистка на вашей подушке для мытья посуды </p>
            <p> <span style = "background-color: #ffffff; color: #f79321;"> <strong> БЕЗОПАСНО </strong> </span> &nbsp; - Мы обеспечиваем 100% -ное устранение риска гидроструйной очистки </ p >
            <p> <span style = "color: #25b574;"> <strong> ЗЕЛЕНЫЙ </strong> </span> &nbsp; - Мы перерабатываем &rsaquo; 95% нашей воды </p>
            <h3> Значение </h3>
            <p> <strong> Снижение затрат на уборку &nbsp; </strong> - &frac12; стоимость по сравнению с &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> общей стоимостью уборки </span> &nbsp; на вашей подушке для мытья посуды </p>
            <p> <strong> Более короткие простои </strong> &nbsp; - Запланированная достоверность с историческими данными очистки </p>
            <p> <strong> Повышение операционной эффективности </strong> </p>
            <ul>
            <li> Значительное снижение потребления энергии - теплообменники, вращающееся и технологическое оборудование работают как новые. </li>
            <li> Возможность замены теплообменников на более эффективные. </li>
            <li> Предлагает вариант менее затратного процесса разработки. </li>
            <li> Улучшение производства </li>
            <li> Предоставляет необязательные увеличенные интервалы времени (более длинные интервалы между отключениями). </li>
            </ul>
            <p> &nbsp; </p>
            <p> <strong> Снижение выбросов парниковых газов </strong> &nbsp; - Значительное сокращение выбросов парниковых газов при повышении эффективности </p>
            <p> <strong> Улучшение экологических показателей </strong> &nbsp; - значительно улучшает ваши показатели ESG </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'ru',
        ]);

        DB::table('services')->insert([
            'serviceid' => '44444444',
            'title' => 'เปลี่ยนแผ่นซักของคุณ',
            'image_landing_1' => 'assets/img/services/offsite-facility-drawing.jpg',
            'image_landing_2' => 'assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928',
            'embed' => '<h2 style = "text-align: center;"> ทำไมต้องเป็นพันธมิตรกับ &nbsp; <span style="font-size: 1.3em; color: #227cbe;">C</span><span style="font-size: 1.1em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">A</span><span style =" font-size: 1.1em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.3em; color: #227cbe; ">N</span><span style =" font-size: 1.1em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup>? </h2>
            <p> อุตสาหกรรมการกลั่นและปิโตรเคมีจำนวนมากขึ้นต้องเผชิญกับความต้องการจากนักลงทุนผู้ถือหุ้นหน่วยงานกำกับดูแลและ John Q. Public เพื่อปรับปรุง &nbsp; <strong> ประสิทธิภาพ ESG </strong> </p>
            <p> โดยการเปลี่ยนแผ่นซักผ้าของคุณด้วย &nbsp; <span style="font-size: 1.15em; color: #227cbe;">C</span><span style="font-size: 0.9em; color: #227cbe; ">LEAN</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">A</span><span style =" font-size: 0.9em; color: #227cbe; ">S</span>&nbsp;<span style =" font-size: 1.15em; color: #227cbe; ">N</span><span style =" font-size: 0.9em; color: #227cbe; ">EW</span><sup style =" font-size: 1.1em; color: #227cbe; ">&reg;</sup> &nbsp; สิ่งอำนวยความสะดวกในการทำความสะอาดคุณสามารถเรียกคืนการดำเนินการเพื่อออกแบบความสามารถลดการทำความสะอาดของคุณ ลดค่าใช้จ่ายลดคาร์บอนฟุตพรินต์ของคุณทั้งหมดในขณะที่ปรับปรุง &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> <strong> ผลกำไร </strong> </span> </p>
            <h3> สิ่งอำนวยความสะดวก </h3>
            <p> <strong> สถานที่ทำความสะอาดโดยเฉพาะ </strong> - อยู่นอกแนวรั้วของคุณ </p>
            <p> <strong> ต้นทุนทุน </strong> - ไม่! คุณจ่ายเฉพาะค่าทำความสะอาดเท่านั้น </p>
            <p> <strong> แนวคิดการออกแบบ </strong> &nbsp; - พร้อมสำหรับการตรวจสอบใน 7 วัน (จากการรับข้อมูลลูกค้า) </p>
            <p> <strong> รายละเอียดการออกแบบ &nbsp; </strong> - พร้อมที่จะส่งเพื่อขอใบอนุญาตใน 30 วัน (นับจากการทำสัญญา) </p>
            <p> <strong> ระยะเวลาก่อสร้าง </strong> - พร้อมใช้งานใน 6 เดือน (นับจากแจ้งให้ทราบเพื่อดำเนินการต่อ) </p>
            <h3> ค่าทำความสะอาด </h3>
            <p> <strong> เครื่องแลกเปลี่ยนความร้อน &nbsp; </strong> - ราคาคงที่ตามขนาดตัวแลกเปลี่ยน &amp; ประเภท </p>
            <p> <strong> อะไหล่ </strong> &nbsp; &ndash; ราคาคงที่ - ขึ้นอยู่กับขนาดตะกร้า </p>
            <h3> การดำเนินการ </h3>
            <p> <span style = "color: #1d70b9;"> <strong> น้ำยาทำความสะอาด </strong> </span> &nbsp; - เราทำความสะอาดเพื่อ &rsaquo; 95% ของ Clean Duty และหากเราไม่สามารถทำความสะอาดได้ คุณไม่ &rsquo; T จ่าย </p>
            <p> <span style = "color: #eb252f;"> <strong> เร็วกว่า </strong> </span> &nbsp; - เราทำความสะอาดเร็วกว่าการเป่าด้วยพลังน้ำเป็นสองเท่าบนแผ่นซักของคุณเอง </p>
            <p> <span style = "background-color: #ffffff; color: #f79321;"> <strong> SAFER </strong> </span> &nbsp; - เรามั่นใจว่ากำจัดความเสี่ยงจากการเป่าด้วยน้ำได้ 100% </ p >
            <p> <span style = "color: #25b574;"> <strong> GREENER </strong> </span> &nbsp; - เรารีไซเคิล &rsaquo; 95% ของน้ำของเรา </p>
            <h3> ค่า </h3>
            <p> <strong> ลดค่าใช้จ่ายในการทำความสะอาด &​​nbsp; </strong> - &frac12; ค่าใช้จ่ายเมื่อเทียบกับ &nbsp; <span style = "box-sizing: border-box; text-decoration: underline;"> ค่าใช้จ่ายทั้งหมดในการทำความสะอาด </span> &nbsp; บนแผ่นซักของคุณเอง </p>
            <p> <strong> การหยุดทำงานที่สั้นกว่า </strong> &nbsp; - ความแน่นอนตามกำหนดเวลา c / w ข้อมูลการทำความสะอาดในอดีต </p>
            <p> <strong> ปรับปรุงประสิทธิภาพการทำงาน </strong> </p>
            <ul>
            <li> การลดพลังงานอย่างมีนัยสำคัญ - อุปกรณ์แลกเปลี่ยนความร้อนอุปกรณ์หมุนและกระบวนการทำงานเหมือนใหม่ </li>
            <li> มีตัวเลือกในการเปลี่ยนอุปกรณ์แลกเปลี่ยนความร้อนด้วยตัวแลกเปลี่ยนที่มีประสิทธิภาพมากขึ้น </li>
            <li> มีตัวเลือกสำหรับการออกแบบกระบวนการที่ราคาไม่แพง </li>
            <li> ปรับปรุงการผลิต </li>
            <li> จัดเตรียมระยะเวลาการทำงานที่เพิ่มขึ้นเป็นทางเลือก (ช่วงเวลาที่ยาวขึ้นระหว่างไฟดับ) </li>
            </ul>
            <p> &nbsp; </p>
            <p> <strong> การปล่อยก๊าซเรือนกระจกที่ลดลง </strong> - การลดก๊าซเรือนกระจกลงอย่างมีนัยสำคัญด้วยประสิทธิภาพที่ดีขึ้น </p>
            <p> <strong> ประสิทธิภาพด้านสิ่งแวดล้อมที่ดีขึ้น </strong> &nbsp; - ปรับปรุงคะแนน ESG ของคุณอย่างมีนัยสำคัญ </p>',
            'image_article' => 'assets/img/ClientMontage-min.gif',
            'locale' => 'th',
        ]);
    }
}
