<?php
        $klantid = $_POST['klantid'];
        require_once "connect.php";

        $autos = $conn->prepare("SELECT * FROM auto WHERE klantid = :klantid");
        $autos->bindParam(":klantid",$klantid);
        $autos->execute();


        echo "<table>";
        foreach($autos as $rij){
            echo "<tr>";
            echo "<td>" . $rij['autokenteken'] . "</td>";
            echo "<td>" . $rij['automerk'] . "</td>";
            echo "<td>" . $rij['autotype'] . "</td>";
            echo "<td>" . $rij['autokmstand'] . "</td>";
            echo "<td>" . $rij['klantid'] . "</td>";
            echo "</tr>";
        }
        echo "</table><br />";

        echo "<form action='delete-auto-2.php' method='post'>";
        echo "<input type='hidden' name='klantid' value=$klantid>";
        echo "<input type='hidden' name='verwijder' value='0'>";
        echo "<input type='checkbox' name='verwijder' value='1'>";
        echo "Verwijder deze auto . <br>";
        echo "<input type='submit'>";
        echo "</form>";
        ?>