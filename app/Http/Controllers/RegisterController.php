<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the user info
        $userAttr = $request->validate([
            'name' =>['required'],
            'email' =>['required','email','unique:users,email'],
            'password' =>['required','confirmed',Password::min(6)],
        ]);

        //validate the employer info
        $employerAttr = $request->validate([
            'employer' =>['required'],
            'logo' =>['required',File::types(['png','jpg'])],

        ]);

        //create the user
        $user = User::create($userAttr);

        //store the logo
        $logoPath = $request->logo->store('logos','public');

        //create the employer and attach it to the created user
        $user->employer()->create([
            'name' => $employerAttr['employer'],
            'logo' => $logoPath
        ]);

        //login the new user
        Auth::login($user);

        //return to the home page
        return redirect('/');
    }

}
