@extends('app')

@section('title')
<title>ESG & Clean As New®</title>
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p> <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a href="how-we-compare" itemprop="item"> <span itemprop="name">{{__("How We Compare")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"> <span itemprop="name">ESG</span>
        <meta itemprop="position" content="2">
        </span> </p>
    </div>
  </div>
  <div class="album bg-white">
    <div class="container">
      <div class="row">
        <div class="col-2">&nbsp;</div>
        <div class="col-8 padding30 text-center"> <br>
          <img src="https://cleanasnew.com/assets/img/esg-logo2.png"  class="img-fluid" alt="ESG Sustainability."/>
          <p>Increasingly, the refining and petrochemical industries are faced with demand from investors,
            shareholders, regulatory bodies and John Q. Public to improve their <b>ESG performance</b>.</p>
          <p class="text-center"> By replacing your washpad with a <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> cleaning facility, you can restore operation
            to design capacity, reduce your cleaning costs, lower your carbon footprint
            all while improving your <b><u>bottom line</u></b>.</p>
          <h2  class="text-center"><i>An Apple-to-Apple comparison - We check ALL the boxes</i></h2>
          <p class="text-center"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison-cost.jpg?v=20200921" class="img-fluid lazyload" alt="Wash Pad Hydroblasting VS. Clean As New Powered By Tech Sonic®."/></p>
          <table class="col-9 mt-5 ml-5 mb-5 table-hover">
            <thead>
              <tr>
                <th>Wash Pad Hydroblasting</th>
                <th><span class="heading4">ESG {{__("Benefit")}}</span></th>
                <th><span class="cangc">C</span><span class="cangc2">LEAN</span> <span class="cangc">A</span><span class="cangc2">S</span> <span class="cangc">N</span><span class="cangc2">EW</span><sup>®</sup></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="X icon."/></td>
                <td><strong>{{__("Safety")}} </strong><br>
                  100% {{__("Elimination of Hazards")}} </td>
                <td><img src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="Red X icon."/></td>
                <td><strong>{{__("Energy Efficiency")}}</strong><br>
                  {{__("Reduced GHG Emissions")}} </td>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="X icon."/></td>
                <td><strong>{{__("Water Consumption")}}</strong><br>
                  95% {{__("Reduction")}} </td>
                <td><img src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="X icon."/></td>
                <td><strong>{{__("Wastewater Creation")}}</strong><br>
                  95% {{__("Reduction")}} </td>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
              <tr>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-red-x2.png" class="img-fluid lazyload" alt="X icon."/></td>
                <td><strong>{{__("Reuse/ Recycle")}}</strong><br>
                  {{__("Eliminate Disposal of Uncleanable Parts")}} </td>
                <td><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/service-green-checkmark2.png" class="img-fluid lazyload" alt="Checkmark icon."/></td>
              </tr>
            </tbody>
          </table>
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