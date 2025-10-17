echo '<?php
include "../public/header.php";
include "../public/nav_barre.php";
?>

<main>
    <h2>Liste des Professeurs</h2>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Spécialité</th>
        </tr>
        <!-- Les données seront ajoutées dynamiquement -->
    </table>
</main>

<?php include "../public/footer.php"; ?>' > IHM/Prof/affichage.php
