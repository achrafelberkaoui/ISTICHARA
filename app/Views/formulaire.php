<?php 
include __DIR__ . '/layout/header.php'; ?>

<form method="POST" action="avocat/creatAvocat">
    <h2>Ajouter Prestataire</h2>

    <select name="type" id="type">
        <option value="">-- Choisir type --</option>
        <option value="avocat">Avocat</option>
        <option value="huissier">Huissier</option>
    </select>

    <input type="text" name="nom" placeholder="Nom">
    <label for="ville_id">VILLE</label>
    <select name="ville_id">
        <option value="1">Rabat</option>
        <option value="2">Casablanca</option>
    </select>
    <input type="number" name="annee_Experience" placeholder="Annee Experience">
    
    <div id="avocatFields" style="display:none;">
        <input type="text" name="specialite" placeholder="Spécialité">
        <label for="consultation_en_ligne">Consultation en ligne</label>
        <select name="consultation_en_ligne">
            <option value="1">OUI</option>
            <option value="2">NON</option>
        </select>
    </div>

    <div id="huissierFields" style="display:none;">
        <input type="text" name="zone" placeholder="Zone d’intervention">
    </div>
    <?php if (!empty($error)) : ?>
    <p style="color:red"><?= $error ?></p>
    <?php endif; ?>
    <button type="submit">Enregistrer</button>
</form>

<script src=  "../public/script.js"></script>

<?php include __DIR__ . '/layout/footer.php'; ?>
