<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
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
}
