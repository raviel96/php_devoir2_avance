<?php
require_once "../functions/config.php";
require "../classes/Database.php";

$pdo = new Database();

$pdo = Database::connexion($host, $user, $password, $dbname);


?>