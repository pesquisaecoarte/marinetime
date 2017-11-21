<!DOCTYPE html>
<html>
<head>
<title>Marine Time</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../vendors/modal-video/css/modal-video.min.css">    
    <?php include('includes/head.inc'); ?>
</head> 
<body>
    <section id="mosaic">
       <div class="box">
        <!--     <div class="image">
                <a href="../maps.php">
                    <img src="../assets/img/maps/suecia/mapSe01.png">
                </a> 
            </div>   -->
            <div class="image">
                <a href="suecia-one-write.php">
                    <img src="../assets/img/maps/suecia/mapSe01.png">
                </a> 
            </div>       
            <div class="image">
                <a href="suecia-two-image.php">
                    <img src="../assets/img/maps/suecia/mapSe02.png">
                </a>
            </div>  
            <div class="image">
                <a href="suecia-nine-text.php">
                    <img src="../assets/img/maps/suecia/mapSe03.png">
                </a>
            </div>
            <div class="image">
                <a href="audio.php">
                    <img src="../assets/img/maps/suecia/mapSe04.png">
                </a>
            </div>
            <div class="image">
                <a href="suecia-five-text.php">
                    <img src="../assets/img/maps/suecia/mapSe05.png">
                </a>
            </div> 
            <div class="image">
                <a href="suecia-six-image.php">
                    <img src="../assets/img/maps/suecia/mapSe06.png">
                </a>
            </div>
            <div class="image">
                <a href="suecia-eigth-image.php">
                    <img src="../assets/img/maps/suecia/mapSe08.png">
                </a>
            </div>
            <div class="image">
                <a href="suecia-nine-map.php">
                    <img src="../assets/img/maps/suecia/mapSe09.png">
                </a>
            </div>
            <div class="image">
                <a href="suecia-ten-write.php">
                    <img src="../assets/img/maps/suecia/mapSe10.png">
                </a>
            </div>
            <div class="image">
                <a href="suecia-thirteen-audio.php">
                    <img src="../assets/img/maps/suecia/mapSe13.png">
                </a>
            </div>
           <!--  NORUEGA -->
            <div class="image">
                <a href="noruega-ten-timeline.php">
                    <img src="../assets/img/maps/noruega/mapNo10.png">
                </a>
            </div>
        </div> 
<!--         MODAL SUECIA 3 -->
        <div id="modal">
            <div id="modal-mosaic">
                <div id="box-modal">
                    <div id="box-close">
                        <span id="close-modal-se03"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                    </div>
                    <iframe src="https://player.vimeo.com/video/95312344" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div> 
    </section>
</body>
<?php include('includes/scripts.inc'); ?>
<!-- <script type="text/javascript">
    $("div.box div").sort(function(){
        return Math.random()*10 > 5 ? 1 : -1;
    }).each(function(){
        var $t = $(this),
        color = $t.attr("class");
        $t.appendTo( $t.parent() );    
    });
</script> -->
<script src="../vendors/modal-video/js/modal-video.min.js"></script>
<script>
// MODAL
var btn = document.getElementById("btn-modal");
var close = document.getElementById("box-modal");
var modal = document.getElementById("modal"); 
var modalcontent = document.getElementById("modal-mosaic"); 

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

