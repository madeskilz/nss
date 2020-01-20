<?php $this->load->view("home/inc/head") ?>
<?php $this->load->view("home/inc/innerpage") ?>
<div class="space-70"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-6  ml-auto mr-auto">
            <div class="my-login-form">
                <form method="post">
                    <h4 class="text-uppercase">Login</h4>
                    <hr>
                    <div class="form-group">
                        <input type="text" name="login" class="form-control" placeholder="Email..">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password..">
                    </div>
                    <div class=" text-right">
                        <span style="float:left"><a href="#">Lost password?</a></span><button type="submit" class="btn theme-btn-color">Login</button>
                    </div>
                </form>
                <!--login form end-->
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("home/inc/foot") ?>
<?php $this->load->view("inc/msg") ?>