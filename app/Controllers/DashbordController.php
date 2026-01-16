<?php
namespace Controllers;
class DashbordController{
    public static function index() {
        include __DIR__ . '/../Views/dashbord.php';
    }
    public function test(){
        echo "abde";
    }
    
}