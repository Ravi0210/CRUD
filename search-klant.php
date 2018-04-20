<link href="style.css" type="text/css" rel="stylesheet">
<form action="search-klant-2.php" method="post">
<fieldset>
    <label for="klantid">zoek een klant</label>
<input type="text" id="klantid" name="klantid">
    <br><br>
    <input type="submit">
</fieldset>
    </form>
<?php
require_once ("read-klant.php");
