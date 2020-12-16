@extends('layouts.landing')
@section('content')


        <!-- end of header -->


        <!-- start of hero -->
        <section class="hero-slider hero-style-1">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- 1 -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="https://image.freepik.com/free-photo/rear-view-programmer-working-all-night-long_1098-18697.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>National <br>Inventors Challenge</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>Challenge your mind build real world Systems</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="{{route('home')}}" class="theme-btn">Apply Now</a>
                                    <a href="#" class="theme-btn-s2">Programs</a>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div> <!-- end swiper-slide -->
                    <!-- 2 -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="https://www.unicef.org/innovation/sites/unicef.org.innovation/files/styles/three_fourths/public/UNI279362.jpg?itok=TiXA1zW3">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Collaborate an Create</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>A chance to create and invent for the future</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="{{route('register')}}" class="theme-btn">Create an Account</a>
                                    <a href="{{route('home')}}" class="theme-btn-s2">More about us</a>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->

                    </div>

                    <!-- 3 -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="https://www.unicef.org/sites/default/files/styles/press_release_feature/public/drone.jpg?itok=3xAMZA32">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2 style="color:#fd5f17;">Best Reward for great thoughts</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>
                                        The National Inventors Competition® (NIC) is your opportunity to bring national
                                        attention to your work, gain valuable feedback from our Elite inventors and
                                        compete for cash prizes.
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="{{route('register')}}" class="theme-btn">Join the Contest</a>
                                    <a href="{{route('home')}}" class="theme-btn-s2">More about us</a>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div>

                    <!-- 4 -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="https://www.theneweconomy.com/wp-content/uploads/2019/05/Africa-electricity.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Indigenous ideas, World Class inventions</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>NIC is the #1 platform for Engineering Competitions
                                        and Artificial Intelligience</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                <a href="{{route('register')}}" class="theme-btn"> Register</a>
                                    <a href="{{route('home')}}" class="theme-btn-s2">More about us</a>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div>

                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="https://s32152.pcdn.co/wp-content/uploads/2020/10/Digital-Learning_South-Africa-UNI363429.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2 style="color:#fd5f17;">Explore Creativity</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p> The NIC fosters critical 21st century support for skills and invention, like
                                        creativity and innovation, optimism and empathy, and the willingness to
                                        experiment and take risks.</p>
                                </div>
                                <div class="clearfix"></div>
                                <!-- <div data-swiper-parallax="500" class="slide-btns">
                                <a href="./users/sign_up.html" class="theme-btn">Create an Account</a>
                                <a href="#" class="theme-btn-s2">More about us</a>
                            </div> -->
                            </div>
                        </div> <!-- end slide-inner -->
                    </div>

                    <!--  -->
                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="https://p3y6v9e6.stackpathcdn.com/wp-content/uploads/zikoko/2020/02/Hydraulic-toys-600x338-1.jpg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>The Best Move you will Ever Make</h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>NIC is the #1 platform for Engineering Competitions
                                        and coding challenges</p>
                                </div>
                                <div class="clearfix"></div>
                                <!-- <div data-swiper-parallax="500" class="slide-btns">
                                <a href="./users/sign_up.html" class="theme-btn">Create an Account</a>
                                <a href="#" class="theme-btn-s2">More about us</a>
                            </div> -->
                            </div>
                        </div> <!-- end slide-inner -->
                    </div>

                    <!-- 6 -->



                    <div class="swiper-slide">
                        <div class="slide-inner slide-bg-image"
                            data-background="https://media.wired.com/photos/593242a9edfced5820d0f3fe/master/w_1600%2Cc_limit/1-bciGdg-bGS5iJx7YLW80DA.jpeg">
                            <div class="container">
                                <div data-swiper-parallax="300" class="slide-title">
                                    <h2>Put ideas together </h2>
                                </div>
                                <div data-swiper-parallax="400" class="slide-text">
                                    <p>At National Inventors Challenge you will have the oppurtunity to put all yours
                                        ideas tother and create new things like never before</p>
                                </div>
                                <div class="clearfix"></div>
                                <div data-swiper-parallax="500" class="slide-btns">
                                    <a href="{{route('register')}} class="theme-btn">Create an Account</a>
                                    <a href="#" class="theme-btn-s2">More about us</a>
                                </div>
                            </div>
                        </div> <!-- end slide-inner -->
                    </div>
                </div>

                <!-- end swiper-wrapper -->

                <!-- swipper controls -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </section>
        <!-- end of hero slider -->


        <!-- start about-us-section -->
        <section class="about-us-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="right-col">
                            <div class="img-holder">
                                <img src="https://image.freepik.com/free-photo/african-american-business-woman-with-computer-coffee_1303-9870.jpg"
                                    alt>
                            </div>

                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="section-title">
                            <span>NIC 2020</span>
                            <h2>What is the National Inventor’s Challenge?</h2>
                        </div>
                        <div class="details">
                            <p>
                                National Inventor’s Challenge is brought to you by roboticscenterhq.com, powered by
                                Winexviv International. Engineers and Techies around the nation are invited to create
                                inventions that will help solve problems in our nation and the world at large. The
                                National Inventor's Challenge fosters critical 21st century skills and create systems
                                for the future.
                            </p>
                            <!-- <div class="btns">
                                <a href="./users/apply_winter.html" class="theme-btn">Apply to Winter 2020 →</a>
                             <a href="#" class="theme-btn-s3">Contact with us</a> 
                            </div> -->
                        </div>
                    </div>

                </div>

                <!-- start how -->

                <div class="row" style="margin-top: 15px;">
                    <div class="col col-md-6">
                        <div class="section-title">
                            <span>How Does it Work</span>
                            <h2>Our application process</h2>
                        </div>
                        <div class="details">
                            <p>
                                Never miss this opportunity to participate in an exciting, technology based invention
                                competition

                                Each year, we bring together the nation’s most promising minds to showcase, recognize
                                and reward their cutting-edge inventions and discoveries.
                            </p>
                            <div class="clearfix">
                                <ul>
                                    <li><i class="ti-check"></i> Team work</li>
                                    <li><i class="ti-check"></i> Curiosity</li>
                                </ul>
                                <ul>
                                    <li><i class="ti-check"></i> Tech Savvy</li>
                                    <li><i class="ti-check"></i> Resilience</li>
                                </ul>

                                <!-- <div style="padding:30px 30px 30px"> -->
                                <ol style="list-style-type: number;">
                                    <li>
                                        If you want to apply to the National Tech-Innovation Challenge, please
                                        submit your <a href="{{route('home')}}">application</a>
                                        online by <strong> 8 pm PT on December 3</strong>. Startups that submit
                                        early have a small advantage because we have more time to read their
                                        applications. <strong>And you can submit after the deadline - though keep in
                                            mind that if you apply late, we can’t guarantee the exact date of when
                                            you’ll hear back from us with a&nbsp;decision</strong>.
                                    </li>


                                    <li>
                                        On
                                        <strong>Decemaber 11</strong> by 11:59PM PST, we’ll invite the persons and
                                        teams that seem most promising to take part in the challenge.

                                    </li>
                                    <li>

                                        This batch of Nationational Tech-novation Challenge will be remote due to
                                        COVID-19. It will be much the same as every other batch. We’ve worked hard
                                        to ensure we can provide the same networking.
                                    </li>
                                    <li>

                                        During the 3 weeks cycle we invite competitors every week to talk about
                                        their ideas and what they&nbsp;learned.
                                    </li>


                                </ol>


                            </div>
                            <div class="btns">
                                <a href="{{route('home')}}" class="theme-btn">Apply to 2021 Challenge →</a>
                                <!-- <a href="#" class="theme-btn-s3">Contact with us</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="right-col">
                            <div class="img-holder">
                                <img src="https://img.freepik.com/free-photo/cheerful-afro-american-man-leather-jacket-pointing-with-two-fingers-looking_171337-1322.jpg?size=626&ext=jpg"
                                    alt>
                            </div>
                            <div class="video-holder">
                                <!-- <a href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1" class="hero-video-btn video-btn"  data-type="iframe" tabindex="0"><i class="fi flaticon-play-button"></i>Watch our intro video</a>  -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end about-us-section -->

        <!-- start feature-section-s2 -->
        <section class="features-section-s2">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s2">
                            <span>Get rewarded for your innovation.</span>
                            <h2>Awards</h2>
                        </div>
                    </div>
                    <div class="col col-xs-12">
                        <div class="feature-grids clearfix">
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-trophy "></i>
                                </div>
                                <span class="count">01.Prize</span>
                                <h4>I Million Naira</h4>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-star"></i>
                                </div>
                                <span class="count">02.Prize</span>
                                <h4>500,000 Naira </h4>
                            </div>
                            <div class="grid">
                                <div class="icon">
                                    <i class="fi flaticon-leadership"></i>
                                </div>
                                <span class="count">03.Prize</span>
                                <h4>250,000 Naira</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end feature-section-s2 -->

        <!-- start service-section -->
        <section class="service-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6">
                        <div class="section-title-s2">
                            <span>You Choose what you do.</span>
                            <h2>Featured Programs</h2>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="title-text">
                            <p>A range of experience is useful in areas such as hardware, operating systems, or software
                                and if possible you should tailor your experience to suit the career you'd like. You
                                could create a skills portfolio to showcase your artistic work or your ability to code
                                in programming languages as well as specific software tools you can use.

                                Becoming a member of a relevant professional body is also helpful. You can join </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="service-grids clearfix">
                            <div class="grid">
                                <i class="fi flaticon-chip"></i>
                                <h4><a href="software.html">Software Engineering</a></h4>
                                <p> Samsa was a travelling salesman and above it there hung a picture that he had
                                    recently cut out of antrt </p>
                                <!-- <a href="#" class="read-more">Read More <i class="fi flaticon-next"></i></a> -->
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-expansion"></i>
                                <h4><a href="embeded_systems.html">Embeded Systems Engineering</a></h4>
                                <p> Samsa was a travelling salesman and above it there hung a picture that he had
                                    recently cut out of antrt </p>
                                <!-- <a href="#" class="read-more">Read More <i class="fi flaticon-next"></i></a> -->
                            </div>
                            <div class="grid">
                                <i class="fi flaticon-fast"></i>
                                <h4><a href="robotics.html">Robotics & artificial Intelligience</a></h4>
                                <p> Samsa was a travelling salesman and above it there hung a picture that he had
                                    recently cut out of antrt </p>
                                <!-- <a href="#" class="read-more">Read More <i class="fi flaticon-next"></i></a> -->
                            </div>

                        </div> <!-- end container -->
        </section>
        <!-- end service-section -->



        <!-- start partners-section -->
        <section class="partners-section">
            <h2 class="hidden">Partners</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <!-- <span>OUr Partners</span> -->
                            <h2>Our Partners</h2>
                            <!-- <p>Hardly able to cover it and seemed ready to slide off any moment. His many legs,
                                    pitifully thin compared with the size of the rest of him</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="partner-grids partners-slider">
                            <div class="grid">
                                <img src="assets/images/partners/img-1.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-2.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-3.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-4.jpg" alt>
                            </div>
                            <div class="grid">
                                <img src="assets/images/partners/img-5.jpg" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end partners-section -->




        <!-- start team-section -->
        <section class="team-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                        <div class="section-title-s5">
                            <span>Our Team</span>
                            <h2>Speakers and Mentors</h2>
                            <p>While you make your ideas a reality you will be mentored by seasoned Enginners and
                                professionals in the industry</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="team-grids">
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">

                                        <img src="https://image.freepik.com/free-photo/abstract-surface-textures-white-concrete-stone-wall_74190-8184.jpg"
                                            alt>
                                    </div>
                                    <!-- <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="details">
                                    <h3>Michel OLoye</h3>
                                    <span>Mechanical Engineering</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">

                                        <img src="https://image.freepik.com/free-photo/abstract-surface-textures-white-concrete-stone-wall_74190-8184.jpg"
                                            alt>
                                    </div>
                                    <!-- <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="details">
                                    <h3>Wilium Onuka</h3>
                                    <span>Robotics & ML</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">

                                        <img src="https://image.freepik.com/free-photo/abstract-surface-textures-white-concrete-stone-wall_74190-8184.jpg"
                                            alt>
                                    </div>
                                    <!-- <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="details">
                                    <h3>Micheal Ife</h3>
                                    <span>Software Architect</span>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-social">
                                    <div class="img-holder">
                                        <img src="https://image.freepik.com/free-photo/abstract-surface-textures-white-concrete-stone-wall_74190-8184.jpg"
                                            alt>
                                    </div>
                                    <!-- <div class="social">
                                        <ul>
                                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="details">
                                    <h3>Damin Kel</h3>
                                    <span>AI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end team-section -->




        <!-- start cta-section -->
        <section class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-6 col-md-6">
                        <div class="cta-text">
                            <h3>Lets Get in Touch!</h3>
                            <p>Raising african technology ecosystem can be acheive by the power our innovative minds ,
                                thats why we created NIC to motivate you take advatage our your innate abilities and
                                innovate things.</p>
                        </div>
                    </div>
                    <div class="col col-lg-5 col-lg-offset-1 col-md-6">
                        <div class="contact-info">
                            <div>
                                <i class="fi flaticon-call"></i>
                                <h4>Call us</h4>
                                <p>+234 806-548-954</p>
                            </div>
                            <div>
                                <i class="fi flaticon-contact"></i>
                                <h4>Email us</h4>
                                <p>hello@nic.ng.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end cta-section -->





@endsection