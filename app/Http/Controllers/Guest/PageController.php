<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // DEFINE FUNCTION TO ROUTE USING Controller METHOD FOR INDEX PAGE
    public function index()
    {
        // RETURNS THE VIEW 'index' (index.blade.php)
        return view('index', ['movies' => Movie::all()]);
    }
}
