@extends('layouts.default')
@section('content')
<div class="container">
        <!-- Contact Start -->
        <div class="rs-contact contact-style1 gray-bg25 pt-130 md-pt-80">
                <div class="container custom6">
                        <div class="row">
                                <div class="col-lg-7 md-mb-50">
                                        <div class="contact-wrap">
                                                <div class="sec-title mb-35">
                                                        <h3 class="title title5">Get in touch</h3>
                                                </div>
                                                <div id="form-messages"></div>
                                                <form id="contact-form" method="post" action="/post-contact">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <fieldset>
                                                                <div class="row">
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                                                <div class="form-group">
                                                                                        <i class="ri-user-3-line"></i>
                                                                                        <input class="from-control"
                                                                                                type="text" id="name"
                                                                                                name="name"
                                                                                                placeholder="First Name"
                                                                                                required="">
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                                                <div class="form-group">
                                                                                        <i class="ri-user-3-line"></i>
                                                                                        <input class="from-control"
                                                                                                type="text"
                                                                                                id="last-name"
                                                                                                name="last-name"
                                                                                                placeholder="Last Name"
                                                                                                required="">
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                                                <div class="form-group">
                                                                                        <i class="ri-mail-line"></i>
                                                                                        <input class="from-control"
                                                                                                type="text" id="email"
                                                                                                name="email"
                                                                                                placeholder="E-Mail"
                                                                                                required="">
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                                                                <div class="form-group">
                                                                                        <i class="ri-phone-fill"></i>
                                                                                        <input class="from-control"
                                                                                                type="text" id="phone"
                                                                                                name="phone"
                                                                                                placeholder="Phone Number"
                                                                                                required="">
                                                                                </div>
                                                                        </div>
                                                                        <div class="col-lg-12 mb-30">
                                                                                <div class="form-group">
                                                                                        <i class="ri-edit-line"></i>
                                                                                        <textarea class="from-control"
                                                                                                id="message"
                                                                                                name="message"
                                                                                                placeholder="Write Your Message Here"
                                                                                                required=""></textarea>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="btn-part text-center">
                                                                        <div class="form-group mb-0">
                                                                                <input class="readon submit"
                                                                                        type="submit"
                                                                                        value="Submit Now">
                                                                        </div>
                                                                </div>
                                                        </fieldset>
                                                </form>
                                        </div>
                                </div>
                                <div class="col-lg-5 pl-50 md-pl-15">
                                        <div class="contact-info">
                                                <div class="sec-title mb-35 md-mb-15">
                                                        <h3 class="title title5 white-color">Contact Info</h3>
                                                </div>
                                                <div class="contact-item mb-30">
                                                        <h4 class="title">Address</h4>
                                                        <p class="desc">
                                                                Crushed Rock Industries Lifecamp, Abuja Nigeria
                                                        </p>
                                                </div>
                                                <div class="contact-item mb-30">
                                                        <h4 class="title">Call Us</h4>
                                                        <a href="tel:+00123456789">+234 816 540 9116</a>
                                                </div>
                                                {{-- <div class="contact-item">
                                                        <p class="desc">
                                                                For technical issues and general inquiries, Please visit
                                                                our<a href="#"> help center.</a>
                                                        </p>
                                                </div> --}}
                                        </div>
                                </div>
                        </div>
                </div>

        </div>
        <!-- Contact End -->
</div>

@stop