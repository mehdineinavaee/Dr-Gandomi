@extends('layouts.app')
@section('title', 'تماس با ما')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area bg-26">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact</h2>

                <ul>
                    <li>
                        <a href="index.html">
                            Home 
                        </a>
                    </li>

                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Info Area -->
    <section class="contact-info-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="map-area">
                        <iframe src="javascript:if(confirm('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3077.5968400730185!2d-119.76188708437041!3d39.523588017394154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80993f3dfa5eeaf5%3A0x70954ca5a06c2014!2s1312%20Greg%20St%2C%20Sparks%2C%20NV%2089431%2C%20USA!5e0!3m2!1sen!2sbd!4v1615354573837!5m2!1sen!2sbd\n\nThis file was not retrieved because it was filtered out by your project settings.\n\nWould you like to open it from the server?'))window.location='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3077.5968400730185!2d-119.76188708437041!3d39.523588017394154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80993f3dfa5eeaf5%3A0x70954ca5a06c2014!2s1312%20Greg%20St%2C%20Sparks%2C%20NV%2089431%2C%20USA!5e0!3m2!1sen!2sbd!4v1615354573837!5m2!1sen!2sbd'"></iframe>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info">
                        <h2>Get in touch</h2>

                        <ul class="address">
                            <li class="location">
                                <i class="ri-map-pin-2-fill"></i>
                                <span>Address</span>
                                1312 Greg Street, Sparks. NV 88441
                            </li>
                            <li>
                                <i class="ri-mail-line"></i>
                                <span>Email</span>
                                <a href="../../cdn-cgi/l/email-protection.htm#4c25222a230c39222f23622f2321"><span class="__cf_email__" data-cfemail="c8a1a6aea788bda6aba7e6aba7a5">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <i class="ri-phone-fill"></i>
                                <span>Phone</span>
                                <a href="tel:+1-(514)-312-5678">+1 (514) 312-5678</a>
                            </li>
                        </ul>

                        <h3>Follow Us</h3>

                        <ul class="social-link">
                            <li>
                                <a href="index.htm#" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.htm#" target="_blank">
                                    <i class="ri-instagram-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.htm#" target="_blank">
                                    <i class="ri-linkedin-box-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="index.htm#" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Send us a quick message</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis ut nostrum, quibusdam, voluptatum eaque illo cum, aperiam accusantium reprehenderit</p>
            </div>
            
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group checkboxs">
                            <input type="checkbox" id="chb2">
                            <p>
                                Accept <a href="terms-conditions.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn">
                            <span>Send message</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection
