<?php
class ClientController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function login($email, $password) {
        $client = $this->model->getClientByEmail($email);

        if ($client && password_verify($password, $client['motdepasse'])) {
            // Connexion réussie
            session_start();
            $_SESSION['client'] = $client;
            header("Location: dashboard.php"); // Rediriger vers une page de tableau de bord
            exit();
        } else {
            // Identifiants invalides
            echo "Identifiants invalides. Veuillez réessayer.";
        }
    }
}
?>
