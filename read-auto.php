<link href="style.css" type="text/css" rel="stylesheet">
<?php
require_once "connect.php";

$sql = $conn->prepare(" 
                        SELECT klantid,
                               autokenteken,
                               automerk,
                               autotype,
                               autokmstand
                          FROM auto
                               ");
$sql->execute();
echo "<table>";
foreach ($sql as $rij) {
    echo "<tr>";
    echo "<td>" . $rij ["klantid"] . "</td>" ;
    echo "<td>" . $rij ["autokenteken"] . "</td>";
    echo "<td>" . $rij ["automerk"] . "</td>";
    echo "<td>" . $rij ["autotype"] . "</td>";
    echo "<td>" . $rij ["autokmstand"] . "</td>";
    echo "</tr>";
}
echo "</table>";