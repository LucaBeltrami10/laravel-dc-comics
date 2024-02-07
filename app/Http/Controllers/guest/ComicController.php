<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;
use PhpParser\Node\Stmt\Return_;

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

    public function store(Request $request)
    {
        $data = $request->all();
        $data['price'] = '$ ' . $data['price'];
        /* dd($request); */
        $comicModel = new Comic();

        /* $comicModel->title = $request->title;
        $comicModel->description = $request->description;
        $comicModel->thumb = $request->thumb;
        $comicModel->price = ('$ ' . $request->price);
        $comicModel->series = $request->series;
        $comicModel->sale_date = $request->sale_date;
        $comicModel->type = $request->type; */
        $comicModel->fill($data);
        $comicModel->save();


        return redirect()->route('guest.show', $comicModel->id);
    }

    public function edit($id)
    {
        $comic = Comic::findOrFail($id);

        return view('guest.comics.edit', ['comic' => $comic]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $data['price'] = '$ ' . $data['price'];
        /* dd($request); */
        $comicModel = new Comic();

        /* $comicModel->title = $request->title;
        $comicModel->description = $request->description;
        $comicModel->thumb = $request->thumb;
        $comicModel->price = ('$ ' . $request->price);
        $comicModel->series = $request->series;
        $comicModel->sale_date = $request->sale_date;
        $comicModel->type = $request->type; */
        $comicModel->update($data);
        /* $comicModel->save(); */


        return redirect()->route('guest.show', $comicModel->id);
    }
}
