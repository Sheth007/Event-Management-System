<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Add New Category</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            max-width: 500px;
            margin-top: 100px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Add New Category</h1>
        <form action="{{ route('addNew.Category') }}" method="post">
            @csrf
            <!-- Category Name -->
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name"
                    required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3">Add New Category</button>
        </form>
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