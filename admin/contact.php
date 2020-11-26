<?php
//Verbindung zur DB herstelle
require("../shared/inc/functions.inc.php");
require("../shared/inc/db.inc.php");
$stmt= $pdo->prepare("SELECT * FROM `messages`");//Datenbankabfrage aufbauen
$stmt->execute(); // siehe php documentation bei statement
$messages= $stmt->fetchAll();
// var_dump($messages);
// var_dump($pdo); //verbindung testen
ob_start(); //alles was jetzt kommt, merke das erstmal, nicht sofort an den browser geben
require("views/contact.view.php");
$content= ob_get_contents();//gebe buffering aus
ob_end_clean();//beende output buffering

require("./layouts/layout.php");
?>