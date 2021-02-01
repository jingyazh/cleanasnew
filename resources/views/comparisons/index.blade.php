<!-- skip.minification -->
@extends('app')

@section('title')
<title>{{ isset($siteSetting) ? $siteSetting->comparison_meta_title : 'How We Compare [Cleaning Cost, Heat Exchanger Performance]' }}</title>
<meta name="description" content="{{ isset($siteSetting) ? $siteSetting->comparison_meta_description : 'Our combination of Tech Sonic ultrasonic technology and hydroblasting cleans compact exchanger designs on the shell side, where hydroblasting alone fails.' }}">
<meta content="{{ $comparison->og_locale != null ? $comparison->og_locale : ''}}" property="og:locale">
<meta content="{{ $comparison->og_site_name != null ? $comparison->og_site_name : ''}}" property="og:site_name" />
<meta content="{{ $comparison->og_type != null ? $comparison->og_type : ''}}" property="og:type">
<meta content="{{ $comparison->og_url != null ? $comparison->og_url : ''}}" property="og:url">
<meta content="{{ $comparison->og_title != null ? $comparison->og_title : ''}}" property="og:title">
<meta content="{{ $comparison->og_description != null ? $comparison->og_description : ''}}" property="og:description">
<meta content="{{ $comparison->og_image != null ? $comparison->og_image : ''}}" property="og:image" />
<meta content="{{ $comparison->og_image_width != null ? $comparison->og_image_width : ''}}" property="og:image:width" />
<meta content="{{ $comparison->og_image_height != null ? $comparison->og_image_height : ''}}" property="og:image:height" />
@endsection

@section('content')

@include('layout.header', [$menuSetting, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p>
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/how-we-compare" itemprop="item">
            <span itemprop="name">{{__('How We Compare')}}</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250;
        <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">{{__($comparison->title)}}</span>
          <meta itemprop="position" content="2">
        </span>
      </p>
    </div>
  </div>
  <div class="album bg-white">
    <div class="container">
      <div class="row">
        <div class="col-2">&nbsp;</div>
        @if(isset($comparison) && $comparison != null)
        {!! $comparison->embed !!}
        @endif
        <div class="col-1">&nbsp;</div>
        <div class="col-1">&nbsp;</div>
      </div>
    </div>
  </div>
</main>
@include('layout.footer', (isset($siteSetting) && $siteSetting != null) ? $siteSetting : ['siteSetting' => null])
@endsection

@section('page-script')
<script>
  var body = document.getElementsByTagName("body")[0];
  var parent = document.getElementById("parent-div");
  var child = document.getElementById("child-div");
  body.onscroll = function() {
    //console.log(documenhttps://fiddle.jshell.net/3urv0tp0/#tidyt.getElementById("child-div").style.top)
    if (document.documentElement.scrollTop >= child.offsetTop) //Adjust Tolerance as you want
    {
      child.style.display = "block"
    }

  };
</script>
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
  window.jQuery || document.write('<script src="/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script>
<script>
  $('.dropdown').dropdown();
</script>

<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>

@endsection