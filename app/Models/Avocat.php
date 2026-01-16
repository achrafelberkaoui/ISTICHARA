<?php
namespace Models;
use Models\Personne;

class Avocat extends Personne{
    private ?string $specialites;
    private ?string $consultation_en_ligne;
    public function __construct(?string $name = null, ?int $id = null, ?int $annee_Experience = null, ?int $ville = null, ?string $specialites = null, ?bool $consultation_en_ligne = null){
        parent::__construct($name, $id, $annee_Experience, $ville);
        $this->specialites = $specialites;
        $this->consultation_en_ligne = $consultation_en_ligne;
    }

    public function getSpecialites(): ?string{
        return $this->specialites;

    }
    public function getConsultation(): ?string{
        return $this->consultation_en_ligne;

    }

}

