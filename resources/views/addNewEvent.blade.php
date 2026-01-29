<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new events | Admin</title>
</head>

<body>
    <form action="{{ route('addEvents') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="enter title" name="title">
        <br>
        <br>
        <input type="text" placeholder="add event description" name="description">
        <br>
        <br>
        <input type="text" placeholder="enter category id" name="category_id">
        <br>
        <br>
        <input type="date" name="date" id="date">
        <br>
        <br>
        <input type="time" name="time" id="time">
        <br>
        <br>
        <input type="text" placeholder="enter evnet location" name="location">
        <br>
        <br>
        <input type="file" name="image" id="image">
        <br>
        <br>
        <button type="submit">Add new event</button>
    </form>
</body>

</html>