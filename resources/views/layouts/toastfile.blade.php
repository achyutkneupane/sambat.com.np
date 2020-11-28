<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    toastr.options.closeButton = true;
    toastr.options.showMethod = 'slideDown';
    toastr.options.hideMethod = 'slideUp';
    toastr.options.closeMethod = 'slideUp';
    toastr.options.progressBar = true;
    @if(count($errors)>0)
    @foreach ($errors->all() as $error)
    toastr.error("{{ $error }}");
    @endforeach
    @endif
    @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif
    @if (Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif
</script>

