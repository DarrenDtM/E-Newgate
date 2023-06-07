<?php
class ProfilController {
    private $utilisateur;

    public function __construct($utilisateur) {
        $this->utilisateur = $utilisateur;
    }

    public function afficherProfil($idUtilisateur) {
        $profil = $this->utilisateur->getProfilUtilisateur($idUtilisateur);
        $profilFilePath = "../vue/profil.php";

        if (file_exists($profilFilePath)) {
            include_once $profilFilePath;
        } else {
            echo "Le fichier de profil n'existe pas.";
        }
    }
}
?>