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
        ?>

        <ul class="dropdown-menu">
            <div class="modal-dialog">
                <div class="loginmodal-container">
                    <h1>Log hier in op je account</h1><br>
                    <form>
                        <ul>
                            <li><input type="text" name="user" placeholder="Gebruikersnaam"></li>
                            <li><input type="password" name="pass" placeholder="Wachtwoord"></li>
                            <li><input type="submit" name="login" class="login loginmodal-submit" value="Login"></li>
                        </ul>
                    </form>

                    <div class="login-help">
                        <a href="register.php">Register</a> - <a href="#">Forgot Password</a>
                    </div>
                </div>
            </div>
        </ul>

        <?php
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
            error_reporting(0);
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
            $query = "SELECT Klant_nummer FROM klant";
            $results=mysqli_query($mysqli, $query);
            for ($i=0;$i<$results;$i++) {
                do {
                    $nummer = rand(999999999, 10000000000);
                } while ($nummer == $results);
                $goedenummer = $nummer;
            }

            //voeg alles toe aan de data base. zorg er ook voor dat het veilig is.
            $invoegen = mysqli_query($mysqli, "INSERT INTO klant(Klant_nummer, Naam, Adres, Postcode, Woonplaats, Email_adres, Telefoon_nummer, Wachtwoord) VALUES('$goedenummer', '$naam', '$adres', '$postcode', '$woonplaats', '$mail', '$telefoon', '$wachtwoord')");
            if($invoegen)
            {
                echo "Uw gegevens zijn succesvol toegevoegd.";

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