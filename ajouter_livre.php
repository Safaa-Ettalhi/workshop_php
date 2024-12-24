<?php
require_once( 'db.php'); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $categorie = $_POST['categorie'];
    $disponibilite = isset($_POST['disponibilite']) ? 1 : 0;

    $requete = "INSERT INTO livres (titre, auteur, categorie, disponibilite) 
                VALUES ('$titre', '$auteur', '$categorie', '$disponibilite')";

    if (mysqli_query($connection, $requete)) {
        echo "Livre ajouté avec succès !";
        header("Location: ../liste_livres.php");
    } else {
        echo "Erreur lors de l'ajout : " . mysqli_error($connection);
    }
}
?>
