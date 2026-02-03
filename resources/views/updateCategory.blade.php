<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Update Category</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Update Category</h1>
        <form action="{{ route('updateCategory.data') }}" method="post" enctype="multipart/form-data" class="w-75">
            @csrf
            @method('PUT')
            <input type="text" name="id" id="id" value="{{ $id }}" hidden>

            <div class="mb-3">
                <label for="name" class="form-label">Category Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name"
                    value="{{ old('name', $category->name) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
</body>

</html>