<?php $this->load->view("home/inc/head") ?>
<?php $this->load->view("home/inc/innerpage") ?>
<div class="container text-center">
    <div class="col-md-7 mx-auto">
        <i class="icon ion-ios-bug display-1 text-danger"></i>
        <div class="space-20"></div>
        <div class="error-text">
            <h3>Error 404 - Page not found</h3>
            <p class="mb-5">
                The page you're looking for is not found, Please try later
            </p>
            <a href="<?=base_url()?>" class="btn btn-secondary btn-radius">Back to Home</a>
        </div>
    </div>
</div>
<?php $this->load->view("home/inc/foot") ?>