<script>
    @if(session('signed'))
    swal('Signed In!', 'Hello {{Auth::user()->name}}! Anda telah masuk.', 'success');

    @elseif(session('expire'))
    swal('Authentication Required!', '{{ session('expire') }}', 'error');

    @elseif(session('logout'))
    swal('Signed Out!', '{{ session('logout') }}', 'warning');

    @elseif(session('warning'))
    swal('ATTENTION!', '{{ session('warning') }}', 'warning');

    @elseif(session('status'))
    swal('Reset Password Success!', '{{ session('status') }}', 'success', '3500');

    @elseif(session('add'))
    swal('Profile Settings', '{{ session('add') }}', 'success');

    @elseif(session('update'))
    swal('Success!', '{{ session('update') }}', 'success');

    @elseif(session('delete'))
    swal('Success!', '{{ session('delete') }}', 'success');

    @elseif(session('error'))
    swal('Profile Settings', '{{ session('error') }}', 'error');
    @endif

    @if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    swal('Oops..!', '{{ $error }}', 'error');
    @endforeach
    @endif
</script>
