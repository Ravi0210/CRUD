<link href="style.css" rel="stylesheet" type="text/css">
<?php
require_once "connect.php";

$sql = $conn->prepare(" 
                        SELECT klant.klantid,
                               klant.klantnaam,
                               auto.autokenteken
                          FROM klant
                          INNER JOIN auto 
                          on  auto.klantid = klant.klantid
                               ");
$sql->execute();
echo "<table>";
foreach ($sql as $rij) {
    echo "<tr>";
    echo "<td>" . $rij ["klantid"] . "</td>" ;
    echo "<td>" . $rij ["klantnaam"] . "</td>";
    echo "<td>" . $rij ["autokenteken"] . "</td>";
    echo "</tr>";
}
echo "</table>";