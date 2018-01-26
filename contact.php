<?php
    include "includes/header.php";
    ?>
<head>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</head>
<html xmlns:mail="http://www.w3.org/1999/xhtml">
<script>
    $(document).ready(function(){
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
    var max = 140;
    var len = $(this).val().length;
    if (len >= max) {
    $('#characterLeft').text('You have reached the limit');
    $('#characterLeft').addClass('red');
    $('#btnSubmit').addClass('disabled');
    }
    else {
    var ch = max - len;
    $('#characterLeft').text(ch + ' characters left');
    $('#btnSubmit').removeClass('disabled');
    $('#characterLeft').removeClass('red');
    }
    });
    });
</script>
    <body>
    <div class="container">
        <div class="container1 col-md-12">
            <div class="col-md-6">
                <div class="form-area">
                    <form  method="post" role="form" action="mailto:milantenhave@hotmail.com">
                        <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Vul hier uw gegevens in!</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Naam" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Telefoon nummer" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Onderwerp" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                        </div>

                        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Neem contact op</button>
                    </form>
                </div>
                <div class="col-md-5">
                    <div id="map" style="width:400px;height:400px;background:yellow">

                    </div>
                </div>
                <script>
                    function myMap() {
                        var mapCanvas = document.getElementById("map");
                        var mapOptions = {
                            center: new google.maps.LatLng(52.243726, 6.192006), zoom: 15
                        };
                        var map = new google.maps.Map(mapCanvas, mapOptions);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYgip134AGZsvPoHfRUZM9hp6jZiBZI34&callback=myMap"></script>
            </div>
        </div>
        </div>
    </body>
</html>
<?php
    include "includes/footer.php";
?>