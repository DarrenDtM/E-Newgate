<?php
// Contrôleur
require_once 'modele.php';
require_once 'vue.php';
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclure le modèle et les fichiers nécessaires
    require_once 'modele.php';
    require_once 'vue.php';

    // Récupérer les données du formulaire
    $email = $_POST["email"];
    $motdepasse = $_POST["motdepasse"];

    // Vérifier les informations d'identification dans la base de données
    $utilisateur = verifUtilisateur($email, $motdepasse);

    // Si les informations d'identification sont valides, rediriger vers la page de profil
    if ($utilisateur !== false) {
        header("Location: profil.php?idcli=" . $utilisateur["idcli"]);
        exit();
    } else {
        // Afficher un message d'erreur si les informations d'identification sont incorrectes
        $erreur = "Identifiants invalides";
        afficherFormulaireConnexion($erreur);
    }
} else {
    // Afficher le formulaire de connexion
    afficherFormulaireConnexion();
}
?>
