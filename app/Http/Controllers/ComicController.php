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
        // Create an empty comic for the centralized form
        $comic = new Comic();

        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate(
            [
                'title' => 'required|string|max:50',
                'description' => 'nullable',
                'thumb' => 'required|url',
                'price' => 'numeric|min:0',
                'series' => 'required|string|max:50',
                'sale_date' => 'required|date',
                'type' => 'required|string|max:30',
                'artists' => 'string|max:255|nullable',
                'writers' => 'string|max:255|nullable'
            ]
        );

        // Save Data
        $data = $request->all();
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();


        return to_route('comics.index');
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
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        // Validation
        $request->validate(
            [
                'title' => 'required|string|max:50',
                'description' => 'nullable',
                'thumb' => 'required|url',
                'price' => 'numeric|min:0',
                'series' => 'required|string|max:50',
                'sale_date' => 'required|date',
                'type' => 'required|string|max:30',
                'artists' => 'string|max:255|nullable',
                'writers' => 'string|max:255|nullable'
            ]
        );

        // Update Data
        $data = $request->all();
        $comic->update($data);
        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')
            ->with('alert-message', "$comic->title deleted successfully")
            ->with('alert-type', 'success');
    }
}
