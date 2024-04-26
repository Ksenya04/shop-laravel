<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Request\RegRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('reg');
    }

    public function register(RegRequest $request)
    {
        $data = $request->validated();
        
        $user = User::create([
            'FIO' => $data["FIO"],
            'email' => $data["email"],
            'password' => Hash::make($data["password"]),
        ]);
        event(new Registered($user));

        return redirect()->route('login');
    }
}