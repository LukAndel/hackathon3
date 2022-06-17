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
    //
}
