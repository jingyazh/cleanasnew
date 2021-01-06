@extends('app')

@section('title')
<title>Heat Exchanger Cleaning Services - Clean As New® (China)</title>
@endsection

@section('content')
@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])

<main>
    <div class="jumbotron text-left">
        <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
            <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="{{ route('landing') }}" itemprop="item"> <span itemprop="name">{{ __('Home') }}</span></a>
                    <meta itemprop="position" content="1">
                </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name">{{ __($extraPage->title ) }}</span>
                    <meta itemprop="position" content="2">
                </span> </p>
        </div>
    </div>
    <div class="album bg-white">
        <div class="container">
            <div class="row">
                <div class="col-2">&nbsp;</div>
                {!! $extraPage->embed !!}
            </div>
        </div>
    </div>
</main>

@include('layout.footer', (isset($siteSetting) && $siteSetting != null) ? $siteSetting : ['siteSetting' => null])


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
        var val = localStorage.getItem("Odometer");
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