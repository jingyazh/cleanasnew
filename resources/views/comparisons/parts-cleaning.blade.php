@extends('app')

@section('title')
<title>Parts Cleaning Comparison & Clean As New®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="how-we-compare" itemprop="item"> <span itemprop="name">{{__("How We Compare")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name"> {{__("Parts Cleaning")}} </span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-white">
    <div class="container">
      <div class="row">
		  <div class="col-2">&nbsp;</div>
       <div class="col-8 padding30 text-center"> <br>
             
          <h2 class="text-center h1"> Why scrap it when you can clean it? </h2>
        
		   <p>Did you know <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> cleans rotating equipment, piping components and parts by the basket?</p>
          <p>Stop throwing these items away simply because you can’t clean them.
            Reduce capital costs, lower your environmental footprint
            all while improving your <b><u>bottom line</u></b>.</p>
          <h2  class="text-center"><i>An Apple-to-Apple comparison</i></h2>
           	<p class="text-center">   <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison-cost-hydroblasting.jpg?v=20200923" class="img-fluid lazyload" alt="Hydroblasting VS. Clean As New Powered By Tech Sonic®."/></p>
		<div id="middle">
 <table class="col-12 mt-5 ml-5 mb-5 table-hover">
            <thead>
              <tr>
                <th>{{__("Hydroblasting")}}</th>
                <th><span class="heading4">{{__("Parts Cleaning")}}</span></th>
                <th><span class="cangc">C</span><span class="cangc2">LEAN</span> <span class="cangc">A</span><span class="cangc2">S</span> <span class="cangc">N</span><span class="cangc2">EW</span><sup>®</sup></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="X icon."/></td>
                <td>{{__("Critical Rotating Equipment")}}</td>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="X icon."/></td>
                <td>{{__("Column Internals, Trays, Packing, etc.")}}</td>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="X icon."/></td>
                <td>{{__("Demister Pads")}}</td>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload"  alt="X icon."/></td>
                <td>{{__("Filters")}}</td>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="X icon."/></td>
                <td>{{__("Piping Components")}}</td>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="X icon."/></td>
                <td>{{__("Fragile Components")}}</td>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
            </tbody>
          </table>
			<br>
			<p> {{__("Click here to learn")}} <a href="/services/by-the-basket">{{__("more")}}</a>.</p>
        </div>
		  </div>
		  	  <div class="col-1">&nbsp;</div>
      </div>
    </div>
  </div>
</main>
@include('layout.footer', (isset($siteSetting) && $siteSetting != null) ? $siteSetting : ['siteSetting' => null])
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