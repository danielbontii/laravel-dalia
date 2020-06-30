<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  User $user
     * @return View
     */
    public function show(User $user)
    {
        return view('profiles.show', ['user' => $user]);
    }

    /**
     * Show the edit for the given user.
     *
     * @param  User $user
     * @return View
     */
    public function edit(User $user)
    {
        return view('profiles.edit', ['user' => $user]);
    }
}
