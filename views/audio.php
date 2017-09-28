<!DOCTYPE html>
<html>
<head>
	<title>Som da Natureza</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">  
    <?php include('includes/head.inc'); ?>
</head>
<body>
<div class="container-audio">
<div class="box-audio">
	   <div class="song1 equalizer"></div>
    <audio controls loop id="song1">
        <source src="../assets/music/suecia_linha4.mp3" type='audio/mp3'>
    </audio>
</div>
</div>
</body>
</html>
<?php include('includes/scripts.inc'); ?>
<script type="text/javascript" src="../vendors/equalizer-master/js/jquery.reverseorder.js"></script>
<script type="text/javascript" src="../vendors/equalizer-master/js/jquery.equalizer.js"></script>
<script>
$(document).ready(function(){
    $('#song1').equalizer({
        color: "#f2b400",
        color1: '#a94442',
        color2: '#f2b400'
    });
    $('#song2').equalizer();
});
</script>