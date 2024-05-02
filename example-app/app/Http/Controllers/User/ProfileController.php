<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Request\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        $request->user()->fill($request->validated());
        $request->user()->save();
        return redirect()->route('profile')->with('status');
    }
}
