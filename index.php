<!DOCTYPE html>
<html>

<body>
    <?php
        include "includes/header.php";
        include "includes/slider.php";
    ?>
    <div class="container">
        <div style="overflow: hidden"class="container1">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div  class="thumbnail">
                        <img class="topcar" src="assets/img/BMW.png" alt="...">
                        <div class="caption">
                            <h3>Mercedes CLK</h3>
                            <form action="" method="post">
                                <label for="from">Van</label>
                                <input type="date" format="yyyy-mm-dd" id="" name="from"><br>
                                <label for="to">Tot:</label>
                                <input type="date" format="yyyy-mm-dd" id="" name="to"><br>
                                <input type="hidden" name="kenteken1" value="05-HJ-UF">
                                <input class="btn btn-primary" type="submit" name="verzenden" value="Verder"><a href="mercedesclk.php" class="btn btn-default" role="button">Meer informatie</a>
                            </form>
                            <?php
                            if(isset($_POST['verzenden'])){
                                $vanafdatum = $_POST['from'];
                                $totdatum = $_POST['to'];
                                $kenteken = $_POST['kenteken1'];

                                //roep hier de functie aan die de reservering toe gaat voegen.
                                require_once ("classes/reserveerAuto.php");
                                $registreren = new reserveerAuto();
                                $laatzien = $registreren->toevoegen($vanafdatum, $totdatum, $kenteken);
                                echo $laatzien;
                            }
                            ?>
                            <!--<p><a href="bestel.php" class="btn btn-primary" role="button">Nu lenen!</a> </p>-->
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="thumbnail">
                        <img class="topcar" src="assets/img/audia4.jpg" alt="...">
                            <div class="caption">
                                <h3>Rolls Royce</h3>
                                <form action="" method="post">
                                    <label for="from">Van</label>
                                    <input type="date" format="yyyy-mm-dd" id="" name="from"><br>
                                    <label for="to">Tot:</label>
                                    <input type="date" format="yyyy-mm-dd" id="" name="to"><br>
                                    <input type="hidden" name="kenteken2" value="45-RR-76">
                                    <input class="btn btn-primary" type="submit" name="verzenden1" value="Verder"><a href="rollsroyce.php" class="btn btn-default" role="button">Meer informatie</a>
                                </form>
                                <?php
                                if(isset($_POST['verzenden1'])){
                                    $vanafdatum = $_POST['from'];
                                    $totdatum = $_POST['to'];
                                    $kenteken = $_POST['kenteken2'];

                                    //roep hier de functie aan die de reservering toe gaat voegen.
                                    require_once ("classes/reserveerAuto.php");
                                    $registreren = new reserveerAuto();
                                    $laatzien = $registreren->toevoegen($vanafdatum, $totdatum, $kenteken);
                                    echo $laatzien;
                                }
                                ?>
                                <!--<p><a href="bestel.php" class="btn btn-primary" role="button">Nu lenen!</a> </p>-->
                            </div>
                        </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="thumbnail">
                        <img class="topcar" src="assets/img/audia4.jpg" alt="...">
                        <div class="caption">
                            <h3>Porsche 911s</h3>
                            <form action="" method="post">
                                <label for="from">Van</label>
                                <input type="date" format="yyyy-mm-dd" id="" name="from"><br>
                                <label for="to">Tot:</label>
                                <input type="date" format="yyyy-mm-dd" id="" name="to"><br>
                                <input type="hidden" name="kenteken3" value="89-PE-TT">
                                <input class="btn btn-primary" type="submit" name="verzenden2" value="Verder"><a href="porsche911s.php" class="btn btn-default" role="button">Meer informatie</a>
                            </form>
                            <?php
                            if(isset($_POST['verzenden2'])){
                                $vanafdatum = $_POST['from'];
                                $totdatum = $_POST['to'];
                                $kenteken = $_POST['kenteken3'];

                                //roep hier de functie aan die de reservering toe gaat voegen.
                                require_once ("classes/reserveerAuto.php");
                                $registreren = new reserveerAuto();
                                $laatzien = $registreren->toevoegen($vanafdatum, $totdatum, $kenteken);
                                echo $laatzien;
                            }
                            ?>
                            <!--<p><a href="bestel.php" class="btn btn-primary" role="button">Nu lenen!</a> </p>-->
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="thumbnail">
                        <img class="topcar" src="assets/img/audia4.jpg" alt="...">
                        <div class="caption">
                            <h3>BWM 323 (Benzine)</h3>
                            <form action="" method="post">
                                <label for="from">Van</label>
                                <input type="date" format="yyyy-mm-dd" id="" name="from"><br>
                                <label for="to">Tot:</label>
                                <input type="date" format="yyyy-mm-dd" id="" name="to"><br>
                                <input type="hidden" name="kenteken4" value="05-HJ-UF">
                                <input class="btn btn-primary" type="submit" name="verzenden3" value="Verder"><a href="product.php" class="btn btn-default" role="button">Meer informatie</a>

                            </form>
                            <?php
                            if(isset($_POST['verzenden3'])){
                                $vanafdatum = $_POST['from'];
                                $totdatum = $_POST['to'];
                                $kenteken = $_POST['kenteken4'];

                                //roep hier de functie aan die de reservering toe gaat voegen.
                                require_once ("classes/reserveerAuto.php");
                                $registreren = new reserveerAuto();
                                $laatzien = $registreren->toevoegen($vanafdatum, $totdatum, $kenteken);
                                echo $laatzien;
                            }
                            ?>
                            <!--<p><a href="bestel.php" class="btn btn-primary" role="button">Nu lenen!</a> </p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    <?php
        include "includes/footer.php";
    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>