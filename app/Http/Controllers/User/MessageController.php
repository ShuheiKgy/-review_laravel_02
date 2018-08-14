<?php

namespace App\Http\Controllers\User;

use App\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $messages = auth()->user()->messages()->latest()->get();

        return view('user.message.index')->with(compact('messages'));
    }
}
