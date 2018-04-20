<?php
$klantid = $_POST["klantid"];
$verwijderen = $_POST["verwijder"];

if($verwijderen){
    require_once("connect.php");
    $sql = $conn->prepare("DELETE FROM klant WHERE klantid = :klantid");
    $sql->execute(["klantid" => $klantid]);
    echo "de klant is verwijderd";
}else{
    echo "de klant is niet verwijdert";
}
echo "<br><a href='index.html'>terug naar het menu</a>";