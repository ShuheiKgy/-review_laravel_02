<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SaveMessage;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->with('user')->get();

        return view('admin.message.index')->with(compact('messages'));
    }

    public function create(Message $message)
    {
        $userlist = User::getUserList();

        return view('admin.message.create')->with(compact('message', 'userlist'));
    }

    public function store(SaveMessage $request, Message $message)
    {
        $data = $request->only('user_id', 'title', 'content');

        $message->forceFill($data)->save();

        return redirect(route('admin.message.edit', $message))->with(compact('_flash_msg', '登録が完了しました'));
    }

    public function edit(Message $message)
    {
        $userlist = User::getUserList();

        return view('admin.message.create')->with(compact('massage', 'userlist'));
    }

    public function update(SaveMessage $request, Message $message)
    {
        $data = $request->only('user_id', 'title', 'content');

        $message->forceFill($data)->save();

        return redirect(route('admin.message.edit', $message))->with(compact('_flash_msg', '変更が完了しました'));
    }
}
