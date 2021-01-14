<!doctype html>
<html lang="{{ str_replace('-', '_', app()->getLocale())}}">

<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('title')
  <link href="{{ asset('assets/css/bootstrap.min-cg.css?v=20201030') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/styles09.css?v=20201201') }}" rel="stylesheet">
  @if(Request::url() == 'http://localhost:8000' || Request::url() == 'https://cleanasnew.com')
    <link href="{{ asset('assets/css/odometer-theme-car.css?v=20201030') }}" rel="stylesheet">
  @endif
  <link  href="{{Request::url()}}" rel="canonical">

  @foreach($gmetadata as $key => $r)
    <meta {!! ($r->name) ? 'name="'.$r->name.'"' : '' !!}  {!! 
      ($r->content) ? 'content="'.$r->content.'"' : '' !!} {!! 
      ($r->property) ? 'property="'.$r->property.'"' : '' !!} />
  @endforeach
  @foreach ($glocales as $key => $lang)
    <link rel="alternate" href="{{Request::url()}}?chlang={{$key}}" hreflang="{{$key}}" />
  @endforeach
  
  @if($gcustomfont != "")
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family={{$gcustomfont}}&display=swap" rel="stylesheet">  
  @endif

  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
  <link href="{{ asset('assets/img/android-icon-192x192.png') }}" rel="icon" sizes="192x192" type="image/png">
  <link href="{{ asset('assets/img/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png">
  <link href="{{ asset('assets/img/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png">
  <link href="{{ asset('assets/img/manifest.json') }}" rel="manifest">

  <link rel="preconnect" href="//code.jquery.com" />
  <link rel="preconnect" href="//maxcdn.bootstrapcdn.com">
  <link rel="preconnect" href="//www.fonts.googleapis.com" />
  <script src="//assets.adobedtm.com/175f7caa2b90/68e4c3a097bc/launch-be14a33fe327.min.js" async></script>
  @yield('before-css')
  @yield('page-css')
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PT7GX9B');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body itemscope itemtype="http://schema.org/WebPage">
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PT7GX9B" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  @yield('content')
  
  @yield('page-script')
</body>

</html>