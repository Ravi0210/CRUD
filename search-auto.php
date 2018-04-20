<link href="style.css" type="text/css" rel="stylesheet">
<form action="search-auto-2.php" method="post">
    <fieldset>
        <label for="klantid">zoek een auto</label>
        <input type="text" id="klantid" name="klantid">
        <br><br>
        <input type="submit">
    </fieldset>
</form>
<?php
require_once ("read-auto.php");
