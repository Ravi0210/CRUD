<style>
    table, th, td {
        border: 1px solid #696969;
        color: #333333;
        background-color: #ffffff;
        font-weight: bold;
    }
    a{
        color: #333333;
        padding-bottom: 1.25vh;
    }
</style>

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
echo "<a href='index.html'>klik om terug naar het menu te gaan!!!</a> ";