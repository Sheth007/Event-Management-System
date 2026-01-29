<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amin | Total Category</title>
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
        <h1>ADmin | Category</h1>
        <div class="container">
            {{-- <form action="" method="get">
                <input type="text" name="search" id="search" placeholder="Search..."
                    value="{{ request()->get('search') }}">
                <button type="submit">search</button>
            </form> --}}
            <table class="table" border="1">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>created time</td>
                    <td>updated_time</td>
                    <td>Update</td>
                    <td>Delete</td>
                    <td><a href="{{ route('add-new-category') }}"><button>Add New Category</button></a></td>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at}}</td>
                        <td>{{$category->updated_at}}</td>
                        <td>
                            <form method="get" action="{{ route('getcategory.id', $category->id) }}">
                                @csrf
                                <button>Update</button>
                            </form>
                        </td>
                        <td>
                            <form method="post" action="{{ route('delete.Category', $category->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{ $categories->links() }}
    </center>
</body>

</html>