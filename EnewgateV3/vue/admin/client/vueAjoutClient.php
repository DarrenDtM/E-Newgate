<?php

    $titre = "DEVIL Ajouter Client";
    $element = $this->modeleClient->getClient($_REQUEST['val']);
    $client = new Client($element);

    $contenu = '<form action="" method="post">';
    $contenu .= '<h3>Ajouter :</h3><br>';

    $contenu .= '<label for="nom">Nom: </label>';
    $contenu .= '<input type="text" name="nom" id="nom"> <br><br>';

    $contenu .= '<label for="prenom">Prenom: </label>';
    $contenu .= '<input type="text" name="prenom" id="prenom"> <br><br>';

    $contenu .= '<label for="email">Email: </label>';
    $contenu .= '<input type="text" name="email" id="email"> <br><br>';

    $contenu .= '<label for="telephone">Telephone: </label>';
    $contenu .= '<input type="text" name="telephone" id="telephone"> <br><br>';

    $contenu .= '<label for="motdepasse">Mot de passe: </label>';
    $contenu .= '<input type="text" name="motdepasse" id="motdepasse"> <br><br>';

    $contenu .= '<input type="submit" name="ajouter" id="ajouter" value="Ajouter"> <br><br>';
    $contenu .= '</form>';

    $nom        = $_REQUEST['nom'];
    $prenom     = $_REQUEST['prenom'];
    $email      = $_REQUEST['email'];
    $telephone  = $_REQUEST['telephone'];
    $motdepasse = $_REQUEST['motdepasse'];

    if(isset($_REQUEST['ajouter']))
    {
        $element = $this->modeleClient->addClient($nom, $prenom, $email, $telephone, $motdepasse);
    }

    include "template.php";

?>