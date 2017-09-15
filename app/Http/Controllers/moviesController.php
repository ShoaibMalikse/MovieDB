<?php

namespace App\Http\Controllers;

use App\movies;
use App\Providers\AuthServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use function Sodium\compare;

class moviesController extends Controller
{
    public function MoviesList()
    {
        //$fetchingDatabases = movies::all();
        $User = Auth::user();
        $fetchingDatabases = $User->moviesusers;
        return view('MoviesList', compact('fetchingDatabases'));
    }

    public function addNewMovies()
    {
        return view('addMovies');
    }

    public function storingMovies(request $request)
    {
        $storingdata = $request->all();
        $user = Auth::user();
        $user->moviesusers()->create($storingdata);

        //movies::create($storingdata);
        return redirect('/movies');
    }

    public function moviesDetails($id)
    {
        $user = Auth::user();
        $fetchingmovies = $user->moviesusers()->where('id', $id)->first();
        //$fetchingmovies = movies::where('movie_id', $id)->get();
        return view('movieDetails')->with('movies', $fetchingmovies);
    }

    public function editMovies($id)
    {
        //$editmovie = movies::find($id);
        $user = Auth::user();
        $edtmovies = $user->moviesusers()->find($id);
        //$editmovie = movies::where('movie_id', $id)->first();
        return view('editMovies')->with('edtmovies', $edtmovies);
    }

    public function updateMovies(request $request, $id)
    {
        $movies = $request->except(['_token', '_method']);
        //$movies = Input::get();
        $user = Auth::user();
        $udtmovies = $user->moviesusers()->find($id);
        $udtmovies->update($request->all());
       //movies::where('movie_id', $id)->update($movies);
        //$updateMovies->update($request->all());
        return redirect('/movies');
    }

    public function deleteMovies($id)
    {
        //$movies = input::get('movie_name');
        $user = Auth::user();
        $dltmovies = $user->moviesusers()->find($id);
        $dltmovies->delete();
        //movies::where('movie_id', $id)->delete(['movie_name' => $movies]);
        return redirect('/movies');
    }
}
