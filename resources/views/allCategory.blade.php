<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Total Category</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- Bootstrap JS Bundle CDN -->
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

    .btn-custom {
        margin-top: 10px;
    }

    .pagination {
        justify-content: center;
    }
</style>

<body>
    <div class="container">
        <center>
            <h1>Admin | Categories</h1>

            <!-- Category Table -->
            <table class="table table-bordered table-striped mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created Time</th>
                        <th scope="col">Updated Time</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->created_at}}</td>
                            <td>{{$category->updated_at}}</td>
                            <td>
                                <form method="get" action="{{ route('getcategory.id', $category->id) }}">
                                    @csrf
                                    <button class="btn btn-warning btn-sm">Update</button>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('delete.Category', $category->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="pagination">
                {{ $categories->links('pagination::bootstrap-5') }}
            </div>

            <!-- Add New Category Button -->
            <a href="{{ route('add-new-category') }}" class="btn btn-success btn-custom">Add New Category</a>
        </center>
    </div>
</body>

</html>