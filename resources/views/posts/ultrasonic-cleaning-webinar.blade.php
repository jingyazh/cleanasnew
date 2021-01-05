@extends('app')

@section('title')
<title>Ultrasonic Cleaning & Hydroblasting Webinar- Clean As New®</title>
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline">        &nbsp;
      <p><a href="https://cleanasnew.com/">{{__("Home")}}</a> &#8250; {{__("Does combining ultrasound cleaning with hydroblasting really make a difference?")}}</p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30">
          <p>If every time you removed a heat exchanger and had the choice of cleaning it with hydroblasting or replacing it with a brand new one for the same cost, which would you choose and why?</p>
          <p>Trying to decide if ultrasonic cleaning of heat exchangers is worth a try?</p>
          <p>In this webinar, through a simplified plant model, we will briefly introduce and demonstrate how cleaning has a huge impact on the bottom line for refineries and chemical plants. </p>
          <p>For more info, please visit: <a href="https://www.bicmagazine.com/resources/webinars/does-combining-ultrasonic-cleaning-with-hydroblasting-really/" target="_blank" rel="nofollow noopener noreferrer">www.bicmagazine.com/resources/webinars/does-combining-ultrasonic-cleaning-with-hydroblasting-really/</a></p>
        </div>
        <div class="col-6"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/bic-webinar.jpg?v=20200811" class="img-fluid polaroid lazyload" alt="Join Our Fre BIC Webinar!"/> </div>
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
<script src="https://cleanasnew.com/js/vendor/popper.min.js" defer></script> <script src="https://cleanasnew.com/js/bootstrap.min.js" defer></script>
	<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection