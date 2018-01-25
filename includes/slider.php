<?php
    include"head.php";
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
<div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

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

                        <div data-animation="animated zoomInRight" class="col-sm-2 col-md-2">

                            <h1 style="color: white">Audi A4</h1><br>
                            <div  class="thumbnail">

                                <div class="caption" style="text-align: center">
                                    <h3>Audi A4 2016</h3>
                                    <p>Maar 500 euro per maand!</p>
                                </div>
                                <form>
                                    <label for="from">Van</label>
                                    <input type="text" id="from" name="from"><br>
                                    <label for="to">Tot:</label>
                                    <input type="text" id="to" name="to"><br>
                                    <button style="margin-top: 5px;" type="submit">Verder</button>
                                </form>
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
            <img src="assets/img/Slider02.jpg" alt="Bootstrap Touch Slider"  class="slide-image"/>
            <div class="bs-slider-overlay"></div>
            <!-- Slide Text Layer -->
            <div class="slide-text slide_style_center">
                <h1 data-animation="animated flipInX">Bootstrap touch slider</h1>
                <p data-animation="animated lightSpeedIn">Make Bootstrap Better together.</p>
                <a href="http://webalgusto.com/" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">select one</a>
                <a href="http://webalgusto.com/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">select two</a>
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

                <div data-animation="animated zoomInRight" class="col-sm-2 col-md-2">

                    <h1 style="color: white">Audi A4</h1><br>
                    <div  class="thumbnail">

                        <div class="caption" style="text-align: center">
                            <h3>Audi A4 2016</h3>
                            <p>Maar 500 euro per maand!</p>
                        </div>
                        <form>
                            <label for="from">Van</label>
                            <input type="text" id="from" name="from"><br>
                            <label for="to">Tot:</label>
                            <input type="text" id="to" name="to"><br>
                            <button style="margin-top: 5px;" type="submit">Verder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Slide -->


    </div>

</div> <!-- End  bootstrap-touch-slider Slider -->
