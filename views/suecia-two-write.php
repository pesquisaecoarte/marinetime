<!DOCTYPE html>
<html>
<head>
    <title>Suécia</title>    
    <link rel="stylesheet" href="vendors/Smoothslides-master/css/smoothslides.theme.css">
    <link rel="stylesheet" href="vendors/changethewords-master/animate.changethewords.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('includes/head.inc'); ?>
</head>
<body>
    <section class="write">
            <div class="string-write">
               <p>
                   “After the day in Färjestaden - car and ferry -, I wanted to go on a bicycle ride to move the body. This time Kelly went with me to enjoy the late afternoon on the nearest beach. The water was calm and the sky color was beautiful.”
               </p>
            <div class="write-subtitle">
                <p>Karla Brunet</p>
            <div class="circles-center">
            <a href="#" class="circle" id="btn-modal"></a>
            </div>
            </div>
            </div>
    </section>
    <section>
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