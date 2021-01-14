@extends('app')

@section('title')
<title>{{ $siteSetting->testimonials_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->testimonials_meta_description }}">
<meta content="{{ $og->og_locale != null ? str_replace('-', '_', $og->og_locale) : ''}}" property="og:locale">
<meta content="{{ $og->og_site_name != null ? $og->og_site_name : ''}}" property="og:site_name" />
<meta content="{{ $og->og_type != null ? $og->og_type : ''}}" property="og:type">
<meta content="{{ $og->og_url != null ? $og->og_url : ''}}" property="og:url">
<meta content="{{ $og->og_title != null ? $og->og_title : ''}}" property="og:title">
<meta content="{{ $og->og_description != null ? $og->og_description : ''}}" property="og:description">
<meta content="{{ $og->og_image != null ? $og->og_image : ''}}" property="og:image" />
<meta content="{{ $og->og_image_width != null ? $og->og_image_width : ''}}" property="og:image:width" />
<meta content="{{ $og->og_image_height != null ? $og->og_image_height : ''}}" property="og:image:height" />
@endsection

@section('content')

@include('layout.header', [$menuSetting, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="/"  itemprop="item"> <span itemprop="name">{{__("Home")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name">{{__("Testimonials")}}</span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
      @if(isset($testimonials) && $testimonials != null)
      @foreach($testimonials as $key => $value)
      <div class="col-md-4" style="padding: 10px;">
          <div class="card mb-4 shadow-sm">
            <a class="img-hover-zoom imgblur" href="testimonials/{{$value->testimonialid}}">
            <img src="https://cleanasnew.com/assets/img/1px.png" data-src="{{$value->image_1}}" class="img-fluid desktopNone  lazyload" alt=" An Exchanger is lowered into an ultrasonic bath by crane."/>
            <img src="https://cleanasnew.com/assets/img/1px.png" data-src="{{$value->image_2}}" class="img-fluid mobileNone  lazyload" alt="An Exchanger is lowered into an ultrasonic bath by crane."/>
            </a>
            <div class="card-body">
              <p class="text-center"><a href="testimonials/{{$value->testimonialid}}">{{ $value->title }}</a></p>
            </div>
          </div>
        </div>
      @endforeach
      @endif


        <!-- <div class="col-md-4">
          <div class="card mb-4 shadow-sm"> <a class="img-hover-zoom imgblur" href="testimonials/case-studies"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/lowering-heat-exchanger.jpg" class="img-fluid desktopNone  lazyload" alt=" An Exchanger is lowered into an ultrasonic bath by crane."/><img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/lowering-heat-exchanger-sm.jpg" class="img-fluid mobileNone  lazyload" alt="An Exchanger is lowered into an ultrasonic bath by crane."/></a>
            <div class="card-body">
              <p class="text-center"><a href="testimonials/case-studies">{{__("Case Studies")}}</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 gap">
          <div class="card mb-4 shadow-sm"> <a class="img-hover-zoom imgblur" href="testimonials/feedback"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/heat-exchanger.jpg?v=20201001" class="img-fluid desktopNone  lazyload" alt="Exchanger after cleaning."/><img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/heat-exchanger-sm2.jpg?v=20201001" class="img-fluid mobileNone  lazyload" alt="Exchanger after cleaning."/></a>
            <div class="card-body">
              <p class="text-center"><a href="testimonials/feedback">{{__("Feedback")}}</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 gap">
          <div class="card mb-4 shadow-sm"> <a class="img-hover-zoom imgblur" href="testimonials/referred-journal-publications"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/tech-sonic-vessel.jpg" class="img-fluid desktopNone  lazyload" alt="Tech Sonic vessel."/><img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/tech-sonic-vessel-sm.jpg" class="img-fluid mobileNone  lazyload" alt="Tech Sonic vessel."/></a>
            <div class="card-body">
              <p class="text-center"><a href="testimonials/referred-journal-publications">{{__("Referred Journal Publications")}}</a></p>
            </div>
          </div>
        </div> -->

        <!-- end-->

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
<script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script>
<script>$('.dropdown').dropdown();</script>
<script src="/assets/js/vendor/popper.min.js" defer></script> <script src="/assets/js/bootstrap.min.js" defer></script>
<script>

        $(document).ready(function(e){
            $(".nav-item a").click(function() {
                $(".nav-item a").removeClass('active');
            });
        });
    </script>
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection
