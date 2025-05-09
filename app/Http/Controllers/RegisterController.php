<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(){
        return inertia('Auth/Register');
    }
    public function store(Request $request){
        // $validatedData = $request->validate([
        //     'first_name' => 'required|string|max:100',
        //     'last_name' => 'required|string|max:100',
        //     'phone_number' => 'nullable|string',
        //     'email' => 'required|string|email|max:100|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        // ]);


        $user = User::create($request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'phone_number' => 'nullable|string',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]));

        //Hash password
        //$user->password = Hash::make($user->password);
        //$user->save();

        //Login the user manually
        Auth::login($user);

        //$validatedData['password'] = Hash::make($validatedData['password']);

        return redirect()->route('listing.index')
        ->with('success', 'Account have been registered.');
    }
}
