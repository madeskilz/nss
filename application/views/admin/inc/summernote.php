<link href="<?= base_url("/assets/plugin/summernote/summernote.css") ?>" rel="stylesheet">
<script src="<?= base_url("/assets/plugin/summernote/summernote.min.js") ?>"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            placeholder: 'write here...',
            toolbar: [
                ["style", ["style"]],
                ["font", ["bold", "underline", "italic"]],
                ["para", ["ul", "ol", "paragraph"]]
            ],
        });
    });
</script>