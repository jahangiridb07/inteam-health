<?php
@include_once('header.php')
?>
        <!-- PAGE TITLE
        ================================================== -->
        <section class="top-position1 py-0">
            <div class="page-title-section bg-img cover-background left-overlay-dark" data-overlay-dark="7" data-background="img/bg/bg-03.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Contact Us</h1>
                            <div class="breadcrumb">
                                <ul>
                                    <li><a href="index-2.html">Home</a></li>
                                    <li><a href="#!">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="page-title-shape1 d-none d-sm-block"></span>
            <span class="page-title-shape2 d-none d-sm-block"></span>
            <div class="d-inline-block p-2 border-secondary border border-width-2 position-absolute left-5 bottom-10 bottom-sm-25 ani-left-right z-index-1"></div>
            <div class="d-inline-block p-2 bg-secondary rounded-circle position-absolute right-40 top-25 ani-move z-index-1"></div>
        </section>

        <!-- CONTACT FORM
        ================================================== -->
        <section>
            <div class="container">
                <div class="section-heading">
                    <span class="subtitle">Send Us Message</span>
                    <h2>Stay Conected <span class="font-weight-400">With Us</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-xl-6 mx-auto">
                        <div class="p-1-9 p-md-5-6">
                            <div class="section-heading">
                                <h2>Get In <span class="font-weight-400">Touch</span></h2>
                            </div>
                            <div class="card border-color-extra-light-gray border-radius-10 mb-4">
                                <div class="card-body p-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-map-marker-alt contact-icon-box mb-0"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4">Location</h3>
                                            <p class="mb-0 w-sm-80 display-md-28">66 Guild Street 512B, Great North Town.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-color-extra-light-gray border-radius-10 mb-4">
                                <div class="card-body p-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-phone-alt contact-icon-box mb-0"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4">Phone</h3>
                                            <p class="mb-1 display-md-28">(+44) 123 456 789</p>
                                            <p class="mb-0 display-md-28">(+44) 152-567-987</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-color-extra-light-gray border-radius-10">
                                <div class="card-body p-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="far fa-envelope contact-icon-box mb-0"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-4">
                                            <h3 class="h4">Email</h3>
                                            <p class="mb-1 display-md-28">info@example.com</p>
                                            <p class="mb-0 display-md-28">info@domain.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 mx-auto">
                        <div class="p-1-9 p-md-5 border border-color-extra-light-gray border-radius-10">
                            <form class="contact quform" action="" method="post" enctype="multipart/form-data" onclick="">
                                <div class="quform-elements">
                                    <div class="row">
                                        <h2 class="mb-4 h3">Or use this contact form:</h2>
                                        <!-- Begin Text input element -->
                                        <div class="">
                                            <div class="quform-element form-group">
                                                <label for="name">Full Name <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="name" type="text" name="name" placeholder="Your Full Name">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="">
                                            <div class="quform-element form-group">
                                                <label for="email">Email <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="email" type="text" name="email" placeholder="Your Email Address">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group quform-select-replaced">
                                                <label for="subject">Phone <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="subject" type="text" name="subject" placeholder="Your Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Text input element -->
                                        <div class="col-md-6">
                                            <div class="quform-element form-group">
                                                <label for="phone">Company</label>
                                                <div class="quform-input">
                                                    <input class="form-control" id="phone" type="text" name="phone" placeholder="Your Company Name">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Text input element -->

                                        <!-- Begin Textarea element -->
                                        <div class="col-md-12">
                                            <div class="quform-element form-group">
                                                <label for="message">Message <span class="quform-required">*</span></label>
                                                <div class="quform-input">
                                                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Your message for us"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Textarea element -->

                                        <!-- Begin Captcha element -->
                                        <!-- <div class="col-md-12">
                                            <div class="quform-element">
                                                <div class="form-group">
                                                    <div class="quform-input">
                                                        <input class="form-control" id="type_the_word" type="text" name="type_the_word" placeholder="Type the below word">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="quform-captcha">
                                                        <div class="quform-captcha-inner">
                                                            <img src="quform/images/captcha/courier-new-light.png" alt="...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                        <!-- End Captcha element -->

                                        <!-- Begin Submit button -->
                                        <div class="col-md-12">
                                            <div class="quform-submit-inner">
                                                <button class="butn" type="submit">Send Message</button>
                                            </div>
                                            <div class="quform-loading-wrap text-start"><span class="quform-loading"></span></div>
                                        </div>
                                        <!-- End Submit button -->

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/content/line-01.png" class="position-absolute top-15 right-5 ani-top-bottom d-none d-sm-inline-block" alt="...">
            <div class="d-inline-block p-2 border-secondary border border-width-2 position-absolute left-5 bottom-25 ani-left-right"></div>
            <div class="d-inline-block p-2 bg-secondary rounded-circle position-absolute left-10 top-25 ani-move"></div>
        </section>

        <!-- CONTACT INFO
        ================================================== -->
        <!-- <section class="p-0 bg-light">
            <div class="row p-0">
                <div class="col-lg-6 col-xxl-4 p-0">
                    <div class="p-1-6 p-sm-6 p-lg-8">
                        <div class="section-heading">
                            <span class="subtitle">Contacts</span>
                            <h2>Get In <span class="font-weight-400">Touch</span></h2>
                        </div>
                        <div class="card border-color-extra-light-gray border-radius-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-map-marker-alt contact-icon-box mb-0"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h3 class="h4">Location</h3>
                                        <p class="mb-0 w-sm-80 display-md-28">66 Guild Street 512B, Great North Town.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-color-extra-light-gray border-radius-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-phone-alt contact-icon-box mb-0"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h3 class="h4">Phone</h3>
                                        <p class="mb-1 display-md-28">(+44) 123 456 789</p>
                                        <p class="mb-0 display-md-28">(+44) 152-567-987</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-color-extra-light-gray border-radius-10">
                            <div class="card-body p-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <i class="far fa-envelope contact-icon-box mb-0"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-4">
                                        <h3 class="h4">Email</h3>
                                        <p class="mb-1 display-md-28">info@example.com</p>
                                        <p class="mb-0 display-md-28">info@domain.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-8 p-0">
                    <iframe class="map-h800" id="gmap_canvas" src="https://maps.google.com/maps?q=london&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
                </div>
            </div>
        </section> -->



<?php
@include_once('footer.php')
?>