<?php
namespace App\Models\Repository;
use Services\Database;
use App\Models\Avocat;
use PDO;

class AvocatRepository {
    private PDO $con;
    //DB
    public function __construct(PDO $con)
    {
        $this->con = $con;
    }
   //CREATE
   public function create(Avocat $avocat): bool
   {
    $con = Database::getCon();
    $stmt = $con->prepare("INSERT INTO avocate(name, specialites, annee_Experience, consultation_en_ligne, ville_id)
                            VALUES(:name, :specialites, :annee_Experience, :consultation_en_ligne, :ville_id)");
    return $stmt->execute([
        ':name'=> $avocat->getName(),
        ':specialites'=> $avocat->getSpecialites(),
        ':annee_Experience'=> $avocat->getAnneExp(),
        ':consultation_en_ligne'=> $avocat->getConsultation(),
        ':ville_id' => $avocat->getville()

    ]);
   }
   //GETALL
    // public function (Avocat $avocat): bool
   //GETONE
   //UPDATE
   //DELETE

}
