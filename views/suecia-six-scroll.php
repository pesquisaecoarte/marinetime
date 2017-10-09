<!DOCTYPE html>
<head>
    <title>Suécia</title>    
  <link rel="stylesheet" type="text/css" href="../vendors/backgroundimagecarousel-master/style.css">
    <?php include('includes/head.inc'); ?>
</head>
<body>
<div id="mybgcarousel" class="bgcarousel">  
</div>

<div class="circles-center">
<a href="mosaic.php" class="circle circle-back"></a>
<a href="suecia-five-scroll.php" class="circle"></a>
</div> 

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../vendors/backgroundimagecarousel-master/jquery.velocity.min.js"></script>
<script type="text/javascript" src="../vendors/backgroundimagecarousel-master/jquery.touchSwipe.min.js"></script>

<script src="../vendors/backgroundimagecarousel-master/bgcarousel.js" type="text/javascript">
</script>

<script type="text/javascript">

var firstbgcarousel=new bgCarousel({
  wrapperid: 'mybgcarousel', //ID of blank DIV on page to house carousel
  imagearray: [
    ['../assets/img/suecia06/kb11_02132.jpg'], 
    ['../assets/img/suecia06/kb11_02155.jpg'], 
    ['../assets/img/suecia06/kb11_02156.jpg'], 
    ['../assets/img/suecia06/kb11_02160.jpg'], 
    ['../assets/img/suecia06/kb11_02176.jpg'], 
    ['../assets/img/suecia06/kb11_02213.jpg']

  ],
  displaymode: {type:'auto', pause:2000, cycles:200, stoponclick:false, pauseonmouseover:true},
  navbuttons: ['left.gif', 'right.gif', 'up.gif', 'down.gif'], // path to nav images
  activeslideclass: 'selectedslide', // CSS class that gets added to currently shown DIV slide
  orientation: 'h', //Valid values: "h" or "v"
  persist: true, //remember last viewed slide and recall within same session?
  slideduration: 500 //transition duration (milliseconds)
})

</script> 
