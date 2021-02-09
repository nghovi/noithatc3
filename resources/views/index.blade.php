@extends('layouts.app')
@section('content')

    <!--Start rev slider wrapper-->
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider"  data-version="5.0">
            <ul>
                <li data-transition="slidingoverlayleft">
                    <img src="images/slides/1.jpg"  alt="" width="1920" height="800" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="205"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="700">
                        <div class="slide-content-box">
                            <h1>Mang hơi thở cuộc sống<br> vào ngôi nhà <span>mơ ước</span></h1>
                            <h3>Vì sao <span>1000+</span> khách hàng đã chọn {{config('app.name')}}</h3>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="475"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-cl-1" href="">Dịch vụ</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="199"
                         data-y="top" data-voffset="475"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bdr" href="">Dự án mới nhất</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="slidingoverlayleft">
                    <img src="images/slides/2.jpg"  alt="" width="1920" height="800" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

                    <div class="tp-caption tp-resizeme"
                         data-x="right" data-hoffset="0"
                         data-y="top" data-voffset="205"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="500">
                        <div class="slide-content-box">
                            <h1>Thương hiệu <br>thiết kế nội thất <span>số 1</span><br></h1>
                            <h3>Làm việc với chúng tôi từ <span>mọi miền đất nước</span></h3>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="right" data-hoffset="209"
                         data-y="top" data-voffset="475"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bdr" href="">Dự án mới nhất</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="right" data-hoffset="436"
                         data-y="top" data-voffset="475"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-cl-1" href="">Dịch vụ</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li data-transition="slidingoverlayleft">
                    <img src="images/slides/1.jpg"  alt="" width="1920" height="800" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >

                    <div class="tp-caption  tp-resizeme"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="205"
                         data-transform_idle="o:1;"
                         data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                         data-splitin="none"
                         data-splitout="none"
                         data-start="700">
                        <div class="slide-content-box">
                            <h1><span>Giải nhất</span><br>thiết kế nội thất</h1>
                            <h3>Vì sao  <span>1000+</span> khách hàng chọn {{config('app.name')}}</h3>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="0"
                         data-y="top" data-voffset="475"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2300">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bg-cl-1" href="">Dịch vụ</a>
                            </div>
                        </div>
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="left" data-hoffset="199"
                         data-y="top" data-voffset="475"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                         data-splitin="none"
                         data-splitout="none"
                         data-responsive_offset="on"
                         data-start="2600">
                        <div class="slide-content-box">
                            <div class="button">
                                <a class="thm-btn bdr" href="">Dự án mới nhất</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </section>
    <!--End rev slider wrapper-->

    <!--Start welcome area-->
    <section class="welcome-area">
        <div class="container clearfix">
            <div class="sec-title">
                <h2>Chào mừng đến với <span>{{config('app.name')}}</span></h2>
                <span class="decor"></span>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="text-holder">
                        <h3>Chúng tôi là những nhà thiết kế và thi công nội thất hàng đầu Việt Nam</h3>

                        <p>{{config("app.name")}} mang hàng chục năm kinh nghiệm thiết kế nội thất đến không gian của bạn.
                            Các chuyên gia thiết kế của chúng tôi được đào tạo để cùng bạn tạo ra những sản phẩm và thiết kế tốt nhất, phù hợp với màu sắc và ánh sáng xung quanh, vượt cả mong đợi của bạn</p>
                        <p>Làm việc cùng nhau trực tiếp tại điạ điểm thi công hay văn phòng, chúng tôi sẽ giúp bạn mô phỏng các giải pháp thiết kế phù hợp với phong cách, không gian và ngân sách.</p>
                        <div class="bottom">
                            <div class="button">
                                <a class="thm-btn bg-cl-1" href="#">Thêm về chúng tôi</a>
                            </div>
                            <div class="title">
                                <h3>Hòm thư: <span>{{config('app.email')}}</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="gallery clearfix">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="video-gallery">
                                    <img src="images/welcome/main-gallery.jpg" alt="Awesome Video Gallery">
                                    <div class="overlay-gallery">
                                        <div class="icon-holder">
                                            <div class="icon">
                                                <a class="video-fancybox" title="Interrio Gallery" href="https://www.youtube.com/watch?v=KssOT2QVg-M"><img src="images/icon/play-btn.png" alt="Play Button"/></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="gallery-bg-img">
                                    <img src="images/welcome/1.jpg" alt="Awesome Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End welcome area-->

    <!--Start service area-->
    <section class="service-area" style="background-image:url(images/services/bg.jpg);">
        <div class="container">
            <div class="sec-title">
                <h2>Dịch vụ</h2>
                <span class="decor"></span>
            </div>
            <div class="row">
                <!--Start single service item-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service-item">
                        <div class="img-holder">
                            <img src="images/services/1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="services-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="services-single.html"><h3><span>Thiết kế & thi công </span>nội thất</h3></a>
                            <p>Nhận thiết kế giường tủ, nhà bếp, sàn, kệ,...</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
                <!--Start single service item-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service-item">
                        <div class="img-holder">
                            <img src="images/services/2.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="services-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="services-single.html"><h3><span>Thiết kế & thi công</span> thương mại</h3></a>
                            <p>Phòng chờ, khu dịch vụ, shop quần áo...</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
                <!--Start single service item-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service-item">
                        <div class="img-holder">
                            <img src="images/services/3.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="services-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="services-single.html"><h3><span>Thiết kế & thi công </span>văn phòng</h3></a>
                            <p>Thay đổi không gian, môi trường làm việc...</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
                <!--Start single service item-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service-item">
                        <div class="img-holder">
                            <img src="images/services/4.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="services-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="services-single.html"><h3><span>Thiết kế & thi công </span> nhà ở, sân vườn</h3></a>
                            <p>Kiến tạo không gian sống cá tính và hữu ích...</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
                <!--Start single service item-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service-item">
                        <div class="img-holder">
                            <img src="images/services/5.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="services-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="services-single.html"><h3><span>Thiết kế & thi công </span>nhà ăn, khách sạn</h3></a>
                            <p>Mang đến sự phá cách và khác biệt...</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->
                <!--Start single service item-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-service-item">
                        <div class="img-holder">
                            <img src="images/services/6.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="services-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="services-single.html"><h3><span>Thiết kế & thi công </span>công nghiệp</h3></a>
                            <p>Nhà xưởng tối ưu hiệu quả, an toàn...</p>
                        </div>
                    </div>
                </div>
                <!--End single service item-->

            </div>
        </div>
    </section>
    <!--End service area-->

    <!--Start latest project area-->
    <section class="latest-project-area">
        <div class="container-fluid">
            <div class="container">
                <div class="sec-title pull-left">
                    <h2>Dự án <span>mới nhất</span></h2>
                    <span class="decor"></span>
                </div>
                <ul class="project-filter post-filter pull-right">
                    <li class="active" data-filter=".filter-item"><span>Xem tất (12)</span></li>
                    <li data-filter=".residential"><span>Nhà ở (04)</span></li>
                    <li data-filter=".corporate"><span>Văn phòng (03)</span></li>
                    <li data-filter=".restaurant"><span>Cửa hàng (02)</span></li>
                    <li data-filter=".industrial"><span>Nhà xưởng (03)</span></li>
                </ul>
            </div>
            <div class="row project-content masonary-layout filter-layout">
                <!--Start single project-->
                <div class="col-md-3 col-sm-6 col-xs-12 filter-item corporate residential industrial">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/project/lat-pj-1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="project-single-v1.html"><h3>Phòng vệ sinh hiện đại</h3></a>
                                        <p>Nhà ở</p>
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pj-1.jpg" data-rel="prettyPhoto" title="Interrio Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project-->
                <!--Start single project-->
                <div class="col-md-3 col-sm-6 col-xs-12 filter-item industrial corporate">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/project/lat-pj-2.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="project-single-v1.html"><h3>Phòng khách thời thượng</h3></a>
                                        <p>Nhà ở</p>
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pj-2.jpg" data-rel="prettyPhoto" title="Interrio Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project-->
                <!--Start single project-->
                <div class="col-md-3 col-sm-6 col-xs-12 filter-item corporate residential restaurant">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/project/lat-pj-3.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="project-single-v1.html"><h3>Phòng ngủ ấm cúng</h3></a>
                                        <p>Nhà ở</p>
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pj-3.jpg" data-rel="prettyPhoto" title="Interrio Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project-->
                <!--Start single project-->
                <div class="col-md-3 col-sm-6 col-xs-12 filter-item corporate residential industrial">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/project/lat-pj-4.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="project-single-v1.html"><h3>Phòng khách thông thoáng</h3></a>
                                        <p>Nhà ở</p>
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pj-4.jpg" data-rel="prettyPhoto" title="Interrio Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project-->
                <!--Start single project-->
                <div class="col-md-3 col-sm-6 col-xs-12 filter-item residential corporate industrial">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/project/lat-pj-5.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="project-single-v1.html"><h3>Phòng khách hiện đại</h3></a>
                                        <p>Nhà ở</p>
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pj-5.jpg" data-rel="prettyPhoto" title="Interrio Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project-->
                <!--Start single project-->
                <div class="col-md-3 col-sm-6 col-xs-12 filter-item residential industrial restaurant">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/project/lat-pj-6.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="project-single-v1.html"><h3>Phòng khách hiện đại</h3></a>
                                        <p>Nhà ở</p>
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pj-6.jpg" data-rel="prettyPhoto" title="Interrio Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project-->
                <!--Start single project-->
                <div class="col-md-3 col-sm-6 col-xs-12 filter-item residential corporate restaurant">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/project/lat-pj-7.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="project-single-v1.html"><h3>Phòng khách hiện đại</h3></a>
                                        <p>Nhà ở</p>
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pj-7.jpg" data-rel="prettyPhoto" title="Interrio Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project-->
                <!--Start single project-->
                <div class="col-md-3 col-sm-6 col-xs-12 filter-item residential industrial">
                    <div class="single-project-item">
                        <div class="img-holder">
                            <img src="images/project/lat-pj-8.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="project-single-v1.html"><h3>Phòng khách hiện đại</h3></a>
                                        <p>Nhà ở</p>
                                        <div class="icon-holder">
                                            <a href="images/project/lat-pj-8.jpg" data-rel="prettyPhoto" title="Interrio Project"><i class="fa fa-camera"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single project-->
            </div>
        </div>
    </section>
    <!--End latest project area-->

    <!--Start slogan area-->
    <section class="slogan-area" style="background-image:url(images/resources/slogan.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slogan">
                        <h2>Là hãng thiết kế nội thất lớn nhất Hà Nội, bạn có thể làm việc với chúng tôi từ khắp mọi nơi!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End slogan area-->

    <!--Start working area-->
    <section class="working-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Quy trình làm việc</h2>
                <p>Trong suốt hơn 10 năm qua, chúng tôi đã đơn giản và chuyên nghiệp hoá quy trình 4 bước: </p>
            </div>
            <div class="row">
                <!--Start single working item-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-working-item">
                        <div class="icon-box">
                            <div class="icon">
                                <span class="flaticon-people"></span>
                            </div>
                            <div class="count">
                                <h3>1</h3>
                            </div>
                        </div>
                        <div class="text-box text-center">
                            <h3>Gặp gỡ khách hàng</h3>
                            <p>Nhà thiết kế gặp gỡ, trao đổi với khách để lắng nghe, thu thập thông tin</p>
                        </div>
                    </div>
                </div>
                <!--End single working item-->
                <!--Start single working item-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-working-item">
                        <div class="icon-box">
                            <div class="icon">
                                <span class="flaticon-people"></span>
                            </div>
                            <div class="count">
                                <h3>2</h3>
                            </div>
                        </div>
                        <div class="text-box text-center">
                            <h3>Thống nhất ý tưởng</h3>
                            <p>Cùng với khách hàng thiết kế, chọn mẫu, vật liệu</p>
                        </div>
                    </div>
                </div>
                <!--End single working item-->
                <!--Start single working item-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-working-item">
                        <div class="icon-box">
                            <div class="icon">
                                <span class="flaticon-people"></span>
                            </div>
                            <div class="count">
                                <h3>3</h3>
                            </div>
                        </div>
                        <div class="text-box text-center">
                            <h3>Thi công </h3>
                            <p>Thi công và giám sát, phản hồi chặt chẽ</p>
                        </div>
                    </div>
                </div>
                <!--End single working item-->
                <!--Start single working item-->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-working-item">
                        <div class="icon-box">
                            <div class="icon">
                                <span class="flaticon-people"></span>
                            </div>
                            <div class="count">
                                <h3>4</h3>
                            </div>
                        </div>
                        <div class="text-box text-center">
                            <h3>Nghiệm thu</h3>
                            <p>Kiểm nghiệm và đánh giá thực tế</p>
                        </div>
                    </div>
                </div>
                <!--End single working item-->
            </div>
        </div>
    </section>
    <!--End working area-->

    <!--Start testimonial area-->
    <section class="testimonial-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Khách hàng nói gì</h2>
                <span class="border"></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-carousel">
                        <!--Start single slide item-->
                        <div class="single-slide-item">
                            <div class="img-box">
                                <img src="images/customers/gallery.jpg" alt="Awesome Image">
                                <div class="client-photo">
                                    <img src="images/customers/customer-1.png" alt="Awesome Image">
                                </div>
                                <div class="review-box">
                                    <span>Đánh giá dự án:</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box">
                                <span class="flaticon-right"></span>
                                <div class="text">
                                    <p>Khách quan mà nói, tôi thấy {{config('app.name')}} rất nhiệt tình, thi công chăm chỉ và hết sức sáng tạo, bài bản. Các bạn đã mang đến cho chúng tôi ngôi nhà vừa ý cả về thẩm mỹ lẫn kinh tế. Thực sự hài lòng!</p>
                                    <h3>Anh Việt</h3>
                                    <h4>Đan Phượng, Hà Nội</h4>
                                </div>
                            </div>
                        </div>
                        <!--End single slide item-->
                        <!--Start single slide item-->
                        <div class="single-slide-item">
                            <div class="img-box">
                                <img src="images/customers/gallery.jpg" alt="Awesome Image">
                                <div class="client-photo">
                                    <img src="images/customers/customer-1.png" alt="Awesome Image">
                                </div>
                                <div class="review-box">
                                    <span>Đánh giá:</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box">
                                <span class="flaticon-right"></span>
                                <div class="text">
                                    <p>{{config('app.name')}} đã giúp mình tiết kiệm rất nhiều thời gian và tiền bạc. Thiết kế, thi công trọn gói,1 mối duy nhất. Nhanh, gọn, lẹ mà vẫn cực OK.</p>
                                    <h3>Chị Ngọc</h3>
                                    <h4>Tam Nông, Phú Thọ</h4>
                                </div>
                            </div>
                        </div>
                        <!--End single slide item-->
                        <!--Start single slide item-->
                        <div class="single-slide-item">
                            <div class="img-box">
                                <img src="images/customers/gallery.jpg" alt="Awesome Image">
                                <div class="client-photo">
                                    <img src="images/customers/customer-1.png" alt="Awesome Image">
                                </div>
                                <div class="review-box">
                                    <span>Đánh giá:</span>
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="text-box">
                                <span class="flaticon-right"></span>
                                <div class="text">
                                    <p>Ai đến thăm nhà mình cũng đều nói "Nhà này chắc thuê thiết kế mất khối tiền đây". Mình biết đó ngụ ý là một lời khen nên cảm thấy rất vui và đã giới thiệu ngay {{config('app.name')}} với họ.</p>
                                    <h3>Bạn Hoàng Linh</h3>
                                    <h4>Hà Nội</h4>
                                </div>
                            </div>
                        </div>
                        <!--End single slide item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End testimonial area-->

    <!--Start latest blog area-->
    <section class="latest-blog-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title pull-left">
                        <h2>Tin <span>mới nhất</span></h2>
                        <span class="decor"></span>
                    </div>
                    <div class="more-blog-button pull-right">
                        <a class="thm-btn bg-cl-1" href="news-standard.html">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--Start single blog item-->
                <div class="col-md-4">
                    <div class="single-blog-item">
                        <div class="img-holder">
                            <img src="images/blog/lat-blog-1.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="blog-single.html">
                                <h3 class="blog-title">Bài trí TV thế nào cho thật phong cách</h3>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Fletcher</a></li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">April 21, 2016</a></li>
                            </ul>
                            <div class="text">
                                <p>How all this mistaken idea of denouncing pleasure and praising uts pain was borns and give you How all this mistaken.</p>
                                <a class="readmore" href="news-single.html">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single blog item-->
                <!--Start single blog item-->
                <div class="col-md-4">
                    <div class="single-blog-item">
                        <div class="img-holder">
                            <img src="images/blog/lat-blog-2.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="blog-single.html">
                                <h3 class="blog-title">Trải nghiệm không gian ăn tuyệt vời</h3>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Venanda</a></li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">March 4, 2016</a></li>
                            </ul>
                            <div class="text">
                                <p>Master-builder of human happiness no one rejects, dislikes, or avoids ut itself, because it is pleasures.</p>
                                <a class="readmore" href="news-single.html">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single blog item-->
                <!--Start single blog item-->
                <div class="col-md-4">
                    <div class="single-blog-item">
                        <div class="img-holder">
                            <img src="images/blog/lat-blog-3.jpg" alt="Awesome Image">
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <a href="blog-single.html"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <a href="blog-single.html">
                                <h3 class="blog-title">Những cách thông minh để cất giữ đồ gia dụng</h3>
                            </a>
                            <ul class="meta-info">
                                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Bovando</a></li>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Jan 25, 2016</a></li>
                            </ul>
                            <div class="text">
                                <p>Great explorer of the truth, the master seds builder of human happiness. No one rejects, dislikes, rationally encounter.</p>
                                <a class="readmore" href="news-single.html">Read More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single blog item-->
            </div>
        </div>
    </section>
    <!--End latest blog area-->

    <!--Start Brand area-->
    <section class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand">
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/1.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/2.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/3.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/4.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="#"><img src="images/brand/5.png" alt="Awesome Brand Image"></a>
                        </div>
                        <!--End single item-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand area-->
@endsection

@section('script')
@endsection

@section('style')
@endsection
