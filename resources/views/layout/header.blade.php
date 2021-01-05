<div class="navbar-dark fixed-top bg-white">
  <div class="ui dropdown" style="float:right; padding:1%">
    @if (Session::get('locale') != null)
    <div class="text">{{ Config::get('app.locales')[Session::get('locale')]}} </div>
    @else
    <div class="text">English </div>
    @endif
    <i class="dropdown icon"></i>
    <ul class="menu">
      <li class="item"><a href="/lang/en">English </a></li>
      <li class="item"><a href="/lang/fr">Français (FR)</a></li>
      <li class="item"><a href="/lang/es">Español (ES)</a></li>
      <li class="item"><a href="/choose-language">Others...</a></li>
      <!-- <li class="item"><a href="/lang/mx">Español (MX)</a></li>
      <li class="item"><a href="/lang/pt-br">Português (BR)</a></li>
      <li class="item"><a href="/lang/de">Deutsch (DE)</a></li>
      <li class="item"><a href="/lang/ru">Русский (RU)</a></li>
      <li class="item"><a href="/lang/hi-in">Hindi (IN)</a></li>
      <li class="item"><a href="/lang/pa-pk">Punjabi (PK)</a></li>
      <li class="item"><a href="/lang/cn">中文 (CN)</a></li>
      <li class="item"><a href="/lang/jp">日本語 (JP)</a></li>
      <li class="item"><a href="/lang/th">Thai (TH)</a></li>
      <li class="item"><a href="/lang/ml">Malay (ML)</a></li> -->
    </ul>
  </div>
  <style>
    ul.menu li.item { padding: 0 !important}
    ul.menu li.item a { display:block;width:100%; padding:.71428571rem; }
  </style>
  <nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="/"> <img src="/assets/img/Clean-As-New-logo.png" class="img-fluid lazyload" alt="Clean As New Powered By Tech Sonic®." /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto" itemscope itemtype="http://www.schema.org/SiteNavigationElement">
        @if (Request::path() == '/')
        <li style="display: {{ $menuSetting[0]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/">{{ __('Home') }} <span class="sr-only">(current)</span></a> </li>
        @else
        <li style="display: {{ $menuSetting[0]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/">{{ __('Home') }} <span class="sr-only">(current)</span></a> </li>
        @endif
        @if (strpos('/how-we-compare', Request::path()) != false || Request::is('comparisons/*'))
        <li style="display: {{ $menuSetting[1]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/how-we-compare">{{ __('How We Compare') }}</a> </li>
        @else
        <li style="display: {{ $menuSetting[1]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/how-we-compare">{{ __('How We Compare') }}</a> </li>
        @endif
        @if (strpos('/what-we-clean', Request::path()) != false)
        <li style="display: {{ $menuSetting[2]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/what-we-clean">{{__('What We Clean')}}</a> </li>
        @else
        <li style="display: {{ $menuSetting[2]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/what-we-clean">{{__('What We Clean')}}</a> </li>
        @endif
        @if (strpos('/our-services', Request::path()) != false || Request::is('services/*'))
        <li style="display: {{ $menuSetting[3]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/our-services">{{__('Our Services')}}</a> </li>
        @else
        <li style="display: {{ $menuSetting[3]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/our-services">{{__('Our Services')}}</a> </li>
        @endif
        @if (strpos('/how-we-do-it', Request::path()) != false)
        <li style="display: {{ $menuSetting[4]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/how-we-do-it">{{__("How We Do It")}} </a> </li>
        @else
        <li style="display: {{ $menuSetting[4]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/how-we-do-it">{{__("How We Do It")}} </a> </li>
        @endif
        @if (strpos('/our-value-to-you', Request::path()) != false)
        <li style="display: {{ $menuSetting[5]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/our-value-to-you">{{__("Our Value To You")}}</a> </li>
        @else
        <li style="display: {{ $menuSetting[5]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/our-value-to-you">{{__("Our Value To You")}}</a> </li>
        @endif
        @if (strpos('/faq', Request::path()) != false)
        <li style="display: {{ $menuSetting[6]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/faq">{{__("FAQ")}}</a> </li>
        @else
        <li style="display: {{ $menuSetting[6]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/faq">{{__("FAQ")}}</a> </li>
        @endif
        @if (strpos('/testimonials', Request::path()) != false || Request::is('testimonials/*'))
        <li style="display: {{ $menuSetting[7]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/testimonials">{{__("Testimonials")}}</a> </li>
        @else
        <li style="display: {{ $menuSetting[7]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/testimonials">{{__("Testimonials")}}</a> </li>
        @endif
        @if (strpos('/esg', Request::path()) != false || Request::is('esg/*'))
        <li style="display: {{ $menuSetting[8]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/esg">{{__("ESG")}}</a> </li>
        @else
        <li style="display: {{ $menuSetting[8]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/esg">{{__("ESG")}}</a> </li>
        @endif
        @if (strpos('/about-us', Request::path()) != false || Request::is('about-us/*'))
        <li style="display: {{ $menuSetting[9]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/about-us">{{__("About Us")}}</a> </li>
        @else
        <li style="display: {{ $menuSetting[9]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/about-us">{{__("About Us")}}</a> </li>
        @endif
        @if (strpos('/contact', Request::path()) != false || Request::is('contact/*'))
        <li style="display: {{ $menuSetting[10]->value == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/contact">{{__('Contact')}}</a> </li>
        @else
        <li style="display: {{ $menuSetting[10]->value == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/contact">{{__('Contact')}}</a> </li>
        @endif
        @if(isset($extraPages) && count($extraPages) > 0)
        @foreach($extraPages as $page)
        @if (strpos('/page', Request::path()) != false || Request::is('page/*'))
        <li style="display: {{ $page->is_visible == '0' ? 'none' : '' }}" class="nav-item active" itemprop="name"> <a class="nav-link" itemprop="url" href="/page/{{ $page->id}}">{{ $page->title }}</a> </li>
        @else
        <li style="display: {{ $page->is_visible == '0' ? 'none' : '' }}" class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" href="/page/{{ $page->id}}">{{ $page->title }}</a> </li>
        @endif
        @endforeach
        @endif
      </ul>
    </div>
  </nav>
</div>