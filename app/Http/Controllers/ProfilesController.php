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
        $this->authorize('update' , $user->profile);

        return view('profiles.edit' , compact ('user'));
    }

    public function update(User $user) 
    {

    $this->authorize('update' , $user->profile);
    
       $data = request()->validate([

        'title' => 'required' ,
        'description' => 'required' ,
        'url' => 'url' ,
        'image' =>'',
       ]
       );
       
       if ( request('image')) {
           
           $imagePath = request('image')->store('profile' , 'public');           
        }
        
        auth()->user()->profile->update(array_merge (
            $data,
            ['image' => $imagePath]
        ));


       return redirect ("/profile/{$user->id}");
    }
}
