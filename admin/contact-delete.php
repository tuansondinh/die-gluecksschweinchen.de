<?php
require("../shared/inc/functions.inc.php");
require("../shared/inc/db.inc.php");
if(!empty($_POST) && !empty($_POST["id"])) {
    $id=$_POST["id"]; 

    $stmt = $pdo->prepare("DELETE FROM `messages` WHERE `id`=:id");
    $stmt->bindParam(":id", $id, PDO::PARAM_STR ); //es wird ein str übergeben,
    // param_Str kann auch weggelassen werden, weil es standard ist
    $stmt->execute();

    header("Location: contact.php");
    die();

}
// Aktionen die die DB verändern mit POST machen


?>