<?php
    
    require_once '_config.php';

    class Database {
        private $host = DB_HOST;
        private $username = DB_USERNAME;
        private $password = DB_PASSWORD;
        private $db_name = DB_NAME;

        private $dbh;
        private $stmt; 

        public function __construct() {

            // data source name
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->db_name;

            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            try {
                $this->dbh = new PDO($dsn, $this->username, $this->password, $option);
            } catch(PDOException $e) {
                die($e->getMessage());
            }

        }       
        

        public function queryResult($query) {
            $this->stmt = $this->dbh->prepare($query);
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function queryInsert($query) {
            $this->stmt = $this->dbh->prepare($query);
            $this->stmt->execute();
            return $this->stmt->rowCount();
        }

    }

?>