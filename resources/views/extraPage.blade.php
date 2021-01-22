@extends('app')

@section('title')
<title>Heat Exchanger Cleaning Services - Clean As New® (China)</title>
<meta content="{{ $extraPage->og_locale != null ? $extraPage->og_locale : ''}}" property="og:locale">
<meta content="{{ $extraPage->og_site_name != null ? $extraPage->og_site_name : ''}}" property="og:site_name" />
<meta content="{{ $extraPage->og_type != null ? $extraPage->og_type : ''}}" property="og:type">
<meta content="{{ $extraPage->og_url != null ? $extraPage->og_url : ''}}" property="og:url">
<meta content="{{ $extraPage->og_title != null ? $extraPage->og_title : ''}}" property="og:title">
<meta content="{{ $extraPage->og_description != null ? $extraPage->og_description : ''}}" property="og:description">
<meta content="{{ $extraPage->og_image != null ? $extraPage->og_image : ''}}" property="og:image" />
<meta content="{{ $extraPage->og_image_width != null ? $extraPage->og_image_width : ''}}" property="og:image:width" />
<meta content="{{ $extraPage->og_image_height != null ? $extraPage->og_image_height : ''}}" property="og:image:height" />
@endsection

@section('content')
@include('layout.header', [$menuSetting, $extraPages])

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
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection