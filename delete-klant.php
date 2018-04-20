<?php
$klantid = $_POST["klantid"];
require_once("connect.php");
$sql = $conn->prepare("SELECT
klantid , klantnaam , klantadres, klantpostcode , klantplaats
FROM klant WHERE klantid = :klantid
");

$sql->execute(["klantid" => $klantid]);
echo "<table>";
foreach ($sql as $rij){
    echo "<tr>";
    echo "<td>". $rij["klantid"] . "</td>";
    echo "<td>". $rij["klantnaam"] . "</td>";
    echo "<td>". $rij["klantadres"] . "</td>";
    echo "<td>". $rij["klantpostcode"] . "</td>";
    echo "<td>". $rij["klantplaats"] . "</td>";
    echo "</tr>";
}
echo "</table>" . "<br>";
echo "<form action='delete-klant-2.php' method='post'>";
echo "<input type='hidden' name='klantid' value='$klantid'>";
echo "<input type='hidden' name='verwijder' value='0'>";
echo "<input type='checkbox' name='verwijder' value='1'>";
echo "wilt u deze klant verwijderen?";
echo "<input type='submit'>";
echo "</form>";