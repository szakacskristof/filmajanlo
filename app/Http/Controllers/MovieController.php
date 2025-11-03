<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies=Movie::getMovies();
        $categories=collect($movies)->pluck('category')->unique()->values();
        return view('movies.index',compact('movies','categories'));

    }

    public function category(string $slug)
    {
        $movies=Movie::getMovies();

        $filteredMovies=collect($movies)->filter(function ($movie) use ($slug){
            return $movie['category']===$slug;
        });

        if($filteredMovies->isEmpty())
            {
                abort(404,"Invalid Category: $slug");
            }

        return view("movies.category",compact('filteredMovies','slug'));
    }
    public function id(int $sid)
    {


        $movies=Movie::getMovies();

        $selectedMovie=$movies[$sid];

        return view("movies.id",compact('selectedMovie','sid'));
    }

}
