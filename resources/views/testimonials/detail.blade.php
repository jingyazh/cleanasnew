@extends('app')

@section('title')
<title>Ultrasonic Heat Exchanger Cleaning - Case Studies & Downloads</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
<div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="../testimonials.html" itemprop="item"><span itemprop="name">{{__("Testimonials")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{__("Case Studies")}}</span>
        <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
          @if(isset($reviews) && $reviews!=null)
          @foreach($reviews as $key => $value)
            <li class="nav-item" itemprop="name">
                <a class="nav-link {{$key==0 ? 'active' : ''}}" id="home-tab{{$key+1}}" data-toggle="tab" href="#home{{$key+1}}" role="tab" aria-controls="home{{$key+1}}" aria-selected="{{$key==0 ? 'true' : 'false'}}">
                  {{ $value->title }}
                </a>
              <hr>
            </li>
          @endforeach
          @endif
            <!-- <li class="nav-item" itemprop="name"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> Removal of Iron Carbonate Deposits From Heat Exchangers Used in Ammonia Production Using Tech Sonic Cleaning </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> Off-line Ultrasonic Cleaning – Restoring as Built Performance During Turnarounds</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="ConocoPhllips-tab" data-toggle="tab" href="#ConocoPhllips" role="tab" aria-controls="ConocoPhllips" aria-selected="false"> Tech Sonic Cleaning System Helps ConocoPhillips Neutralize and Clean Valves </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="Scotford-tab" data-toggle="tab" href="#Scotford" role="tab" aria-controls="Scotford" aria-selected="false">Upgrader Equipment Gets The Spa Treatment </a>
              <hr>
            </li> -->
          </ul>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 desktopNone">
          <div class="tab-content" id="myTabContent">
          @if(isset($reviews) && $reviews!=null)
          @foreach($reviews as $key => $value)
          <div class="tab-pane fade{{$key==0 ? 'show active' : ''}}" id="home{{$key+1}}" role="tabpanel" aria-labelledby="home-tab{{$key+1}}">
                <h2 style="font-weight: bold;">{{ $value->title }}</h2>
              {!! $value->embed !!}
            </div>
          @endforeach
          @endif
            <!-- <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h2>Removal of Iron Carbonate Deposits From Heat Exchangers Used in Ammonia Production Using Tech Sonic Cleaning</h2>
              <p class="text-muted"> </p>
              <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/fouling.jpg" alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." class="img-fluid polaroid lazyload">
              <p>The use of ultrasonic technology for cleaning refinery and chemical plant components has been undertaken by Tech Sonic since 2003.</p>
              <p> <a href="https://cleanasnew.com/case-studies/CF-Industries-FeCO3-Fouling-Removal-2011NR.pdf" target="_blank" class="btn btn-default">Download Case Study <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a> </p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <h2>Off-Line Ultrasonic Cleaning – Restoring as Built Performance During Turnarounds</h2>
              <p class="text-muted">Gwen van de Bilt, Field Supervisor, Waste and Cleaning, Shell Moerdijk</p>
              <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-filters-cleaned.jpg" alt="Typical Wedge Wire filter for cleaning, multiple filters can be cleaned at the same time with only a low-pressure rinse."  class="img-fluid polaroid lazyload">
              <p>In April 2013 the Shell Moerdijk Chemicals plant conducted the biggest–ever TA event in the history of the site. One of the successes we had involved employing off-line ultrasonic cleaning. </p>
              <p> <a href="https://cleanasnew.com/case-studies/Shell-Moerdijk-20130TA.pdf" target="_blank" class="btn btn-default">Download Case Study <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a> </p>
            </div>
            <div class="tab-pane fade" id="ConocoPhllips" role="tabpanel" aria-labelledby="ConocoPhllips-tab">
              <h2> Tech Sonic Cleaning System Helps ConocoPhillips Neutralize<br>
                and Clean Valve</h2>
              <p class="text-muted"> </p>
              <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-valves-cleaned.jpg" alt="Monel Plug valve after cleaning." class="img-fluid polaroid lazyload">
              <p>ConocoPhillips is one of the largest refiners in the United States. Its Ponca City, Oklahoma refiner , with a crude oil processing capacity of 187,000 per day, processes a mixture of light, medium...</p>
              <p><a href="https://cleanasnew.com/case-studies/ConocoPhllips-Valve-Service.pdf" target="_blank" class="btn btn-default">Download Case Study <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a></p>
            </div>
            <div class="tab-pane fade" id="Scotford" role="tabpanel" aria-labelledby="Scotford-tab">
              <h2> Upgrader Equipment Gets The Spa Treatment</h2>
              <p class="text-muted">Tanya Ristoff, Communications Manager, Shell Scotford</p>
              <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/scotford-upgrader-turnaround-case-study.jpg" alt="Pictured here –an exchanger bundle is lowered into an ultrasonic bath by crane." class="img-fluid polaroid lazyload">
              <p>At first glance, it looks like a big equipment soaker tub, but there’s much more than meets the eye when it comes to Tech Sonic Services’ ultrasonic wash technology. </p>
              <p><a href="https://cleanasnew.com/case-studies/Scotford-Upgrader-Turnaround.pdf" target="_blank" class="btn btn-default">Download Case Study <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a></p>
            </div> -->
          </div>
        </div>
        <!-- /.col-md-8 -->

        <!--Accordion wrapper-->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
          @if(isset($reviews) && $reviews!=null)
          @foreach($reviews as $key => $value)
          <div class="card">
            <div class="card-header" role="tab" id="headingOne{{$key+1}}"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$key+1}}" aria-expanded="{{$key==0 ? 'true' : 'false'}}"
                     aria-controls="collapseOne{{$key+1}}">
              <h5 class="mb-0"> {{ $value->title }}</h5>
              </a> </div>
            <div id="collapseOne{{$key+1}}" class="collapse {{ $key==0 ? 'show' : '' }}" role="tabpanel" aria-labelledby="headingOne{{$key+1}}"
                    data-parent="#accordionEx">
              <div class="card-body col-md-12">
                {!! $value->embed !!}
              </div>
            </div>
          </div>
          @endforeach
          @endif
          <!-- <div class="card">
            <div class="card-header" role="tab" id="headingOne1"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                     aria-controls="collapseOne1">
              <h5 class="mb-0"> Removal of Iron Carbonate Deposits From Heat Exchangers Used in Ammonia Production Using Tech Sonic Cleaning</h5>
              </a> </div>
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                    data-parent="#accordionEx">
              <div class="card-body col-md-12">
                <p class="text-muted"> </p>
                <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/fouling.jpg"  alt="A sample of the FeCO3fouling removed from the tube side of the heat exchanger." class="img-fluid polaroid lazyload">
               <p style="clear:both"><br>
                  The use of ultrasonic technology for cleaning refinery and chemical plant components has been undertaken by Tech Sonic since 2003.</p>
                <p> <a href="https://cleanasnew.com/case-studies/CF-Industries-FeCO3-Fouling-Removal-2011NR.pdf" class="btn btn-default" target="_blank">Download Case Study <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a> </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                 aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0">Off-Line Ultrasonic Cleaning – Restoring as Built Performance During Turnarounds</h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                  data-parent="#accordionEx">
              <div class="card-body col-md-12">
                <p class="text-muted">Gwen van de Bilt, Field Supervisor, Waste and Cleaning, Shell Moerdijk</p>
                <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-filters-cleaned.jpg" alt="Typical Wedge Wire filter for cleaning, multiple filters can be cleaned at the same time with only a low-pressure rinse." class="img-fluid polaroid lazyload">
                 <p style="clear:both"><br>
                  In April 2013 the Shell Moerdijk Chemicals plant conducted the biggest–ever TA event in the history of the site. One of the successes we had involved employing off-line ultrasonic cleaning. </p>
                <p> <a href="https://cleanasnew.com/case-studies/Shell-Moerdijk-20130TA.pdf" class="btn btn-default" target="_blank">Download Case Study <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a></p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree3"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                 aria-expanded="false" aria-controls="collapseThree3">
              <h5 class="mb-0">Tech Sonic Cleaning System Helps ConocoPhillips Neutralize and Clean Valve</h5>
              </a> </div>
            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
               data-parent="#accordionEx">
              <div class="card-body col-md-12">
                <p class="text-muted"> </p>
                <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-valves-cleaned.jpg" alt="Monel Plug valve after cleaning." class="img-fluid polaroid lazyload">
              <p style="clear:both"><br>
                  ConocoPhillips is one of the largest refiners in the United States. Its Ponca City, Oklahoma refiner , with a crude oil processing capacity of 187,000 per day, processes a mixture of light, medium...</p>
                <p><a href="https://cleanasnew.com/case-studies/ConocoPhllips-Valve-Service.pdf" class="btn btn-default" target="_blank">Download Case Study <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a></p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree4"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
               aria-expanded="false" aria-controls="collapseThree4">
              <h5 class="mb-0">Upgrader Equipment Gets The Spa Treatment </h5>
              </a> </div>
            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
               data-parent="#accordionEx">
              <div class="card-body col-md-12">
                <p class="text-muted">Tanya Ristoff, Communications Manager, Shell Scotford</p>
                <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/scotford-upgrader-turnaround-case-study.jpg" alt="Pictured here – an exchanger bundle is lowered into an ultrasonic bath by crane." class="img-fluid polaroid lazyload">
                <p style="clear:both"><br>
                  At first glance, it looks like a big equipment soaker tub, but there’s much more than meets the eye when it comes to Tech Sonic Services’ ultrasonic wash technology.</p>
                <p><a href="https://cleanasnew.com/case-studies/Scotford-Upgrader-Turnaround.pdf" class="btn btn-default" target="_blank">Download Case Study <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a></p>
              </div>
            </div>
          </div> -->
        </div>
        <br>
        <br>
        <!-- Accordion wrapper -->

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
 <script>   {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://cleanasnew.com/testimonials/case-studies.html"
      },
  "headline": "Removal of Iron Carbonate Deposits From Heat Exchangers Used in Ammonia Production Using Tech Sonic Cleaning",
      "image": [
        "https://cleanasnew.com/assets/img/fb-heat-exchanger-cleaning.jpg",
        "https://cleanasnew.com/assets/img/fb-heat-exchanger-bundle.jpg"
       ],
      "datePublished": "2020-04-07T01:52:00+08:00",
      "dateModified": "2020-07-17T08:38:00+08:00",
      "author": {
        "@type": "Person",
        "name": "Byron Kieser",
        "jobTitle": "Chief Science Officer for Clean As New"
      },
       "publisher": {
        "@type": "Organization",
        "name": "Clean As New",
        "logo": {
          "@type": "ImageObject",
          "url": "https://cleanasnew.com/assets/img/CLean-As-New-logo600.png"
        }
      },
      "url": "https://cleanasnew.com",
	    "sameAs" : [ "https://www.linkedin.com/in/byron-kieser-2697b91/"
    ]
    }
    </script>

   <script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection
