@extends('staticContent.static');

@section('changingContent')
    <div class="container form-group row">
        <h4>Edit Movie</h4>
        <form action="/movies/{{$edtmovies->id}}" method="POST">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <lable for="movie_name" class="col-2 col-form-label">Movie Name</lable>
            <div class="col-10">
                <input class="form-control" type="text" name="movie_name" value="{{$edtmovies->movie_name}}">
            </div>
            </br>
            <lable for="release_year" class="col-2 col-form-label">Movie Release Year</lable>
            <div class="col-10">
                <input class="form-control" type="text" name="release_year" value="{{$edtmovies->release_year}}">
            </div>
            </br>

            <lable for="description" class="col-2 col-form-label">Movie Description</lable>
            <div class="col-10">
                <input class="form-control" type="text" name="description" value="{{$edtmovies->description}}">
            </div>
            </br>
            <div>
                <input class="btn btn-primary" type="submit" value="Update">
            </div>
        </form>
    </div>


@endsection