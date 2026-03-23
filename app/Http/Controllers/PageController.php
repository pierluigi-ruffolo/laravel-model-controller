<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function index()
    {
        $movies = movie::all();
        return view('movies', compact('movies'));
    }
}
