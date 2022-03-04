<?php

namespace App\Http\Controllers;
use App\Message;
use DB;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $user_id=auth()->id();

        return Message::select(
        'id',
        DB::raw("if(`from_id`=$user_id, true,false) as written_by_me"),
        'created_at',
        'content'
        )->get();
    }

    public function store(Request $request)
    {
        $message = new Message();
        $message->from_id=auth()->id();
        $message->to_id= $request->to_id;
        $message->content=$request->content;

        $saved = $message->save();

        $data = [];
        $data['success']=$saved;
        return $data;
    }
}
