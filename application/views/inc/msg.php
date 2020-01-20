<link href="<?= base_url("assets/plugin/toastr/toastr.min.css") ?>" rel="stylesheet" />
<script src="<?= base_url("assets/plugin/toastr/toastr.min.js") ?>"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
<?php if ($this->session->flashdata('success_msg')) : ?>
    <script>
        toastr.success('<?= $this->session->flashdata('success_msg') ?>')
    </script>
    <?php unset($_SESSION['success_msg']); ?>
<?php endif; ?>
<?php if ($this->session->flashdata('error_msg')) : ?>
    <script>
        toastr.error('<?= $this->session->flashdata('error_msg') ?>')
    </script>
    <?php unset($_SESSION['error_msg']); ?>
<?php endif; ?>
<?php if ($this->session->flashdata('msg')) : ?>
    <script>
        toastr.info('<?= $this->session->flashdata('msg') ?>')
    </script>
    <?php unset($_SESSION['msg']); ?>
<?php endif; ?>