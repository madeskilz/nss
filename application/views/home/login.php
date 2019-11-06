<?php $this->load->view("home/inc/head") ?>
<?php $this->load->view("home/inc/innerpage") ?>
<div class="space-70"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-6  ml-auto mr-auto">
            <div class="my-login-form">
                <form>
                    <h4 class="text-uppercase">Login</h4>
                    <hr>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email..">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password..">
                    </div>
                    <div class=" text-right">
                        <button type="submit" class="btn theme-btn-color">Login</button>
                    </div>
                    <hr>
                    <div class="form-btm-link text-center">
                        <a href="#">Lost password?</a><span>Or</span><a href="signup.html">Create new account</a>
                    </div>
                </form>
                <!--login form end-->
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("home/inc/foot") ?>