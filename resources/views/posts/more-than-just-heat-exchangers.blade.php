@extends('app')

@section('title')
<title>We Clean Way More Than Just Heat Exchangers!</title>
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList">&nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="https://cleanasnew.com/"  itemprop="item"><span itemprop="name">{{__("Home")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name"> {{__("We Clean Way More Than Just Heat Exchangers!")}}</span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30">
          <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>'s process uses Tech Sonic patented ultrasonic technology and proprietary chemistries to gently loosen fouling from all surfaces of a part - no matter how fragile and intricate. </p>
          <p>This allows us to quickly and thoroughly clean parts like valves, filters, demister pads, packing, and much more that are often impossible to clean by hydroblasting alone.</p>
          <p><a href="contact">Contact us</a> for more information and improve your maintenance performance today.</p>
        </div>
        <div class="col-6">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/heat-exchanger-cleaning.jpg"  class="img-fluid polaroid lazyload" alt="Heat Exchanger Cleaning by Clean As New®!"/> </div>
              <div class="carousel-item"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/roating-equipment.jpg"  class="img-fluid polaroid lazyload" alt="Rotating Equipment Cleaning by Clean As New®!"/> </div>
              <div class="carousel-item"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/structured-packing.jpg"  class="img-fluid polaroid lazyload" alt="Structured Packing Cleaning by Clean As New®!"/> </div>
              <div class="carousel-item"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/other-parts.jpg"  class="img-fluid polaroid lazyload" alt="Other Parts Cleaning by Clean As New®!"/> </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span></a> </div>
        </div>
      </div>
    </div>
   
  </div>
</main>
@include('layout.footer', (isset($siteSetting) && $siteSetting != null) ? $siteSetting : ['siteSetting' => null])
@endsection

@section('page-script')
<script>
 var giftofspeed2=document.createElement('link');giftofspeed2.rel='stylesheet';giftofspeed2.href='https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap';giftofspeed2.type='text/css';var godefer2=document.getElementsByTagName('link')[0];godefer2.parentNode.insertBefore(giftofspeed2,godefer2);var giftofspeed3=document.createElement('link');giftofspeed3.rel='stylesheet';giftofspeed3.href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';giftofspeed3.type='text/css';var godefer3=document.getElementsByTagName('link')[0];godefer3.parentNode.insertBefore(giftofspeed3, godefer3);
</script> 
<script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script>window.jQuery || document.write('<script src="https://cleanasnew.com/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script> 
<script>$('.dropdown').dropdown();</script>
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection