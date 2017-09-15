@extends('staticContent.static');

@section('changingContent')
    <div class="container text-center">
        <!-- heading -->
        <h1 class="pull-xs-left">
            Your Movies List
        </h1>
        <div class="pull-xs-right">
            <a class="btn btn-primary" href="/movies/addmovies" role="button">
               Add New Movies +
            </a>
        </div>

        <div class="clearfix">
        </div>
        <br>

        <!-- ================ Notebooks==================== -->
        <!-- notebook1 -->

        @foreach($fetchingDatabases as $fetchingDatabasis)

            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <div class="card-block">
                        <a href="/movies/details/{{$fetchingDatabasis->id}}">
                            <h4 class="card-title">
                                {{$fetchingDatabasis->movie_name}}
                            </h4>
                        </a>
                    </div>
                    <a href="#">
                        <img alt="Responsive image" class="img-fluid" src="{{'layouts/img/moviedb.jpg'}}"/>
                    </a>
                    <div class="card-block">
                        <a class="card-link" href="/movies/{{$fetchingDatabasis->id}}">
                            Edit Movie
                        </a>
                        <form action="/movies/{{$fetchingDatabasis->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                            </input>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection