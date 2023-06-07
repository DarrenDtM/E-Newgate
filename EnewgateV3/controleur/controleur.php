<?php

     class Controleur 
     {
          public $manageclient;

          public function __construct()
          {
               require_once("../../../modele/modeleClient.php");
               $this->modeleClient = new modeleClient();
               $this->modeleClient->getConnection();
          }

          public function Dispatcher($action, $idCli = null)
          {
               switch ($action) 
               {
                    case 'editer' :
                         // Appeler un client identifier par id
                         require_once("modele/client.php");
                         include 'vue/vueClient.php';
                         break;          
                    case 'supprimer' :
                         // Supprimer un client par id
                         $element = $this->modeleClient->deleteClient($idCli);
                         break;
                    case 'modifier' :
                         // Modifier un client par id
                         require_once("modele/client.php");
                         include 'vue/vueUpdateClient.php';
                         break;
                    case 'ajouter' :
                         // Ajouter un client
                         require_once("modele/client.php");
                         include 'vue/vueAjoutClient.php';
                         break;   
                    default:
                         // On appel la liste de tous les clients
                         $clients = $this->modeleClient->getClients();
                         include 'C:\wamp64\www\apk\vue\admin\client\vueClients.php';

                    break;
;
          
               }
          }
     }

?>
        
