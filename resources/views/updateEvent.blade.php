<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Update Event</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Update Event</h1>
        <form action="{{ route('updateEvent') }}" method="post" enctype="multipart/form-data" class="w-75">
            @csrf
            @method('PUT')
            <input type="text" name="id" id="id" value="{{ $id }}" hidden>

            <div class="mb-3">
                <label for="title" class="form-label">Event Title:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter event title"
                    value="{{ old('title', $event->title) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Event Description:</label>
                <input type="text" class="form-control" id="description" name="description"
                    placeholder="Add event description" value="{{ old('description', $event->description) }}">
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Event Category ID:</label>
                <input type="text" class="form-control" id="category_id" name="category_id"
                    placeholder="Enter category ID" value="{{ old('category_id', $event->category_id) }}">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Event Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $event->date) }}">
            </div>

            <div class="mb-3">
                <label for="time" class="form-label">Event Time:</label>
                <input type="time" class="form-control" id="time" name="time" value="{{ old('time', $event->time) }}">
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Event Location:</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter event location"
                    value="{{ old('location', $event->location) }}">
            </div>

            <div class="mb-3">
                <label for="pre_image" class="form-label">Currently Uploaded Image:</label>
                <input type="text" name="pre_image" value="{{ $event->image }}" hidden>
                <img src="{{ asset('storage/' . $event->image) }}" alt="Image" class="img-fluid"
                    style="max-width: 200px;">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Change Event Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>
</body>

</html>