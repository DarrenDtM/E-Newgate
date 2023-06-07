<?php
// Modèle

// Fonction pour vérifier les informations d'identification de l'utilisateur dans la base de données
function verifUtilisateur($email, $motdepasse) {
    // Connectez-vous à la base de données
    $connexion = new PDO('mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2', 'devil', 'devil97450');

    // Requête pour vérifier les informations d'identification
    $requete = $connexion->prepare("SELECT * FROM client WHERE email = :email AND motdepasse = :motdepasse");
    $requete->bindParam(':email', $email);
    $requete->bindParam(':motdepasse', $motdepasse);
    $requete->execute();

    // Récupérer le résultat de la requête
    $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

    // Fermer la connexion à la base de données
    $connexion = null;

    // Retourner l'utilisateur s'il existe, sinon retourner false
    return ($utilisateur !== false) ? $utilisateur : false;
}


function getClient($idcli) {
    // Connectez-vous à la base de données
    $connexion = new PDO('mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2', 'devil', 'devil97450');

    // Requête pour récupérer les informations du client
    $requete = $connexion->prepare("SELECT * FROM client WHERE idcli = :idcli");
    $requete->bindParam(':idcli', $idcli);
    $requete->execute();

    // Récupérer le résultat de la requête
    $client = $requete->fetch(PDO::FETCH_ASSOC);

    // Fermer la connexion à la base de données
    $connexion = null;

    // Retourner le client s'il existe, sinon retourner false
    return ($client !== false) ? $client : false;
}
?>

