<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genre;


class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('genre.index', compact("genres"));
    }
    
    
    public function create()
    {
        return view('genre.create');
    }

    public function store(Request $request)
    {
        $genre = new Genre();
        $genre->genre = $request->get('genre');
        $genre->save();

        return redirect()->route("genre.index");
    }

    public function view($id)
    {
        $genre = Genre::find($id);
        return view('genre.view', compact("genre"));
    }

    public function edit($id)
    {
        $genre = Genre::find($id);
        return view('genre.edit', compact("genre"));
    }
    
    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        $genre->genre = $request->get('genre');
        $genre->save();

        return redirect()->route("genre.index");
    }
    public function destroy(Request $request)
    {
        Genre::destroy($request->get("genre_id") );

        return redirect()->route("genre.index");
    }
}
