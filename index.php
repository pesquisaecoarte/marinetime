<!DOCTYPE html>
<html>
<head>
    <title>Marine Time</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no"/> 
    <link rel="stylesheet" href="vendors/Smoothslides-master/css/smoothslides.theme.css">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/changethewords-master/animate.changethewords.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"> </script>
    <script type="text/javascript" src="assets/js/scripts.js"> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="vendors/changethewords-master/jquery.changethewords.js"></script>
</script>
</head>
<body>
<?php include('views/includes/header.inc'); ?>
    <section class="section-one main">
        <div class="title"> 
            <p>Marine Time</p>
        </div>
<!--         <div id="changethewords">
            <span data-id="1"><p>Voar</p></span>
            <span data-id="2"><p>Ver o mar</p></span>
            <span data-id="3"><p>Se apaixonar</p></span>
            <span data-id="4"><p>Andar de bike</p></span>
            <span data-id="5"><p>Sentir o vento</p></span>
            <span data-id="6"><p>Conhecer novas pessoas</p></span>
        </div> -->
       <a href="views/mosaic.php"><button class="button-start">Começar!</button></a>
    </section>
</body>
</html>
<!-- <script type="text/javascript">
    $(function() {
        $("#changethewords").changeWords({
            time: 1500,
            animate: "tada",
            selector: "span",
repeat: true // false
});
    });
</script> -->
<script type="text/javascript">
$('menu-toggle').on('click touchstart', function() {
    $('html').toggleClass('menu-active');
    e.preventDefault();
    alert('oi');
});</script>