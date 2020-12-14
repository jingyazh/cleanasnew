@extends('app')

@section('title')
<title>✔️ By The Basket - Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="our-services" itemprop="item"> <span itemprop="name">Our Services</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">By The Basket</span>
        <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30 scrollProfile45">
          <h2>"Did you know <span class="cangc">C</span><span class="cangc2">LEAN</span> <span class="cangc">A</span><span class="cangc2">S</span> <span class="cangc">N</span><span class="cangc2">EW</span><sup>®</sup> cleans rotating equipment, piping components and parts by the basket."</h2>
          <p> Do you have parts like filters, valves, scaffolding and spools piling up on your wash pad waiting to be cleaned?</p>
          <p> Our “By The Basket” cleaning services might be just the thing to make your life easier, saving you time and money. </p>
          <p>A lot of smaller parts are cleaned on the wash pad using manual or semi-automated hydroblasting. It’s dangerous, messy, noisy and inconvenient. We can help, and…</p>
          <p class="text-center">We can clean almost anything!<br>
            Click here to <a href="/comparisons/parts-cleaning">compare parts cleaning with hydroblasting</a> to <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span>.<sup>®</sup></p>
          <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> will:</p>
          <ul class="listing list-unstyled">
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!"/> Work with you to determine the right size basket for your needs. </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!"/> Drop a basket on your wash pad and you can fill it with your parts. </li>
            <li><img src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!"/> Pick up that basket when it’s full or you need the cleaning done. </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!"/> Clean your parts for a guaranteed, fixed price. </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!"/> Return your basket of clean parts the next day! </li>
          </ul>
          <p> Check out our <a href="/posts/basket-of-parts">“By The Basket” services video</a> and give us a call today to arrange a “By The Basket” service for your wash pad. </p>
        </div>
        <div class="col-6 padding30"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/BasketMontage2-min.gif?v=20201005" class="img-fluid polaroid lazyload" alt="Clean As New® offers a Basket Rental and Bulk Parts Cleaning Service." /> </div>
      </div>
    </div>
  </div>
</main>
@include('layout.footer')
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