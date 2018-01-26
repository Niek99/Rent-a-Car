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
                                <input type="hidden" name="kenteken" value="05-HJ-UF">
                                <input class="btn btn-primary" type="submit" name="verzenden" value="Verder"><a href="product.php" class="btn btn-default" role="button">Meer informatie</a>
                            </form>
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
                                    <input type="hidden" name="kenteken" value="45-RR-76">
                                    <input class="btn btn-primary" type="submit" name="verzenden" value="Verder"><a href="product.php" class="btn btn-default" role="button">Meer informatie</a>
                                </form>
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
                                <input type="hidden" name="kenteken" value="89-PE-TT">
                                <input class="btn btn-primary" type="submit" name="verzenden" value="Verder"><a href="product.php" class="btn btn-default" role="button">Meer informatie</a>
                            </form>
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
                                <input type="hidden" name="kenteken" value="05-HJ-UF">
                                <input class="btn btn-primary" type="submit" name="verzenden" value="Verder"><a href="product.php" class="btn btn-default" role="button">Meer informatie</a>
                            </form>
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