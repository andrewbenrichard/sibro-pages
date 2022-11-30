@extends('layouts.pilot')
@section('content')


<!-- banner area start here -->
<section class="home1-banner p-relative">
    <div class="single-banner banner1-height d-flex align-items-center"
        data-background="https://cdn.sibro.ng/pilot/img/banner/banner-1.jpg">
        <div class="single-banner__img">
            <img src="https://cdn.sibro.ng/pilot/img/banner/banner-man.png" alt="banner-man">
        </div>
        <div class="single-banner__shape1">
            <img src="https://cdn.sibro.ng/pilot/img/banner/shape/shape1.png" alt="shape1">
        </div>
        <div class="single-banner__shape2">
            <img src="https://cdn.sibro.ng/pilot/img/banner/shape/shape2.png" alt="shape2">
        </div>
        <div class="single-banner__shape3">
            <img src="https://cdn.sibro.ng/pilot/img/banner/shape/shape3.png" alt="shape3">
        </div>
        <div class="single-banner__shape4">
            <img src="https://cdn.sibro.ng/pilot/img/banner/shape/shape4.png" alt="shape4">
        </div>
        <div class="container">
            <div class="row justify-content-center d-flex">
                <div class="col-xxl-8 col-xl-7">
                    <div class="banner-title_wrapper text-center">
                        <h2 class="dbanner-title wow animate__animated animate__fadeInUp" data-wow-delay=".2s">Business
                            Tools and Guide</h2>
                        <p class="banner-subtitle wow animate__animated animate__fadeInUp" data-wow-delay=".3s">
                            To help grow your business
                        </p>
                    </div>
                    {{-- <div class="banner-search align-items-center wow animate__animated animate__fadeInUp"
                        data-wow-delay=".4s">
                        <form class="search-form">
                            <div class="form-inner">
                                <select class="banner_input banner-niceselect">
                                    <option value="">All</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                    <option value="">Option 3</option>
                                    <option value="">Option 4</option>
                                    <option value="">Option 5</option>
                                </select>
                            </div>
                            <input type="text" placeholder="Search keyword">
                            <button type="submit"> <i class="flaticon-search-interface-symbol"></i></button>
                        </form>
                    </div>
                    <div class="banner-tag wow animate__animated animate__fadeInUp" data-wow-delay=".5s">
                        <span>Popular Search : </span>
                        <a href="code-block.html">Code</a>
                        <a href="#">Design</a>
                        <a href="blog.html">Information</a>
                        <a href="#">Element</a>
                        <a href="documentation.html">Document</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner area end here -->

<div class="best-features pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="duservices">
                    <div class="duservices__single d-flex mb-30">
                        <div class="duservices__single-icon mr-30 ">
                            <a class="#" href="about.html"><img
                                    src="https://cdn.sibro.ng/pilot/img/brand/icon/icon1.png" alt="icon1"></a>
                        </div>
                        <div class="duservices__single-text">
                            <h5 class="duservices__single-title mb-15"> <a href="documentation.html">Documention</a>
                            </h5>
                            <p>Product teams also leverage data to improve the product.</p>
                            <a href="documentation.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="mabout">
                    <div class="duservices__single duservices__single2 d-flex mb-30">
                        <div class="duservices__single-icon mr-30 ">
                            <a href="forum.html"><img src="https://cdn.sibro.ng/pilot/img/brand/icon/icon2.png"
                                    alt="icon1"></a>
                        </div>
                        <div class="duservices__single-text">
                            <h5 class="duservices__single-title mb-15"> <a href="forum.html">Online Support </a></h5>
                            <p>Search has designed for scaling seamlessly &painlessly.</p>
                            <a href="forum.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="mabout">
                    <div class="duservices__single duservices__single3 d-flex mb-30" data-wow-delay="0.6s">
                        <div class="duservices__single-icon mr-30 ">
                            <a class="#" href="forum.html"><img
                                    src="https://cdn.sibro.ng/pilot/img/brand/icon/icon3.png" alt="icon1"></a>
                        </div>
                        <div class="duservices__single-text">
                            <h5 class="duservices__single-title mb-15"> <a href="forum.html">Knowledge Base</a></h5>
                            <p>Most brands that want to content beyond information.</p>
                            <a href="forum.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- faq-area start here -->
<div class="faq-area pt-120 pb-115">
    <div class="container">
        <div class="row justify-content-center wow fadeInUp">
            <div class="col-xl-8 col-lg-8">
                <div class="course-tabs">
                    <h2 class="section-title text-center mb-35">
                        Do you have any Question?
                    </h2>
                    <p class="section-subtitle text-center">
                        Most brands that want to use content beyond purely informational <br> purposes tend to look for
                        some
                        level
                    </p>
                    <div class="tab-content pt-38">
                        <div class="tab_accord">
                            <div class="faq-content faq-white">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                How can I create a Documy account?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Many project teams are already used to writing user stories, and this is
                                                really all I’m
                                                suggesting here. But the user stories need to be somewhat substantial,
                                                that’s all. Thinking
                                                of questions users ask is not a bad way to approach of helped personal
                                                account.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                How do I block widgets from appearing in my Documy?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Helped personal account. Many project teams are already used to
                                                    writing user stories, and
                                                    this is really all I’m suggesting here. But the user stories need to
                                                    be somewhat
                                                    substantial, that’s all. Thinking of questions users ask is not a
                                                    bad way to approach </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Can you switch accounts if you change profiles?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>But the user stories need to be somewhat substantial, that’s all.
                                                    Thinking of questions
                                                    users ask is not a bad way to approach of helped personal account.
                                                    Many project teams are
                                                    already used to writing user stories, and this is really all I’m
                                                    suggesting here.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                                aria-expanded="false" aria-controls="collapseThree1">
                                                How can I download my Documy code?
                                            </button>
                                        </h2>
                                        <div id="collapseThree1" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Thinking of questions users ask is not a bad way to approach of
                                                    helped personal account.
                                                    But the user stories need to be somewhat substantial, that’s all.
                                                    Many project teams are
                                                    already used to writing user stories, and this is really all I’m
                                                    suggesting here.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                                aria-expanded="false" aria-controls="collapseThree2">
                                                How do I create and delete files on my account?
                                            </button>
                                        </h2>
                                        <div id="collapseThree2" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Questions of thinking of users ask is not a bad way to approach of
                                                    helped personal
                                                    account. But the user stories need to be somewhat substantial,
                                                    that’s all. Many project
                                                    teams are already used to writing user stories, and this is really
                                                    all I’m suggesting
                                                    here. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- faq-area end here -->

@stop