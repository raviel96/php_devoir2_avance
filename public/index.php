<?php
require_once "../functions/config.php";
require "../classes/Database.php";

$database = new Database();
$filePath = "../resources/paris.csv";

$pdo = Database::connexion($host, $user, $password, $dbname);

$database->insertData($pdo, $filePath);
?>