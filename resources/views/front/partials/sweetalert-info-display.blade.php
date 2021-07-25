@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 4000
        })
    </script>
@endif


@if ($message = Session::get('error'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif


@if ($message = Session::get('warning'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'warning',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif


@if ($message = Session::get('info'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'info',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif

{{--
@if ($errors->any())
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'danger',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif--}}
