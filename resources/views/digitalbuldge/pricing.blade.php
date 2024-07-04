@include('digitalbuldge.head')

<body>
    <span class="formOverlaySide"></span>
    @include('digitalbuldge.header')
    <div class="boby-animation scrollContainer">
        <section class="main-packages main-animated-video">
            <div class="portfolio_animated_text">
                <h1 data-scroll data-scroll-direction="horizontal" data-scroll-speed="1">PRICING</h1>
            </div>
            <span class="pricing-icon">
                <img src="digitalbuldge/images/webp/pricing-after.html" alt="" class="img-fluid pricing-icon-1">
                <img src="digitalbuldge/images/webp/pricing-before.html" alt="" class="img-fluid pricing-icon-2">
            </span>
            <div class="container">
                <div class="heading">
                    <h4 data-scroll data-scroll-direction="vertical" data-scroll-speed=".2" data-scroll-delay="0.01">
                        Great Value,
                    </h4>
                    <h3 data-scroll data-scroll-direction="vertical" data-scroll-speed=".2" data-scroll-delay="0.01">
                        Upfront Pricing Packages
                    </h3>
                </div>
                <div class="pack-para">
                    <p>Select the package that's best for your business! </p>
                </div>
                <div class="row pack-responsive-slider">
                    @foreach($packages as $package)
                    <div class="col-lg-4">
                        <div class="main-pack-box" data-package-box>
                            <div class="pack-pricing">
                                <div class="pack-title">
                                    <div class="productSku" style="display: none;">{{ strtoupper(str_replace('', '_', 'ANIMATION_'.$package->title)) }}</div>
                                    <h3>{{ $package->title }}</h3>
                                </div>
                                <div class="pack-rates">
                                    <!-- <h3 class="cross-price"><sup>$</sup>0</h3> -->
                                    <h3 class="price"><sup>$</sup>{{ $package->discounted_price }}</h3>
                                </div>
                            </div>
                            <div class="pack-detail">
                                <div data-package-scroll>
                                    <ul class="listpacks">
                                        @foreach($package->services as $service)
                        <li><b>{{ $service->service }}</b></li>
                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="pack-button">
                                <a href="javascript:;" class="btn default-btn order-package"
                                    data-sku="ANIMATION_THE_EXECUTIVE" data-promotion-id="0" data-price="899"
                                    data-price-text="$899.00" data-title="The Executive" data-package-id="3659">
                                    <span>Order Now</span></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="main-cta">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="cta-text">
                            <h3>Ready For Your <span>Explainer Video?</span></h3>
                            <p>Expert Advice. Proven Results. Custom Artwork.</p>
                            <div class="cta-btn-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:;" data-toggle="modal" data-target=".bd-example-modal-lg"
                                            class="cta-btn btn default-btn"> <span>Let's Animate >>></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="chatt">
                                            <div class="mobile-chat"><i class="fas fa-comments"></i></div>
                                            <div class="cta-btn cta-chat default-btn"> <span>Live Chat</span> </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="tel:+1 (877) 818-9110">
                                            <div class="mobile-chat"><i class="fas fa-phone"></i></div>
                                            <div class="cta-number">Call Us: <br><span>+1 (877) 818-9110</span></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cta-right">
                <img src="digitalbuldge/images/webp/mobile.html" alt="" class="img-fluid cta-mobile">
                <img src="digitalbuldge/images/webp/mobile-hand.html" alt="" class="img-fluid cta-mobile-hand">
                <img src="digitalbuldge/images/webp/mobile-icon-1.html" alt=""
                    class="mobile-video-icons cta-mobile-icon-1">
                <img src="digitalbuldge/images/webp/mobile-icon-2.html" alt=""
                    class="mobile-video-icons cta-mobile-icon-2">
                <img src="digitalbuldge/images/webp/mobile-icon-3.html" alt=""
                    class="mobile-video-icons cta-mobile-icon-3">
                <img src="digitalbuldge/images/webp/mobile-icon-4.html" alt=""
                    class="mobile-video-icons cta-mobile-icon-4">
                <img src="digitalbuldge/images/webp/mobile-icon-5.html" alt=""
                    class="mobile-video-icons cta-mobile-icon-5">
                <img src="digitalbuldge/images/webp/mobile-icon-6.html" alt=""
                    class="mobile-video-icons cta-mobile-icon-6">
            </div>
        </section>
        <section class="main-client">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5 col-md-7">
                        <div class="client-text">
                            <h3>Our <span>Clients</span></h3>
                            <p>We’ve worked with some very awesome people in some very achieving companies. We help them
                                grow their business better, develope fast, and lead with credibility.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="client-img">
                            <img src="digitalbuldge/images/webp/client-img.html" alt="" class="img-fluid">
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

<!-- Mirrored from www.codenanimations.com/pricing by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Jul 2024 18:23:20 GMT -->

</html>
