<?php

$dbUser = "devil";
$dbPassword = "devil97450";

function ajouterUser($nom, $prenom, $email, $telephone, $genre, $motdepasse)
{
    require_once("../config/db.php");
    $access = new PDO("mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2;charset=utf8", $dbUser, $dbPassword);
    $req = $access->prepare("INSERT INTO client (nom, prenom, email, telephone, genre, motdepasse) VALUES (?, ?, ?, ?, ?, ?)");
    $req->execute(array($nom, $prenom, $email, $telephone, $genre, $motdepasse));
    $req->closeCursor();
}

function getProduitById($id)
{
    require_once("../config/db.php");
    $access = new PDO("mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2;charset=utf8", $dbUser, $dbPassword);
    $req = $access->prepare("SELECT * FROM produits WHERE id = ?");
    $req->execute(array($id));
    $produit = $req->fetch(PDO::FETCH_OBJ);
    $req->closeCursor();
    return $produit;
}


function getUsers($email, $password)
{
    require_once("../config/db.php");
    $access = new PDO("mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2;charset=utf8", $dbUser, $dbPassword);
    $req = $access->prepare("SELECT * FROM client");
    $req->execute();
    if($req->rowCount() == 1){
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        foreach($data as $i){
            $mail = $i->email;
            $mdp = $i->motdepasse;
        }
        if($mail == $email AND $mdp == $password)
        {
            return $data;
        }
        else{
            return false;
        }
    }
}

function modifier($image, $nom, $prix, $desc, $id)
{
    require_once("../config/db.php");
    $access = new PDO("mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2;charset=utf8", $dbUser, $dbPassword);
    $req = $access->prepare("UPDATE produits SET image=?, nom=?, prix=?, description=? WHERE id=?");
    $req->execute(array($image, $nom, $prix, $desc, $id));
    $req->closeCursor();
}

function afficherUnProduit($id)
{
    require_once("../config/db.php");
    $access = new PDO("mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2;charset=utf8", $dbUser, $dbPassword);
    $req = $access->prepare("SELECT * FROM produits WHERE id=?");
    $req->execute(array($id));
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    $req->closeCursor();
    return $data;
}

function ajouter($image, $nom, $prix, $desc)
{
    require_once("../config/db.php");
    $access = new PDO("mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2;charset=utf8", $dbUser, $dbPassword);
    $req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUES (?, ?, ?, ?)");
    $req->execute(array($image, $nom, $prix, $desc));
    $req->closeCursor();
}

function afficher()
{
    require_once("../config/db.php");
    $access = new PDO("mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2;charset=utf8", $dbUser, $dbPassword);
    $req = $access->prepare("SELECT * FROM produits ORDER BY id DESC");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    $req->closeCursor();
    return $data;}

function supprimer($id)
{
    require_once("../config/db.php");
    $access = new PDO("mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2;charset=utf8", $dbUser, $dbPassword);
    $req = $access->prepare("DELETE FROM produits WHERE id=?");
    $req->execute(array($id));
    $req->closeCursor();
}

function getAdmin($email, $password)
{
    require_once("../config/db.php");
    $access = new PDO("mysql:host=mysql-devil.alwaysdata.net;dbname=devil_accevil2;charset=utf8", $dbUser, $dbPassword);
    $req = $access->prepare("SELECT * FROM admin WHERE id=33");
    $req->execute();
    if($req->rowCount() == 1){
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        foreach($data as $i){
            $mail = $i->email;
            $mdp = $i->motdepasse;
        }


      if($mail == $email AND $mdp == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }}
?>