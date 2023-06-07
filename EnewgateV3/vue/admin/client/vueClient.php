<?php

    $titre = "ailTECH Editer Client";
    $element = $this->modeleClient->getClient($_REQUEST['val']);
    $client = new Client($element);
    $contenu = "<div class='content'>";
    $contenu .= "<h2> Fiche Client :</h2>";
    $contenu .= "<article >
                    <!-- Nom du client -->
                    <h3>".$client->getNom()."</h3>";

    $contenu .= "<strong>IdCli : </strong>" .       $client->getidCli()    . " <br> ";
    $contenu .= "<strong>Nom : </strong>" .      $client->getNom()  . " <br> "; 
    $contenu .= "<strong>Courriel : </strong>" . $client->getEmail() . " <br> ";
    $contenu .= "<strong>Téléphone :</strong>" . $client->getTelephone() . " <br> ";
    $contenu .= "</article>";
    
    include "template.php";
    
?>