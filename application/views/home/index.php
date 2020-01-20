<?php $this->load->view("home/inc/head") ?>
<section class="hero-fullscreen">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 col-lg-6 ml-auto col-md-6 col-sm-7 col-12">
                <div id="typed-strings">
                    <span>Safe & Secured</span>
                    <span>Agility</span>
                    <span>Guaranteed Protection</span>
                </div>
                <h5 class="bringUp mb-4 text-light">We're NorthSouth Security</h5>
                <h3 class="bringUp type-wrap">We stand for
                    <span id="typed" class="type-text"></span>
                </h3>
                <p class="bringUp subtitle text-white mb-4">
                    <em>NorthSouth Security...</em> Your Safety, Our Priority
                </p>
                <div class="bringUp buttons pt-3">
                    <a href="<?= base_url("about") ?>" class="btn btn-white btn-radius mr-2 mb-2">Learn more</a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-4 col-12">
                <img src="assets/img/sec-guard.png" alt="" class="img-fluid type-img">
            </div>
        </div>
    </div>
</section>
<div class="space-70"></div>
<div class="container">
    <div class="col-md-12 text-center">
        <h3 class="heading-sec mb-4">About Us</h3>
        <h3 class="subtitle">Security Company You Can Trust</h3>
    </div>
    <div class="space-40"></div>
    <div class="row">
        <div class="col-md-6 margin-btm-20">
            <h4 class="heading-mini">Our Skills</h4>
            <h3 class="heading-progress">Customer Service <span class="pull-right">98%</span></h3>
            <div class="progress">
                <div class="progress-bar bg-warning" style="width: 98%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="98" role="progressbar">
                </div>
            </div>
            <h3 class="heading-progress">Professionalism <span class="pull-right">99%</span></h3>
            <div class="progress">
                <div class="progress-bar bg-warning" style="width: 99%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="99" role="progressbar">
                </div>
            </div>
            <h3 class="heading-progress">Agility <span class="pull-right">98%</span></h3>
            <div class="progress">
                <div class="progress-bar bg-warning" style="width: 98%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="98" role="progressbar">
                </div>
            </div>
        </div>
        <div class="col-md-6 hire-sec">
            <h4 class="heading-mini">Why choose us?</h4>
            <div class="row">
                <div class="col-lg-3 col-md-4 services-icon">
                    <i class="icon ion-ios-ribbon"></i>
                </div>
                <div class="col-lg-9 col-md-8 services-text">
                    <h4 class="heading-mini">Affordability</h4>
                    <p>
                        We have a very competitive pricing structure, which means our quality Security
                        services don’t cost the earth for any business!
                    </p>
                </div>
            </div>
            <div class="space-20"></div>
            <div class="row">
                <div class="col-lg-3 col-md-4 services-icon">
                    <i class="icon ion-ios-walk"></i>
                </div>
                <div class="col-lg-9 col-md-8 services-text">
                    <h4 class="heading-mini">Smart & Presentable</h4>
                    <p>
                        We help create a good first impression for your business. Our security
                        officers are friendly, polite, courteous, and helpful.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="space-70"></div>
<div class="container pt-4">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="heading-sec mb-4">What we offer</h3>
            <h3 class="subtitle">You deserve a topnotch service</h3>
        </div>
        <div class="space-40"></div>
        <div class=" col-md-4">
            <div class="services-box">
                <i class="icon ion-ios-body"></i>
                <h4>Private Security</h4>
            </div>
        </div>
        <div class=" col-md-4">
            <div class="services-box">
                <i class="icon ion-ios-contacts"></i>
                <h4>Manned Security</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="services-box">
                <i class="icon ion-ios-home"></i>
                <h4>Home Security</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="services-box">
                <i class="icon ion-ios-person"></i>
                <h4>Security Consultancy & Training</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="services-box">
                <i class="icon ion-ios-finger-print"></i>
                <h4>Forensic Analysis</h4>
            </div>
        </div>
        <div class="col-md-4">
            <div class="services-box">
                <i class="icon ion-ios-videocam"></i>
                <h4>247 Cyber Surveillance</h4>
            </div>
        </div>
    </div>
</div>
<div class="space-70"></div>
<div class="cta-bg">
    <div class="container text-center">
        <h3>What are you waiting for?
            <a href="<?=base_url("support")?>" class="btn btn-lg btn-white btn-radius my-3">Contact Now</a>
        </h3>
    </div>
</div>
<section id="content-region-1" class="padd-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 ml-auto features my-2">
                <h2>Our Security Team</h2>
                <p class="mb-4">
                    Our team of security officers are fully trained and have a wealth of knowledge and experience to always keep you safe.
                </p>
                <a href="<?= base_url("about") ?>" class="btn theme-btn-default btn-radius">Learn More</a>
            </div>
            <div class="col-md-5 mr-auto my-2">
                <img src="assets/img/uniform.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<?php $this->load->view("home/inc/partners") ?>
<?php $this->load->view("home/inc/foot") ?>
<script>
    var typed = new Typed('#typed', {
        stringsElement: '#typed-strings',
        loop: true,
        typeSpeed: 70,
        backDelay: 1000,
        shuffle: true
    });
</script>