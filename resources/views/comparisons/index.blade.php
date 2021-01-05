@extends('app')

@section('title')
<title>{{ isset($siteSetting) ? $siteSetting->comparison_meta_title : 'How We Compare [Cleaning Cost, Heat Exchanger Performance]' }}</title>
<meta name="description" content="{{ isset($siteSetting) ? $siteSetting->comparison_meta_description : 'Our combination of Tech Sonic ultrasonic technology and hydroblasting cleans compact exchanger designs on the shell side, where hydroblasting alone fails.' }}">
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p>
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/comparisons" itemprop="item">
            <span itemprop="name">{{__('How We Compare')}}</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250;
        <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name">{{__($comparison->title)}}</span>
          <meta itemprop="position" content="2">
        </span>
      </p>
    </div>
  </div>
  <div class="album bg-white">
    <div class="container">
      <div class="row">
        <div class="col-2">&nbsp;</div>
        @if(isset($comparison) && $comparison != null)
        {!! $comparison->embed !!}
        @else
        <div class="col-8 padding30 text-center"> <br>
          <h2 class="text-center h1">Still think Ultrasonic Cleaning is Expensive?</h2>
          <p class="text-center"> Think again! <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is less expensive than Wash Pad Hydroblasting.</p>
          <p class="text-center"> Why else <img src="https://cleanasnew.com/assets/img/small-shell-logo.jpg" class="img-fluid" alt="Shell logo." />would publish that we are“Twice as Fast at Half the Cost”? </p>
          <h2 class="text-center"><i>It’s simple - they compared an Apple to an Apple!</i></h2>
          <p class="text-center"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/comparison-cost.jpg?v=20200921" class="img-fluid lazyload" alt="Wash Pad Hydroblasting VS. Clean As New® Powered By Tech Sonic." /></p>
          <div id="middle">
            <table class="col-12 mt-5 ml-5 mb-5 table-hover">
              <thead>
                <tr>
                  <th>26 {{__('Days')}}</th>
                  <th>&nbsp;</th>
                  <th>100 {{__('Exchangers TAR Proposal')}}</th>
                  <th>13 {{__('Days')}}</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Wash Pad</td>
                  <td>{{__('Cost/ Day')}}</td>
                  <td>{{__("Item Description")}}</td>
                  <td><span class="cangc">C</span><span class="cangc2">LEAN</span> <span class="cangc">A</span><span class="cangc2">S</span> <span class="cangc">N</span><span class="cangc2">EW</span><sup>®</sup></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>{{__("Ultrasonic Equipment")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$265,460</td>
                  <td class="colorblue">$10,250</td>
                  <td>{{__("Bundle Blaster’s & Pumps (2)")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$484,380</td>
                  <td class="colorblue">$18,630</td>
                  <td>{{__("IBC’s & Pumps (3)")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$119,600</td>
                  <td class="colorblue">$4,600</td>
                  <td>{{__("Mini-Arm, Wands & Pumps (3)")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$115,736</td>
                  <td class="colorblue">$4,451</td>
                  <td>Consumable (Tips, PPE, etc.)</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$447,824</td>
                  <td class="colorblue">$17,224</td>
                  <td>{{__("Hydroblasting Operators (19)")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$57,728</td>
                  <td class="colorblue">$2,220</td>
                  <td>{{__("Hydroblasting Supervisors & PM’s (2)")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$31,500</td>
                  <td class="colorblue">$1,211</td>
                  <td>{{__('Hydroblasting Safety (1)')}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">
                    <div class="menu-cost"><span class="menu__link menu__link--active">$1,522,228
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 152.9 43.4" style="enable-background:new 0 0 152.9 43.4;" xml:space="preserve">
                          <path d="M151.9,13.6c0,0,3.3-9.5-85-8.3c-97,1.3-58.3,29-58.3,29s9.7,8.1,69.7,8.1c68.3,0,69.3-23.1,69.3-23.1 s1.7-10.5-14.7-18.4" />
                        </svg>
                      </span></div>
                  </td>
                  <td>
                    <p class="mobileNone redText">{{__("Hydroblasting Estimate")}}</p>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td class="colorblue">$105,248</td>
                  <td class="colorblue">$4,048</td>
                  <td>{{__("Plant Personnel (4)")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$162,448</td>
                  <td class="colorblue">$6,248</td>
                  <td>{{__("Riggers (8)")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$353,600</td>
                  <td class="colorblue">$13,600</td>
                  <td>{{__("Crane (1)")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$133,286</td>
                  <td class="colorblue">$5,126</td>
                  <td>{{__("Water Supply")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$399,859</td>
                  <td class="colorblue">$15,379</td>
                  <td>{{__("Wastewater Treatment")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$182,000</td>
                  <td class="colorblue">$4,800</td>
                  <td>{{__("Solid Waste Disposal")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$200,200</td>
                  <td class="colorblue">$7,700</td>
                  <td>{{__("Vac Trucks (7)")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$162,500</td>
                  <td class="colorblue">$6,250</td>
                  <td>{{__("Power & Fuel")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td class="colorblue">$39,000</td>
                  <td class="colorblue">$1,500</td>
                  <td>{{__("Misc. Costs")}}</td>
                  <td>{{__('Included')}}</td>
                </tr>
                <tr>
                  <td><b>{{__("Total Cost")}}</b></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><b>{{__("Guaranteed Fixed Price")}}</b></td>
                </tr>
                <tr>
                  <td class="colorblue">
                    <div class="menu-totalcost"><span class="menu__link menu__link--active">$3,260,369
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 152.9 43.4" style="enable-background:new 0 0 152.9 43.4;" xml:space="preserve">
                          <path d="M151.9,13.6c0,0,3.3-9.5-85-8.3c-97,1.3-58.3,29-58.3,29s9.7,8.1,69.7,8.1c68.3,0,69.3-23.1,69.3-23.1 s1.7-10.5-14.7-18.4" />
                        </svg>
                      </span></div>
                  </td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>
                    <div class="menu-totalcostg"><span class="menu__link menu__link--activeg">$1,589,400
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 152.9 43.4" style="enable-background:new 0 0 152.9 43.4;" xml:space="preserve">
                          <path d="M151.9,13.6c0,0,3.3-9.5-85-8.3c-97,1.3-58.3,29-58.3,29s9.7,8.1,69.7,8.1c68.3,0,69.3-23.1,69.3-23.1 s1.7-10.5-14.7-18.4" />
                        </svg>
                      </span></div>
                  </td>
                </tr>
              </tbody>
            </table>
            <br><br>
          </div>
        </div>
        <div id="parent-div">
          <div id="child-div">
            <p class="desktopNone">{{__("Hydroblasting Estimate")}}</p>
          </div>
        </div>
        @endif
        <div class="col-1">&nbsp;</div>
      </div>
    </div>
  </div>
</main>
@include('layout.footer', (isset($siteSetting) && $siteSetting != null) ? $siteSetting : ['siteSetting' => null])
@endsection

@section('page-script')
<script>
  var body = document.getElementsByTagName("body")[0];
  var parent = document.getElementById("parent-div");
  var child = document.getElementById("child-div");
  body.onscroll = function() {
    //console.log(documenhttps://fiddle.jshell.net/3urv0tp0/#tidyt.getElementById("child-div").style.top)
    if (document.documentElement.scrollTop >= child.offsetTop) //Adjust Tolerance as you want
    {
      child.style.display = "block"
    }

  };
</script>
<script>
  var giftofspeed2 = document.createElement('link');
  giftofspeed2.rel = 'stylesheet';
  giftofspeed2.href = 'https://fonts.googleapis.com/css?family=Oswald:300,400,700&display=swap';
  giftofspeed2.type = 'text/css';
  var godefer2 = document.getElementsByTagName('link')[0];
  godefer2.parentNode.insertBefore(giftofspeed2, godefer2);
  var giftofspeed3 = document.createElement('link');
  giftofspeed3.rel = 'stylesheet';
  giftofspeed3.href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
  giftofspeed3.type = 'text/css';
  var godefer3 = document.getElementsByTagName('link')[0];
  godefer3.parentNode.insertBefore(giftofspeed3, godefer3);
</script>
<script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script>
<script>
  $('.dropdown').dropdown();
</script>

<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>

@endsection