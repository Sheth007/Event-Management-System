<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recent Activity and Registrations Details</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
    body {
        font-family: 'Arial', sans-serif;
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

    .pagination {
        justify-content: center;
    }

    .btn-custom {
        margin-top: 10px;
    }
</style>

<body>
    <div class="container">
        <center>
            <h1>Admin | Recent Event Registration Data</h1>

            <!-- Recent Registrations Table -->
            <table class="table table-bordered table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Event ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recent as $rec)
                        <tr>
                            <td>{{ $rec->id }}</td>
                            <td>{{ $rec->user_id }}</td>
                            <td>{{ $rec->event_id }}</td>
                            <td>{{ $rec->name }}</td>
                            <td>{{ $rec->phone }}</td>
                            <td>{{ $rec->created_at }}</td>
                            <td>{{ $rec->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="pagination">
                {{ $recent->links('pagination::bootstrap-5') }}
            </div>
        </center>
    </div>
</body>

</html>