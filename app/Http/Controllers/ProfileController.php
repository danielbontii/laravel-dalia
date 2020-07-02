<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfile;
use App\User;

class ProfileController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    /**
     * Update the given user.
     *
     * @param  UpdateProfile  $request
     * @param  User $user
     * @return Response
     */
    public function update(UpdateProfile $request, User $user)
    {
        $validated = $request->validated();

        $user->update([
            'name' => $validated['name'] ?? $user->name,
            'role' => $validated['role'] ?? $user->role,
        ]);

        $user->profile()->update([
            'date_of_birth' => $validated['date_of_birth'] ?? $user->profile->date_of_birth,
            'gender' => $validated['gender'] ?? $user->profile->gender,
            'position' => $validated['position'] ?? $user->profile->position,
            'telephone' => $validated['telephone'] ?? $user->profile->telephone,
        ]);

        return redirect()->route('profiles.show', ['user' => $user->id]);
    }
}
