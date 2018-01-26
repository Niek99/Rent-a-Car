<?php
/**
 * Created by PhpStorm.
 * User: niek
 * Date: 24-1-2018
 * Time: 12:25
 */

class klant
{

    function login(){
       // $DBconnect = new Database();
        //$DBconnect->ConnectToDB("root", "", "Rent-a-Car");
        /*if(isset($_COOKIE['userid'])){
            echo $_COOKIE['username'];
        }
        else{*/
        if(isset($_SESSION['usr_id'])!="") {
            echo $_SESSION['usr_name'];
        }
        else {
            ?>
            <ul class="dropdown-menu">
                <div class="modal-dialog">
                    <div class="loginmodal-container">
                        <h1>Log hier in op je account</h1><br>
                        <form action="" method="post" name="loginform">
                            <ul>
                                <li><input type="text" name="user" placeholder="Gebruikersnaam"></li>
                                <li><input type="password" name="pass" placeholder="Wachtwoord"></li>
                                <li><input type="submit" name="login" class="login loginmodal-submit" value="Login">
                                </li>
                            </ul>
                        </form>

                        <div class="login-help">
                            <a href="register.php">Register</a>
                        </div>
                    </div>
                </div>
            </ul>
            <?php


            require_once("Database.php");
            $DBconnect = new Database();
            $mysqli = $DBconnect->ConnectToDB("root", "", "rent-a-car");

            //check of het form verzonden is.
            if (isset($_POST['login'])) {

                $email = mysqli_real_escape_string($mysqli, $_POST['user']);
                $password = mysqli_real_escape_string($mysqli, $_POST['pass']);
                $result = mysqli_query($mysqli, "SELECT * FROM klant WHERE Email_adres = '" . $email . "' and Wachtwoord = '" . $password . "'");

                if ($row = mysqli_fetch_array($result)) {
                    $_SESSION['usr_id'] = $row['Klant_nummer'];
                    $_SESSION['usr_name'] = $row['Naam'];

                    header("Refresh:0; url=index.php");
                } else {
                    $errormsg = "Wacht of gebruikersnaam fout.";
                    echo $errormsg;
                }
            }
        }
        /*else{
            echo "Er is helaas iets fout gegaan probeer het later opnieuw";
        }*/

        /*
        if(isset($_POST['login'])){
            // set de variabelen waar hij op moet gaan zoeken in de data base.
            $username = $_POST['user'];
            $password = $_POST['pass'];

            $query =


        }*/
    }

    function registreer(){
        ?>
        <html>
        <?php
            include "includes/header.php";
            include "includes/head.php";
        ?>
        <body>
        <div class="container col-sm-12">
            <div class="container1">
            <form action="" method="post" name="registerform">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Naam:</label>
                            <input type="text" placeholder="Naam" class="form-control" name="naam" required>
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Adres:</label>
                        <input type="text" placeholder="Adres" class="form-control" name="adres" required>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Postcode:</label>
                            <input type="text" placeholder="Postcode" class="form-control" name="postcode" required>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Woonplaats:</label>
                            <input type="text" placeholder="Woonplaats" class="form-control" name="woonplaats" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Email adres:</label>
                            <input type="email" placeholder="Email" class="form-control" name="mail" required>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Telefoon nummer:</label>
                            <input type="text" placeholder="1111111111" class="form-control" name="telefoon" required>
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Wachtwoord:</label>
                        <input type="password" placeholder="Wachtwoord" class="form-control" name="wachtwoord" required>
                    </div>
                    <button type="submit" name="verzend" class="btn btn-lg btn-info">Registreren</button>
                </div>
            </div>
            </form>
        </div>
        </body>
        </html>
        <?php
        if(isset($_POST['verzend'])){
            // maak de database connectie
            require_once("Database.php");
            $DBconnect = new Database();
            $mysqli = $DBconnect->ConnectToDB("root", "", "rent-a-car");

            //error_reporting(0);
            // set alle variablen zodat ze aan de database toegevoegd kunnen worden.
            $naam = mysqli_real_escape_string($mysqli, $_POST['naam']);
            $adres = mysqli_real_escape_string($mysqli, $_POST['adres']);
            $postcode = mysqli_real_escape_string($mysqli, $_POST['postcode']);
            $woonplaats = mysqli_real_escape_string($mysqli, $_POST['woonplaats']);
            $mail = mysqli_real_escape_string($mysqli, $_POST['mail']);
            $telefoon = mysqli_real_escape_string($mysqli, $_POST['telefoon']);
            $wachtwoord = mysqli_real_escape_string($mysqli, $_POST['wachtwoord']);

                //Maak hier het getal aan voor het klanten nummer. en controleer of deze al in gebruik is
                /*$cijfer = "00000000";
                $query = "SELECT Klant_nummer FROM klant";
                $results=mysqli_query($mysqli, $query);
                $resultss = end($results);
                $startcount = (int)$cijfer;
                $resultaat = (int)$resultss;
                if($startcount <= $resultaat ){
                    $resultaat + 1;
                    $eind = (string)$resultaat;
                }
                else{
                    $resultaat = $cijfer;
                }
                echo $eind;*/

                //voeg alles toe aan de data base. zorg er ook voor dat het veilig is.
                $invoegen = mysqli_query($mysqli, "INSERT INTO klant(Naam, Adres, Postcode, Woonplaats, Email_adres, Telefoon_nummer, Wachtwoord) VALUES('$naam', '$adres', '$postcode', '$woonplaats', '$mail', '$telefoon', '$wachtwoord')");
                //mysqli_error($mysqli);
                if ($invoegen == "1") {
                    $_SESSION['usr_id'] = mysqli_insert_id($mysqli);
                    $_SESSION['usr_name'] = $naam;
                    ?>
                    <div class="ingelogd">
                        <h1>U bent succesvol ingelogd!</h1>
                        <a href="index.php">
                            <button class="btn btn-lg btn-info">Klik hier om terug te gaan naar de homepagina!</button>
                        </a>
                    </div>

                    <?php
                } else {
                    echo "Er is helaas iets mis gegaan probeer het opnieuw";

                }
                //printf("Errormessage: %s\n", $mysqli->error);
                $mysqli->close();

        }
    }

    function winkelwagen(){
        require_once("Database.php");
        $DBconnect = new Database();
        $DBconnect->ConnectToDB("root", "", "Rent-a-Car");

        echo"hier heb jij je winkelwagentje modafuckah";
    }

    function profiel ()
    {
            // maak de database connectie
                require_once("Database.php");
                $DBconnect = new Database();
                $mysqli = $DBconnect->ConnectToDB("root", "", "rent-a-car");

            include "includes/header.php";
            ?>
                <html>
                    <body>
                        <div class="container">
                            <div class="container1">
                                <h3>Alle ingevoerde informatie</h3>
                                        <?php
                                            $result = mysqli_query($mysqli, "SELECT * FROM klant WHERE Klant_nummer ='" . $_SESSION['usr_id'] ."'");
                                           ?>
                                            <table border="1" class="" style="width: 80%;">
                                                <tr>
                                                    <th class="manage-column column-name column-primary">Naam</th>
                                                    <th class="manage-column column-name column-primary">Adres</th>
                                                    <th class="manage-column column-name column-primary">Postcode</th>
                                                    <th class="manage-column column-name column-primary">Woonplaats</th>
                                                    <th class="manage-column column-name column-primary">Email</th>
                                                    <th class="manage-column column-name column-primary">Telefoon nummer</th>
                                                </tr>

                                            <?php
                                            while ($row = mysqli_fetch_object($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row->Naam; ?></td>
                                                    <td><?php echo $row->Adres; ?></td>
                                                    <td><?php echo $row->Postcode; ?></td>
                                                    <td><?php echo $row->Woonplaats; ?></td>
                                                    <td><?php echo $row->Email_adres; ?></td>
                                                    <td><?php echo $row->Telefoon_nummer; ?></td>
                                                </tr>
                                                <?php }?>
                                                </table>
                                                <h3>Een lijst met alle factures die u gehad heeft</h3>
                                                <?php
                                                $result = mysqli_query($mysqli, "SELECT * FROM factuur WHERE Klant_nummer ='" . $_SESSION['usr_id'] . "'");
                                                $sidemenus = array();
                                                while($sidemenu = mysqli_fetch_object($result)){
                                                    $sidemenus[] = $sidemenu;
                                                }
                                                //$result = mysqli_query($mysqli, "SELECT * FROM factuur WHERE Klant_nummer ='" . $_SESSION['usr_id'] . "'");
                                                $sidemenus2 = array();
                                                foreach($sidemenus as $gek){
                                                    $result = mysqli_query($mysqli, "SELECT * FROM reservering WHERE Factuurnummer ='" . $gek->Factuurnummer . "'");



                                                    while($sidemenu2 = mysqli_fetch_object($result)){
                                                        $sidemenus2[] = $sidemenu2;
                                                    }
                                                }
                                               // print_r($sidemenus);
                                                //print_r($sidemenus2);
                                               // $gekke_array = array_merge($sidemenus, $sidemenus2);
                                                ?>
                                                <table border="1" class="" style="width: 80%;">
                                                <tr>
                                                    <th class="manage-column column-name column-primary">Factuurnummer</th>
                                                    <th class="manage-column column-name column-primary">Kenteken</th>
                                                    <th class="manage-column column-name column-primary">Vafaf Datum</th>
                                                    <th class="manage-column column-name column-primary">Tot Datum</th>
                                                    <th class="manage-column column-name column-primary">Totaal prijs</th>
                                                    <th class="manage-column column-name column-primary">Betaald
                                                    </th>
                                                </tr>

                                                <?php
                                                foreach ($sidemenus2 as $gekkie) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $gekkie->Factuurnummer; ?></td>
                                                        <td><?php echo $gekkie->Kenteken; ?></td>
                                                        <td><?php echo $gekkie->Vanaf_datum; ?></td>
                                                        <td><?php echo $gekkie->Eind_datum; ?></td>
                                                        <td><?php echo $gekkie->Totaal_prijs . " Euro"; ?></td>
                                                        <td><?php echo $gekkie->Betaald; ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                    </table>

                                                    </div>
                                                    </div>
                                                    </body>
                                                    </html>
                                                    <?php

                                                //include "includes/footer.php";


    }
}