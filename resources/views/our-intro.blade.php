@extends('app')

@section('title')
<title>Clean As New® Intro Video & Services;</title>
@endsection

@section('content')

@include('layout.header', [$menuSetting, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="/"  itemprop="item"> <span itemprop="name">{{__("Home")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name">{{__("Watch Our Intro Video")}} </span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-2">&nbsp; </div>
        <div id="player"> </div>
        <div class="col-2">&nbsp; </div>
      </div>
    </div>
  </div>
</main>
@include('layout.footer', (isset($siteSetting) && $siteSetting != null) ? $siteSetting : ['siteSetting' => null])
<!-- The Modal -->
<div class="modal fade" id="myModal" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>
      <div class="modal-body"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/cangc-checklist.jpg?20201005" class="img-fluid lazyload" alt="Clean As New® Benifits Checklist."/> <a href="https://cleanasnew.com/pdf/cangc-checklist.pdf?v=20201005" target="_blank" class="btn btn-default">Download This Checklist <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a> </div>
    </div>
  </div>
</div>
@endsection

@section('page-script')
<script>
 var giftofspeed2=document.createElement('link');giftofspeed2.rel='stylesheet';giftofspeed2.href='https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap';giftofspeed2.type='text/css';var godefer2=document.getElementsByTagName('link')[0];godefer2.parentNode.insertBefore(giftofspeed2,godefer2);var giftofspeed3=document.createElement('link');giftofspeed3.rel='stylesheet';giftofspeed3.href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';giftofspeed3.type='text/css';var godefer3=document.getElementsByTagName('link')[0];godefer3.parentNode.insertBefore(giftofspeed3, godefer3);
</script> 
<script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script>window.jQuery || document.write('<script src="https://cleanasnew.com/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script> 
<script>$('.dropdown').dropdown();</script> 
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "VideoObject",
      "name": "Clean As New®: Industrial Heat Exchanger Cleaning",
      "description": "Clean As New® is recognized for providing the refining and petrochemical industries with “Green Tech” solutions that help them operate more efficiently, reduce their environmental footprint, all while improving the bottom line. We GUARANTEE to clean your exchangers to ›95% of original performance - IF WE CAN'T CLEAN IT - YOU DON'T PAY!The value to you = improved schedule, longer maintenance intervals, improved production and reduced energy consumption.",
      "thumbnailUrl": [
        "https://cleanasnew.com/assets/img/fb-clean-as-new-in-baytown.jpg",
        "https://cleanasnew.com/assets/img/fb-heat-exchanger-bundle.jpg" 
 
       ],
      "uploadDate": "2020-05-20T23:16:39Z",
      "duration": "PT4M58S",
      "contentUrl": "https://www.youtube.com/embed/bltYLIGqQuA?autoplay=1",
      "embedUrl": "https://youtube.googleapis.com/v/bltYLIGqQuA",
      "interactionStatistic": {
        "@type": "InteractionCounter",
        "interactionType": { "@type": "http://schema.org/WatchAction" },
        "userInteractionCount": 125
      }
    }
    </script> 
<script>
	// https://developers.google.com/youtube/iframe_api_reference?hl=ru
const scriptTag = document.createElement('script');
scriptTag.src = "https://www.youtube.com/iframe_api";
const firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(scriptTag, firstScriptTag);

let player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
         videoId: 'bltYLIGqQuA',
         width: '870',
         height: '491',
         playerVars: { 'autoplay': 1, 'controls': 1,'autohide':0,'rel':0 },
         events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
    });
}
function onPlayerReady(event) {
}
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING) {
    }
}
	</script> 
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection