<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recent Events</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <!-- Optional custom styles -->
    <style>
        body {
            transform: scale(1);
            font-family: Arial, sans-serif;
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table td img {
            width: 100%;
            height: auto;
            max-height: 150px;
        }

        .container {
            margin-top: 30px;
        }

        h1 {
            margin-bottom: 30px;
        }

        .pagination {
            justify-content: center;
        }

        .card-img-top {
            max-height: 150px;
            object-fit: cover;
        }

        .table-responsive {
            max-height: 500px;
            overflow-y: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Admin | Recent Events</h1>

        <!-- Grid system for layout -->
        <div class="row">
            <!-- Left column for the table -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Event Details</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Category ID</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Location</th>
                                        <th>Image</th>
                                        <th>Created Time</th>
                                        <th>Updated Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($recent as $rec)
                                        <tr>
                                            <td>{{ $rec->id }}</td>
                                            <td>{{ $rec->title }}</td>
                                            <td>{{ $rec->description }}</td>
                                            <td>{{ $rec->category_id }}</td>
                                            <td>{{ $rec->date }}</td>
                                            <td>{{ $rec->time }}</td>
                                            <td>{{ $rec->location }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $rec->image) }}" alt="Event Image"
                                                    class="img-fluid">
                                            </td>
                                            <td>{{ $rec->created_at }}</td>
                                            <td>{{ $rec->updated_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination links -->
        <div class="pagination justify-content-center mt-3">
            {{ $recent->links() }}
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-P2Qh+54erwbs8vqDdREt9G6rqm4O4itfgTSQ5G5Y0vT45ms7FiA0r5XyRj9m2XyxF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-KyZXEJx3W8C8f7iDkFHFzGkszmxW6yMKEMOTyJbbU5HfF9GRFhxw1caFVhQbjeV1"
        crossorigin="anonymous"></script>
</body>

</html>