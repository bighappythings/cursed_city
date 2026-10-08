<?php

namespace App\Http\Controllers;

use App\Models\Enemy;
use App\Models\Type;
use Illuminate\Http\Request;

class EnemyController extends Controller
{
    public function index()
    {
        $enemies = Enemy::with('type')->orderBy('created_at', 'desc')->paginate(10);

        //fetch all records & pass into index view
        return view('enemies.index', ["enemies" => $enemies]);
    }

    public function show(Enemy $enemy)
    {
        //fetch record with id & pass into show view
        $enemy->load('type');

        return view('enemies.show', ["enemy" => $enemy]);
    }

    public function create()
    {
        //renders create view to users
        $types = Type::all();

        return view('enemies.create', ["types" => $types]);
    }

    public function store(Request $request)
    {
        //validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'move' => 'required|string|max:255',
            'wounds' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'weapons' => 'required|string|max:255',
            'dice' => 'required|string|max:255',
            'damage' => 'required|integer|min:0|max:100',
            'specialRules' => 'required|string|max:255',
            'behaviours' => 'required|string|max:255',
            'bio' => 'required|string|min:20|max:500',
            'type_id' => 'required|exists:types,id'
        ]);

        //store new record into database
        Enemy::create($validated);
        return redirect()->route('enemies.index')->with('success', 'Enemy created successfully.');
    }

    public function destroy(Enemy $enemy)
    {
        $enemy->delete();

        return redirect()->route('enemies.index')->with('success', 'Enemy deleted successfully.');
    }
}
