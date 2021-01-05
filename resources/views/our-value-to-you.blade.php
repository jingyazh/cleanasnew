@extends('app')

@section('title')
<title>{{ $siteSetting->values_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->values_meta_description }}">
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
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
			  <span itemprop="name">{{__("Our Value To You")}}</span> 
			  <meta itemprop="position" content="2">
		  </span>
	 </p>
	  </div>
  </div>
 
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <ul class="tabs desktopNone">
        @if(isset($ourvalues) && $ourvalues != null)
        @foreach($ourvalues as $key => $value)
        <li><a href="#" id="tab{{ $key+1 }}">{{ $value->title }}</a></li> 
        @endforeach
        @endif
          <!-- <li><a href="#" id="tab1">{{__("CLEANER")}}</a></li>
          <li><a href="#" id="tab2">{{__("FASTER")}}</a></li>
          <li><a href="#" id="tab3">{{__("SAFER")}}</a></li>
          <li><a href="#" id="tab4">{{__("GREENER")}}</a></li> -->
        </ul>
        <div class="content  desktopNone">

        @if(isset($ourvalues) && $ourvalues != null)
          @foreach($ourvalues as $key => $value)
          <div class="tab{{ $key+1 }}">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      {!! $value->embed !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin"> <img src="{{ $value->image }}" loading="lazy" alt="If we can’t clean it, you don’t pay!" /> </div>
          </div>
          @endforeach
          @endif
          <!-- <div class="tab1">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      <h2 class="heading1">{{__("CLEANER")}}</h2>
                      <h4>Energy Savings</h4>
                      <p>A cleaner  heat exchanger means better energy efficiency. Restoring as-built performance by improving cleaning results by 20% or more can turn into even greater energy savings. </p>
                      <h4> Improved Production </h4>
                      <p>By returning to service at like-new performance levels, a plant operator has more freedom to maximize production. </p>
                      <h4>Longer Maintenance Intervals </h4>
                      <p>By cleaning to bare metal, an exchanger’s fouling profile changes, and it will take longer to re-foul than if it were cleaned by hydroblasting alone. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/values/cleaner1.jpg" class="img-fluid lazyload" alt="If we can’t clean it, you don’t pay!"/> </div>
          </div>
          <div class="tab2">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      <h2 class="heading2">{{__("FASTER")}}</h2>
                      <h4>Shorter Shutdowns Means Higher Profits</h4>
                      <h4>Less Risk To Your Schedule</h4>
                      <p>The <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> process is much faster than hydroblasting alone, and that means less risk to your shutdown schedule and more time for inspection and repair. </p>
                      <h4>Clean More - Or More Often </h4>
                      <p>Because we are SO much faster, routine maintenance doesn’t have to mean a week of cleaning. You now have the opportunity to clean more in less time, or even plan to clean some parts more frequently and maintain a higher level of performance. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/values/faster2.jpg" class="img-fluid lazyload" alt="Twice as fast, at half the cost."/> </div>
          </div>
          <div class="tab3">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      <h2 class="heading3">{{__("SAFER")}}</h2>
                      <h4>Less Risk Of Injury</h4>
                      <h4> Offsite Risk</h4>
                      <p>Sending your parts to <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> for cleaning completely eliminates the cleaning risks from your site.</p>
                      <h4>Onsite Risk</h4>
                      <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> on your washpad means 75% less hydroblasting so your risk exposure is greatly reduced.</p>
                      <p> A dedicated <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> facility at your site will completely remove the risk while providing the maximum benefits. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/values/safer3.jpg" class="img-fluid lazyload" alt="Reduced exposure and safety enhancement by way of enhanced cleaning in the ultrasonic vessel." /> </div>
          </div>
          <div class="tab4">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      <h2 class="heading4">{{__("GREENER")}}</h2>
                      <h4>Reduced Environmental Impact </h4>
                      <h4>Smaller Carbon Footprint </h4>
                      <p>By cleaning your heat exchangers to like-new condition, your energy consumption is reduced, and your efficiency is improved, and your carbon footprint gets smaller. </p>
                      <h4>Way Less Water </h4>
                      <p>A <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> offsite or on-site facility uses &#8250;95% LESS water than traditional hydroblasting, saving millions of gallons of water in a typical shutdown. </p>
                      <h4>Less Wastewater To Treat </h4>
                      <p>Less water used means less wastewater to treat, lowering your costs. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/values/greener4.jpg" class="img-fluid lazyload" alt="Smaller Carbon Footprint." /> </div>
          </div> -->
        </div>
        
        <!-- 8 -->
        
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
        @if(isset($ourvalues) && $ourvalues != null)
        @foreach($ourvalues as $key => $value)
        <div class="card">
            <div class="card-header" role="tab" id="headingOne{{ $key+1 }}"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{ $key+1 }}" aria-expanded="true"
               aria-controls="collapseOne{{ $key+1 }}">
              {!! $value->title !!}
              </a> </div>
            <div id="collapseOne{{ $key+1 }}" class="collapse {{ $key==0 ? 'show' : '' }}" role="tabpanel" aria-labelledby="headingOne{{ $key+1 }}"
                data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                {!! $value->embed !!}
                  <img src="{{ $value->image }}" data-src="https://cleanasnew.com/assets/img/values/cleaner1.jpg" class="img-fluid  lazyload" alt="If we can’t clean it, you don’t pay!"/> </div>
              </div>
            </div>
          </div>
        @endforeach
        @endif
          <!-- <div class="card">
            <div class="card-header" role="tab" id="headingOne1"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
               aria-controls="collapseOne1">
              <h5 class="mb-0">CLEANER</h5>
              </a> </div>
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="heading1">{{__("CLEANER")}}</h2>
                  <h4>Energy Savings</h4>
                  <p>A cleaner  heat exchanger means better energy efficiency. Restoring as-built performance by improving cleaning results by 20% or more can turn into even greater energy savings. </p>
                  <h4> Improved Production </h4>
                  <p>By returning to service at like-new performance levels, a plant operator has more freedom to maximize production. </p>
                  <h4>Longer Maintenance Intervals </h4>
                  <p>By cleaning to bare metal, an exchanger’s fouling profile changes, and it will take longer to re-foul than if it were cleaned by hydroblasting alone. </p>
                  <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/values/cleaner1.jpg" class="img-fluid  lazyload" alt="If we can’t clean it, you don’t pay!"/> </div>
              </div>
            </div>
          </div>
       
          
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
               aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0"> FASTER </h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
               data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="heading2">{{__("FASTER")}}</h2>
                  <h4>Shorter Shutdowns Means Higher Profits</h4>
                  <h4>Less Risk To Your Schedule</h4>
                  <p>The <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> process is much faster than hydroblasting alone, and that means less risk to your shutdown schedule and more time for inspection and repair. </p>
                  <h4>Clean More - Or More Often </h4>
                  <p>Because we are SO much faster, routine maintenance doesn’t have to mean a week of cleaning. You now have the opportunity to clean more in less time, or even plan to clean some parts more frequently and maintain a higher level of performance. </p>
                  <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/values/faster2.jpg" alt="Twice as fast, at half the cost." class="img-fluid  lazyload"/> </div>
              </div>
            </div>
          </div>
          
      
          <div class="card">
            <div class="card-header" role="tab" id="headingThree3a"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3a"
               aria-expanded="false" aria-controls="collapseThree3a">
              <h5 class="mb-0">SAFER</h5>
              </a> </div>
            <div id="collapseThree3a" class="collapse" role="tabpanel" aria-labelledby="headingThree3a"
               data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="heading3">{{__("SAFER")}}</h2>
                  <h4>Less Risk Of Injury</h4>
                  <h4> Off-Site Risk</h4>
                  <p>Sending your parts to <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> for cleaning completely eliminates the cleaning risks from your site.</p>
                  <h4>On-Site Risk</h4>
                  <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> on your washpad means 75% less hydroblasting so your risk exposure is greatly reduced.</p>
                  <p> A dedicated <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> facility at your site will completely remove the risk while providing the maximum benefits. </p>
                  <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/values/safer3.jpg" class="img-fluid lazyload" alt="Reduced exposure and safety enhancement by way of enhanced cleaning in the ultrasonic vessel."/> </div>
              </div>
            </div>
          </div>
         
          <div class="card">
            <div class="card-header" role="tab" id="headingThree4"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
               aria-expanded="false" aria-controls="collapseThree4">
              <h5 class="mb-0">GREENER</h5>
              </a> </div>
            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
                data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="heading4">{{__("GREENER")}}</h2>
                  <h4>Reduced Environmental Impact </h4>
                  <h4>Smaller Carbon Footprint </h4>
                  <p>By cleaning your heat exchangers to like-new condition, your energy consumption is reduced, and your efficiency is improved, and your carbon footprint gets smaller. </p>
                  <h4>Way Less Water </h4>
                  <p>A <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> offsite or onsite facility uses &#8250;95% LESS water than traditional hydroblasting, saving millions of gallons of water in a typical shutdown. </p>
                  <h4>Less Wastewater To Treat </h4>
                  <p>Less water used means less wastewater to treat, lowering your costs. </p>
                  <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/values/greener4.jpg" alt="Smaller Carbon Footprint." class="img-fluid lazyload"/> </div>
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
<script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery-slim.min.js"><\/script>')</script> 
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script> 
<script>$('.dropdown').dropdown();</script> 
<script src="https://code.jquery.com/jquery-1.7.2.min.js"></script> 
<script>
$(document).ready(function() {
    $(".content").find("[class^='tab']").hide(); // Hide all content
    $(".tabs li:first").attr("class","current"); // Activate the first tab
    $(".content .tab1").fadeIn(); // Show first tab's content
    
    $('.tabs a').click(function(e) {
        e.preventDefault();
        if ($(this).closest("li").attr("class") == "current"){ //detection for current tab
         return;       
        }
        else{             
          $(".content").find("[class^='tab']").hide(); // Hide all content
          $(".tabs li").attr("class",""); //Reset id's
          $(this).parent().attr("class","current"); // Activate this
          $('.' + $(this).attr('id')).fadeIn(); // Show content for the current tab
        }
    });
});
</script> 

   <script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection