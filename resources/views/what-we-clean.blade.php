@extends('app')

@section('title')
<title>Heat Exchangers Cleaning [Straight Tube, Twisted Tube] - Clean As New®</title>
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="https://cleanasnew.com/" itemprop="item"> <span itemprop="name">{{__("Home")}}</span></a>
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
                <!-- <li class="nav-item"><a class="nav-link active" id="utube-tab" data-toggle="tab" href="#utube" role="tab" aria-controls="utube" aria-selected="true">{{__("U-Tube")}} </a></li>
                <li class="nav-item"><a class="nav-link active" id="triangular-tab" data-toggle="tab" href="#triangular" role="tab" aria-controls="triangular" aria-selected="true">{{__("Triangular Pitch")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="twisted-tab" data-toggle="tab" href="#twisted" role="tab" aria-controls="twisted" aria-selected="true">{{__("Twisted Tube")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="exchanger-tab" data-toggle="tab" href="#exchanger" role="tab" aria-controls="exchanger" aria-selected="true">{{__("Welded Plate-and-Frame")}} </a></li> -->
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
                <!-- <li class="nav-item"><a class="nav-link active" id="utube-tab" data-toggle="tab" href="#utube" role="tab" aria-controls="utube" aria-selected="true">{{__("U-Tube")}} </a></li>
                <li class="nav-item"><a class="nav-link active" id="triangular-tab" data-toggle="tab" href="#triangular" role="tab" aria-controls="triangular" aria-selected="true">{{__("Triangular Pitch")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="twisted-tab" data-toggle="tab" href="#twisted" role="tab" aria-controls="twisted" aria-selected="true">{{__("Twisted Tube")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="exchanger-tab" data-toggle="tab" href="#exchanger" role="tab" aria-controls="exchanger" aria-selected="true">{{__("Welded Plate-and-Frame")}} </a></li> -->
              </ul>
              <hr>
            </li>
            @endif

            <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> {{__("Parts")}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link active" id="valves-tab" data-toggle="tab" href="#valves" role="tab" aria-controls="valves" aria-selected="true">{{__("Valves")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="filters-tab" data-toggle="tab" href="#filters" role="tab" aria-controls="filters" aria-selected="true">{{__("Filters")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="structured-tab" data-toggle="tab" href="#structured" role="tab" aria-controls="structured" aria-selected="true">{{__("Structured Packing")}}</a></li>
                <li class="nav-item"><a class="nav-link" id="unstructured-tab" data-toggle="tab" href="#unstructured" role="tab" aria-controls="unstructured" aria-selected="true">{{__("Unstructured Packing")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="rotating-tab" data-toggle="tab" href="#rotating" role="tab" aria-controls="rotating" aria-selected="true">{{__("Rotating Equipment")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="scaffolding-tab" data-toggle="tab" href="#scaffolding" role="tab" aria-controls="scaffolding" aria-selected="true"> {{__("Scaffolding")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="trays-tab" data-toggle="tab" href="#trays" role="tab" aria-controls="trays" aria-selected="true"> {{__("Column Trays")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="pots-tab" data-toggle="tab" href="#pots" role="tab" aria-controls="pots" aria-selected="true"> {{__("Seal Pots")}} </a></li>
                <li class="nav-item"><a class="nav-link" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="parts" aria-selected="true"> {{__("Many other parts")}}</a></li>
              </ul>
              <hr>
            </li> -->
          </ul>
          <h3 class="bigTitle text-center">{{__("If We Can’t Clean It, You Don’t Pay!")}}</h3>
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
            <!-- <div class="tab-pane fade {{ $key == 0 ? 'show active' : ''}}" id="{{str_replace(' ', '-', $value->title)}}" role="tabpanel" aria-labelledby="{{str_replace(' ', '-', $value->title)}}">
              <h2>{{ __($value->title) }}</h2>
              {!! $value->embed !!}
              <img data-src="{{ $value->image }}" alt="{{ __($value->title) }}" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
            </div> -->


            <div class="card">
              <div class="card-header" role="tab" id="{{lcfirst(str_replace(' ', '-', $value->title))}}12"> 
                <a data-toggle="collapse" data-parent="#accordionEx" href="#{{lcfirst(str_replace(' ', '-', $value->title))}}" aria-expanded="{{ $key == 0 ? 'true' : 'false'}}" aria-controls="{{lcfirst(str_replace(' ', '-', $value->title))}}" class="{{$key == 0 ? '' : 'collapsed'}}">
                  <h5 class="mb-0">{{ __($value->title) }}</h5>
                </a> </div>
              <div id="{{lcfirst(str_replace(' ', '-', $value->title))}}" class="collapse {{ $key == 0 ? 'show' : ''}}" role="tabpanel" aria-labelledby="{{lcfirst(str_replace(' ', '-', $value->title))}}12" data-parent="#accordionEx">
                <div class="card-body">
                  <div class="col-md-12">
                  {!! $value->embed !!}
                    
                  <img data-src="{{ $value->image }}" alt="{{ __($value->title) }}" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          @endif
          <h3 class="bigTitle text-center">If We Can’t Clean It, You Don’t Pay!</h3>
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
<script src="https://cleanasnew.com/js/bootstrap.min.js" defer></script>
<script>
  $(document).ready(function(e) {
    $(".nav-item a").click(function() {
      $(".nav-item a").removeClass('active');
    });
  });
</script>
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection