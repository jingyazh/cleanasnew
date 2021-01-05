@extends('app')

@section('title')
<title>Ultrasonic Cleaning - [Tech Sonic Cleaning & Journal Publications]</title>
@endsection

@section('content')

@include('layout.header', (isset($menuSetting) && $menuSetting != null) ? $menuSetting : ['menuSetting' => null, $extraPages])
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="testimonials" itemprop="item"><span itemprop="name">Testimonials</span></a>
        <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">Referred Journal Publications</span>
        <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
            <li class="nav-item" itemprop="name"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> The Application of Industrial Scale Ultrasonic Cleaning to Heat Exchangers</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="exchangers-tab" data-toggle="tab" href="#exchangers" role="tab" aria-controls="exchangers" aria-selected="false"> From Practice-To-Theory-To-Practice: Advances in the Cleaning of Heat Exchangers Using Ultrasound</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="compabloc-tab" data-toggle="tab" href="#compabloc" role="tab" aria-controls="compabloc" aria-selected="false"> Ultrasonic Cleaning of Badly Fouled Compabloc Exchangers</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="removal-tab" data-toggle="tab" href="#removal" role="tab" aria-controls="removal" aria-selected="false"> Application of Stabilized Hydrogen Peroxide for the Removal of Iron Polysulfide Deposits</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="industrial-tab" data-toggle="tab" href="#industrial" role="tab" aria-controls="industrial" aria-selected="false"> Understanding the Value of Cleaning - Gains From the Use of Ultrasonic Cleaning of Large Industrial Equipment</a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url"  id="method-tab" data-toggle="tab" href="#method" role="tab" aria-controls="method" aria-selected="false">The Effective Removal of Feco3 Deposits From Critical Process Heat Exchangers Used in Ammonia Production Using a Proprietary Ultrasonic Chemical Cleaning Method</a>
              <hr>
            </li>
          </ul>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 desktopNone">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h2>The Application of Industrial Scale Ultrasonic Cleaning to  
                Heat Exchangers </h2>
              <p class="text-muted">B. Kieser, R. Phillion and T. McCartney</p>
              <a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf " target="_blank" rel="noopener noreferrer nofollow"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-bundle-tubs-cleaned.jpg" alt="Tube Exchanger before and after cleaning." class="img-fluid polaroid lazyload"></a>
              <p>The cleaning of fouled heat exchangers often presents a significant  challenge  to  the  maintenance  and  operation  of chemical,  petroleum  and food processes. </p>
              <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf " target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
            </div>
            <!--2-->
            <div class="tab-pane fade" id="exchangers" role="tabpanel" aria-labelledby="exchangers-tab">
              <h2>From Practice-To-Theory-To-Practice: Advances in the Cleaning of Heat Exchangers Using Ultrasound</h2>
              <p class="text-muted">B. Kieser, A. Goode and R. Philion</p>
              <a href="http://www.heatexchanger-fouling.com/papers/papers2013/51_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/tech-sonic-cleaning.jpg" alt="A typical exchanger being removed from the ultrasonic bath for inspection and rinsing." class="img-fluid polaroid lazyload"></a>
              <p>The   cleaning   of   heat   exchangers,   and   other   large process equipment, using large-scale ultrasonic systems has, 
                in  the  past  few  years,  progressed  from  a  “curiosity”  to  a proven,  practical  tool  for  many  clients. </p>
              <p> <a href="http://www.heatexchanger-fouling.com/papers/papers2013/51_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
            </div>
            <!--3-->
            <div class="tab-pane fade" id="compabloc" role="tabpanel" aria-labelledby="compabloc-tab">
              <h2> Ultrasonic Cleaning of Badly Fouled Compabloc Exchangers</h2>
              <p class="text-muted">R. Philion, B. Kieser and T. McCartney</p>
              <a href="http://www.heatexchanger-fouling.com/papers/papers2011/49_Kieser-PhilionSMCFL_F.pdf" target="_blank" rel="noopener noreferrer nofollow"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-compablocs-cleaned.jpg" alt="Compabloc exchanger before and after cleaning." class="img-fluid polaroid lazyload"></a>
              <p>This paper describes the use of ultrasonic technologies to clean badly fouled Alfa Laval Compabloc® 106 heat exchangers - which could not be effectively cleaned by conventional methods.</p>
              <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/49_Kieser-PhilionSMCFL_F.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
            </div>
            <!--4-->
            <div class="tab-pane fade" id="removal" role="tabpanel" aria-labelledby="removal-tab">
              <h2>Application of Stabilized Hydrogen Peroxide for the Removal of Iron Polysulfide Deposits</h2>
              <p class="text-muted">T.R. McCartney and R. Shank</p>
              <a href="http://www.heatexchanger-fouling.com/papers/papers2013/47_McCartney_F.pdf" target="_blank" rel="noopener noreferrer nofollow"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-exchangers-cleaned2.jpg" alt="Exchanger before and after cleaning." class="img-fluid polaroid lazyload"></a>
              <p>Hydrogen  Peroxide  is  a  strong  oxidizing  agent  that  could  be  used  for  the  effective  removal  of  the  iron  sulfide  species. </p>
              <p><a href="http://www.heatexchanger-fouling.com/papers/papers2013/47_McCartney_F.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
            </div>
            <div class="tab-pane fade" id="industrial" role="tabpanel" aria-labelledby="industrial-tab">
              <h2> Understanding the Value of Cleaning - Gains From the Use of Ultrasonic Cleaning of Large Industrial Equipment</h2>
              <p class="text-muted">C. H. Schulz and B. Kieser</p>
              <a href="http://www.heatexchanger-fouling.com/papers/papers2019/41_Schulz%20and%20Kieser.pdf" target="_blank" rel="noopener noreferrer nofollow"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/dirty-heat-exchanger.jpg" alt="Example of soiling on Quench Oil Exchangers." class="img-fluid polaroid lazyload" style="float:none"></a>
              <p>We present the results of a study to determine the efficacy of large-scale ultrasonic cleaning of heat exchangers at Braskem. </p>
              <p><a href="http://www.heatexchanger-fouling.com/papers/papers2019/41_Schulz%20and%20Kieser.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
            </div>
            <!--5-->
            
            <div class="tab-pane fade" id="method" role="tabpanel" aria-labelledby="method-tab">
              <h2>The Effective Removal of Feco3 Deposits From Critical Process Heat Exchangers Used in Ammonia Production Using a Proprietary Ultrasonic Chemical Cleaning Method </h2>
              <p class="text-muted">R. Philion and T.R. McCartney</p>
              <a href="http://www.heatexchanger-fouling.com/papers/papers2013/50_Philion_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-exchangers-cleaned3.jpg" alt="Exchanger before and after cleaning." class="img-fluid polaroid lazyload"></a>
              <p>This  paper  examines  the  problem  of  ferrous  carbonate  fouling   and   removal   in   lean   -   rich   Diethanol   amine   exchangers  at  the  CO2  extraction  plants  associated  with  ammonia manufacturing. </p>
              <p><a href="http://www.heatexchanger-fouling.com/papers/papers2013/50_Philion_F.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
            </div>
          </div>
        </div>
        <!-- /.col-md-8 --> 
        
        <!--Accordion wrapper-->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne1"> <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
              <h5 class="mb-0">The Application of Industrial Scale Ultrasonic Cleaning to Heat Exchangers </h5>
              </a> </div>
            <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
              <div class="card-body col-md-12  padding15">
                <p class="text-muted"> B. Kieser, R. Phillion and T. McCartney</p>
                <a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf " target="_blank" rel="noopener noreferrer nofollow"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/ultrasonic-cleaning.jpg" alt="Tube Exchanger  before and after cleaning. " class="img-fluid polaroid lazyload"></a>
                <p style="clear:both"><br>
                  The cleaning of fouled heat exchangers often presents a significant  challenge  to  the  maintenance  and  operation  of chemical,  petroleum  and food processes. </p>
                <p> <a href="http://www.heatexchanger-fouling.com/papers/papers2011/48_Kieser_F.pdf " target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
              </div>
            </div>
          </div>
          <!-- 1-->
          
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo2"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
              <h5 class="mb-0">From Practice-To-Theory-To-Practice: Advances in the Cleaning of Heat Exchangers Using Ultrasound </h5>
              </a> </div>
            <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
              <div class="card-body col-md-12 padding15">
                <p class="text-muted"> B. Kieser, A. Goode and R. Philion </p>
                <a href="http://www.heatexchanger-fouling.com/papers/papers2013/51_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/tech-sonic-cleaning.jpg" alt="A typical exchanger being removed from the ultrasonic bath for inspection and rinsing." class="img-fluid polaroid lazyload"></a>
                <p style="clear:both"><br>
                  The   cleaning   of   heat   exchangers,   and   other   large process equipment, using large-scale ultrasonic systems has, 
                  in  the  past  few  years,  progressed  from  a  “curiosity”  to  a proven,  practical  tool  for  many  clients. </p>
                <p><a href="http://www.heatexchanger-fouling.com/papers/papers2013/51_Kieser_F.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
              </div>
            </div>
          </div>
          <!-- 3 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingThree3a"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3a"
        aria-expanded="false" aria-controls="collapseThree3a">
              <h5 class="mb-0">Ultrasonic Cleaning of Badly Fouled Compabloc Exchangers </h5>
              </a> </div>
            <div id="collapseThree3a" class="collapse" role="tabpanel" aria-labelledby="headingThree3a"
      data-parent="#accordionEx">
              <div class="card-body col-md-12 padding15">
                <p class="text-muted"> R. Philion, B. Kieser and T. McCartney</p>
                <a href="http://www.heatexchanger-fouling.com/papers/papers2011/49_Kieser-PhilionSMCFL_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-compablocs-cleaned.jpg" 
alt="Compabloc exchanger before and after cleaning." class="img-fluid polaroid lazyload"></a>
                <p style="clear:both"><br>
                  This paper describes the use of ultrasonic technologies to clean badly fouled Alfa Laval Compabloc® 106 heat exchangers - which could not be effectively cleaned by conventional methods. </p>
                <p><a href="http://www.heatexchanger-fouling.com/papers/papers2011/49_Kieser-PhilionSMCFL_F.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
              </div>
            </div>
          </div>
          <!-- 4 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingThree3aa"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3aa"
        aria-expanded="false" aria-controls="collapseThree3aa">
              <h5 class="mb-0"> Application of Stabilized Hydrogen Peroxide for the Removal of Iron Polysulfide Deposits </h5>
              </a> </div>
            <div id="collapseThree3aa" class="collapse" role="tabpanel" aria-labelledby="headingThree3aa"
      data-parent="#accordionEx">
              <div class="card-body col-md-12 padding15">
                <p class="text-muted"> T.R. McCartney and R. Shank</p>
                <a href="http://www.heatexchanger-fouling.com/papers/papers2013/47_McCartney_F.pdf" target="_blank" rel="noopener noreferrer nofollow"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-exchangers-cleaned2.jpg" alt="Exchanger before and after cleaning." class="img-fluid polaroid lazyload"></a>
                <p style="clear:both"><br>
                  Hydrogen Peroxide is a strong oxidizing agent that could be used for the effective removal of the iron sulfide species. </p>
                <p> <a href="http://www.heatexchanger-fouling.com/papers/papers2013/47_McCartney_F.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
              </div>
            </div>
          </div>
          
          <!--5 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingThree3"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
              <h5 class="mb-0">Understanding the Value of Cleaning - Gains From the Use of Ultrasonic Cleaning of Large Industrial Equipment </h5>
              </a> </div>
            <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
              <div class="card-body col-md-12 padding15">
                <p class="text-muted"> C. H. Schulz and B. Kieser</p>
                <a href="http://www.heatexchanger-fouling.com/papers/papers2019/41_Schulz%20and%20Kieser.pdf" target="_blank" rel="noopener noreferrer nofollow"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/dirty-heat-exchanger.jpg" alt="Example of soiling on Quench Oil Exchangers" class="img-fluid polaroid lazyload"></a>
                <p style="clear:both"><br>
                  We present the results of a study to determine the efficacy of large-scale ultrasonic cleaning of heat exchangers at Braskem. </p>
                <p><a href="http://www.heatexchanger-fouling.com/papers/papers2019/41_Schulz%20and%20Kieser.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
              </div>
            </div>
          </div>
          <!-- 3 -->
          
          <div class="card">
            <div class="card-header" role="tab" id="headingThree5"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5"
        aria-expanded="false" aria-controls="collapseThree5">
              <h5 class="mb-0">The Effective Removal of Feco3 Deposits From Critical Process Heat Exchangers Used in Ammonia Production Using a Proprietary Ultrasonic Chemical Cleaning Method </h5>
              </a> </div>
            <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree5"
      data-parent="#accordionEx">
              <div class="card-body col-md-12  padding15">
                <p class="text-muted"> R. Philion and T.R. McCartney</p>
                <a href="http://www.heatexchanger-fouling.com/papers/papers2013/50_Philion_F.pdf" target="_blank" rel="noopener noreferrer nofollow"><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/before-and-after-exchangers-cleaned3.jpg" alt="Exchanger before and after cleaning." class="img-fluid polaroid lazyload"></a>
                <p style="clear:both"><br>
                  This  paper  examines  the  problem  of  ferrous  carbonate  fouling   and   removal   in   lean   -   rich   Diethanol   amine   exchangers  at  the  CO2  extraction  plants  associated  with  ammonia manufacturing. </p>
                <p> <a href="http://www.heatexchanger-fouling.com/papers/papers2013/50_Philion_F.pdf" target="_blank" rel="noopener noreferrer nofollow">Read more  &#8594;</a></p>
              </div>
            </div>
          </div>
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