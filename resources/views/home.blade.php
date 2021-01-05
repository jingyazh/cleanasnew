@extends('app')

@section('title')
<title>{{ $siteSetting->home_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->home_meta_description }}">
@endsection

@section('content')
@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
<section>
    <div id="carouselExampleIndicators" class="carousel slide img-fluid lazyload" data-ride="carousel" data-interval="5000">
        <!-- Indicators -->

        @if($posts)
        <ol class="carousel-indicators">
            @foreach($posts as $key => $post)
            <li data-target="#myCarousel" data-slide-to="0" class="{{ $key == 0 ? 'active' : ''}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($posts as $key => $post)
            <div class="carousel-item {{ $key == 0 ? 'active' : ''}}"> <img src="{{ $post->image_landing }}" data-src="{{ $post->image_landing }}" class="img-fluid lazyload" alt="Clean As New®, Baytown Texas." />
                <div class="carousel-caption" style="position:absolute; z-index:10001">
                    <div class="hbuttons">
                        <div class="hcontainer"> <a href="{{ route('postview', $post->id) }}" class="hbtn hbtn-1">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                                </svg>
                                {{ $post->title }} </a> </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active"> <img src="assets/img/1px.png" data-src="assets/img/2020-clean-as-new-facility-baytown.jpg" class="img-fluid lazyload" alt="Clean As New®, Baytown Texas." />
                <div class="carousel-caption" style="position:absolute; z-index:10001">
                    <div class="hbuttons">
                        <div class="hcontainer"> <a href="our-intro" class="hbtn hbtn-1">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                                </svg>
                                {{__("Watch Our Intro Video")}} </a> </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> <img src="assets/img/1px.png" data-src="assets/img/2020-petrochemical-plant-oil-refinery.jpg" class="img-fluid lazyload" alt="Petroleum refining - Refinery plant and facilities." />
                <div class="carousel-caption">
                    <div class="hbuttons">
                        <div class="hcontainer"> <a href="posts/book-your-free-measured-cleaning-trial-today" class="hbtn hbtn-1">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                                </svg>
                                <span>{{__("Book Your Free Measured Cleaning Trial")}}</span> </a> </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/2020-cleaning-parts.gif?v=20201027" class="img-fluid lazyload" alt="Washpad Hydroblasting VS. Clean As New®." />
                <div class="carousel-caption">
                    <div class="hbuttons">
                        <div class="hcontainer"> <a href="posts/washpad-hydroblasting-vs-cleanasnew" class="hbtn hbtn-1">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                                </svg>
                                <span>{{__("Comparing An Apple To An Apple")}}</span> </a> </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> <img src="assets/img/1px.png" data-src="assets/img/2020-heat-exchanger-cleaning.jpg" class="img-fluid lazyload" alt="Improve Your ESG Performance with Clean As New®.">
                <div class="carousel-caption">
                    <div class="hbuttons">
                        <div class="hcontainer"> <a href="posts/improve-your-esg-score" class="hbtn hbtn-1">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                                </svg>
                                <span>{{__("Improve Your ESG Score")}}</span> </a> </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item"> <img src="assets/img/1px.png" data-src="assets/img/2020-clean-u-tube-heat-exchangers.gif" class="img-fluid lazyload" alt="The Highest Performing Oil & Gas Refineries!">
                <div class="carousel-caption">
                    <div class="hbuttons">
                        <div class="hcontainer"> <a href="posts/the-highest-performing-refineries" class="hbtn hbtn-1">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                                </svg>
                                <span>{{__("The Highest Performing Refineries")}}</span> </a> </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span></a>
    </div>
</section>
<div style="background:#fff; width:100%; position:relative;z-index:100;">
    <div class="homecontainer">
        <div class="row">
            <div class="col-3">
                <div class="text-center counter">
                    <p><b>{{__('Gallons of water saved for clients')}}</b> <br>
                        <span id="loader"> <span class="loader"></span> <span class="bgloader"></span> </span> <span id="odometer" class="odometer"></span></p>
                    {{__('since September 2019')}}
                </div>
            </div>
            <div class="col-7">
                @if(isset($siteSetting) && $siteSetting != null)
                {!! $siteSetting->home_embed !!}
                @else
                <p> <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is recognized for providing the refining and petrochemical industries with “Green Tech” solutions that help them operate more efficiently, reduce their environmental footprint, all while improving the bottom line. </p>
                <p> We GUARANTEE to clean your exchangers to &#8250;95% of original performance - IF WE CAN'T CLEAN IT - YOU DON'T PAY! </p>
                <p> <strong>The value to you = improved schedule, longer maintenance intervals, improved production and reduced energy consumption.</strong></p>
                @endif

            </div>
            <div class="col-2 esg"> <a href="esg"> <img src="{{ (isset($siteSetting) && $siteSetting != null) ? $siteSetting->home_esg_image : 'assets/img/1px.png'}}" data-src="{{ (isset($siteSetting) && $siteSetting != null) ? $siteSetting->home_esg_image : 'assets/img/esg-logo2.png'}}" title="Environmental, Social, and Governance - Sustainability." class="img-fluid lazyload" alt="Environmental, Social, and Governance - Sustainability." /></a><a href="esg"><img src="assets/img/1px.png" data-src="assets/img/chwmeg-logo.png" class="img-fluid lazyload" alt="Helping Organizations Responsibly Manage Waste & Recyclables." title="Helping Organizations Responsibly Manage Waste & Recyclables." /></a> </div>
        </div>
    </div>
    @include('layout.footer', (isset($siteSetting) && $siteSetting != null) ? $siteSetting : ['siteSetting' => null])
</div>

@endsection

@section('page-script')
<script>
    var giftofspeed2 = document.createElement('link');
    giftofspeed2.rel = 'stylesheet';
    giftofspeed2.href = 'https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap';
    giftofspeed2.type = 'text/css';
    var godefer2 = document.getElementsByTagName('link')[0];
    godefer2.parentNode.insertBefore(giftofspeed2, godefer2);
    var giftofspeed3 = document.createElement('link');
    giftofspeed3.rel = 'stylesheet';
    giftofspeed3.href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
    giftofspeed3.type = 'text/css';
    var godefer3 = document.getElementsByTagName('link')[0];
    godefer3.parentNode.insertBefore(giftofspeed3, godefer3);
</script>
<script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="https://cleanasnew.com/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script>
<script>
    $('.dropdown').dropdown();
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@id": "https://cleanasnew.com/#webpage",
        "@type": "WebPage",
        "url": "https://cleanasnew.com/",
        "name": "Clean As New®"
    }
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@id": " https://cleanasnew.com/#organization",
        "@type": "Organization",
        "name": "Clean As New®",
        "url": " https://cleanasnew.com/",
        "logo": " https://cleanasnew.com/imgs/CLean-As-New-logo600.png",
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": " +1.832-271-2666 ",
            "contactType": "customer support",
            "contactOption": "TollFree",
            "areaServed": "Worldwide",
            "availableLanguage": ["English"]
        }],
        "sameAs": [" https://www.youtube.com/channel/UCcFZy-VYRn5Bl2urjVl5ZTA", " https://www.facebook.com/cangc01", " https://twitter.com/cleanasnew01", " https://www.linkedin.com/company/28654089 "]
    }
</script>
<script src="assets/js/odometer.js"></script>
<script>
    var odometer = document.getElementById("odometer");
    var loader = document.getElementById("loader");
    var Num;
    window.addEventListener("load", function() {
        "use strict";
        loader.style.display = 'block';
        // var val = localStorage.getItem("Odometer");
        var val = "{{ $siteSetting->home_discounter }}";
        if (val && parseInt(val) !== NaN) {
            Num = parseInt(val);
        } else {

            //  current_date will return us today's time 
            var current_date = new Date().getTime();

            // prev_date will return us given date's time
            var prev_date = new Date("May 1, 2020 00:00:01").getTime();

            // Days will return us the difference of prev_date to current_date in days
            //var Days = Math.round((current_date - prev_date) / (1000 * 3600 * 24)) * 172800;
            var Gallons = Math.round((current_date - prev_date) / (1000)) * 13.888; // gallons per second

            // saving these values to the local storage of the web	
            // it will be better if you store it in database that you've own so that these values will remain the same for everyone
            localStorage.setItem("Odometer", Gallons);

            Num = Gallons;
        }
        if (parseInt(Num) !== NaN) {

            setInterval(function() {
                Num = parseInt(Num) + 2;
                odometer.innerHTML = Num;
                localStorage.setItem("Odometer", Num);
                loader.style.display = 'none';
            }, 2000); // increase every two second
        }
    });
</script>
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection