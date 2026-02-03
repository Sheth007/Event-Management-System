@if (session('admin_email'))
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin | Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Admin Dashboard</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('totalUsers') }}">Users Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('displayallevents') }}">Total Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('viewall.Category') }}">Category Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('displyall.registrations') }}">Total Registrations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout.controller') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-5">
            <h2>Welcome to the Admin Dashboard</h2>
            <p>Here you can manage users, events, categories, and more.</p>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    </html>
@else
    <div class="container mt-5">
        <div class="alert alert-info text-center" role="alert">
            <h3>Please <a href="{{ route('adminLogin') }}" class="btn btn-primary">Login</a> to access the Admin Dashboard
            </h3>
        </div>
    </div>

@endif