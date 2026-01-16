<?php
namespace Controllers;
class AvocatController{
    public static function index() {
        include __DIR__ . '/../Views/avocat.php';
    }
    public function test(){
        echo "abde";
    }
    
}