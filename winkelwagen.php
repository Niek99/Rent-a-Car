<?php
/**
 * Created by PhpStorm.
 * User: niek
 * Date: 26-1-2018
 * Time: 10:02
 */

require_once ("classes/klant.php");
$registreren = new klant();
$laatzien = $registreren->winkelwagen();
echo $laatzien;
?>