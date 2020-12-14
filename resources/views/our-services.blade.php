@extends('app')

@section('title')
<title>Our Services - Offsite Cleaning, By The Basket, Wash Pad...</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="https://cleanasnew.com/"  itemprop="item"> <span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name"> Our Services</span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row"> <a href="#" data-toggle="modal" data-target="#myModal">
        <div class="front-picture"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/calculating-profits.jpg" class="img-fluid desktopNone lazyload" alt="Calculating profits."/> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/clean-as-new-services.jpg?v=20200917" class="mobileNone img-fluid  lazyload" alt="Calculating profits."/>
          <div class="des">
            <p><i class="fa fa-line-chart padding15" aria-hidden="true"></i> Compare The Benefits Of Our Different Service Options With Traditional Wash Pad Hydroblasting </p>
          </div>
        </div>
        </a>
        <div class="col-3">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="services/offsite-facility"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/services/baytown-cleaning-facility.jpg" class="img-fluid desktopNone  lazyload" alt="Offsite facility service."/><img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/services/baytown-cleaning-facility-sm.jpg" class="img-fluid mobileNone lazyload" alt="Offsite facility service."/></a>
            <div class="card-body">
              <p class="text-center"><a href="services/offsite-facility">Offsite Cleaning</a></p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="services/by-the-basket"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/services/basket-of-parts.jpg?v=20201005" class="img-fluid desktopNone  lazyload" alt="Parts cleaning service."/><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/services/basket-of-parts-sm.jpg?v=20201005" class="img-fluid mobileNone  lazyload" alt="Parts cleaning service."/></a>
            <div class="card-body">
              <p class="text-center"><a href="services/by-the-basket">By The Basket</a></p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="services/washpad-services"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/services/onsite-facility-service.jpg" class=" img-fluid desktopNone  lazyload" alt="On your wash pad service."/><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/services/onsite-facility-service-sm.jpg" class="img-fluid mobileNone  lazyload" alt="On your wash pad service."/></a>
            <div class="card-body">
              <p class="text-center"><a href="services/washpad-services">Wash Pad Services</a></p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card mb-3 shadow-sm"> <a class="img-hover-zoom imgblur" href="services/replace-your-wash-pad"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/services/offsite-facility-drawing.jpg" class="img-fluid desktopNone lazyload" alt="Replace Your Wash Pad service."/><img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/comparison/clean-as-new-facility-drawing.jpg?v=20200928" class="mobileNone lazyload"  alt="Facility drawing by Clean As New®!"/></a>
            <div class="card-body">
              <p class="text-center"><a href="services/replace-your-wash-pad">Replace Your Wash Pad</a></p>
            </div>
          </div>
        </div>
        
        <!-- end--> 
        
      </div>
    </div>
  </div>
</main>
@include('layout.footer')
<!-- The Modal -->
<div class="modal fade" id="myModal" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>
      <div class="modal-body"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="assets/img/cangc-checklist.jpg?20201005" class="img-fluid lazyload" alt="Clean As New® Benifits Checklist."/> <a href="https://cleanasnew.com/pdf/cangc-checklist.pdf?v=20201005" target="_blank" class="btn btn-default">Download This Checklist <i class="fa fa-file-pdf-o fa-1g" aria-hidden="true"></i></a> </div>
    </div>
  </div>
</div>
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