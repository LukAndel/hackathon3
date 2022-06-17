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
    
    public function create(Request $request)
    {
        $animal = new Animal;

        $animal->first_name = $request->input('first_name');
        $animal->surname = $request->input('surname');
        $animal->email = $request->input('email');
        $animal->phone = $request->input('phone');
        $animal->address = $request->input('address');

        $owner->save();

        return redirect(url('animal/detail/'.$animal->id));
    }

    public function edit(Request $request)
    {
        $animal->first_name = $request->input('first_name');
        $animal->surname = $request->input('surname');
        $animal->email = $request->input('email');
        $animal->phone = $request->input('phone');
        $animal->address = $request->input('address');

        $animal->save();

        return redirect(url('animal/detail/'.$animal->id));
    }

    public function delete(Request $request)
    {
        $animal->delete();

        return redirect(url('home'));
    }
}
