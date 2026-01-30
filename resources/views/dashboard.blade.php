@if (session('admin_email'))

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin | Dashboard</title>
    </head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        h2,
        p {
            margin: 10px;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333333;
        }

        ul li {
            float: left;
        }

        ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        ul li a:hover {
            background-color: #111111;
        }
    </style>

    <body>
        <nav>
            <ul>
                <li><a href="{{ route('totalUsers') }}">Users Management</a></li>
                <li><a href="{{ route('displayallevents') }}">Total Events</a></li>
                <li><a href="{{ route('viewall.Category') }}">Category Management</a></li>
                <li><a href="{{ route('displyall.registrations') }}">Total Registrations</a></li>
                {{-- <li><a href="#about">Recent events & registrations summary</a></li> --}}
                <li><a href="{{ route('logout.controller') }}">Logout</a></li>
            </ul>
        </nav>
    </body>

    </html>
@else
    <center>
        <h1>Try this 👉: <a href="{{ route('adminLogin') }}">Login</a></h1>
    </center>

@endif