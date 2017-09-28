<!DOCTYPE html>
<html>
<head>
    <title>Suécia</title>    
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../vendors/Slides-SlidesJS-3/examples/standard/css/example.css">
    <?php include('includes/head.inc'); ?>
</head>
<body>
<section>
<div class="container">  
  <div id="slides">
    <img src="">
    <img src="../assets/img/suecia_line6/kb11_02156.jpg">
    <img src="../assets/img/suecia_line6/kb11_02160.jpg">
    <img src="../assets/img/suecia_line6/kb11_02176.jpg">
    <img src="../assets/img/suecia_line6/kb11_02213.jpg">
      <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
      <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
  </div>
</div>

    <div class="circles-center">
        <a href="mosaic.php" class="circle circle-back"></a>
    </div>


  </section>
</body>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="../vendors/Slides-SlidesJS-3/source/jquery.slides.min.js"></script>
  <style>
    /* Prevents slides from flashing */
    #slides {
      display:none;
    }
  </style>
  <script>
    $(function(){
      $("#slides").slidesjs({
        width: 940,
        height: 528
      });
    });
    $(function(){
  $("#slides").slidesjs({
    navigation: {
      active: true,
        // [boolean] Generates next and previous buttons.
        // You can set to false and use your own buttons.
        // User defined buttons must have the following:
        // previous button: class="slidesjs-previous slidesjs-navigation"
        // next button: class="slidesjs-next slidesjs-navigation"
      effect: "slide"
        // [string] Can be either "slide" or "fade".
    }
  });
});
  </script>
