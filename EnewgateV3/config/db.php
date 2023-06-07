<?php
$dbHost = "mysql-devil.alwaysdata.net";
$dbName = "devil_accevil2";
$dbUser = "devil";
$dbPassword = "devil97450";

try {
    $db = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit();
}
?>
