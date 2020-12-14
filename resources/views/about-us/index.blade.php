@extends('app')

@section('title')
<title>About Clean As New Powered By Tech Sonic®</title>
@endsection

@section('content')

@include('layout.header')
<main>
  <div class="jumbotron text-left">
    <div class="headline" itemscope itemtype="http://schema.org/BreadcrumbList"> &nbsp;
      <p><span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/about-us" itemprop="item"> <span itemprop="name">About Us</span></a>
          <meta itemprop="position" content="1">
        </span> &#8250; <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name">Company</span>
          <meta itemprop="position" content="2">
        </span></p>
    </div>
  </div>
  <div class="album bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 desktopNone padding15">
          <ul class="nav flex-column nav-pills brand-pills" id="myTab" role="tablist">
            <li class="nav-item" itemprop="name"> <a class="nav-link active" itemprop="url" id="header5-tab" data-toggle="tab" href="#header5" role="tab" aria-controls="header5" aria-selected="false">Our Values </a>
              <hr>
            </li>
            <li class="nav-item" itemprop="name"> <a class="nav-link" itemprop="url" id="header6-tab" data-toggle="tab" href="#header6" role="tab" aria-controls="header6" aria-selected="false">History </a>
              <hr>
            </li>
          </ul>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-8 float-left desktopNone">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="header5" role="tabpanel" aria-labelledby="header5-tab">
              <div class="col-4 float-left"><img src="https://cleanasnew.com/assets/img/1px.png" data-src=" https://cleanasnew.com/assets/img/team-building.jpg" class="img-fluid polaroid lazyload" alt="Happy employees." /> </div>
              <div class="col-8 float-left  scrollEsg">
                <h2 class="text-capitalize"> Our Values As A Company Are</h2>
                <h4>Health, Safety And Care For The Environment</h4>
                <p>We provide our workers, subcontractors and managers, with a healthy and safe working environment. </p>
                <p> Our success comes from planning the work and working the plan.
                  Planning and safety go hand and hand. You can’t have one without the other. </p>
                <p> To that end, we will prevent any situation, condition, or thing that may be dangerous to the safety or health of workers and/or the environment. We will identify and assess any hazards associated with: </p>
                <ul class="listing">
                  <li><b>M</b>aterial(s)</li>
                  <li><b>E</b>quipment (Tools and Machinery)</li>
                  <li><b>E</b>nvironment</li>
                </ul>
                <p>The ongoing commitment to this value requires the dedication, commitment, involvement, and participation of all workers, subcontractors and managers.</p>
                <h4> Say What You Mean; Do What You Say</h4>
                <p>Strong, positive relationships that are open and honest are a big part of what differentiates us from most other companies. </p>
                <p> The hardest thing to do is to build trust, but if the trust exists, you can accomplish so much more. Being trustworthy develops the inner moral fiber of one's being. </p>
                <p> Be who you are and say what you feel. </p>
                <p> By doing what we say and living up to our commitments, we demonstrate our respect to one another. </p>
                <h4>Seek First To Understand, Then To Be Understood</h4>
                <p>Lack of communication is the source of almost all conflict.</p>
                <p> In any relationship, it's important to be a good listener as well as a good communicator.</p>
                <p> The best leaders listen to what the other person is saying until they understand their point of view before providing their own. </p>
                <p> Communication is always one of the weakest spots in any organization, no matter how good the communication is. We want everyone to always try to go the extra mile in encouraging thorough, complete, and effective communication. </p>
                <p> We embrace diversity in thoughts, opinions, and backgrounds. The more widespread and diverse your relationships are, the bigger the positive impact you can make on the company, and the more valuable you will be to the company. </p>
                <p> It is critical for relationship-building to have effective, open, and honest communication. </p>
                <h4>Have Fun At Work</h4>
                <p>Having fun builds and maintains excellent morale, communication, creative thinking and performance. </p>
                <p> A work environment that is friendly and warm encourages diversity in ideas and opinions. </p>
                <p> We foster effective teamwork with a work culture that values collaboration. Not only does every detail matter, we take pride in both quality and efficiency. </p>
                <p> It revitalizes people so they are healthier and have more energy to be contributing members of our team. In a teamwork environment, people understand and believe that thinking, planning, decisions and actions are best done cooperatively. </p>
                <p> Ultimately, we all share the Team’s success. </p>
                <h4>Strive To Continually Improve</h4>
                <p>We create conditions in which people can find meaning and purpose in their work. We give our team members the autonomy to develop their mastery and grow as professionals within their roles while supporting and promoting our core values and processes. </p>
                <p> We will either find a way and/or make a way to overcome any challenge or problem. </p>
                <p> We vow to continuously examine and improve our business processes, while maintaining leadership and competitiveness in our industry. </p>
                <p> We can’t succeed as a team without proper training. </p>
                <p> “<b>SEE one, DO one, TEACH one</b>.” </p>
                <p> Occupational Health and safety defines: Employees are deemed competent when they can teach what they have been taught. </p>
                <p>The ongoing commitment to this value requires the dedication, commitment, involvement, and participation of all workers, subcontractors and managers.</p>
                <h4>Legendary Customer Service</h4>
                <p>We are unified by a common goal: to do the very best for our Customers.</p>
                <p> Our greatest assets are our Customers, because without Customers there is no company. </p>
                <p> Build a great experience, whereby Customers tell each other.
                  Nothing replaces “<b>Word of Mouth</b>”. </p>
              </div>
            </div>
            <div class="tab-pane fade" id="header6" role="tabpanel" aria-labelledby="header6-tab">
              <div class="col-4 float-left"><img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/tech-sonic-headquarter.jpg" class="img-fluid polaroid lazyload" alt="Tech Sonic, Morinville, Alberta, Canada." /> </div>
              <div class="col-8 float-left">
                <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is a subsidiary joint venture of <a href="https://techsonic.com" target="_blank">Tech Sonic LP</a>. Tech Sonic got its start in the oil sands region of Canada as a hydroblasting company nearly 20 years ago, and began experimenting with ultrasonics in the early 2000’s.</p>
                <p> We invented the technology to clean heat exchangers using ultrasonics and since 2009, our clients have cleaned thousands of exchangers and many other parts all over the world. </p>
                <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> was formed to deliver the maximum advantages of Tech Sonic Cleaning directly to the oil, gas and petrochemical market, combining the latest Tech Sonic technology with 20 years of experience and the highest level of automation, safety and environmental stewardship.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-8 -->
        <div class="accordion md-accordion mobileNone" id="accordionEx" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingThree5"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                <h5 class="mb-0">Our Values</h5>
              </a> </div>
            <div id="collapseThree5" class="collapse show" role="tabpanel" aria-labelledby="headingThree5" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12">
                  <h2 class="text-capitalize"> Our Values As A Company Are</h2>
                  <h4>Health, Safety And Care For The Environment</h4>
                  <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/team-building.jpg" class="img-fluid polaroid lazyload" alt="Happy employees." />
                  <p>We provide our workers, subcontractors and managers, with a healthy and safe working environment. </p>
                  <p> Our success comes from planning the work and working the plan.
                    Planning and safety go hand and hand. You can’t have one without the other. </p>
                  <p> To that end, we will prevent any situation, condition, or thing that may be dangerous to the safety or health of workers and/or the environment. We will identify and assess any hazards associated with: </p>
                  <ul class="listing">
                    <li><b>M</b>aterial(s)</li>
                    <li><b>E</b>quipment (Tools and Machinery)</li>
                    <li><b>E</b>nvironment</li>
                  </ul>
                  <p>The ongoing commitment to this value requires the dedication, commitment, involvement, and participation of all workers, subcontractors and managers.</p>
                  <h4> Say What You Mean; Do What You Say</h4>
                  <p>Strong, positive relationships that are open and honest are a big part of what differentiates us from most other companies. </p>
                  <p> The hardest thing to do is to build trust, but if the trust exists, you can accomplish so much more. Being trustworthy develops the inner moral fiber of one's being. </p>
                  <p> Be who you are and say what you feel. </p>
                  <p> By doing what we say and living up to our commitments, we demonstrate our respect to one another. </p>
                  <h4>Seek First To Understand, Then To Be Understood</h4>
                  <p>Lack of communication is the source of almost all conflict.</p>
                  <p> In any relationship, it's important to be a good listener as well as a good communicator.</p>
                  <p> The best leaders listen to what the other person is saying until they understand their point of view before providing their own. </p>
                  <p> Communication is always one of the weakest spots in any organization, no matter how good the communication is. We want everyone to always try to go the extra mile in encouraging thorough, complete, and effective communication. </p>
                  <p> We embrace diversity in thoughts, opinions, and backgrounds. The more widespread and diverse your relationships are, the bigger the positive impact you can make on the company, and the more valuable you will be to the company. </p>
                  <p> It is critical for relationship-building to have effective, open, and honest communication. </p>
                  <h4>Have Fun At Work</h4>
                  <p>Having fun builds and maintains excellent morale, communication, creative thinking and performance. </p>
                  <p> A work environment that is friendly and warm encourages diversity in ideas and opinions. </p>
                  <p> We foster effective teamwork with a work culture that values collaboration. Not only does every detail matter, we take pride in both quality and efficiency. </p>
                  <p> It revitalizes people so they are healthier and have more energy to be contributing members of our team. In a teamwork environment, people understand and believe that thinking, planning, decisions and actions are best done cooperatively. </p>
                  <p> Ultimately, we all share the Team’s success. </p>
                  <h4>Strive To Continually Improve</h4>
                  <p>We create conditions in which people can find meaning and purpose in their work. We give our team members the autonomy to develop their mastery and grow as professionals within their roles while supporting and promoting our core values and processes. </p>
                  <p> We will either find a way and/or make a way to overcome any challenge or problem. </p>
                  <p> We vow to continuously examine and improve our business processes, while maintaining leadership and competitiveness in our industry. </p>
                  <p> We can’t succeed as a team without proper training. </p>
                  <p> “<b>SEE one, DO one, TEACH one</b>.” </p>
                  <p> Occupational Health and safety defines: Employees are deemed competent when they can teach what they have been taught. </p>
                  <p>The ongoing commitment to this value requires the dedication, commitment, involvement, and participation of all workers, subcontractors and managers.</p>
                  <h4>Legendary Customer Service</h4>
                  <p>We are unified by a common goal: to do the very best for our Customers.</p>
                  <p> Our greatest assets are our Customers, because without Customers there is no company. </p>
                  <p> Build a great experience, whereby Customers tell each other.
                    Nothing replaces “<b>Word of Mouth</b>”. </p>
                </div>
              </div>
            </div>
          </div>
          <!-- 5 -->
          <div class="card">
            <div class="card-header" role="tab" id="headingThree6"> <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                <h5 class="mb-0">History</h5>
              </a> </div>
            <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree6" data-parent="#accordionEx">
              <div class="card-body">
                <div class="col-md-12"> <img src="https://cleanasnew.com/assets/img/1px.png" data-src="https://cleanasnew.com/assets/img/tech-sonic-headquarter.jpg" class="img-fluid polaroid  lazyload" alt="Tech Sonic, Morinville, Alberta, Canada." />
                  <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> is a subsidiary joint venture of <a href="https://techsonic.com" target="_blank">Tech Sonic LP</a>. Tech Sonic got its start in the oil sands region of Canada as a hydroblasting company nearly 20 years ago, and began experimenting with ultrasonics in the early 2000’s.</p>
                  <p> We invented the technology to clean heat exchangers using ultrasonics and since 2009, our clients have cleaned thousands of exchangers and many other parts all over the world. </p>
                  <p><span class="cangc3">C</span><span class="cangc4">LEAN</span> <span class="cangc3">A</span><span class="cangc4">S</span> <span class="cangc3">N</span><span class="cangc4">EW</span><sup>®</sup> was formed to deliver the maximum advantages of Tech Sonic Cleaning directly to the oil, gas and petrochemical market, combining the latest Tech Sonic technology with 20 years of experience and the highest level of automation, safety and environmental stewardship.</p>
                </div>
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
@include('layout.footer')
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
<script src="https://cleanasnew.com/assets/js/lazysizes.min.js" async></script>

@endsection