<?php
// Contrôleur

// Inclure le modèle et les fichiers nécessaires
require_once 'modele.php';
require_once 'vue.php';

// Vérifier si l'ID du client est présent dans l'URL
if (isset($_GET['idcli'])) {
    $idcli = $_GET['idcli'];

    // Récupérer les informations du client à partir de l'ID
    $client = getClient($idcli);

    // Vérifier si le client existe
    if ($client !== false) {
        // Afficher la page de profil
        afficherProfil($client);
    } else {
        // Le client n'existe pas
        afficherErreur("Le client n'existe pas");
    }
} else {
    // L'ID du client n'est pas spécifié dans l'URL
    afficherErreur("ID du client manquant dans l'URL");
}
?>
