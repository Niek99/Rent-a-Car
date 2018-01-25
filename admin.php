<?php
/**
 * Created by PhpStorm.
 * User: niek
 * Date: 25-1-2018
 * Time: 10:00
 */
require_once ("classes/admin.php");
$registreren = new admin();
$laatzien = $registreren->login();
echo $laatzien;

?>
