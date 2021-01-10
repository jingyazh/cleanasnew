@extends('app')

@section('title')
<title>{{ $siteSetting->aboutus_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->aboutus_meta_description }}">
<meta content="{{ $og->og_locale != null ? $og->og_locale : ''}}" property="og:locale">
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
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/about-us" itemprop="item"> <span itemprop="name">{{__('About Us')}}</span></a>
          <meta itemprop="position" content="1"></span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{__('News and Events')}}</span>
          <meta itemprop="position" content="2"></span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 desktopNone">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
              @if (isset($news) && $news != null)
                  @foreach ($news as $key => $value)
                  <li class="nav-item" itemprop="name">
                      <a class="nav-link {{ $key==0 ? 'active' : '' }}" id="marvels-tab" data-toggle="tab" href="#marvels{{ $key+1 }}" role="tab" aria-controls="marvels{{ $key+1 }}" aria-selected="true">
                        {!! $value->title !!}
                       </a>
                    <hr>
                  </li>

                  @endforeach
              @endif
            {{-- <li class="nav-item" itemprop="name"> <a class="nav-link active" id="marvels-tab" data-toggle="tab" href="#marvels" role="tab" aria-controls="marvels" aria-selected="true"><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> &amp; Manufacturing Marvels<sup>®</sup></a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" id="event1-tab" data-toggle="tab" href="#event1" role="tab" aria-controls="event1" aria-selected="true">Join Us – Events</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" id="webinar1-tab" data-toggle="tab" href="#webinar1" role="tab" aria-controls="webinar1" aria-selected="true">BIC Webinar </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="news2-tab" data-toggle="tab" href="#news2" role="tab" aria-controls="news2" aria-selected="false">Lunch and Learn Events With Virtual Tour </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="news3-tab" data-toggle="tab" href="#news3" role="tab" aria-controls="news3" aria-selected="false"> <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Opens New Facility In Baytown </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="news4-tab" data-toggle="tab" href="#news4" role="tab" aria-controls="news4" aria-selected="false"> <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Signs Exclusivity Agreement with Tech Sonic</a>
              <hr>
            </li> --}}
          </ul>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 desktopNone">
          <div class="tab-content" id="myTabContent">
              @if (isset($news) && $news != null)
              @foreach ($news as $key => $value)
              <div class="tab-pane fade {{ $key==0 ? 'show active' : '' }}" id="marvels{{ $key+1 }}" role="tabpanel" aria-labelledby="marvels-tab{{ $key+1 }}">
                <div>
                  <div class="card shadow-sm">
                    <div class="card-body">
                      {!! $value->embed !!}

                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              @endif
            {{-- <div class="tab-pane fade show active" id="marvels" role="tabpanel" aria-labelledby="marvels-tab">
              <div>
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h2> <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Featured on Manufacturing Marvels<sup>®</sup></h2>

                    <p>Originally broadcast on Fox Business News September 1, 2020, Manufacturing Marvels<sup>®</sup> features <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s revolutionary cleaning approach for heat exchangers and many other parts in the refinery and petrochemical industries.</p>
                    <div id="player"> </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="event1" role="tabpanel" aria-labelledby="event1-tab">
              <div>
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h2>Join Us – Events</h2>
                    <ul class="list-group list-group-flush text-muted contactListing">
                      <li class="list-group-item"><a href="https://l.feathr.co/landing-page---2020-aiche---exhibitor-clean-as-new" target="_blank" rel="noreferrer nofollow">AIChE – Virtual Conference</a> – August 17-21, 2020 </li>
                      <li class="list-group-item"> <a href="https://www.afpm.org/events/27741b00000003" target="_blank" rel="noreferrer nofollow">AFPM – Virtual Conference</a> – August 25-27, 2020</li>
                      <li class="list-group-item"><a href="https://www.heat-exchanger-world.com/hxw-americas-2020/introducing-heat-exchanger-world-conference-and-expo-americas" target="_blank" rel="noreferrer nofollow">Heat Exchanger World Conference and Expo Americas</a> – November 18-19, 2020</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="webinar1" role="tabpanel" aria-labelledby="webinar1-tab">
              <div class="scrollProfile45">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h2> BIC Webinar</h2>
                    <p class="text-muted">May 21, 2020</p>
                    <p> <a target="_blank" href="https://www.bicmagazine.com/resources/webinars/does-combining-ultrasonic-cleaning-with-hydroblasting-really/"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/bics-webinar.jpg" class="img-fluid lazyload" alt="Does combining ultrasonic cleaning with hydroblasting really make a difference?" /> </a> </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="news2" role="tabpanel" aria-labelledby="news2-tab">
              <div>
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h2>Lunch and Learn Events With Virtual Tour </h2>
                    <p class="text-muted">May 21, 2020</p>
                    <h4><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> hosting remote Lunch and Learn events with virtual tour of the Baytown facility</h4>
                    <p>Visit our facility and learn all about our technology and services from the comfort you home or office. Gather a group of your colleagues and we’ll send lunch to wherever you are, to enjoy while we present a technical introduction to <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> and Tech Sonic, with a 3D virtual tour of our new Baytown Offsite Cleaning Facility.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="news3" role="tabpanel" aria-labelledby="news3-tab">
              <div class="scrollProfile45">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h2><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Opens New Facility In Baytown</h2>
                    <p class="text-muted">June 05, 2019</p>
                    <h4>New Business Offers Fresh Take on Industrial Cleaning Services</h4>
                    <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is pleased to announce the opening of our Baytown offsite cleaning facility. Boasting 20,000 square feet of dedicated operating space, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is prepared to handle the toughest industrial cleaning challenges faced by today’s manufacturing, refining, and petrochemical owners.</p>
                    <p>Our Baytown facility is just the first of many to provide this technology throughout the USA. Our second facility is scheduled to open in Geismar Louisiana in early 2020. </p>
                    <blockquote>
                      <p>Opening this offsite cleaning facility in such an accessible location will allow us to better serve our growing customer base and change how people view industrial cleaning, while also creating a new standard of clean. says Donald Glover, Vice President of Operations</p>
                    </blockquote>
                    <h4>Innovative Services Drive Positive Customer Impact</h4>
                    <p>Powered by Tech Sonic’s game -changing proprietary and patented technologies, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> provides offsite cleaning for heat exchangers and other process components, bringing them to “like-new” performance and efficiency levels. </p>
                    <p>We welcome the opportunity to demonstrate the value of a cleaner, faster, safer, and greener solution. Come in and see for yourself at 1303 Thompson Park Dr., Baytown, TX 77521.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="news4" role="tabpanel" aria-labelledby="news4-tab">
              <div class="scrollProfile45">
                <div class="card shadow-sm">
                  <div class="card-body">
                    <h2><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Signs Exclusivity
                      Agreement with Tech Sonic</h2>
                    <p class="text-muted">May 29, 2018</p>
                    <p> We are proud to announce that on March 26, 2018, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> signed an exclusivity agreement with Tech Sonic to deliver its superior cleaning solution to the United States. </p>
                    <p>For years, Tech Sonic’s clients in the refinery and petrochemical industries have experienced excellent results from utilizing its proprietary and patented technology. This game changing technology will be a vital component in the development of <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s offsite cleaning facilities. </p>
                    <blockquote>
                      <p>"The first <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> offsite cleaning facility will be located in Baytown, Texas, and is expected to be open for business in May 2019." says Donald Glover, Vice President of Operations</p>
                    </blockquote>
                    <p>Powered by Tech Sonic’s technology, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> will be offering cleaning services for heat exchangers and other process components, returning them to a “Clean-As-New” condition, resulting in reduced energy consumption, increased production and longer maintenance intervals, all of which will have a significant positive impact on a plant’s bottom line.</p>
                    <p>We believe that using <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s cleaning services will result in significant improvements to your plants efficiencies and we welcome the opportunity to demonstrate the value of a cleaner, faster, safer and greener solution.</p>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>

        <!--Accordion wrapper-->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
            @if (isset($news)  && $news != null)
            @foreach ($news as $key => $value)
            <div class="card">
                <div class="card-header" role="tab" id="headingOne{{ $key+1 }}">
                  <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{ $key+1 }}" aria-expanded="true" aria-controls="collapseOne{{ $key+1 }}">
                    {!! $value->title !!}
                  </a>
                </div>
                <div id="collapseOne{{ $key+1 }}" class="collapse {{ $key==0 ? 'show' : '' }}" role="tabpanel" aria-labelledby="headingOne{{ $key+1 }}" data-parent="#accordionEx">
                  <div class="card-body">
                    <div class="col-md-12">
                      {!! $value->embed !!}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

            @endif
          {{-- <div class="card">
            <div class="card-header" role="tab" id="headingOne11"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11">
                <h5 class="mb-0"><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> & Manufacturing Marvels<sup>®</sup></h5>
              </a> </div>
            <div id="collapseOne11" class="collapse show" role="tabpanel" aria-labelledby="headingOne11" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>Originally broadcast on Fox Business News September 1, 2020, Manufacturing Marvels<sup>®</sup> features <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s revolutionary cleaning approach for heat exchangers and many other parts in the refinery and petrochemical industries.</p>
                  <div class="video-container2">
                    <iframe src="https://www.youtube.com/embed/rcM1fKiADXU?rel=0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingOne111"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne111" aria-expanded="true" aria-controls="collapseOne111">
                <h5 class="mb-0">Join Us - Events</h5>
              </a> </div>
            <div id="collapseOne111" class="collapse" role="tabpanel" aria-labelledby="headingOne111" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <ul class="list-group list-group-flush text-muted contactListing">
                    <li class="list-group-item"><a href="https://l.feathr.co/landing-page---2020-aiche---exhibitor-clean-as-new" target="_blank" rel="noreferrer nofollow">AIChE – Virtual Conference</a> – August 17-21, 2020 </li>
                    <li class="list-group-item"> <a href="https://www.afpm.org/events/27741b00000003" target="_blank" rel="noreferrer nofollow">AFPM – Virtual Conference</a> – August 25-27, 2020</li>
                    <li class="list-group-item"><a href="https://www.heat-exchanger-world.com/hxw-americas-2020/introducing-heat-exchanger-world-conference-and-expo-americas" target="_blank" rel="noreferrer nofollow">Heat Exchanger World Conference and Expo Americas</a> – November 18-19, 2020</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingOne19"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne19" aria-expanded="true" aria-controls="collapseOne19">
                <h5 class="mb-0">BIC Webinar</h5>
              </a> </div>
            <div id="collapseOne19" class="collapse" role="tabpanel" aria-labelledby="headingOne19" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p class="text-muted">May 21, 2020</p>
                  <p> <a target="_blank" href="https://www.bicmagazine.com/resources/webinars/does-combining-ultrasonic-cleaning-with-hydroblasting-really/"> <img class="img-fluid lazyload" src="https://cleanasnew.com/assets/img/1px.png" data-src="../assets/img/bics-webinar.jpg" alt="Does combining ultrasonic cleaning with hydroblasting really make a difference?" /> </a> </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                <h5 class="mb-0">Lunch And Learn Events With Virtual Tour</h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p class="text-muted">May 21, 2020</p>
                  <h4><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> hosting remote Lunch and Learn events with virtual tour of the Baytown facility</h4>
                  <p>Visit our facility and learn all about our technology and services from the comfort you home or office. Gather a group of your colleagues and we’ll send lunch to wherever you are, to enjoy while we present a technical introduction to <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> and Tech Sonic, with a 3D virtual tour of our new Baytown Offsite Cleaning Facility.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingOne3"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                <h5 class="mb-0"><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Opens New Facility In Baytown</h5>
              </a> </div>
            <div id="collapseOne3" class="collapse" role="tabpanel" aria-labelledby="headingOne3" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p class="text-muted">June 05, 2019</p>
                  <h6>New Business Offers Fresh Take on Industrial Cleaning Services</h6>
                  <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is pleased to announce the opening of our Baytown offsite cleaning facility. Boasting 20,000 square feet of dedicated operating space, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is prepared to handle the toughest industrial cleaning challenges faced by today’s manufacturing, refining, and petrochemical owners.</p>
                  <p>Our Baytown facility is just the first of many to provide this technology throughout the USA. Our second facility is scheduled to open in Geismar Louisiana in early 2020. </p>
                  <blockquote>
                    <p class="quotation">Opening this offsite cleaning facility in such an accessible location will allow us to better serve our growing customer base and change how people view industrial cleaning, while also creating a new standard of clean. - says Donald Glover, Vice President of Operations</p>
                  </blockquote>
                  <h6>Innovative Services Drive Positive Customer Impact</h6>
                  <p>Powered by Tech Sonic’s game -changing proprietary and patented technologies, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> provides offsite cleaning for heat exchangers and other process components, bringing them to “like-new” performance and efficiency levels. </p>
                  <p>We welcome the opportunity to demonstrate the value of a cleaner, faster, safer, and greener solution. Come in and see for yourself at 1303 Thompson Park Dr., Baytown, TX 77521.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo4"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                <h5 class="mb-0"><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Signs Exclusivity
                  Agreement with Tech Sonic</h5>
              </a> </div>
            <div id="collapseTwo4" class="collapse" role="tabpanel" aria-labelledby="headingTwo4" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p class="text-muted">May 29, 2018</p>
                  <p> We are proud to announce that on March 26, 2018, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> signed an exclusivity agreement with Tech Sonic to deliver its superior cleaning solution to the United States. </p>
                  <p>For years, Tech Sonic’s clients in the refinery and petrochemical industries have experienced excellent results from utilizing its proprietary and patented technology. This game changing technology will be a vital component in the development of <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s offsite cleaning facilities. </p>
                  <blockquote>
                    <p class="quotation">The first <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> offsite cleaning facility will be located in Baytown, Texas, and is expected to be open for business in May 2019.</p>
                  </blockquote>
                  <p>Powered by Tech Sonic’s technology, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> will be offering cleaning services for heat exchangers and other process components, returning them to a “Clean-As-New” condition, resulting in reduced energy consumption, increased production and longer maintenance intervals, all of which will have a significant positive impact on a plant’s bottom line.</p>
                  <p>We believe that using <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s cleaning services will result in significant improvements to your plants efficiencies and we welcome the opportunity to demonstrate the value of a cleaner, faster, safer and greener solution.</p>
                </div>
              </div>
            </div>
          </div> --}}
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
<script>
  // https://developers.google.com/youtube/iframe_api_reference?hl=ru
  const scriptTag = document.createElement('script');
  scriptTag.src = "https://www.youtube.com/iframe_api";
  const firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(scriptTag, firstScriptTag);

  let player;

  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      videoId: 'rcM1fKiADXU',
      width: '797',
      height: '450',
      playerVars: {
        'autoplay': 1,
        'controls': 1,
        'autohide': 0,
        'rel': 0
      },
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }

  function onPlayerReady(event) {}

  function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING) {}
  }
</script>
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>

@endsection
