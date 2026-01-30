<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recent Avtivity and Registrations details</title>
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
        <h1>Admin | recent event registration data</h1>
        <table border="1">
            <tr>
                <td>id</td>
                <td>User_id</td>
                <td>event_id</td>
                <td>name</td>
                <td>phone</td>
                <td>crated_at</td>
                <td>updated_at</td>
            </tr>
            @foreach ($recent as $rec)
                <tr>
                    <td>{{ $rec->id }}</td>
                    <td>{{ $rec->user_id}}</td>
                    <td>{{ $rec->event_id}}</td>
                    <td>{{ $rec->name}}</td>
                    <td>{{ $rec->phone}}</td>
                    <td>{{ $rec->created_at}}</td>
                    <td>{{ $rec->updated_at}}</td>
                </tr>
            @endforeach
        </table>
        {{ $recent->links() }}
    </center>
</body>

</html>