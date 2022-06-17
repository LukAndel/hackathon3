<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function detail($owner_id)
    {
        $owner = Owner::findOrFail($owner_id);
        return view('owners.detail', compact('owner'));
    }
    
    public function create(Request $request)
    {
        $owner = new Owner;

        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');

        $owner->save();

        return redirect(url('owners/detail/'.$owner->id));
    }

    public function edit(Request $request)
    {
        $owner->first_name = $request->input('first_name');
        $owner->surname = $request->input('surname');
        $owner->email = $request->input('email');
        $owner->phone = $request->input('phone');
        $owner->address = $request->input('address');

        $owner->save();

        return redirect(url('owners/detail/'.$owner->id));
    }

    public function delete(Request $request)
    {
        $owner->delete();

        return redirect(url('home'));
    }
}
