<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from innovationplans.com/idesign/avo2/avo-light/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 10:31:13 GMT -->
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
    <link rel="shortcut icon"  href="img/logo200.ico">

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

</head>

<body>

    <!-- ==================== Start Loading ==================== -->

    <div id="preloader">
    </div>

    <!-- ==================== End Loading ==================== -->



    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar light navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="{{asset('')}}assets/website/img/logo/logo.png" class="img-edit" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('frontend.index')}}"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                    
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.about')}}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.project')}}">Project</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.gallery')}}">Gallery</a>
                    </li>
               
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('frontend.contact')}}">Contact</a>
                    </li>
                </ul>
          
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->


    <!-- ==================== Start header ==================== -->

    <header class="works-header fixed-slider hfixd valign">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 static">
                    <div class="capt mt-50">
                        <div class="parlx">
                            <h2 class="custom-font"><span>Let's</span>If You Have Any Query Then Contact With Us.</h2>
                            
                        </div>

                        <div class="bactxt custom-font valign">
                            <span class="full-width">Contact</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End header ==================== -->


    <!-- ==================== Start main-content ==================== -->

    <div class="main-content">

        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="extra-title mb-50">CONTACT US</h4>

                       

                          <form  method="post" action="{{url('contact_form')}}">
                            
                                @csrf 
                                <div class="messages"></div>

                                <div class="controls">

                                    <div class="form-group">
                                    <input class="@error('name') is-invalid @enderror" type="text" value="{{old('name')}}" name="name" placeholder="Name">
                                        @error('name')
                                                    <small class=" alert-danger">{{ $message }}</small>
                                                @enderror
                                    </div>

                                    <div class="form-group">
                                        <input class="@error('mobile_no') is-invalid @enderror" type="mobileNumber"  value="{{old('mobile_no')}}" name="mobile_no" placeholder="Mobile No">
                                        @error('name')
                                        <small class=" alert-danger">{{ $message }}</small>
                                    @enderror
                                    </div>

                                    <div class="form-group">
                                        <input class="@error('email') is-invalid @enderror" type="email"  value="{{old('email')}}" name="email" placeholder="Email">
                                        @error('email')
                                        <small class=" alert-danger">{{ $message }}</small>
                                    @enderror
                                    </div>

                                    <div class="form-group">
                                        <input class="@error('Designation') is-invalid @enderror"   value="{{old('Designation')}}" type="text" name="Designation" placeholder="Designation">
                                        @error('Designation')
                                        <small class=" alert-danger">{{ $message }}</small>
                                         @enderror
                                    </div>

                                    <div class="form-group">
                                        <input  class="@error('Organization') is-invalid @enderror"  type="text" value="{{old('Organization')}}"  name="Organization" placeholder="Organization">
                                        @error('Organization')
                                        <small class=" alert-danger">{{ $message }}</small>
                                    @enderror
                                    </div>

                                    <div class="form-group">
                                        <textarea class="@error('messagee') is-invalid @enderror"  type="text"  value="" name="messagee" placeholder="Message" rows="4">{{old('messagee')}}</textarea>
                                        @error('messagee')
                                          <small class=" alert-danger">{{ $message }}</small>
                                       @enderror
                                    </div>

                                 <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="cont-info">
                            <h4 class="extra-title mb-50">Contact Info.</h4>
                            <h3 class="custom-font wow" data-splitting>Let's Talk.
                            </h3>
                            <div class="item mb-40">
                                <h5><a href="#0"> info@modhuhaji.com</a></h5>
                                <h5> +(88) 01986594008</h5>
                            </div>
                            <h3 class="custom-font wow" data-splitting>Visit Us.
                            </h3>
                            <div class="item">
                                <h6>Arshinagar of Mohammadpur, Basila
                                    <br>Dhaka, Bangladesh</h6>
                            </div>
                            <div class="social mt-50">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->


        <!-- ==================== Start Map ==================== -->

        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5009569693743!2d90.34870471429649!3d23.72950889549243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bfed850fa20b%3A0xf9e457cc61924e76!2sModhu%20Hazi%20River%20View%20project%20Office!5e0!3m2!1sen!2sbd!4v1604480085820!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </section>

        <!-- ==================== End Map ==================== -->


        <!-- ==================== Start Footer ==================== -->


         <footer class="footer-half sub-bg section-padding pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="cont">
                            <div class="logo">
                                <a href="#0">
                                    <img src="img/logo/logo-resize.png" class="img-edit"  alt="">
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
                                    <a href="https://www.youtube.com/watch?v=M3JWn1GZ2w8" class="icon">
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
                                    <img src="img/insta/1.jpg" alt="">
                                </a>
                                <a href="#0">
                                    <img src="img/insta/2.jpg" alt="">
                                </a>
                                <a href="#0">
                                    <img src="img/insta/3.jpg" alt="">
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

    <!-- ==================== End main-content ==================== -->






    <!-- jQuery -->
    <script src="{{asset('assets/website/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/website/js/jquery-migrate-3.0.0.min.js')}}"></script>

    <!-- plugins -->
    <script src=" {{asset('assets/website/js/plugins.js')}} "></script>
        

    <!-- custom scripts -->
    <script src=" {{asset('assets/website/js/scripts.js')}} "></script>

    <!-- Map -->
    <script src="{{asset('assets/website/js/map.js')}}"></script>

    <!-- google map api -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bpEs3xlB8vhxNFErwoo3MXR64uavf6Y&amp;callback=initMap">
        </script>


</body>


<!-- Mirrored from innovationplans.com/idesign/avo2/avo-light/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Nov 2020 10:31:14 GMT -->
</html>