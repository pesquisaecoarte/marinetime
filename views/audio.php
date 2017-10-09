<!DOCTYPE html>
<html>
<head>
	<title>Som da Natureza</title>
    <link rel="stylesheet" type="text/css" href="../vendors/slick-master/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../vendors/slick-master/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">  
    <?php include('includes/head.inc'); ?>
</head>
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
<body>
<div class="container-audio">
<div class="box-audio">
	   <div class="song1 equalizer"></div>
    <audio controls loop id="song1">
        <source src="../assets/music/suecia_linha4.mp3" type='audio/mp3'>
    </audio>
</div>
</div>
<section class="center slider">
    <div>
      <img src="../assets/img/suecia04/kb11_02142.jpg">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=2">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=3">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=4">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=6">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=7">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=8">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=9">
    </div>
  </section>
</body>
</html>
<!-- <?php include('includes/scripts.inc'); ?> -->
<script type="text/javascript" src="../vendors/equalizer-master/js/jquery.reverseorder.js"></script>
<script type="text/javascript" src="../vendors/equalizer-master/js/jquery.equalizer.js"></script>
<!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
<script src="../vendors/slick-master/slick/slick.js" type="text/javascript" charset="utf-8"></script>
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
<!-- 
<script type="text/javascript">
    $(document).on('ready', function() {
     
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 3,
  autoplay: true,
  autoplaySpeed: 2000
      });
    });
</script> -->