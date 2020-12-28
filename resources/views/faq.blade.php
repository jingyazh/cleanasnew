@extends('app')

@section('title')
<title>{{ $siteSetting->faq_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->faq_meta_description }}">
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null])
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
			  <span itemprop="name">FAQ</span>
			  <meta itemprop="position" content="2">
		  </span>
	 </p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container contentbg">
      <div class="row">
        <div class="col-md-4 mb-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
          @if(isset($faqs) && $faqs != null)
          @foreach($faqs as $key => $value)
          <li class="nav-item" itemprop="name">
            <a class="nav-link {{ $key==0 ? 'active show' : '' }}" id="id{{$key+1}}-tab" data-toggle="tab" href="#id{{$key+1}}" role="tab" aria-controls="id{{$key+1}}" aria-selected="{{ $key==0 ? 'true' : 'false' }}">
                {!! $value->title !!}
            </a>
              <hr>
          </li>
          @endforeach
          @endif
          </ul>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 desktopNone">
          <div class="tab-content" id="myTabContent" itemscope itemtype="https://schema.org/FAQPage">
            @if(isset($faqs) && $faqs != null)
            @foreach($faqs as $key => $value)
            <div class="tab-pane fade {{ $key==0 ? 'active show' : '' }}" id="id{{$key+1}}" role="tabpanel" aria-labelledby="id{{$key+1}}-tab" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
              <h2 itemprop="name">{!! $value->title !!}</h2>
              <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">{!! $value->embed !!}</p></div>
              <!-- <a href="/posts/washpad-hydroblasting-vs-cleanasnew">Read more &#8594;</a></p> -->
            </div>
            @endforeach
            @endif            
          </div>
        </div>
        <!-- /.col-md-8 -->

        <!--Accordion wrapper-->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">

        @if(isset($faqs) && $faqs != null)
        @foreach($faqs as $key => $value)
        <div class="card">
            <div class="card-header" role="tab" id="headingOne{{$key+1}}">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$key+1}}" aria-expanded="true"
                aria-controls="collapseOne{{$key+1}}">
              {!! $value->title !!}
              </a>
            </div>
            <div id="collapseOne{{$key+1}}" class="collapse {{ $key==0 ?  'show' : '' }}" role="tabpanel" aria-labelledby="headingOne{{$key+1}}"
                data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  {!! $value->embed !!}
                  <!-- <p><a href="/posts/washpad-hydroblasting-vs-cleanasnew">Read more &#8594;</a> </p> -->
                </div>
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
@endsection
