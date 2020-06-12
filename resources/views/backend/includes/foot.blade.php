
<!-- Mainly scripts -->

<script src="{{asset('/')}}backend/js/jquery.metisMenu.js"></script>

<script src="{{asset('/')}}backend/js/custom.js"></script>
<script type="text/javascript" src="{{asset('/')}}backend/datatable/datatables.min.js"></script>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote-bs4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#description').summernote();
        $('#tdescription').summernote();
    });
</script>


@yield('scripts')
