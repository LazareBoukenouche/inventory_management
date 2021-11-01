<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ManagerBaseController extends Controller
{
    /**
     * This class contains only the list and view methods.
     * It will be inherited by other the classes 
     * ManageBaseEditable and SalesManager.
     * @return \Illuminate\View\View
     */
    public function view() {}

    public function list() {}
}

?>