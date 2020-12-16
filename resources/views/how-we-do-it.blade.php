@extends('app')

@section('title')
<title>CLEANER, FASTER, SAFER & GREENER - Clean As New® | Baytown TX</title>
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
			  <span itemprop="name">{{__("How We Do It")}}</span> 
			  <meta itemprop="position" content="2">
		  </span>
	 </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <ul class="tabs desktopNone">
          <li><a href="#" id="tab1">{{__("CLEANER")}}</a></li>
          <li><a href="#" id="tab2">{{__("FASTER")}}</a></li>
          <li><a href="#" id="tab3">{{__("SAFER")}}</a></li>
          <li><a href="#" id="tab4">{{__("GREENER")}}</a></li>
        </ul>
        <div class="content desktopNone">
          <div class="tab1">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      <h2 class="heading1">{{__("CLEANER")}}</h2>
                      <h4>{{__("What if Clean meant Like New?")}}</h4>
                      <p>{{__("Tech Sonic’s patented and proprietary technology cleans heat exchangers and parts to a like new condition.")}} </p>
                      <div>
                        <ul class="listing">
                          <li>{{__("With the addition of Tech Sonic, heat exchangers and parts are cleaned and returned to service at 95% or better of the original design performance.")}} </li>
                          <li>{{__("Better cleaning means less energy consumption, improved production and longer maintenance intervals – great for a plant’s bottom line.")}} </li>
                          <li>{{__("When we say")}} <span id="tagyes">{{__("YES WE CAN")}}</span>, {{__("we mean it - If we can’t clean it, you don’t pay! Who else in the industry offers that guarantee?")}} </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin"> <img src="https://cleanasnew.com/assets/img/values/cleaner1.jpg" loading="lazy" alt="If we can’t clean it, you don’t pay!" /> </div>
          </div>
          <div class="tab2">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      <h2 class="heading2">{{__("FASTER")}}</h2>
                      <h4>{{__("What if your exchangers could be cleaned in half the time?")}} </h4>
                      <p>{{__("Every hour that a plant is shut down costs a pile of money.")}} </p>
                      <div>
                        <ul class="listing">
                          <li> {{__("The faster maintenance can be done, the faster the plant can get back up and running.")}} </li>
                          <li> {{__("The")}} <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> {{__("process will clean heat exchangers twice as fast as hydroblasting on your own washpad.")}} </li>
                          <li>{{__("According to Shell’s Moerdijk Netherlands plant, with the addition of Tech Sonic")}} <br>
                            {{__("cleaning is “Twice as fast, at half the cost”.")}} </li>
                          <li>{{__("We schedule and track everything we clean and if you deliver on time, we return on time.")}} </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin"> <img src="https://cleanasnew.com/assets/img/values/faster2.jpg"  loading="lazy" alt="Twice as fast, at half the cost." /> </div>
          </div>
          <div class="tab3">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      <h2 class="heading3">{{__("SAFER")}}</h2>
                      <h4>{{__("What if you could reduce the potential for injury or death?")}}</h4>
                      <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> {{__("reduces the need for hydroblasting by over 75%, reducing the labor and associated risk.")}} </p>
                      <div>
                        <ul class="listing">
                          <li> Hydroblasting is part of the <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> cleaning process, 
                            but we only use it for rinsing. </li>
                          <li>Our hydroblasting equipment is automated and 100% remotely 
                            operated. </li>
                          <li>We take it a step further by engineering personnel out of the blast zone 
                            and eliminating the risk of anyone getting hurt. </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin"> <img src="https://cleanasnew.com/assets/img/values/safer3.jpg" loading="lazy" alt="Reduced exposure and safety enhancement by way of enhanced cleaning in the ultrasonic vessel." /> </div>
          </div>
          <div class="tab4">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      <h2 class="heading4">{{__("GREENER")}}</h2>
                      <h4>What if being greener also
                        meant being more profitable?</h4>
                      <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> technology helps our clients 
                        operate more efficiently, which in turn 
                        reduces emissions and environmental impact. </p>
                      <div>
                        <ul class="listing">
                          <li> Cleaner heat exchangers = less energy used.</li>
                          <li> Less energy use = lower carbon footprint.</li>
                          <li> Our process reduces hydroblasting water consumption and
                            wastewater generation by up to 95%. </li>
                          <li>By cleaning fragile and “uncleanable” parts, you save money because
                            these parts can be reused instead of being scrapped. </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin"> <img src="https://cleanasnew.com/assets/img/values/greener4.jpg" loading="lazy" alt="Smaller Carbon Footprint."/> </div>
          </div>
        </div>
        <!-- /.col-md-8 -->
        
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne1"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
              <h5 class="mb-0">CLEANER</h5>
              </a> </div>
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="heading1">CLEANER</h2>
                  <h4>What if Clean meant Like New?</h4>
                  <p>Tech Sonic’s patented and proprietary technology cleans heat exchangers and parts to a like new condition. </p>
                  <ul class="listing">
                    <li>With the addition of Tech Sonic, heat exchangers and 
                      parts are cleaned and returned to service at 95% or 
                      better of the original design performance. </li>
                    <li>Better cleaning means less energy consumption, improved 
                      production and longer maintenance intervals – great for a plant’s 
                      bottom line. </li>
                    <li>When we say <span id="tagyes2">YES WE CAN</span>, we mean it - If we can’t clean it, you don’t pay!
                      Who else in the industry offers that guarantee? </li>
                  </ul>
                  <img src="https://cleanasnew.com/assets/img/values/cleaner1.jpg"  alt="If we can’t clean it, you don’t pay!" loading="lazy" class="img-fluid" /> </div>
              </div>
            </div>
          </div>
          <!-- 2 -->
          
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0"> FASTER </h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="heading2">FASTER</h2>
                  <h4>What if your exchangers could be cleaned in half the time? </h4>
                  <p>Every hour that a plant is shut down costs a pile of money. </p>
                  <ul class="listing">
                    <li> The faster maintenance can be done, the faster the
                      plant can get back up and running. </li>
                    <li> The <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> process will clean heat exchangers twice as fast
                      as hydroblasting on your own washpad. </li>
                    <li>According to Shell’s Moerdijk Netherlands plant, with the addition of Tech Sonic, <br>
                      cleaning is “Twice as fast, at half the cost”. </li>
                    <li>We schedule and track everything we clean and if you deliver on time,
                      we return on time. </li>
                  </ul>
                  <img src="https://cleanasnew.com/assets/img/values/faster2.jpg"  alt="Twice as fast, at half the cost." loading="lazy" class="img-fluid"/> </div>
              </div>
            </div>
          </div>
          
          <!-- 3 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingThree3a"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3a"
        aria-expanded="false" aria-controls="collapseThree3a">
              <h5 class="mb-0">SAFER</h5>
              </a> </div>
            <div id="collapseThree3a" class="collapse" role="tabpanel" aria-labelledby="headingThree3a"
      data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="heading3">SAFER</h2>
                  <h4>What if you could reduce the potential for injury or death?</h4>
                  <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> reduces the need
                    for hydroblasting by over 75%, reducing the
                    labor and associated risk. </p>
                  <ul class="listing">
                    <li> Hydroblasting is part of the <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> cleaning process, 
                      but we only use it for rinsing. </li>
                    <li>Our hydroblasting equipment is automated and 100% remotely 
                      operated. </li>
                    <li>We take it a step further by engineering personnel out of the blast zone 
                      and eliminating the risk of anyone getting hurt. </li>
                  </ul>
                  <img src="https://cleanasnew.com/assets/img/values/safer3.jpg"  alt="Reduced exposure and safety enhancement by way of enhanced cleaning in the ultrasonic vessel." class="img-fluid" loading="lazy"/> </div>
              </div>
            </div>
          </div>
          <!-- 4 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingThree4"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
        aria-expanded="false" aria-controls="collapseThree4">
              <h5 class="mb-0">GREENER</h5>
              </a> </div>
            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
      data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="heading4">GREENER</h2>
                  <h4>What if being greener also
                    meant being more profitable?</h4>
                  <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> technology helps our clients 
                    operate more efficiently, which in turn 
                    reduces emissions and environmental impact. </p>
                  <div>
                    <ul class="listing">
                      <li> Cleaner heat exchangers = less energy used.</li>
                      <li> Less energy use = lower carbon footprint.</li>
                      <li> Our process reduces hydroblasting water consumption and
                        wastewater generation by up to 95%. </li>
                      <li>By cleaning fragile and “uncleanable” parts, you save money because
                        these parts can be reused instead of being scrapped. </li>
                    </ul>
                    <img src="https://cleanasnew.com/assets/img/values/greener4.jpg" class="img-fluid" loading="lazy" alt="Smaller Carbon Footprint."/> </div>
                </div>
              </div>
            </div>
          </div>
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