<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileSetupController extends Controller
{
     //Complete user profile setup
     public function profilesetup(Request $request, string $id)
     {

         $request->validate([
             'image' => 'required|image',
             'username' => 'required|string|max:50|min:3',
             'number' =>  'required|digits:10|regex:/^[6-9][0-9]{9}$/'
            ]);
            dd($request->all());
        }
}
