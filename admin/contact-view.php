<?php
//Verbindung zur DB herstelle
require("../shared/inc/functions.inc.php");
require("../shared/inc/db.inc.php");

$id=$_GET["id"];



$stmt= $pdo->prepare("SELECT * FROM `messages` WHERE `id`=:id");//Datenbankabfrage aufbauen
// in SQL befehle keine variablen benutzen! ansonten sicherheitslücke, sondern platzhalter verwenden :id
$stmt->bindParam(":id", $id);
$stmt->execute(); // siehe php documentation bei statement
$message= $stmt->fetch();

if (empty($message)){
    header("Location: contact.php");
    die();
}
// print_r($message["id"]);
// var_dump($messages);
// var_dump($pdo); //verbindung testen
ob_start(); //alles was jetzt kommt, merke das erstmal, nicht sofort an den browser geben
require("./views/contact-view.view.php");
$content= ob_get_contents();//gebe buffering aus
ob_end_clean();//beende output buffering

require("./layouts/layout.php");
?>