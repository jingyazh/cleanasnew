@extends('app')

@section('title')
<title>The Highest Performing Refineries - Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline">
      &nbsp;
      <p><a href="https://cleanasnew.com/">{{__("Home")}}</a> &#8250; {{__("The Highest Performing Refineries")}} </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30">
          <p>Can we help improve your benchmark score and your profits? We sure can! Why not prove it to yourself?</p>
          <p>

            Are you cleaning your heat exchangers back to 100% of design performance with hydroblasting alone? Better, faster cleaning can help you recover profits lost to faster fouling, longer downtime and reduced energy performance.</p>
          <p> Our clients have reported over $1M savings just by cleaning a single exchanger to like-new performance. (Compared to hydroblasting alone)
          </p>
          <h2>
            Let us prove it to you by proving it to yourself!
          </h2>
          <p>
            Participate in a measured trial to understand the value added by ultrasonic cleaning. If you share the data with us, it's FREE - we'll pick up the cleaning costs. If you don't want to share the data - we'll only charge you for the high-pressure rinsing.
          </p>
          <p>
            <a href="/contact">Contact us</a> today to learn more.</p>
        </div>
        <div class="col-6">
          <img src="https://cleanasnew.com/assets/img/industry-cleaning-studies.jpg" class="img-fluid polaroid lazyload" loading="lazy" alt="The Highest Performing Refineries!" /> </div>
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