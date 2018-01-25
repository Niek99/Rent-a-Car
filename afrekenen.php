<?php
    include "includes/header.php";

        $nummer = $_SESSION['usr_id'];
        require_once("classes/Database.php");
        $DBconnect = new Database();
        $mysqli = $DBconnect->ConnectToDB("root", "", "rent-a-car");

$result = mysqli_query($mysqli,"SELECT * FROM klant WHERE Klant_nummer = '" . $nummer . "'");

    while ($row = mysqli_fetch_object($result)) {
        $_SESSION['Naam'] = $row->Naam;
        $_SESSION['Adres'] = $row->Adres;
        $_SESSION['Woonplaats'] = $row->Woonplaats;
        $_SESSION['Postcode'] = $row->Postcode;
}

    $behandelaar = mysqli_query($mysqli,"SELECT * FROM behandelaar WHERE Behandelaar_nummer = '12345'");
    while ($row = mysqli_fetch_object($behandelaar)) {
        $_SESSION['behandelaar'] = $row->Naam_behandelaar;
    }

    $reservering = mysqli_query($mysqli,"SELECT * FROM reservering WHERE Factuurnummer = '" . $_SESSION['Factuur'] . "'");

    while ($row = mysqli_fetch_object($reservering)) {
        $_SESSION['kenteken'] = $row->Kenteken;
        $_SESSION['vanafdatum'] = $row->Vanaf_datum;
        $_SESSION['einddatum'] = $row->Eind_datum;
        $_SESSION['totaal'] = $row->Totaal_prijs;
    }

$auto = mysqli_query($mysqli,"SELECT * FROM auto WHERE kenteken = '" . $_SESSION['kenteken'] . "'");

while ($row = mysqli_fetch_object($auto)) {
    $_SESSION['merk'] = $row->Merk;
    $_SESSION['type'] = $row->Type;
    $_SESSION['prijsperdag'] = $row->Prijs_per_dag;
}

    ?>
    <html>
        <body>
            <div class="container">
                <h2>Factuur</h2>
                <br>
                <ul>
                    <li>Rent-a-Car</li>
                    <li>Autopad 12</li>
                    <li>APELDOORN</li>
                    <li>Telefoon: 0523-123012</li>
                </ul><br><br>
                <table style="width: 100%">
                    <tr>
                        <td>Datum: </td> <td style="padding-left: 10%;"><?php echo $_SESSION['datum']; ?></td>
                    </tr>
                    <tr>
                        <td>Factuurnummer:</td><td style="padding-left: 10%;"><?php echo $_SESSION['Factuur']; ?></td>
                    </tr>
                    <tr>
                        <td>Behandelaar:</td><td style="padding-left: 10%;"><?php echo $_SESSION['behandelaar'];?></td>
                    </tr>
                </table> <br><br>
                <ul>
                    <li><?php echo  $_SESSION['Naam']; ?></li>
                    <li><?php echo $_SESSION['Adres']; ?></li>
                    <li><?php echo $_SESSION['Woonplaats'] . " " . $_SESSION['Postcode'];?></li>
                </ul><br>
                <h3>Reservering</h3><br><br>

                <table style="width:100%;"border="1">
                    <tr>
                        <th>Kenteken</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>Gereserveerde periode</th>
                        <th>Prijs per dag</th>
                        <th>Totaal</th>
                    </tr>
                    <tr>
                        <td><?php echo $_SESSION['kenteken']?></td>
                        <td><?php echo $_SESSION['merk']?></td>
                        <td><?php echo $_SESSION['type']?></td>
                        <td><?php echo $_SESSION['vanafdatum'] . " t/m " . $_SESSION['einddatum']?></td>
                        <td><?php echo $_SESSION['prijsperdag']?></td>
                        <td><?php echo $_SESSION['totaal']?></td>
                    </tr>
                    
                </table><br><br>
                <p>
                    Betalingen dienen plaats te vinden veertien dagen voor de aanvang van de gereserveerde periode<br>
                    Betalingen kunnen gedaan worden via Ideal of worden gestort op rekeningnummer 3210808<br>
                    Indien er gereserveerd is binnen veerdien dagen voor de aanvang van de gereserveerde periode,<br>
                    Dient de betaling direct plaats te vinden.
                </p>

            </div>
        </body>
    </html>

