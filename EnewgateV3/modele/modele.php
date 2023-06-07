<?php
    /* Accès à la base de données *************************/
    class Database {
        // Définition des attributs
        protected $host;
        protected $dbname;
        protected $user;
        protected $passwd;
        protected $sgbd;
          
        protected $cnx;

        // Constructeur initialisation des données
        public function __construct()
        {
            $this->host   = "localhost";
            $this->dbname = "accevil2";
            $this->user   = "devil";
            $this->passwd = "devil";
            $this->sgbd   = "mysql";

            /* $this->cnx = null; */
        }

        // Constructeur Méthode de connexion à la base de données
        public function getConnection()
        {
            try{
                $this->cnx = new PDO($this->sgbd.":host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->passwd);
                $this->cnx->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Connexion à la base de données impossible : " . $exception->getMessage();
            }
            return $this->cnx;
        }

        // Execute une requête SQL paramétrée
        protected function executeRequete($sql, $vars = null)
        {
            // Exécution d'une requête préparée
            $rqt = $this->cnx->prepare($sql);
            $rqt->execute($vars);
            return $rqt;
        }

        // Méthode de déconnexion à la base de données
        public function fermerConnexion() 
        {
            $this->cnx = null;
        }
    }
?>