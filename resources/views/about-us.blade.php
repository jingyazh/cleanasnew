@extends('app')

@section('title')
<title>{{ $siteSetting->aboutus_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->aboutus_meta_description }}">
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
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name">{{__("About Us")}}</span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
      @if(isset($abouts) && $abouts != null)
      @foreach($abouts as $key => $value)
      <div class="col-6 desktopNone">
          <div class="card mb-6 shadow-sm"> <a href="{{ $value->link }}"><img src="{{ $value->image }}" data-src="{{ $value->image }}?v=20200928" class="img-fluid lazyload" alt="{{$value->title}}"/></a>
            <div class="card-body">
              <p class="text-center"><a href="{{ $value->link }}">{{ $value->title }}</a></p>
            </div>
          </div>
        </div>
      @endforeach
      @endif
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
        @if(isset($abouts) && $abouts != null)
        @foreach($abouts as $key => $value)
        <div class="card">
            <div class="card-header" role="tab" id="headingOne{{ $key+1 }}"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{ $key+1 }}" aria-expanded="{{ $key==0 ? 'true' : 'false' }}"
              aria-controls="collapseOne{{ $key+1 }}">
              <h5 class="mb-0">{{ $value->title }}</h5>
              </a> </div>
            <div id="collapseOne{{ $key+1 }}" class="collapse {{ $key==0 ? 'show' : '' }}" role="tabpanel" aria-labelledby="headingOne{{ $key+1 }}"
              data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                <a href="{{ $value->link }}"><img src="{{$value->image}}" data-src="{{$value->image}}?v=20200928" class="img-fluid lazyload" alt="{{$value->title}}"/></a>
                  <p class="text-center"><a href="{{$value->link}}">{{$value->title}}</a></p>
                </div>
              </div>
            </div>
        @endforeach
        @endif
          <br>
          <br>
          <!-- Accordion wrapper --> 
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