<?php
$klantid = $_POST["klantid"];
$klantnaam = $_POST["klantnaam"];
$klantadres = $_POST["klantadres"];
$klantpostcode = $_POST["klantpostcode"];
$klantplaats = $_POST["klantplaats"];
 require("connect.php");
 $sql = $conn->prepare("UPDATE klant set 
klantnaam = :klantnaam, klantadres = :klantadres , klantpostcode = :klantpostcode , klantplaats = :klantplaats
WHERE klantid = :klantid
");
 $sql->execute([
    "klantid" => $klantid,
    "klantnaam" => $klantnaam,
    "klantadres" => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats" => $klantplaats,
 ]);
 echo "de klant is gewijzigd! <br>";
 echo "<a href='index.html'>terug naar het menu</a><br>";