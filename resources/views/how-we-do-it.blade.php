@extends('app')

@section('title')
<title>{{ $siteSetting->todos_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->todos_meta_description }}">
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
      <p>
        <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
          <a href="/" itemprop="item">
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
          @if(isset($todos) && $todos != null)
          @foreach($todos as $key => $value)
          <li><a href="#" id="tab{{ $key+1 }}">{{ $value->title }}</a></li>
          @endforeach
          @endif
        </ul>
        <div class="content desktopNone">

          @if(isset($todos) && $todos != null)
          @foreach($todos as $key => $value)
          <div class="tab{{ $key+1 }}">
            <div class="col-md-8 float-left">
              <div class="card card-container">
                <div class="card-body">
                  <div class="card-inner2">
                    <div class="scroll">
                      {!! $value->embed !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 float-left margin img-fluid lazyload"> <img src="{{ $value->image }}" loading="lazy" alt="{{'How We Do It -' . strtolower($value->title)}}" /> </div>
          </div>
          @endforeach
          @endif
        </div>
        <!-- /.col-md-8 -->

        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
          @if(isset($todos) && $todos != null)
          @foreach($todos as $key => $value)
          <div class="card">
            <div class="card-header" role="tab" id="headingOne{{$key}}"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne{{$key}}1" aria-expanded="true" aria-controls="collapseOne{{$key}}1">
                {!! $value->title !!}
              </a> </div>
            <div id="collapseOne{{$key}}1" class="collapse {{$key==0 ? 'show' : ''}}" role="tabpanel" aria-labelledby="headingOne{{$key}}" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  {!! $value->embed !!}
                  <img src="{{ $value->image }}" alt="{{'how we do it -' . strtolower($value->title)}}" loading="lazy" class="img-fluid lazyload" />
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
  window.jQuery || document.write('<script src="https://cleanasnew.com/js/vendor/jquery-slim.min.js"><\/script>')
</script>
<script src="https://cleanasnew.com/js/bootstrap.min2.js"></script>
<script>
  $('.dropdown').dropdown();
</script>
<script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
  $(document).ready(function() {
    $(".content").find("[class^='tab']").hide(); // Hide all content
    $(".tabs li:first").attr("class", "current"); // Activate the first tab
    $(".content .tab1").fadeIn(); // Show first tab's content

    $('.tabs a').click(function(e) {
      e.preventDefault();
      if ($(this).closest("li").attr("class") == "current") { //detection for current tab
        return;
      } else {
        $(".content").find("[class^='tab']").hide(); // Hide all content
        $(".tabs li").attr("class", ""); //Reset id's
        $(this).parent().attr("class", "current"); // Activate this
        $('.' + $(this).attr('id')).fadeIn(); // Show content for the current tab
      }
    });
  });
</script>
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection