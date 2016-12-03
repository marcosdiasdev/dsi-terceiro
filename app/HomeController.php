<?php
namespace App;

class HomeController {

    public function index($params = array()) {
        View::render('home');
    }
}
?>