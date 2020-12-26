@extends('app')

@section('title')
<title>Heat Exchanger Cleaning: Your Questions Answered - Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="https://cleanasnew.com/"  itemprop="item"> <span itemprop="name">{{__("Home")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name"> ESG</span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row"> <a href="esg/how-better-cleaning-can-help">
        <div class="front-picture-esg desktopNone clearfix" id="esg2">
          <h2> <span>ESG</span> <br>
            Sustainability</h2>
          <div class="des">
            <p> <i class="fa fa-newspaper-o padding15" aria-hidden="true"></i> ESG: How Better Cleaning Can Help</p>
          </div>
        </div>
        </a>
        <div class="col-md-4 mb-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
          @if(isset($esges) && $esges != null)
          @foreach($esges as $key => $value)
          <li class="nav-item" itemprop="name"> 
            <a class="nav-link {{$key==0 ? 'active' : ''}}" id="header-tab{{$key+1}}" data-toggle="tab" href="#header{{$key+1}}" role="tab" aria-controls="header{{$key+1}}" aria-selected="{{ $key==0 ?  'true' : 'false' }}"> 
            {{$value->title}}
            </a>
              <hr>
          </li>
          @endforeach
          @endif
            <!-- <li class="nav-item" itemprop="name"> <a class="nav-link active" id="header1-tab" data-toggle="tab" href="#header1" role="tab" aria-controls="header1" aria-selected="true"> Our Commitment To The Environmental </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="header2-tab" data-toggle="tab" href="#header2" role="tab" aria-controls="header2" aria-selected="false"> Improved Sustainability Through Better Cleaning</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="header3-tab" data-toggle="tab" href="#header3" role="tab" aria-controls="header3" aria-selected="false"> Taking Care </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="header4-tab" data-toggle="tab" href="#header4" role="tab" aria-controls="header4" aria-selected="false">Safety Is In Our DNA </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="header5-tab" data-toggle="tab" href="#header5" role="tab" aria-controls="header5" aria-selected="false">CHWMEG Facility Review</a>
              <hr>
            </li> -->
          </ul>
        </div>
        <div class="col-md-8 float-left desktopNone">
          <div class="tab-content" id="myTabContent">
          @if(isset($esges) && $esges != null)
          @foreach($esges as $key => $value)
          <div class="tab-pane fade {{$key==0 ? 'show active' : ''}}" id="header{{$key+1}}" role="tabpanel" aria-labelledby="header-tab{{$key+1}}">
            {!! $value->embed !!}    
          </div>
          @endforeach
          @endif
            <!-- <div class="tab-pane fade show active" id="header1" role="tabpanel" aria-labelledby="header1-tab">
              <div class="col-4 float-left"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/waterfall.jpg" class="img-fluid polaroid lazyload" 
                alt="Waterfall in the forest."/> </div>
              <div class="col-8 float-left pre-scrollable">
                <h2 class="text-capitalize">Our Green Approach To Cleaning Can Help You Meet Your Environmental Targets</h2>
                <h4>Water:</h4>
                <p> <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> uses Tech Sonic’s Green Technology, automated hydroblasting and a proprietary water treatment and recycling system to establish a new level of environmental responsibility. </p>
                <p>Our process uses 95% less water in cleaning heat exchangers and parts at our facilities, and up to 75% less water when done on your washpad.</p>
                <p> This saves millions of gallons of water in a typical turnaround, and every gallon of water saved is one less gallon of wastewater generated.</p>
                <h4>Energy:</h4>
                <p> By providing our clients with heat exchangers and parts which are cleaned to like new performance levels, our client save energy because of better heat transfer and lower liquid pumping costs. Saving energy means their process is more efficient. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="header2" role="tabpanel" aria-labelledby="header2-tab">
              <div class="col-4 float-left"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/refinery.jpg" class="img-fluid polaroid lazyload" 
              alt="A modern, illuminated refinery is visible at dusk. "/> </div>
              <div class="col-8 float-left">
                <h2 class="text-capitalize">Implementation Of New Green Technology</h2>
                <p>Switching to <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is a demonstration of a commitment to environmental sustainability. By adopting a better cleaning process, plants can not only save $100’s M USD in energy costs, but can simultaneously claim the benefits of a lower carbon footprint.</p>
                <h4> Investing In Research</h4>
                <p>At a time when the petrochemical industry is seen as the enemy, investing in <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s technology provides not only evidence of your plant’s commitment to sustainability, but the incredible savings make it easier to spend more on research to drive further improvements. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="header3" role="tabpanel" aria-labelledby="header3-tab">
              <div class="col-4 float-left"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/saving-the-environment.jpg" class="img-fluid polaroid lazyload" alt="Two women, cleaning together in public park, saving the environment."/> </div>
              <div class="col-8 scrollEsg float-left">
                <h2 class="text-captialize">Our Employees Are Our Partners</h2>
                <h4>In an increasingly gig-economy we are taking a different approach. </h4>
                <p>The Tech Sonic group of companies provides all our employees with stable, reliable income, and encourages investment in the company by our employees through a variety of company supported programs. Within all our companies, 100% of employees are owners and benefit directly from the success of the business. </p>
                <p>Our employees work hard because it’s their company and we encourage them to balance that with life outside work, and provide a work environment that encourages innovation, engagement and fun. </p>
              </div>
            </div>
            <div class="tab-pane fade " id="header4" role="tabpanel" aria-labelledby="header4-tab">
              <div class="col-4 float-left"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/inside-the-control-room3.jpg" class="img-fluid polaroid lazyload" alt="Control room workers and shift leader."/> </div>
              <div class="col-8 float-left pre-scrollable">
                <h2 class="text-capitalize"> A Safe Work Environment Begins From The Ground Up</h2>
                <p>Our process and our entire facility have been built around safety. You can see it in our facility design, and in our processes. We have taken safety to the max, engineering out risk to both our workers and your equipment. </p>
                <h4>Our processes all involve steps to ensure that safety is a priority on every job.</h4>
                <p> In Tech Sonic’s 10 year history of providing ultrasonic cleaning services, there has never been a recordable incident, nor has there ever been a reportable environmental event. Our goal at <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is to even better that record! </p>
              </div>
            </div>
            <div class="tab-pane fade" id="header5" role="tabpanel" aria-labelledby="header5-tab">
              <div class="col-4 float-left"><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/chwmeg-logo-large.png?v=20200918" class="img-fluid lazyload" alt="The CHWMEG Facility Review Program (FRP) conducts worldwide reviews of facilities that recycle, treat, store, and/or dispose of waste or spent materials."/> </div>
              <div class="col-8 float-left">
                <h2 class="text-capitalize">CHWMEG Facility Review</h2>
                <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is proud to support CHWMEG, a non-profit association globally promoting responsible waste stewardship. </p>
                <p> As a part of our support of the program we have completed a facility review under the 2020 CHWMEG Facility Review Program. </p>
                <p> For more information <a href="https://chwmeg.org/index.asp" target="_blank">https://chwmeg.org/index.asp</a>. </p>
              </div>
            </div> -->
          </div>
        </div>
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
        @if(isset($esges) && $esges != null)
          @foreach($esges as $key => $value)
          <div class="card">
            <div class="card-header" role="tab" id="headingOne{{$key+1}}"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$key+1}}" aria-expanded="{{$key==0 ? 'true' : 'false'}}" aria-controls="collapseOne{{$key+1}}">
              <h5 class="mb-0"> {{$value->title}} </h5>
              </a> </div>
            <div id="collapseOne{{$key+1}}" class="collapse {{$key==0 ? 'show' : ''}}" role="tabpanel" aria-labelledby="headingOne{{$key+1}}" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12"> 
                  {!! $value->embed !!}
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @endif
          <!-- <div class="card">
            <div class="card-header" role="tab" id="headingOne13"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne13" aria-expanded="true" aria-controls="collapseOne13">
              <h5 class="mb-0">ESG - Sustainability </h5>
              </a> </div>
            <div id="collapseOne13" class="collapse show" role="tabpanel" aria-labelledby="headingOne13" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/esg-sustainability2-large.jpg?v=20201005" class="img-fluid polaroid lazyload" alt="ESG - Sustainability."/>
                  <p> <i class="fa fa-newspaper-o" aria-hidden="true"></i> <a href="https://cleanasnew.com/esg/how-better-cleaning-can-help">ESG: How Better Cleaning Can Help </a> </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingOne10"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne10" aria-expanded="true" aria-controls="collapseOne10">
              <h5 class="mb-0">Our Commitment To The Environmental</h5>
              </a> </div>
            <div id="collapseOne10" class="collapse" role="tabpanel" aria-labelledby="headingOne10" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2>Our Green Approach To Cleaning Can Help You Meet Your Environmental Targets</h2>
                  <h4>Water:</h4>
                  <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/waterfall.jpg" class="img-fluid polaroid lazyload" alt="Waterfall in the forest."/>
                  <p class="clearfix"> <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> uses Tech Sonic’s Green Technology, automated hydroblasting and a proprietary water treatment and recycling system to establish a new level of environmental responsibility. Our process uses 95% less water in cleaning heat exchangers and parts at our facilities, and up to 75% less water when done on your washpad. This saves millions of gallons of water in a typical turnaround, and every gallon of water saved is one less gallon of wastewater generated.</p>
                  <h4>Energy:</h4>
                  <p> By providing our clients with heat exchangers and parts which are cleaned to like new performance levels, our client save energy because of better heat transfer and lower liquid pumping costs. Saving energy means their process is more efficient. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0"> Improved Sustainability Through Better Cleaning</h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="text-capitalize">Implementation Of New Green Technology</h2>
                  <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/refinery.jpg" class="img-fluid polaroid lazyload" alt="A modern, illuminated refinery is visible at dusk. "/>
                  <p>Switching to <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is a demonstration of a commitment to environmental sustainability. By adopting a better cleaning process, plants can not only save $100’s M USD in energy costs, but can simultaneously claim the benefits of a lower carbon footprint.</p>
                  <h4> Investing In Research</h4>
                  <p>At a time when the petrochemical industry is seen as the enemy, investing in <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s technology provides not only evidence of your plant’s commitment to sustainability, but the incredible savings make it easier to spend more on research to drive further improvements. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree3a"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3a" aria-expanded="false" aria-controls="collapseThree3a">
              <h5 class="mb-0">Taking Care</h5>
              </a> </div>
            <div id="collapseThree3a" class="collapse" role="tabpanel" aria-labelledby="headingThree3a" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="text-captialize">Our Employees Are Our Partners</h2>
                  <h4>In an increasingly gig-economy we are taking a different approach. </h4>
                  <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/saving-the-environment.jpg" class="img-fluid polaroid lazyload" alt="Two women, cleaning together in public park, saving the environment. "/>
                  <p>The Tech Sonic group of companies provides all our employees with stable, reliable income, and encourages investment in the company by our employees through a variety of company supported programs. Within all our companies, 100% of employees are owners and benefit directly from the success of the business. </p>
                  <p>Our employees work hard because it’s their company and we encourage them to balance that with life outside work, and provide a work environment that encourages innovation, engagement and fun. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree4"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
              <h5 class="mb-0">Safety Is In Our DNA</h5>
              </a> </div>
            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="text-capitalize"> A Safe Work Environment Begins From The Ground Up</h2>
                  <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/inside-the-control-room3.jpg" class="img-fluid polaroid lazyload" alt="Control room workers and shift leader."/>
                  <p>Our process and our entire facility have been built around safety. You can see it in our facility design, and in our processes. We have taken safety to the max, engineering out risk to both our workers and your equipment. </p>
                  <h4>Our processes all involve steps to ensure that safety is a priority on every job.</h4>
                  <p> In Tech Sonic’s 10 year history of providing ultrasonic cleaning services, there has never been a recordable (or serious) injury, nor has there ever been a reportable environmental event. Our goal at <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is to even better that record! </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree5"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
              <h5 class="mb-0">CHWMEG Facility Review</h5>
              </a> </div>
            <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree5" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/chwmeg-logo-large.png?v=20200918" class="img-fluid lazyload" alt="The CHWMEG Facility Review Program (FRP) conducts worldwide reviews of facilities that recycle, treat, store, and/or dispose of waste or spent materials."/>
                  <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is proud to support CHWMEG, a non-profit association globally promoting responsible waste stewardship. </p>
                  <p> As a part of our support of the program we have completed a facility review under the 2020 CHWMEG Facility Review Program. </p>
                  <p> For more information <a href="https://chwmeg.org/index.asp" target="_blank">https://chwmeg.org/index.asp</a>. </p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <br>
        <br>
      </div>
    </div>
  </div>
</main>
@include('layout.footer')
@endsection

@section('page-script')
<script>
 var giftofspeed2=document.createElement('link');giftofspeed2.rel='stylesheet';giftofspeed2.href='https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap';giftofspeed2.type='text/css';var godefer2=document.getElementsByTagName('link')[0];godefer2.parentNode.insertBefore(giftofspeed2,godefer2);var giftofspeed3=document.createElement('link');giftofspeed3.rel='stylesheet';giftofspeed3.href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';giftofspeed3.type='text/css';var godefer3=document.getElementsByTagName('link')[0];godefer3.parentNode.insertBefore(giftofspeed3, godefer3);
</script> 
<script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script>window.jQuery || document.write('<script src="https://cleanasnew.com/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script> 
<script>$('.dropdown').dropdown();</script>
  <!-- <script>
    if ('loading' in HTMLImageElement.prototype) {
      const images = document.querySelectorAll("img.lazyload");
      images.forEach(img => {
        img.src = img.dataset.src;
      });
    } else {
      // Dynamically import the LazySizes library
      let script = document.createElement("script");
      script.async = true;
      script.src =
        "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js";
      document.body.appendChild(script);
    }
  </script> -->
@endsection