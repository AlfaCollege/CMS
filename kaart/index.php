<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Kaart | Restaurant Het Witte Paard
    </title>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include '../resources/head.php'; ?>

<body>
<?php include '../resources/header2.php'; ?>
<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/index.php'?>>Home</a></li>
                <li class="active">Kaart</li>
        </ol>
    </div>
</div>
<div class="content container menu">
    <div class="container-fluid" style="padding-left: 0;">
        <div class="col-md-4" style="padding-left: 0px;">
            
            <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/kaart/lunch.php'?> class="thumbnail" style="background-color: #FFDCAA; color: black; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                <?php

                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.KAART.1');
                $data = json_decode($data,1);
                // var_dump($data);
                echo $data[1]["Text"];
                ?>
                <!-- <img alt="Lunch Kaart" src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/img/lunch.jpg'?> class="img-responsive">
                <h2 style="color: black;">Lunch</h2> -->
            </a>
        </div>
        <div class="col-md-4" style="padding-left: 7px; padding-right: 7px;">
            <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/kaart/diner.php'?> class="thumbnail" style="background-color: #FFDCAA; color: black; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                <img alt="Diner Kaart" src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/img/diner.jpg'?>  class="img-responsive">
                <h2 style="color: black;">Diner</h2>
            </a>
        </div>
        <div class="col-md-4" style="padding-right: 0px;">
            <a href=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/kaart/dessert.php'?> class="thumbnail" style="background-color: #FFDCAA; color: black; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                <img alt="Dessert Kaart" src=<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/img/dessert.jpg'?>  class="img-responsive">
                <h2 style="color: black;">Dessert</h2>
            </a>
        </div>
    </div>
</div>



<div class="container footer">
<?php include '../resources/footer.php'; ?>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66973506-2', 'auto');
  ga('send', 'pageview');

</script>
</body>


</html>