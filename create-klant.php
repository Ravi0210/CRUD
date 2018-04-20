<?php
$klantid = NULL;
$klantnaam = $_POST["klantnaam"];
$klantadres = $_POST["klantadres"];
$klantpostcode = $_POST["klantpostcode"];
$klantplaats = $_POST["klantplaats"];

require_once("connect.php");

$sql = $conn->prepare
("INSERT INTO klant(klantid, klantnaam, klantadres, klantpostcode, klantplaats) VALUES 
(:klantid, :klantnaam , :klantadres , :klantpostcode , :klantplaats)");
$sql->execute([
    ":klantid" => $klantid,
    ":klantnaam" => $klantnaam,
    ":klantadres" => $klantadres,
    ":klantpostcode" => $klantpostcode,
    ":klantplaats" => $klantplaats

]);
echo "de gebruiker is aangemaakt<br />";
echo "<a href='index.html'>terug naar het menu<a/>";