<?php
session_start();

include "../modele/commande.php";

if(isset($_SESSION['user']))
{
     if(!empty($_SESSION['user']))
    {
        header("Location: client/");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<br>
<br>
<br>
<br>

<div class="container" style="display: flex; justify-content: start-end">
    <div class="row">
        <div class="col-md-10">

        <form method="post">
                <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="name" name="nom" class="form-control" style="width: 350%;" >
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="name" name="prenom" class="form-control" style="width: 350%;" >
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" style="width: 350%;" >
            </div>
            <div class="mb-3">
                <label userfor="telephone" class="form-label">Telephone</label>
                <input type="telephone" name="telephone" class="form-control" style="width: 350%;" >
            </div>
            <div class="mb-3">
                <label for="motdepasse" class="form-label">Mot de passe</label>
                <input type="password" name="motdepasse" class="form-control" style="width: 350%;">
            </div>
            <br>
            <input type="submit" name="envoyer" class="btn btn-info" value="Envoyer">
        </form>

        </div>
    </div>
</div>
    
</body>
</html>

<?php


    if(isset($_POST['envoyer']))
    {
        if(!empty($_POST['email']) AND !empty($_POST['motdepasse']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['telephone']))
        {
            $email = htmlspecialchars(strip_tags($_POST['email'])) ;
            $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));
            $nom = htmlspecialchars(strip_tags($_POST['nom']));
            $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
            $telephone = htmlspecialchars(strip_tags($_POST['telephone']));
               
            $user = ajouterUser($nom, $prenom, $email, $telephone, $motdepasse);

            if($user){
                echo "Compte non créer !";
            }else{
                $_SESSION['user'] = $user;
                header('Location: ../index.php');

            }
        }

    }

?>