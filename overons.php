<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Over Ons :: Cafe Restaurant Het Witte Paard
    </title>
	<script>
		var title = document.title = "Over Ons :: Café Restaurant Het Witte Paard";
		if(title != "Over Ons :: Café Restaurant Het Witte Paard") {document.title = "Over Ons :: Cafe Restaurant Het Witte Paard";}
	</script>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include 'resources/head.php'; ?>
<body>
<?php include 'resources/header.php'; ?>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href="http://www.caferestauranthetwittepaard.nl/index.php">Home</a></li>
                <li class="active">Over Ons</li>
        </ol>
    </div>
</div>
<div class="content container" style="margin-bottom: 5px; padding-bottom:10px;">
        <div class="border" style="border:1px solid black;box-shadow: 0px 0px 10px 0px black; overflow: hidden;background-color: #FFDCAA;">
            <div class="col-md-12" style="margin: 0px; padding: 0 !important; margin: 0 !important; background-color: #FFDCAA;">
                <div class="col-md-6" style="float:left; padding: 10px 50px">
                    <div class="col-md-12" style="padding: 0px;">
                       <?php
                        $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.PARKEREN.1');
                        $data = json_decode($data,1);
                        // var_dump($data);
                        echo $data[1]["Text"];
                        ?>
                    </div>
                    <div class="col-md-12" style="padding: 0px;">
                        <?php
                        $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.SPEELTUIN.1');
                        $data = json_decode($data,1);
                        // var_dump($data);
                        echo $data[1]["Text"];
                        ?>
                  </div>
                </div> 
                <div class="col-md-6 hidden-xs" style="float:right">
                    <div class="text-overons" style="padding: 10px 50px">  
                        <div id="myCarousel" class="carousel slide" data-interval="5000" >
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('.carousel').carousel();
                                });
                            </script>
                                <div class="carousel-inner" style="width: 400px; height 300px; float:right;">
                                    <div class="item active">
                                        <img src="img/lunch.jpg" width="400px" height="300px" class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="img/locatie.jpg" width="400px" height="300px" class="img-responsive"/>
                                    </div>
                                    <div class="item">
                                        <img src="img/menu1.jpg" width="400px" height="300px" class="img-responsive"/>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>
    </div>
        <div class="col-md-12" style="margin: 0px; background-color: #FFDCAA; padding: 0 !important;margin-bottom: 5px;">
            <div class="text-geschiedenis" style="padding: 10px 50px">
                <?php
                    $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.GESCHIEDENIS.1');
                    $data = json_decode($data,1);
                    // var_dump($data);
                    echo $data[1]["Text"];
                ?>
            </div>
        </div>
    </div>
</div>
<div class="container footer">
    <?php include 'resources/footer.php'; ?>
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