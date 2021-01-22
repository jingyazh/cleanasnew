@extends('app')

@section('title')
<title>{{ $testimonial->meta_title }}</title>
<meta name="description" content="{{ $testimonial->meta_description }}">
<meta content="{{ $og->og_locale != null ? str_replace('-', '_', $og->og_locale) : ''}}" property="og:locale">
<meta content="{{ $og->og_site_name != null ? $og->og_site_name : ''}}" property="og:site_name" />
<meta content="{{ $og->og_type != null ? $og->og_type : ''}}" property="og:type">
<meta content="{{ $og->og_url != null ? $og->og_url : ''}}" property="og:url">
<meta content="{{ $og->og_title != null ? $og->og_title : ''}}" property="og:title">
<meta content="{{ $og->og_description != null ? $og->og_description : ''}}" property="og:description">
<meta content="{{ $og->og_image != null ? $og->og_image : ''}}" property="og:image" />
<meta content="{{ $og->og_image_width != null ? $og->og_image_width : ''}}" property="og:image:width" />
<meta content="{{ $og->og_image_height != null ? $og->og_image_height : ''}}" property="og:image:height" />
@endsection

@section('content')

@include('layout.header', [$menuSetting, $extraPages])
<main>
  <div class="jumbotron text-left">
<div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/testimonials" itemprop="item"><span itemprop="name">{{__("Testimonials")}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{ $testimonial->title }}</span>
        <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
          @if(isset($reviews) && $reviews!=null)
          @foreach($reviews as $key => $value)
            <li class="nav-item" itemprop="name">
                <a class="nav-link {{$key==0 ? 'active' : ''}}" id="home-tab{{$key+1}}" data-toggle="tab" href="#home{{$key+1}}" role="tab" aria-controls="home{{$key+1}}" aria-selected="{{$key==0 ? 'true' : 'false'}}">
                  {{ $value->title }}
                </a>
              <hr>
            </li>
          @endforeach
          @endif
          </ul>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 desktopNone">
          <div class="tab-content" id="myTabContent">
          @if(isset($reviews) && $reviews!=null)
          @foreach($reviews as $key => $value)
          <div class="tab-pane fade{{$key==0 ? 'show active' : ''}}" id="home{{$key+1}}" role="tabpanel" aria-labelledby="home-tab{{$key+1}}">
                <h2 style="font-weight: bold;">{{ $value->title }}</h2>
              {!! $value->embed !!}
            </div>
          @endforeach
          @endif
          </div>
        </div>
        <!-- /.col-md-8 -->

        <!--Accordion wrapper-->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
          @if(isset($reviews) && $reviews!=null)
          @foreach($reviews as $key => $value)
          <div class="card">
            <div class="card-header" role="tab" id="headingOne{{$key+1}}"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$key+1}}" aria-expanded="{{$key==0 ? 'true' : 'false'}}"
                     aria-controls="collapseOne{{$key+1}}">
              <h5 class="mb-0"> {{ $value->title }}</h5>
              </a> </div>
            <div id="collapseOne{{$key+1}}" class="collapse {{ $key==0 ? 'show' : '' }}" role="tabpanel" aria-labelledby="headingOne{{$key+1}}"
                    data-parent="#accordionEx">
              <div class="card-body col-md-12">
                {!! $value->embed !!}
              </div>
            </div>
          </div>
          @endforeach
          @endif
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
<script async src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> <script>window.jQuery || document.write('<script src="https://cleanasnew.com/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script>
<script>$('.dropdown').dropdown();</script>
 <script>   {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://cleanasnew.com/testimonials/case-studies.html"
      },
  "headline": "Removal of Iron Carbonate Deposits From Heat Exchangers Used in Ammonia Production Using Tech Sonic Cleaning",
      "image": [
        "https://cleanasnew.com/assets/img/fb-heat-exchanger-cleaning.jpg",
        "https://cleanasnew.com/assets/img/fb-heat-exchanger-bundle.jpg"
       ],
      "datePublished": "2020-04-07T01:52:00+08:00",
      "dateModified": "2020-07-17T08:38:00+08:00",
      "author": {
        "@type": "Person",
        "name": "Byron Kieser",
        "jobTitle": "Chief Science Officer for Clean As New"
      },
       "publisher": {
        "@type": "Organization",
        "name": "Clean As New",
        "logo": {
          "@type": "ImageObject",
          "url": "https://cleanasnew.com/assets/img/CLean-As-New-logo600.png"
        }
      },
      "url": "https://cleanasnew.com",
	    "sameAs" : [ "https://www.linkedin.com/in/byron-kieser-2697b91/"
    ]
    }
    </script>

   <script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection
