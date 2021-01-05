@extends('app')

@section('title')
<title>Don Empfield - Advisory Board Members - Clean As New®</title>
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
<main>
  <div class="jumbotron text-left">
     <div class="headline"  itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
         <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/about-us" itemprop="item"> <span itemprop="name">About Us</span></a>  <meta itemprop="position" content="1"></span> &#8250; <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/about-us/advisory-board" itemprop="item"><span itemprop="name">Advisory Board</span></a> <meta itemprop="position" content="2"></span> &#8250;   <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">Don Empfield</span>     <meta itemprop="position" content="3"></span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active">
              <div class="col-3 float-left"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/advisory-board-profiles/Don-Empfield.jpg?v=20200330" class="img-fluid lazyload" alt="Don Empfield."/>
                 <p class="text-muted text-right namePosition2 desktopNone">Don Empfield</p>
  <p class="text-muted text-left namePosition2 mobileNone">Don Empfield</p>
              </div>
              <div class="col-md-9 float-left">
                <div class="scrollProfile45">
                  <div class="card shadow-sm">
                     <div class="card-body padding15">
                      <p>Don Empfield is an experienced business leader with a broad range of manufacturing and consulting experience in the petro/specialty chemicals industry. After receiving his chemical engineering degree from the University of South Alabama, Don began a 24-year career with Akzo Nobel, where he was ultimately the site manager for the Deer Park metal alkyls facility. </p>
                      <p> Following his tenure at Akzo Nobel, Don served as the General manager for Sunoco Chemicals for 7 years.</p>
                      <p>Don joined the Zachry Group in 2010, where he was the General manager for Maintenance Services and Turnarounds, and the Senior Director of Business Development for 10 years. </p>
                      <p>Don has continued to provide independent consulting services related to the safe and effective provision of Turnaround and Specialty Services. 
                        Don sits on the Advisory Council for San Jacinto College and an active member of the Texas Chemical Council and the Association of Chemical Industry of Texas.</p>
                      <br>
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
  "name" : "Don Empfield",
   "jobTitle": "Clean As New® Advisory Board Member",
     "url": "https://cleanasnew.com/about-us/advisory-board-members/don-empfield",
   "gender": "Male",
   "nationality": "American",
  "image" : "https://cleanasnew.com/assets/img/advisory-board-profiles/Don-Empfield.jpg",
  "description": "I joined the Clean As New® Board because I have a keen interest in promoting the technology for safer and more reliable operations and a focus on the future value it can bring.",
    "givenName": "Donald",
  "familyName": "Empfield",
"alumniOf": [
	{
	 "@type": "CollegeOrUniversity",
	 "name": "University of South Alabama",
	 "sameAs": "https://www.southalabama.edu/"
	},
	{
	 "@type": "CollegeOrUniversity",
	 "name": "chemical engineering degree"
	}
],
"worksFor": {
    "@type": "Organization",
    "name": " Zachry Construction Corporation",
    "url": "https://www.zachrygroup.com/",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "San Antonio", 
      "postalCode": "78221",
      "streetAddress": "527 Logwood Avenue"
    }
  }
        }
        ]
}}
</script>
	<script>$('.dropdown').dropdown();</script>
	<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>

@endsection