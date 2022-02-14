<?php

namespace App\Http\Controllers;
use App\Models\InventoryComment;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;

use Illuminate\Http\Request;

class CommentManagerController extends ManagerBaseEditableController
{
    /**
     * This class will manage Comments.
     * @return \Illuminate\View\View
     */

    public function display_add_comment_form($user_id) 
    {
        $user = DB::table('im_user')->find($user_id);

        return view("add_comment", ["user" => $user]);
    }

    public function add_comment(Request $request, $user_id) 
    {
        $validated = $request->validate([
            "message" => "required | unique:App\Models\InventoryComment,message"
        ]);

        $comment = new InventoryComment();
        $comment->message = $validated["message"];
        $comment->date = Carbon::now();
        $comment->user_id = Auth::id();
        $comment->category_id = 0;
        $comment->item_id = $user_id;

        $comment->save();

        return redirect('/users/view/'.$user_id);
        

    }

}
