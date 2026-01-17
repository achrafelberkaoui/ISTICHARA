<?php
namespace Services;
class personneValidate{
public function validate(array $data): ?string {

    if (empty($data['type'])) {
        return "Choisissez le type";
    }

    if (empty($data['nom'])) {
        return "Le nom est obligatoire";
    }

    if (empty($data['ville_id'])) {
        return "La ville est obligatoire";
    }

    if (!is_numeric($data['annee_Experience']) || $data['annee_Experience'] < 0) {
        return "Annee d'experience invalide";
    }

    if ($data['type'] === 'avocat' && empty($data['specialite'])) {
        return "La spécialité est obligatoire pour l'avocat";
    }

    if ($data['type'] === 'huissier' && empty($data['types_actes'])) {
        return "type actes est obligatoire pour l'huissier";
    }

    return null;
}
}

