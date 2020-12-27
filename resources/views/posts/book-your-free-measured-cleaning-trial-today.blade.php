@extends('app')

@section('title')
<title>Ultrasonic Cleaning Trial Opportunity - Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
	   <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList">&nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="https://cleanasnew.com/" itemprop="item"><span itemprop="name">{{__("Home")}}</span></a>   <meta itemprop="position" content="1"></span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{__("Book Your Free Measured Cleaning Trial")}} </span><meta itemprop="position" content="2"></span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30 scrollProfile45">
          <p>

<span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is recognized for providing the refining and petrochemical industries with “Green Tech” solutions that help them operate more efficiently, reduce their environmental footprint, all while improving the bottom line.  We are so confident in our technology and its capability to provide our customers value that we guarantee our performance.</p>
          <p> Despite numerous <a href="/testimonials/feedback">testimonials</a>, <a href="/testimonials/case-studies">case studies</a> and <a href="/testimonials/referred-journal-publications">several refereed papers</a>, people are understandably skeptical when they first hear these results. </p>
          <p> We want to earn your business, and understand we need to earn your trust first. That’s why we believe that the best way to validate our technology is for your team to visit our facility in Baytown, see what we do firsthand and participate in a <strong>Measured Cleaning Trial</strong>, using one of your own heat exchangers. </p>
          <p>We are offering a Measured Cleaning Trial of one of your heat exchangers at no cost to you, other than freight. </p>
          <div class="card-body">
            <h2> What We Are Asking Of You In Return Is:</h2>
            <ol class="list-group list-group-flushd listing">
              <li class="padding15"> Within 10 business days of returning the heat exchanger to service, you share with us the measurement data that contrasts cleaning the heat exchanger with hydroblasting alone and cleaning with Tech Sonic Ultrasonic Cleaning and high-pressure rinsing. The data exchanged, including the results of the Measured Cleaning Trial, would be kept strictly confidential.</li>
              <li class="padding15">Commit to a follow-up meeting with company stakeholders to review the performance improvements and discuss how 

<span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> can help improve cleaning performance for all items currently cleaned by hydroblasting, or other methods, and increase your profits.</li>
            </ol>
			  <br>
            <p class="card-text">Thank you for your consideration and we look forward to hearing from you.</p>
			  
			      <h3> Free Cleaning Trial Criteria</h3>
          <p> The intention of the measured trial is to demonstrate the economic value derived from better cleaning of the heat exchangers. In order to accomplish this, the following data is required:</p>
          <ol class="list-group list-group-flushd listing">
            <li class="padding15">Heat transfer performance data. This could be in the form of heat transfer coefficients, and/or including the key values of ΔT, ΔP, flow rate and process fluid description, over at least one previous interval for which hydroblasting cleaning was used.</li>
            <li class="padding15">The data must include key values from at least the initial and final performance values of the heat exchanger from the previous period.</li>
            <li class="padding15">The data must include key values from the period immediately after start-up with the exchanger cleaned by 

<span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>.</li>
          </ol>
			  
          </div>
			  <h2>NOTE: The historical data listed below must be submitted prior to cleaning.</h2>
        <img src="https://cleanasnew.com/assets/img/free-measured-cleaning-trial-screenshot.png?v=20200717" class="img-fluid polaroid" loading="lazy" alt="Free Cleaning Trial Criteria file."/>
		  <p><a href="https://cleanasnew.com/form/ultrasonic-cleaning-trial-opportunity.pdf?v=20200716">Download Free Cleaning Trial Criteria</a> <i style="color:red" class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></p>

        </div>
   <div class="col-6 padding30"> <img src="https://cleanasnew.com/assets/img/heat-transfer-performance-chart.jpg?v=20200709" loading="lazy" class="img-fluid polaroid" alt="Ultrasonic Cleaning Trial Opportunity!" /> 
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