<script>
    @if($errors->any())
        swal('validation errors','{{ $errors->first() }}','warning');

    @endif

    @if(Session::has('success'))

        swal('success','{{ Session::get('success') }}','success');

    @endif
</script>

