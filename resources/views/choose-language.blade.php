@extends('app')

@section('title')
<title>Clean As New® Intro Video & Services;</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="https://cleanasnew.com/" itemprop="item"> <span itemprop="name">{{__("Home")}}</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name">{{__("Select Language")}} </span>
          <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-2">&nbsp; </div>
        <div class="col-md-4 padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
            <li class="item"><a href="/lang/en">English </a><hr></li>
            <li class="item"><a href="/lang/fr">Français (FR)</a><hr></li>
            <li class="item"><a href="/lang/es">Español (ES)</a><hr></li>
            <li class="item"><a href="/lang/es-us">Español (US)</a><hr></li>
            <li class="item"><a href="/lang/mx">Español (MX)</a><hr></li>
            <li class="item"><a href="/lang/pt-br">Português (BR)</a><hr></li>
            <li class="item"><a href="/lang/de">Deutsch (DE)</a><hr></li>
            <li class="item"><a href="/lang/ru">Русский (RU)</a><hr></li>
            <li class="item"><a href="/lang/hi-in">Hindi (IN)</a><hr></li>
            <li class="item"><a href="/lang/pa-pk">Punjabi (PK)</a><hr></li>
            <li class="item"><a href="/lang/cn">中文 (CN)</a><hr></li>
            <li class="item"><a href="/lang/jp">日本語 (JP)</a><hr></li>
            <li class="item"><a href="/lang/th">Thai (TH)</a><hr></li>
            <li class="item"><a href="/lang/ml">Malay (ML)</a><hr></li>
          </ul>
        </div>
        <div class="col-2">&nbsp; </div>
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