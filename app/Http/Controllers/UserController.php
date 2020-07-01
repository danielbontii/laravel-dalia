<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
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
     * Display all users
     *
     * @return View
     */
    public function index()
    {
        $users = User::paginate();

        return view('users.index', ['users' => $users]);
    }

    /**
     * Toggle User role.
     *
     * @param  User $user
     * @return View
     */
    public function toggleRole(User $user)
    {
        $user->role = $user->role === 'admin' ? 'worker' : 'admin';
        $user->save();

        return redirect()->back();
    }
}
