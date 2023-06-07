<?php
require("../modele/commande.php");

// Récupérer l'identifiant du produit depuis l'URL
$id = $_GET['id'];

// Charger les détails du produit en utilisant l'identifiant
$produit = getProduitById($id);

// Vérifier si le produit existe
if (!$produit) {
    // Afficher un message d'erreur ou rediriger vers une page d'erreur
    exit("Le produit n'existe pas.");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Détails du produit</title>
    <!-- Ajoutez vos balises de style et de script ici -->
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 0 auto; /* Centre la carte horizontalement */
            max-width: 400px; /* Largeur maximale de la carte */
        }
        .card img {
            display: block;
            max-width: 100%;
            height: auto;
            object-fit: contain; /* Ajuste les images pour qu'elles aient toutes la même proportion */
            margin: 0 auto; /* Centre les images horizontalement */
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1><?= $produit->nom ?></h1>
        <img src="<?= $produit->image ?>" alt="<?= $produit->nom ?>">
        <p>Prix : <?= $produit->prix ?>€</p>
        <p>Description : <?= $produit->description ?></p>
        <!-- Ajoutez d'autres informations sur le produit si nécessaire -->

        <!-- Boutons -->
        <a class="btn" href="acheter.php?id=<?= $produit->id ?>">Acheter</a>
        <a class="btn" href="produit.php">Retour</a>
    </div>

    <!-- Ajoutez vos autres éléments HTML ici -->

    <!-- Ajoutez vos balises de script ici -->
</body>
</html>
