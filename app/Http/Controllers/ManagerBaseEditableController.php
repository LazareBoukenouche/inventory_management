<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ManagerBaseEditableController extends ManagerBaseController
{
    /**
     * This class inherit from ManagerBaseController 
     * and add the create, edit and delete methods.
     * @return \Illuminate\View\View
     */
    public function create() {}

    public function edit($id) {}

    public function delete($id) {}
}

?>