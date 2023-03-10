<?php
class Database {
 


    
    public function __construct() {
        
    }

    /**
     * Connect to the database and create tables
     */
    public static function connexion(string $host, string $user, string $password, string $dbname) {
        try {
            //Connection
            $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

            $pdo = new PDO($dsn, $user, $password, $options);

            //Create tables
            $sql = "CREATE TABLE IF NOT EXISTS meteo(
                id INT NOT NULL AUTO_INCREMENT,
                date DATE NOT NULL,
                ville VARCHAR(20) NOT NULL,
                periode VARCHAR(20) NOT NULL,
                resume_temps VARCHAR(20) NOT NULL,
                identifiant_resume INT NOT NULL,
                temperature_min INT NOT NULL,
                temperature_max INT NOT NULL,
                commentaire VARCHAR(20) NOT NULL,
                PRIMARY KEY(id)  
            )";

            $statement = $pdo->prepare($sql);
            $statement->execute();

            return $pdo;
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }

    public function insertData() {

    }

    public function selectData() {
        
    }

}



?>
