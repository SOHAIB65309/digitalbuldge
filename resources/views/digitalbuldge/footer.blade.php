<section class="footer-form">
    <div class="container">
        <div class="footer-form-wrapper" data-form-type="footer_form">
            <h3>Let's Get Your <span>Great</span></h3>
            <h4>Video Animated</h4>
            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <div class="form-group tab" style="display: block;">
                        <input class="form-control" data-validation="required" name="name"
                            placeholder="Enter Your Name" type="text">
                    </div>
                    <div class="form-group tab">
                        <input class="form-control" data-validation="required" name="email"
                            placeholder="Enter Your Email" type="text">
                    </div>
                    <div class="form-group tab">
                        <input class="form-control" maxlength="20" data-validation="required" name="phone"
                            placeholder="Enter Your Phone No" type="text">
                    </div>
                    <div class="form-group tab">
                        <input class="form-control" data-validation="required" name="message" placeholder="Enter Your Message">
                    </div>
                    <div class="form_btn_wrap">
                        <button class="banner_form_btn" id="prevBtn" onclick="nextPrev(-1)"
                            style="display: none;" type="button">Previous</button>
                        <button class="banner_form_btn" id="nextBtn" onclick="nextPrev(1)"
                            style="display: inline;" type="button"> Next</button>
                        <button class="learn-more-tab" id="signupBtn2" name="signupForm"
                            style="display: none;" type="submit" value="1">Submit</button>
                    </div>
                    <div id="formResult"></div>
                </div>
            </form>
            <div class="footer-client-logo">
                <img src="images/webp/footer-client-logo.html" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-top-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo-box">
                        <img src="digitalbuldge/images/webp/footer-logo.html" alt=""
                            class="img-fluid">
                        <div class="footer-btn">
                            <a href="javascript:;" class="btn default-btn chatt">
                                <span>
                                    Live Chat
                                    <div class="btn-icon"><i class="fas fa-chevron-right"></i><i
                                            class="fas fa-chevron-right"></i><i
                                            class="fas fa-chevron-right"></i></div>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('pricing')}}">Pricing</a></li>
                            <li><a href="{{url('portfolio')}}">Portfolio</a></li>
                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{url('whiteboard-animation')}}">Whiteboard Animation</a></li>
                            <li><a href="{{url('2d-animation')}}">2D Animation</a></li>
                            <li><a href="{{url('3d-animation')}}">3D Animation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{url('motion-graphic')}}">Motion Graphic</a></li>
                            <li><a href="{{url('logo-animation')}}">Logo Animation</a></li>
                            <li><a href="{{url('explainer-video')}}">Expaliner Video </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="footer-address">
                        <ul>
                            <li>
                                <span>Call Us:</span>
                                <a href="tel:+1 (877) 818-9110">+1 (877) 818-9110</a>
                            </li>
                            <li>
                                <span>Email Address:</span>
                                <a href="mailto:info@codenanimations.com">info@codenanimations.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="footer-bottom-text">
                        <p>© 2024 CodenAnimations, All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="footer-bottom-privacy">
                        <ul>
                            <li><a href="{{url('privacy')}}">Privacy & Security</a></li>
                            <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>