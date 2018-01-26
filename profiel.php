<?php
/**
 * Created by PhpStorm.
 * User: niek
 * Date: 26-1-2018
 * Time: 14:52
 */
require_once ("classes/klant.php");
$registreren = new klant();
$laatzien = $registreren->profiel();
echo $laatzien;