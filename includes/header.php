<?php
    include "head.php";
    require_once ("classes/klant.php");
    $inloggen = new klant();
    //error_reporting(0);
?>
<head>
    <link rel="stylesheet" href="assets/css/dropdown.css">
</head>
<script>
    $(window).scroll(function(e){
        var $el = $('.navbar');
        var isPositionFixed = ($el.css('position') == 'fixed');
        if ($(this).scrollTop() > 1 && !isPositionFixed){
            $('.navbar').css({'position': 'fixed', 'top': '0px'});
        }
        if ($(this).scrollTop() < 1 && isPositionFixed)
        {
            $('.navbar').css({'position': 'static', 'top': '0px'});
        }
    });
</script>
<div>
    <nav class="navbar navbar-default navigation-clean" style="background-color: #0081cc;">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php" style="color:rgba(255,255,255,0.843137);">Rent-a-Car</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">

                    <li role="presentation"><a href="index.php" style="color:rgb(255,255,255);">Homepagina</a></li>
                    <li role="presentation"><a href="over_ons.php" style="color:rgb(255,255,255);">Over ons</a></li>
                    <li role="presentation"><a href="contact.php" style="color:rgb(255,255,255);">Contact</a></li>
                    <li class="dropdown">
                        <?php
                        session_start();
                        if(isset($_SESSION['usr_id'])!="") {
                            echo '<a href="#" style="color:rgb(255,255,255);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >' . $_SESSION['usr_name'] . '<span class="caret"></span></a>';
                           ?>
                            <ul class="dropdown-menu">
                                <div class="modal-dialog">
                                    <div class="loginmodal-container">
                                        <li role="presentation"><a href="?profiel=true" style="color:rgb(0,0,0); margin-bottom: 15px;">Klik hier voor alle profiel informatie</a></li>
                                        <li role="presentation"><a href="?hello=true" style="color:rgb(0,0,0);">Klik hier om uit te loggen</a></li>
                                    </div>
                                </div>

                            </ul>
                            <?php
                            if (isset($_GET['hello'])) {
                                unset($_SESSION['usr_id']);
                                unset($_SESSION['usr_name']);

                                header("refresh: 0");
                            }
                            if (isset($_GET['profiel'])) {
                                header("Refresh:0; url=profiel.php");
                            }

                        }
                        else {
                            ?>
                            <a href="#" style="color:rgb(255,255,255);" class="dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-haspopup="true" aria-expanded="false">Inloggen/registreren <span
                                        class="caret"></span></a>
                            <?php
                            $laatzien = $inloggen->login();
                            echo $laatzien;
                        }
                        ?>
                    </li>
                </ul>
                <p style="vertical-align: middle;border-radius: 2px; padding: 2px; color:rgb(255,255,255); margin-top: 10px;"><b>Lochemseweg 128b <br> 7217 RK Harfsen</b></p>
            </div>
        </div>
    </nav>
</div>