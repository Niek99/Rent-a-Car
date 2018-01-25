
<?php
    require_once ("classes/klant.php");
    $registreren = new klant();
    $laatzien = $registreren->registreer();
    echo $laatzien;
?>
