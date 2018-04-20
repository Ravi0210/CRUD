<?php
$klantid = $_POST["klantid"];
$autokenteken = $_POST["autokenteken"];
$automerk = $_POST["automerk"];
$autotype = $_POST["autotype"];
$autokmstand = $_POST["autokmstand"];
require("connect.php");
$sql = $conn->prepare("UPDATE auto set 
klantid = :klantid, autokenteken = :autokenteken, automerk = :automerk , automerk = :automerk , autokmstand = :autokmstand
WHERE klantid = :klantid
");
$sql->execute([
    "klantid" => $klantid,
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand,
]);
echo "de auto is gewijzigd! <br>";
echo "<a href='index.html'>terug naar het menu</a><br>";