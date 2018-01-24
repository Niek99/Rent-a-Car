<?php
    include "head.php";
?>
<head>
    <link rel="stylesheet" src="assets/css/dropdown.css">
</head>
<div>
    <nav class="navbar navbar-default navigation-clean" style="background-color:rgb(73,72,118);">
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
                        <a href="#" style="color:rgb(255,255,255);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <div class="modal-dialog">
                                <div class="loginmodal-container">
                                    <h1>Login to Your Account</h1><br>
                                    <form>
                                        <input type="text" name="user" placeholder="Username">
                                        <input type="password" name="pass" placeholder="Password">
                                        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                                    </form>

                                    <div class="login-help">
                                        <a href="#">Register</a> - <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>