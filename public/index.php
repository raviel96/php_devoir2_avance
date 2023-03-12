<?php
require_once "../functions/config.php";
require "../classes/Database.php";

$database = new Database();
$filePath = "../resources/paris.csv";
$tomorrowDate = "2100-12-06";
$afterTomorrowDate = "2100-12-07";

$pdo = Database::connexion($host, $user, $password, $dbname);

$database->insertData($pdo, $filePath);
$meteoListTomorrow = $database->selectData($pdo, $tomorrowDate);
$meteoListAfterTomorrow = $database->selectData($pdo, $afterTomorrowDate);

// var_dump($meteoListTomorrow);
// var_dump($meteoListAfterTomorrow);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Meteo</title>
</head>
<body>
    <div class="container center">
        <div class="card">
            <div class="card-header center">
                <p>Méteo</p>
            </div>
            <div class="tab">
                <div class="column">
                    <div class="column-header"><p>Dates</p></div>
                    <div class="content">
                        <p><?php echo $meteoListTomorrow[0]->getDate()?></p>
                        <p><?php echo $meteoListTomorrow[0]->getDate()?></p>
                        <p><?php echo $meteoListTomorrow[0]->getDate()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Villes</p></div>
                    <div class="content">
                        <p><?php echo $meteoListTomorrow[0]->getVille()?></p>
                        <p><?php echo $meteoListTomorrow[1]->getVille()?></p>
                        <p><?php echo $meteoListTomorrow[2]->getVille()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Période</p></div>
                    <div class="content">
                        <p><?php echo $meteoListTomorrow[0]->getPeriode()?></p>
                        <p><?php echo $meteoListTomorrow[1]->getPeriode()?></p>
                        <p><?php echo $meteoListTomorrow[2]->getPeriode()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Résumé temps</p></div>
                    <div class="content">
                        <p><?php echo $meteoListTomorrow[0]->getResumeTemps()?></p>
                        <p><?php echo $meteoListTomorrow[1]->getResumeTemps()?></p>
                        <p><?php echo $meteoListTomorrow[2]->getResumeTemps()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Identifiant résume</p></div>
                    <div class="content">
                        <p><?php echo $meteoListTomorrow[0]->getIdentifiantResume()?></p>
                        <p><?php echo $meteoListTomorrow[1]->getIdentifiantResume()?></p>
                        <p><?php echo $meteoListTomorrow[2]->getIdentifiantResume()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Température min</p></div>
                    <div class="content">
                        <p><?php echo $meteoListTomorrow[0]->getTemperatureMin()?></p>
                        <p><?php echo $meteoListTomorrow[1]->getTemperatureMin()?></p>
                        <p><?php echo $meteoListTomorrow[2]->getTemperatureMin()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Température max</p></div>
                    <div class="content">
                        <p><?php echo $meteoListTomorrow[0]->getTemperatureMax()?></p>
                        <p><?php echo $meteoListTomorrow[1]->getTemperatureMax()?></p>
                        <p><?php echo $meteoListTomorrow[2]->getTemperatureMax()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Commentaire</p></div>
                    <div class="content">
                        <p><?php echo $meteoListTomorrow[0]->getCommentaire()?></p>
                        <p><?php echo $meteoListTomorrow[1]->getCommentaire()?></p>
                        <p><?php echo $meteoListTomorrow[2]->getCommentaire()?></p>
                    </div>
                </div>
            </div>

            <div class="tab">
                <div class="column">
                    <div class="column-header"><p>Dates</p></div>
                    <div class="content">
                        <p><?php echo $meteoListAfterTomorrow[0]->getDate()?></p>
                        <p><?php echo $meteoListAfterTomorrow[0]->getDate()?></p>
                        <p><?php echo $meteoListAfterTomorrow[0]->getDate()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Villes</p></div>
                    <div class="content">
                        <p><?php echo $meteoListAfterTomorrow[0]->getVille()?></p>
                        <p><?php echo $meteoListAfterTomorrow[1]->getVille()?></p>
                        <p><?php echo $meteoListAfterTomorrow[2]->getVille()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Période</p></div>
                    <div class="content">
                        <p><?php echo $meteoListAfterTomorrow[0]->getPeriode()?></p>
                        <p><?php echo $meteoListAfterTomorrow[1]->getPeriode()?></p>
                        <p><?php echo $meteoListAfterTomorrow[2]->getPeriode()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Résumé temps</p></div>
                    <div class="content">
                        <p><?php echo $meteoListAfterTomorrow[0]->getResumeTemps()?></p>
                        <p><?php echo $meteoListAfterTomorrow[1]->getResumeTemps()?></p>
                        <p><?php echo $meteoListAfterTomorrow[2]->getResumeTemps()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Identifiant résume</p></div>
                    <div class="content">
                        <p><?php echo $meteoListAfterTomorrow[0]->getIdentifiantResume()?></p>
                        <p><?php echo $meteoListAfterTomorrow[1]->getIdentifiantResume()?></p>
                        <p><?php echo $meteoListAfterTomorrow[2]->getIdentifiantResume()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Température min</p></div>
                    <div class="content">
                        <p><?php echo $meteoListAfterTomorrow[0]->getTemperatureMin()?></p>
                        <p><?php echo $meteoListAfterTomorrow[1]->getTemperatureMin()?></p>
                        <p><?php echo $meteoListAfterTomorrow[2]->getTemperatureMin()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Température max</p></div>
                    <div class="content">
                        <p><?php echo $meteoListAfterTomorrow[0]->getTemperatureMax()?></p>
                        <p><?php echo $meteoListAfterTomorrow[1]->getTemperatureMax()?></p>
                        <p><?php echo $meteoListAfterTomorrow[2]->getTemperatureMax()?></p>
                    </div>
                </div>
                <div class="column">
                    <div class="column-header"><p>Commentaire</p></div>
                    <div class="content">
                        <p><?php echo $meteoListAfterTomorrow[0]->getCommentaire()?></p>
                        <p><?php echo $meteoListAfterTomorrow[1]->getCommentaire()?></p>
                        <p><?php echo $meteoListAfterTomorrow[2]->getCommentaire()?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>