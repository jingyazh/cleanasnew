@extends('app')

@section('title')
<title>{{ $siteSetting->clean_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->clean_meta_description }}">
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
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name">{{__("What We Clean")}}</span>
          <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
            @if(isset($data) && $data != null)
            @foreach($data as $key => $value)
            @if($value->type == '')
            <li class="nav-item"> <a class="nav-link {{ $key == 0 ? 'active' : ''}}" id="{{lcfirst(str_replace(' ', '-', $value->title))}}-tab" data-toggle="tab" href="#{{lcfirst(str_replace(' ', '-', $value->title))}}" role="tab" aria-controls="{{lcfirst(str_replace(' ', '-', $value->title))}}" aria-selected="true">{{$value->title}} </a>
              <hr>
            </li>
            @endif
            @endforeach
            @endif
            @if(isset($data) && $data != null)
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{__("Heat Exchangers")}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                @foreach($data as $key => $value)
                @if($value->type == 'Heat Exchangers')
                <li class="nav-item"><a class="nav-link {{ $key == 0 ? 'active' : ''}}" id="{{lcfirst(str_replace(' ', '-', $value->title))}}-tab" data-toggle="tab" href="#{{lcfirst(str_replace(' ', '-', $value->title))}}" role="tab" aria-controls="{{lcfirst(str_replace(' ', '-', $value->title))}}" aria-selected="true">{{ __($value->title) }} </a></li>
                @endif
                @endforeach
              </ul>
              <hr>
            </li>
            @endif
            @if(isset($data) && $data != null)
            <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{__("Parts")}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                @foreach($data as $key => $value)
                @if($value->type == 'Parts')
                <li class="nav-item"><a class="nav-link {{ $key == 0 ? 'active' : ''}}" id="{{lcfirst(str_replace(' ', '-', $value->title))}}-tab" data-toggle="tab" href="#{{lcfirst(str_replace(' ', '-', $value->title))}}" role="tab" aria-controls="{{lcfirst(str_replace(' ', '-', $value->title))}}" aria-selected="true">{{ __($value->title) }} </a></li>
                @endif
                @endforeach
              </ul>
              <hr>
            </li>
            @endif
          </ul>
          <h3 class="bigTitle text-center">
            @if(isset($siteSetting) && $siteSetting != null)
            {{ $siteSetting->clean_slogan }}
            @endif
          </h3>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 desktopNone">
          <div class="tab-content" id="myTabContent">
            @if(isset($data) && $data != null)
            @foreach($data as $key => $value)
            <div class="tab-pane fade {{ $key == 0 ? 'show active' : ''}}" id="{{lcfirst(str_replace(' ', '-', $value->title))}}" role="tabpanel" aria-labelledby="{{lcfirst(str_replace(' ', '-', $value->title))}}-tab">
              <h2>{{ __($value->title) }}</h2>
              {!! $value->embed !!}
              <img data-src="{{ $value->image }}" alt="{{ __($value->title) }}" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
            </div>
            @endforeach
            @endif
          </div>
        </div>
        <!-- /.col-md-8 -->

        <!--Accordion wrapper-->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
          @if(isset($data) && $data != null)
          @foreach($data as $key => $value)

          @if($value->type == null)
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo{{$key}}">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#headingTwo{{$key}}1" aria-expanded="true" aria-controls="headingTwo{{$key}}1">
                <h5 class="mb-0">{{ __($value->title) }}</h5>
              </a>
            </div>
            <div id="headingTwo{{$key}}1" class="collapse" role="tabpanel" aria-labelledby="headingTwo{{$key}}" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  {!! $value->embed !!}

                  <img data-src="{{ $value->image }}" alt="{{ __($value->title) }}" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                </div>
              </div>
            </div>
          </div>
          @endif

          @endforeach

          <div class="card">
            <div class="card-header" role="tab" id="headingOne2"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                <h5 class="mb-0">Heat Exchangers</h5>
              </a> </div>
            <div id="collapseOne2" class="collapse" role="tabpanel" aria-labelledby="headingOne2" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  @foreach($data as $key => $value)

                  @if($value->type == 'Heat Exchangers')
                  <h4>{{$value->title}}</h4>
                  <img data-src="{{ $value->image }}" alt="{{ __($value->title) }}" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                  @endif

                  @endforeach
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header" role="tab" id="headingOne1"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="mb-0">Parts</h5>
              </a> </div>
            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  @foreach($data as $key => $value)

                  @if($value->type == 'Parts')
                  <h4>{{$value->title}}</h4>
                  <img data-src="{{ $value->image }}" alt="{{ __($value->title) }}" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                  @endif

                  @endforeach
                </div>
              </div>
            </div>
          </div>

          @endif
          <h3 class="bigTitle text-center">
            @if(isset($siteSetting) && $siteSetting != null)
            {{ $siteSetting->clean_slogan }}
            @endif
          </h3>
        </div>
        <!-- Accordion wrapper -->
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
<!-- <script>
  window.jQuery || document.write('<script src="/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script> -->
<script src="https://cleanasnew.com/js/vendor/jquery-slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.min.js"></script>
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script>
<script>
  $('.dropdown').dropdown();
</script>
<!-- <script src="https://cleanasnew.com/js/bootstrap.min.js" defer></script> -->
<script>
  $(document).ready(function(e) {
    $(".nav-item a").click(function() {
      $(".nav-item a").removeClass('active');
    });
  });
</script>
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection