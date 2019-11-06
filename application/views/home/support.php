<?php $this->load->view("home/inc/head") ?>
<?php $this->load->view("home/inc/innerpage") ?>
<div class="space-70"></div>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h4 class="mb-5">We’d Love to Hear From You</h4>
            <p>Get in touch using the contact details below:</p>
            <p>530A, Aina Akingbala Street,</p>
            <p>Omole Phase II, </p>
            <p>Ikeja, Lagos, NG</p>
            <p>Phone: +234 810 552 9574</p>
            <p>Email: <a href="mailto:info@northsouthsecurity.net">info@northsouthsecurity.net</a></p>
        </div>
        <div class="col-md-6 ml-auto">
            <h4 class="mb-5">Contact us</h4>
            <div class="my-contact-form">
                <form name="sentMessage" id="contactForm" method="post" novalidate="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row control-group">
                                <div class="form-group col-sm-12 controls">

                                    <input type="text" class="form-control" placeholder="Name*" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="row control-group">
                                <div class="form-group col-sm-12 controls">
                                    <input type="email" class="form-control" placeholder="Email Address*" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-sm-12">
                            <input type="text" class="form-control" placeholder="Subject" id="phone">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-sm-12 controls">
                            <textarea rows="5" class="form-control" placeholder="Message*" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-sm-12 text-right" style="margin-top: -15px;">
                            <button type="submit" class="btn theme-btn-color btn-lg">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("home/inc/foot") ?>