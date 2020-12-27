@extends('app')

@section('title')
<title>Still Hydroblasting Your Exchangers?  - Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
	  <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList">&nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="https://cleanasnew.com/" itemprop="item"><span itemprop="name">{{__("Home")}}</span></a>   <meta itemprop="position" content="1"></span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{__("Still Just Hydroblasting Your Exchangers?")}}</span><meta itemprop="position" content="2"></span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30">
          <p>Still cleaning heat exchangers on your wash pad with hydroblasting alone?</p>
          <p> You’re losing tens if not hundreds of millions of dollars per year due to heat exchanger fouling – you’re burning money that could easily be saved simply by adding ultrasonic cleaning.</p>
          <p>Cleaning heat exchangers back to like new performance at every service interval can mean a significant savings in energy consumption, improved production and potentially longer maintenance intervals. </p>
          <p>At 
<span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> we guarantee to clean your exchangers back to better than 95% of design performance and will ALWAYS deliver results that are better than hydroblasting alone.</p>
        </div>
        <div class="col-6"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/hydroblasting-stop.jpg" class="img-fluid polaroid lazyload" alt="Hydroblasting Your Heat Exchangers!"/> </div>
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