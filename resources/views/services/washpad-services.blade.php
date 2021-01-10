@extends('app')

@section('title')
<title>✔️ Wash Pad Services - Clean As New®</title>
@endsection

@section('content')

@include('layout.header', [$menuSetting, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="our-services" itemprop="item"> <span itemprop="name">{{__("Our Services")}}</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{__("Wash Pad Services")}}</span>
          <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30 scrollProfile45">
          <p>Do you understand the value of better cleaning, and want to get that advantage in your next turnaround? </p>
          <p>Not yet ready to abandon the wash pad? We have a solution for that too. </p>
          <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> will: </p>
          <ul class="list-group list-group-flushd listing padding30">
            <li> Work with you to understand the scope of your turnaround and determine the best combination of Tech Sonic’s ultrasonic cleaning systems and hydroblasting support </li>
            <li> Train your incumbent hydroblasting service provider on the process and support required to utilize the Tech Sonic systems </li>
            <li> Work side-by-side with your service provider to perform the cleaning</li>
            <li> Provide our services at a fixed, up front price</li>
          </ul>
          <br>
          <p>By using Tech Sonic’s systems in your next turnaround you can save money by:</p>
          <ul class="listing list-unstyled">
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!" /> Reducing the hydroblasting labor required. </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!" /> Eliminate risk and liability. </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!" /> Saving up to 75% of the water normally required. </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!" /> Producing up to 75% less wastewater </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!" /> De-risk your cleaning schedule by providing faster cleaning. </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!" /> Deliver exchangers that are cleaned to “like new” performance levels. </li>
          </ul>
          <p><a href="https://cleanasnew.com/contact">Call us</a> today and improve your next TAR performance while saving money.</p>
        </div>
        <div class="col-6 padding30"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/WashpadMontage-min.gif" class="img-fluid polaroid lazyload" alt="Still cleaning heat exchangers on your wash pad with hydroblasting alone?" /> </div>
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