<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{  asset('css/app.css')   }}">
    <title>UjiCoba</title>
</head>
<body>
<div class="container">
    <h3 class="text-center my-5"> Simple CRUD (Create Read Update Delete)</h3>
    <form method="post" action="{{route('add.book')}}">
        @csrf
        <div class="container">


            <div class="form-group">
                <div class="row">
                    <div class="col-1">
                        <p class="lead">Name:</p>
                    </div>
                    <div class="col-4">
                        <input name="title"   type="text" name="title" class="form-control" >
                    </div>
                </div>


            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-1">
                        <p class="lead">Rating:</p>
                    </div>
                    <div class="col-4">
                        <input  name="rating"  type="number" name="rating" class="form-control">
                    </div>
                </div>


            </div>
            <div class="form-group">
                <input name="submit" type="submit" class="btn btn-success" value="Submit!!!">
            </div>
        </div>




    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">Rating</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        <tr>
            <th scope="row">{{$book->id}}</th>
            <td>{{$book->name}}</td>
            <td>{{$book->rating}}</td>
            <td>
                <form method="post" action="{{url('/delete/' . $book->id)}}">
                    @csrf

                    <input  type="submit" class="btn btn-danger btn-sm" value="remove">
                </form>


                <a href="{{url('/edit/' . $book->id)}}" type="submit" class="btn btn-primary btn-sm" >Edit </a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
</div>



</body>
</html>
