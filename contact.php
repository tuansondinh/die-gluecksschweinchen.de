<?php
require("shared/inc/db.inc.php");
require("shared/inc/functions.inc.php");

// echo "<pre>"; //wird angezeigt wie im Quellcode
// print_r($_POST);
// echo"</pre>";


$isFormSubmitted= (!empty($_POST['name']) > 0 &&
!empty($_POST['email']) > 0 &&
!empty($_POST['subject']) > 0 &&
!empty($_POST['message']) > 0);

if( $isFormSubmitted)
{
    $stmt = $pdo->prepare("INSERT INTO `messages` (`name`, `email`, `subject`, `message`, `timestamp`)
    VALUE(:name, :email, :subject, :message, :timestamp)");
    //  VALUE= Platzhalter

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $timestamp= time();

    $stmt->bindParam(":name",$name,PDO::PARAM_STR);// es muss eine var übergeben werden
    $stmt->bindParam(":email",$email,PDO::PARAM_STR);
    $stmt->bindParam(":subject",$subject,PDO::PARAM_STR);
    $stmt->bindParam(":message",$message,PDO::PARAM_STR);
    $stmt->bindParam(":timestamp",$timestamp,PDO::PARAM_STR);

    $stmt->execute();

} 
header("Location: index.php?contact=success#contact"); //? - get parameter-> wir landen auf einer neuen Seite. ?contact-sucess ladnet in der url
//springt wieder auf contact

//schicke einen header an browser-> browser rufe index auf
die(); // alles was hier darunter steht wird abgebrochen

// Seite mit nur php muss nicht geschlossen werden
// <!-- ` = backticks->sorgt dafür dass die bezeichnungen sich nicht mit Steuerwörtern überschneiden  -->
