<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::latest()->withCount('messages')->get();

        return view('admin.user.index')->with(compact('users'));
    }
}
