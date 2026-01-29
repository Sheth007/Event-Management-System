<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Add new category</title>
</head>

<body>
    <center>
        <form action="{{ route('addNew.Category') }}" method="post">
            @csrf
            <input type="text" name="name" placeholder="enter category name">
            <br>
            <br>
            <button type="submit">Add new category</button>
        </form>
    </center>
</body>

</html>