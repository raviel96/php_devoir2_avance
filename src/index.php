<?php

require_once "../vendor/autoload.php";

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require_once "functions/config.php";
require "classes/Database.php";

$loader = new FilesystemLoader('templates/');
$twig = new Environment($loader, [
    'cache' => false,
]);

$database = new Database();
$filePath = "resources/paris.csv";
$tomorrowDate = "2100-12-06";
$afterTomorrowDate = "2100-12-07";

$pdo = Database::connexion($host, $user, $password, $dbname);

$database->insertData($pdo, $filePath);
$meteoListTomorrow = $database->selectData($pdo, $tomorrowDate);
$meteoListAfterTomorrow = $database->selectData($pdo, $afterTomorrowDate);

echo $twig->render('index.html.twig', ['meteo_tomorrow' => $meteoListTomorrow, 'meteo_after_tomorrow' => $meteoListAfterTomorrow]);
?>
