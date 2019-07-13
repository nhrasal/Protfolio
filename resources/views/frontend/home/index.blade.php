@extends('frontend.layouts.app')
@section('content')
    <!-- Start Personal Area -->
    <section id="personal-area" style="background-image:url('{{asset('frontend/images/personal/personal-bg.jpg')}}')">
        <div class="personal-main">
            <div class="personal-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- Personal Text -->
                            <div class="personal-text">
                                <div class="my-info">
                                    <h1>My Name Is Meheraj</h1>
                                    <h2 class="cd-headline clip is-full-width">
                                        A Proffesional
                                        <span class="cd-words-wrapper">
											   <b class="is-visible">UI/UX DESIGNER</b>
											   <b>Web Developer</b>
											   <b>Creative Director</b>
											</span>
                                    </h2>
                                    <div class="button">
                                        <a href="#contact" class="btn primary shine"><i class="fa fa-rocket"></i>Hire Me</a>
                                        <a href="#portfolio" class="btn shine"><i class="fa fa-briefcase"></i>My Project</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Personal Text -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Personal Area -->

    <!-- Start About Me -->
    <section id="about-me" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 fix">
                    <!-- About Tab -->
                    <div class="tabs-main">
                        <!-- Tab Menu -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><span class="tooltips">About Me</span><a href="#welcome" role="tab" data-toggle="tab"><i class="fa fa-user"></i></a></li>
                            <li role="presentation"><span class="tooltips">My Skill</span><a href="#skill" role="tab"  data-toggle="tab"><i class="fa fa-rocket"></i></a></li>
                            <li role="presentation"><span class="tooltips">why Me</span><a href="#why" role="tab"  data-toggle="tab"><i class="fa fa-question"></i></a></li>
                            <li role="presentation"><span class="tooltips">My Vision</span><a href="#vision" role="tab"  data-toggle="tab"><i class="fa fa-graduation-cap"></i></a></li>
                        </ul>
                        <!--/ End Tab Menu -->
                        <div class="tab-content">
                            <!-- Single Tab -->
                            <div role="tabpanel" class="tab-pane fade in active" id="welcome">
                                <div class="about-text">
                                    <h2 class="tab-title">About Me</h2>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <!-- About Image -->
                                            <div class="single-image">
                                                <img src="{{asset('frontend/images/personal/my-image.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <!-- End About Image -->
                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                            <div class="content">
                                                <p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat. Phasellus lobortis erat vitae fringilla malesuada. Fusce semper purus suscipit ultricies tincidunt. Nulla eget turpis ac leo euismod pharetra at nec diam. Etiam id purus lacus. Suspendisse ligula nulla, cursus non lacinia tincidunt, elementum eu sapien. Morbi mollis congue fringilla. Vivamus ac sagittis nunc.</p>
                                                <p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam. Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat volutpat. Phasellus lobortis erat vitae fringilla malesuada. Fusce semper</p>
                                            </div>
                                            <div class="social">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a><li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a><li>
                                                    <li><a href="#"><i class="fa fa-google-plus"></i></a><li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a><li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Single Tab -->
                            <div role="tabpanel" class="tab-pane fade" id="skill">
                                <h2 class="tab-title">My Skill</h2>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Web Design</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"><span>55%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Web Development</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100" style="width: 79%;"><span>79%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>PSD To Html</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span>80%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>UI/UX Design</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"><span>95%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>HTML5/CSS3</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span>70%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Wordpress</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"><span>65%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Web Design</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"><span>55%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Single Skill -->
                                        <div class="single-skill">
                                            <div class="skill-info">
                                                <h4>Web Development</h4>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100" style="width: 79%;"><span>79%</span></div>
                                            </div>
                                        </div>
                                        <!--/ End Single Skill -->
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Single Tab -->
                            <div role="tabpanel" class="tab-pane fade" id="why">
                                <div class="about-text">
                                    <h2 class="tab-title">Why Me?</h2>
                                    <div class="content">
                                        <p>i'm a responsive web developer. ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <p>creative web developer ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                            <!-- Single Tab -->
                            <div role="tabpanel" class="tab-pane fade" id="vision">
                                <div class="about-text">
                                    <h2 class="tab-title">My Vision</h2>
                                    <div class="content">
                                        <p>my visition is ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                        <p>also i've perfect ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Tab -->
                        </div>
                    </div>
                    <!--/ End About Tab -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End About Me -->

    <!-- Start Service -->
    <section id="my-service" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1><span>My</span> Service<i class="fa fa-rocket"></i></h1>
                        <p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                    <!-- Single Service -->
                    <div class="single-service active">
                        <i class="fa fa-html5"></i>
                        <h2>Web Design</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-code"></i>
                        <h2>Web Development</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-mobile"></i>
                        <h2>Responsive Design</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
                    <!-- Single Service -->
                    <div class="single-service">
                        <i class="fa fa-pencil-square-o"></i>
                        <h2>Customize Website</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Service -->

    <!-- Start portfolio -->
    <section id="portfolio" class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1><span>My</span> Portfolio<i class="fa fa-briefcase"></i></h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- portfolio Nav -->
                    <div class="portfolio-nav">
                        <ul>
                            <li class="active" data-filter="*"><span>06</span><i class="fa fa-tasks"></i>All Works</li>
                            <li data-filter=".development"><span>03</span><i class="fa fa-pencil"></i>Web Development</li>
                            <li data-filter=".design"><span>02</span><i class="fa fa-paint-brush"></i>Web Design</li>
                            <li data-filter=".html5"><span>03</span><i class="fa fa-html5"></i>HTML5</li>
                            <li data-filter=".wordpress"><span>02</span><i class="fa fa-wordpress"></i>Wordpress</li>
                        </ul>
                    </div>
                    <!--/ End portfolio Nav -->
                </div>
            </div>

            <div class="portfolio-inner">
                <div class="row stylex">
                    <div class="isotop-active">
                        <!-- Single portfolio -->
                        <div class="mix development html5 col-md-4 col-sm-6 col-xs-12 col-fix ">
                            <div class="portfolio-single">
                                <div class="portfolio-head">
                                    <img src="{{asset('images/portfolio/portfolio1.jpg')}}" alt=""/>
                                </div>
                                <div class="portfolio-hover">
                                    <h4><span>Web Design</span><a href="#">Project Name Here</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum tincidunt vulputate. </p>
                                    <div class="button">
                                        <a data-fancybox="gallery" href="images/portfolio/portfolio1.jpg"><i class="fa fa-search"></i></a>
                                        <a href="portfolio-single.html" class="primary"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End portfolio -->
                        <!-- Single portfolio -->
                        <div class="mix design development col-md-4 col-sm-6 col-xs-12 col-fix">
                            <div class="portfolio-single">
                                <div class="portfolio-head">
                                    <img src="{{asset('images/portfolio/portfolio2.jpg')}}" alt=""/>
                                </div>
                                <div class="portfolio-hover">
                                    <h4><span>Html Website</span><a href="#">Project Name Here</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum tincidunt vulputate. </p>
                                    <div class="button">
                                        <a data-fancybox="gallery" href="images/portfolio/portfolio2.jpg"><i class="fa fa-search"></i></a>
                                        <a href="portfolio-single.html" class="primary"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End portfolio -->

                        <!-- Single portfolio -->
                        <div class="mix wordpress html5 col-md-4 col-sm-6 col-xs-12 col-fix">
                            <div class="portfolio-single">
                                <div class="portfolio-head">
                                    <img src="{{asset('frontend/images/portfolio/portfolio3.jpg')}}" alt=""/>
                                </div>
                                <div class="portfolio-hover">
                                    <h4><span>Wordpress</span><a href="#">Project Name Here</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum tincidunt vulputate. </p>
                                    <div class="button">
                                        <a data-fancybox="gallery" href="images/portfolio/portfolio3.jpg"><i class="fa fa-search"></i></a>
                                        <a href="portfolio-single.html" class="primary"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End portfolio -->
                        <!-- Single portfolio -->
                        <div class="mix wordpress col-md-4 col-sm-6 col-xs-12 col-fix">
                            <div class="portfolio-single">
                                <div class="portfolio-head">
                                    <img src="{{asset('frontend/images/portfolio/portfolio4.jpg')}}" alt=""/>
                                </div>
                                <div class="portfolio-hover">
                                    <h4><span>Wordpress</span><a href="#">Project Name Here</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum tincidunt vulputate. </p>
                                    <div class="button">
                                        <a data-fancybox="gallery" href="images/portfolio/portfolio4.jpg"><i class="fa fa-search"></i></a>
                                        <a href="portfolio-single.html" class="primary"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End portfolio -->
                        <!-- Single portfolio -->
                        <div class="mix design html5 col-md-4 col-sm-6 col-xs-12 col-fix">
                            <div class="portfolio-single">
                                <div class="portfolio-head">
                                    <img src="{{asset('frontend/images/portfolio/portfolio5.jpg')}}" alt=""/>
                                </div>
                                <div class="portfolio-hover">
                                    <h4><span>HTML5</span><a href="#">Project Name Here</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum tincidunt vulputate. </p>
                                    <div class="button">
                                        <a data-fancybox="gallery" href="images/portfolio/portfolio5.jpg"><i class="fa fa-search"></i></a>
                                        <a href="portfolio-single.html" class="primary"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End portfolio -->
                        <!-- Single portfolio -->
                        <div class="mix development col-md-4 col-sm-6 col-xs-12 col-fix">
                            <div class="portfolio-single">
                                <div class="portfolio-head">
                                    <img src="{{asset('frontend/images/portfolio/portfolio6.jpg')}}" alt=""/>
                                </div>
                                <div class="portfolio-hover">
                                    <h4><span>Web Design</span><a href="#">Project Name</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum tincidunt vulputate. </p>
                                    <div class="button">
                                        <a data-fancybox="gallery" href="images/portfolio/portfolio6.jpg"><i class="fa fa-search"></i></a>
                                        <a href="portfolio-single.html" class="primary"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End portfolio -->
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Button -->
                <div class="button">
                    <a href="portfolio-full-width.html" class="btn">More Portfolio<i class="fa fa-angle-double-right"></i></a>
                </div>
                <!-- End Button -->
            </div>
        </div>
    </section>
    <!--/ End portfolio -->

    <!-- Start Count Down -->
    <section id="countdown" class="section" data-stellar-background-ratio="0.3" style="background-image: url('{{asset('frontend/images/countdown.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="fa fa-tasks"></i>
                        <h2><span class="count">50</span>K</h2>
                        <p>Projects Finished</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="fa fa-users"></i>
                        <h2><span class="count">650</span>K</h2>
                        <p>Happy Clients</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.8s">
                    <!-- Single Count -->
                    <div class="single-count active">
                        <i class="fa fa-clock-o"></i>
                        <h2><span class="count">500</span>K</h2>
                        <p>Hours Worked</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="1s">
                    <!-- Single Count -->
                    <div class="single-count">
                        <i class="fa fa-coffee"></i>
                        <h2><span class="count">100</span>K</h2>
                        <p>Cups of Coffee</p>
                    </div>
                    <!--/ End Single Count -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Count Down -->

    <!-- Start Timeline-->
    <section id="my-timeline" class="section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1><span>Work & </span>Education<i class="fa fa-history"></i></h1>
                        <p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="timeline">
                        <div class="timeline-inner">
                            <!-- Single Timeline -->
                            <div class="single-main wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="single-timeline">
                                    <div class="single-content">
                                        <div class="date">
                                            <p>Jan<span>10</span></p>
                                        </div>
                                        <h2>High School Degree</h2>
                                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam efficitur ultricies elit, eget ullamcorper enim scelerisque sit amet. Pellentesque blandit venenatis rhoncus.<p>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Timeline -->
                            <!-- Single Timeline -->
                            <div class="single-main wow fadeInRight" data-wow-delay="0.6s">
                                <div class="single-timeline">
                                    <div class="single-content">
                                        <div class="date">
                                            <p>Dec<span>12</span></p>
                                        </div>
                                        <h2>Start Web Design</h2>
                                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam efficitur ultricies elit, eget ullamcorper enim scelerisque sit amet. Pellentesque blandit venenatis rhoncus.<p>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Timeline -->
                            <!-- Single Timeline -->
                            <div class="single-main wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="single-timeline">
                                    <div class="single-content">
                                        <div class="date">
                                            <p>Jan<span>13</span></p>
                                        </div>
                                        <h2>Join University</h2>
                                        <p>Starting College DayInterdum et malesuada fames ac ante ipsum primis in faucibus. Etiam efficitur ultricies elit, eget ullamcorper enim scelerisque sit amet. Pellentesque blandit venenatis rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Timeline -->
                            <!-- Single Timeline -->
                            <div class="single-main wow fadeInRight" data-wow-delay="0.6s">
                                <div class="single-timeline">
                                    <div class="single-content">
                                        <div class="date">
                                            <p>Feb<span>16</span></p>
                                        </div>
                                        <h2>Start Web Developments</h2>
                                        <p>Learn Web Developments Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam efficitur ultricies elit, eget ullamcorper enim scelerisque sit amet. Pellentesque blandit venenatis rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Timeline -->
                            <!-- Single Timeline -->
                            <div class="single-main wow fadeInLeft" data-wow-delay="0.4s">
                                <div class="single-timeline">
                                    <div class="single-content">
                                        <div class="date">
                                            <p>Jan<span>17</span></p>
                                        </div>
                                        <h2>Complete Graduations</h2>
                                        <p>Just Receive my Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam efficitur ultricies elit, eget ullamcorper enim scelerisque sit amet. Pellentesque blandit venenatis rhoncus.</p>
                                    </div>
                                </div>
                            </div>
                            <!--/ End Single Timeline -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Timeline -->

    <!-- Start Pricing Table -->
    <section id="pricing" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1><span>Service</span> Price<i class="fa fa-history"></i></h1>
                        <p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Table -->
                <div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h2 class="title">Basic</h2>
                            <div class="price">
                                <p class="amount">$<span>50</span>/Year</p>
                            </div>
                            <i class="fa fa-gift"></i>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li>1 Business website</li>
                            <li>24/7 Technic Support</li>
                            <li>User Live</li>
                            <li>Unlimited Email Account</li>
                            <li class="cross">Disk Space</li>
                        </ul>
                        <!-- Table Bottom -->
                        <div class="table-bottom">
                            <a class="btn shine" href="#">Buy Now<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
                    <div class="single-table active">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h2 class="title">Standard</h2>
                            <div class="price">
                                <p class="amount">$<span>80</span>/Year</p>
                            </div>
                            <i class="fa fa-gift"></i>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li>2 Business website</li>
                            <li>24/7 Technic Support</li>
                            <li>User Live</li>
                            <li>Unlimited Email Account</li>
                            <li class="cross">Disk Space</li>
                        </ul>
                        <!-- Table Bottom -->
                        <div class="table-bottom">
                            <a class="btn shine" href="#">Buy Now<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.8s">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h2 class="title">Premium</h2>
                            <div class="price">
                                <p class="amount">$<span>99</span>/Year</p>
                            </div>
                            <i class="fa fa-gift"></i>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li>5 Business website</li>
                            <li>24/7 Technic Support</li>
                            <li>User Live</li>
                            <li>Unlimited Email Account</li>
                            <li class="cross">Disk Space</li>
                        </ul>
                        <!-- Table Bottom -->
                        <div class="table-bottom">
                            <a class="btn shine" href="#">Buy Now<i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->

    <!-- Start Testimonials -->
    <section id="testimonials" class="section" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1><span>Clients</span> Testimonials<i class="fa fa-star"></i></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                <i class="fa fa-quote-left"></i>
                                <p>Vestibulum scelerisque, turpis a imperdiet consectetur, est turpis sollicitudin lorem, ac scelerisque libero velit nec odio. Aliquam nunc eros, ultricies non consequat at, porttitor at ante. Etiam lorem erat, vulputate nec pellentesque ut, tempor vel nisi. Suspendisse porta sem vel mauris semper consequat. Proin id aliquet felis. Aliquam justo augue, aliquet id vulputate ut, ultricies non orci.</p>
                            </div>
                            <div class="testimonial-info">
                                <img src="{{asset('frontend/images/author.jpg')}}" class="img-circle" alt="">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h6>Shakil Hossain<span>Web Developer</span></h6>
                            </div>
                        </div>
                        <!--/ End Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                <i class="fa fa-quote-left"></i>
                                <p>Vestibulum scelerisque, turpis a imperdiet consectetur, est turpis sollicitudin lorem, ac scelerisque libero velit nec odio. Aliquam nunc eros, ultricies non consequat at, porttitor at ante. Etiam lorem erat, vulputate nec pellentesque ut, tempor vel nisi. Suspendisse porta sem vel mauris semper consequat. Proin id aliquet felis. Aliquam justo augue, aliquet id vulputate ut, ultricies non orci.</p>
                            </div>
                            <div class="testimonial-info">
                                <img src="{{asset('frontend/images/author2.jpg')}}" class="img-circle" alt="">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <h6>Rimon Hossain<span>Web Designer</span></h6>
                            </div>
                        </div>
                        <!--/ End Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Testimonials -->

    <!-- Start Blog -->
    <section id="blog" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1><span>Latest</span> Blog<i class="fa fa-pencil"></i></h1>
                        <p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-carousel">
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-head">
                                <img src="{{asset('frontend/images/blog1.jpg')}}" alt="" class="img-responsive">
                                <div class="blog-link">
                                    <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="date">
                                    <div class="day"><span>20</span>Jan</div>
                                    <div class="year">2017</div>
                                </div>
                                <h2><a href="#">Creative Portfolio template</a></h2>
                                <div class="meta">
                                    <span><i class="fa fa-user"></i>By admin</span>
                                    <span><i class="fa fa-comments"></i>45 comments</span>
                                    <span><i class="fa fa-eye"></i>5k views</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-head">
                                <img src="{{asset('frontend/images/blog2.jpg')}}" alt="" class="img-responsive">
                                <div class="blog-link">
                                    <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="date">
                                    <div class="day"><span>28</span> Jun</div>
                                    <div class="year">2017</div>
                                </div>
                                <h2><a href="blog-single.html">Creative Onepage template</a></h2>
                                <div class="meta">
                                    <span><i class="fa fa-user"></i>By admin</span>
                                    <span><i class="fa fa-comments"></i>15 comments</span>
                                    <span><i class="fa fa-eye"></i>1k views</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-head">
                                <img src="{{asset('frontend/images/blog3.jpg')}}" alt="" class="img-responsive">
                                <div class="blog-link">
                                    <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="date">
                                    <div class="day"><span>1</span> July</div>
                                    <div class="year">2017</div>
                                </div>
                                <h2><a href="blog-single.html">Onepage Portfolio Website</a></h2>
                                <div class="meta">
                                    <span><i class="fa fa-user"></i>By admin</span>
                                    <span><i class="fa fa-comments"></i>450 comments</span>
                                    <span><i class="fa fa-eye"></i>33k views</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-head">
                                <img src="{{asset('frontend/images/blog1.jpg')}}" alt="" class="img-responsive">
                                <div class="blog-link">
                                    <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="date">
                                    <div class="day"><span>20</span>Jan</div>
                                    <div class="year">2017</div>
                                </div>
                                <h2><a href="blog-single.html">Creative Portfolio template</a></h2>
                                <div class="meta">
                                    <span><i class="fa fa-user"></i>By admin</span>
                                    <span><i class="fa fa-comments"></i>45 comments</span>
                                    <span><i class="fa fa-eye"></i>5k views</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-head">
                                <img src="{{asset('frontend/images/blog2.jpg')}}" alt="" class="img-responsive">
                                <div class="blog-link">
                                    <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="date">
                                    <div class="day"><span>28</span> Jun</div>
                                    <div class="year">2017</div>
                                </div>
                                <h2><a href="blog-single.html">Creative Onepage template</a></h2>
                                <div class="meta">
                                    <span><i class="fa fa-user"></i>By admin</span>
                                    <span><i class="fa fa-comments"></i>15 comments</span>
                                    <span><i class="fa fa-eye"></i>1k views</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                        <!-- Single Blog -->
                        <div class="single-blog">
                            <div class="blog-head">
                                <img src="{{asset('frontend/images/blog3.jpg')}}" alt="" class="img-responsive">
                                <div class="blog-link">
                                    <a href="blog-single.html"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="blog-info">
                                <div class="date">
                                    <div class="day"><span>1</span> July</div>
                                    <div class="year">2017</div>
                                </div>
                                <h2><a href="blog-single.html">Onepage Portfolio Website</a></h2>
                                <div class="meta">
                                    <span><i class="fa fa-user"></i>By admin</span>
                                    <span><i class="fa fa-comments"></i>450 comments</span>
                                    <span><i class="fa fa-eye"></i>33k views</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum available. Donec libero ante, tempus vitae lacus a, sollicitudin ultrices augue. Sed bibendum ligula lectus, eget malesuada mauris.  </p>
                                <a href="blog-single.html" class="btn">Read more<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <!--/ End Single Blog -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blog -->

    <!-- Start Call To Action -->
    <section id="call-action" class="section wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-action-main">
                        <h2>I'm Ready for your next project</h2>
                        <p>Nam eleifend, turpis ac laoreet tincidunt, arcu purus ultricies nisl, quis molestie nibh lacus et dui. Nunc efficitur turpis lorem, bibendum dictum libero ornare a. Proin quis metus massa. Aliquam erat volutpat. Nullam eu convallis arcu, sit amet pulvinar odio. Nulla facilisi. Nullam ac nibh ac lectus aliquet aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam sed ipsum non tortor posuere rutrum. </p>
                        <div class="button">
                            <a href="#" class="btn"><i class="fa fa-address-book"></i>Hire ME Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call To Action -->

    <!-- Start Contact -->
    <section id="contact" class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h1><span>Contact</span> Me<i class="fa fa-star"></i></h1>
                        <p>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Contact Form -->
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.4s">
                    <form class="form" method="post" action="https://codeglim.com/templates/meheraj/mail/mail.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Full Name" required="required">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" rows="6" placeholder="Type Your Message Here" ></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group button">
                                    <button type="submit" class="button primary"><i class="fa fa-send"></i>Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--/ End Contact Form -->
                <!-- Contact Address -->
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.8s">
                    <div class="contact">
                        <!-- Single Address -->
                        <div class="single-address">
                            <i class="fa fa-phone"></i>
                            <div class="title">
                                <h4>My Phone</h4>
                                <p>+1-202-555-0100,<br>+441632960431</p>
                            </div>
                        </div>
                        <!--/ End Single Address -->
                        <!-- Single Address -->
                        <div class="single-address">
                            <i class="fa fa-envelope"></i>
                            <div class="title">
                                <h4>Email Address</h4>
                                <p>contact@muntasir.com,<br>info@muntasir.com</p>
                            </div>
                        </div>
                        <!--/ End Single Address -->
                        <!-- Single Address -->
                        <div class="single-address">
                            <i class="fa fa-map"></i>
                            <div class="title">
                                <h4>My Location</h4>
                                <p>24/8 Dokkhin Khan, <br>Uttara Dhaka Bangladesh</p>
                            </div>
                        </div>
                        <!--/ End Single Address -->
                    </div>
                </div>
                <!--/ End Contact Address -->
            </div>
        </div>
    </section>
    <!--/ End Contact -->

    <!-- Start Clients -->
    <div id="clients" class="section" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="clients-slider">
                        <!-- Single Clients -->
                        <div class="single-clients">
                            <a href="#" target="_blank"><img src="{{asset('frontend/images/clients-1.png')}}" alt="#"></a>
                        </div>
                        <!--/ End Single Clients -->
                        <!-- Single Clients -->
                        <div class="single-clients active">
                            <a href="#" target="_blank"><img src="{{asset('frontend/images/clients-2.png')}}" alt="#"></a>
                        </div>
                        <!--/ End Single Clients -->
                        <!-- Single Clients -->
                        <div class="single-clients">
                            <a href="#" target="_blank"><img src="{{asset('frontend/images/clients-3.png')}}" alt="#"></a>
                        </div>
                        <!--/ End Single Clients -->
                        <!-- Single Clients -->
                        <div class="single-clients">
                            <a href="#" target="_blank"><img src="{{asset('frontend/images/clients-4.png')}}" alt="#"></a>
                        </div>
                        <!--/ End Single Clients -->
                        <!-- Single Clients -->
                        <div class="single-clients">
                            <a href="#" target="_blank"><img src="{{asset('frontend/images/clients-5.png')}}" alt="#"></a>
                        </div>
                        <!--/ End Single Clients -->
                        <!-- Single Clients -->
                        <div class="single-clients">
                            <a href="#" target="_blank"><img src="{{asset('frontend/images/clients-6.png')}}" alt="#"></a>
                        </div>
                        <!--/ End Single Clients -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Clients -->

    <!-- Footer Top -->
    <section id="footer-top" class="section">
        <div class="container">
            <div class="row">
                <!-- Single Widget -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="newslatter">
                        <h2><span>Signup</span>Newslatter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio tenetur, dolores aperiam, quasi perferendis nemo mollitia labore molestias modi consequatur expedita ad voluptates dolor ex. Impedit quo temporibus, molestiae fugit?</p>
                    </div>
                    <form class="news-form">
                        <input type="email" placeholder="type your email">
                        <button type="submit" class="button primary"><i class="fa fa-paper-plane"></i></button>
                    </form>
                </div>
                <!--/ End Single Widget -->
            </div>
        </div>
    </section>
    <!--/ End footer Top -->
@endsection
