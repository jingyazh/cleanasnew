@extends('app')

@section('title')
<!-- <title>Clean As New® Advisory Board Members</title> -->
<title>{{ $siteSetting->aboutus_meta_title }}</title>
<meta name="description" content="{{ $siteSetting->aboutus_meta_description }}">
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
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/about-us" itemprop="item"> <span itemprop="name">{{__('About Us')}}</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">{{__('Advisory Board')}}</span>
        <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
          @if(isset($boards) && $boards != null)
          @foreach($boards as $key => $value)
          <li class="nav-item" itemprop="name"> <a class="nav-link {{ $key==0 ? 'active' : '' }}" itemprop="url" id="james-tab" data-toggle="tab" href="#james{{ $key+1 }}" role="tab" aria-controls="james{{ $key+1 }}" aria-selected="false"> {{ $value->name }} </a>
              <hr>
            </li>
          @endforeach
          @endif
            <!-- <li class="nav-item" itemprop="name"> <a class="nav-link active" itemprop="url" id="james-tab" data-toggle="tab" href="#james" role="tab" aria-controls="james" aria-selected="false">James Griffin </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="don-tab" data-toggle="tab" href="#don" role="tab" aria-controls="don" aria-selected="false">Don Empfield </a>
              <hr>
            </li> -->
          </ul>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 scrollProfile float-left desktopNone">
          <div class="tab-content" id="myTabContent">
          @if(isset($boards) && $boards != null)
          @foreach($boards as $key => $value)
          <div class="tab-pane fade {{ $key==0 ? ' show active' : '' }}" id="james{{$key+1}}" role="tabpanel" aria-labelledby="james-tab{{$key+1}}">
              <div class="col-4 float-left"> <a href="/about-us/advisory-board/{{$value->id}}"> <img src="{{$value->image}}" data-src="/{{$value->image}}" class="img-fluid polaroid lazyload" alt="{{$value->name}}"/>
                <p class="text-muted text-right namePosition">{{$value->name}} </p>
                </a> </div>
              <div class="col-8 float-left">
                {!! $value->quote !!}
                <p><a href="/about-us/advisory-board/{{$value->id}}">Read more &#8594;</a></p>
              </div>
            </div>
          @endforeach
          @endif
            <!-- <div class="tab-pane fade show active" id="james" role="tabpanel" aria-labelledby="james-tab">
              <div class="col-4 float-left"> <a href="/about-us/advisory-board-members/james-griffin"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/advisory-board-profiles/James-Griffin.jpg" class="img-fluid polaroid lazyload" alt="James Griffin."/>
                <p class="text-muted text-right namePosition">James Griffin </p>
                </a> </div>
              <div class="col-8 float-left">
                <blockquote>
                  <p class="quotation">The <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> technology addresses 3 key plant issues: Safety, Environmental Sustainability and Reliability. I’m excited to be engaged with the future success of <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> as an advisory board member.</p>
                </blockquote>
                <p><a href="/about-us/advisory-board-members/james-griffin">Read more &#8594;</a></p>
              </div>
            </div>
            <div class="tab-pane fade" id="don" role="tabpanel" aria-labelledby="don-tab">
              <div class="col-4 float-left"><a href="/about-us/advisory-board-members/don-empfield"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/advisory-board-profiles/Don-Empfield.jpg" class="img-fluid polaroid lazyload" alt="Don Empfield."/>
                <p class="text-muted text-right namePosition">Don Empfield</p>
                </a> </div>
              <div class="col-8 float-left">
                <blockquote>
                  <p class="quotation">I joined the <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Board because I have a keen interest in promoting the technology for safer and more reliable operations and a focus on the future value it can bring.</p>
                </blockquote>
                <p><a href="/about-us/advisory-board-members/don-empfield">Read more  &#8594;</a></p>
              </div>
            </div> -->
          </div>
        </div>
        <!-- /.col-md-8 -->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
        @if(isset($board) && $board != null)
        @foreach($boards as $key => $value)
        <div class="card">
            <div class="card-header" role="tab" id="headingTwo{{ $key+1 }}"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo{{ $key+1 }}"
              aria-expanded="false" aria-controls="collapseTwo{{ $key+1 }}">
              <h5 class="mb-0"> {{ $value->name }} </h5>
              </a> </div>
            <div id="collapseTwo{{ $key+1 }}" class="collapse" role="tabpanel" aria-labelledby="headingTwo{{ $key+1 }}"
             data-parent="#accordionEx">
              <div class="card-body padding15"> <a href="/about-us/advisory-board/{{$value->id}}"> <img src="https://cleanasnew.com/assets/img/advisory-board-profiles/James-Griffin.jpg" class="img-fluid largImg lazyload" alt="James Griffin."/>
                <p  class="text-muted namePosition"> {{ $value->name }} </p>
                </a>
                <blockquote>
                  <p class="quotation">{!! $value->quote !!}</p>
                </blockquote>
                <p><a href="/about-us/advisory-board/{{$value->id}}">Read more &#8594;</a></p>
              </div>
            </div>
          </div>
        @endforeach
        @endif
          <!-- <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
              aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0"> James Griffin </h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
             data-parent="#accordionEx">
              <div class="card-body padding15"> <a href="https://cleanasnew.com/about-us/advisory-board-members/james-griffin"> <img src="https://cleanasnew.com/assets/img/advisory-board-profiles/James-Griffin.jpg" class="img-fluid largImg lazyload" alt="James Griffin."/>
                <p  class="text-muted namePosition">James Griffin </p>
                </a>
                <blockquote>
                  <p class="quotation">The <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> technology addresses 3 key plant issues: Safety, Environmental Sustainability and Reliability. I’m excited to be engaged with the future success of <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> as an advisory board member. </p>
                </blockquote>
                <p><a href="https://cleanasnew.com/about-us/advisory-board-members/james-griffin">Read more &#8594;</a></p>
              </div>
            </div>
          </div>
          
          <div class="card">
            <div class="card-header" role="tab" id="headingThree4"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4"
              aria-expanded="false" aria-controls="collapseThree4">
              <h5 class="mb-0">Don Empfield</h5>
              </a> </div>
            <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4"
             data-parent="#accordionEx">
              <div class="card-body padding15"> <a href="https://cleanasnew.com/advisory-board-members/don-empfield"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/advisory-board-profiles/Don-Empfield.jpg" class="img-fluid largImg lazyload"  alt="Don Empfield."/>
                <p class="text-muted namePosition">Don Empfield</p>
                </a>
                <blockquote>
                  <p class="quotation">I joined the <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> Board because I have a keen interest in promoting the technology for safer and more reliable operations and a focus on the future value it can bring.</p>
                </blockquote>
                <p><a href="https://cleanasnew.com/advisory-board-members/don-empfield">Read more  &#8594;</a></p>
              </div>
            </div>
          </div> -->
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
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>

@endsection