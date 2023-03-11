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

    /**
     * Read the csv file and insert its data to the table
     */
    public function insertData(PDO $pdo, string $filePath) {
        // Read csv file
        $file = new SplFileObject($filePath);
        $file->setFlags(SplFileObject::READ_CSV);

        $sql = "";

        foreach($file as $row) {
            $date = explode(";", $row[0])[0];
            $ville = explode(";", $row[0])[1];
            $periode = explode(";", $row[0])[2];
            $resumeTemps = explode(";", $row[0])[3];
            $identifiantResume = explode(";", $row[0])[4];
            $temperatureMin = explode(";", $row[0])[5];
            $temperatureMax = explode(";", $row[0])[6];
            $commentaire = explode(";", $row[0])[7];

            $sql = "INSERT INTO meteo (date, ville, periode, resume_temps, identifiant_resume, temperature_min, temperature_max, commentaire) VALUES ($date, $ville, $periode, $resumeTemps, $identifiantResume, $temperatureMin, $temperatureMax, $commentaire)";

            $statement = $pdo->prepare($sql);
            $statement->execute();
        }

    }

    public function selectData(PDO $pdo) {
        
        // Return a new Meteo object
    }

}



?>
