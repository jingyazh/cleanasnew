@extends('app')

@section('title')
<title>{{ isset($siteSetting) ? $siteSetting->comparison_meta_title : 'How We Compare [Cleaning Cost, Heat Exchanger Performance]' }}</title>
<meta name="description" content="{{ isset($siteSetting) ? $siteSetting->comparison_meta_description : 'Our combination of Tech Sonic ultrasonic technology and hydroblasting cleans compact exchanger designs on the shell side, where hydroblasting alone fails.' }}">
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
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p>
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item">
            <span itemprop="name">{{__('Home')}}</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250;
        <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">{{__('How We Compare')}}</span>
          <meta itemprop="position" content="2">
        </span>
      </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="front-picture-apple clearfix" id="apple" style="background : url({{ isset($siteSetting) ? $siteSetting->comparison_image : 'assets/img/apple-to-apple.jpg'}}) no-repeat">
          @if(isset($siteSetting) && $siteSetting != null)
          {!! $siteSetting->comparison_txt !!}
          @else
          <h2 class="padding30">Compare<br>
            <span class="red">Apples</span> to <span class="greenyellow">Apples</span></h2>
          @endif
        </div>
        @if(isset($comparisons) && $comparisons != null)
        @foreach($comparisons as $key => $comparison)
        <div class="columns">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="/comparisons/{{$comparison->id}}"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="{{ $comparison->image_landing_1 }}" class="img-fluid desktopNone lazyload" alt="Understanding the Cleaning Cost." /><img src="https://cleanasnew.com/assets/img/1px.png" data-src="{{ $comparison->image_landing_2 }}" class="lazyload img-fluid mobileNone" alt="Understanding the Cleaning Cost." /></a>
            <div class="card-body">
              <p class="text-center"><a href="/comparisons/{{$comparison->id}}">{{__($comparison->title)}}</a></p>
            </div>
          </div>
        </div>
        @endforeach
        @else
        <div class="columns">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="/comparisons/cleaning-cost"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison/wash-pad-cost1.jpg?v=20200927" class="img-fluid desktopNone lazyload" alt="Understanding the Cleaning Cost." /><img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/comparison/wash-pad-cost.jpg?v=20200928" class="lazyload img-fluid mobileNone" alt="Understanding the Cleaning Cost." /></a>
            <div class="card-body">
              <p class="text-center"><a href="/comparisons/cleaning-cost">{{__('Cleaning Cost')}}</a></p>
            </div>
          </div>
        </div>
        <div class="columns">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="comparisons/heat-exchanger-performance"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison/clean-as-new-employee-at-facility1.jpg?v=20200927" class="img-fluid desktopNone lazyload" alt="Clean As New® employee lowering heat exchanger into Tech Sonic bath." /> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/comparison/clean-as-new-employee-at-facility.jpg?v=20200928" class="lazyload img-fluid mobileNone" alt="Clean As New® Heat Exchanger Performance Monitoring." /></a>
            <div class="card-body">
              <p class="text-center"><a href="/comparisons/heat-exchanger-performance">{{__('Heat Exchanger Performance')}}</a></p>
            </div>
          </div>
        </div>
        <div class="columns">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="/comparisons/parts-cleaning"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison/parts-cleaning1.jpg" class="desktopNone img-fluid lazyload" alt="Cleaned rotating equipment." /><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison/parts-cleaning.jpg" class="lazyload img-fluid mobileNone" alt="Cleaned rotating equipment by Clean As New®." /></a>
            <div class="card-body">
              <p class="text-center"><a href="/comparisons/parts-cleaning">{{__('Parts Cleaning')}}</a></p>
            </div>
          </div>
        </div>
        <div class="columns">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="/comparisons/facility"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison/clean-as-new-facility-drawing1.jpg?v=20200927" class="desktopNone img-fluid lazyload" alt="Facility drawing by Clean As New®!" /><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928" class="lazyload img-fluid mobileNone" alt="Facility drawing by Clean As New®!" /></a>
            <div class="card-body">
              <p class="text-center"><a href="/comparisons/facility">{{__('Facility')}}</a></p>
            </div>
          </div>
        </div>
        <div class="columns">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="/comparisons/esg-sustainability"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison/esg-father-son1.jpg?v=20200927" class="desktopNone img-fluid lazyload" alt="Everything You Need To Know About ESG Sustainability." /><img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/comparison/esg-father-son.jpg?v=20200928" class="lazyload img-fluid mobileNone" alt="
Thinking About ESG? About ESG Sustainability?" /></a>
            <div class="card-body">
              <p class="text-center"><a href="/comparisons/esg-sustainability">{{__('ESG')}}</a></p>
            </div>
          </div>
        </div>
        @endif
        <!-- end-->

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

<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection