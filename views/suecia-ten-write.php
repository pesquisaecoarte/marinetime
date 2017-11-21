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
            <span class="type-it">IIn Stora Rör marina I met Lars, a sailorman from Kalmar. Since 1979 he sails every summer. In the past he used to go on regattas, sailing competition but nowadays, sailing in onlyfor pleasure.Lars thinks that nowaday, there are more algae in the water. For him, sea is freedom.</span>   
            <div class="write-subtitle">
            <p></p>
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
                    <iframe src="https://vimeo.com/238994731" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
        </div> 
    </section>
</body>
<?php include('includes/scripts.inc'); ?>
<script src="../vendors/typeit/dist/typeit.js"></script>
<script type="text/javascript">

    $('.type-it').typeIt({
        strings: [''],
breakLines: true //se a string continua ou não na tela 
});

</script>
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