@extends('app')

@section('title')
<title>Page Not Found - Clean As New®</title>
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
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="/" itemprop="item"> <span itemprop="name">{{__("Home")}}</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name">{{__("404")}}</span>
          <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-10">
          @if(isset($siteSetting) && $siteSetting != null)
          {!! $siteSetting->errorpage404 !!}
          @else
          <h1>Oops! We lost that page. </h1>
          <blockquote>
            <p class="quotation"> We're very sorry, but the page you requested cannot be found. It may have been moved or deleted. <br>
              For more information, please visit our site and check out great content such as <a href="/testimonials/case-studies">Tech Sonic Case Studies</a>, <a href="faq">Heat Exchanger FAQs</a> and <a href="/testimonials/referred-journal-publications">Journal Publications</a>. </p>
            -<span class="cangc">C</span><span class="cangc2">LEAN</span> <span class="cangc">A</span><span class="cangc2">S</span> <span class="cangc">N</span><span class="cangc2">EW</span><sup>®</sup>
          </blockquote>
          @endif
        </div>
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