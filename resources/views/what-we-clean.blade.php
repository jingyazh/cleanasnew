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
                <li class="nav-item"><a class="nav-link {{ $key == 0 ? 'active' : ''}}" id="{{lcfirst(str_replace(' ', '-', $value->title))}}-tab" data-toggle="tab" href="#{{lcfirst(str_replace(' ', '-', $value->title))}}" role="tab" aria-controls="{{lcfirst(str_replace(' ', '-', $value->title))}}" aria-selected="true">{{ $value->title }} </a></li>
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
                <li class="nav-item"><a class="nav-link {{ $key == 0 ? 'active' : ''}}" id="{{lcfirst(str_replace(' ', '-', $value->title))}}-tab" data-toggle="tab" href="#{{lcfirst(str_replace(' ', '-', $value->title))}}" role="tab" aria-controls="{{lcfirst(str_replace(' ', '-', $value->title))}}" aria-selected="true">{{ $value->title }} </a></li>
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
              <h2>{{ $value->title }}</h2>
              {!! $value->embed !!}
              <img data-src="{{ $value->image }}" alt="{{ $value->title }}" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
            </div>
            @endforeach
            @endif
            <!-- <div class="tab-pane fade show active" id="refinery" role="tabpanel" aria-labelledby="refinery-tab">
              <h2>Refineries</h2>
              <h4>Hydrocarbons and Inorganic Scale</h4>
              <p>Distillation Condensers, Crude/Coker Preheat Trains, FC/Steam/Hydro-Crackers, Reforming, Hydrotreating, Water/Steam Scale, and much more.</p>
              <img data-src="assets/img/petrochemical-plants.jpg?v=20200914" alt="Refineries: Hydrocarbons & Petrochemicals." src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
            </div>
            <div class="tab-pane fade" id="petrochemical" role="tabpanel" aria-labelledby="petrochemical-tab">
              <h2>Petrochemical Plants</h2>
              <h4>Hydrocarbons and Fouling</h4>
              <p>Crack Gas Quenching, Bottoms, Fractionation Train, Preheat Trains, Water/Steam Scale.</p>
              <img data-src="assets/img/Petrochemical-plants2.jpg?v=20200914" src="https://cleanasnew.com/assets/img/1px.png" alt="Petrochemical Plants: Hydrocarbons and Fouling" class="img-fluid polaroid lazyload" />
            </div>
            <div class="tab-pane fade" id="straight" role="tabpanel" aria-labelledby="straight-tab">
              <h3>Straight Tube </h3>
              <img data-src="assets/img/before-after/straight-tube-exchangers.jpg" src="https://cleanasnew.com/assets/img/1px.png" alt="Straight Tube Exchanger Before and After Cleaning." class="img-fluid polaroid lazyload" />
            </div>
            <div class="tab-pane fade" id="utube" role="tabpanel" aria-labelledby="utube-tab">
              <h3> U-Tube </h3>
              <img data-src="assets/img/before-after/u-tube-heat-exchangers.jpg" src="https://cleanasnew.com/assets/img/1px.png" alt="U-tube Heat Exchanger Before and After Cleaning." class="img-fluid polaroid lazyload" />
            </div>
            <div class="tab-pane fade" id="triangular" role="tabpanel" aria-labelledby="triangular-tab">
              <h3>Triangular Pitch </h3>
              <img data-src="assets/img/before-after/triangular-pitch-exchangers.jpg?v=20200915" src="https://cleanasnew.com/assets/img/1px.png" alt="Triangular Pitch Heat Exchanger Before and After Cleaning." class="img-fluid polaroid lazyload" />
            </div>
            <div class="tab-pane fade" id="twisted" role="tabpanel" aria-labelledby="twisted-tab">
              <h3>Twisted Tube </h3>
              <img data-src="assets/img/before-after/twisted-tube-exchangers.jpg?v=20200915" src="https://cleanasnew.com/assets/img/1px.png" alt="Twisted Tube Heat Exchanger Before and After Cleaning." class="img-fluid polaroid lazyload" />
            </div>
            <div class="tab-pane fade" id="exchanger" role="tabpanel" aria-labelledby="exchanger-tab">
              <h3>Welded Plate-and-Frame </h3>
              <img data-src="assets/img/before-after/welded-plat-frame-exchangers.jpg" src="https://cleanasnew.com/assets/img/1px.png" alt="Welded Plate-and-Frame Heat Exchanger Before and After Cleaning." class="img-fluid polaroid lazyload" />
            </div>
            <div class="tab-pane fade" id="parts" role="tabpanel">
              <h2>Parts </h2>
              <img data-src="assets/img/before-after/full-basket.jpg?v=20200807" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Parts after cleaning." />
            </div>
            <div class="tab-pane fade" id="valves" role="tabpanel" aria-labelledby="valves-tab">
              <h3>Valves </h3>
              <p>Valves of all types.</p>
              <img data-src="assets/img/before-after/4valves.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Valve before and after cleaning." />
            </div>
            <div class="tab-pane fade" id="filters" role="tabpanel" aria-labelledby="filters-tab">
              <h3>Filters </h3>
              <p>Wedge Wire, Screen Baskets, Oil/Gas, Mesh.</p>
              <img data-src="assets/img/before-after/3filters.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Aqua Filters before and after cleaning." />
            </div>
            <div class="tab-pane fade" id="structured" role="tabpanel" aria-labelledby="structured-tab">
              <h3>Structured Packing </h3>
              <p>Structured packing, Demister pads, preheater baskets, Yes We Can.</p>
              <img data-src="assets/img/before-after/5structured-packing2.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Structured Packing before and after cleaning." />
            </div>
            <div class="tab-pane fade" id="unstructured" role="tabpanel" aria-labelledby="unstructured-tab">
              <h3>Unstructured Packing </h3>
              <p>Unstructured Packing and other small, loose parts, We clean’em fast!</p>
              <img data-src="assets/img/before-after/9unstructured-packing.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Unstructured Packing before and after cleaning." />
            </div>
            <div class="tab-pane fade" id="rotating" role="tabpanel" aria-labelledby="rotating-tab">
              <h3>Rotating Equipment</h3>
              <p>Pump and Compressor Rotors.</p>
              <img data-src="assets/img/before-after/6pump-rotors.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Rotating Equipment before and after cleaning." />
            </div>
            <div class="tab-pane fade" id="scaffolding" role="tabpanel" aria-labelledby="scaffolding-tab">
              <h3>Scaffolding</h3>
              <p> All Scaffolding parts cleaned to like new!</p>
              <img data-src="assets/img/before-after/7Scaffolding.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="caffolding before and after cleaning." />
            </div>
            <div class="tab-pane fade" id="trays" role="tabpanel" aria-labelledby="trays-tab">
              <h3>Column Trays</h3>
              <p>Trays, Plates, Bubble Caps, Mesh.</p>
              <img data-src="assets/img/before-after/8column-trays.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Column Trays before and after cleaning." />
            </div>
            <div class="tab-pane fade" id="pots" role="tabpanel" aria-labelledby=" pots-tab">
              <h3>Seal Pots</h3>
              <p>Seal pots, Oil coolers, and many valve or pump related parts.</p>
              <img data-src="assets/img/before-after/10sea-pod.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Seal Pots before and after cleaning." />
            </div>
            <div class="tab-pane fade" id="all" role="tabpanel" aria-labelledby="all-tab">
              <p>Our clients are finding new ways to use Tech Sonic Cleaning every day. </p>
              <img data-src="assets/img/before-after/before-after-cleaning-collage.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Quick turnaround time. Safe, Effective cleaning." />
            </div> -->
          </div>
        </div>
        <!-- /.col-md-8 -->

        <!--Accordion wrapper-->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
          @if(isset($data) && $data != null)
            @foreach($data as $key => $value)
            <!-- <div class="tab-pane fade {{ $key == 0 ? 'show active' : ''}}" id="{{str_replace(' ', '-', $value->title)}}" role="tabpanel" aria-labelledby="{{str_replace(' ', '-', $value->title)}}">
              <h2>{{ $value->title }}</h2>
              {!! $value->embed !!}
              <img data-src="{{ $value->image }}" alt="{{ $value->title }}" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
            </div> -->


            <div class="card">
              <div class="card-header" role="tab" id="{{lcfirst(str_replace(' ', '-', $value->title))}}12"> 
                <a data-toggle="collapse" data-parent="#accordionEx" href="#{{lcfirst(str_replace(' ', '-', $value->title))}}" aria-expanded="{{ $key == 0 ? 'true' : 'false'}}" aria-controls="{{lcfirst(str_replace(' ', '-', $value->title))}}" class="{{$key == 0 ? '' : 'collapsed'}}">
                  <h5 class="mb-0">{{ $value->title }}</h5>
                </a> </div>
              <div id="{{lcfirst(str_replace(' ', '-', $value->title))}}" class="collapse {{ $key == 0 ? 'show' : ''}}" role="tabpanel" aria-labelledby="{{lcfirst(str_replace(' ', '-', $value->title))}}12" data-parent="#accordionEx">
                <div class="card-body">
                  <div class="col-md-12">
                  {!! $value->embed !!}
                    
                  <img data-src="{{ $value->image }}" alt="{{ $value->title }}" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          @endif
          
          <!-- <div class="card">
            <div class="card-header" role="tab" id="refineries12"> 
              <a data-toggle="collapse" data-parent="#accordionEx" href="#refineries" aria-expanded="true" aria-controls="refineries">
                <h5 class="mb-0">Refineries</h5>
              </a> </div>
            <div id="refineries" class="collapse show" role="tabpanel" aria-labelledby="refineries12" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h4>Hydrocarbons and Inorganic Scale</h4>
                  <p>Distillation Condensers, Crude/Coker Preheat Trains, FC/Steam/Hydro-Crackers, Reforming, Hydrotreating, Water/Steam Scale, and much more...</p>
                  <img data-src="assets/img/petrochemical-plants.jpg" alt="Refineries: Hydrocarbons & Petrochemicals." src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="card">
            <div class="card-header" role="tab" id="headingOne15"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne15" aria-expanded="true" aria-controls="collapseOne15">
                <h5 class="mb-0">Petrochemical Plants</h5>
              </a> </div>
            <div id="collapseOne15" class="collapse" role="tabpanel" aria-labelledby="headingOne15" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h4>Hydrocarbons and Fouling</h4>
                  <p>Crack Gas Quenching, Bottoms, Fractionation Train, Preheat Trains, Water/Steam Scale.</p>
                  <img data-src="assets/img/Petrochemical-plants2.jpg?v=20200914" alt="Petrochemical Plants: Hydrocarbons and Fouling" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingOne1"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                <h5 class="mb-0">Heat Exchangers</h5>
              </a> </div>
            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h4>Straight Tube </h4>
                  <img data-src="assets/img/before-after/straight-tube-exchangers.jpg" alt="Straight Tube Exchanger Before and After Cleaning." src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                  <h4> U-Tube </h4>
                  <img data-src="assets/img/before-after/1heat-exchanger.jpg" alt="U-Tube Heat Exchanger before and after cleaning." src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                  <h4> Triangular Pitch </h4>
                  <img data-src="assets/img/before-after/triangular-pitch-exchangers.jpg" alt="Triangular Pitch Heat Exchanger Before and After Cleaning." src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                  <h4>Twisted Tube </h4>
                  <img data-src="assets/img/before-after/twisted-tube-exchangers.jpg?v=20200915" alt="Twisted Tube Heat Exchanger Before and After Cleaning." src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                  <h4>Welded Plate-and-Frame </h4>
                  <img data-src="assets/img/before-after/1heat-exchanger.jpg" alt="Welded Plate-and-Frame Heat Exchanger before and after cleaning." src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" />
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                <h5 class="mb-0"> Parts </h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h4>Valves</h4>
                  <p>Valves of all types</p>
                  <img data-src="assets/img/before-after/4valves.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Valve before and after cleaning." />
                  <h4>Filters </h4>
                  <p>Wedge Wire, Screen Baskets, Oil/Gas, Mesh.</p>
                  <img data-src="assets/img/before-after/3filters.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Aqua Filters before and after cleaning. " />
                  <h4>Structured Packing</h4>
                  <p>Structured packing, Demister pads, preheater baskets, Yes We Can.</p>
                  <img data-src="assets/img/before-after/5structured-packing.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Structured Packing before and after cleaning." />
                  <h4>Unstructured Packing </h4>
                  <p>Unstructured Packing and other small, loose parts, We clean’em fast!</p>
                  <img data-src="assets/img/before-after/9unstructured-packing.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Unstructured Packing before and after cleaning." />
                  <h4>Rotating Equipment </h4>
                  <p>Pump and Compressor Rotors.</p>
                  <img data-src="assets/img/before-after/6pump-rotors.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Rotating Equipment before and after cleaning." />
                  <h4 class="mb-0">Scaffolding</h4>
                  <p>All Scaffolding parts cleaned to like new!</p>
                  <img data-src="assets/img/before-after/7Scaffolding.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Scaffolding before and after cleaning." />
                  <h4>Column Trays</h4>
                  <p>Trays, Plates, Bubble Caps, Mesh.</p>
                  <img data-src="assets/img/before-after/8column-trays.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Column Trays before and after cleaning. " />
                  <h4>Seal Pots</h4>
                  <p>Seal pots, Oil coolers, and many valve or pump related parts.</p>
                  <img data-src="assets/img/before-after/10sea-pod.jpg" src="https://cleanasnew.com/assets/img/1px.png" class="img-fluid polaroid lazyload" alt="Seal Pots before and after cleaning." />
                  <h4>Many other parts... </h4>
                  <p>Our clients are finding new ways to use Tech Sonic Cleaning every day. </p>
                  <img data-src="assets/img/before-after/before-after-cleaning-collage.jpg" class="img-fluid polaroid lazyload" src="https://cleanasnew.com/assets/img/1px.png" alt="Quick turnaround time. Safe, Effective cleaning." />
                </div>
              </div>
            </div>
          </div> -->
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