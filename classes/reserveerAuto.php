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

        // Maak hier de factuur aan in de database. Op dit moment hebben we nog niet meer dan 1 behandelaar. dus je kan standaard dat nummer invoegen.
        if(!isset($_SESSION['Factuur'])) {
            if (isset($_SESSION['usr_id']) != "") {
                $vandaag = date('Y-m-d');
                $klantnummer = $_SESSION['usr_id'];
                $behandelaar = "12345";
                $_SESSION['datum'] = $vandaag;


                // maak hier een session waarmee je laat zien dat de factuur gemaakt is.


                $result = mysqli_query($mysqli, "INSERT INTO factuur(Datum, Klant_nummer, Behandelaar_nummer) VALUES('$vandaag', '$klantnummer', '$behandelaar')");

                if ($result) {

                    $factuur_id = mysqli_insert_id($mysqli);
                    $_SESSION['Factuur'] = $factuur_id;
                }

            } else {
                echo "log in om verder te kunnen gaan.";
            }
        }

        // doe hier de query en zorg ervoor dat de totaal prijs bepaald wordt.
        $result = mysqli_query($mysqli,"SELECT * FROM auto WHERE Kenteken = '" . $kenteken . "'");

        while ($row = mysqli_fetch_object($result)) {
            $dagprijs = $row->Prijs_per_dag;
        }

        $dagprijsint = (int)$dagprijs;
        //echo $dagprijsint . "<br>";
        $vanafdatumreken = strtotime($vanafdatum);
        $totdatumreken = strtotime($totdatum);
        $days_between = ceil(abs($totdatumreken - $vanafdatumreken) / 86400 + 1);

        //echo $days_between . "<br>";

        $days_betweenreken = (int)$days_between;
        $totaalprijs = $days_betweenreken * $dagprijsint;

        $factuur =  $_SESSION['Factuur'];

        /*echo $factuur . "<br>";
        echo $totaalprijs . "<br>";
        echo $vanafdatum . "<br>";
        echo $totdatum . "<br>";
        echo $kenteken . "<br>";*/

        $reserveer = mysqli_query($mysqli,"INSERT INTO reservering(Factuurnummer, Kenteken, Vanaf_datum, Eind_datum, Totaal_prijs) VALUES('$factuur', '$kenteken', '$vanafdatum', '$totdatum', '$totaalprijs')");

        if($reserveer){
            ?>
            <a href="afrekenen.php"><button value="Klik hier om naar de factuur te gaan">Klik hier om naar de factuur te gaan</button></a>
            <?php
        }




    }
    function GetPrice(){

    }
}