<?php
require_once 'db.php';
require_once 'clientModel.php';
require_once 'clientController.php';

$model = new ClientModel($db);
$controller = new ClientController($model);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $controller->login($email, $password);
}

require_once '../vue/loginView.php';
?>
