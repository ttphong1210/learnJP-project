@extends('frontend.app')
@section('content')
<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/tieng-nhat.jpeg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div class="display-t">
                    <div class="display-tc animate-box" data-animate-effect="fadeIn">
                        <h1>Trang Web dạy & học tiếng Nhật </h1>
                        <p>
                            <a class="btn btn-primary btn-lg btn-learn" href="{{asset('courses')}}">Tham gia khoá học</a>
                            <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i>Học thử miễn phí</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="fh5co-explore" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Tham gia khoá học</h2>
                <p>Khoá học trực tuyến tích hợp đầy đủ thông tin, kiến thức và những kỹ năng để giúp các bạn chinh phục tiếng Nhật. </p>
            </div>
        </div>
    </div>
    <div class="fh5co-explore fh5co-explore1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-push-5 animate-box">
                    <img class="img-responsive" src="{{asset('images/work_1.png')}}" alt="work">
                </div>
                <div class="col-md-4 col-md-pull-8 animate-box">
                    <div class="mt">
                        <h3>Hệ thống kiến thức toàn diện</h3>
                        <p>Với danh sách các bài học phong phú, cung cấp cho bạn một hệ thống kiến thức tiếng Nhật đầy đủ và toàn diện nhất: từ vựng, nghe hiểu, kanji hay các bài kiểm tra tiếng Nhật.</p>
                        <!-- <ul class="list-nav">
								<li><i class="icon-check2"></i>Far far away, behind the word</li>
								<li><i class="icon-check2"></i>There live the blind texts</li>
								<li><i class="icon-check2"></i>Separated they live in bookmarksgrove</li>
							</ul> -->
                        <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fh5co-explore fh5co-explore1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-pull-1 animate-box">
                    <img class="img-responsive" src="{{asset('images/tieng-nhat.jpeg')}}" alt="work">
                </div>
                <div class="col-md-4 animate-box">
                    <div class="mt">
                        <h3>Học tiếng Nhật mọi lúc mọi nơi</h3>
                        <p>Bằng việc có tài khoản học tập, bạn đã có thể chủ động thời gian học tập của bản thân mình. Đặc biệt phù hợp với các bạn bận rộn, ít thời gian.</p>
                        <!-- <ul class="list-nav">
                                    <li><i class="icon-check2"></i>Far far away, behind the word</li>
                                    <li><i class="icon-check2"></i>There live the blind texts</li>
                                    <li><i class="icon-check2"></i>Separated they live in bookmarksgrove</li>
                                </ul> -->
                        <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
                    </div>
                    <!-- <div>
								<h4><i class="icon-user"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
							</div>
							<div>
								<h4><i class="icon-video2"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
							<div>
								<h4><i class="icon-shield"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
							</div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="fh5co-explore fh5co-explore1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-push-5 animate-box">
                    <img class="img-responsive" src="{{asset('images/tieng-nhat.jpeg')}}" alt="work">
                </div>
                <div class="col-md-4 col-md-pull-8 animate-box">
                    <div class="mt">
                        <h3>Phương pháp học tập thú vị</h3>
                        <p>Chương trình học chúng tôi cung cấp đầy đủ các kiến thức về tiếng Nhật thông qua các hoạt động tương tác, trò chơi, hoạt động hằng ngày. Sẽ giúp bạn cảm thấy việc ghi nhớ kiến thức là việc cực kỳ thú vị và đơn giản.</p>
                        <!-- <ul class="list-nav">
								<li><i class="icon-check2"></i>Far far away, behind the word</li>
								<li><i class="icon-check2"></i>There live the blind texts</li>
								<li><i class="icon-check2"></i>Separated they live in bookmarksgrove</li>
							</ul> -->
                        <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="fh5co-project">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2> Chọn khoá học tiếng Nhật phù hợp</h2>
                <p>Nếu là doanh nghiệp hoặc mua khoá học theo nhóm vui lòng <a style="color: black;" href="">liên hệ</a> sẽ có ưu đãi dành riêng cho bạn.</p>
            </div>
        </div>
    </div>
    <div class="container proj-bottom">
        <div class="row">
            <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="#"><img src="{{asset('images/n5.png')}}" alt="" class="img-responsive">
                    <h3>N5 Sơ cấp </h3>
                    <span>View Course</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="#"><img src="{{asset('images/n4.jpeg')}}" alt="" class="img-responsive">
                    <h3>N4 Sơ cấp</h3>
                    <span>View Course</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="#"><img src="{{asset('images/n3.png')}}" alt="" class="img-responsive">
                    <h3>N3 Trung cấp</h3>
                    <span>View Course</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="#"><img src="{{asset('images/n2.jpeg')}}" alt="" class="img-responsive">
                    <h3>N2 Nâng cao</h3>
                    <span>View Course</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="#"><img src="{{asset('images/n1.jpeg')}}" alt="" class="img-responsive">
                    <h3>N1 Chuyên gia</h3>
                    <span>View Course</span>
                </a>
            </div>
            <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
                <a href="#"><img src="{{asset('images/combo.jpeg')}}" alt="" class="img-responsive">
                    <h3>Combo Khoá học VIP</h3>
                    <span>View Course</span>
                </a>
            </div>
        </div>
    </div>
    <!-- <div class="container">
			<div class="row">
				<div class="features">
					<div class="col-md-4 animate-box">
						<h4>We have coolest features of this course</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>Great teachers that we have</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
					</div>
					<div class="col-md-4 animate-box">
						<h4>Steps by steps turorial session</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
					</div>
				</div>
				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="#">Create A Free Course</a></p>
				</div>
			</div>
		</div> -->
</div>

<div id="fh5co-steps">
    <div class="container">
        <!-- <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Start A Course</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div> -->

        <!-- <div class="row bs-wizard animate-box" style="border-bottom:0;">

            <div class="col-xs-3 bs-wizard-step complete">
                <div class="text-center bs-wizard-stepnum">
                    <h4>Step 1</h4>
                </div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">
                    <p>Create A Free Course</p>
                </div>
            </div>

            <div class="col-xs-3 bs-wizard-step active">
                <div class="text-center bs-wizard-stepnum">
                    <h4>Step 2</h4>
                </div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">
                    <p>Upload Content</p>
                </div>
            </div>

            <div class="col-xs-3 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">
                    <h4>Step 3</h4>
                </div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">
                    <p>Make Your Course Beautiful</p>
                </div>
            </div>

            <div class="col-xs-3 bs-wizard-step disabled">
                <div class="text-center bs-wizard-stepnum">
                    <h4>Step 4</h4>
                </div>
                <div class="progress">
                    <div class="progress-bar"></div>
                </div>
                <a href="#" class="bs-wizard-dot"></a>
                <div class="bs-wizard-info text-center">
                    <p>Start Making Money</p>
                </div>
            </div>
        </div> -->
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2> Bắt đầu một khoá học </h2>
                <p>Bắt đầu hành trình hướng tới một cuộc sống tốt đẹp hơn với các khóa học thực tế trực tuyến</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-6 col-sm-12">
                <div class="about-info">
                    <figure>
                        <span><i class="fa fa-users"></i></span>
                        <figcaption>
                            <h3> Giáo viên có chuyên môn cao</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                        </figcaption>
                    </figure>

                    <figure>
                        <span><i class="fa fa-certificate"></i></span>
                        <figcaption>
                            <h3>Chứng chỉ sau khi hoàn thành khoá học</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                        </figcaption>
                    </figure>

                    <figure>
                        <span><i class="fa fa-bar-chart-o"></i></span>
                        <figcaption>
                            <h3> Miễn phí học thử 7 ngày</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-md-offset-1 col-md-4 col-sm-12">
                <div class="entry-form">
                    <form action="#" method="post">
                        <h2>Đăng ký ngay hôm nay</h2>
                        <input type="text" name="full name" class="form-control" placeholder="Tên đầy đủ..." required="">
                        <input type="email" name="" class="form-control" value="" placeholder="Vui lòng nhập email..." required="">
                        <input type="passworl" name="" class="form-control" value="" placeholder="Vui lòng nhập mật khẩu..." required="">

                        <!-- <input type="email" name="email" class="form-control" placeholder="Your email address" required="">
                        <input type="password" name="password" class="form-control" placeholder="Your password" required=""> -->
                        <button class="submit-btn form-control" id="form-submit">Bắt đầu</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="fh5co-testimonial" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2> Cảm nhận của học viên</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth">
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="{{asset('images/avt-user.jpg')}}" alt="user">
                                </figure>
                                <span>Phong <a href="#" class="twitter">Twitter</a></span>
                                <blockquote>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="{{asset('images/avt-user1.jpg')}}" alt="user">
                                </figure>
                                <span>Phong <a href="#" class="twitter">Twitter</a></span>
                                <blockquote>
                                    <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <figure>
                                    <img src="{{asset('images/avt-user2.jpg')}}" alt="user">
                                </figure>
                                <span>Phong <a href="#" class="twitter">Twitter</a></span>
                                <blockquote>
                                    <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2> Bài viết gần đây</h2>
                <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="{{asset('images/project-2.jpeg')}}" alt=""></a>
                    <div class="blog-text">
                        <h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                        <span class="posted_on">Nov. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="{{asset('images/project-3.jpeg')}}" alt=""></a>
                    <div class="blog-text">
                        <h3><a href="" #>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
                        <span class="posted_on">Nov. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#"><img class="img-responsive" src="{{asset('images/project-4.jpeg')}}" alt=""></a>
                    <div class="blog-text">
                        <h3><a href="" #>45 Minimal Workspace Rooms for Web Savvys</a></h3>
                        <span class="posted_on">Nov. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
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
                <p><a href="#" class="btn btn-default btn-lg">Tham gia khoá học thử</a></p>
            </div>
        </div>
    </div>
</div>

@endsection