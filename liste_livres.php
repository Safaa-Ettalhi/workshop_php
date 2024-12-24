<?php 
include("db.php");
$requete = "SELECT * FROM livres";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Ajouter un livre</title>
</head>
<body>
<a href="index.php" class="text-blue-500 hover:text-blue-600 underline font-semibold">
    Retour au formulaire
</a>

    <!-- fetch_assoc -->
    <h2  class="text-center font-bold text-3xl mb-4 mt-4">Affichage avec fetch_assoc :</h2>
    <table class="min-w-full table-auto border-collapse bg-white shadow-md rounded-lg">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-4 py-2 text-left">ID</th>
            <th class="px-4 py-2 text-left">Titre</th>
            <th class="px-4 py-2 text-left">Auteur</th>
            <th class="px-4 py-2 text-left">Catégorie</th>
            <th class="px-4 py-2 text-left">Date d'ajout</th>
            <th class="px-4 py-2 text-left">Disponibilité</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $resultat = mysqli_query($connection, $requete);
        while ($ligne = mysqli_fetch_assoc($resultat)) : ?>
            <tr class="border-t hover:bg-gray-100">
                <td class="px-4 py-2"><?= $ligne['id'] ?></td>
                <td class="px-4 py-2"><?= $ligne['titre'] ?></td>
                <td class="px-4 py-2"><?= $ligne['auteur'] ?></td>
                <td class="px-4 py-2"><?= $ligne['categorie'] ?></td>
                <td class="px-4 py-2"><?= $ligne['date_ajout'] ?></td>
                <td class="px-4 py-2"><?= $ligne['disponibilite'] ? 'Oui' : 'Non' ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
    </table>


    <!-- fetch_row -->
    <h2  class="text-center font-bold text-3xl mb-4 mt-4">Affichage avec fetch_row :</h2>
    <table class="min-w-full table-auto border-collapse bg-white shadow-md rounded-lg">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-4 py-2 text-left">ID</th>
            <th class="px-4 py-2 text-left">Titre</th>
            <th class="px-4 py-2 text-left">Auteur</th>
            <th class="px-4 py-2 text-left">Catégorie</th>
            <th class="px-4 py-2 text-left">Date d'ajout</th>
            <th class="px-4 py-2 text-left">Disponibilité</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $resultat = mysqli_query($connection, $requete);
        while ($ligne = mysqli_fetch_row($resultat)) : ?>
            <tr class="border-t hover:bg-gray-100">
                <td class="px-4 py-2"><?= $ligne[0] ?></td>
                <td class="px-4 py-2"><?= $ligne[1] ?></td>
                <td class="px-4 py-2"><?= $ligne[2] ?></td>
                <td class="px-4 py-2"><?= $ligne[3] ?></td>
                <td class="px-4 py-2"><?= $ligne[4] ?></td>
                <td class="px-4 py-2"><?= $ligne[5] ? 'Oui' : 'Non' ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
    </table>


    <!-- fetch_array -->
    <h2  class="text-center font-bold text-3xl mb-4 mt-4">Affichage avec fetch_array :</h2>
    <table class="min-w-full table-auto border-collapse bg-white shadow-md rounded-lg">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-4 py-2 text-left">ID</th>
            <th class="px-4 py-2 text-left">Titre</th>
            <th class="px-4 py-2 text-left">Auteur</th>
            <th class="px-4 py-2 text-left">Catégorie</th>
            <th class="px-4 py-2 text-left">Date d'ajout</th>
            <th class="px-4 py-2 text-left">Disponibilité</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $resultat = mysqli_query($connection, $requete);
        while ($ligne = mysqli_fetch_array($resultat, MYSQLI_BOTH)) : ?>
            <tr class="border-t hover:bg-gray-100">
                <td class="px-4 py-2"><?= $ligne['id'] ?></td>
                <td class="px-4 py-2"><?= $ligne['titre'] ?></td>
                <td class="px-4 py-2"><?= $ligne['auteur'] ?></td>
                <td class="px-4 py-2"><?= $ligne['categorie'] ?></td>
                <td class="px-4 py-2"><?= $ligne['date_ajout'] ?></td>
                <td class="px-4 py-2"><?= $ligne['disponibilite'] ? 'Oui' : 'Non' ?></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
    </table>


    <!-- fetch_all -->
    <h2  class="text-center font-bold text-3xl mb-4 mt-4">Affichage avec fetch_all :</h2>
    <table class="min-w-full table-auto border-collapse bg-white shadow-md rounded-lg">
    <thead class="bg-gray-800 text-white">
        <tr>
            <th class="px-4 py-2 text-left">ID</th>
            <th class="px-4 py-2 text-left">Titre</th>
            <th class="px-4 py-2 text-left">Auteur</th>
            <th class="px-4 py-2 text-left">Catégorie</th>
            <th class="px-4 py-2 text-left">Date d'ajout</th>
            <th class="px-4 py-2 text-left">Disponibilité</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $resultat = mysqli_query($connection, $requete);
        $lignes = mysqli_fetch_all($resultat, MYSQLI_ASSOC);
        foreach ($lignes as $ligne) : ?>
            <tr class="border-t hover:bg-gray-100">
                <td class="px-4 py-2"><?= $ligne['id'] ?></td>
                <td class="px-4 py-2"><?= $ligne['titre'] ?></td>
                <td class="px-4 py-2"><?= $ligne['auteur'] ?></td>
                <td class="px-4 py-2"><?= $ligne['categorie'] ?></td>
                <td class="px-4 py-2"><?= $ligne['date_ajout'] ?></td>
                <td class="px-4 py-2"><?= $ligne['disponibilite'] ? 'Oui' : 'Non' ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>

</body>
</html>
