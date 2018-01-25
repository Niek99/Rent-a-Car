<?php
    include "includes/header.php";
?>
<html>
    <body>
        <div class="container">
            <div class="container1">
            <div class="col-md-12">
                <h1 style="margin-left: 5%">Uw reservering plaatsen</h1>
                <p style="margin-left: 5%">
                    Rond hier uw bestelling af!<br>
                <div class="container col-sm-12">
                    <form action="" method="post" name="registerform">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-4 form-group">
                                    <label>Naam:</label>
                                    <input type="text" placeholder="Naam" class="form-control" name="naam">
                                </div>
                            <div class="col-sm-4 form-group">
                                <label>Adres:</label>
                                <input type="text" placeholder="Adres" class="form-control" name="adres">
                            </div>
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
                            <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Wachtwoord:</label>
                                <input type="password" placeholder="Wachtwoord" class="form-control" name="wachtwoord">
                            </div>
                            <button type="submit" name="verzend" class="btn btn-lg btn-info">Registreren</button>
                        </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
        </div>
    </body>
</html>
<?php
    include "includes/footer.php";
?>