<?php
namespace App\Models;
abstract class Personne{
    protected ?string $name;
    protected ?int $id;
    protected ?int $annee_Experience;
    protected ?int $ville;
    public function __construct(?string $name = null, ?int $id = null, ?int $annee_Experience = null, ?int $ville = null ){
    $this->name = $name;
    $this->id = $id;
    $this->annee_Experience = $annee_Experience;
    $this->ville = $ville;
    }

    public function getName(): ?string{
        return $this->name;

    }
    public function getId(): ?int{
        return $this->id;

    }
    public function getAnneExp(): ?int{
    return $this->annee_Experience;

    }
    public function getville(): ?int{
        return $this->ville;
    }
}
