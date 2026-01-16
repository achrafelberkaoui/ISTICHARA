<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container">
    <h2>⚖️ Huissiers de Justice</h2>

    <!-- Filtres -->
    <form method="GET" action="/huissiers" class="card filters">
        <input type="text" name="nom" placeholder="Rechercher par nom">

        <input type="text" name="ville" placeholder="Ville">

        <select name="acte">
            <option value="">Type d’acte</option>
            <option value="signification">Signification</option>
            <option value="execution">Exécution</option>
            <option value="constat">Constats</option>
        </select>

        <button class="btn">Filtrer</button>
    </form>

    <!-- Liste Huissiers -->
    <div class="cards">
        <div class="card profile">
            <h3>M. Youssef Idrissi</h3>
            <p><strong>Ville :</strong> Fès</p>
            <p><strong>Zone d’intervention :</strong> Fès – Meknès</p>
            <p><strong>Types d’actes :</strong> Signification, Exécution</p>

            <a href="/huissier/1" class="btn-sm">Voir profil</a>
        </div>

        <div class="card profile">
            <h3>Mme Khadija Alaoui</h3>
            <p><strong>Ville :</strong> Marrakech</p>
            <p><strong>Zone d’intervention :</strong> Marrakech – Safi</p>
            <p><strong>Types d’actes :</strong> Constats</p>

            <a href="/huissier/2" class="btn-sm">Voir profil</a>
        </div>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <a>&laquo;</a>
        <a class="active">1</a>
        <a>2</a>
        <a>&raquo;</a>
    </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
