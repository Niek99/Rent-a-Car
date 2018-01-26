<?php
require_once ("classes/reserveerAuto.php");
$registreren = new reserveerAuto();
$laatzien = $registreren->toevoegen($vanafdatum, $totdatum, $kenteken);
echo $laatzien;