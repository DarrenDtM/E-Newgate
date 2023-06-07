<?php

class Utilisateur {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getProfilUtilisateur($idUtilisateur) {
        $query = "SELECT * FROM client WHERE idcli = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $idUtilisateur);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
