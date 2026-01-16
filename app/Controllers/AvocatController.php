<?php
namespace Controllers;
class AvocatController{
    public static function index() {
        include __DIR__ . '/../Views/Avocat.php';
    }
    public static function creatAvocat(){
        // var_dump(($_SERVER['REQUEST_METHOD'] === 'POST'));
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            $name = $_POST['nom'] ?? '';
            var_dump($_POST['nom']);
            $ville = $_POST['ville_id'] ?? '';
            var_dump($_POST['ville_id']);
            $consultation = $_POST['consultation_en_ligne'] ?? '';
            $specialite = $_POST['specialite'] ?? '';
            $annee_Experience = $_POST['annee_Experience'] ?? '';
            if (empty($name) || empty($ville) || empty($consultation) || empty($specialite) || empty($annee_Experience)) {
                $error = "Tous les champs sont obligatoires";
                include __DIR__ . '/../Views/formulaire.php';
            return;
            }

        }else{
            echo "hhhhhhhh";
        $error = '';
        include __DIR__ . '/../Views/formulaire.php';
        }
    }
}