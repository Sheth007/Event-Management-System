<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Event Registration</title>
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
    @if (session('admin_email'))
        <center>
            <h1>Admin \ event registration</h1>
            <a href="{{ route('export') }}"><button>Export</button></a>
            <table border="1">
                <tr>
                    <td>Id</td>
                    <td>User_id</td>
                    <td>Event_id</td>
                    <td>name</td>
                    <td>email</td>
                    <td>phone</td>
                    <td>created_at</td>
                    <td>updated_at</td>
                </tr>
                @foreach ($registration as $reg)
                    <tr>
                        <td>{{ $reg->id }}</td>
                        <td>{{ $reg->user_id }}</td>
                        <td>{{ $reg->event_id }}</td>
                        <td>{{ $reg->name }}</td>
                        <td>{{ $reg->email }}</td>
                        <td>{{ $reg->phone }}</td>
                        <td>{{ $reg->created_at }}</td>
                        <td>{{ $reg->updated_at }}</td>
                    </tr>
                @endforeach
            </table>
            {{ $registration->links() }}
        </center>
    @else
        <center>
            <h1>Try this 👉: <a href="{{ route('adminLogin') }}">Login</a></h1>
        </center>

    @endif
</body>

</html>