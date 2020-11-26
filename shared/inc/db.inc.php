<?php 
$dbname="projekt";
$user="project";
$password="si8TVwzOfWDGbWFs";
// $dbhost="localhost"; die beiden hosts sind das gleiche,
$dbhost="127.0.0.1";

try{
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}",$user,$password,array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
        // überprüft ob verbindung hergestellt werden kann bzw. zeigt fehler an
    ));
}
catch (PDOException $e) {
    die("Konnte keine Verbindung mit Datenbank aufbauen!");
    //damit mit Passwort bei Fehlerfall nicht öffentlich gemacht wird
}
// var_dump($pdo);

