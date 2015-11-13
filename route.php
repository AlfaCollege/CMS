<?php
error_reporting(0);
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Route :: Wobbesheerd</title>
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
<li><a href="/faciliteiten.php">Faciliteiten</a></li>
<li><a href="/uwvisie.php">Uw Visie</a></li>
<li><a href="/contact.php">Contact</a></li>
<li class="active"><a href="/route.php">Route <span class="sr-only">(huidige)</span></a></li>
<li><a href="/omgeving.php">Omgeving</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</header><!-- header role="banner" -->
<div class="page-content">
<div class="page-header">
<h1>Route</h1>
</div>
<?php
$json = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=WH.ROUTE.1');
$data = json_decode($json, 1);
$text = $data[1]['Text'];
echo($text);
?>
<div id="maps"><noscript>
<p><a href="https://www.google.com/maps?ll=53.197667,6.425558&z=12&t=m&hl=nl-NL&gl=NL&mapclient=embed&q=Hoofdstraat+216+9828+PD+Oostwold+Gem+Leek" target="_blank"><img class="img-responsive " src="upload/maps.jpg" width="600" height="450" alt="Kaart naar Paardenstalling Wobbesheerd" title="Kaart naar Paardenstalling Wobbesheerd" style="border:0"></a></p>
</noscript><script>
window.onload = function(){
document.getElementById("maps").innerHTML = '<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d38241.79070055959!2d6.4464!3d53.19790900000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c834c1be77e199%3A0xb214376f3c59e894!2sHoofdstraat+216%2C+9828+PD+Oostwold+Gem+Leek!5e0!3m2!1snl!2snl!4v1433248466347" width="600" height="450" frameborder="0" style="border:0;"><p><a href="/https://www.google.com/maps?ll=53.197667,6.425558&z=12&t=m&hl=nl-NL&gl=NL&mapclient=embed&q=Hoofdstraat+216+9828+PD+Oostwold+Gem+Leek" target="_blank"><img class="img-responsive " src="upload/maps.jpg" width="600" height="450" alt="Kaart naar Paardenstalling Wobbesheerd" title="Kaart naar Paardenstalling Wobbesheerd" style="border:0"></a></p></iframe>';
}
</script></div>
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
