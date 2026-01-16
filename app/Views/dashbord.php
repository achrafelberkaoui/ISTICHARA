<?php include __DIR__ . '/layout/header.php'; ?>

<div class="container">
    <h2>📊 Tableau de Bord</h2>

    <div class="stats">
        <div class="stat-card">
            <h3>Total Avocats</h3>
            <p>120</p>
        </div>

        <div class="stat-card">
            <h3>Total Huissiers</h3>
            <p>45</p>
        </div>
    </div>

    <h3>Répartition par ville</h3>
    <table>
        <tr>
            <th>Ville</th>
            <th>Nombre</th>
        </tr>
        <tr>
            <td>Casablanca</td>
            <td>40</td>
        </tr>
    </table>

    <h3>Top 3 Avocats (Expérience)</h3>
    <table>
        <tr>
            <th>Nom</th>
            <th>Années</th>
        </tr>
        <tr>
            <td>Me Karim</td>
            <td>20</td>
        </tr>
    </table>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
