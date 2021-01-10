@extends('app')

@section('title')
<title>James Griffin - Advisory Board Members - Clean As New®</title>
@endsection

@section('content')

@include('layout.header', [$menuSetting, $extraPages])
<main>
  <div class="jumbotron text-left">
	     <div class="headline"  itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
         <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/about-us" itemprop="item"> <span itemprop="name">About Us</span></a>  <meta itemprop="position" content="1"></span> &#8250; <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/about-us/advisory-board" itemprop="item"><span itemprop="name">Advisory Board</span></a> <meta itemprop="position" content="2"></span> &#8250;   <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">James Griffin</span>     <meta itemprop="position" content="3"></span></p>
    </div> 
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active">
              <div class="col-3 float-left">   <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/advisory-board-profiles/James-Griffin.jpg" class="img-fluid lazyload" alt="James Griffin."/>
  <p class="text-muted text-right namePosition2 desktopNone">James Griffin</p>
                <p class="text-muted text-left namePosition2 mobileNone">James Griffin</p>

   				 </div>
              <div class="col-md-9 float-left">
                <div class="scrollProfile45">
                  <div class="card shadow-sm">
                    <div class="card-body padding15">
                      <blockquote>
                        <p class="quotation"> I’m excited to be engaged with the future success of <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> as an advisory board member. The <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> technology addresses 3 key plant issues: Safety, Environmental Sustainability and Reliability. This technology limits personnel exposure to high pressure water, significantly improves exchanger heat transfer reducing energy consumption and  reduces cleaning time.</p>
                      </blockquote>
                      <p>James Griffin earned his BS and MS from the University of Wisconsin. He is currently the Senior Vice President of Petrochemicals, Energy and Technology at San Jacinto College.</p>
                      <p>Griffin began his career as an associate engineer with The BF Goodrich Chemical Company. He has held positions in plant operations, corporate leadership and R&D. Prior to joining the college, James was a VP of Manufacturing for Mitsubishi Chemical.</p>
                      <p>James is a past board chair of The East Harris County Manufacturing Association, an alliance of 132 refineries and petrochemical plants. He is also past board chairman of The Economic Alliance Port Region, an organization representing 12 cities, the Port of Houston Authority, Harris County, and 250 private industry members. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-9 --> 
          
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
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type" : "Person",
  "name" : "James Griffin ",
   "jobTitle": "Clean As New® Advisory Board Member",
     "url": "https://cleanasnew.com/about-us/advisory-board",
   "gender": "Male",
   "nationality": "American",
  "image" : "https://cleanasnew.com/assets/img/advisory-board-profiles/James-Griffin.jpg",
  "description": " The Clean As New® technology addresses 3 key plant issues: Safety, Environmental Sustainability and Reliability. I’m excited to be engaged with the future success of CLEAN AS NEW as an advisory board member.",
    "givenName": "Jim ",
  "familyName": "Griffin",
"alumniOf": [
	{
	 "@type": "CollegeOrUniversity",
	 "name": " University of Wisconsin-Stout",
	 "sameAs": "https://www.southalabama.edu/"
	},
	{
	 "@type": "CollegeOrUniversity",
	 "name": "Bachelor’s Degree in Industrial Education and a Master’s Degree in Safety and Environmental."
	}
],
"worksFor": {
    "@type": "Organization",
    "name": " San Jacinto College",
    "url": "https://www.sanjac.edu/",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Pasadena, TX", 
      "postalCode": "77504;",
      "streetAddress": " 4620 Fairmont Pkwy."
    }
  } 
        }
        ]
}}
</script> 
	<script>$('.dropdown').dropdown();</script>
	<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>

@endsection