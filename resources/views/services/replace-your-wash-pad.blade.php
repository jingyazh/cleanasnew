@extends('app')

@section('title')
<title>✔️ Replace Your Wash Pad - Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="our-services" itemprop="item"> <span itemprop="name">{{__("Our Services")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{__("Replace Your Wash Pad")}}</span>
        <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30 scrollProfile45">
          <h2 class="text-center h1">Why Partner with <span class="cangc">C</span><span class="cangc2">LEAN</span> <span class="cangc">A</span><span class="cangc2">S</span> <span class="cangc">N</span><span class="cangc2">EW</span><sup>®</sup>?</h2>
          <p>Increasingly, the refining and petrochemical industries are faced with demand from investors, shareholders, regulatory bodies and John Q. Public to improve their <b>ESG performance</b>. </p>
          <p>By replacing your wash pad with a <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> cleaning facility, you can restore operation to design capacity, reduce your cleaning costs, lower your carbon footprint
            all while improving your <u><b>bottom line</b></u>. </p>
          <h3>Facility</h3>
          <p><strong>Dedicated Cleaning Facility</strong> - Just outside your fence line</p>
          <p><strong>Capital Cost</strong> - No! You only pay for the cleaning</p>
          <p><strong>Design Concept</strong> - Ready for review in 7 days (from receipt of client information)</p>
          <p><strong>Design Detailed </strong>- Ready to submit for permit in 30 days (from execution of contract)</p>
          <p><strong>Construction Duration </strong>- Ready for use in 6 months (from notice to proceed)</p>
          <h3>Cleaning Costs</h3>
          <p><strong>Heat Exchangers </strong>- Fixed price based on exchanger size & type </p>
          <p><strong>Parts</strong> – Fixed price - Based on basket size</p>
          <h3>Operations</h3>
          <p><span class="heading1"><b>CLEANER</b></span> - We clean to &#8250;95% of Clean Duty, and If we can’t clean it, you DON’T pay</p>
          <p><span class="heading2"><b>FASTER</b></span> - We clean twice as fast as hydroblasting on your own wash pad</p>
          <p><span class="heading3"><b>SAFER</b></span> - We ensure 100% of the hydroblasting risk is eliminated</p>
          <p><span class="heading4"><b>GREENER</b></span> - We recycle &#8250;95% of our water </p>
          <h3>Value</h3>
          <p><strong>Reduced Cleaning Costs </strong> - ½ the cost compared to the <u>total cost of cleaning</u> on your own wash pad</p>
          <p><strong>Shorter Outages</strong> - Scheduled certainty c/w historical cleaning data </p>
          <p><strong>Improved Operating Efficiency</strong></p>
          <ul class="list-group list-group-flushd listing padding30">
            <li>Significant energy reduction - Heat exchangers, rotating and process equipment operate like new</li>
            <li>Provides option to replace heat exchangers with more efficient ones </li>
            <li>Provides option for less expensive process design</li>
            <li>Improve production</li>
            <li>Provides optional increased run-lengths (longer intervals between outages)</li>
          </ul>
          <br>
          <p><strong>Lower Greenhouse Gas Emissions</strong> - Significant reduction in GHG’s with improved efficiency </p>
          <p><strong>Better Environmental Performance</strong> - Significantly improves your ESG Scores</p>
        </div>
        <div class="col-6 padding30"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/ClientMontage-min.gif" class="img-fluid polaroid lazyload" alt="Discover our Dedicated Client Facility." /> </div>
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
   <script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection