<!DOCTYPE html>
<html lang="nl">
<!-- De scripts -->
<head>
    <title>
        Nieuws :: Cafe Restaurant Het Witte Paard
    </title>
	<script>
		var title = document.title = "Nieuws :: Café Restaurant Het Witte Paard";
		if(title != "Nieuws :: Café Restaurant Het Witte Paard") {document.title = "Nieuws :: Cafe Restaurant Het Witte Paard";}
	</script>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include 'resources/head.php'; ?>
<body>
<?php include 'resources/header.php'; ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.3";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    $(document).ready(function() {
        $(".collapsed").hide();

        $(".expanded, .collapsed").click(function() {
            $(this).parent().children(".expanded, .collapsed").toggle();
        });
    });
</script>
<body>
<div class="container">
    <div id="fb-root"></div>
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href="http://www.caferestauranthetwittepaard.nl/index.php">Home</a></li>
                <li class="active">Nieuws</li>
        </ol>
    </div>
</div>
<div class="content container ">
    <div class="container-fluid" style="padding-left: 0;">
        <div class="row">
            <div class="col-md-8" style="padding-bottom: 5px;">
                <?php
                $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/nieuws/');
                $data = json_decode($data,1);
                $test = $data[0];
                //echo '<pre>';var_dump($data);echo '</pre>';
                for($i = 0; $i < $test; $i++){
                    echo '<div class="col-md-12" style="border: 1px solid black; margin-top: 10px; box-shadow: 0px 0px 10px 0px black; background-color: #FFDCAA;">
                    <div class="col-md-7">
                        <br>
                        <font class="nieuwsitem" size="6">'.$data[$i+1]["Title"].'</font>
                        <br>
                        <br>
                        <p class="expanded">'. $data[$i+1]["Text"]. '</p>
                        <p class="collapsed"></p>
                        <br>
                        <br>
                    </div>
                </div>';
                }
                ?>
            </div>
            <div class="col-md-4" style="border: 1px solid black; margin-bottom: 50px; margin-top: 10px; box-shadow: 0px 0px 10px 0px black; background-color: #FFDCAA;">
                <br>
                <div class="fb-page" data-href="https://www.facebook.com/HetWittePaardOostwold" data-width="350" data-height="500" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/HetWittePaardOostwold"><a href="https://www.facebook.com/HetWittePaardOostwold">Café Restaurant Het Witte Paard</a></blockquote></div></div>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<div class="container footer">
    <?php include 'resources/footer.php'; ?>
</div>
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66973506-2', 'auto');
  ga('send', 'pageview');

</script>
</html>
