<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Noithatc3 || Thiết kế nội thất || Thi công nội thất</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css?version=20210229">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>

@yield('body')

<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7">
                <!--Start contact info left-->
                <div class="contact-info-left clearfix">
                    <ul>
                        <li><span class="flaticon-building"></span>{{config('app.address')}}</li>
                        <li><span class="flaticon-new-email-outline envelop"></span>{{config('app.email')}}</li>
                    </ul>
                </div>
                <!--End contact info left-->
            </div>
            <div class="col-lg-5 col-md-5">
                <!--Start contact info right-->
                <div class="contact-info-right">
                    <div class="phnumber">
                        <p><span class="flaticon-technology"></span>{{config('app.phone')}}</p>
                    </div>
                    <!--<div class="language-switcher">
                        <div id="polyglotLanguageSwitcher">
                            <form action="#">
                                <select id="polyglot-language-options">
                                    <option id="en" value="en" selected>English</option>
                                    <option id="fr" value="fr">French</option>
                                    <option id="de" value="de">German</option>
                                    <option id="it" value="it">Italian</option>
                                    <option id="es" value="es">Spanish</option>
                                </select>
                            </form>
                        </div>
                    </div>-->
                    <div class="top-social-links">
                        <ul>
                            <li><a target="_blank" href="{{config('app.facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="{{config('app.google')}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="{{config('app.youtube')}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--End contact info right-->
            </div>
        </div>
    </div>
</section>

<!--Start header-search  area-->
<section class="header-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="search-form pull-right">
                    <form action="#">
                        <div class="search">
                            <input type="search" name="search" value="" placeholder="Search Something">
                            <button type="submit"><span class="icon fa fa-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End header-search  area-->

<!--Start header area-->
<header class="header-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="outer-box clearfix">
                    <!--Start logo-->
                    <div class="logo">
                        <a href="/">
                            <img style="max-height: 64px;" src="images/resources/logo.png" alt="Awesome Logo">
                        </a>
                    </div>
                    <!--End logo-->
                    <!--Start search box btn-->
                    <div class="search-box-btn">
                        <div class="toggle-search">
                            <button><span class="icon fa fa-search"></span></button>
                        </div>
                    </div>
                    <!--End search box btn-->
                    <!--Start cart btn-->
{{--                    <div class="cart-btn">--}}
{{--                        <a href="cart.html">--}}
{{--                            <span class="fa fa-shopping-bag carticon" aria-hidden="true"></span>--}}
{{--                            <span class="item-count">2</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                    <!--End cart btn-->
                    <!--Start mainmenu-->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="/">Trang chủ</a></li>
                                <li class="dropdown"><a href="services.html">Dịch vụ</a>
                                    <ul>
                                        <li><a href="services.html">Thiết kế</a></li>
                                        <li><a href="services-single.html">Thi công</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="about.html">Về chúng tôi</a>
                                    <ul>
                                        <li><a href="about.html">Giới thiệu</a></li>
                                        <li><a href="press-realese.html">Báo chí nói gì</a></li>
                                        <li><a href="testimonial.html">Tự bạch</a></li>
{{--                                        <li><a href="faq.html">FAQ’s</a></li>--}}
{{--                                        <li><a href="404.html">404 Page</a></li>--}}
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="project-grid-v1.html">Dự án</a>
                                    <ul>
                                        <li class="dropdown"><a href="project-grid-v1.html">Nhà ở</a>
                                            <ul>
                                                <li><a href="project-grid-v1.html">Phòng khách</a></li>
                                                <li><a href="project-grid-v2.html">Nhà tắm</a></li>
                                                <li><a href="project-grid-v3.html">Phòng ngủ</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="project-classic-v1.html">Cửa hàng</a>
                                            <ul>
                                                <li><a href="project-classic-v1.html">Shop quần áo</a></li>
                                                <li><a href="project-classic-v2.html">Tiệm ăn</a></li>
{{--                                                <li><a href="project-classic-v3.html">Project Classic V3</a></li>--}}
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="project-with-text.html">Nhà dân</a>
                                            <ul>
                                                <li><a href="project-with-text.html">Nhà dân 100m2</a></li>
                                            </ul>
                                        </li>
{{--                                        <li class="dropdown"><a href="project-fullwidth.html">Projects Fullwidth</a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="project-fullwidth.html">Projects Fullwidth V1</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="dropdown"><a href="project-manasory-v1.html">Manasory Style</a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="project-manasory-v1.html">Manasory Style V1</a></li>--}}
{{--                                                <li><a href="project-manasory-v2.html">Manasory Style V2</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="dropdown"><a href="project-single-v1.html">Single Project</a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="project-single-v1.html">Single Project V1</a></li>--}}
{{--                                                <li><a href="project-single-v2.html">Single Project V2</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li>
{{--                                <li class="dropdown"><a href="shop.html">Shop</a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="shop.html">Products Fullwidth</a></li>--}}
{{--                                        <li><a href="shop-with-sidebar.html">Products With Sidebar</a></li>--}}
{{--                                        <li><a href="shop-single.html">Product Single</a></li>--}}
{{--                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>--}}
{{--                                        <li><a href="checkout.html">Checkout</a></li>--}}
{{--                                        <li><a href="account.html">My Account</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
                                <li class=""><a href="contact-v1.html">Liên hệ</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="contact-v1.html">Contact Us 01</a></li>--}}
{{--                                        <li><a href="contact-v2.html">Contact Us 02</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!--End mainmenu-->
                </div>
            </div>
        </div>
    </div>
</header>
<!--End header area-->

@yield('content')

<!--Start footer area-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="single-footer-widget pd-bottom">
                    <div class="footer-logo">
                        <a href="/">
                            <img src="images/footer/footer-logo.png" alt="Awesome Footer Logo">
                        </a>
                    </div>
                    <div class="interrio-info">
                        <p><span>{{config('app.name')}}</span>
                            Mang hàng chục năm kinh nghiệm thiết kế nội thất vào văn phòng hay ngôi nhà của bạn.
                            Các chuyên gia thiết kế của chúng tôi được đào tạo để cùng bạn tạo ra những sản phẩm và thiết kế tốt nhất.
                        </p>
                    </div>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-building"></span>
                            </div>
                            <div class="text-holder">
                                <p>{{config('app.address')}}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <p>{{config('app.phone')}}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-e-mail-envelope"></span>
                            </div>
                            <div class="text-holder">
                                <p>{{config('app.email')}}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder time">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="text-holder">
                                <p>Thứ hai - Chủ nhật: 00.00 to 23.59<br>Kể cả ngày lễ, tết</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="single-footer-widget pd-bottom">
                    <div class="title">
                        <h3>Xem nhiều</h3>
                    </div>
                    <ul class="popular-news clearfix">
                        <li class="single-popular-news-item clearfix">
                            <div class="img-holder">
                                <img src="images/footer/popular-news-1.jpg" alt="Awesome Image">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="services-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <p>Smart Ways to Store Your Home Appliances.</p>
                                </a>
                                <ul class="info">
                                    <li>by Meckey</li>
                                    <li>July17, 2016</li>
                                </ul>
                            </div>
                        </li>
                        <li class="single-popular-news-item">
                            <div class="img-holder">
                                <img src="images/footer/popular-news-2.jpg" alt="Awesome Image">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="services-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <p>A Stylish Apartment With a Neutral Color Scheme.</p>
                                </a>
                                <ul class="info">
                                    <li>by Zersy</li>
                                    <li>May10, 2016</li>
                                </ul>
                            </div>
                        </li>
                        <li class="single-popular-news-item">
                            <div class="img-holder">
                                <img src="images/footer/popular-news-3.jpg" alt="Awesome Image">
                                <div class="overlay">
                                    <div class="box">
                                        <div class="content">
                                            <a href="services-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <a href="#">
                                    <p>How to Make Attarctive Decoration For Your Living Room </p>
                                </a>
                                <ul class="info">
                                    <li>by Jonny</li>
                                    <li>Aug21, 2016</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="single-footer-widget pd-bottom">
                    <div class="title">
                        <h3>Nhận thông tin</h3>
                    </div>
                    <div class="subscribe-form">
                        <p>Đăng ký để nhận thông tin mới nhất từ chúng tôi</p>
                        <form action="#">
                            <input type="text" name="email" placeholder="Nhập email của bạn...">
                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </form>
                        <h4>Chúng tôi nói không với spam. Email của bạn sẽ được giữ kín</h4>
                    </div>
                    <!--Start latest project-->
                    <div class="latest-project">
                        <div class="title">
                            <h3>Dự án gần nhất</h3>
                        </div>
                        <ul class="latest-project-items">
                            <li>
                                <div class="img-holder">
                                    <img src="images/footer/lat-project-1.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/footer/lat-project-2.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/footer/lat-project-3.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-holder">
                                    <img src="images/footer/lat-project-4.jpg" alt="Awesome Image">
                                    <div class="overlay">
                                        <div class="box">
                                            <div class="content">
                                                <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--End latest project-->
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>
<!--End footer area-->

<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class="copyright-text">
                    <p>© 2021 {{config('app.name')}},  Bản quyền thuộc về <a href="/">{{config('app.name')}}</a></p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <div class="footer-menu">
                    <ul>
                        <li><a href="{{config('app.facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="{{config('app.google')}}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="{{config('app.linkedin')}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End footer bottom area-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</div>

<!-- main jQuery -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="js/validate.js"></script>
<!-- mixit up -->
<script src="js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>
<!-- video responsive script -->
<script src="js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- fancy box -->
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="js/isotope.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>

<!-- revolution slider js -->
<script src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="js/custom.js"></script>
</body>
</html>
