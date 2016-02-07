<?php

namespace App\Http\Controllers;

use App\Anime;
use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AnimeController extends Controller
{
    public function index()
    {
        $animes = Anime::latest('released')->get();

        return view('anime.index', compact('animes'));
    }

    public function create()
    {
        return view('anime.create');
    }

    public function show($id)
    {
        $anime = Anime::find($id);

        if (!$anime)
        {
            abort(404);
        }

        return view('anime.show', compact('anime'));
    }

    public function store(Requests\AnimeRequest $request)
    {
        Anime::create($request->all());

        return redirect('anime');
    }

    public function edit($id)
    {
        $anime = Anime::find($id);

        if(!$anime)
            abort(404);

        return view('anime.edit', compact('anime'));
    }

    public function update($id, Requests\AnimeRequest $request)
    {
        $anime = Anime::find($id);

        $anime->update($request->all());

        return redirect('anime');
    }
}
