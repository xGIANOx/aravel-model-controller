<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {

        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
