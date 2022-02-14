<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\InventoryUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use DB;

class UserManagerController extends ManagerBaseEditableController
{
    /**
     * This class will manage Users.
     * @return \Illuminate\View\View
     */

    public function display_users()
    {
        $logged_user = Auth::user();
        $users = DB::table('im_user')->get();
        return view('users', ["users" => $users,"logged_user"=>$logged_user]);
        
    }

    public function display_add_user_form() 
    {

        return view("add_user");
    }

    public function display_user($user_id)
    {
        $user = DB::table('im_user')->find($user_id);

        $comment_writers = DB::table('im_user')->get();

        $comments = DB::table('im_user')
            ->join('im_comment', 'im_user.id', '=', 'im_comment.item_id')
            ->get();

        return view("view_user",["user" => $user,"comments" => $comments,'comment_writers' => $comment_writers]);
    }

    public function display_edit_user_form($user_id) 
    {

        $user = DB::table('im_user')->find($user_id);

        return view("edit_user",["user" => $user]);
    }

    public function display_edit_password_form($user_id) 
    {
        $user = DB::table('im_user')->find($user_id);
        
        return view("edit_password",["user" => $user]);
    }

    public function add_user(Request $request) 
    {
        $validated = $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "role_id" => "required",
            "email" => "email|same:email",
            "password" => ['required', Rules\Password::defaults()],
          ]);
          
        $user = new InventoryUser();
        $user->first_name = $validated["first_name"];
        $user->last_name = $validated["last_name"];
        $user->role_id = $validated["role_id"];
        $user->email = $validated["email"];
        $user->password = Hash::make($validated['password']);
        $user->save();
        return redirect('/users');
    }

    public function update_user(Request $request, $user_id) 
    {

        $first_name = $request->input('first_name');  
        $last_name = $request->input('last_name');
        $role_id = $request->input('role_id'); 
        $email = $request->input('email'); 

        $updated_first_name = DB::table('im_user')
            ->where('id', $user_id)
            ->update(
                ['first_name' => $first_name],
            );
        $updated_last_name = DB::table('im_user')
            ->where('id', $user_id)
            ->update(
                ['last_name' => $last_name],
            );
        $updated_role_id = DB::table('im_user')
            ->where('id', $user_id)
            ->update(
                ['role_id' => $role_id],
        );
        $updated_email = DB::table('im_user')
            ->where('id', $user_id)
            ->update(
                ['email' => $email],
        );

        return redirect('/users/view/'.$user_id);
    }

    public function update_password(Request $request, $user_id) 
    {
        $current_password = DB::table('im_user')->where('id', $user_id)
        ->select('password')
        ->get();

        $old_password = $request->input('old_password');

        $new_password = $request->input('new_password');
        
        $confirm_password = $request->input('confirm_password');

        $updated_password = DB::table('im_user')
            ->where('id', $user_id)
            ->update(
                ['password' => Hash::make($confirm_password)],
        );
        return redirect('/users/view/'.$user_id);
    }

    public function delete_user(Request $request, $user_id) 
    {
        DB::table('im_comment')->where('item_id', $user_id)->delete();

        DB::table('im_user')->where('id', $user_id)->delete();

        return redirect('/users');
    }
    
}

?>