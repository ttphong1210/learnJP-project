@extends('frontend.app')
@section('content')
<!-- <link rel="" type="" href="{{asset('css/courses.css')}}"> -->

<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/tieng-nhat.jpeg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Khoá học </h1>
                        <h2>Khoá học mọi cấp bậc cho tất cả mọi người bởi <a href="{{asset('home')}}" target="_blank"> LearnJP.com</a></h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="main-courses" class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="padding: 5em 0;">
                <div class="title-block text-center">
                    <h2> Chọn khoá học tiếng Nhật phù hợp</h2>
                    <p>Nếu là doanh nghiệp hoặc mua khoá học theo nhóm vui lòng <a style="color: black;" href="">liên hệ</a> sẽ có ưu đãi dành riêng cho bạn.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="list-cost-courses d-flex align-items-center justify-content-center flex-wrap">
                    <div class="item-cost">
                        <div class="title-item d-flex align-items-center">
                            <h3 class="name">N5</h3>
                            <h4 class="level">Sơ cấp</h4>
                        </div>
                        <div class="dot-border d-flex justify-content-between"><span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span></div>
                        <div class="cost-day text-center">
                            <h3 class="cost-vnd">790.000<span></span></h3>
                            <h4 class="cost-jpy"><i style="padding-right: 5px;" aria-hidden="true" class="fa fa-jpy"></i>3.950</h4>
                            <!---->
                            <!---->
                            <h5 class="day-total">120 ngày</h5>
                        </div>
                        <div class="btn-nav text-center"><a href="/study-route/5" class="btn-view" title="Học tiếng Nhật N5">Chi tiết</a></div>
                    </div>
                    <!---->
                    <div class="item-cost">
                        <div class="title-item d-flex align-items-center">
                            <h3 class="name">N4</h3>
                            <h4 class="level">Sơ cấp</h4>
                        </div>
                        <div class="dot-border d-flex justify-content-between"><span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span></div>
                        <div class="cost-day text-center">
                            <h3 class="cost-vnd">890.000<span></span></h3>
                            <h4 class="cost-jpy"><i style="padding-right: 5px;" aria-hidden="true" class="fa fa-jpy"></i>4.450</h4>
                            <!---->
                            <!---->
                            <h5 class="day-total">120 ngày</h5>
                        </div>
                        <div class="btn-nav text-center"><a href="/study-route/4" class="btn-view" title="Học tiếng Nhật N4">Chi tiết</a></div>
                    </div>
                    <!---->
                    <div class="item-cost">
                        <div class="title-item d-flex align-items-center">
                            <h3 class="name">N3</h3>
                            <h4 class="level">Trung cấp</h4>
                        </div>
                        <div class="dot-border d-flex justify-content-between"><span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span></div>
                        <div class="cost-day text-center">
                            <h3 class="cost-vnd">1.190.000<span></span></h3>
                            <h4 class="cost-jpy"><i style="padding-right: 5px;" aria-hidden="true" class="fa fa-jpy"></i>5.950</h4>
                            <!---->
                            <!---->
                            <h5 class="day-total">150 ngày</h5>
                        </div>
                        <div class="btn-nav text-center"><a href="/study-route/1101" class="btn-view" title="Học tiếng Nhật N3">Chi tiết</a></div>
                    </div>
                    <div class="item-cost">
                        <div class="title-item d-flex align-items-center">
                            <h3 class="name">N2</h3>
                            <h4 class="level">Nâng cao</h4>
                        </div>
                        <div class="dot-border d-flex justify-content-between"><span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span></div>
                        <div class="cost-day text-center">
                            <h3 class="cost-vnd">1.590.000<span></span></h3>
                            <h4 class="cost-jpy"><i style="padding-right: 5px;" aria-hidden="true" class="fa fa-jpy"></i>7.950</h4>
                            <!---->
                            <!---->
                            <h5 class="day-total">180 ngày</h5>
                        </div>
                        <div class="btn-nav text-center"><a href="/study-route/2" class="btn-view" title="Học tiếng Nhật N2">Chi tiết</a></div>
                    </div>
                    <div class="item-cost">
                        <div class="title-item d-flex align-items-center">
                            <h3 class="name">N1</h3>
                            <h4 class="level">Chuyên gia</h4>
                        </div>
                        <div class="dot-border d-flex justify-content-between"><span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span> <span class="dot"></span></div>
                        <div class="cost-day text-center">
                            <h3 class="cost-vnd">2.290.000<span></span></h3>
                            <h4 class="cost-jpy"><i style="padding-right: 5px;" aria-hidden="true" class="fa fa-jpy"></i>11.450</h4>
                            <!---->
                            <!---->
                            <h5 class="day-total">200 ngày</h5>
                        </div>
                        <div class="btn-nav text-center"><a href="/study-route/1" class="btn-view" title="Học tiếng Nhật N1">Chi tiết</a></div>
                    </div>
                    <!-- <div  id="box-combo" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div  class="title-block-hp text-center">
                            <h2  class="name-title">Khóa học tiếng Nhật Combo</h2>
                            <div  class="img-icon"><img  src="img-fix/img-icon-1.png" alt="Dekiru - Học tiếng Nhật online, khóa học tiếng Nhật online"></div>
                            <p  class="group-buy">Mua ngay combo để được hưởng ưu đãi tốt nhất!</p>
                        </div>
                    </div> -->
                    <!-- <div  class="container">
                        <div  class="block-frame-course"><a  href="/study-route/999" class="">
                                <div  class="course-content__flex">
                                    <p  class="txt-course-bold">Khóa học VIP</p>
                                    <div  class="content-statistics--flex">
                                        <div  class="price br-right"><strike  class="price-old">5.290.000đ</strike>
                                            <p  class="price-money">999.000đ</p>
                                        </div>
                                        <p  class="txt-encourage br-right">Học thoải mái <span  class="txt-fs">N5 đến N1</span></p>
                                        <p  class="txt-encourage mr-auto-mb">Học sinh<span  class="txt-fs">10.000+</span></p>
                                    </div>
                                </div>
                            </a></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div id="fh5co-started">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Đăng kí học thử miễn phí</h2>
                    <p>Trải nghiệm phương pháp học hoàn toàn mới với hàng trăm bài học được thiết kế khoa học, trực quan, giúp học viên hiểu nhanh và nắm chắc kiến thức...</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <p><a href="#" class="btn btn-default btn-lg"> Tham gia khoá học thử </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection