<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        auth()->user()->update([
            'name'  => $request->name,
            'email' => $request->email,
            'photo' => Storage::put('users/'. auth()->id() . '/avatars', $request->photo),
        ]);

        return response()->json('updated successfully');
    }
}
