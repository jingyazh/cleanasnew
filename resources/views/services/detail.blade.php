@extends('app')

@section('title')
<title>{{ $service->meta_title }}</title>
<meta name="description" content="{{ $service->meta_description }}">
<meta content="{{ $service->og_locale != null ? $service->og_locale : ''}}" property="og:locale">
<meta content="{{ $service->og_site_name != null ? $service->og_site_name : ''}}" property="og:site_name" />
<meta content="{{ $service->og_type != null ? $service->og_type : ''}}" property="og:type">
<meta content="{{ $service->og_url != null ? $service->og_url : ''}}" property="og:url">
<meta content="{{ $service->og_title != null ? $service->og_title : ''}}" property="og:title">
<meta content="{{ $service->og_description != null ? $service->og_description : ''}}" property="og:description">
<meta content="{{ $service->og_image != null ? $service->og_image : ''}}" property="og:image" />
<meta content="{{ $service->og_image_width != null ? $service->og_image_width : ''}}" property="og:image:width" />
<meta content="{{ $service->og_image_height != null ? $service->og_image_height : ''}}" property="og:image:height" />
@endsection

@section('content')

@include('layout.header', [$menuSetting, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/our-services" itemprop="item"> <span itemprop="name">{{__("Our Services")}}</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{ $service->title }}</span>
          <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30 scrollProfile45">
            @if(isset($service) && $service != null)
              {!! $service->embed !!}
            @endif
        </div>
        <div class="col-6 padding30"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="/{{$service->image_article}}" class="img-fluid polaroid lazyload" alt="{{$service->meta_title}}" /> </div>
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