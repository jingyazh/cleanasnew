@extends('app')

@section('title')
<title>{{ isset($board) ? $board->name : '' }} - Advisory Board Members - Clean As New®</title>
<meta content="{{ $board->og_locale != null ? $board->og_locale : ''}}" property="og:locale">
<meta content="{{ $board->og_site_name != null ? $board->og_site_name : ''}}" property="og:site_name" />
<meta content="{{ $board->og_type != null ? $board->og_type : ''}}" property="og:type">
<meta content="{{ $board->og_url != null ? $board->og_url : ''}}" property="og:url">
<meta content="{{ $board->og_title != null ? $board->og_title : ''}}" property="og:title">
<meta content="{{ $board->og_description != null ? $board->og_description : ''}}" property="og:description">
<meta content="{{ $board->og_image != null ? $board->og_image : ''}}" property="og:image" />
<meta content="{{ $board->og_image_width != null ? $board->og_image_width : ''}}" property="og:image:width" />
<meta content="{{ $board->og_image_height != null ? $board->og_image_height : ''}}" property="og:image:height" />
@endsection

@section('content')

@include('layout.header', [$menuSetting, $extraPages])
<main>
  <div class="jumbotron text-left">
     <div class="headline"  itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
         <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/about-us" itemprop="item"> <span itemprop="name">About Us</span></a>  <meta itemprop="position" content="1"></span> &#8250; <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/about-us/advisory-board" itemprop="item"><span itemprop="name">Advisory Board</span></a> <meta itemprop="position" content="2"></span> &#8250;   <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{ isset($board) ? $board->name : '' }}</span>     <meta itemprop="position" content="3"></span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active">
              @if (isset($board) && $board != null)
              <div class="col-3 float-left">
                <img src="https://cleanasnew.com/assets/img/1px.png" data-src="/{{ $board->image }}?v=20200330" class="img-fluid lazyload" alt="{{ isset($board) ? $board->name : '' }}."/>
                <p class="text-muted text-right namePosition2 desktopNone">{{ isset($board) ? $board->name : '' }}</p>
                <p class="text-muted text-left namePosition2 mobileNone">{{ isset($board) ? $board->name : '' }}</p>
            </div>
            <div class="col-md-9 float-left">
              <div class="scrollProfile45">
                <div class="card shadow-sm">
                   <div class="card-body padding15">
                    {!! $board->embed !!}
                    <br>
                  </div>
                </div>
              </div>
            </div>
              @endif
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
