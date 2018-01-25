<?php
/**
 * Created by PhpStorm.
 * User: niek
 * Date: 24-1-2018
 * Time: 12:29
 */

class reserveerAuto
{
    function toevoegen($vanafdatum, $totdatum, $kenteken){

        // Maak hier de database connectie
        require_once("Database.php");
        $DBconnect = new Database();
        $mysqli = $DBconnect->ConnectToDB("root", "", "rent-a-car");

        // doe hier de query en zorg ervoor dat de totaal prijs bepaald wordt.
        $result = mysqli_query($mysqli,"SELECT * FROM auto WHERE Kenteken = '" . $kenteken . "'");

        while ($row = mysqli_fetch_object($result)) {
            $dagprijs = $row->Prijs_per_dag;
        }

        $dagprijsint = (int)$dagprijs;
        echo $dagprijsint . "<br>";
        $vanafdatumreken = strtotime($vanafdatum);
        $totdatumreken = strtotime($totdatum);
        $days_between = ceil(abs($totdatumreken - $vanafdatumreken) / 86400);

        echo $days_between . "<br>";

        $days_betweenreken = (int)$days_between;
        $totaalprijs = $days_betweenreken * $dagprijsint;

        echo $totaalprijs . "<br>";

        echo $vanafdatum . "<br>";
        echo $totdatum . "<br>";
        echo $kenteken . "<br>";

    }
    function GetPrice(){

    }
}