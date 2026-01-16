<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container">
    <h2>🧑‍⚖️ Nos Avocats</h2>

    <!-- Filtres -->
    <form method="GET" action="/avocats" class="card filters">
        <input type="text" name="nom" placeholder="Rechercher par nom">

        <select name="specialite">
            <option value="">Toutes les spécialités</option>
            <option value="penal">Droit pénal</option>
            <option value="civil">Droit civil</option>
            <option value="famille">Droit de la famille</option>
            <option value="affaires">Droit des affaires</option>
        </select>

        <input type="number" name="experience" placeholder="Années d'expérience">

        <select name="consultation">
            <option value="">Consultation en ligne</option>
            <option value="1">Oui</option>
            <option value="0">Non</option>
        </select>

        <button class="btn">Filtrer</button>
    </form>

    <!-- Liste Avocats -->
    <div class="cards">
        <div class="card profile">
            <h3>Me Ahmed El Amrani</h3>
            <p><strong>Spécialité :</strong> Droit pénal</p>
            <p><strong>Ville :</strong> Casablanca</p>
            <p><strong>Expérience :</strong> 15 ans</p>
            <p><strong>Consultation en ligne :</strong> Oui</p>

            <a href="/avocat/1" class="btn-sm">Voir profil</a>
        </div>

        <div class="card profile">
            <h3>Me Salma Benali</h3>
            <p><strong>Spécialité :</strong> Droit de la famille</p>
            <p><strong>Ville :</strong> Rabat</p>
            <p><strong>Expérience :</strong> 10 ans</p>
            <p><strong>Consultation en ligne :</strong> Non</p>

            <a href="/avocat/2" class="btn-sm">Voir profil</a>
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
