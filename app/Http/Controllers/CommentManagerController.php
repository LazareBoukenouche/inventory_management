<?php

namespace App\Http\Controllers;
use App\Models\InventoryComment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class CommentManagerController extends ManagerBaseEditableController
{
    /**
     * This class will manage Comments.
     * @return \Illuminate\View\View
     */

    public function display_add_comment_form(Request $request) 
    {
        $url = $request->url();
        $precedent_url = Str::before($url,'/add_comment');
        $form_action_url = Str::after($url, 'http://127.0.0.1:8000');
        $item = Str::between($form_action_url, '/view/', '/add_comment');
        return view("add_comment", ["url"=>$url,"form_action_url"=>$form_action_url,"item"=>$item,"precedent_url"=>$precedent_url]);
    }

    public function add_comment(Request $request) 
    {
        $validated = $request->validate([
            "message" => "required | unique:App\Models\InventoryComment,message"
        ]);

        $url = $request->url();
        $form_action_url = Str::after($url, 'http://127.0.0.1:8000');
        $item = Str::between($form_action_url, '/view/', '/add_comment');
        $precedent_url = Str::before($url,'/add_comment');


        $comment = new InventoryComment();
        $comment->message = $validated["message"];
        $comment->date = Carbon::now();
        $comment->user_id = Auth::id();
        $comment->category_id = 0;
        $comment->item_id = $item;

        $comment->save();

        return redirect($precedent_url);
        

    }

}
