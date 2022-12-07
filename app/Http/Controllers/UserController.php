<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
       $this->validate($request,[
        'name' => 'required'
       ]);
       $user = User::create($request->all());

       return redirect()->back()->with('success','Name added successfully !');
    }
}
