<?php
error_reporting(0);
header("Content-Type: text/html; charset=utf-8");
$json = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=WH.%');
$data = json_decode($json, 1);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Faciliteiten :: Wobbesheerd</title>
<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/bootstrap-override.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="/js/html5shiv.min.js"></script>
<script src="/js/respond.min.js"></script>
<style>.container{max-width: 900px;}</style>
<![endif]-->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png?0">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png?0">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png?0">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png?0">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png?0">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png?0">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png?0">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png?0">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png?0">
<link rel="icon" type="image/png" href="/favicon-32x32.png?0" sizes="32x32">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png?0" sizes="192x192">
<link rel="icon" type="image/png" href="/favicon-96x96.png?0" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png?0" sizes="16x16">
<link rel="manifest" href="/manifest.json?0">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-TileImage" content="mstile-144x144.png?0">
<meta name="theme-color" content="#ffffff">
</head>
<body>
<div class="container">
<header role="banner">
<img id="logo-main" src="/img/header.jpg" width="900" height="201" title="Paardenstalling Wobbesheerd Oostwold" alt="Paardenstalling Wobbesheerd Oostwold">
<nav id="navbar-primary" class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="/index.php">Wobbesheerd</a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li class="active"><a href="/faciliteiten.php">Faciliteiten <span class="sr-only">(huidige)</span></a></li>
<li><a href="/uwvisie.php">Uw Visie</a></li>
<li><a href="/contact.php">Contact</a></li>
<li><a href="/route.php">Route</a></li>
<li><a href="/omgeving.php">Omgeving</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</header><!-- header role="banner" -->
<div class="page-content">
<div class="page-header">
<h1>Faciliteiten</h1>
</div>
<?php
$text = $data[6]['Text'];
echo($text);
?>
<noscript><p>U heeft javascript nodig om de slideshow te kunnen gebruiken.</p></noscript>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
<li data-target="#myCarousel" data-slide-to="5"></li>
<li data-target="#myCarousel" data-slide-to="6"></li>
<li data-target="#myCarousel" data-slide-to="7"></li>
<li data-target="#myCarousel" data-slide-to="8"></li>
<li data-target="#myCarousel" data-slide-to="9"></li>
<li data-target="#myCarousel" data-slide-to="10"></li>
<li data-target="#myCarousel" data-slide-to="11"></li>
</ol>
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
<div class="item active">
<img src="/upload/DSC_0018-slide.jpg" alt="Boerderij" title="Boerderij" width="630" height="419">
<div class="carousel-caption">
<h3>Boerderij</h3>
<?php
$text = $data[7]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0013-slide.jpg" alt="Overdekte rijhal" title="Overdekte rijhal" width="630" height="419">
<div class="carousel-caption">
<h3>Overdekte rijhal</h3>
<?php
$text = $data[8]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0004-slide.jpg" alt="Stapmolen" title="Stapmolen" width="630" height="419">
<div class="carousel-caption">
<h3>Stapmolen</h3>
<?php
$text = $data[9]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0041-slide.jpg" alt="Grote buitenbak" title="Grote buitenbak" width="630" height="419">
<div class="carousel-caption">
<h3>Grote buitenbak</h3>
<?php
$text = $data[10]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0038(1)-slide.jpg" alt="Kleine buitenbak" title="Kleine buitenbak" width="630" height="419">
<div class="carousel-caption">
<h3>Kleine buitenbak</h3>
<?php
$text = $data[11]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0009-slide.jpg" alt="Paddock" title="Paddock" width="630" height="419">
<div class="carousel-caption">
<h3>Paddock</h3>
<?php
$text = $data[12]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0006-slide.jpg" alt="Groepsstal voor jonge paarden" title="Groepsstal voor jonge paarden" width="630" height="419">
<div class="carousel-caption">
<h3>Groepsstal voor jonge paarden</h3>
<?php
$text = $data[13]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0014(1)-slide.jpg" alt="Individuele stallen (30 boxen)" title="Individuele stallen (30 boxen)" width="630" height="419">
<div class="carousel-caption">
<h3>Individuele stallen (30 boxen)</h3>
<?php
$text = $data[14]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/linkerstal-slide.jpg" alt="Individuele stallen (10 boxen)" title="Individuele stallen (10 boxen)" width="630" height="419">
<div class="carousel-caption">
<h3>Individuele stallen (10 boxen)</h3>
<?php
$text = $data[15]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0002-slide.jpg" alt="Groepsstal" title="Groepsstal" width="630" height="419">
<div class="carousel-caption">
<h3>Groepsstal</h3>
<?php
$text = $data[16]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0027(1)-slide.jpg" alt="Weide" title="Weide" width="630" height="419">
<div class="carousel-caption">
<h3>Weide</h3>
<?php
$text = $data[17]['Text'];
echo($text);
?>
</div>
</div>
<div class="item">
<img src="/upload/DSC_0007-slide.jpg" alt="Trailerstalling" title="Trailerstalling" width="630" height="419">
<div class="carousel-caption">
<h3>Trailerstalling</h3>
<?php
$text = $data[18]['Text'];
echo($text);
?>
</div>
</div>
</div>
<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div><!-- /.page-content -->
<footer class="footer">
<address>
Hoofdstraat 216<br>
9828 PD Oostwold<br>
Tel: 050-5515623<br>
Mob. 06-15596766 <br>
Email: <a href="&#x6d;&#97;&#x69;&#x6c;&#x74;&#x6f;&#58;&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;">&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;</a>
</address>	
</footer>
</div><!-- /.container -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-66973506-1', 'auto');
ga('send', 'pageview');
</script>
</body>
</html>
