echo '<?php
include "../public/header.php";
include "../public/nav_barre.php";
?>

<main>
    <h2>Liste des Étudiants</h2>
    <table border="1">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Filière</th>
        </tr>
        <!-- Les données seront ajoutées dynamiquement -->
    </table>
</main>

<?php include "../public/footer.php"; ?>' > IHM/Etudiant/affichage.php
