<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("admin/inc/page-top") ?>
<div class="shop-checkout">
    <form class="checkout-form" id="checkoutForm" method="post">
        <div class="row">
            <div class="col-md-12">
                <h6 class="heading-mini">Fill the form below</h6>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Product Name*" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Details</label>
                            <textarea name="details" class="form-control summernote" placeholder="Details" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary float-right">
                    Add Product
                </button>
            </div>
            <!--checkout col left end-->
        </div>
    </form>
    <!--end form-->
</div>
<?php $this->load->view("admin/inc/footer") ?>
<?php $this->load->view("admin/inc/summernote") ?>