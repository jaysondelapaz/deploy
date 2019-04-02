<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Jayson Dela Paz</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="portfolio/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="portfolio/css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="portfolio/css/bootstrap.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="portfolio/css/flexslider.css">
  <!-- Flaticons  -->
{{--   <link rel="stylesheet" href="portfolio/fonts/flaticon/font/flaticon.css"> --}}
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="portfolio/css/owl.carousel.min.css">
  <link rel="stylesheet" href="portfolio/css/owl.theme.default.min.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="portfolio/css/style.css">

  <!-- Modernizr JS -->
  <script src="portfolio/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
  <div id="colorlib-page">
    <div class="container-wrap">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
      <div class="text-center">
        <div class="author-img" style="background-image: url(portfolio/images/profile.jpg);"></div>
        <h1 id="colorlib-logo"><a href="index.html">Jayson Dela Paz</a></h1>
        <span class="position"><a href="#">Aspiry Web Developer</a> in Philippines</span>
      </div>
      <nav id="colorlib-main-menu" role="navigation" class="navbar">
        <div id="navbar" class="collapse">
          <ul>
              <li><a href="#" data-nav-section="services"></a></li>
            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
            <li><a href="#" data-nav-section="about">About</a></li>
          
            <li><a href="#" data-nav-section="skills">Skills</a></li>
            <li><a href="#" data-nav-section="education">Education</a></li>
            <li><a href="#" data-nav-section="experience">Experience</a></li>
            <li><a href="#" data-nav-section="work">Work</a></li>
            <li><a href="#" data-nav-section="contact">Contact</a></li>

          </ul>
        </div>
         <center><a  class="btn btn-primary" href="{{route('Backend.download')}}" >Download my CV</a></center>
      </nav>
     
      <div class="colorlib-footer">
        <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
{{-- </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash.com</a></span> --}}</small></p>
        <ul>
          <li><a href="#"><i class="icon-facebook2"></i></a></li>
          <li><a href="#"><i class="icon-twitter2"></i></a></li>
          <li><a href="#"><i class="icon-instagram"></i></a></li>
          <li><a href="#"><i class="icon-linkedin2"></i></a></li>
        </ul>
      </div>

    </aside>

    <div id="colorlib-main">
      <section id="colorlib-hero" class="js-fullheight" data-section="home">
        <div class="flexslider js-fullheight">
          <ul class="slides">
            <li style="background-image: url(portfolio/images/homepic1.jpg);">
              <div class="overlay"></div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                    <div class="slider-text-inner js-fullheight">
                      <div class="desc">
                        <h1>Hi! <br>I'm Jayson</h1>
                        <h2>Student,Dreamer and Web Developer</h2>
                        {{-- <h2>100% html5 bootstrap templates Made by <a href="https://colorlib.com/" target="_blank">colorlib.com</a></h2> --}}
                        <p><a href="{{route('Backend.download')}}" target="_blank" class="btn btn-primary btn-learn">Download CV <i class="icon-download4"></i></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li style="background-image: url(portfolio/images/homepic.jpg);">
              <div class="overlay"></div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                    <div class="slider-text-inner">
                      <div class="desc">
                        <h1>I am <br>a web developer  </h1>
                        
                        <p><a class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            </ul>
          </div>
      </section>

      <section class="colorlib-about" data-section="about">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-12">
              <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                <div class="col-md-12">
                  <div class="about-desc">
                    <span class="heading-meta">About Me</span>
                    <h2 class="colorlib-heading">Who Am I?</h2>
                    <p><strong>Hi, I'm Jayson Dela Paz</strong> a millennial from Nueva Ecija province with knowledge in web application/system development.
                    I am here looking for a full-time job related to my expertise  . Hire me to know what i'm capable.</p>
                  </div>
                </div>
              </div>

      <section class="colorlib-skills" data-section="skills">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">My Specialty</span>
              <h2 class="colorlib-heading animate-box">My Skills</h2>
            </div>
          </div>
          <div class="row">
           
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="progress-wrap">
                <h3>Photoshop</h3>
                <div class="progress">
                  <div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100" style="width:50%">
                    <span>50%</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
              <div class="progress-wrap">
                <h3>jQuery</h3>
                <div class="progress">
                  <div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
                    aria-valuemin="0" aria-valuemax="100" style="width:70%">
                    <span>70%</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="progress-wrap">
                <h3>HTML5</h3>
                <div class="progress">
                  <div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
                    aria-valuemin="0" aria-valuemax="100" style="width:85%">
                    <span>85%</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
              <div class="progress-wrap">
                <h3>CSS3</h3>
                <div class="progress">
                  <div class="progress-bar color-4" role="progressbar" aria-valuenow="90"
                    aria-valuemin="0" aria-valuemax="100" style="width:80%">
                    <span>80%</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="progress-wrap">
                <h3>PHP</h3>
                <div class="progress">
                  <div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:80%">
                    <span>80%</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
              <div class="progress-wrap">
                <h3>Mysql</h3>
                <div class="progress">
                  <div class="progress-bar color-6" role="progressbar" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100" style="width:80%">
                    <span>80%</span>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="colorlib-education" data-section="education">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">Education</span>
              <h2 class="colorlib-heading animate-box">Education</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
              <div class="fancy-collapse-panel">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bachelor of Information Technology
                              </a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                           <div class="panel-body">
                              <div class="row">
                              <div class="col-md-6">
                                <p>ICAS College <br>
                                  Dela Paz Street, Marcus highway, Pasig City<br />
                                  2017 -2019<br>
                                  Graduate
                                </p>

                              </div>
                            </div>
                           </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                          <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Associate of Computer Science
                              </a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="panel-body">
                              <p>Infotect Institute of Arts and Sciences<br >
                               Shaw Boulevard, Mandaluyong City<br>
                                2011 - 2013<br>
                                Graduate
                              </p>
                          </div>
                      </div>
                  </div>
                 
                  <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFive">
                          <h4 class="panel-title">
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">High School Secondary Education
                              </a>
                          </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                          <div class="panel-body">
                              <p>Neuve Ecija High School<br>
                                Cabanatuan City, Nueva Ecija<br>
                                2004-2008<br>
                                Graduate
                              </p> 
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="colorlib-experience" data-section="experience">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">Experience</span>
              <h2 class="colorlib-heading animate-box">Work Experience</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                 <div class="timeline-centered">
                   <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                      <div class="timeline-entry-inner">

                         <div class="timeline-icon color-1">
                            <i class="icon-pen2"></i>
                         </div>

                         <div class="timeline-label">
                            <h2><a href="#">MIS (Manage Information System)</a> <span>Decmeber 2017- March 2019</span><br>
                            G-Series Marketing Concept Inc.
                            </h2>
                           
                            <p>Help to develop 50% of ERP web system. together senior programmer</p>
                            <p>Setup on premise server, installation networking and debuging</p>
                         </div>
                      </div>
                   </article>


                   <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                      <div class="timeline-entry-inner">
                         <div class="timeline-icon color-2">
                            <i class="icon-pen2"></i>
                         </div>
                         <div class="timeline-label">
                          <h2><a href="#">IT Web Programmer</a> <span>May 2016-Dec 2017</span><br>
                            LED Management Training Services
                          </h2>
                       
                            <p>Revamped existing web system</p>
                            <p>Tech Support Hardware and Software</p>
                         </div>
                      </div>
                   </article>

                   

                   <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                      <div class="timeline-entry-inner">
                         <div class="timeline-icon color-none">
                         </div>
                      </div>
                   </article>
                </div>
             </div>
           </div>
        </div>
      </section>

      <section class="colorlib-work" data-section="work" style="padding:0px;">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">My Work</span>
              <h2 class="colorlib-heading animate-box">Recent Work</h2>
            </div>
          </div>
          <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
            <div class="col-md-12">
              <p class="work-menu"><span><a href="#" class="active">Web application</a></span> {{-- <span><a href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a href="#">Apps</a></span> --}}</p>
              <p>For demo purpose use default username: "admin" and password: "admin".</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="project" style="background-image: url(portfolio/images/Homepage.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="#" target="_blank">Inventory System</a></h3>
                    <span>Laravel Framework</span>
                    <p class="icon">
                      <span><a href="#" target="_blank" class="btn btn-primary btn-learn" target="_blank">Visit</a></span>
                    
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
              <div class="project" style="background-image: url(portfolio/images/stockout.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="#" target="_blank" class="btn btn-primary btn-learn">Inventory System</a></h3>
                    <span>Laravel Framework</span>
                    <p class="icon">
                      <span><a href="#" class="btn btn-primary btn-learn" target="_blank">Visit</a></span>
                      
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
              <div class="project" style="background-image: url(portfolio/images/dms1.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="#" target="_blank">PHP - Document Management (School Project)</a></h3>
                    <span>PHP and Mysql (Mysqli)</span>
                     <p class="icon">
                      <span><a href="http://www.jaysondelapaz.com" target="_blank" class="btn btn-primary btn-learn">Visit</a></span>
                      
                    </p>
                    {{-- <p class="icon">
                      <span><a href="#"><i class="icon-share3"></i></a></span>
                      <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                      <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                    </p> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
              <div class="project" style="background-image: url(portfolio/images/dms2.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="http://www.jaysondelapaz.com" target="_blank">Document Management (School Project)</a></h3>
                    <span>PHP and Mysql (Mysqli)</span>
                     <p class="icon">
                      <span><a href="#" class="btn btn-primary btn-learn" target="_blank">Visit</a></span>
                    </p>
                    {{-- <p class="icon">
                      <span><a href="#"><i class="icon-share3"></i></a></span>
                      <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                      <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                    </p> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="project" style="background-image: url(portfolio/images/capstone2.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="#" target="_blank">Ticketing System (Popcom) - Capstone </a></h3>
                    <span>PHP and Mysql (PDO)</span>
                    <p class="icon">
                      <span><a href="#" class="btn btn-primary btn-learn" target="_blank">Visit</a></span>
                      {{-- <span><a href="#"><i class="icon-share3"></i></a></span>
                      <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                      <span><a href="#"><i class="icon-heart"></i> 49</a></span> --}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
              <div class="project" style="background-image: url(portfolio/images/capstone_report.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="#" target="_blank">Ticketing System (Popcom) - Capstone</a></h3>
                    <span>PHP and Mysql (PDO)</span>
                    <p class="icon">
                      <span><a href="#" class="btn btn-primary btn-learn" target="_blank">Visit</a></span>
                      {{-- <span><a href="#"><i class="icon-share3"></i></a></span>
                      <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                      <span><a href="#"><i class="icon-heart"></i> 49</a></span> --}}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="colorlib-contact" data-section="contact">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">Get in Touch</span>
              <h2 class="colorlib-heading">Contact</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                <div class="colorlib-icon">
                  <i class="icon-globe-outline"></i>
                </div>
                <div class="colorlib-text">
                  <p><a href="http://www.jaysondelapaz.com">www.jaysondelapaz.com</a></p>
                </div>
              </div>

              <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                <div class="colorlib-icon">
                  <i class="icon-map"></i>
                </div>
                <div class="colorlib-text">
                  <p>#10 Blk 2 Phase 5B, Bragados Street, Greenwoods, Pasig City</p>
                </div>
              </div>

              <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                <div class="colorlib-icon">
                  <i class="icon-phone"></i>
                </div>
                <div class="colorlib-text">
                  <p><a href="tel://">+63926 3266748 / +63921 6233121</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-md-push-1" >
              <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6475756387363!2d121.0950001143198!3d14.562135081923428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7cb77e6ea3b%3A0x5e7986538f3d27ca!2sGreenwoods+Executive+Village!5e0!3m2!1sen!2sph!4v1553743744183!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
              </div> <!--End of row-->
            </div>
          </div>
        </div>
      </section>

    </div><!-- end:colorlib-main -->
  </div><!-- end:container-wrap -->
  </div><!-- end:colorlib-page -->

  <!-- jQuery -->
 {{--  <script src="{{asset('portfolio/js/jquery.min.js')}}"></script> --}}
 <script src="portfolio/js/jquery1.js"></script>
  <!-- jQuery Easing -->
  <script src="portfolio/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="portfolio/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="portfolio/js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="portfolio/js/jquery.flexslider-min.js"></script>
  <!-- Owl carousel -->
  <script src="portfolio/js/owl.carousel.min.js"></script>
  <!-- Counters -->
  <script src="portfolio/js/jquery.countTo.js"></script>
  
  
  <!-- MAIN JS -->
  <script src="portfolio/js/main.js"></script>

  </body>
</html>

