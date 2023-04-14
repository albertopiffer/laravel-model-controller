<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $movies = Movie::all();
        //dd($movies);

        return view('welcome', ['movies' => $movies]);
    }
}
