<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Supplier;

class ProductManagerController extends ManagerBaseEditableController
{
    /**
     * This class will manage Products.
     * @return \Illuminate\View\View
     */

    public function display_products_main_page()
    {
        return view('products');
        
    }

    public function display_add_product_form() 
    {

        return view("add_product");
    }

    public function add_product(Request $request) 
    {
        $validated = $request->validate([
            "name" => "required",
            "supplier" => "required",
            "price" => "required",
          ]);
          
        $product = new Product();
        $product->name = $validated["name"];
        $product->supplier_id = $validated["supplier_id"];
        $product->price = $validated["price"];
        $product->save();
        return redirect('/products');
    }
}

?>