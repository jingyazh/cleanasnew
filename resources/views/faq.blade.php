@extends('app')

@section('title')
<title>Heat Exchanger Cleaning: Your Questions Answered - Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
<div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p>
		  <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
		  <a href="https://cleanasnew.com/"  itemprop="item">
			  <span itemprop="name">{{__("Home")}}</span></a>
			  <meta itemprop="position" content="1">
		  </span> &#8250; 
		  <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
			  <span itemprop="name">FAQ</span> 
			  <meta itemprop="position" content="2">
		  </span>
	 </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container contentbg">
      <div class="row">
        <div class="col-md-4 mb-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
          @if(isset($faqs) && $faqs != null)
          @foreach($faqs as $key => $value)
          <li class="nav-item" itemprop="name"> 
            <a class="nav-link {{ $key==0 ? 'active show' : '' }}" id="id{{$key+1}}-tab" data-toggle="tab" href="#id{{$key+1}}" role="tab" aria-controls="id{{$key+1}}" aria-selected="{{ $key==0 ? 'true' : 'false' }}">
                {!! $value->title !!}
            </a>
              <hr>
          </li>
          @endforeach
          @endif
            <!-- <li class="nav-item" itemprop="name"> <a class="nav-link active" id="expensive-tab" data-toggle="tab" href="#expensive" role="tab" aria-controls="expensive" aria-selected="true">Is <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> more expensive than cleaning on your own Wash Pad?</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" id="exchanger-tab" data-toggle="tab" href="#exchanger" role="tab" aria-controls="exchanger" aria-selected="true">How does Tech Sonic Cleaning work? </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="Compablocs-tab" data-toggle="tab" href="#Compablocs" role="tab" aria-controls="Compablocs
                " aria-selected="false"> Does Tech Sonic Cleaning eliminate hydroblasting? </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="Valves-tab" data-toggle="tab" href="#Valves" role="tab" aria-controls="Valves" aria-selected="false">What types of fouling can be cleaned from my parts?</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="Filters-tab" data-toggle="tab" href="#Filters" role="tab" aria-controls="Filters" aria-selected="false">What happens to the waste generated during cleaning? </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="StructuredPacking-tab" data-toggle="tab" href="#StructuredPacking" role="tab" aria-controls="StructuredPacking" aria-selected="false">How much water is used? </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="UnstructuredPacking-tab" data-toggle="tab" href="#UnstructuredPacking" role="tab" aria-controls="UnstructuredPacking" aria-selected="false">Is the Tech Sonic Cleaning process safe on metals?</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="PumpRotors-tab" data-toggle="tab" href="#PumpRotors" role="tab" aria-controls="PumpRotors" aria-selected="false">How long does it take to clean a heat exchanger? </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="Scaffolding-tab" data-toggle="tab" href="#Scaffolding" role="tab" aria-controls="Scaffolding
                " aria-selected="false">How do I know if my part is suitable for Tech Sonic Cleaning? </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="ColumnTrays-tab" data-toggle="tab" href="#ColumnTrays" role="tab" aria-controls="ColumnTrays" aria-selected="false">How clean can I expect my part to be when returned?</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="SealPods-tab" data-toggle="tab" href="#SealPods" role="tab" aria-controls="SealPods" aria-selected="false"> Can you clean aluminum parts? </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> I’ve always heard that cavitation is bad – why is it used in ultrasonic cleaning?</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="cleaning-tab" data-toggle="tab" href="#cleaning" role="tab" aria-controls="cleaning" aria-selected="false">What cleaning fluid is used? </a>
              <hr>
            </li> -->
          </ul>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 desktopNone">
          <div class="tab-content" id="myTabContent" itemscope itemtype="https://schema.org/FAQPage">
            @if(isset($faqs) && $faqs != null)
            @foreach($faqs as $key => $value)
            <div class="tab-pane fade show {{ $key==0 ? 'active show' : '' }}" id="id{{$key+1}}" role="tabpanel" aria-labelledby="id{{$key+1}}-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <div style="font-weight: bold;">{!! $value->title !!}</div>
              {!! $value->embed !!}
              <!-- <a href="/posts/washpad-hydroblasting-vs-cleanasnew">Read more &#8594;</a></p> -->
            </div>
            @endforeach
            @endif
            <!-- <div class="tab-pane fade show active" id="expensive" role="tabpanel" aria-labelledby="expensive-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">Is <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> more expensive than cleaning on your own wash pad?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text"> No, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is <u>less expensive</u> than cleaning on your own wash pad.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                  <a href="/posts/washpad-hydroblasting-vs-cleanasnew">Read more &#8594;</a></p>
              </div>
            </div>
            <div class="tab-pane fade show" id="exchanger" role="tabpanel" aria-labelledby="exchanger-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">How does Tech Sonic Cleaning work?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text"> Tech Sonic Cleaning utilizes a combination of immersion in a patented ultrasonic bath with specifically designed aqueous chemistry, process and hydroblasting to gently, quickly and completely remove fouling from parts. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="Compablocs" role="tabpanel" aria-labelledby="Compablocs-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">Does Tech Sonic Cleaning eliminate hydroblasting?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text"> Not completely. We use a combination of low- and high-pressure rinsing techniques as a part of the Tech Sonic Cleaning process. Tech Sonic Cleaning does reduce the amount of high-pressure “hydroblasting” required, generally by over 75%. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="Valves" role="tabpanel" aria-labelledby="Valves-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">What types of fouling can be cleaned from my parts?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">We can address most of the common fouling found in refineries and chemical plants through the choice of suitable bath chemistry and procedure. This includes both hydrocarbon fouling and inorganic scales. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="Filters" role="tabpanel" aria-labelledby="Filters-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">What happens to the waste generated during cleaning?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">When you send us a part to be cleaned, we accept the material on it as a component of the part, and we are the waste generator during cleaning.  All waste removed from your parts is then handled and disposed of according to regulations and good environmental practices. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="StructuredPacking" role="tabpanel" aria-labelledby="StructuredPacking-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name"> How much water is used?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">On average, the Tech Sonic Cleaning process uses less than 4000 gal per heat exchanger, and generally, 95% less water than traditional hydroblasting. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="UnstructuredPacking" role="tabpanel" aria-labelledby="UnstructuredPacking-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">Is the Tech Sonic Cleaning process safe on metals?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text"> Yes, we have designed our systems, chemistries and processes to be safe on all metallurgies. We always ask about the materials of construction and we tailor our cleaning process to be safe on your parts. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="PumpRotors" role="tabpanel" aria-labelledby="PumpRotors-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">How long does it take to clean a heat exchanger?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">Most heat exchangers will be cleaned in one shift. Because of our process, we can be cleaning more than a single exchanger at a time, which reduces the net cleaning time per exchanger even further. At our facility, we can clean between 2-6 heat exchangers per day. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="Scaffolding" role="tabpanel" aria-labelledby="Scaffolding-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">How do I know if my part is suitable for Tech Sonic Cleaning?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">Any carbon steel, stainless steel or other corrosion resistant alloy, fouled with hydrocarbon or inorganic fouling may be suitable for Tech Sonic Cleaning. It must also be possible to immerse the entire part into the ultrasonic bath, which has a size limitation of 32’ x 76”, with a maximum weight of approximately 35 tons (part + fouling). </p>
              </div>
            </div>
            <div class="tab-pane fade" id="ColumnTrays" role="tabpanel" aria-labelledby="ColumnTrays-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">How clean can I expect my part to be when returned?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">We guarantee 95% or better – that is your part will be cleaned to bare metal on 95% or more of its surface area. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="SealPods" role="tabpanel" aria-labelledby="SealPods-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">Can you clean aluminum parts?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">Maybe. We generally do not clean any parts with aluminum fins, but we do clean lots of other parts made from aluminum. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">I’ve always heard that cavitation is bad – why is it used in ultrasonic cleaning?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">The cavitation normally associated with damage to pumps and valves is concentrated and constant in some liquid flows and engineers try to design to avoid the potential erosion by this cavitation. In our baths, cavitation is random and distributed over the entire surface of the part, providing a gentle “scrubbing” action that loosens fouling and makes the cleaning of even the hardest to reach nooks and crannies fast and complete, without damaging the part. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="cleaning" role="tabpanel" aria-labelledby="cleaning-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">What cleaning fluid is used?</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                <p itemprop="text">We use a variety of proprietary aqueous cleaning solutions – including degreasers and organic acids - specifically chosen for the fouling on your parts. Our chemistries are safe, environmentally friendly and proven effective over 15 years of cleaning thousands of parts of all types, shapes and sizes. </p>
              </div>
            </div> -->
          </div>
        </div>
        <!-- /.col-md-8 --> 
        
        <!--Accordion wrapper-->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">

        @if(isset($faqs) && $faqs != null)
        @foreach($faqs as $key => $value)
        <div class="card">
            <div class="card-header" role="tab" id="headingOne{{$key+1}}"> 
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$key+1}}" aria-expanded="true"
                aria-controls="collapseOne{{$key+1}}">
              {!! $value->title !!}
              </a> 
            </div>
            <div id="collapseOne{{$key+1}}" class="collapse {{ $key==0 ?  'show' : '' }}" role="tabpanel" aria-labelledby="headingOne{{$key+1}}"
                data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  {!! $value->embed !!}
                  <!-- <p><a href="/posts/washpad-hydroblasting-vs-cleanasnew">Read more &#8594;</a> </p> -->
                </div>
              </div>
            </div>
          </div>
        @endforeach

        @endif
          <!-- <div class="card">
            <div class="card-header" role="tab" id="headingOne13"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne13" aria-expanded="true"
                aria-controls="collapseOne13">
              <h5 class="mb-0">Is <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> more expensive than cleaning on your own wash pad?</h5>
              </a> </div>
            <div id="collapseOne13" class="collapse show" role="tabpanel" aria-labelledby="headingOne13"
                data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p itemprop="text">No, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is <u>less expensive</u> than cleaning on your own wash pad.</p>
                  <p><a href="/posts/washpad-hydroblasting-vs-cleanasnew">Read more &#8594;</a> </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingOne1"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
              <h5 class="mb-0">How does Tech Sonic Cleaning work?</h5>
              </a> </div>
            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
                data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p> Tech Sonic Cleaning utilizes a combination of immersion in a patented ultrasonic bath with specifically designed aqueous chemistry, process and hydroblasting to gently, quickly and completely remove fouling from parts. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
               aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0"> Does Tech Sonic Cleaning eliminate hydroblasting? </h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
              data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p> Not completely. We use a combination of low- and high-pressure rinsing techniques as a part of the Tech Sonic Cleaning process. Tech Sonic Cleaning does reduce the amount of high-pressure “hydroblasting” required, generally by over 75%. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree3"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
                aria-expanded="false" aria-controls="collapseThree3">
              <h5 class="mb-0">What types of fouling can be cleaned from my parts? </h5>
              </a> </div>
            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
              data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>We can address most of the common fouling found in refineries and chemical plants through the choice of suitable bath chemistry and procedure. This includes both hydrocarbon fouling and inorganic scales. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree4"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
               aria-expanded="false" aria-controls="collapseThree4">
              <h5 class="mb-0">What happens to the waste generated during cleaning? </h5>
              </a> </div>
            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
              data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>When you send us a part to be cleaned, we accept the material on it as a component of the part, and we are the waste generator during cleaning.  All waste removed from your parts is then handled and disposed of according to regulations and good environmental practices. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo5"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo5"
               aria-expanded="false" aria-controls="collapseTwo5">
              <h5 class="mb-0">How much water is used? </h5>
              </a> </div>
            <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo5"
                data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>On average, the Tech Sonic Cleaning process uses less than 4000 gal per heat exchanger, and generally, 95% less water than traditional hydroblasting. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree6"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6"
               aria-expanded="false" aria-controls="collapseThree6">
              <h5 class="mb-0"> Is the Tech Sonic Cleaning process safe on metals? </h5>
              </a> </div>
            <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6"
              data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p> Yes, we have designed our systems, chemistries and processes to be safe on all metallurgies. We always ask about the materials of construction and we tailor our cleaning process to be safe on your parts. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree7"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree7"
                aria-expanded="false" aria-controls="collapseThree7">
              <h5 class="mb-0">How long does it take to clean a heat exchanger?</h5>
              </a> </div>
            <div id="collapseThree7" class="collapse" role="tabpanel" aria-labelledby="headingThree7"
               data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>Most heat exchangers will be cleaned in one shift. Because of our process, we can be cleaning more than a single exchanger at a time, which reduces the net cleaning time per exchanger even further. At our facility, we can clean between 2-6 heat exchangers per day. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo8"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo8" 
               aria-expanded="false" aria-controls="collapseTwo8">
              <h5 class="mb-0">How do I know if my part is suitable for Tech Sonic Cleaning?</h5>
              </a> </div>
            <div id="collapseTwo8"
            class="collapse" role="tabpanel" aria-labelledby="headingTwo8"
                 data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>Any carbon steel, stainless steel or other corrosion resistant alloy, fouled with hydrocarbon or inorganic fouling may be suitable for Tech Sonic Cleaning. It must also be possible to immerse the entire part into the ultrasonic bath, which has a size limitation of 32’ x 76”, with a maximum weight of approximately 35 tons (part + fouling). </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree9"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree9"
               aria-expanded="false" aria-controls="collapseThree9">
              <h5 class="mb-0">How clean can I expect my part to be when returned?</h5>
              </a> </div>
            <div id="collapseThree9"
               class="collapse" role="tabpanel" aria-labelledby="headingThree9"
                data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>We guarantee 95% or better – that is your part will be cleaned to bare metal on 95% or more of its surface area. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree10"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree10"
               aria-expanded="false" aria-controls="collapseThree10">
              <h5 class="mb-0"> Can you clean aluminum parts? </h5>
              </a> </div>
            <div id="collapseThree10" class="collapse" role="tabpanel" aria-labelledby="headingThree10"
               data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>Maybe. We generally do not clean any parts with aluminum fins, but we do clean lots of other parts made from aluminum. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree11"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree11"
               aria-expanded="false" aria-controls="collapseThree11">
              <h5 class="mb-0"> I’ve always heard that cavitation is bad – why is it used in ultrasonic cleaning? </h5>
              </a> </div>
            <div id="collapseThree11" class="collapse" role="tabpanel" aria-labelledby="headingThree11"
                 data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>The cavitation normally associated with damage to pumps and valves is concentrated and constant in some liquid flows and engineers try to design to avoid the potential erosion by this cavitation. In our baths, cavitation is random and distributed over the entire surface of the part, providing a gentle “scrubbing” action that loosens fouling and makes the cleaning of even the hardest to reach nooks and crannies fast and complete, without damaging the part. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree12"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree12"
                aria-expanded="false" aria-controls="collapseThree12">
              <h5 class="mb-0">What cleaning fluid is used? </h5>
              </a> </div>
            <div id="collapseThree12" class="collapse" role="tabpanel" aria-labelledby="headingThree12"
               data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <p>We use a variety of proprietary aqueous cleaning solutions – including degreasers and organic acids - specifically chosen for the fouling on your parts. Our chemistries are safe, environmentally friendly and proven effective over 15 years of cleaning thousands of parts of all types, shapes and sizes. </p>
                </div>
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