<?php
namespace Models;
class Huissier extends Prestataire{
    private string $types_actes;
    public function __construct( string $specialites = null, string $consultation_en_ligne = null){
        parent::__construct($name, $id, $annee_Experience, $ville);
        $this->types_actes = $types_actes;
    }
}