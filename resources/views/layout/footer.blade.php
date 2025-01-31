<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-social-address">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="footer-social-address-content">
                                <h4>Stay with us On Social</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="footer-social-icon">
                                <ul>
                                    <li class="text">FOLOW US :</li>
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
        <div class="row add-footer-class">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="footer-logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/images/home1/logo_white.png') }}"
                            alt="logo"></a>
                </div>
                <p class="footer-desc">We are fast-growing agricultural technology company passionate on small holder
                    farmers in Nigeria, We provide inputs for small holder farmers in Nigeria.</p>
                <div class="footer-contect-info">
                    <div class="footer-contact-info-title">
                        <h4>Contact</h4>
                    </div>
                    <ul>
                        <li><i class="bi bi-telephone-plus-fill"></i><a href="tel:{{ config('company.phone') }}"
                                class="text-light">{{ config('company.phone') }}</a></li>
                        <li><i class="bi bi-envelope-open-fill"></i><a href="mailto:{{ config('company.email') }}"
                                class="text-light">{{ config('company.email') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget-content">
                    <div class="footer-widget-title">
                        <h4>Company</h4>
                    </div>
                    <div class="footer-widget-menu">
                        <ul>
                            <li><a href="{{ route('home') }}"><i class="fas fa-angle-right"></i>Home</a></li>
                            <li><a href="{{ route('about') }}"><i class="fas fa-angle-right"></i>About Us</a></li>
                            <li><a href="{{ route('blog') }}"><i class="fas fa-angle-right"></i>Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget-content">
                    <div class="footer-widget-title">
                        <h4>Newsletter</h4>
                    </div>
                    <p>Subscribe our Newsletter</p>
                    <form action="#">
                        <div class="single-newsletter-box">
                            <input type="text" name="Email" placeholder="Enter E-Mail" required="">
                            <button type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row footer-bottom">
                <div class="col-md-12 text-center">
                    <div class="footer-bottom-content">
                        <h4>© Copyrights 2025 {{ config('company.fullName') }} All rights reserved by <a
                                href="https://mehenscreatives.com">MEHENS CREATIVE ENTERPRISE</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
