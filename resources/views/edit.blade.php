<form method="post" action="{{url('/edit/' . $ids)}}">
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
