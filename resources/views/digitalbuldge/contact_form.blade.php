<section class="floating_wrap">
    <div class="float_form_box">
        <div class="floating_form">
            <div class="floating_strip">
                <div class="rotatekaro">
                    <a href="javascript:;" class="">
                        <p>GET FREE <br>QUOTE</p>
                    </a>
                </div>
            </div>
            <div class="floating_inner">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="sidebar_text">
                            <h2><span>75%</span> OFF ON ALL SERVICES</h2>
                            <p>Fill out this brief form to get your</p>
                            <h3>DISCOUNT RESERVED.</h3>
                            <div class="sidebar_text_img">
                                <img src="digitalbuldge/images/webp/sidebar-img.html" alt=""
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form_wrap" data-form-type="sidebar_form">
                            <form   action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Your Name" name="name" required>
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Phone Number" name="phone" maxlength="11" required>
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Company" name="company">
                                        </div>
                                        <div class="col-md-12 col-xs-12">
                                            <textarea class="form-control" placeholder="Message" name="message" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-12 col-xs-12 text-center">
                                            <div id="formResult"></div>
                                            <button class="btn default-btn lets-btn btn-quote" type="submit"><span>RESERVE YOUR DISCOUNT</span></button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="popup_form">
    <div class="container">
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
            aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-popup-wrap">
                                <div class="popup-img-wrap">
                                    <div id="lottieAnm"></div>
                                </div>
                                <div class="popup-text-wrap" data-form-type="popup_form">
                                    <h3>Let's Get Started With <br><span>Your Animation!</span></h3>
                                    <p>Fill in the details for FREE consultation</p>
                                    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="popup-input-form">
                                                    <input name="name" class="form-control"
                                                        placeholder="Full Name" type="text"
                                                        data-validation="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="popup-input-form">
                                                    <input name="email" class="form-control"
                                                        placeholder="Email Address" type="text"
                                                        data-validation="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="popup-input-form">
                                                    <input maxlength="12" class="form-control" name="phone"
                                                        placeholder="Phone Number" type="text"
                                                        data-validation="required">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="popup-input-form">
                                                    <input name="message" class="form-control"
                                                        placeholder="Message" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="popup-button-form">
                                                    <div id="formResult"></div>
                                                    <div class="clearfix"></div>
                                                    <button type="submit" id="signupBtn"
                                                        class="contact-btn default-btn btn"><span>Let's
                                                            Animate</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
