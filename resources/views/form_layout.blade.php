<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Include Bootstrap CSS -->
    <link nonce="{{ csp_nonce() }}" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include SweetAlert CSS -->
    <link nonce="{{ csp_nonce() }}" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>@yield('title', 'Form')</h2>
            </div>
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script nonce="{{ csp_nonce() }}" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script nonce="{{ csp_nonce() }}" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script nonce="{{ csp_nonce() }}" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include SweetAlert JS -->
    <script nonce="{{ csp_nonce() }}" src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script nonce="{{ csp_nonce() }}" src="{{ asset('js/custom.js') }}"></script>
    <script nonce="{{ csp_nonce() }}">
        @if(session('success'))
            Swal.fire({
                position: 'top-end',
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Cool',
                toast: true,
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        @endif

        @if(session('error'))
            Swal.fire({
                position: 'top-end',
                title: 'Error!',
                text: '{{ session('error') }}',
                icon: 'error',
                confirmButtonText: 'Okay',
                toast: true,
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        @endif
    </script>
</body>
</html>