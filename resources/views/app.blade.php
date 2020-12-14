<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Clean As New® delivers industrial cleaning services both onsite and offsite. We ensure 100% clean. If we can’t clean it, you don’t pay!">
  <meta name="author" content="Clean As New®">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('title')
  <link href="{{ asset('assets/css/bootstrap.min-cg.css?v=20201030') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/styles09.css?v=20201201') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/odometer-theme-car.css?v=20201030') }}" rel="stylesheet">
  <link href="https://cleanasnew.com/" rel="canonical">
  <meta content="https://www.facebook.com/cangc01/" property="fb:profile_id" />
  <meta content="en_US" property="og:locale" />
  <meta content=" Clean As New Powered by Tech Sonic® (China)" property="og:site_name" />
  <meta content="website" property="og:type" />
  <meta content="https://cleanasnew.com/" property="og:url" />
  <meta content="Heat Exchanger Cleaning Services -  Clean As New® (China)" property="og:title" />
  <meta content="Clean As New® delivers industrial cleaning services both onsite and offsite. We ensure 100% clean. If we can’t clean it, you don’t pay!" property="og:description" />
  <meta content="{{ asset('assets/img/fb-clean-as-new-in-baytown.jpg') }}" property="og:image" />
  <meta content="1200" property="og:image:width" />
  <meta content="630" property="og:image:height" />
  <meta name="twitter:card" content="summary" />
  <meta property="fb:app_id" content="2544690392489034" />
  <!-- <link rel="alternate" href="https://cleanasnew.com/index.html" hreflang="en" />
  <link rel="alternate" href="https://cleanasnew.com/mx/index.html" hreflang="es-mx" />
  <link rel="alternate" href="https://cleanasnew.com/es/index.html" hreflang="es-es" />
  <link rel="alternate" href="https://cleanasnew.com/es-us/index.html" hreflang="es-us" />
  <link rel="alternate" href="https://cleanasnew.com/pt-br/index.html" hreflang="pt-br" />
  <link rel="alternate" href="https://cleanasnew.com/de/index.html" hreflang="de-de" />
  <link rel="alternate" href="https://cleanasnew.com/fr/index.html" hreflang="fr-fr" />
  <link rel="alternate" href="https://cleanasnew.com/jp/index.html" hreflang="ja-jp" />
  <link rel="alternate" href="https://cleanasnew.com/th/index.html" hreflang="th-th" />
  <link rel="alternate" href="https://cleanasnew.com/ml/index.html" hreflang="ms-my" />
  <link rel="alternate" href="https://cleanasnew.com/ru/index.html" hreflang="ru-ru" />
  <link rel="alternate" href="https://cleanasnew.com/cn/index.html" hreflang="zh-cn" />
  <link rel="alternate" href="https://cleanasnew.com/hi-in/index.html" hreflang="hi-in" />
  <link rel="alternate" href="https://cleanasnew.com/pa-pk/index.html" hreflang="pa-pk" /> -->
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180">
  <link href="{{ asset('assets/img/android-icon-192x192.png') }}" rel="icon" sizes="192x192" type="image/png">
  <link href="{{ asset('assets/img/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png">
  <link href="{{ asset('assets/img/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png">
  <link href="{{ asset('assets/img/manifest.json') }}" rel="manifest">
  <meta content="#ffffff" name="msapplication-TileColor">
  <meta content="{{ asset('assets/img/ms-icon-144x144.png') }}" name="msapplication-TileImage">
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