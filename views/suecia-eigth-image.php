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
		['../assets/img/suecia_line8/Foto2_kb11_01937.jpg', 'Ronny complained about the lack of fish in the region. He is one of the very few fisherman in the whole island. There is about 10 of them here, and it is a 136 km long island.'],
		['../assets/img/suecia_line8/Foto1_kb11_01997.jpg', ' On a rainy day Tapio helped me to interview Ronny, a fisherman I had met in Bläsinger Fiskhamn a few days earlier. '] //["image_path", "optional description"] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:4000, cycles:200, stoponclick:false, pauseonmouseover:true},
	navbuttons: ['left.gif', 'right.gif', 'up.gif', 'down.gif'], // path to nav images
	activeslideclass: 'selectedslide', // CSS class that gets added to currently shown DIV slide
	orientation: 'h', //Valid values: "h" or "v"
	persist: true, //remember last viewed slide and recall within same session?
	slideduration: 200 //transition duration (milliseconds)
})

</script> 