<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show($user)
    {
         $user = User::findOrFail($user);
        return view('profiles.show' , compact ('user'));
    }
    public function edit(User $user)
    {
        return view('profiles.edit' , compact ('user'));
    }
}
