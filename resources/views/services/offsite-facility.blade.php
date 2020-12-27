@extends('app')

@section('title')
<title>✔️ Offsite Facility - Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList">&nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="our-services" itemprop="item"> <span itemprop="name">{{__("Our Services")}}</span></a>
          <meta itemprop="position" content="1"></span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{__("Offsite Facility")}}</span>
          <meta itemprop="position" content="2"></span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30">
          <p> Getting results that are CLEANER, FASTER, SAFER and GREENER is easy! Our offsite facility in Baytown is ready to clean your fouled heat exchangers, filters, valves, rotating equipment, and many other parts. </p>
          <ul class="list-group list-group-flushd listing padding30">
            <li>Most exchangers are cleaned in less than one day and often returned faster than you can clean it on your own wash pad. </li>
            <li>We can clean almost any bundle to like new performance – and we guarantee it.
              <h3 class="bigTitle">If we can’t clean it, you don’t pay!</h3>
            </li>
            <li>We can support both routine maintenance as well as turnarounds, with a cleaning capacity that will outpaced most wash pads. </li>
          </ul>
          <br>
          <p>Are you interested in:</p>
          <ul class="listing list-unstyled">
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!" /> Getting the risk of hydroblasting off of your site? </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!" /> Reducing your water consumption by 100%? </li>
            <li><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark!" /> Having exchangers that perform “like new”? </li>
          </ul>

          <p> <a href="https://cleanasnew.com/contact">Call us</a> today for our guaranteed, fixed price cleaner, faster, safer, greener services. </p>
        </div>
        <div class="col-6 padding30"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/OffSiteMontage-min.gif" class="img-fluid polaroid lazyload" alt="Our offsite facility in Baytown is ready to clean your fouled heat exchangers and parts." /> </div>
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