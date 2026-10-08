<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    #
    public function index()
    {
        $heroes = Hero::orderBy('created_at', 'desc')->paginate(10);

        //fetch all records & pass into index view
        return view('heroes.index', ["heroes" => $heroes]);
    }

    /*Show the form for creating a new resource.*/
    public function show(Hero $hero)
    {
        //fetch record with id & pass into show view
        $heroes = Hero::orderBy("created_at", "desc")->paginate(10);

        return view('heroes.show', ["hero" => $hero]);
    }

    /* Store a newly created resource in storage.*/
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'move' => 'required|integer|min:0|max:100',
            'agility' => 'required|string|max:255',
            'defence' => 'required|string|max:255',
            'vitality' => 'required|string|max:255',
            'attributes' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'wounds' => 'required|integer|min:0|max:100',
            'weapons' => 'required|string|max:255',
            'abilities' => 'required|string|max:255',
            'inspiration' => 'required|string|max:255',
        ]);

        //store new record into database
        Hero::create($validated);
        return redirect()->route('heroes.index')->with('success', 'Hero created successfully.');
    }

    public function create()
    {
        return view('heroes.create');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();

        return redirect()->route('heroes.index')->with('success', 'Hero deleted successfully.');
    }
}
