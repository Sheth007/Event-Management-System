<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amin | Total Events</title>
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
                    <td><a href="{{ route('ane') }}"><button>Add New Event</button></a></td>
                </tr>
                @foreach ($events as $event)
                    <tr>
                        <td>{{$event->id}}</td>
                        <td>{{$event->title}}</td>
                        <td>{{$event->description}}</td>
                        <td>{{$event->category_id}}</td>
                        <td>{{$event->date}}</td>
                        <td>{{$event->time}}</td>
                        <td>{{$event->location}}</td>
                        <td>
                            <html>

                            <body>
                                <img src="{{ asset('storage/' . $event->image) }}" alt="images">
                            </body>

                            </html>
                        </td>
                        <td>{{$event->created_at}}</td>
                        <td>{{$event->updated_at}}</td>
                        <td>
                            <form method="get" action="{{ route('eventEdit', $event->id) }}">
                                @csrf
                                <button>Update</button>
                            </form>
                        </td>
                        <td>
                            <form method="post" action="{{ route('eventDelete', $event->id) }}">
                                @csrf
                                @method('DELETE')
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $events->links() }}
    </center>
</body>

</html>