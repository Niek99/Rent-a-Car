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
                            <a href="register.php">Register</a> - <a href="#">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </ul>
            <?php


            require_once("Database.php");
            $DBconnect = new Database();
            $mysqli = $DBconnect->ConnectToDB("root", "", "rent-a-car");

            //check if form is submitted
            if (isset($_POST['login'])) {

                $email = mysqli_real_escape_string($mysqli, $_POST['user']);
                $password = mysqli_real_escape_string($mysqli, $_POST['pass']);
                $result = mysqli_query($mysqli, "SELECT * FROM klant WHERE Email_adres = '" . $email . "' and Wachtwoord = '" . $password . "'");

                if ($row = mysqli_fetch_array($result)) {
                    $_SESSION['usr_id'] = $row['Klant_nummer'];
                    $_SESSION['usr_name'] = $row['Naam'];
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
        ?>
        <body>
        <div class="container col-sm-12">
            <form action="" method="post" name="registerform">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Naam:</label>
                            <input type="text" placeholder="Naam" class="form-control" name="naam">
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Adres:</label>
                        <input type="text" placeholder="Adres" class="form-control" name="adres">
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Postcode:</label>
                            <input type="text" placeholder="Postcode" class="form-control" name="postcode">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Woonplaats:</label>
                            <input type="text" placeholder="Woonplaats" class="form-control" name="woonplaats">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Email adres:</label>
                            <input type="email" placeholder="Email" class="form-control" name="mail">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Telefoon nummer:</label>
                            <input type="text" placeholder="1111111111" class="form-control" name="telefoon">
                        </div>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label>Wachtwoord:</label>
                        <input type="password" placeholder="Wachtwoord" class="form-control" name="wachtwoord">
                    </div>
                    <button type="submit" name="verzend" class="btn btn-lg btn-info">Registreren</button>
                </div>
            </form>
        </div>
        </body>
        </html>
        <?php
        if(isset($_POST['verzend'])){
            //error_reporting(0);
            // set alle variablen zodat ze aan de database toegevoegd kunnen worden.
            $naam = $_POST['naam'];
            $adres = $_POST['adres'];
            $postcode = $_POST['postcode'];
            $woonplaats = $_POST['woonplaats'];
            $mail = $_POST['mail'];
            $telefoon = $_POST['telefoon'];
            $wachtwoord = $_POST['wachtwoord'];

            // maak de database connectie
            require_once("Database.php");
            $DBconnect = new Database();
            $mysqli = $DBconnect->ConnectToDB("root", "", "rent-a-car");

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
            if($invoegen)
            {
                ?>
                    <div class="ingelogd">
                        <h1>U bent succesvol ingelogd!</h1>
                        <button class="btn btn-lg btn-info">Klik hier om terug te gaan naar de homepagina!</button>
                    </div>

                <?php
            }
            else
            {
                echo "Er is helaas iets mis gegaan probeer het opnieuw";

            }
            //printf("Errormessage: %s\n", $mysqli->error);
            $mysqli->close();

        }
    }

    function loguit(){
        $DBconnect = new Database();
        $DBconnect->ConnectToDB("root", "", "Rent-a-Car");
    }

    function profiel (){
        $DBconnect = new Database();
        $DBconnect->ConnectToDB("root", "", "Rent-a-Car");
    }
}