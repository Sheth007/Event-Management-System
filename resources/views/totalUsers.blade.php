<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amin | Total user</title>
</head>
<style>
    body {
        transform: scale(0.9);
    }

    .w-5.h-5 {
        height: 50px;
        width: auto;
    }

    td {
        background-color: aliceblue;
        padding: 10px;
        text-align: center;
    }
</style>

<body>
    <center>
        <div class="container">
            <table class="table" border="1">
                <tr>
                    <td>Id</td>
                    <td>name</td>
                    <td>email</td>
                    <td>password</td>
                </tr>
                @foreach ($users as $ud)
                    <tr>
                        <td>{{$ud->id}}</td>
                        <td>{{$ud->name}}</td>
                        <td>{{$ud->email}}</td>
                        <td>{{$ud->password}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $users->links() }}
    </center>
</body>

</html>