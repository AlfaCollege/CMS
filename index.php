<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Home :: Cafe Restaurant Het Witte Paard
    </title>
	<script>
		var title = document.title = "Home :: Café Restaurant Het Witte Paard";
		if(title != "Home :: Café Restaurant Het Witte Paard") {document.title = "Home :: Cafe Restaurant Het Witte Paard";}
	</script>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include 'resources/head.php'; ?>
<body>
<?php include 'resources/header.php'; ?>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
            <li class="active">Home</li>
        </ol>
    </div>
</div>
<div class="content container index">
    <div class="col-xs-12 col-md-8" style="padding-left:0px;">
        <div class="col-md-12" style="border: 1px solid black; box-shadow: 0px 0px 10px 0px black; background-color: #FFDCAA;">
                <?php
                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.INTRODUCTIE.1');
                $data = json_decode($data,1);
                // var_dump($data);
                echo $data[1]["Text"];
                ?>
        </div>
        <div class="col-xs-6 col-md-6" style="margin-top: 10px; padding-right: 15px;padding-left:0px;">
            <a href="/kaart/index.php" style="padding-bottom: 20px;">
                <div class="thumbnail" style="background-color: #FFDCAA; border: 1px solid black; box-shadow: 0px 0px 10px 0px black;">
                    <?php
                    $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.index.1');
                    $data = json_decode($data,1);
                    // var_dump($data);
                    echo $data[1]["Text"];
                    ?>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-md-6" style="margin-top: 10px; padding-left: 15px; padding-right: 0px; ">
            <a href="/reserveren.php">
                <div class="thumbnail" style="background-color: #FFDCAA; border: 1px solid black; box-shadow: 0px 0px 10px 0px black;">
                    <img src="img/reserveren.png" alt="Reserveren">
                    <div class="caption">
                        <p><a class="btn btn-link" style="color: black; font-size: 35px;" href="/reserveren.php" role="button">Reserveren</a></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xs-12 col-md-4" style="border: 1px solid black; margin-bottom: 50px; box-shadow: 0px 0px 10px 0px black; background-color: #FFDCAA;">
        <div class="col-md-12">
            <h2 style="font-size: 30px; text-align: center;">Nieuws</h2>
        </div>
        <?php
            $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/nieuws/');
            $data = json_decode($data,1);
            $testmax = 3;
            // echo '<pre>';var_dump($data);echo '</pre>';
            if(isset($data[0])){
                for ($i=0; $i < $testmax; $i++) { 
                    echo '<div class="col-md-12" style="margin-top: 10px;">
                        <div class="col-md-12">
                            <p style="font-size: 20px;">'.$data[$i+1]["Title"].'</p>
                        </div>
                        <br>
                        <br>
                        <p class="expanded">'. $data[$i+1]["Text"]. '</p>
                        <p class="collapsed"></p>
                        <hr style="border-color:#000000; box-shadow: 0px 0px 10px 0px black;">
                        </div>';
                } 
            }
        ?>
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