@extends('app')

@section('title')
<title>{{ $siteSetting->service_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->service_meta_description }}">
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
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="/" itemprop="item"> <span itemprop="name">{{__("Home")}}</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name"> {{__("Our Services")}}</span>
          <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row"> 
        <a href="#" data-toggle="modal" data-target="#myModal">
          {!! $siteSetting->service_txt !!}
        </a>
        @if(isset($services) && $services != null)
        @foreach($services as $key => $value)
        <div class="col-3">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="services/{{ $value->serviceid }}"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="{{$value->image_landing_1}}" class="img-fluid desktopNone  lazyload" alt="{{$value->title}}" /><img src="https://cleanasnew.com/assets/img/1px.png" data-src="{{$value->image_landing_2}}" class="img-fluid mobileNone lazyload" alt="{{$value->title}}" /></a>
            <div class="card-body">
              <p class="text-center"><a href="services/{{ $value->serviceid }}">{{__($value->title)}}</a></p>
            </div>
          </div>
        </div>
        @endforeach
        @endif
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
      <div class="modal-body"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="{{$siteSetting ? $siteSetting->service_list_image : 'assets/img/cangc-checklist.jpg?20201005'}}" class="img-fluid lazyload" alt="Clean As New® Benifits Checklist." /> <a href="https://cleanasnew.com/pdf/cangc-checklist.pdf?v=20201005" target="_blank" class="btn btn-default">{{__("Download This Checklist")}} <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a> </div>
    </div>
  </div>
</div>
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