<?php
include "includes/header.php";
include "includes/head.php";
?>
<script>
    $( function() {
        var dateFormat = "mm/dd/yy",
            from = $( "#from" )
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 3
                })
                .on( "change", function() {
                    to.datepicker( "option", "minDate", getDate( this ) );
                }),
            to = $( "#to" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3
            })
                .on( "change", function() {
                    from.datepicker( "option", "maxDate", getDate( this ) );
                });

        function getDate( element ) {
            var date;
            try {
                date = $.datepicker.parseDate( dateFormat, element.value );
            } catch( error ) {
                date = null;
            }

            return date;
        }
    } );
</script>

<html>
<body>
<div class="container">
    <div class="container1">
        <img class="product_picture col-sm-6" src="assets/img/Audia4.jpg">
        <div class="product_text col-sm-6">
            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Cras ultricies ligula sed magna dictum porta.

            Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.

            Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt.

        </div>
        <div class="lenen_box col-sm-6 col-md-6">
            <div  class="thumbnail">
                <div class="caption" style="text-align: center">
                    <h3>Porsche 911s</h3>
                    <p>Maar 500 euro per maand!</p>
                </div>
                <form action="" method="post" fun>
                    <label for="from">Van</label>
                    <input type="date" format="yyyy-mm-dd" id="" name="from"><br>
                    <label for="to">Tot:</label>
                    <input type="date" format="yyyy-mm-dd" id="" name="to"><br>
                    <input type="hidden" name="kenteken" value="89-PE-TT">
                    <input style="margin-top: 5px;" type="submit" name="verzenden" value="Verder">
                </form>
                <?php
                if(isset($_POST['verzenden'])){
                    $vanafdatum = $_POST['from'];
                    $totdatum = $_POST['to'];
                    $kenteken = $_POST['kenteken'];

                    //roep hier de functie aan die de reservering toe gaat voegen.
                    require_once("classes/reserveerAuto.php");
                    $registreren = new reserveerAuto();
                    $laatzien = $registreren->toevoegen($vanafdatum, $totdatum, $kenteken);
                    echo $laatzien;
                }
                ?>

            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
include "includes/footer.php";
?>
