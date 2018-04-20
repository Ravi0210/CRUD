<?php
$klantid = $_POST["klantid"];
require_once("connect.php");
 $klanten = $conn->prepare("SELECT 
klantid , klantnaam , klantadres, klantpostcode , klantplaats
FROM klant WHERE klantid = :klantid");
 $klanten->execute(["klantid" => $klantid]);
 echo "<form action='update-klant-2.php' method='post'>";
 foreach ($klanten as $klant){
     echo "klant:" . $klant["klantid"];
     echo "<input type='hidden' name='klantid'";
     echo "value='" .$klant["klantid"] ."' ";
     echo "> <br>";
     echo "klant:" . "<input type='text'";
     echo "name='klantnaam'";
     echo "value='" .$klant["klantnaam"] ."' ";
     echo "> <br>";
     echo "klant:" . "<input type='text'";
     echo "name='klantadres'";
     echo "value='" .$klant["klantadres"] ."' ";
     echo "> <br>";
     echo "klant:" . "<input type='text'";
     echo "name='klantpostcode'";
     echo "value='" .$klant["klantpostcode"] ."' ";
     echo "> <br>";
     echo "klant:" . "<input type='text'";
     echo "name='klantplaats'";
     echo "value='" .$klant["klantplaats"] ."' ";
     echo "> <br>";
 }
 echo "<input type='submit'>";
 echo "</form>";