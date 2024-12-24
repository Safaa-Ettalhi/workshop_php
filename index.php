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
<a href="liste_livres.php" class="text-blue-500 hover:text-blue-600 underline font-semibold">
   voir les livre
</a>
    <h1 class="text-center font-bold text-3xl mb-4 mt-4">Ajouter un livre</h1>
    <form method="POST" action="ajouter_livre.php" class="max-w-lg mx-auto bg-gray-100/30 p-6 rounded-lg shadow-lg">
    <label for="titre" class="block text-gray-700 font-semibold mb-2">Titre :</label>
    <input type="text" id="titre" name="titre" required class="w-full p-3 mb-4 border border-gray-300 rounded-md " placeholder="Entrez le titre du livre">

    <label for="auteur" class="block text-gray-700 font-semibold mb-2">Auteur :</label>
    <input type="text" id="auteur" name="auteur" required class="w-full p-3 mb-4 border border-gray-300 rounded-md " placeholder="Entrez le nom d'auteur">

    <label for="categorie" class="block text-gray-700 font-semibold mb-2">Catégorie :</label>
    <input type="text" id="categorie" name="categorie" required class="w-full p-3 mb-4 border border-gray-300 rounded-md " placeholder="Entrez la catégorie ">

    <label for="disponibilite" class="block text-gray-700 font-semibold mb-2">Disponible :</label>
    <input type="checkbox" id="disponibilite" name="disponibilite" checked class="h-5 w-5  mb-4">

    <button type="submit" class="w-full py-3 bg-gray-800 text-white font-semibold rounded-md hover:bg-gray-700 ">
        Ajouter le livre
    </button>
</form>


 

</body>
</html>
