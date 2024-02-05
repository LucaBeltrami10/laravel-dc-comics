<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = config('comics');

        return view('guest.comics.index', ['comics' => $comics]);
    }

    public function show($name)
    {
        $comics = config('comics');

        return view('guest.comics.show', ['comics' => $comics]);
    }
}
