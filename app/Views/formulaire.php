<?php 
include __DIR__ . '/layout/header.php'; ?>

<form method="POST" action="/prestataire">
    <h2>Ajouter Prestataire</h2>

    <select name="type" id="type">
        <option value="">-- Choisir type --</option>
        <option value="avocat">Avocat</option>
        <option value="huissier">Huissier</option>
    </select>

    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="ville" placeholder="Ville">

    <div id="avocatFields" style="display:none;">
        <input type="text" name="specialite" placeholder="Spécialité">
        <input type="text" name="barreau" placeholder="Barreau">
    </div>

    <div id="huissierFields" style="display:none;">
        <input type="text" name="zone" placeholder="Zone d’intervention">
    </div>

    <button type="submit">Enregistrer</button>
</form>

<script src=  "../public/script.js"></script>

<?php include __DIR__ . '/layout/footer.php'; ?>
