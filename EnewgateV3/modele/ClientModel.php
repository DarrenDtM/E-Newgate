<?php
class ClientModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getClientByEmail($email) {
        $query = "SELECT * FROM client WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
