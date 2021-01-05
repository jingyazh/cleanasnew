@extends('app')

@section('title')
<title>{{ $siteSetting->contact_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->contact_meta_description }}">
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p>
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="https://cleanasnew.com/" itemprop="item">
            <span itemprop="name">{{__("Home")}}</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250;
        <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span itemprop="name"> {{__("Contact")}}</span>
          <meta itemprop="position" content="2">
        </span>
      </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.578409939513!2d-95.04120098449641!3d29.78982978197568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x863f599e6e9e7163%3A0x80ad656ac6f22dac!2sClean%20As%20New!5e0!3m2!1sen!2sca!4v1583348132711!5m2!1sen!2sca" allowfullscreen=""></iframe>
          <div class="col-12">
            <div class="card mb-8 shadow-sm">
              <div class="card-body padding15">
                  {!! $contact->embed !!}
                {{-- <h5 class="card-title"> Interested?</h5>
                <p class="card-text">Seeing is Believing. Contact us to find out more about our services and how we can bring incredible value. We want to earn your business! All <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> service is provided with a guaranteed, up-front, fixed price. </p>
                <h5 class="card-title">Industry Cleaning Request Form</h5>
                <p class="card-text">The Industrial Cleaning Request form below can be used to request a quote by completing and returning to <a href="mailto:info@cleanasnew.com">info@cleanasnew.com</a>.<br>
                  <i class="fa fa-file-pdf-o" style="color:red"></i><a target="_blank" href="https://cleanasnew.com/pdf/industrial-cleaning-requests-form.pdf"> Industrial Cleaning Request Form</a></p>
                <h5 class="card-title">Virtual Tour</h5>
                <p class="card-text">We invite you to an online Lunch and Learn meeting, with a Virtual Tour of our Baytown facility – Lunch is on Us!* Call or email us today to book your virtual tour. <small style="color:#666; margin:0; display:block">(*we’ll happily send lunch to you!)</small> <br>
                </p> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card mb-8 shadow-sm">
            <div class="card-group">
              <div class="card">
                <div class="card-body padding15">
                  <h5 class="card-title"><span class="cangc">C</span><span class="cangc2">LEAN</span> <span class="cangc">A</span><span class="cangc2">S</span> <span class="cangc">N</span><span class="cangc2">EW</span><sup>®</sup>
                    - {{ __('Offsite Cleaning')}} {{ __('Facility') }}</h5>
                  <ul class="list-group  list-group-flush text-muted contactListing">
                    <li class="list-group-item"> {{ $contact->offsite_cleaning_facility_address }}</li>
                    <li class="list-group-item"> {{ $contact->offsite_cleaning_facility_town }} </li>
                    <li class="list-group-item">T: {{ $contact->offsite_cleaning_facility_tel }} </li>
                    <li class="list-group-item">E: <a href="mailto:{{ $contact->offsite_cleaning_facility_email }}">{{ $contact->offsite_cleaning_facility_email }}</a> </li>
                  </ul>
                  <br>
                  <h5 class="card-title"><span class="cangc">C</span><span class="cangc2">LEAN</span> <span class="cangc">A</span><span class="cangc2">S</span> <span class="cangc">N</span><span class="cangc2">EW</span><sup>®</sup>
                    - {{ __('Offices') }} </h5>
                  <ul class="list-group list-group-flush text-muted contactListing">
                    <li class="list-group-item">{{ $contact->offices_address }}</li>
                    <li class="list-group-item"> {{ $contact->offices_town }} </li>
                    <li class="list-group-item">T: {{ $contact->offices_tel }} </li>
                    <li class="list-group-item">E: <a href="mailto:{{ $contact->offices_email }}">{{ $contact->offices_email }}</a> </li>
                  </ul>
                  <p><br>
                    Geismar, Louisiana - Opening 2020<br>
                    Corpus Christi, Texas - Opening 2021 </p>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end-->

      </div>
    </div>
  </div>
</main>
@include('layout.footer', (isset($siteSetting) && $siteSetting != null) ? $siteSetting : ['siteSetting' => null])
@endsection

@section('page-script')
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
<!-- <script>
  if ('loading' in HTMLImageElement.prototype) {
    const images = document.querySelectorAll("img.lazyload");
    images.forEach(img => {
      img.src = img.dataset.src;
    });
  } else {
    // Dynamically import the LazySizes library
    let script = document.createElement("script");
    script.async = true;
    script.src =
      "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js";
    document.body.appendChild(script);
  }
</script> -->
<script type="application/ld+json">
  {
    "@context": "http://www.schema.org",
    "@type": "Organization",
    "name": "Clean As New®",
    "email": "info@cleanasnew.com",
    "url": "https://cleanasnew.com",
    "sameAs": ["https://www.linkedin.com/company/cleanasnew01", "https://www.facebook.com/cangc01", "https://twitter.com/cleanasnew01"],
    "image": {
      "@type": "ImageObject",
      "url": "https://cleanasnew.com/assets/img/CLean-As-New-logo600.png",
      "width": 600,
      "height": 141,
      "caption": "Clean As New® Logo"
    },
    "description": "Clean As New® combines Tech Sonic ultrasonic cleaning technology with advanced hydroblasting to clean heat exchangers and parts to a like new condition. Our clean technology lets our clients operate more efficiently - reducing emissions and environmental impact. Read more how we can help improve your ESG performance.",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "1303 Thompson Park Dr",
      "addressLocality": "Baytown",
      "addressRegion": "TX",
      "postalCode": "77521"
    },
    "telePhone": "1-832-271-2666",
    "openingHours": "Mo,Tu,We,Th,Fr 08:00-17:00",

    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "29.665375",
      "longitude": "-95.192466"
    }
  }
</script>
@endsection
