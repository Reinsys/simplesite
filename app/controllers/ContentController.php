<?php
namespace App\Controllers;

use Reinsys\Simple\Controller;

class ContentController extends Controller{
    function __construct(){
    }
    public function home(){
        return $this->render('base.html');
    }
    public function page($page = null){
        return $this->render('page.html', ['page' => $page]);
    }
    public function resource($id = null){
        return $id;
    }
    public function about(){
        return $this->render('about.html');
    }
}