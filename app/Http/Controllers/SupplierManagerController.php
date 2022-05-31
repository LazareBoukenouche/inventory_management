<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Http\Controllers\Controller;
use DB;

class SupplierManagerController extends ManagerBaseEditableController
{
    /**
     * This class will manage Suppliers.
     * @return \Illuminate\View\View
     */

    public function display_suppliers()
    {

        $suppliers = DB::table('im_supplier')->get();
        return view('suppliers', ["suppliers" => $suppliers]);
        
    }

    public function display_add_supplier_form() 
    {

        return view("add_supplier");
    }

    public function add_supplier(Request $request) 
    {
        $validated = $request->validate([
            "name" => "required",
            "adress" => "required",
            "zipcode" => "required",
            "city" => "required",
            "country" => "required",
            "email" => "required",
            "phone_number" => "required",
          ]);
          
        $supplier = new Supplier();
        $supplier->name = $validated["name"];
        $supplier->adress = $validated["adress"];
        $supplier->zipcode = $validated["zipcode"];
        $supplier->city = $validated["city"];
        $supplier->country = $validated["country"];
        $supplier->email = $validated["email"];
        $supplier->phone_number = $validated["phone_number"];
        
        $supplier->save();
        return redirect('/suppliers');
    }

    public function display_supplier($supplier_id) {

        $supplier = DB::table('im_supplier')->find($supplier_id);

        $comment_writers = DB::table('im_supplier')->get();

        $comments = DB::table('im_supplier')
            ->join('im_comment', 'im_supplier.id', '=', 'im_comment.item_id')
            ->get();

        return view("view_supplier",["supplier" => $supplier,"comments" => $comments,'comment_writers' => $comment_writers]);

    }

    public function display_edit_supplier_form($supplier_id) 
    {

        $supplier = DB::table('im_supplier')->find($supplier_id);

        return view("edit_supplier",["supplier" => $supplier]);
    }

    public function edit_supplier(Request $request, $supplier_id) 
    {

        $name = $request->input('name');  
        $adress = $request->input('adress');
        $zipcode = $request->input('zipcode'); 
        $city = $request->input('city'); 
        $country = $request->input('country'); 
        $email = $request->input('email'); 
        $phone_number = $request->input('phone_number'); 

        $updated_name = DB::table('im_supplier')
            ->where('id', $supplier_id)
            ->update(
                ['name' => $name],
            );
        $updated_adress = DB::table('im_supplier')
            ->where('id', $supplier_id)
            ->update(
                ['adress' => $adress],
            );
        $updated_zipcode = DB::table('im_supplier')
            ->where('id', $supplier_id)
            ->update(
                ['zipcode' => $zipcode],
            );
        $updated_city = DB::table('im_supplier')
            ->where('id', $supplier_id)
            ->update(
                ['city' => $city],
            );
        $updated_country = DB::table('im_supplier')
            ->where('id', $supplier_id)
            ->update(
                ['country' => $country],
            );
        $updated_email = DB::table('im_supplier')
            ->where('id', $supplier_id)
            ->update(
                ['email' => $email],
            );
        $updated_phone_number = DB::table('im_supplier')
            ->where('id', $supplier_id)
            ->update(
                ['phone_number' => $phone_number],
            );
            

        return redirect('/suppliers/view/'.$supplier_id);
    }

    public function delete_supplier(Request $request, $supplier_id) 
    {
        DB::table('im_comment')->where('supplier_id', $user_id)->delete();

        DB::table('im_supplier')->where('id', $supplier_id)->delete();

        return redirect('/suppliers');
    }

    public function display_modal(Request $request) 
    {
        $url = $request->url();
        return view("display_modal",['url'=>$url]);
    }
}

?>