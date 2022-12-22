@extends('layouts.home')
@section('content')


<!-- Banner Start -->
<div class="rs-banner banner-style1">
    <div class="container custom2">
        <div class="content-wrap">
            <h1 class="title">Boost your sales 10x at <br> Zero cost </h1>
            <div class="description">
                <p>
                    Get more customers and increase your sales at 0% commission. <br> Add your products & get your
                    product listed on over 1000+ Sibro stores.
                </p>
            </div>
            <form action="https://supplier.sibro.ng/account/register" method="GET" class="newsletter-form">
                <input type="email" id="email" name="email" placeholder="Enter Your Email" required="">
                <div class="form-button">
                    <input class="submit" type="submit" value="Join for free">
                </div>
            </form>
        </div>
    </div>

</div>
<!-- Banner End -->


<!-- About Start -->
<div class="rs-about about-style1 about-modify1 pt-110 pb-130 md-pt-10 md-pb-0">
    <div class="container custom6">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="about-img">
                    <img class="js-tilt" src="assets/images/about/style5/2.jpg" alt="Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title">
                    <h2 class="title pb-25">
                        Why Our Sellers love us
                    </h2>
                    <p class="desc pb-15">
                        Sibro is a social commerce platform that empowers Nigeria MSMEs and Local Brands by connecting
                        these MSMEs and Local Brands to consumers through the presence of Resellers.
                    </p>
                    <ul class="check-lists check-style6">
                        <li class="list-item">
                            <span class="icon-list-icon">
                                <i class="fa fa-check-circle"></i>
                            </span>
                            <span class="list-text">1000+ Resellers Ready to Sell Your Products</span>
                        </li>
                        <li class="list-item">
                            <span class="icon-list-icon">
                                <i class="fa fa-check-circle"></i>
                            </span>
                            <span class="list-text">New Sales Channel</span>
                        </li>
                        <li class="list-item">
                            <span class="icon-list-icon">
                                <i class="fa fa-check-circle"></i>
                            </span>
                            <span class="list-text">Sibro Shipping Support</span>
                        </li>
                        <li class="list-item">
                            <span class="icon-list-icon">
                                <i class="fa fa-check-circle"></i>
                            </span>
                            <span class="list-text">
                                Well detailed Store Dashboard</span>
                        </li>
                    </ul>
                    <div class="btn-part mt-45">
                        <a class="readon started contact" href="https://supplier.sibro.ng/account/register">
                            <span class="btn-text">Get Started</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
{{-- <div class="rs-services services-style8 gray-bg15 pt-130 pb-130 md-pt-80 md-pb-80">
    <div class="container">
        <div class="sec-title text-center mb-55 md-mb-35">
            <h2 class="title pb-25">
                45+ Tools 1 Suite.<br>
                What's Inside?
            </h2>
            <p class="desc">
                45+ of the best tools to monitor & manage every aspect of your SEO Compaigns. A must-have<br>
                to domainate the SERPs and grow your traffic!
            </p>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-icon">
                            <img src="assets/images/services/style10/ser-1.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h4 class="title"><a href="services-details.html">Keyword Research</a></h4>
                            <p class="services-txt">Some great feature that can improve your way to manage your website
                                and sass product.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-icon">
                            <img src="assets/images/services/style10/ser-2.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h4 class="title"><a href="services-details.html">Domain Research</a></h4>
                            <p class="services-txt">Some great feature that can improve your way to manage your website
                                and sass product.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-icon">
                            <img src="assets/images/services/style10/ser-3.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h4 class="title"><a href="services-details.html">Site Management</a></h4>
                            <p class="services-txt">Some great feature that can improve your way to manage your website
                                and sass product.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 xl-mb-30">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-icon">
                            <img src="assets/images/services/style10/ser-4.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h4 class="title"><a href="services-details.html">Rank Tracking</a></h4>
                            <p class="services-txt">Some great feature that can improve your way to manage your website
                                and sass product.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 sm-mb-30">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-icon">
                            <img src="assets/images/services/style10/ser-5.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h4 class="title"><a href="services-details.html">Analytics</a></h4>
                            <p class="services-txt">Some great feature that can improve your way to manage your website
                                and sass product.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="services-item">
                    <div class="services-wrap">
                        <div class="services-icon">
                            <img src="assets/images/services/style10/ser-6.png" alt="Images">
                        </div>
                        <div class="services-content">
                            <h4 class="title"><a href="services-details.html">Email Marketing</a></h4>
                            <p class="services-txt">Some great feature that can improve your way to manage your website
                                and sass product.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Services End -->

{{--
<!-- Testimonial Section End -->
<div class="rs-testimonial testimonial-style2 testimonial-modify7 pt-130 pb-170 md-pt-80 md-pb-120">
    <div class="container custom4">
        <div class="sec-title text-center mb-55">
            <h2 class="title">
                What our customers<br>
                are saying
            </h2>
        </div>
        <div class="slider testi-slide-1">
            <div class="testi-item">
                <div class="item-content">
                    <span>
                        <img class="normal-logo" src="assets/images/testimonial/style1/quote-1.png" alt="Testimonial">
                        <img class="hover-logo" src="assets/images/testimonial/style1/quote-7.png" alt="Testimonial">
                    </span>
                    <p>Sasly impressed me on multiple levels. No tha matter where you go, sasly is the coolest, most
                        happening thing.</p>
                </div>
                <div class="testi-content">
                    <div class="rattings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star star-color"></i>
                    </div>
                    <div class="testi-information">
                        <div class="testi-name">Dj Bravo</div>
                        <span class="testi-title">Personal Counseling</span>
                    </div>
                </div>
            </div>
            <div class="testi-item">
                <div class="item-content">
                    <span>
                        <img class="normal-logo" src="assets/images/testimonial/style1/quote-1.png" alt="Testimonial">
                        <img class="hover-logo" src="assets/images/testimonial/style1/quote-7.png" alt="Testimonial">
                    </span>
                    <p>Sasly impressed me on multiple levels. No tha matter where you go, sasly is the coolest, most
                        happening thing.</p>
                </div>
                <div class="testi-content">
                    <div class="rattings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star star-color"></i>
                    </div>
                    <div class="testi-information">
                        <div class="testi-name">Leslie Alexander</div>
                        <span class="testi-title">Anxiety Disorder</span>
                    </div>
                </div>
            </div>
            <div class="testi-item">
                <div class="item-content">
                    <span>
                        <img class="normal-logo" src="assets/images/testimonial/style1/quote-1.png" alt="Testimonial">
                        <img class="hover-logo" src="assets/images/testimonial/style1/quote-7.png" alt="Testimonial">
                    </span>
                    <p>Sasly impressed me on multiple levels. No tha matter where you go, sasly is the coolest, most
                        happening thing.</p>
                </div>
                <div class="testi-content">
                    <div class="rattings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star star-color"></i>
                    </div>
                    <div class="testi-information">
                        <div class="testi-name">Moorie Hussy</div>
                        <span class="testi-title">Product Designer</span>
                    </div>
                </div>
            </div>
            <div class="testi-item">
                <div class="item-content">
                    <span>
                        <img class="normal-logo" src="assets/images/testimonial/style1/quote-1.png" alt="Testimonial">
                        <img class="hover-logo" src="assets/images/testimonial/style1/quote-7.png" alt="Testimonial">
                    </span>
                    <p>Sasly impressed me on multiple levels. No tha matter where you go, sasly is the coolest, most
                        happening thing.</p>
                </div>
                <div class="testi-content">
                    <div class="rattings">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star star-color"></i>
                    </div>
                    <div class="testi-information">
                        <div class="testi-name">Moorie Hussy</div>
                        <span class="testi-title">Product Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->

<!-- Faq Section Start -->
<div class="rs-faq faq-style1 faq-modify6 bg12 pt-140 pb-140 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="sec-title mb-45">
                    <h2 class="title pb-25 white-color">
                        Have any questions
                    </h2>
                    <p class="desc desc3">
                        Euismod elementum nisi quis eleifend quam adipiscing. Eget magna fermentum iaculis eu non diam
                        mauris nunc vitae suscipit.
                    </p>
                </div>
                <div class="faq-content">
                    <div id="accordion" class="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" href="#" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true">When will my order arrive?</a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                <div class="card-body">
                                    Urna neque viverra justo nec ultrices. Justo laoreet sit amet cursus sit amet
                                    dictum. Quisque id diam vel quam elementum pulvinar etiam Nisi porta lorem mollis
                                    aliquam.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false">How to return products?</a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-bs-parent="#accordion" style="">
                                <div class="card-body">
                                    Urna neque viverra justo nec ultrices. Justo laoreet sit amet cursus sit amet
                                    dictum. Quisque id diam vel quam elementum pulvinar etiam Nisi porta lorem mollis
                                    aliquam.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false">Do you have a coupon code?</a>
                            </div>
                            <div id="collapseThree" class="collapse" data-bs-parent="#accordion" style="">
                                <div class="card-body">
                                    Urna neque viverra justo nec ultrices. Justo laoreet sit amet cursus sit amet
                                    dictum. Quisque id diam vel quam elementum pulvinar etiam Nisi porta lorem mollis
                                    aliquam.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false">Can I get a discount for a big
                                    order?</a>
                            </div>
                            <div id="collapseFour" class="collapse" data-bs-parent="#accordion" style="">
                                <div class="card-body">
                                    Urna neque viverra justo nec ultrices. Justo laoreet sit amet cursus sit amet
                                    dictum. Quisque id diam vel quam elementum pulvinar etiam Nisi porta lorem mollis
                                    aliquam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pl-65 md-pl-15">
                <!-- Contact Start -->
                <div class="rs-contact contact-style2 contact-modify2">
                    <div class="content-wrap">
                        <div class="sec-title mb-30">
                            <h2 class="title">
                                Quick Contact
                            </h2>
                        </div>
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post" action="mailer.php">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12 mb-25">
                                        <div class="form-group">
                                            <i class="ri-user-3-line"></i>
                                            <input class="from-control" type="text" id="name" name="name"
                                                placeholder="Enter Your name" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-25">
                                        <div class="form-group">
                                            <i class="ri-mail-line"></i>
                                            <input class="from-control" type="text" id="email" name="email"
                                                placeholder="Enter your email address" required="">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <i class="ri-edit-line"></i>
                                            <textarea class="from-control" id="message" name="message"
                                                placeholder="Write your messags here" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mt-25">
                                        <input class="readon submit submit3" type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="sec-title text-right pt-40 md-text-center">
                        <h5 class="title title7 white-color">
                            Can’t find what you are looking for?
                        </h5>
                    </div>
                </div>
                <!-- Contact End -->
            </div>
        </div>
    </div>
    <div class="faq-animate">
        <div class="arrow-animate">
            <img src="assets/images/contact/arrow-indicator.png" alt="images">
        </div>
    </div>
</div>
<!-- Faq Section End --> --}}

@stop