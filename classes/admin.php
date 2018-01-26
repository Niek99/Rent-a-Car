<?php
/**
 * Created by PhpStorm.
 * User: niek
 * Date: 25-1-2018
 * Time: 10:06
 */

class admin
{
    function login()
    {
        session_start();
        if (isset($_SESSION['admin_usr_id']) != "") {
            $registreren = new admin();
            $laatzien = $registreren->adminPaneel();
            echo $laatzien;
        } else {
            ?>
            <html>
        <head>
            <title>Login </title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
                  crossorigin="anonymous">
        </head>
        <body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- add header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php"> </a>
                </div>
                <!-- menu items -->
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 well">
                    <form role="form" action="" method="post" name="loginform">
                        <fieldset>
                            <legend>Login</legend>

                            <div class="form-group">
                                <label for="name">Inlognaam</label>
                                <input type="text" name="email" placeholder="Inlognaam" required class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="name">Wachtwoord</label>
                                <input type="password" name="password" placeholder="Wachtwoord" required
                                       class="form-control"/>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="login" value="Login" class="btn btn-primary"/>
                            </div>
                        </fieldset>
                    </form>
                    <span class="text-danger"><?php if (isset($errormsg)) {
                            echo $errormsg;
                        } ?></span>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
        </body>
            <?php

//check if form is submitted
            if (isset($_POST['login'])) {

                require_once("Database.php");
                $DBconnect = new Database();
                $mysqli = $DBconnect->ConnectToDB("root", "", "rent-a-car");

                $email = mysqli_real_escape_string($mysqli, $_POST['email']);
                $password = mysqli_real_escape_string($mysqli, $_POST['password']);
                $result = mysqli_query($mysqli, "SELECT * FROM behandelaar WHERE Login_naam = '" . $email . "' and Wachtwoord = '" . $password . "'");

                if ($row = mysqli_fetch_array($result)) {
                    $_SESSION['admin_usr_id'] = $row['Behandelaar_nummer'];
                    $_SESSION['admin_usr_name'] = $row['Naam_behandelaar'];

                    header("Refresh:0");

                } else {
                    $errormsg = "Wacht of gebruikersnaam fout.";
                    echo $errormsg;
                }
            } else {
                echo "Er is helaas iets fout gegaan probeer het later opnieuw";
            }
        }
    }

    function adminPaneel()
    {
            ?>
            <head>
                <title>Login </title>
                <meta content="width=device-width, initial-scale=1.0" name="viewport" charset="UTF-8">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            </head>
            <body>
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- add header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../index.php"> </a>
                    </div>
                    <!-- menu items -->
                    <div class="collapse navbar-collapse" id="navbar1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#"><?php echo $_SESSION['admin_usr_name']; ?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class='col-md-6'>
           <?php

                 $datumvandaag = date('Y-m-d');
                 echo "<h3>vandaag is het " . $datumvandaag . "</h3>";
                 require_once("Database.php");
                 $DBconnect = new Database();
                 $mysqli = $DBconnect->ConnectToDB("root", "", "rent-a-car");
                 $result = mysqli_query($mysqli, "SELECT * FROM reservering WHERE Vanaf_datum = '" . $datumvandaag . "'");
                //$resultaat = mysqli_fetch_array($result)
           ?>
            <table border="1" class="">
                <tr>
                    <th class="manage-column column-name column-primary">Factuurnummer</th>
                    <th class="manage-column column-name column-primary">Kenteken</th>
                    <th class="manage-column column-name column-primary">Vanaf datum</th>
                    <th class="manage-column column-name column-primary">Tot datum</th>
                    <th class="manage-column column-name column-primary">Totaal prijs</th>
                </tr>

            <?php
            while ($row = mysqli_fetch_object($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row->Factuurnummer; ?></td>
                        <td><?php echo $row->Kenteken; ?></td>
                        <td><?php echo $row->Vanaf_datum; ?></td>
                        <td><?php echo $row->Eind_datum; ?></td>
                        <td><?php echo $row->Totaal_prijs . " Euro"; ?></td>
                    </tr>
                    <?php
                }
            ?>
            </table>
            </div>
            <div class="col-md-6">
                <?php

                $datummorgen = date("Y-m-d", strtotime("+1 day"));
                echo "<h3>Morgen is het " . $datummorgen . "</h3>";
                $result = mysqli_query($mysqli, "SELECT * FROM reservering WHERE Vanaf_datum = '" . $datummorgen . "'");
                //$resultaat = mysqli_fetch_array($result)
                ?>
                <table border="1" class="">
                    <tr>
                        <th class="manage-column column-name column-primary">Factuurnummer</th>
                        <th class="manage-column column-name column-primary">Kenteken</th>
                        <th class="manage-column column-name column-primary">Vanaf datum</th>
                        <th class="manage-column column-name column-primary">Tot datum</th>
                        <th class="manage-column column-name column-primary">Totaal prijs</th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_object($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row->Factuurnummer; ?></td>
                            <td><?php echo $row->Kenteken; ?></td>
                            <td><?php echo $row->Vanaf_datum; ?></td>
                            <td><?php echo $row->Eind_datum; ?></td>
                            <td><?php echo $row->Totaal_prijs . " Euro"; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
            </body>
            <?php

    }
}