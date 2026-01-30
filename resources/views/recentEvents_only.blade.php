<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recent Events</title>
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

    img {
        width: 100%;
        height: 20vh;
    }
</style>

<body>
    <center>
        <h1>Admin | recent events</h1>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>title</td>
                <td>description</td>
                <td>category_id</td>
                <td>date</td>
                <td>time</td>
                <td>location</td>
                <td>image</td>
                <td>created time</td>
                <td>updated_time</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
            @foreach ($recent as $rec)
                <tr>
                    <td>{{$rec->id}}</td>
                    <td>{{$rec->title}}</td>
                    <td>{{$rec->description}}</td>
                    <td>{{$rec->category_id}}</td>
                    <td>{{$rec->date}}</td>
                    <td>{{$rec->time}}</td>
                    <td>{{$rec->location}}</td>
                    <td>
                        <html>

                        <body>
                            <img src="{{ asset('storage/' . $rec->image) }}" alt="images">
                        </body>

                        </html>
                    </td>
                    <td>{{$rec->created_at}}</td>
                    <td>{{$rec->updated_at}}</td>
                </tr>
            @endforeach
        </table>
        {{ $recent->links() }}
    </center>
</body>

</html>