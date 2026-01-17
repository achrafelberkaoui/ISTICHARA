<?php
namespace Controllers;
use Services\personneValidate;
use App\Models\Avocat;
use App\Models\Repository\AvocatRepository;
use Services\Database;

class AvocatController{
     private PDO $con;
    public function __construct(PDO $con)
    {
        self::$con = $con;
    }
    public static function index() {
        include __DIR__ . '/../Views/Avocat.php';
    }
    public static function creatNew(){

        if($_SERVER['REQUEST_METHOD'] !== 'POST'){
            $error = '';
        include __DIR__ . '/../Views/formulaire.php';
        return;
        }
    $data = $_POST;
    // var_dump($_POST['type']);
    $valid = new personneValidate();
    $error = $valid->validate($data);
    // var_dump($error);
    if($error){
        include __DIR__ . '/../Views/formulaire.php';
        return;
    }
    if($_POST['type']=== 'avocat'){
            $avocat = new Avocat(
                $data['nom'],
                null,
                $data['annee_Experience'],
                $data['ville_id'],
                $data['specialite'],
                $data['consultation_en_ligne']
            );
        $con = Database::getCon();
        $repoAVoc = new AvocatRepository($con);
        $repoAVoc->create($avocat);
    }


    }
}