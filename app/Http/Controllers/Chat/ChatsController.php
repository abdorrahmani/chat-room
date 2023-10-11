<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('chats.chat');
    }

    public function fetch(){
        return Message::with('user')->get();
    }

    public function sendMessage(Request $request){
        $user = Auth::user();

        $user->messages()->create([
            'message' => $request->input('message')
        ]);

        return ['status' => 'Message Sent!'];
    }

}
