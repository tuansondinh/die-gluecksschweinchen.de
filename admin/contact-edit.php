<?php
//Verbindung zur DB herstelle
require("../shared/inc/functions.inc.php");
require("../shared/inc/db.inc.php");

$id=$_GET["id"]; // holen id aus der DB



$stmt= $pdo->prepare("SELECT * FROM `messages` WHERE `id`=:id");//Datenbankabfrage aufbauen
// in SQL befehle keine variablen benutzen! ansonten sicherheitslücke, sondern platzhalter verwenden :id
$stmt->bindParam(":id", $id);
$stmt->execute(); // siehe php documentation bei statement
$message= $stmt->fetch(); //message ist hier ein array mit id,name usw

if (empty($message)){
    header("Location: contact.php");
    die();
} //schauen ob der eintrag existiert

if (!empty($_POST)) {
    $isValidForm= (isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['subject']) &&
    isset($_POST['message'])
    ); // sind die Elemente gesetzt, Elemente dürfen also leer sein

    if ($isValidForm) {
        // Daten in DB schreiben
      
        $stmt=$pdo->prepare("UPDATE messages SET `name`=:name,
         `email`=:email,
          `subject`=:subject,
           `message`=:message
            WHERE `id`=:id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":email", $_POST['email']);
        $stmt->bindParam(":subject", $_POST['subject']);
        $stmt->bindParam(":message", $_POST['message']);
        $stmt->execute();
        header("Location: contact.php");
        die();


    }
}
// print_r($message["id"]);
// var_dump($messages);
// var_dump($pdo); //verbindung testen
ob_start(); //alles was jetzt kommt, merke das erstmal, nicht sofort an den browser geben
require("./views/contact-edit.view.php");
$content= ob_get_contents();//gebe buffering aus
ob_end_clean();//beende output buffering

require("./layouts/layout.php");
?>