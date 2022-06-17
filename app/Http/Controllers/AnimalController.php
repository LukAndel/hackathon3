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
    //
}
