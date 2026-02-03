<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Events | Admin</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Add New Event</h1>
        <form action="{{ route('addEvents') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Event Title -->
            <div class="form-group">
                <label for="title">Event Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter event title" name="title"
                    required>
            </div>

            <!-- Event Description -->
            <div class="form-group">
                <label for="description">Event Description</label>
                <input type="text" class="form-control" id="description" placeholder="Add event description"
                    name="description" required>
            </div>

            <!-- Category ID -->
            <div class="form-group">
                <label for="category_id">Category ID</label>
                <input type="text" class="form-control" id="category_id" placeholder="Enter category ID"
                    name="category_id" required>
            </div>

            <!-- Event Date -->
            <div class="form-group">
                <label for="date">Event Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>

            <!-- Event Time -->
            <div class="form-group">
                <label for="time">Event Time</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>

            <!-- Event Location -->
            <div class="form-group">
                <label for="location">Event Location</label>
                <input type="text" class="form-control" id="location" placeholder="Enter event location" name="location"
                    required>
            </div>

            <!-- Event Image -->
            <div class="form-group">
                <label for="image">Event Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3">Add New Event</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-P2Qh+54erwbs8vqDdREt9G6rqm4O4itfgTSQ5G5Y0vT45ms7FiA0r5XyRj9m2XyxF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-KyZXEJx3W8C8f7iDkFHFzGkszmxW6yMKEMOTyJbbU5HfF9GRFhxw1caFVhQbjeV1"
        crossorigin="anonymous"></script>
</body>

</html>