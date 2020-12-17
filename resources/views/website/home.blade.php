<!DOCTYPE html>
<html lang="zxx">
    <!-- Mirrored from innovationplans.com/idesign/avo2/avo-light/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 10:30:20 GMT -->
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Avo onepage themeforest" />
    <meta name="description" content="Avo - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Modhu Haji River View</title>

    <!-- Favicon -->
    <link rel="shortcut icon"  href="{{asset('')}}assets/website/img/logo200.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('')}}assets/website/css/plugins.css" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{asset('')}}assets/website/css/style.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&display=swap" rel="stylesheet">

</head>

<body>
    @if (Session::get('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Message: </strong>{{  Session::get('message')  }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>      
@endif
    
      <!-- ==================== Start Loading ==================== -->

      {{-- <div id="preloader">
    </div> --}}

      <!-- ==================== Start progress-scroll-button ==================== -->
       
  
 

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start cursor ==================== -->

        <!-- ==================== Start cursor ==================== -->

        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
    
        <!-- ==================== End cursor ==================== -->
   {{-- popup box --}}

    <div id = "popUpMain" style="display: none">
       
     <div id ="popup">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
            <p id="newsHeading"> Give us your information to buy a plot in our Modhu Haji River View project or to visit the project or to get detailed information about the project. One of our representatives will contact you shortly. </p>
            {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
            <form method="post" action="{{route('frontend.infoSave')}}">

                <div class="form-group">
                    @csrf 
                    <input type="text" class="form-control"  name="name"   placeholder=" Name">
                    
               </div>

               <div class="form-group">
                
                 <input type="email" class="form-control" name="email"  placeholder="Email">
               
               </div>

                <div class="form-group">
                 
                  <input type="text" class="form-control" name="mobile"  placeholder="Mobile">
                 
                </div>
                <div class="form-group">
                  
                  <input type="text" class="form-control" name="designation" placeholder="Designation">
                         
                </div>

                <div class="form-group">
                    
                    <input type="text" class="form-control" name="organization"   placeholder="Orgatization">
                            
                  </div>
                  
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
     </div>     
  </div>  

  @include('website.layout.navbar')

    <!-- ==================== End Navbar ==================== -->

    <div class="wrapper">
         <!-- ==================== Start Slider ==================== -->

    <div class="slider-bus position-re valign">
        <div class="container ontop">
            <div class="swiper-container swiper-content">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 offset-lg-1 offset-md-1">
                                <div class="caption">
                                    <h1>
                                        <div class="thin">Dream</div> Proparties
                                        Now In City
                                    </h1>
                                    <p>MADHU HAJI RIVER VIEW IS A STATE-OF-THE-ART AND WELL-PLANNED CITY COMBINING THE MODERN AND NATURAL BEAUTY OF THE COUNTRY.</p>
                                    <a href="#0" class="btn-curve btn-color btn-radius mt-30">
                                        <span>Discover Work</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 offset-lg-1 offset-md-1">
                                <div class="caption">
                                    <h1>
                                        <div class="thin">FUTURE CONSTRUCTION</div>Find The Best Plot
                                        
                                    </h1>
                                    <p>WE ARE THE FIRST AND ONLY ONE TO IMPLEMENT 100% OF ALL CIVIC AMENITIES, SECURITY AND NOISE FREE HOUSING</p>
                                    <a href="#0" class="btn-curve btn-color btn-radius mt-30 mb-30">
                                        <span>Discover Work</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 offset-lg-1 offset-md-1">
                                <div class="caption">
                                    <h1>
                                        <div class="thin"> CONSTRUCTION</div> The Future Of Your Dreams.
                                        
                                    </h1>
                                    <p>Buy 100% Ready Plots in “Modhu Haji River View” Project, and make the future of your dream come true</p>
                                    <a href="#0" class="btn-curve btn-color btn-radius mt-30 mb-30">
                                        <span>Discover Work</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 offset-lg-1 offset-md-1">
                                <div class="caption">
                                    <h1>
                                        <div class="thin"> Investment</div>Noise & Pollution Free
                                        
                                    </h1>
                                    <p>Everyone is talking about saving green, we have arranged our project in green, Noise and pollution-free scenic landscapes.  </p>
                                    <a href="#0" class="btn-curve btn-color btn-radius mt-30 mb-30">
                                        <span>Discover Work</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>

        <div class="swiper-container swiper-img">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-img" data-background="{{asset('')}}assets/website/img/portfolio/project2/rsz_modhu_hazi_river_view_62.jpg"></div>
                <div class="swiper-slide bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_6198.jpg"  ></div>
                <div class="swiper-slide bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_6185.jpg"  ></div>
                <div class="swiper-slide bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_6125.JPG" ></div>
                <!-- <div class="swiper-slide bg-img" data-background="{{asset('')}}assets/website/img/slid/3.jpg" data-overlay-dark="6"></div> -->
            </div>
        </div>
        <!-- background image -->

        <div class="swiper-slide bg-img" data-background="{{asset('')}}assets/website/img/portfolio/project2/rsz_modhu_hazi_river_view_62.jpg" data-overlay-dark="6"></div>
        <div class="swiper-slide bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_6198.jpg" data-overlay-dark="6"></div>
        <div class="swiper-slide bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_6185.jpg" data-overlay-dark="6"></div>
        <div class="swiper-slide bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_6125.JPG" data-overlay-dark="6"></div>

        <!-- <div class="curve-bg bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_8616.jpg"></div> -->

        <!-- background image end-->

        <!-- slider setting -->
        <div class="setone">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>
        <div class="swiper-pagination custom-font"></div>
    </div>

    <!-- ==================== End Slider ==================== -->


        <!-- ==================== Start wrapper ==================== -->

    
            <!-- ==================== Start about ==================== -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 valign">
                    <div class="content">
                        <div class="sub-title">
                            <h6>About Us</h6>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h3 class="co-tit custom-font wow">Our Journey To Fulfill People's Dreams Started From 2016</h3>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Modhu Haji River View started is journey on 2016 to ease the housing facilities towards the individuals of overpopulated Dhaka city and fulfilling the highly demanding housing needs</p>
                        
                            <p class="wow fadeInUp" data-wow-delay=".4s">The rapidly growing population of Dhaka city can make their sweet home to the outskirts with all infrastructural facilities and Modhu Haji River View turned this dream in to reality.</p>

                            <p class="wow fadeInUp" data-wow-delay=".4s">The prime goal of the company is to provide comfortable Real Estate & Housing facilities of the citizens of Bangladesh ensuring extremely secured, aristocrat living condition. So that people can optimize their investment value at the day end.</p>

                            <p class="wow fadeInUp" data-wow-delay=".4s">By traveling long way, the company has secured its summit position through experiencing different activities which are worthy to be mentioned. It has religiously followed the client’s needs and utilized the lesson gathered in the previous projects. Moreover, innovation & partnership is always strengthen its implementation process.
                            </p>

                            <p class="wow fadeInUp" data-wow-delay=".4s">Modhu Haji River View through major investment in Real-Estate sectors, has tremendously & meaningfully contributed country’s economic-stability and employment crisis</p>
                        <!-- <p class="mt-10 wow fadeInUp" data-wow-delay=".4s">Nulla metus metus ullamcorper vel tincidunt
                            sed euismod nibh volutpat velit
                            class
                            aptent taciti sociosqu ad litora.</p> -->
                        <a href="#0" class="simple-btn custom-font mt-30 wow" data-splitting><span>Know More</span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blc-img">
                        <div class="bimg wow imago">
                            <img src="{{asset('')}}assets/website/img/demo/IMG_8669.jpg" alt="">
                        </div>
                        <div class="skills-circle wow fadeInUp" data-wow-delay=".8">
                            <div class="item">
                                <div class="skill" data-value="0.9">
                                    <span class="custom-font">100%</span>
                                </div>
                                <div class="cont">
                                    <span>Ready</span>
                                    <h6>Plot</h6>
                                </div>
                            </div>
                            <div class="item">
                                <div class="skill" data-value="0.75">
                                    <span class="custom-font">100%</span>
                                </div>
                                <div class="cont">
                                    <span>RiskFree</span>
                                    <h6>Investment</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->

     <!-- ==================== Start Services ==================== -->

     <section class="services section-padding sub-bg">
        <div class="container">
            <div class="sec-head custom-font tr-head">
                <h6>Best Features</h6>
                <h3>Our Specialities</h3>
                <span class="tbg">Our Specialities</span>
            </div>
            

            <div class="row">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="step-item xtop">
                        <span class="icon"><i class="fas fa-city"></i></span>
                        <h6>Demarcate each plot (2 feet high wall).</h6>
                        <p>Land demarcation that defines property boundaries, parcel shapes, and plot locations
                            and, hence, is a foundation for land use and land markets</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                    <div class="step-item xcolor">
                        <span class="icon "><i class="fas fa-bolt"></i></span>
                        <h6>Electricity connection exists</h6>
                        <p>We uphold the highest safety standards for your construction and ensure a sustainable and convenient living</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                    <div class="step-item xbottom">
                        <span class="icon"><i class="fas fa-road"></i></span>
                        <h6>The road is prepared</h6>
                        <p>The high-performance materials used in every step of our projects guarantee the robustness of the building</p>
                    </div>
                </div>
            </div>
            <div class="smore custom-font">
                <a href="#0">Discover More</a>
                <i class="fas fa-long-arrow-alt-right"></i>
            </div>
        </div>
    </section>


    <!-- ==================== Start block-sec ==================== -->

    <section class="block-sec">
        <div class="background  section-padding pb-0" data-background="{{asset('')}}assets/website/img/pattern.png">
            <div class="container">
                <div class="number-sec">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="item no-bord">
                                <span class="icon pe-7s-smile"></span>
                                <h3 class="custom-font"><span class="count">800</span></h3>
                                <p class="wow txt" data-splitting>Happy Clients</p>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-6">
                            <div class="item">
                                <span class="icon"><i class="fab fa-angellist"></i></span>
                                <h3 class="custom-font"><span class="count">133</span></h3>
                                <p class="wow txt" data-splitting>Compleate Projects</p>
                            </div>
                        </div> -->

                        <div class="col-lg-3 col-md-6">
                            <div class="item">
                                <span class="icon pe-7s-cloud-download"></span>
                                <h3 class="custom-font"><span class="count">1600</span></h3>
                                <p class="wow txt" data-splitting>Property Listed</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="item">
                                <span class="icon"><i class="fab fa-angellist"></i></i></span>
                                <h3 class="custom-font"><span class="count">900</span></h3>
                                <p class="wow txt" data-splitting>Ready Plot</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="item">
                                <span class="icon"><i class="fas fa-landmark"></i></span>
                                <h3 class="custom-font"><span class="count">450</span></h3>
                                <p class="wow txt" data-splitting>Property Area(Bigha)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="showreel">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="video-box">
                                <div class="tit-text">
                                    <h3 class="wow">DRONE VIEW OF PROJECT</h3>
                                </div>
                                <div class="wow imago">
                                    <div class="img">
                                        <img src="{{asset('')}}assets/website/img/demo/IMG_6185.jpg" alt="">
                                    </div>
                                    <div class="vid-icon">
                                        <a class="vid" href="https://www.youtube.com/watch?v=RtwXbWf-MUU">
                                            <div class="vid-butn">
                                                <span class="icon">
                                                    <i class="fas fa-play"></i>
                                                </span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End block-sec ==================== -->



    <!-- ==================== End Services ==================== -->

     <!-- ==================== Start Works ==================== -->

     <section class="work-carousel section-padding caroul sub-bg position-re">
        <div class="container-fluid mt-100">
            <div class="sec-head custom-font text-center">
                <h6 class="wow fadeIn" data-wow-delay=".5s">Our Works.</h6>
                <!-- <h3 class="wow" data-splitting>Our Works.</h3> -->
                <span class="tbg">Our Works.</span>
            </div>
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="{{asset('')}}assets/website/img/demo/IMG_6128.jpg">
                                    </div>
                                    <div class="cont bgbox">
                                        <h6><a href="#0"> well-planned city.</a></h6>
                                        <!-- <h4><a href="project-details.html">Innovation and Crafts.</a></h4> -->
                                        <a href="project-details2.html">
                                            <!-- <span class="icon"><i class="fas fa-plus"></i></span> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="{{asset('')}}assets/website/img/demo/IMG_8616.jpg">
                                    </div>
                                    <div class="cont bgbox">
                                        <h6><a href="#0">100% livable</a></h6>
                                        <!-- <h4><a href="project-details.html">Inspiring new space.</a></h4> -->
                                        <a href="project-details2.html">
                                            <!-- <span class="icon"><i class="fas fa-plus"></i></span> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="{{asset('')}}assets/website/img/demo/IMG_6185.jpg">
                                    </div>
                                    <div class="cont bgbox">
                                        <h6><a href="#0">An ideal housing project</a></h6>
                                        <!-- <h4><a href="project-details.html">Natural plus modern.</a></h4> -->
                                        <a href="project-details2.html">
                                            <!-- <span class="icon"><i class="fas fa-plus"></i></span> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content wow fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="{{asset('')}}assets/website/img/demo/IMG_6198.jpg">
                                    </div>
                                    <div class="cont bgbox">
                                        <h6><a href="#0">The process of continuous modernization</a></h6>
                                        
                                            <!-- <span class="icon"><i class="fas fa-plus"></i></span> -->
                                        
                                    </div>
                                </div>
                            </div>
                       
                        </div>

                        <!-- slider setting -->
                        <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-right"></i>
                        </div>
                        <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                            <i class="ion-ios-arrow-left"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Works ==================== -->

     <!-- ==================== reg-form ===================== -->

    {{-- <section class="page-header proj-det bg-img parallaxie valign" data-background="{{asset('')}}assets/website/img/portfolio/project2/rsz_modhu_hazi_river_view_62.jpg"
    data-overlay-dark="4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-9">
         

                <section class="signup section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form md-mb50">
        
                                    <h4 class="extra-title mb-50">Registration Here</h4>
        
                                    <form id="signup-form" method="post" action="{{url('registration')}}">
                                            @csrf 
                                        <div class="messages"></div>
        
                                        <div class="controls">
        
                                            <div class="form-group">
                                                <input id="form_name" type="text" name="name" placeholder="Name:"
                                                    required="required">
                                            </div>

                                            <div class="form-group">
                                                <input id="form_name" type="text" name="mobile" placeholder="Mobile No:"
                                                    required="required">
                                            </div>
        
                                            <div class="form-group">
                                                <input id="form_email" type="email" name="email" placeholder="Email:"
                                                    required="required">
                                            </div>

                                            <div class="form-group">
                                                <input id="form_email" type="text" name="designation" placeholder="Designation:"
                                                    required="required">
                                            </div>

                                            <div class="form-group">
                                                <input id="form_email" type="text" name="organization" placeholder="Organization"
                                                    required="required">
                                            </div>
        
                                           
        
                                            <button type="submit" class="btn-curve btn-color"><span>Submit</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5 offset-lg-1">    
                                <div class="cont-info">
                                    <h4 class="extra-title mb-50">Contact Info.</h4>
                                    <h3 class="custom-font wow">Let's Talk.
                                    </h3>
                                    <div class="item mb-40">
                                        <h5><a href="#0">info@modhuhaji.com</a></h5>
                                        <h5>01986594008</h5>
                                    </div>
                                    <h3 class="custom-font wow">Visit Us.
                                    </h3>
                                    <div class="item">
                                        <h6>House # 38/1, Road # 27, Dhanmondi R/A, Dhaka 1209
                                            </h6>
                                    </div>
                                    <div class="social mt-50">
                                        <a href="https://www.facebook.com/search/top?q=modhu%20haji%20river%20view" class="icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#0" class="icon">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="https://www.instagram.com/explore/locations/143889992682082/modhu-haji-river-view/" class="icon">
                                            <i class="fab fa-instagram-square"></i>
                                        </a>
                                        <a href="https://www.youtube.com/watch?v=M3JWn1GZ2w8" class="icon">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </div>


</section> --}}

    <!-- ==================== reg-form ===================== -->



 <!-- ==================== Start Blog ==================== -->

 <section class="blog-grid section-padding sub-bg">
    <div class="container">
        <div class="sec-head custom-font text-center">
            <h6 class="wow fadeIn" data-wow-delay=".5s">Resent Projects</h6>
            <h3 class="wow">Our Blogs.</h3>
            <span class="tbg">Resent Projects</span>
        </div>
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="item bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_6128.jpg">
                    <div class="cont">
                        <a href="#0" class="date custom-font">
                            <span><i>3</i> Nov 2020</span>
                        </a>
                        <!-- <div class="info custom-font">
                            <a href="#0" class="author">
                                <span>by / Admin</span>
                            </a>
                            <a href="#0" class="tag">
                                <span>WordPress</span>
                            </a>
                        </div> -->
                        <h6>
                            <a href="#0">The developer organization is dealing with a 8-story apartment on the client's plot, which is nearing completion.</a>
                        </h6>
                        <div class="btn-more custom-font">
                            <a href="#0" class="simple-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".6s">
                <div class="item active bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_6198.jpg">
                    <div class="cont">
                        <a href="#0" class="date custom-font">
                            <span><i>3</i> Nov 2020</span>
                        </a>
                        <!-- <div class="info custom-font">
                            <a href="#0" class="author">
                                <span>by / Admin</span>
                            </a>
                            <a href="#0" class="tag">
                                <span>WordPress</span>
                            </a>
                        </div> -->
                        <h6>
                            <a href="#0">In order to demarcate the river, 4,500 works are underway to build 10,620 pillars on both banks, of which 1,500 are visible. And 1200 out of 3063 pillars from Gabtali to Sadarghat have been completed.</a>
                        </h6>
                        <div class="btn-more custom-font">
                            <a href="#0" class="simple-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay=".9s">
                <div class="item bg-img" data-background="{{asset('')}}assets/website/img/demo/IMG_6185.jpg">
                    <div class="cont">
                        <a href="#0" class="date custom-font">
                            <span><i>3</i> Nov 2020</span>
                        </a>
                        <!-- <div class="info custom-font">
                            <a href="#0" class="author">
                                <span>by / Admin</span>
                            </a>
                            <a href="#0" class="tag">
                                <span>WordPress</span>
                            </a>
                        </div> -->
                        <h6>
                            <a href="#0">Future big planning works like RAJUK Model Town, D-O-H-S are likewise proceeding.</a>
                        </h6>
                        <div class="btn-more custom-font">
                            <a href="#0" class="simple-btn">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Blog ==================== -->

 <!-- ==================== Start Footer ==================== -->

 <footer class="footer-half sub-bg section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cont">
                            <div class="logo">
                                <a href="#0">
                                    <img src="{{asset('')}}assets/website/img/logo/logo-resize.png" class="img-edit"  alt="">
                                </a>
                            </div>
                            <div class="con-info custom-font">
                                <ul>
                                    <li><span>Email : </span> info@modhuhaji.com</li>
                                    <li><span>Address : </span> House # 38/1, Road # 27, Dhanmondi R/A, Dhaka 1209
                                    </li>
                                    <li><span>Phone : </span>  +(88) 01986594008</li>
                                </ul>
                            </div>
                            <div class="social-icon">
                                <h6 class="custom-font stit simple-btn">Follow Us</h6>
                                <div class="social">
                                    <a href="https://www.facebook.com/modhuhajiriverview" class="icon">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#0" class="icon">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://www.youtube.com/watch?v=WxWJFIK9juY" class="icon">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a href="https://www.instagram.com/modhuhajiriverview/?fbclid=IwAR0rRWzTLUyt0_4nwlfMrXpsdUGXbMXscnrFFWnS_H4owlPYhe6soBJOPOA" class="icon">
                                        <i class="fab fa-instagram-square"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <div class="subscribe mb-50">
                            <h6 class="custom-font stit simple-btn">Newslatter</h6>
                            <p>Sign up for subscribe out newsletter!</p>
                            <form>
                                <div class="form-group custom-font">
                                    <input type="email" name="subscribe" placeholder="Your Email">
                                    <button class="cursor-pointer">Subscribe</button>
                                </div>
                            </form>
                        </div>
                        <div class="insta">
                            <h6 class="custom-font stit simple-btn">Facebook Post</h6>
                            <div class="insta-gallary">
                                <a href="#0">
                                    <img src="{{asset('')}}assets/website/img/insta/1.jpg" alt="">
                                </a>
                                <a href="#0">
                                    <img src="{{asset('')}}assets/website/img/insta/2.jpg" alt="">
                                </a>
                                <a href="#0">
                                    <img src="{{asset('')}}assets/website/img/insta/3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyrights text-center">
                    <p>ModhuHaji River View @ 2020. All Rights Reserved .</p>
                </div>
            </div>
        </footer>

<!-- ==================== End Footer ==================== -->




    
    </div>
   
    <!-- ====================End Wrapper -->

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
        <!-- plugins -->
        <script src=" {{asset('assets/website/js/plugins.js')}} "></script>
    
        <!-- custom scripts -->
        <script src=" {{asset('assets/website/js/scripts.js')}} "></script>
</body>
</html>