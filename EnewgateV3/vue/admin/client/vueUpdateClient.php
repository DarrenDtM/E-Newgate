<?php

    $titre = "ailTECH Modifier";
    $element = $this->modeleClient->getClient($_REQUEST['val']);
    $client = new Client($element);

    $contenu = '<form action="" method="post">';
    $contenu .= '<h3>Modifier :</h3><br>';

    $contenu .= '<label for="nom">Nom: </label>';
    $contenu .= '<input type="text" name="nom" id="nom" value="' . $client->getNom() . '"> <br><br>';

    $contenu .= '<label for="prenom">Prenom: </label>';
    $contenu .= '<input type="text" name="prenom" id="prenom" value="' . $client->getPrenom() . '"> <br><br>';

    $contenu .= '<label for="email">Email: </label>';
    $contenu .= '<input type="text" name="email" id="email" value="' . $client->getEmail() . '"> <br><br>';

    $contenu .= '<label for="telephone">Telephone: </label>';
    $contenu .= '<input type="text" name="telephone" id="telephone" value="' . $client->getTelephone() . '"> <br><br>';

    $contenu .= '<label for="motdepasse">Mot de passe: </label>';
    $contenu .= '<input type="text" name="motdepasse" id="motdepasse" value="' . $client->getMotdepasse() . '"> <br><br>';


    $contenu .= '<input type="hidden" name="id" id="id" value="' . $client->getIdCli() . '">';
    $contenu .= '<input type="submit" name="modifier" id="modifier" value="Modifier"> <br><br>';
    
    $contenu .= '</form>';

    $nom            = $_REQUEST['nom'];
    $prenom         = $_REQUEST['prenom'];
    $email          = $_REQUEST['email'];
    $telephone      = $_REQUEST['tel'];
    $motdepasse     = $_REQUEST['motdepasse'];

    if(isset($_REQUEST['modifier']))
    {
        $element = $this->modeleClient->updateClient($idCli, $nom, $prenom, $email, $telephone, $motdepasse);
    }

    include "template.php";

?>