<link href="style.css" rel="stylesheet" type="text/css">
<?php
$klantid = $_POST["klantid"];
require_once("connect.php");
$sql = $conn->prepare("SELECT 
klantid , autokenteken , automerk, autotype , autokmstand
FROM auto WHERE klantid = :klantid
");

$sql->execute(["klantid" => $klantid]);
echo "<table>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>". $rij["klantid"] . "</td>";
    echo "<td>". $rij["autokenteken"] . "</td>";
    echo "<td>". $rij["automerk"] . "</td>";
    echo "<td>". $rij["autotype"] . "</td>";
    echo "<td>". $rij["autokmstand"] . "</td>";
    echo "</tr>";
}
echo "</table>" . "<br>";
echo "<a href='index.html'>klik om terug naar het menu te gaan!!!</a> ";