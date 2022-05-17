<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monster;

class MonsterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monsters = Monster::paginate(8);
        return view('monsters.index', compact('monsters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monsters.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'index'=> 'unique:monsters|max:255',
            'name'=> 'unique:monsters|max:255',
            'type'=> 'required|max:50',
            'alignment'=> 'max:100',
            'size'=> 'required|max:50',
            'hit_dice'=> 'max:100',
            'languages'=> 'max:255',
            'armor_class'=> 'required|max:50',
            'hit_points'=> 'required|max:15',
            'strength'=> 'required|max:15',
            'dexterity'=> 'required|max:15',
            'constitution'=> 'required|max:15',
            'intelligence'=> 'required|max:15',
            'wisdom'=> 'required|max:15',
            'charisma'=> 'required|max:15',
            'xp'=> 'required|max:15',
            'challenge_rating'=> 'required|max:15',
        ]);

        $formData = $request->all();
        $newMonster = Monster::create($formData);
        return redirect()->route('monsters.show', $newMonster->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Monster $monster)
    {
        return view('monsters.show', compact('monster'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Monster $monster)
    {
        return view('monsters.edit', compact('monster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monster $monster)

    // $this->rules['title'] = [
    //     'required',
    //     Rule::unique('comics')->ignore($comic),
    //     'max:100'
    // ];

    {
        $request->validate([
            'index'=> 'unique:monsters|max:255',
            'name'=> 'unique:monsters|max:255',
            'type'=> 'required|max:50',
            'alignment'=> 'max:100',
            'size'=> 'required|max:50',
            'hit_dice'=> 'max:100',
            'languages'=> 'max:255',
            'armor_class'=> 'required|max:50',
            'hit_points'=> 'required|max:15',
            'strength'=> 'required|max:15',
            'dexterity'=> 'required|max:15',
            'constitution'=> 'required|max:15',
            'intelligence'=> 'required|max:15',
            'wisdom'=> 'required|max:15',
            'charisma'=> 'required|max:15',
            'xp'=> 'required|max:15',
            'challenge_rating'=> 'required|max:15',
        ]);

        $data = $request->all();
        $monster->update($data);
        return redirect()->route('monsters.show', $monster->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monster $monster)
    {
        $monster->delete();
        return redirect()->route('monsters.index');
    }
}
