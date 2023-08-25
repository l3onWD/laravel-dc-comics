<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        $cta_cards = config('data.cta_cards');

        return view('comics.index', ['comics' => $comics, 'cta_cards' => $cta_cards]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $comics = Comic::all();
        $comic_actions_dropmenu = config('data.dropmenu_links')['comic_availability'];
        $last_index = count($comics);
        $data['comic'] = $comic;
        $data['comic_actions_dropmenu'] = $comic_actions_dropmenu;
        if ($comic->id > 1) $data['prev'] = $comic->id - 1;
        if ($comic->id < $last_index) $data['next'] = $comic->id + 1;

        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
