<?php
namespace Controllers;
use Models\Avocat;
class FormulaireController{
    public static function index() {
        include __DIR__ . '/../Views/formulaire.php';
    }
    public function test(){
        echo "abde";
    }
    
}
