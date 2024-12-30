<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Bootstrap CSS -->
    <link nonce="{{ csp_nonce() }}" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Laravel Live Surat December 2024 Chapter</h1>
            <hr class="my-4">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="{{ route('form', ['form_type' => 'simple_form']) }}" class="btn btn-primary btn-lg">Simple Form</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('form', ['form_type' => 'honeypot_form']) }}" class="btn btn-primary btn-lg">Honeypot Form</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ route('form', ['form_type' => 'honeypot_ajax_form']) }}" class="btn btn-primary btn-lg">Honeypot Ajax Form</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script nonce="{{ csp_nonce() }}" src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script nonce="{{ csp_nonce() }}" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script nonce="{{ csp_nonce() }}" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>