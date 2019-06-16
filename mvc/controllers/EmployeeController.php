<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 6/11/2019
 * Time: 6:33 PM
 */

namespace MVC\Controllers;

class EmployeeController{

    public function index()
    {
        echo "<br>" . __METHOD__;

        //include view

        include_once "mvc/view/employee/index.php";
    }

    public function create()
    {
        echo "<br>" . __METHOD__;

        //include view

        include_once "mvc/view/employee/create.php";
    }

    public function edit()
    {
        echo "<br>" . __METHOD__;

        //include view

        include_once "mvc/view/employee/edit.php";
    }

    public function delete()
    {
        echo "<br>" . __METHOD__;

        //include view

        include_once "mvc/view/employee/delete.php";
    }

}