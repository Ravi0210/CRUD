<?php
$klantid = $_POST["klantid"];
$autokenteken = $_POST["autokenteken"];
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokmstand = $_POST["autokmstand"];

require_once("connect.php");

$sql = $conn->prepare
("INSERT INTO auto(klantid, autokenteken, automerk, autotype, autokmstand) VALUES 
(:klantid, :autokenteken , :automerk , :autotype , :autokmstand)");
$sql->execute([
    ":klantid" => $klantid,
    ":autokenteken" => $autokenteken,
    ":automerk" => $automerk,
    ":autotype" => $autotype,
    ":autokmstand" => $autokmstand

]);
echo "de auto is aangemaakt<br />";
echo "<a href='index.html'>terug naar het menu<a/>";