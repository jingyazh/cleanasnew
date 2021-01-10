@extends('app')

@section('title')
<title>How can better cleaning improve your ES&G score?</title>
@endsection

@section('content')

@include('layout.header', [$menuSetting, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList">&nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="https://cleanasnew.com/"  itemprop="item"><span itemprop="name">{{__("Home")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name"> {{__("Improve Your ESG Score")}}</span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6 padding30">
			<p> 
How can better cleaning improve your ESG score?
</p>
	<p> 
A <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Facility provides results that are not only Cleaner and Faster, but Safer and Greener too!
</p>
	<p> 
Our technology completely eliminates the risk of injury associated with hydroblasting on your wash pad and also reduces or eliminates the risks associates with handling large parts like heat exchangers. 
</p>
	<p> 
Our cleaning approach uses &#8250;95% LESS water than traditional hydroblasting, saving 10’s of millions of gallons of clean water and the associated reduction in wastewater every year.
</p>
	<p> 
By cleaning heat exchangers to like new performance levels, your plant benefits from improved efficiency, reducing greenhouse gas emissions by reducing the energy required for production.
</p>
	<p> 
Finally, by cleaning terminally fouled equipment that would historically be disposed of, <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> can reduce the amount of equipment and material ending up as waste – good for the environment and reducing your capital expenditure. 
</p>
	<p> 			<a href="/esg">Learn more → </a> </p>
 
        </div>
   <div class="col-6 padding30"> <img src="/assets/img/1px.png" data-src="/assets/img/esg-performance.jpg" loading="lazy" class="img-fluid polaroid lazyload" alt="To help our refinery and petrochemical clients improve their ES&G performance." /> 
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