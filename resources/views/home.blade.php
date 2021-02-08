@extends('app')

@section('title')
<title>{{ $siteSetting->home_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->home_meta_description }}">
<meta content="{{ $og->og_locale != null ? str_replace('-', '_', $og->og_locale) : ''}}" property="og:locale">
<meta content="{{ $og->og_site_name != null ? $og->og_site_name : ''}}" property="og:site_name" />
<meta content="{{ $og->og_type != null ? $og->og_type : ''}}" property="og:type">
<meta content="{{ $og->og_url != null ? $og->og_url : ''}}" property="og:url">
<meta content="{{ $og->og_title != null ? $og->og_title : ''}}" property="og:title">
<meta content="{{ $og->og_description != null ? $og->og_description : ''}}" property="og:description">
<meta content="{{ $og->og_image != null ? $og->og_image : ''}}" property="og:image" />
<meta content="{{ $og->og_image_width != null ? $og->og_image_width : ''}}" property="og:image:width" />
<meta content="{{ $og->og_image_height != null ? $og->og_image_height : ''}}" property="og:image:height" />
@endsection

@section('content')
@include('layout.header', [$menuSetting, $extraPages])
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
            <div class="carousel-item {{ $key == 0 ? 'active' : ''}}"> <img src="{{ $post->image_landing }}" data-src="{{ $post->image_landing }}" class="img-fluid lazyload" alt="{{ $post->title }}" />
                <div class="carousel-caption" style="position:absolute; z-index:10001">
                    <div class="hbuttons">
                        <div class="hcontainer"> <a href="{{ route('postview', $post->postid) }}" class="hbtn hbtn-1">
                                <svg>
                                    <rect x="0" y="0" fill="none" width="100%" height="100%" />
                                </svg>
                                {{ $post->title }} </a> </div>
                    </div>
                </div>
            </div>
            @endforeach
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
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection