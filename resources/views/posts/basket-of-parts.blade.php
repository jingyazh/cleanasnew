@extends('app')

@section('title')
<title>Basket Rental and Bulk Parts Cleaning Service - Clean As New®</title>
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
<main>
  <div class="jumbotron text-left">
   <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList">&nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="https://cleanasnew.com/" itemprop="item"><span itemprop="name">{{__("Home")}}</span></a>   <meta itemprop="position" content="1"></span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{__("Basket of Parts")}}</span><meta itemprop="position" content="2"></span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-8 padding30">
          <div id="videoMobile"> </div> 
        </div>
        <div class="col-4 padding15">
          <p class="padding30"> <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> offers a Basket Rental and Bulk Parts Cleaning Service.</p>
            <p class="padding30"> We will provide a basket, sized for your requirements, for your site. The process is simple:</p>
          <ol style="width:96%">
            <li> We will drop off an empty basket to your site.</li>
            <li> You can fill it with your parts for cleaning – whatever fits in the basket.</li>
             <li>  When the basket is full, give us a call, and we will pick it up.</li>
              <li> We’ll clean your parts and return them to you in the same basket. </li>
          </ol>
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
	 <script>const scriptTag=document.createElement('script');scriptTag.src="https://www.youtube.com/iframe_api";const firstScriptTag=document.getElementsByTagName('script')[0];firstScriptTag.parentNode.insertBefore(scriptTag, firstScriptTag);let player;function onYouTubeIframeAPIReady(){player=new YT.Player('videoMobile',{videoId: '1THt2OH9ht4', playerVars:{'autoplay': 1, 'controls': 1,'autohide':0,'rel':0}, events:{'onReady': onPlayerReady, 'onStateChange': onPlayerStateChange}});}function onPlayerReady(event){}function onPlayerStateChange(event){if (event.data==YT.PlayerState.PLAYING){}}</script>
@endsection