@extends('layouts.app')

@section('body')
@endsection

@section('content')
    @include('flash_message')
    <!--Start contact v1 area-->
    <section class="contact-v1-area">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Liên hệ với noithatc3</h2>
                <p>Đừng ngại ngần liên hệ với chúng tôi theo những cách dưới đây, noithatc3 sẽ rất hạnh phúc khi được
                    quen biết các bạn. Chúng tôi luôn luôn cố gắng phản hồi sớm nhất có thể.
                </p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-holder">
                        <img src="images/resources/contact.jpg" alt="Awesome Image">
                    </div>
                    <div class="contact-info">
                        <div class="row">
                            <!--Start single item-->
                            <div class="col-md-6">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="flaticon-building"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Địa chỉ:</h5>
                                        <p>{{config('app.address_short')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-md-6">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="flaticon-technology"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Phone:</h5>
                                        <p>{{config('app.phone')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-md-6">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="flaticon-new-email-outline"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Email Address:</h5>
                                        <p>{{config('app.email')}}</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                            <!--Start single item-->
                            <div class="col-md-6">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <span class="flaticon-clock"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Thời gian làm việc:</h5>
                                        <p>24/7 kể cả ngày lễ tết</p>
                                    </div>
                                </div>
                            </div>
                            <!--End single item-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form-v1">
                        <form action="send_mail" id="contact-form" method="post">
                            @csrf
                            <input type="text" name="name" placeholder="Tên*">
                            <input type="text" name="email" placeholder="Email*">
                            <input type="text" name="phone" placeholder="Số ĐT">
                            <textarea name="message" placeholder="Nội dung tin nhắn..."></textarea>
                            <button class="thm-btn bg-cl-1" type="submit">Gửi tin nhắn</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End contact v1 area-->

    <!--Start Google map area-->
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5761.109480374921!2d105.66625008278207!3d21.084886325646327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345668c4ee545f%3A0x67186dc51a932f3a!2zMTk1IFTDonkgU8ahbiwgVFQuIFBow7luZywgxJBhbiBQaMaw4bujbmcsIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1614827387223!5m2!1sen!2s"
        width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!--End Google map area-->
@endsection

@section('script')
@endsection

@section('style')
@endsection
