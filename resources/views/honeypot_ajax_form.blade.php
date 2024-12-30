@extends('form_layout')

@section('title', 'AJAX Form')

@section('content')
    <form id="ajaxForm" method="POST">
        @csrf
        @honeypot
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#ajaxForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '{{ route('form.submit') }}',
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        Swal.fire({
                            position: 'top-start',
                            title: 'Success!',
                            text: response.message,
                            icon: 'success',
                            confirmButtonText: 'Cool',
                            toast: true,
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        });
                    },
                    error: function(response) {
                        Swal.fire({
                            position: 'top-start',
                            title: 'Error!',
                            text: response.responseJSON.message,
                            icon: 'error',
                            confirmButtonText: 'Okay',
                            toast: true,
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        });
                    }
                });
            });
        });
    </script>
@endsection