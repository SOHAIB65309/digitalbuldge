@include('digitalbuldge.head')

<body>
    <span class="formOverlaySide"></span>
    @include('digitalbuldge.header')
    <div class="boby-animation scrollContainer">
        <section class="contact-us main-animated-video">
            <img src="images/webp/inner-banner/2d-animation-3.html" alt=""
                class="img-fluid animation-icon-top-1">
            <img src="images/webp/inner-banner/2d-animation-4.html" alt=""
                class="img-fluid animation-icon-top-2">
            <img src="images/webp/inner-banner/contact-icon-1.html" alt=""
                class="img-fluid animation-icon-bottom-1 contact-animation-1">
            <img src="images/webp/inner-banner/2d-animation-3.html" alt=""
                class="img-fluid animation-icon-bottom-2 contact-animation-2">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="heading-wrapper">
                            <div class="contact-heading ">
                                <h1>Ready For Take Off</h1>
                            </div>
                            <div class="con-head">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12 ml-lg-5">
                        <div class="contact-info" data-form-type="contact_form">
                            <p>'We' is powerful! Let’s get your video animated with the best animators of the industry.
                            </p>
                            <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 col-12">
                                        <input name="name" placeholder="Full Name" type="text"
                                            data-validation="required">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-12">
                                        <input maxlength="12" name="phone" placeholder="Phone Number"
                                            type="text" data-validation="required">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-12">
                                        <input name="email" placeholder="Email Address" type="text"
                                            data-validation="required">
                                    </div>
                                    <div class="col-lg-6 col-sm-12 col-12">
                                        <input placeholder="Company" name="company" type="text">
                                    </div>
                                    <div class="col-lg-12 col-sm-12 col-12">
                                        <textarea type="text" class="form-control w-100" cols="8" name="message"
                                            placeholder="Massage" rows="1"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 col-12">
                                        <div id="formResult"></div>
                                        <div class="clearfix"></div>
                                        <button type="submit" id="signupBtn"class="contact-btn default-btn btn"><span>Submit</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('digitalbuldge.footer')
    </div>
    @include('digitalbuldge.contact_form')

    @include('digitalbuldge.jsincludes')
</body>

<!-- Mirrored from www.codenanimations.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 18:23:22 GMT -->

</html>
