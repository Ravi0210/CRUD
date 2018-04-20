<?php
$klantid = $_POST['klantid'];
$verwijderen = $_POST['verwijder'];

if($verwijderen){
    require_once "connect.php";

    $delete = $conn->prepare("DELETE FROM auto WHERE klantid = :klantid");
    $delete->bindParam(":klantid",$klantid);
    $delete->execute();
    echo "De gegevens zijn verwijderd. <br />";
}else {
    echo "De gegevens zijn niet verwijderd. <br />";
}

echo "<a href='index.html'>Terug naar het menu. </a>"
?>