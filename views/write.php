<!DOCTYPE html>
<html>
<head>
    <title>Sobre</title>    
    <link rel="stylesheet" href="vendors/Smoothslides-master/css/smoothslides.theme.css">
    <link rel="stylesheet" href="vendors/changethewords-master/animate.changethewords.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('includes/head.inc'); ?>
</head>
<body>
    <section class="write">
            <div class="string-write">
            <span class="type-it">"Sea represents freedom” <br>
                “I like when you are in the open sea like this” 
            </span>

        

            <div class="write-subtitle">
            <p>Captain Fredrsh</p>
            <div class="circles">
                <a href="circle.php" class="circle"></a>
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
