@extends('app')

@section('title')
<title>Feedback - Shell Deer Park, Alfa Laval, Exxon Mobil,..</title>
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="testimonials" itemprop="item"><span itemprop="name">Testimonials</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">Feedback</span>
        <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container contentbg">
      <div class="row">
        <div class="col-md-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
            <li class="nav-item" itemprop="name"> <a class="nav-link active" id="shell-tab" data-toggle="tab" href="#shell" role="tab" aria-controls="shell" aria-selected="true"> Shell Deer Park </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="Alfa-tab" data-toggle="tab" href="#Alfa" role="tab" aria-controls="Alfa" aria-selected="false"> Alfa Laval </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="Exxon-tab" data-toggle="tab" href="#Exxon" role="tab" aria-controls="Exxon" aria-selected="false">Exxon Mobil </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="Versa-tab" data-toggle="tab" href="#Versa" role="tab" aria-controls="Versa" aria-selected="false">Versa Integrity</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="StructuredPacking-tab" data-toggle="tab" href="#StructuredPacking" role="tab" aria-controls="StructuredPacking" aria-selected="false">Dow Chemical </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="Sarnia-tab" data-toggle="tab" href="#Sarnia" role="tab" aria-controls="Sarnia" aria-selected="false">Shell Sarnia </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="Scotford-tab" data-toggle="tab" href="#Scotford" role="tab" aria-controls="Scotford" aria-selected="false">Shell Scotford </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="Moerdijk-tab" data-toggle="tab" href="#Moerdijk" role="tab" aria-controls="Moerdijk" aria-selected="false">Shell Moerdijk</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="Global-tab" data-toggle="tab" href="#Global" role="tab" aria-controls="Global" aria-selected="false">Shell Global</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="Suncor-tab" data-toggle="tab" href="#Suncor" role="tab" aria-controls="Suncor" aria-selected="false">Suncor Energy</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="CF-tab" data-toggle="tab" href="#CF" role="tab" aria-controls="CF" aria-selected="false">CF Industries</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="CE-tab" data-toggle="tab" href="#CE" role="tab" aria-controls="CE" aria-selected="false">Cenovus Energy</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="Nucor-tab" data-toggle="tab" href="#Nucor" role="tab" aria-controls="Nucor" aria-selected="false">Nucor</a>
              <hr>
            </li>
          </ul>
        </div>
        <div class="col-md-8 desktopNone">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="shell" role="tabpanel" aria-labelledby="shell-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"> <img src="/assets/img/1px.png" data-src="/assets/img/feedback/Shell-Deer-Park.jpg" class="img-fluid largImg lazyload" alt="Tech Sonic technology is efficient and effective at cleaning dirty heat exchanger. "/></div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Shell Deer Park, Turnaround Manager: </p>
                  <p class="quotation" itemprop="reviewBody">I thought everything you guys did was awesome and have already been spreading recommendations to continue using you guys whenever we can!</p>
                </blockquote>
                <meta itemprop="name" content="Shell Deer Park"/>
              </div>
            </div>
            <div class="tab-pane fade" id="Alfa" role="tabpanel" aria-labelledby="Alfa-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"> <img src="/assets/img/1px.png" data-src="/assets/img/feedback/AlfaLaval.jpg" class="img-fluid largImg lazyload" alt=" Compabloc heat exchanger before and after cleaning."/></div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Alfa Laval, Business Manager: </p>
                  <p class="quotation" itemprop="reviewBody">As a test Ulrik had our small test decanter into their shop for a 24 hour turn around. The equipment was immaculately cleaned within the required time requested with very little concern to do so on <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s process.</p>
                </blockquote>
                <meta itemprop="name" content="Alfa Laval"/>
              </div>
            </div>
            <div class="tab-pane fade" id="Exxon" role="tabpanel" aria-labelledby="Exxon-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"><img src="/assets/img/1px.png" data-src="/assets/img/feedback/Exxon-heat-exchanger.jpg" class="img-fluid largImg lazyload" alt="Like 'new' heat exchanger."/></div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Exxon Mobil, Heat Team Lead: </p>
                  <p class="quotation" itemprop="reviewBody">When we want our equipment “really clean” we send it to <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>.</p>
                </blockquote>
                <meta itemprop="name" content="Exxon Mobil"/>
              </div>
            </div>
            <div class="tab-pane fade" id="Versa" role="tabpanel" aria-labelledby="Versa-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"> <img src="/assets/img/1px.png" data-src="/assets/img/feedback/Versa-integrity.jpg" class="img-fluid largImg lazyload" alt="Cleans hard to reach areas in a heat exchanger."/></div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Versa Integrity, Operations Manager: </p>
                  <p class="quotation" itemprop="reviewBody">The exchanger was so clean our guys could not tell that the exchanger had ever been in service.</p>
                </blockquote>
                <meta itemprop="name" content="Versa Integrity"/>
              </div>
            </div>
            <div class="tab-pane fade" id="StructuredPacking" role="tabpanel" aria-labelledby="StructuredPacking-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"> <img src="/assets/img/1px.png" data-src="/assets/img/feedback/Dow.jpg" class="imimg-fluid largImg lazyload" alt="Clean As New® offers a faster cleaning, faster repair turnaround, and faster return to service."/></div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Dow Chemical, Lead Turnaround Planner: </p>
                  <p class="quotation" itemprop="reviewBody">Heard nothing but good things and we are in the process of planning our next outage. Promise if we can send it there to be cleaned, we will. Thanks again.</p>
                </blockquote>
                <meta itemprop="name" content=" Dow Chemical"/>
              </div>
            </div>
            <div class="tab-pane fade" id="Sarnia" role="tabpanel" aria-labelledby="Sarnia-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"><img src="/assets/img/1px.png" data-src="/assets/img/feedback/shell-sarina-compabloc.jpg" class="img-fluid largImg lazyload" alt="Clean As New® cleans compabloc heat exchangers in a fraction of the time required for hydroblasting."/> </div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Shell Sarnia, Refinery Manager: </p>
                  <p class="quotation" itemprop="reviewBody">The Refinery decided to test clean four Compabloc units using the new process proposed by Tech Sonic. With the clean Compablocs back in operation, the refinery client captured the throughput and heat transfer data rates to reveal an annual (bpd) recovery of US$4.27M.</p>
                </blockquote>
                <meta itemprop="name" content="Shell Sarnia"/>
              </div>
            </div>
            <div class="tab-pane fade" id="Scotford" role="tabpanel" aria-labelledby="Scotford-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"><img src="/assets/img/1px.png" data-src="../assets/img/feedback/shell-scotford.jpg" class="img-fluid largImg lazyload" alt=" Cleans Tube Exchanger back to original specs."/> </div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Shell Scotford: </p>
                  <p class="quotation" itemprop="reviewBody">We experienced excellent results with cleaning components for offsite repair/overhaul. 3rd party companies have never seen valves as clean as the ones coming from Scotford. Stainless steel bundles were cleaned better than expected and typically achieved IRIS quality. Bundles with other material composition were generally cleaned to Eddy Current quality. To achieve IRIS spec for these non-stainless items, some were rinsed with a 20Kpsi & rotary lance.</p>
                </blockquote>
                <meta itemprop="name" content=" Shell Scotford"/>
              </div>
            </div>
            <div class="tab-pane fade" id="Moerdijk" role="tabpanel" aria-labelledby="Moerdijk-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"><img src="/assets/img/1px.png" data-src="/assets/img/feedback/shell-moerdijk-rotator.jpg" class="img-fluid largImg lazyload" alt="Like 'new' rotating equipment."/> </div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Shell Moerdijk, Production Cleaning Manager: </p>
                  <p class="quotation" itemprop="reviewBody">Tech Sonic Cleaning Systems are twice as fast at half the cost of traditional hydroblasting. We achieve thorough, complete cleaning that is non-destructive compared to conventional applications.</p>
                </blockquote>
                <meta itemprop="name" content=" Shell Moerdijk"/>
              </div>
            </div>
            <div class="tab-pane fade" id="Global" role="tabpanel" aria-labelledby="Global-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"><img src="/assets/img/1px.png" data-src="/assets/img/feedback/exchanger-bundles.jpg" class="img-fluid largImg lazyload" alt="A clean Shell Exchanger improves plant productivity."/> </div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Shell Global, Operations & Technology Lead: </p>
                  <p class="quotation" itemprop="reviewBody">This is a game changing technology in cleaning effectiveness. Exchanger bundles simply come out cleaner than when addressed with conventional technology. There is a better performance of the bundles on start-up, and these results are achieved in less cleaning time per bundle. This will allow us to be more aggressive in our turnaround schedules in the future. We typically see 70-80% recovery of performance with HP water jetting (caused by residual fouling on the shell side of the bundle). Now we see up to 100% of design heat transfer performance after start-up using the Tech Sonic applications. </p>
                </blockquote>
                <meta itemprop="name" content="Shell Global"/>
              </div>
            </div>
            <div class="tab-pane fade" id="Suncor" role="tabpanel" aria-labelledby="Suncor-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"><img src="/assets/img/1px.png" data-src="/assets/img/feedback/suncor-scaffolding.jpg" class="img-fluid largImg lazyload" alt="Tech Sonic technology is efficient and effective at cleaning dirty scaffolding."/> </div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Suncor Energy: </p>
                  <p class="quotation" itemprop="reviewBody">For every dollar we spend with Tech Sonic, we save four dollars in operational and cost efficiencies. We used to have to throw out most of the components as they could not be put back into production. Our capital costs have reduced dramatically. </p>
                </blockquote>
                <meta itemprop="name" content=" Suncor"/>
              </div>
            </div>
            <div class="tab-pane fade" id="CF" role="tabpanel" aria-labelledby="CF-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"><img src="/assets/img/1px.png" data-src="/assets/img/feedback/cf-industries-shell-exchanger.jpg" class="img-fluid largImg lazyload" alt="Tech Sonic systems can clean most exchangers for less than half of replacement cost."/> </div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From CF Industries, Production Manager: </p>
                  <p class="quotation" itemprop="reviewBody">We achieved a 27% increase in production of Ammonia after Tech Sonic cleaned our C-109 process train heat exchangers. </p>
                </blockquote>
                <meta itemprop="name" content="CF Industries"/>
              </div>
            </div>
            <div class="tab-pane fade" id="CE" role="tabpanel" aria-labelledby="CE-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"><img src="/assets/img/1px.png" data-src="/assets/img/feedback/cenovus-energy-bucket-pool.jpg" class="img-fluid largImg lazyload" alt="Tech Sonic systems can clean most packing materials for less than half of replacement cost. "/> </div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Cenovus Energy, Turnaround Manager: </p>
                  <p class="quotation" itemprop="reviewBody">Our flow rates improved from 160 to 260 meters cubed per hour after using Tech Sonic’s innovative cleaning technologies. Truly amazing. </p>
                </blockquote>
                <meta itemprop="name" content="Cenovus Energy"/>
              </div>
            </div>
            <div class="tab-pane fade" id="Nucor" role="tabpanel" aria-labelledby="Nucor-tab" itemscope itemtype="https://schema.org/Product">
              <div class="col-4 float-left"><img src="/assets/img/1px.png" data-src="/assets/img/feedback/nucor.jpg" class="img-fluid largImg lazyload" alt="Clean heat exchangers require less energy and improves plant efficiencies."/> </div>
              <div class="col-8 float-left">
                <blockquote itemprop="review" itemtype="http://schema.org/Review" itemscope>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Nucor: </p>
                  <p class="quotation" itemprop="reviewBody">The heat exchanger that we cleaned Friday is operating very well. Overall heat transfer efficiency increased 50%. </p>
                </blockquote>
                <meta itemprop="name" content=" Nuco"/>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne1"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
              <h5 class="mb-0"> Shell Deer Park</h5>
              </a> </div>
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionEx">
              <div class="card-body padding15">
                <blockquote>
                  <p class="text-muted"> From Shell Deer Park, Turnaround Manager: </p>
                  <p class="quotation">I thought everything you guys did was awesome and have already been spreading recommendations to continue using you guys whenever we can!</p>
                </blockquote>
                <img src="/assets/img/1px.png" data-src="/assets/img/feedback/Shell-Deer-Park.jpg" class="img-fluid largImg lazyload" alt="Clean heat exchangers require less energy and improves plant efficiencies. "/> </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0">Alfa Laval </h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionEx">
              <div class="card-body padding15">
                <blockquote>
                  <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Alfa Laval, Business Manager: </p>
                  <p class="quotation">As a test Ulrik had our small test decanter into their shop for a 24 hour turn around. The equipment was immaculately cleaned within the required time requested with very little concern to do so on <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>’s process.</p>
                </blockquote>
                <img src="/assets/img/1px.png" data-src="/assets/img/feedback/AlfaLaval.jpg" class="img-fluid largImg lazyload" alt="Compabloc heat exchanger before and after cleaning."/> </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree3"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                <h5 class="mb-0">Exxon Mobil</h5>
                </a> </div>
              <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Exxon Mobil, Heat Team Lead: </p>
                    <p class="quotation">When we want our equipment “really clean” we send it to <span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup>.</p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="/assets/img/feedback/Exxon-heat-exchanger.jpg" class="img-fluid largImg lazyload" alt="Like 'new' heat exchanger."/> </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree4"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                <h5 class="mb-0">Versa Integrity </h5>
                </a> </div>
              <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree4" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Versa Integrity, Operations Manager: </p>
                    <p class="quotation">The exchanger was so clean our guys could not tell that the exchanger had ever been in service.</p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="/assets/img/feedback/Versa-integrity.jpg" class="img-fluid largImg lazyload" alt=" Cleans hard to reach areas in a heat exchanger. "/> </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingTwo5"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo5" aria-expanded="false" aria-controls="collapseTwo5">
                <h5 class="mb-0">Dow Chemical </h5>
                </a> </div>
              <div id="collapseTwo5" class="collapse" role="tabpanel" aria-labelledby="headingTwo5" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Dow Chemical, Lead Turnaround Planner: </p>
                    <p class="quotation">Heard nothing but good things and we are in the process of planning our next outage. Promise if we can send it there to be cleaned, we will. Thanks again.</p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="/assets/img/feedback/Dow.jpg" class="img-fluid largImg lazyload" alt="Clean As New® offers a faster cleaning, faster repair turnaround, and faster return to service."/> </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree6"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                <h5 class="mb-0">Shell Sarnia </h5>
                </a> </div>
              <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Shell Sarnia, Refinery Manager: </p>
                    <p class="quotation">The Refinery decided to test clean four Compabloc units using the new process proposed by Tech Sonic. With the clean Compablocs back in operation, the refinery client captured the throughput and heat transfer data rates to reveal an annual (bpd) recovery of US$4.27M.</p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="/assets/img/feedback/shell-sarina-compabloc.jpg" class="img-fluid largImg lazyload" alt="Clean As New® cleans compabloc heat exchangers in a fraction of the time required for hydroblasting."/> </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree7"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                <h5 class="mb-0"> Shell Scotford</h5>
                </a> </div>
              <div id="collapseThree7" class="collapse" role="tabpanel" aria-labelledby="headingThree7" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Shell Scotford: </p>
                    <p class="quotation">We experienced excellent results with cleaning components for offsite repair/overhaul. 3rd party companies have never seen valves as clean as the ones coming from Scotford. Stainless steel bundles were cleaned better than expected and typically achieved IRIS quality. Bundles with other material composition were generally cleaned to Eddy Current quality. To achieve IRIS spec for these non-stainless items, some were rinsed with a 20Kpsi & rotary lance.</p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="/assets/img/feedback/shell-scotford.jpg" class="img-fluid largImg lazyload" alt=" Cleans Tube Exchanger back to original specs."/> </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingTwo8"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo8" aria-expanded="false" aria-controls="collapseTwo8">
                <h5 class="mb-0">Shell Moerdijk</h5>
                </a> </div>
              <div id="collapseTwo8" class="collapse" role="tabpanel" aria-labelledby="headingTwo8" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Shell Moerdijk, Production Cleaning Manager: </p>
                    <p class="quotation">Tech Sonic Cleaning Systems are twice as fast at half the cost of traditional hydroblasting. We achieve thorough, complete cleaning that is non-destructive compared to conventional applications.</p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="/assets/img/feedback/shell-moerdijk-rotator.jpg" class="img-fluid largImg lazyload" alt=" Like 'new' rotating equipment. "/> </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree9"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree9" aria-expanded="false" aria-controls="collapseThree9">
                <h5 class="mb-0"> Shell Global</h5>
                </a> </div>
              <div id="collapseThree9" class="collapse" role="tabpanel" aria-labelledby="headingThree9" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Shell Global, Operations & Technology Lead: </p>
                    <p class="quotation">This is a game changing technology in cleaning effectiveness. Exchanger bundles simply come out cleaner than when addressed with conventional technology. There is a better performance of the bundles on start-up, and these results are achieved in less cleaning time per bundle. This will allow us to be more aggressive in our turnaround schedules in the future. We typically see 70-80% recovery of performance with HP water jetting (caused by residual fouling on the shell side of the bundle). Now we see up to 100% of design heat transfer performance after start-up using the Tech Sonic applications. </p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="/assets/img/feedback/exchanger-bundles.jpg" class="img-fluid largImg" alt=" A clean Shell Exchanger improves plant productivity."/> </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree10"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree10" aria-expanded="false" aria-controls="collapseThree10">
                <h5 class="mb-0"> Suncor Energy</h5>
                </a> </div>
              <div id="collapseThree10" class="collapse" role="tabpanel" aria-labelledby="headingThree10" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Suncor Energy: </p>
                    <p class="quotation">For every dollar we spend with Tech Sonic, we save four dollars in operational and cost efficiencies. We used to have to throw out most of the components as they could not be put back into production. Our capital costs have reduced dramatically. </p>
                    <img src="/assets/img/1px.png" data-src="/assets/img/feedback/suncor-scaffolding.jpg" class="img-fluid largImg lazyload" alt="Tech Sonic technology is efficient and effective at cleaning dirty scaffolding."/> </blockquote>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree11"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree11" aria-expanded="false" aria-controls="collapseThree11">
                <h5 class="mb-0"> CF Industries </h5>
                </a> </div>
              <div id="collapseThree11" class="collapse" role="tabpanel" aria-labelledby="headingThree11" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From CF Industries, Production Manager: </p>
                    <p class="quotation">We achieved a 27% increase in production of Ammonia after Tech Sonic cleaned our C-109 process train heat exchangers. </p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="/assets/img/feedback/cf-industries-shell-exchanger.jpg" class="img-fluid largImg lazyload" alt="Tech Sonic systems can clean most exchangers for less than half of replacement cost."/> </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree12"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree12" aria-expanded="false" aria-controls="collapseThree12">
                <h5 class="mb-0"> Cenovus Energy </h5>
                </a> </div>
              <div id="collapseThree12" class="collapse" role="tabpanel" aria-labelledby="headingThree12" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="author" itemtype="http://schema.org/Person" itemscope> From Cenovus Energy, Turnaround Manager: </p>
                    <p class="quotation">Our flow rates improved from 160 to 260 meters cubed per hour after using Tech Sonic’s innovative cleaning technologies. Truly amazing. </p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="../assets/img/feedback/cenovus-energy-bucket-pool.jpg" class="img-fluid largImg lazyload" alt="Tech Sonic systems can clean most packing materials for less than half of replacement cost. "/> </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" role="tab" id="headingThree13"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree13" aria-expanded="false" aria-controls="collapseThree13">
                <h5 class="mb-0">Nucor</h5>
                </a> </div>
              <div id="collapseThree13" class="collapse" role="tabpanel" aria-labelledby="headingThree13" data-parent="#accordionEx">
                <div class="card-body padding15">
                  <blockquote>
                    <p class="text-md-center text-muted" itemprop="name"> From Nucor: </p>
                    <p class="quotation" itemprop="reviewBody">The heat exchanger that we cleaned Friday is operating very well. Overall heat transfer efficiency increased 50%. </p>
                  </blockquote>
                  <img src="/assets/img/1px.png" data-src="../assets/img/feedback/nucor.jpg" class="img-fluid largImg  lazyload" alt="Clean heat exchangers require less energy and improves plant efficiencies."/> </div>
              </div>
            </div>
          </div>
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
<script>$('.dropdown').dropdown();</script> 
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>
@endsection