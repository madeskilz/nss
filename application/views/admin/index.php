<?php $this->load->view("admin/inc/header") ?>
<?php $this->load->view("admin/inc/page-top") ?>
<div class="row">
    <div class="col-md-6">
        <div class="card mb-3 widget-content bg-midnight-bloom">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Products</div>
                    <div class="widget-subheading">Total products count</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span><?=count($products)?></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Services</div>
                    <div class="widget-subheading">Total services offered</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span><?= count($services) ?></span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">All Products
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($products) > 0) {
                            $x = 1;
                            foreach ($products as $product) { ?>
                                <tr>
                                    <td class="text-center text-muted"><?= $x ?></td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading"><?= $product->name ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="badge badge-primary">active</div>
                                    </td>
                                </tr>
                            <?php $x++;
                            }
                        } else { ?>
                            <tr>
                                <td class="text-center text-muted" colspan="3">No Records Found</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("admin/inc/footer") ?>