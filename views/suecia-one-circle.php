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
            <a href="#" class="circle" id="btn-modal"></a>
        </div> 
        <div id="modal">
            <div id="modal-content">
                <div id="box-modal">
                    <div id="box-close">
                        <span id="close-modal"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    </div>
                    <iframe src="https://player.vimeo.com/video/235853853" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>
<?php include('includes/scripts.inc');?>
<script src="../vendors/CircleFlipSlideshow/js/modernizr.custom.js"></script>
<script src="../vendors/CircleFlipSlideshow/js/jquery.flipshow.js"></script>
<script>
$( function() {
        $( '#fc-slideshow' ).flipshow();
    } ); 
// MODAL
var btn = document.getElementById("btn-modal");
var close = document.getElementById("box-modal");
var modal = document.getElementById("modal"); 
var modalcontent = document.getElementById("modal-content"); 

btn.onclick = function() {
    modal.style.display = "block";
}
close.onclick = function() {
    window.location.href = "mosaic.php";
}
window.onclick = function(event) {
    if (event.target == modalcontent) {
        window.location.href = "mosaic.php";
    }
}
</script> 
