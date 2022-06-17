<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Animal;

class ListController extends Controller
{
    public function list()
    {
        $animals = Animal::orderBy('name')
        ->leftJoin('owners','animals.owner_id','owners.id')
        ->leftJoin('images','animals.image_id','images.id')
        ->get();
        return view('list', compact('animals'));
    }

    public function searchAnimal(Request $request)
    {
        $searchAnimal = $request->query('searchAnimal');
        if($searchAnimal){
            $searchAnimal = Animal::where('name','like',"%$searchAnimal%")
            ->leftJoin('owners','animals.owner_id','owners.id')
            ->leftJoin('images','animals.image_id','images.id')
            ->get();
            return view('list',['searchAnimal' => $searchAnimal]);
        } else {
            return view('list',['searchAnimal' => []]);
        }
    }

    public function searchOwner(Request $request)
    {
        $searchOwner = $request->query('searchOwner');
        if($searchOwner){
            $searchOwner = Animal::where('first_name','like',"%$searchOwner%")->orWhere('surname','like',"%$searchOwner%")
            ->leftJoin('owners','animals.owner_id','owners.id')
            ->leftJoin('images','animals.image_id','images.id')
            ->get();
            return view('list',['searchOwner' => $searchOwner]);
        } else {
            return view('list',['searchOwner' => []]);
        }  
    }
}
