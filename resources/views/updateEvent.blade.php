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
                @method('PUT')
                <input type="text" name="id" id="id" value="{{ $id }}" hidden>
                <br><br>

                <span>Event title: </span>
                <input type="text" placeholder="Enter title" name="title" value="{{ old('title', $event->title) }}">
                <br><br>

                <span>Event description: </span>
                <input type="text" placeholder="Add event description" name="description"
                    value="{{ old('description', $event->description) }}">
                <br><br>

                <span>Event category ID: </span>
                <input type="text" placeholder="Enter category ID" name="category_id"
                    value="{{ old('category_id', $event->category_id) }}">
                <br><br>

                <span>Event date: </span>
                <input type="date" name="date" id="date" value="{{ old('date', $event->date) }}">
                <br><br>

                <span>Event time: </span>
                <input type="time" name="time" id="time" value="{{ old('time', $event->time) }}">
                <br><br>

                <span>Event location: </span>
                <input type="text" placeholder="Enter event location" name="location"
                    value="{{ old('location', $event->location) }}">
                <br><br>

                <span>Currently uploaded image: </span>
                <input type="text" name="pre_image" value="{{ $event->image }}" hidden>
                <img src="{{ asset('storage/' . $event->image) }}" alt="Image" style="max-width: 200px;">
                <br><br>

                <span>If you want to change the current image, click 👉 : </span>
                <input type="file" name="image" id="image">
                <br><br>

                <button type="submit">Update Event</button>
            </form>

        </div>
    </center>
</body>

</html>