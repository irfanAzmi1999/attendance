<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function updateProfile(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->input('fullname');
        $user->shortname = $request->input('shortname');
        $user->username = $request->input('Username');
        $user->email = $request->input('email');
        $user->department = $request->input('department');
        $user->save();

        return redirect()->route('home');

    }

}
