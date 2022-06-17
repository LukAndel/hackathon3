<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Image;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function detail($animal_id)
    {
        $animal = Animal::findOrFail($animal_id);
        $image = Image::where('id', $animal_id)->firstOrFail();
        return view('animals.detail', compact('animal', 'image'));
    }

    public function store(Request $request)
    {
        $animal = new Animal;

        $animal->name = $request->input('name');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');
        // $animal->owner_id = $_GET['ownerId'];

        $animal->save();
        session()->flash('success_message', 'New pet was created.');
        return redirect(url('animal/detail/' . $animal->id));
    }

    public function create()
    {
        $animal = new Animal;
        return view('animals.create', compact('animal'));
    }

    public function update($id, Request $request)
    {
        $animal = Animal::findOrFail($id);
        $animal->name = $request->input('name');
        $animal->breed = $request->input('breed');
        $animal->age = $request->input('age');
        $animal->weight = $request->input('weight');

        $animal->save();
        session()->flash('success_message', 'Pet details were updated.');
        return redirect(url('animals/detail/' . $animal->id));
    }

    public function edit($animal_id)
    {
        $animal = Animal::findOrFail($animal_id);

        return view('animals.create', compact('animal'));
    }

    public function delete($animal_id)
    {
        $animal = Animal::findOrFail($animal_id);
        $animal->delete();
        session()->flash('success_message', 'Pet was deleted.');
        return redirect(url('home'));
    }
}
