<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Total Users</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</head>

<style>
    body {
        transform: scale(0.9);
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
</style>

<body>
    <div class="container">
        <center>
            <h1>Admin | Total Users</h1>
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $ud)
                        <tr>
                            <td>{{$ud->id}}</td>
                            <td>{{$ud->name}}</td>
                            <td>{{$ud->email}}</td>
                            <td>{{$ud->password}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination Links -->
            <div class="pagination">
                {{ $users->links('pagination::bootstrap-5') }}
            </div>
        </center>
    </div>
</body>

</html>