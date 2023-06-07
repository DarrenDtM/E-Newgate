<?php
    require_once("../../../modele/client.php");
    $titre = "Lister";
    $clients = $this->modeleClient->getClients();
    $contenu = "<div>";
    $contenu .= "<article>";
    $contenu .= "<h2>Liste de clients</h2>";
    $contenu .= "<article>";
    $contenu .= "<table>
                <thead>
                    <tr>
                        <th>IdCli</th>
                        <th>Nom</th>
                        <th>Courriel</th>
                        <th>Téléphone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>"; 

    foreach ($clients as $cle => $ligne)
    {
        $client = new Client($ligne);
        $contenu .="<td>".$client->getidCli()."</td>";
        $contenu .="<td>".$client->getNom()."</td>";
        $contenu .="<td>".$client->getEmail()."</td>";
        $contenu .="<td>".$client->getTelephone()."</td>";
        $contenu .="<td>
                        <a title='Détails' href='?action=editer&val=".$client->getidCli()."'>&#128270</a>
                        | 
                        <a title='Supprimer' href='?action=supprimer&val=".$client->getidCli()."'>&#128465;</a>
                        | 
                        <a title='Modifier' href='?action=modifier&val=".$client->getidCli()."'>&#128271;</a>
                    </td></tr>";
    }
    $contenu .="</tbody></table>";
    
    $contenu .="<br><a title='Ajouter' href='?action=ajouter&val=".$client->getidCli()."'>Ajouter &#8862;</a>";
    
    
    $contenu .= "</article>";
    $contenu .= "</div>";

    include "template.php";

?>