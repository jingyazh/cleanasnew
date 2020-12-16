@extends('app')

@section('title')
<title>Heat Exchanger Performance & Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="how-we-compare" itemprop="item"> <span itemprop="name">{{__("How We Compare")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name">{{__("Heat Exchanger Performance")}}</span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-white">
    <div class="container">
      <div class="row">
		  <div class="col-2">&nbsp;</div>
       <div class="col-8 padding30 text-center"> <br>
          <h2 class="text-center h1">Ultrasonic Cleaning Trial Comparison </h2>
          <p> Despite numerous <a href="/testimonials/feedback">testimonials</a>, <a href="/testimonials/case-studies">case studies</a> and <a href="/testimonials/referred-journal-publications">several refereed papers</a>, people are
            understandably skeptical when they first hear these results.</p>
          <p>We want to earn your business, and understand we need to earn your trust first.
            That’s why we believe that the best way to validate our technology is for your
            team to visit our <a href="https://goo.gl/maps/v5Z9GQprvbndsYfz7" target="_blank">facility in Baytown</a>, see what we do firsthand and participate in a <span class="heading4"><b>FREE</b></span> Measured Cleaning Trial, using one of your own heat exchangers.</p>
          <h2  class="text-center"><i>An Apple to an Apple comparison - How much will you save?</i></h2>
		   
          <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison-cost.jpg?v=20200921" class="img-fluid lazyload" alt="Wash Pad Hydroblasting VS. Clean As New Powered By Tech Sonic®."/> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/heat-transfer-performance-chart-small.jpg?v=20200924" class="img-fluid lazyload" alt="Heat Exchanger Efficiency Chart."/> </div>
		  	  <div class="col-1">&nbsp;</div>
      </div>
    </div>
  </div>
</main>
@include('layout.footer')
@endsection

@section('page-script')
<script>
 var giftofspeed2=document.createElement('link');giftofspeed2.rel='stylesheet';giftofspeed2.href='https://fonts.googleapis.com/css?family=Oswald:300,400,700&family=Permanent+Marker&display=swap';giftofspeed2.type='text/css';var godefer2=document.getElementsByTagName('link')[0];godefer2.parentNode.insertBefore(giftofspeed2,godefer2);var giftofspeed3=document.createElement('link');giftofspeed3.rel='stylesheet';giftofspeed3.href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';giftofspeed3.type='text/css';var godefer3=document.getElementsByTagName('link')[0];godefer3.parentNode.insertBefore(giftofspeed3, godefer3);
</script> 
<script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script>window.jQuery || document.write('<script src="https://cleanasnew.com/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script> 
<script>$('.dropdown').dropdown();</script> 
   <script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection