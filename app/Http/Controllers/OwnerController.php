<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use App\Models\Animal;

class OwnerController extends Controller
{
    public function detail($owner_id)
    {
        $owner = Owner::findOrFail($owner_id);
        return view('owners.detail', compact('owner'));
    }

    public function create()
    {
        $owner = new Owner;
        return view('owners/create', compact('owner'));
    }

    public function store(Request $request)
    {
        $owner = new Owner;

        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');

        $owner->save();

        return redirect(url('owners/detail/' . $owner->id));
    }

    public function edit($id)
    {
        $owner= Owner::findOrFail($id);
        return view('owners/create', compact('owner'));

        
    }

    public function update(Request $request, $id)
    {
        $owner= Owner::findOrFail($id);

        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');

        $owner->save();

        return redirect(url('owners/detail/' . $owner->id));
    }

    public function delete($id)
    {
        $owner= Owner::findOrFail($id);
        // $animals= Animal::where('owner_id',$id)->get();
        $animals= $owner->animals;

        foreach($animals as $animal){
            $animal->delete();
        }
        $owner->delete();


        return redirect(url('home'));
    }
}
