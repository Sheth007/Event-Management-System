<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Total Events</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .w-5.h-5 {
        height: 10px;
        width: auto;
    }
</style>

<body>
    <div class="container mt-5">
        <center>
            <h1>Admin | Events</h1>
            <!-- Buttons for Viewing Recent Event and Creating New Event -->
            <a href="{{ route('diaplyRecent.events') }}">
                <button class="btn btn-primary mb-3">View Recent Event</button>
            </a>
            <a href="{{ route('ane') }}">
                <button class="btn btn-success mb-3">Create New Event</button>
            </a>

            {{-- Search Form --}}
            <form action="{{ route('search.events') }}" method="get" class="mb-3">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-success mt-2">Search</button>
            </form>

            <!-- Events Grid -->
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="Event Image">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">{{ $event->description }}</p>
                                <p><strong>Category:</strong> {{ $event->category_id }}</p>
                                <p><strong>Date:</strong> {{ $event->date }}</p>
                                <p><strong>Time:</strong> {{ $event->time }}</p>
                                <p><strong>Location:</strong> {{ $event->location }}</p>
                                <p><strong>Created At:</strong> {{ $event->created_at }}</p>
                                <p><strong>Updated At:</strong> {{ $event->updated_at }}</p>

                                <div class="d-flex justify-content-between">
                                    <form method="get" action="{{ route('eventEdit', $event->id) }}">
                                        @csrf
                                        <button class="btn btn-warning">Update</button>
                                    </form>

                                    <form method="post" action="{{ route('eventDelete', $event->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            {{ $events->links() }}
        </center>
    </div>

    <!-- Add Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>