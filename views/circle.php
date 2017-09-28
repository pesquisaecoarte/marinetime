<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>Suécia</title>
    <link rel="stylesheet" type="text/css" href="../vendors/CircleFlipSlideshow/css/default.css" />
    <link rel="stylesheet" type="text/css" href="../vendors/CircleFlipSlideshow/css/component.css" />
    <link rel="stylesheet" href="../vendors/modal-video/css/modal-video.min.css">
    <?php include('includes/head.inc'); ?>
</head>
<body class="container-circle">
    <div class="container"> 
        <header class="clearfix">
        </header>
        <div class="main">
            <div id="fc-slideshow" class="fc-slideshow">
                <ul class="fc-slides">
                    <li><img src="../assets/img/suecia_linha1/suecia_linha1_b.jpg" /></li>
                    <li><img src="../assets/img/suecia_linha1/suecia_linha1_c.jpg" /></li>
                    <li><img src="../assets/img/suecia_linha1/suecia_linha1_d.jpg" /></li>
                    <li><img src="../assets/img/suecia_linha1/suecia_linha1_e.jpg" /></li>
                </ul>
            </div>
        </div>
        <div class="circles-center">
            <a href="mosaic.php" class="circle circle-back"></a>
            <a href="#" class="js-video-button circle" data-video-id='79690528'></a>
        </div>    
    </div>
</body>
</html>
<?php include('includes/scripts.inc'); ?>
<script src="../vendors/CircleFlipSlideshow/js/modernizr.custom.js"></script>
<script src="../vendors/CircleFlipSlideshow/js/jquery.flipshow.js"></script>
<script>
    $( function() {

        $( '#fc-slideshow' ).flipshow();
    } ); 
</script>
<script src="../vendors/modal-video/js/modal-video.min.js"></script>
<script>
    $(".js-video-button").modalVideo({channel:'vimeo'});
</script>