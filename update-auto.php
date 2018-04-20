<?php
$klantid = $_POST["klantid"];
require_once("connect.php");
$klanten = $conn->prepare("SELECT 
klantid , autokenteken , automerk, autotype , autokmstand
FROM auto WHERE klantid = :klantid");
$klanten->execute(["klantid" => $klantid]);
echo "<form action='update-auto-2.php' method='post'>";
foreach ($klanten as $klant){
    echo "klant:" . "<input type='text'";
    echo "name='klantid'";
    echo "value='" .$klant["klantid"] ."' ";
    echo "> <br>";
    echo "klant:" . "<input type='text'";
    echo "name='autokenteken'";
    echo "value='" .$klant["autokenteken"] ."' ";
    echo "> <br>";
    echo "klant:" . "<input type='text'";
    echo "name='automerk'";
    echo "value='" .$klant["automerk"] ."' ";
    echo "> <br>";
    echo "klant:" . "<input type='text'";
    echo "name='autotype'";
    echo "value='" .$klant["autotype"] ."' ";
    echo "> <br>";
    echo "klant:" . "<input type='text'";
    echo "name='autokmstand'";
    echo "value='" .$klant["autokmstand"] ."' ";
    echo "> <br>";
}
echo "<input type='submit'>";
echo "</form>";