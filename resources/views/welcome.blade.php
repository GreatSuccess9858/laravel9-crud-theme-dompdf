<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Favison SAAS</title>
        <!-- Bootstrap CSS -->


        <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/vendors/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/vendors/animate-css/animate.css') }}">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('landing/css/responsive.css') }}">
    </head>
    <body>
         <header class="header_area">
                <div class="main_menu">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                                <ul class="nav navbar-nav menu_nav ml-auto">
                                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}">User Crud</a></li> 
                                    <li class="nav-item"><a class="nav-link" href="feature.html">Features</a></li>
                                    <li class="nav-item"><a class="nav-link" href="price.html">Price</a></li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="feature.html">Features</a></li>
                                            <li class="nav-item"><a class="nav-link" href="price.html">Price</a></li>
                                            <li class="nav-item"><a class="nav-link" href="element.html">Element</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item submenu dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                                            <li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <div class="right-button">
                                <ul>
                                    <li class="shop-icon"><a href="#"><i class="ti-shopping-cart-full"></i><span>0</span></a></li>
                                    @if (Route::has('register'))
                                        <li><a class="sign_up" href="{{ route('login') }}">Sign In</a></li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <section class="home_banner_area">
                    <div class="banner_inner d-flex align-items-center">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-6 col-xl-5 offset-xl-7">
                                    <div class="banner_content">
                                        <h3>Build a better<br/>business & faster</h3>
                                        <p>Subdue creature does face signs evening good sixth foreign gaered one. Fruit. Third every fruitful multiply subdue creature doesn't face signs evening good sixth tyou're.</p>
                                        <a class="banner_btn" href="#">Begin Free Trial<i class="ti-arrow-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!--================End Home Banner Area =================-->


                <!--================About  Area =================-->
                <section class="about-area area-padding-bottom">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="col-lg-6">
                                <div class="area-heading">
                                    <h4>Form Female From<br>Cattle Evening. </h4>
                                    <h6>And appear great open bearing evening dominion vodi </h6>

                                    <p>There earth face earth behold. She'd stars made void two given do and also. Our own grass days.  Greater male Shall There faced earth behold She star</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="single-about">
                                            <div class="about-icon">
                                                <i class="ti-thought"></i>
                                            </div>
                                            <div class="single-about-content">
                                                <h5>Cloud Compatibility</h5>
                                                <p>There earth face earth behold. She stars made void two given and also our own grass days. Greater </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="single-about">
                                            <div class="about-icon">
                                                <i class="ti-truck"></i>
                                            </div>
                                            <div class="single-about-content">
                                                <h5>On Time Delivery</h5>
                                                <p>There earth face earth behold. She stars made void two given and also our own grass days. Greater </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--================About Area End =================-->

                <!--================Feature  Area =================-->
                <section class="feature-area area-padding bg_one">
                    <div class="container">
                        <div class="row align-items-center">

                            <div class="offset-lg-6 col-lg-6">
                                <div class="area-heading light">
                                    <h4>Easy to Use <br>Mobile Application</h4>
                                    <p>There earth face earth behold. She'd stars made void two given do and also. Our own grass days.  Greater male Shall There faced earth behold She star</p>
                                </div>
                                <div class="row">
                                    <div class="col-">
                                        <div class="single-feature d-flex">
                                            <div class="feature-icon">
                                                <i class="ti-layers"></i>
                                            </div>
                                            <div class="single-feature-content">
                                                <h5>Add New Project</h5>
                                                <p>There earth face earth behold. She stars made void two given and also our own grass days. Greater </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-">
                                        <div class="single-feature d-flex">
                                            <div class="feature-icon">
                                                <i class="ti-layers"></i>
                                            </div>
                                            <div class="single-feature-content">
                                                <h5>Generating Leads</h5>
                                                <p>There earth face earth behold. She stars made void two given and also our own grass days. Greater </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--================Feature Area End =================-->


                <!--================About  Area =================-->
                <section class="statics-area area-padding">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-5">
                                <div class="image-box">
                                    <img src="img/banner/about3.png" alt="">
                                </div>
                            </div>

                            <div class="offset-lg-1 col-lg-6">
                                <div class="area-heading">
                                    <h4>Form Female From<br>Cattle Evening. </h4>
                                    <h6>And appear great open bearing evening dominion vodi </h6>

                                    <p>There earth face earth behold. She'd stars made void two given do and also. Our own grass days.  Greater male Shall There faced earth behold She star</p>
                                </div>
                                <div class="single-data">
                                    <i class="ti-paint-bucket"></i>
                                    <p>Set dry signs spirit a kind First shall them.</p>
                                </div>
                                <div class="single-data">
                                    <i class="ti-check-box"></i>
                                    <p>He two face one moved dominion man you're likeness</p>
                                </div>
                                <div class="single-data">
                                    <i class="ti-ruler-pencil"></i>
                                    <p>Sea forth fill have divide be dominion from life</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
                <!--================About Area End =================-->
                <!--================ Start Brands Area =================-->
                <section class="brands-area area-padding-bottom">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="owl-carousel brand-carousel">
                                    <!-- single-brand -->
                                    <div class="single-brand-item d-table">
                                        <div class="d-table-cell">
                                            <img src="img/logo/1.png" alt="">
                                        </div>
                                    </div>
                                    <!-- single-brand -->
                                    <div class="single-brand-item d-table">
                                        <div class="d-table-cell">
                                            <img src="img/logo/2.png" alt="">
                                        </div>
                                    </div>
                                    <!-- single-brand -->
                                    <div class="single-brand-item d-table">
                                        <div class="d-table-cell">
                                            <img src="img/logo/3.png" alt="">
                                        </div>
                                    </div>
                                    <!-- single-brand -->
                                    <div class="single-brand-item d-table">
                                        <div class="d-table-cell">
                                            <img src="img/logo/4.png" alt="">
                                        </div>
                                    </div>
                                    <!-- single-brand -->
                                    <div class="single-brand-item d-table">
                                        <div class="d-table-cell">
                                            <img src="img/logo/5.png" alt="">
                                        </div>
                                    </div>
                                    <!-- single-brand -->
                                    <div class="single-brand-item d-table">
                                        <div class="d-table-cell">
                                            <img src="img/logo/3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--================ End Brands Area =================-->



                <!-- ================ start footer Area ================= -->
                <footer class="footer-area">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                                <h4>About Us</h4>
                                <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                                <div class="footer-logo">
                                    <img src="img/logo.png" alt="">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                                <h4>Contact Info</h4>
                                <div class="footer-address">
                                    <p>Address :Your address goes
                                    here, your demo address.</p>
                                    <span>Phone : +8880 44338899</span>
                                    <span>Email : info@colorlib.com</span>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#">WHMCS-bridge</a></li>
                                    <li><a href="#">Search Domain</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Shopping Cart</a></li>
                                    <li><a href="#">Our Shop</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-3 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                                <h4>Newsletter</h4>
                                <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open</p>

                                <div class="form-wrap" id="mc_embed_signup">
                                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                    method="get">
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                                        <div class="input-group-append">
                                            <button class="btn click-btn" type="submit">
                                                <i class="fab fa-telegram-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>

                                    <div class="info"></div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="footer-bottom row align-items-center text-center text-lg-left no-gutters">
                        <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter-alt"></i></a>
                            <a href="#"><i class="ti-dribbble"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ================ End footer Area ================= -->
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="{{ asset('landing/js/jquery-2.2.4.min.js') }}"></script>
            <script src="{{ asset('landing/js/popper.js') }}"></script>
            <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('landing/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('landing/js/jquery.ajaxchimp.min.js') }}"></script>
            <script src="{{ asset('landing/js/waypoints.min.js') }}"></script>
            <script src="{{ asset('landing/js/mail-script.js') }}"></script>
            <script src="{{ asset('landing/js/contact.js') }}"></script>
            <script src="{{ asset('landing/js/jquery.form.js') }}"></script>
            <script src="{{ asset('landing/js/jquery.validate.min.js') }}"></script>
            <script src="{{ asset('landing/js/mail-script.js') }}"></script>
            <script src="{{ asset('landing/js/theme.js') }}"></script>
    </body>
</html>
