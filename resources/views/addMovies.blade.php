@extends('staticContent.static');

@section('changingContent')
    <div class="container form-group row">
        <h4>Create Page</h4>
        <form action="/movies" method="POST">
            {{csrf_field()}}
            <lable for="movie_name" class="col-2 col-form-label">Movie Name</lable>
            <div class="col-10">
                <input class="form-control" type="text" name="movie_name">
            </div>
            </br>
            <lable for="movie_name" class="col-2 col-form-label">Movie Release Year</lable>
            <div class="col-10">
                <input class="form-control" type="text" name="release_year">
            </div>
            </br>

            <lable for="movie_name" class="col-2 col-form-label">Movie Description</lable>
            <div class="col-10">
                <input class="form-control" type="text" name="description">
            </div>
            </br>
            <div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>


@endsection