@extends('layout.app')

@section('pageContent')
    <div class="hero-slides owl-carousel">
        <div class="hero-area d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            <h4 class="sub-title" data-animation="fadeInUp" data-delay="100ms">Welcome to</h4>
                            <h1 class="main-title" data-animation="fadeInUp" data-delay="400ms">
                                {{ config('company.name') }}
                            </h1>
                            <h1 class="main-title-2" data-animation="fadeInUp" data-delay="600ms" data-duration="1000ms">
                                & Co. Limited</h1>
                            <p class="hero-desc" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">
                                We are fast-growing agricultural technology company passionate on small holder farmers
                                in Nigeria, We provide inputs for small holder farmers in Nigeria.</p>
                        </div>
                        <div class="echofy-button" data-animation="fadeInUp" data-delay="1000ms">
                            <a href="/contact">Let’s Talk <img src="assets/images/home1/button-shape.png"
                                    alt=""></a>
                            <img class="two" src="assets/images/home1/button-shape-2.png" alt="">
                        </div>
                        <div class="echofy-button two" data-animation="fadeInUp" data-delay="1200ms">
                            <a href="/about">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-social-icon" data-animation="fadeInLeft" data-delay="1000ms">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="text">Follow Us</li>
                </ul>
            </div>
        </div>
        <div class="hero-area hero-style d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            <h4 class="sub-title" data-animation="fadeInUp" data-delay="100ms">Welcome to</h4>
                            <h1 class="main-title" data-animation="fadeInUp" data-delay="400ms">{{ config('company.name') }}
                            </h1>
                            <h1 class="main-title-2" data-animation="fadeInUp" data-delay="600ms">& Co. Limited</h1>
                            <p class="hero-desc" data-animation="fadeInUp" data-delay="800ms">We are fast-growing
                                agricultural technology company passionate on small holder farmers in Nigeria, We
                                provide inputs for small holder farmers in Nigeria.</p>
                        </div>
                        <div class="echofy-button" data-animation="fadeInUp" data-delay="1000ms">
                            <a href="/contact">Let’s Talk <img src="assets/images/home1/button-shape.png"
                                    alt=""></a>
                            <img class="two" src="assets/images/home1/button-shape-2.png" alt="">
                        </div>
                        <div class="echofy-button two" data-animation="fadeInUp" data-delay="1200ms">
                            <a href="/about">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-social-icon" data-animation="fadeInLeft" data-delay="1000ms">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="text">Follow Us</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="echofy-text-section" data-cues="zoomIn">
        <div class="inner-container">
            <div class="marquee">
                <div class="marquee-block">
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png" alt="">Premium
                                Market</span></h6>
                    </div>
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png" alt="">Funding</span>
                        </h6>
                    </div>
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png"
                                    alt="">Agriculture</span></h6>
                    </div>
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png"
                                    alt="">Technology</span></h6>
                    </div>
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png"
                                    alt="">Consultation</span></h6>
                    </div>
                </div>
                <div class="marquee-block">
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png" alt="">Premium
                                Market</span></h6>
                    </div>
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png"
                                    alt="">Funding</span></h6>
                    </div>
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png"
                                    alt="">Agriculture</span></h6>
                    </div>
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png"
                                    alt="">Technology</span></h6>
                    </div>
                    <!-- content-box -->
                    <div class="content-box">
                        <h6 class="title"><span><img src="assets/images/home1/text-shape.png"
                                    alt="">Consultation</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="about-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="assets/images/home1/about-thumb.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-right">
                        <div class="section-title left">
                            <h4><img src="assets/images/home1/section-shape.png" alt="">About
                                {{ config('company.name') }}</h4>
                        </div>
                        <div class="single-about-box">
                            <div class="about-box-icon">
                                <img src="assets/images/home1/about-icon-1.png" alt="">
                            </div>
                            <div class="about-box-content">
                                <h4>Mission</h4>
                                <p>To build one of the biggest supporting networking channel in Africa for small holder
                                    farmers by providing them with adequate funding in order to strengthen agricultural
                                    value chain and increase food production.</p>
                            </div>
                        </div>
                        <div class="single-about-box">
                            <div class="about-box-icon">
                                <img src="assets/images/home1/about-icon-2.png" alt="">
                            </div>
                            <div class="about-box-content">
                                <h4>Vision</h4>
                                <p>To build an Agro-Tech company that will ensure sufficient food security for the country
                                    and the continent at large.
                                    We believe that with adequate funding available for small holder farmers in Nigeria, the
                                    dream of having a hungry free country is possible.</p>
                            </div>
                        </div>
                        <div class="single-about-box">
                            <div class="about-box-icon">
                                <img src="assets/images/home1/about-icon-2.png" alt="">
                            </div>
                            <div class="about-box-content">
                                <h4>Core Value</h4>
                                <p>Integrity and Innovation</p>
                            </div>
                        </div>
                        {{-- <div class="echofy-button">
                            <a href="/about">More About <img src="assets/images/home1/button-shape.png"
                                    alt=""></a>
                            <img class="two" src="assets/images/home1/button-shape-2.png" alt="">
                        </div> --}}
                        <div class="about-shape-1">
                            <img src="assets/images/home1/about-shape-1.png" alt="">
                        </div>
                        <div class="about-shape-2">
                            <img src="assets/images/home1/about-shape-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section-title left">
                        <h4><img src="assets/images/home1/section-shape.png" alt="">Our Services </h4>
                        {{-- <h1>Provide Environment</h1>
                        <h1>Best Leading Services</h1> --}}
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="row">
                <div class="service-list-1 owl-carousel">
                    <div class="col-lg-12">
                        <div class="single-service-box">
                            <div class="service-content">
                                <div class="service-content-icon">
                                    <img src="assets/images/home1/service-icon1.png" alt="">
                                </div>
                                <h4>Input Financing</h4>
                                <p>The backbone of any agricultural revolution is access of farmers to modern agricultural
                                    inputs; Mino provides her farmers with improved seeds, fertilizers and crops protection
                                    chemicals.</p>
                            </div>
                            <div class="service-thumb">
                                <img src="assets/images/home1/service-1.jpg" alt="">
                            </div>
                            <div class="service-box-shape">
                                <img src="assets/images/home1/service-box-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-service-box">
                            <div class="service-content">
                                <div class="service-content-icon">
                                    <img src="assets/images/home1/service-icon2.png" alt="">
                                </div>
                                <h4>Development & Training</h4>
                                <p>For us as an organization, we do not thrive for solving problems by providing our
                                    smallholder farmers with farming inputs alone, NO. We take training and development as
                                    initiative that is designing to improve and advance our farmer’s knowledge and skills
                                    set and installing greater motivation to enhance their livelihood and increased
                                    productivity. Through training, our farmers gain confidence in their abilities leading
                                    to greater farm satisfaction.</p>
                            </div>
                            <div class="service-thumb">
                                <img src="assets/images/home1/service-2.jpg" alt="">
                            </div>
                            <div class="service-box-shape">
                                <img src="assets/images/home1/service-box-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-service-box">
                            <div class="service-content">
                                <div class="service-content-icon">
                                    <img src="assets/images/home1/service-icon3.png" alt="">
                                </div>
                                <h4>Technology Services</h4>
                                <p>Farmers now use automated harvesters, drones, autonomous tractors, seeding, and weeding
                                    to transform how they cultivate their crops. The technology takes care of menial and
                                    recurring tasks, allowing them to focus on more critical functions, with the trendng
                                    technnologies we will bring to them closer to make life easier to them and us as well.
                                </p>
                            </div>
                            <div class="service-thumb">
                                <img src="assets/images/home1/service-3.jpg" alt="">
                            </div>
                            <div class="service-box-shape">
                                <img src="assets/images/home1/service-box-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-service-box">
                            <div class="service-content">
                                <div class="service-content-icon">
                                    <img src="assets/images/home1/service-icon2.png" alt="">
                                </div>
                                <h4>Post Harvest Services</h4>
                                <p>Post-harvest services help farmers reduce losses, improve storage, and access better
                                    markets. Efficient handling, processing, and preservation enhance product value,
                                    ensuring higher profitability and food security.</p>
                            </div>
                            <div class="service-thumb">
                                <img src="assets/images/home1/service-4.jpg" alt="">
                            </div>
                            <div class="service-box-shape">
                                <img src="assets/images/home1/service-box-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-service-box">
                            <div class="service-content">
                                <div class="service-content-icon">
                                    <img src="assets/images/home1/service-icon2.png" alt="">
                                </div>
                                <h4>Access to Premium Market</h4>
                                <p>Smallholder farmers in Nigeria struggle with limited credit access, high input costs, and
                                    minimal support, impacting their productivity. Despite this, they supply most of the
                                    country’s food and drive the agricultural sector. Providing them with better credit and
                                    resources can boost food security, reduce imports, and strengthen the economy.</p>
                            </div>
                            <div class="service-thumb">
                                <img src="assets/images/home1/service-5.jpg" alt="">
                            </div>
                            <div class="service-box-shape">
                                <img src="assets/images/home1/service-box-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-service-box">
                            <div class="service-content">
                                <div class="service-content-icon">
                                    <img src="assets/images/home1/service-icon2.png" alt="">
                                </div>
                                <h4>Social and Financial Inclusion</h4>
                                <p>Empowering farmers with digital tools and financial access to drive sustainable growth,
                                    improve livelihoods, and create a more inclusive agricultural economy.</p>
                            </div>
                            <div class="service-thumb">
                                <img src="assets/images/home1/service-6.jpg" alt="">
                            </div>
                            <div class="service-box-shape">
                                <img src="assets/images/home1/service-box-shape.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="skill-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title left">
                        <h4><img src="assets/images/home1/section-shape.png" alt="">Our Skills </h4>
                        <h1>Getting A Greener Future</h1>
                        <h1>Safe Environment</h1>
                        <p class="section-desc">
                            Competently cultivate worldwide e-tailers through principle-centered value professionally
                            engineer high-payoff deliverables without exceptional processes. Rapidiously network cost
                            effective vortals
                        </p>
                    </div>
                    <div class="skills-item">
                        <div class="skills-item-content">
                            <div class="skills-item-icon">
                                <i class="bi bi-check"></i>
                            </div>
                            <div class="skills-item-title">
                                <h4>Safe Environment</h4>
                            </div>
                        </div>
                    </div>
                    <div class="skills-item">
                        <div class="skills-item-content">
                            <div class="skills-item-icon">
                                <i class="bi bi-check"></i>
                            </div>
                            <div class="skills-item-title">
                                <h4>Dirty Recycling</h4>
                            </div>
                        </div>
                    </div>
                    <div class="skills-content">
                        <p>Recycling</p>
                        <div class="skill-bg"></div>
                        <div class="skills html"><span class="number">90%</span></div>
                    </div>

                    <div class="skills-content">
                        <p>Ocean Cleaning</p>
                        <div class="skill-bg"></div>
                        <div class="skills css"><span class="number">80%</span></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skills-thumb">
                        <img src="assets/images/home1/skill-thumb.png" alt="">
                        <div class="skills-shape">
                            <img src="assets/images/home1/skill-shape-1.png" alt="">
                        </div>
                        <div class="skills-shape-2">
                            <img src="assets/images/home1/skill-shape-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="counter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <div class="conuter-icon">
                            <img src="assets/images/home1/counter-icon-1.png" alt="">
                        </div>
                        <div class="counter-content">
                            <h4 class="counter">300</h4>
                            <span>+</span>
                            <p>Satisfied farmers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <div class="conuter-icon">
                            <img src="assets/images/home1/counter-icon-2.png" alt="">
                        </div>
                        <div class="counter-content">
                            <h4 class="counter">30</h4>
                            <span>+</span>
                            <p>Professional Agric Coach</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <div class="conuter-icon">
                            <img src="assets/images/home1/counter-icon-4.png" alt="">
                        </div>
                        <div class="counter-content">
                            <h4 class="counter">300</h4>
                            <p>Point of Sale goods</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter-box">
                        <div class="conuter-icon">
                            <img src="assets/images/home1/counter-icon-3.png" alt="">
                        </div>
                        <div class="counter-content">
                            <h4 class="counter">1</h4>
                            <p>CAC Certified</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="process-area">
        <div class="container">
            <div class="row align-items-center" id="poress-row">
                <div class="col-lg-6 col-md-12">
                    <div class="porcess-thumb">
                        <img src="assets/images/home1/process-thumb.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="process-left">
                        <div class="section-title left">
                            <h4><img src="assets/images/home1/section-shape.png" alt="">Contact Us </h4>
                            <h1>Contact us Today,</h1>
                            <h1>Your Feedback is Valuable</h1>
                            <p class="section-desc">
                                Have questions, feedback, or just want to say hello? We’d love to hear from you! Fill out
                                our easy-to-use Contact Us form, and our friendly team will get back to you as soon as
                                possible.

                                Whether it’s a question about our services, a suggestion, or something else entirely, your
                                input matters to us. Let’s stay connected—reach out today!
                            </p>
                        </div>
                        <div class="echofy-button">
                            <a href="/contact">Contact Us <img src="assets/images/home1/button-shape.png"
                                    alt=""></a>
                            <img class="two" src="assets/images/home1/button-shape-2.png" alt="">
                        </div>
                        <div class="process-shape">
                            <img src="assets/images/home1/about-shape-2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="project-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section-title left">
                        <h4><img src="assets/images/home1/section-shape.png" alt="">Our Projects </h4>
                        <h1>Finished the Latest Leading</h1>
                        <h1>Environmental Works</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project-list-1 owl-carousel">
                    <div class="col-lg-12">
                        <div class="single-project-box">
                            <div class="project-thumb">
                                <img src="assets/images/home1/project-1.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <h4>Climate</h4>
                                <a href="#">Cleaning Forest</a>
                                <a class="project-button" href="#">View Details<i
                                        class="bi bi-arrow-right-short"></i></a>
                                <div class="project-shape">
                                    <img src="assets/images/home1/project-shape.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-project-box">
                            <div class="project-thumb">
                                <img src="assets/images/home1/project-2.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <h4>Environment</h4>
                                <a href="#">Climate Solutions</a>
                                <a class="project-button" href="#">View Details<i
                                        class="bi bi-arrow-right-short"></i></a>
                                <div class="project-shape">
                                    <img src="assets/images/home1/project-shape.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-project-box">
                            <div class="project-thumb">
                                <img src="assets/images/home1/project-3.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <h4>Recycling</h4>
                                <a href="#">Plustic Recyclin</a>
                                <a class="project-button" href="#">View Details<i
                                        class="bi bi-arrow-right-short"></i></a>
                                <div class="project-shape">
                                    <img src="assets/images/home1/project-shape.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-project-box">
                            <div class="project-thumb">
                                <img src="assets/images/home1/project-4.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <h4>Climate</h4>
                                <a href="#">Ocean Cleaning</a>
                                <a class="project-button" href="#">View Details<i
                                        class="bi bi-arrow-right-short"></i></a>
                                <div class="project-shape">
                                    <img src="assets/images/home1/project-shape.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-project-box">
                            <div class="project-thumb">
                                <img src="assets/images/home1/project-3.jpg" alt="">
                            </div>
                            <div class="project-content">
                                <h4>Recycling</h4>
                                <a href="#">Plustic Recyclin</a>
                                <a class="project-button" href="#">View Details<i
                                        class="bi bi-arrow-right-short"></i></a>
                                <div class="project-shape">
                                    <img src="assets/images/home1/project-shape.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <div class="process-area-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title center">
                        <h4><img src="assets/images/home1/section-shape.png" alt="">Working Process</h4>
                        <h1>Building a Greener Future</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-process-box-two style-one">
                        <div class="process-icon-thumb-two">
                            <img src="assets/images/home1/process-two-icon1.png" alt="">
                        </div>
                        <div class="process-two-content">
                            <h4>Sustain Solutions</h4>
                            <p>Proactively drive maintainable value next mission-critical infrastructures eggplant new
                                environmental nature
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-process-box-two">
                        <div class="process-icon-thumb-two">
                            <img src="assets/images/home1/process-two-icon2.png" alt="">
                        </div>
                        <div class="process-two-content">
                            <h4>Renewable Energy</h4>
                            <p>Proactively drive maintainable value next mission-critical infrastructures eggplant new
                                environmental nature
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-process-box-two style-three">
                        <div class="process-icon-thumb-two">
                            <img src="assets/images/home1/process-two-icon3.png" alt="">
                        </div>
                        <div class="process-two-content">
                            <h4>Fresh Environment</h4>
                            <p>Proactively drive maintainable value next mission-critical infrastructures eggplant new
                                environmental nature
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title center">
                        <h4><img src="assets/images/home1/section-shape.png" alt="">Testimonials</h4>
                        <h1>Clients Best Feedback About</h1>
                        <h1>Provission</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial-list-1 owl-carousel">
                    <div class="col-lg-12">
                        <div class="single-testimonial-box">
                            <div class="testi-qutoe">
                                <img src="assets/images/home1/testi-quote.png" alt="">
                            </div>
                            <div class="testi-author">
                                <div class="testi-author-thumb">
                                    <img src="assets/images/home1/testi-author-1.png" alt="">
                                </div>
                                <div class="testi-author-content">
                                    <div class="testi-author-rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                        </ul>
                                    </div>
                                    <h4>Ishaku Abubakar</h4>
                                    <p>Farmer</p>
                                </div>
                            </div>
                            <p class="testi-desc">
                                “My Name is Ishaku Abubakar youth leader of Betel community Ganye local Government Area of
                                Adamawa State North East Nigeria. Mino NIC & CO.LIMITED is just one of its kind God send
                                them here to help us in this community expecially women, our women here love farming very
                                well but they were also having issues of financial to farm but their coming to Betal
                                community has help us alots. We pray that they should continued with us coming year.”
                            </p>
                            {{-- <div class="what-for-comment">
                                <p>Service Quality</p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-testimonial-box">
                            <div class="testi-qutoe">
                                <img src="assets/images/home1/testi-quote.png" alt="">
                            </div>
                            <div class="testi-author">
                                <div class="testi-author-thumb">
                                    <img src="assets/images/home1/testi-author-2.png" alt="">
                                </div>
                                <div class="testi-author-content">
                                    <div class="testi-author-rating">
                                        <ul>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-fill"></i></li>
                                            <li><i class="bi bi-star-half"></i></li>
                                        </ul>
                                    </div>
                                    <h4>Mai Angwa Chindo</h4>
                                    <p>Farmer</p>
                                </div>
                            </div>
                            <p class="testi-desc">
                                “My names is mai Angwa Chindo from Ganye local Government Area of Adamawa State North East
                                Nigeria, I really want to appreciate this Company called Mino NIC &Co Ltd, Before now our
                                Farmers here used to have difficulties during planting seasons because we do not have enough
                                money to buy farming inputs like fertiliser, pesticides, but their coming here has made
                                things easy for us alots, by providing us with these inputs or cash for those u prefer cash,
                                which is a blessing to the farmers in our community, my prayer may God blessed them for us
                                for this kind love they have shown to us so that they will continued with the good work they
                                are doing.”
                            </p>
                            {{-- <div class="what-for-comment">
                                <p>Supports</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testi-shape">
            <img src="assets/images/home1/testi-shape.png" alt="">
        </div>
        <div class="testi-shape-tow">
            <img src="assets/images/home1/testi-shape-1.png" alt="">
        </div>
        <div class="testi-shape-three">
            <img src="assets/images/home1/testi-shape-2.png" alt="">
        </div>
        <div class="testi-shape-four">
            <img src="assets/images/home1/testi-shape-3.png" alt="">
        </div>
        <div class="testi-shape-five">
            <img src="assets/images/home1/testi-shape-4.png" alt="">
        </div>
    </div>

    {{-- <div class="brand-area">
        <div class="container">
            <div class="row" id="brand-bg">
                <div class="col-lg-12">
                    <div class="brand-content">
                        <h4>All over the world 100,000+ Customers</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="brand-list-1 owl-carousel">
                        <div class="col-md-12">
                            <div class="single-brand-box">
                                <img src="assets/images/home1/brand-1.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand-box">
                                <img src="assets/images/home1/brand-2.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand-box">
                                <img src="assets/images/home1/brand-1.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand-box">
                                <img src="assets/images/home1/brand-4.png" alt="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-brand-box">
                                <img src="assets/images/home1/brand-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-shape">
                <img src="assets/images/home1/brand-shape.png" alt="">
            </div>
        </div>
    </div> --}}

    <div class="team-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title center">
                        <h4><img src="assets/images/home1/section-shape.png" alt="">Our Team</h4>
                        <h1>Meet Our Dedicated Members</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-box">
                        <div class="single-team-thumb">
                            <img src="assets/images/home1/team-1.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Mr. Nyam A. Michael</h4>
                            <p>Co-Founder & CEO</p>
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-box">
                        <div class="single-team-thumb">
                            <img src="assets/images/home1/team-2.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Mr. Musa Muhammed Abubakar</h4>
                            <p>Finance Manager</p>
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-box">
                        <div class="single-team-thumb">
                            <img src="assets/images/home1/team-3.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Fatima Patrick Umoru</h4>
                            <p>Manager, People & Culture</p>
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-box">
                        <div class="single-team-thumb">
                            <img src="assets/images/home1/team-4.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Barr. Funtse Kwerande Akin</h4>
                            <p>Legal Manager</p>
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-box">
                        <div class="single-team-thumb">
                            <img src="assets/images/home1/team-5.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Samson Meheni</h4>
                            <p>Technology Manager</p>
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-team-box">
                        <div class="single-team-thumb">
                            <img src="assets/images/home1/team-6.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Mr. Micah Mathias Pau</h4>
                            <p>Manager, Risk Mgt & Compilance</p>
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 m-auto">
                    <div class="single-team-box">
                        <div class="single-team-thumb">
                            <img src="assets/images/home1/team-7.png" alt="">
                        </div>
                        <div class="team-content">
                            <h4>Mr. Umar Mohammed Waziri</h4>
                            <p>Manager, Agronomist</p>
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title left">
                        <h4><img src="assets/images/home1/section-shape.png" alt="">Latest Blog </h4>
                        <h1>Building a Greener Future</h1>
                        <h1>Together Forever</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="echofy-button">
                        <a href="{{ route('blog') }}">View All Blog <img src="assets/images/home1/button-shape.png"
                                alt=""></a>
                        <img class="two" src="assets/images/home1/button-shape-2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blogPosts as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-box">
                            <div class="single-blog-thumb" style="width: 100%; overflow: hidden;">
                                <img src="https://mino.com.ng/images/blog/{{ $blog->image }}" alt="{{ $blog->title }}"
                                    class="img-fluid w-100 h-auto" style="object-fit: cover;">
                            </div>
                            <div class="blog-content">
                                {{-- <a href="#">{{ \Illuminate\Support\Str::limit($blog->title, 25) }}</a>
                                <p>{{ \Illuminate\Support\Str::limit($blog->message, 45) }}</p> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
