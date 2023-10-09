<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;

class ChatsController extends Controller
{
    public function index()
    {
        return view('chats.chat');
    }
}
