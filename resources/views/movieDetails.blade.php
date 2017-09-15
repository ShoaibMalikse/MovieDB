@extends('staticContent.static');

@section('changingContent')
    <div class="container">
        <h4>Movie Details</h4>

            <form>
                <lable for="movie_name" class="col-2 col-form-label">{{$movies->movie_name}}</lable>
                </br>
                <lable for="release_year" class="col-2 col-form-label">{{$movies->release_year}}</lable>
                </br>
                <lable for="description" class="col-2 col-form-label">{{$movies->description}}</lable>
                </br>
            </form>

    </div>


@endsection