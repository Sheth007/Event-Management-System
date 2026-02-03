<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Event Registration</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    body {
        /* transform: scale(0.9); */
        font-family: Arial, sans-serif;
    }

    .table td {
        background-color: aliceblue;
        padding: 12px;
        text-align: center;
    }

    h1 {
        font-size: 2rem;
        font-weight: bold;
        color: #343a40;
        margin-top: 20px;
    }

    .container {
        margin-top: 30px;
    }

    .btn-custom {
        margin-top: 10px;
    }

    .pagination {
        justify-content: center;
    }
</style>

<body>
    @if (session('admin_email'))
        <div class="container">
            <center>
                <h1>Admin | Event Registration</h1>

                <!-- Navigation Buttons -->
                <a href="{{ route('recent.event.and.regi') }}" class="btn btn-info btn-custom">View Recent Events</a>
                &nbsp;&nbsp;&nbsp;
                <a href="{{ route('export') }}" class="btn btn-success btn-custom">Export Data</a>
                <br><br>

                <!-- Event Filter Form -->
                <form action="{{ route('filter.events') }}" method="post" class="mb-4">
                    <span>Filter by events: </span>
                    @csrf
                    <select name="event" id="event" class="form-select w-auto d-inline">
                        <option value=""></option>
                        <option name="event" value="1">Workshop</option>
                        <option name="event" value="2">Webinar</option>
                        <option name="event" value="3">Conference</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>

                <!-- Registration Table -->
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">User ID</th>
                            <th scope="col">Event ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registration as $reg)
                            <tr>
                                <td>{{ $reg->id }}</td>
                                <td>{{ $reg->user_id }}</td>
                                <td>{{ $reg->event_id }}</td>
                                <td>{{ $reg->name }}</td>
                                <td>{{ $reg->email }}</td>
                                <td>{{ $reg->phone }}</td>
                                <td>{{ $reg->created_at }}</td>
                                <td>{{ $reg->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="pagination">
                    {{ $registration->links('pagination::bootstrap-5') }}
                </div>
            </center>
        </div>
    @else
        <div class="container mt-5">
            <center>
                <h1>Please <a href="{{ route('adminLogin') }}" class="btn btn-primary">Login</a> to access this page.</h1>
            </center>
        </div>
    @endif
</body>

</html>