<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        /* $comics = config('comics'); */
        $comics = Comic::all();

        return view('guest.comics.index', ['comics' => $comics]);
    }

    public function show($id)
    {
        $comics = Comic::findOrFail($id);

        return view('guest.comics.show', ['comics' => $comics]);
    }

    public function create()
    {
        return view('guest.comics.create');
    }
}
