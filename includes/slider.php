<?php
    include "head.php";
?>

<div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="15000" >

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#webAlGusto-touch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#webAlGusto-touch-slider" data-slide-to="1"></li>
        <li data-target="#webAlGusto-touch-slider" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper For Slides -->
    <div class="carousel-inner" role="listbox">

        <!-- Third Slide -->
        <div class="item active">

            <!-- Slide Background -->
            <img src="assets/img/Slider01.jpg" alt="WebAlgusto.com"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>

            <div class="container">
                <div class="row">
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_left">
                        <?php
                        $mindate = date('Y-m-d');
                        ?>
                        <div data-animation="animated zoomInRight" class="col-sm-3 col-md-3">

                            <h1 style="color: white">BMW 323</h1><br>
                            <div  class="thumbnail">

                                <div class="caption" style="text-align: center">
                                    <h3>BWM 323 (benzine)</h3>
                                    <p>Maar 85 euro per dag</p>
                                </div>
                                <form action="" method="post">
                                    <input type="hidden" value="18-YY-GG" name="kenteken7">
                                    <label for="from">Van</label>
                                    <input type="date" id="from" name="from" min="<?php echo $mindate?>"><br>
                                    <label for="to">Tot:</label>
                                    <input type="date" id="to" name="to" min="<?php echo $mindate?>"><br>
                                    <button class="btn btn-primary" style="margin-top: 5px;" type="submit" name="verzenden4">Verder</button><a href="bmw323.php" class="btn btn-default" role="button" style="margin-bottom: 15px; margin-left: 5px; margin-top: 20px;">Meer informatie</a>
                                </form>
                                <?php
                                if(isset($_POST['verzenden4'])){
                                    $vanafdatum = $_POST['from'];
                                    $totdatum = $_POST['to'];
                                    $kenteken = $_POST['kenteken7'];

                                    //roep hier de functie aan die de reservering toe gaat voegen.
                                    require_once ("classes/reserveerAuto.php");
                                    $registreren = new reserveerAuto();
                                    $laatzien = $registreren->toevoegen($vanafdatum, $totdatum, $kenteken);
                                    echo $laatzien;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Slide -->

        <!-- Second Slide -->
        <div class="item">

            <!-- Slide Background -->
            <img src="assets/img/bmw730.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_left">

                <div data-animation="animated zoomInRight" class="col-sm-3 col-md-3">

                    <h1 style="color: white">BMW 730</h1><br>
                    <div  class="thumbnail">

                        <div class="caption" style="text-align: center">
                            <h3>BMW 730 (Diesel v12)</h3>
                            <p>Maar 85 euro per dag</p>
                        </div>
                        <form action="" method="post">
                            <input type="hidden" value="11-PO-TT" name="kenteken5">
                            <label for="from">Van</label>
                            <input type="date" id="from" name="from" min="<?php echo $mindate?>"><br>
                            <label for="to">Tot:</label>
                            <input type="date" id="to" name="to" min="<?php echo $mindate?>"><br>
                            <button class="btn btn-primary" style="margin-top: 5px;" type="submit" name="verzenden5">Verder</button><a href="bmw730.php" class="btn btn-default" role="button" style="margin-bottom: 15px; margin-left: 5px; margin-top: 20px;">Meer informatie</a>
                        </form>
                        <?php
                        if(isset($_POST['verzenden5'])){
                            $vanafdatum = $_POST['from'];
                            $totdatum = $_POST['to'];
                            $kenteken = $_POST['kenteken5'];

                            //roep hier de functie aan die de reservering toe gaat voegen.
                            require_once ("classes/reserveerAuto.php");
                            $registreren = new reserveerAuto();
                            $laatzien = $registreren->toevoegen($vanafdatum, $totdatum, $kenteken);
                            echo $laatzien;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of Slide -->

        <!-- Third Slide -->
        <div class="item">

            <!-- Slide Background -->
            <img src="assets/img/Slider03.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_left">

                <div data-animation="animated zoomInRight" class="col-sm-3 col-md-3">

                    <h1 style="color: white">BMW 525</h1><br>
                    <div  class="thumbnail">

                        <div class="caption" style="text-align: center">
                            <h3>BMW 525 (turbodiesel)</h3>
                            <p>Maar 100 euro per dag</p>
                        </div>
                        <form action="" method="post">
                            <input type="hidden" value="23-67-RW" name="kenteken6">
                            <label for="from">Van</label>
                            <input type="date" id="from" name="from" min="<?php echo $mindate?>"><br>
                            <label for="to">Tot:</label>
                            <input type="date" id="to" name="to" min="<?php echo $mindate?>"><br>
                            <button class="btn btn-primary" style="margin-top: 5px;" type="submit" name="verzenden6">Verder</button><a href="bmw525.php" class="btn btn-default" role="button" style="margin-bottom: 15px; margin-left: 5px; margin-top: 20px;">Meer informatie</a>
                        </form>
                        <?php
                        if(isset($_POST['verzenden6'])){
                            $vanafdatum = $_POST['from'];
                            $totdatum = $_POST['to'];
                            $kenteken = $_POST['kenteken6'];

                            //roep hier de functie aan die de reservering toe gaat voegen.
                            require_once ("../classes/reserveerAuto.php");
                            $registreren = new reserveerAuto();
                            $laatzien = $registreren->toevoegen($vanafdatum, $totdatum, $kenteken);
                            echo $laatzien;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Slide -->


    </div>

</div> <!-- End  bootstrap-touch-slider Slider -->
