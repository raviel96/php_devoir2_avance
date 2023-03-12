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

var_dump($meteoListTomorrow);
var_dump($meteoListAfterTomorrow);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>