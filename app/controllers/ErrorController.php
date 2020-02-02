<?php
namespace App\Controllers;

use Reinsys\Simple\Controller;

class ErrorController extends Controller{
    function __construct(){
    }
    public function notfound(){
        $template = $this->render('error.html', ['message' => 'Page not found.']);
        $this->display($template);
    }
    public function notallowed(){
        $template = $this->render('error.html', ['message' => 'Invalid request.']);
        $this->display($template);
    }

}