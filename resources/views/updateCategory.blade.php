<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | update category</title>
</head>

<body>
    <center>
        <div class="container">
            <form action="{{ route('updateCategory.data') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="text" name="id" id="id" value="{{ $id }}" hidden>
                <br><br>

                <span>Event title: </span>
                <input type="text" placeholder="Enter title" name="name" value="{{ old('name', $category->name) }}">
                <br><br>

                <button type="submit">Update Category</button>
            </form>
        </div>
    </center>
</body>

</html>