@extends('app')

@section('title')
<title>{{ $siteSetting->aboutus_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->aboutus_meta_description }}">
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
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
          <div class="card mb-6 shadow-sm"> <a href="{{ $value->link }}"><img src="{{ $value->image }}" data-src="{{ $value->image }}?v=20200928" class="img-fluid lazyload" alt="ESG concept of environmental, social and governance in sustainable and ethical business"/></a>
            <div class="card-body">
              <p class="text-center"><a href="{{ $value->link }}">{{ $value->title }}</a></p>
            </div>
          </div>
        </div>
      @endforeach
      @endif
        <!-- <div class="col-6 desktopNone">
          <div class="card mb-6 shadow-sm"> <a href="esg"><img src="/assets/img/1px.png" data-src="/assets/img/esg-sustainability2.jpg?v=20200928" class="img-fluid lazyload" alt="ESG concept of environmental, social and governance in sustainable and ethical business"/></a>
            <div class="card-body">
              <p class="text-center"><a href="esg">Sustainability</a></p>
            </div>
          </div>
        </div>
        <div class="col-6 gap desktopNone">
          <div class="card mb-6 shadow-sm"> <a href="about-us/index"> <img src="/assets/img/1px.png" data-src="/assets/img/clean-as-new-in-baytown2.jpg?v=20200925" class="img-fluid lazyload" alt="Clean As New® offsite facility in Baytown, Texas "/></a>
            <div class="card-body">
              <p class="text-center"><a href="about-us/index">Company</a></p>
            </div>
          </div>
        </div>
        <div class="col-6 desktopNone">
          <div class="card mb-6 shadow-sm"> <a href="about-us/advisory-board"> <img src="/assets/img/1px.png" data-src="/assets/img/board-meeting.jpg" class="img-fluid lazyload" alt="Names Advisory Board Members."/></a>
            <div class="card-body">
              <p class="text-center"><a href="about-us/advisory-board">Advisory Board</a></p>
            </div>
          </div>
        </div>
        <div class="col-6 gap desktopNone">
          <div class="card mb-6 shadow-sm"> <a href="about-us/news-and-events"> <img src="/assets/img/1px.png" data-src="/assets/img/clean-as-new-news-events.jpg" class="img-fluid lazyload" alt="lean As New  - Latest & Current News & Events. "/></a>
            <div class="card-body">
              <p class="text-center"><a href="about-us/news-and-events">News and Events</a></p>
            </div>
          </div>
        </div> -->
        <!-- end-->
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
                <a href="{{ $value->link }}"><img src="{{$value->image}}" data-src="{{$value->image}}?v=20200928" class="img-fluid lazyload" alt="ESG concept of environmental, social and governance in sustainable and ethical business"/></a>
                  <p class="text-center"><a href="{{$value->link}}">{{$value->title}}</a></p>
                </div>
              </div>
            </div>
        @endforeach
        @endif
           <!-- <div class="card">
            <div class="card-header" role="tab" id="headingOne1"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
              aria-controls="collapseOne1">
              <h5 class="mb-0">Sustainability </h5>
              </a> </div>
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12"><a href="esg"><img src="/assets/img/1px.png" data-src="/assets/img/esg-sustainability2.jpg?v=20200928" class="img-fluid lazyload" alt="ESG concept of environmental, social and governance in sustainable and ethical business"/></a>
                  <p class="text-center"><a href="esg">Sustainability</a></p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingOne19"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne19" aria-expanded="true"
                 aria-controls="collapseOne19">
                <h5 class="mb-0">About Us </h5>
                </a> </div>
              <div id="collapseOne19" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
                data-parent="#accordionEx">
                <div class="card-body">
                  <div class="col-md-12"><a href="about-us/index"> <img src="/assets/img/1px.png" data-src="/assets/img/clean-as-new-in-baytown.jpg" class="img-fluid lazyload" alt="Clean As New® offsite facility in Baytown, Texas "/></a>
                    <p class="text-center"><a href="about-us/index">Company</a></p>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                   aria-expanded="false" aria-controls="collapseTwo2">
                  <h5 class="mb-0"> Advisory Board </h5>
                  </a> </div>
                <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                   data-parent="#accordionEx">
                  <div class="card-body">
                    <div class="col-md-12"> <a href="/about-us/advisory-board"> <img src="/assets/img/1px.png" data-src="/assets/img/board-meeting.jpg" class="img-fluid lazyload" alt="Clean As New® advisory board members."/></a>
                      <p class="text-center"><a href="/about-us/advisory-board">Advisory Board</a></p>
                    </div>
                  </div>
                </div>
              </div>
            
              <div class="card">
                <div class="card-header" role="tab" id="headingThree3a"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3a"
                  aria-expanded="false" aria-controls="collapseThree3a">
                  <h5 class="mb-0">News and Events </h5>
                  </a> </div>
                <div id="collapseThree3a" class="collapse" role="tabpanel" aria-labelledby="headingThree3a"
                  data-parent="#accordionEx">
                  <div class="card-body">
                    <div class="col-md-12"> <a href="about-us/news-and-events"><img src="/assets/img/1px.png" data-src="/assets/img/clean-as-new-news-events.jpg" class="img-fluid lazyload" alt="Clean As New® - Latest & Current News & Events."/></a>
                      <p class="text-center"><a href="about-us/news-and-events">News and Events</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
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