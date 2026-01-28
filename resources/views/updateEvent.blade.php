<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amin | update Events</title>
</head>

<body>
    <center>
        <div class="container">
            <form action="{{ route('updateEvent') }}" method="post" enctype="multipart/form-data">
                @csrf
                <span>event id: </span>
                <input type="text" name="id" id="id" value="{{ $event->id }}" disabled>
                <br><br>
                <span>event title: </span>
                <input type="text" placeholder="enter title" name="title" value={{ $event->title }}>
                <br>
                <br>
                <span>event description: </span>
                <input type="text" placeholder="add event description" name="description" value={{ $event->description}}>
                <br>
                <br>
                <span>event category_id: </span>
                <input type="text" placeholder="enter category id" name="category_id" value={{ $event->category_id}}>
                <br>
                <br>
                <span>event date: </span>
                <input type="date" name="date" id="date" value={{ $event->date}}>
                <br>
                <br>
                <span>event time: </span>
                <input type="time" name="time" id="time" value={{ $event->time}}>
                <br>
                <br>
                <span>event location: </span>
                <input type="text" placeholder="enter evnet location" name="location" value={{ $event->location}}>
                <br>
                <br>
                <span>Currently uploaded image : </span>
                <input type="text" name="pre_image" value={{ $event->image }} hidden>
                <img src="{{ asset('storage/' . $event->image) }}" alt="image">
                <br>
                <br>
                <span>If you want to change the current image then click 👉 : </span>
                <input type="file" name="image" id="image" value={{ $event->image}}>
                <br>
                <br>
                <button type="submit">Update event</button>
            </form>
        </div>
    </center>
</body>

</html>