<?php
namespace Models;
use Models\Personne;

class Huissier extends Personne{
    private ?string $types_actes;
    public function __construct(?string $name = null, ?int $id = null, ?int $annee_Experience = null, ?int $ville = null, ?string $types_actes = null){
        parent::__construct($name, $id, $annee_Experience, $ville);
        $this->types_actes = $types_actes;
    }
    public function getTypeActes(): ?string{
        return $this->types_actes;

    }
}