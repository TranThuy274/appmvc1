<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 6/11/2019
 * Time: 6:33 PM
 */

namespace MVC\Controllers;

class ErrorController{

    public function redirect404() {
        include_once "mvc/view/error/404.php";
    }

}