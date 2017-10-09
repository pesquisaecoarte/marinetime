<!DOCTYPE html>
<head>
    <title>Suécia</title>    
    <link rel="stylesheet" type="text/css" href="../vendors/backgroundimagecarousel-master/style.css">
    <?php include('includes/head.inc'); ?>
</head>
<body>
    <audio id="thirteen-audio" src="../assets/music/suecia_linha4.mp3" controls autoplay loop>
        <p>Seu nevegador não suporta o elemento audio.</p>
    </audio>
    <div id="mybgcarousel" class="bgcarousel">  
    </div>
    <div class="circles-center">
        <a href="mosaic.php" class="circle circle-back"></a>
        <div class="box-audio">
            <i onclick="document.getElementById('thirteen-audio').play()" class="fa fa-volume-up" aria-hidden="true"></i>
            <i onclick="document.getElementById('thirteen-audio').pause()" class="fa fa-volume-off" aria-hidden="true"></i>
        </div>
    </div> 


</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../vendors/backgroundimagecarousel-master/jquery.velocity.min.js"></script>
<script type="text/javascript" src="../vendors/backgroundimagecarousel-master/jquery.touchSwipe.min.js"></script>
<script src="../vendors/backgroundimagecarousel-master/bgcarousel.js" type="text/javascript">
</script>
<script type="text/javascript"> 
    var v = document.getElementsByTagName("audio")[0];
    v.play();
</script>
<script type="text/javascript">

    var firstbgcarousel=new bgCarousel({
wrapperid: 'mybgcarousel', //ID of blank DIV on page to house carousel
imagearray: [
['../assets/img/suecia13/kb11_01920.jpg'], 
['../assets/img/suecia13/kb11_01932.jpg'],
['../assets/img/suecia13/kb11_01933.jpg'],
['../assets/img/suecia13/kb11_01936.jpg'],
['../assets/img/suecia13/kb11_01983.jpg'],
['../assets/img/suecia13/kb11_01985.jpg'] 
],
displaymode: {type:'auto', pause:1500, cycles:200, stoponclick:false, pauseonmouseover:true},
navbuttons: ['left.gif', 'right.gif', 'up.gif', 'down.gif'], // path to nav images
activeslideclass: 'selectedslide', // CSS class that gets added to currently shown DIV slide
orientation: 'v', //Valid values: "h" or "v"
persist: false, //remember last viewed slide and recall within same session?
slideduration: 500 //transition duration (milliseconds)
})

</script>