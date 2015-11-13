<?php
error_reporting(0);
if(is_array($_POST) && !empty($_POST)) {
// Generate mail
$message = $_POST['bericht'] . chr(13).chr(10).chr(13).chr(10) . 'Naam: ' . $_POST['naam'] . chr(13).chr(10) . 'E-mailadres: ' . $_POST['email'] . ( isset($_POST['nummer']) ? chr(13).chr(10) . 'Telefoon nummer: ' . $_POST['nummer'] : '');
$headers = 'From:' . $_POST['email'];
// Send mail
mail('info@wobbesheerd.nl','Contact via wobbesheerd.nl',$message,$headers);
mail($_POST['email'],'Kopie van "Contact via wobbesheerd.nl"',$message,'From:info@wobbesheerd.nl'); // sends a copy of the message to the sender
$sent = true;
}
else {
$sent = false;
}
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact :: Wobbesheerd</title>
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
<li class="active"><a href="/contact.php">Contact <span class="sr-only">(huidige)</span></a></li>
<li><a href="/route.php">Route</a></li>
<li><a href="/omgeving.php">Omgeving</a></li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
</header><!-- header role="banner" -->
<div class="page-content">
<div class="page-header">
<h1>Contact</h1>
</div>
<?php
$json = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=WH.CONTACT.1');
$data = json_decode($json, 1);
$text = $data[1]['Text'];
echo($text);
if ($sent) {
echo('<div id="contact"><p class="lead">Uw bericht is verzonden.</p><p>We zullen zo spoedig mogelijk contact met u opnemen.</p></div>');
}
else { 
echo(<<<'FORM'
<div id="contact">
<form id="form" class="form-horizontal" role="form" method="post">
<script>document.write('<p class="right"><a href="javascript:toggleForm();">Zelf een bericht opstellen.</a></p>');</script>
<h3>Een e-mailbericht versturen</h3>
<p class="text-danger"><span class="small">Velden met</span> * <span class="small">zijn verplicht.</span></p>
<div class="form-group">
<label class="control-label col-sm-2" for="naam">Naam:</label>
<div class="col-sm-10">
<input type="text" class="form-control" id="naam" name="naam" placeholder="Naam" required>
<span class="text-danger"> *</span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="email">E-mail adres:</label>
<div class="col-sm-10">
<input type="email" class="form-control" id="email" name="email" placeholder="voorbeeld@mail.nl" required>
<span class="text-danger"> *</span>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="nummer">Telefoon nummer:</label>
<div class="col-sm-10">
<input type="tel" class="form-control" id="nummer" name="nummer" placeholder="0612345678">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="bericht">Uw bericht:</label>
<div class="col-sm-10">
<textarea class="form-control" rows="5" id="bericht" name="bericht" placeholder="Typ hier uw bericht." required></textarea>
<span class="text-danger"> *</span>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" id="submit" class="btn btn-default">Verstuur bericht</button>
</div>
</div>
</form>
</div>
<script>
function toggleForm() {
if (state) {
document.getElementById("contact").innerHTML = 
'<form id="form" class="form-horizontal" role="form" method="post">' +
'<p class="right"><a href="javascript:toggleForm();">Zelf een bericht opstellen.</a></p>' +
'<h3>Een e-mailbericht versturen</h3>' +
'<p class="text-danger"><span class="small">Velden met</span> * <span class="small">zijn verplicht.</span></p>' +
'<div class="form-group">' +
'<label class="control-label col-sm-2" for="naam">Naam:</label>' +
'<div class="col-sm-10">' +
'<input type="text" class="form-control" id="naam" name="naam" placeholder="Naam" required>' +
'<span class="text-danger"> *</span>' +
'</div>' +
'</div>' +
'<div class="form-group">' +
'<label class="control-label col-sm-2" for="email">E-mail adres:</label>' +
'<div class="col-sm-10">' +
'<input type="email" class="form-control" id="email" name="email" placeholder="voorbeeld@mail.nl" required>' +
'<span class="text-danger"> *</span>' +
'</div>' +
'</div>' +
'<div class="form-group">' +
'<label class="control-label col-sm-2" for="nummer">Telefoon nummer:</label>' +
'<div class="col-sm-10">' +
'<input type="tel" class="form-control" id="nummer" name="nummer" placeholder="0612345678">' +
'</div>' +
'</div>' +
'<div class="form-group">' +
'<label class="control-label col-sm-2" for="bericht">Uw bericht:</label>' +
'<div class="col-sm-10">' +
'<textarea class="form-control" rows="5" id="bericht" name="bericht" placeholder="Typ hier uw bericht." required></textarea>' +
'<span class="text-danger"> *</span>' +
'</div>' +
'</div>' +
'<div class="form-group">' +
'<div class="col-sm-offset-2 col-sm-10">' +
'<button type="submit" id="submit" class="btn btn-default">Verstuur bericht</button>' +
'</div>' +
'</div>' +
'</form>';
state = false;
}
else {
document.getElementById("contact").innerHTML = 
'<form id="form" class="form-horizontal" role="form" action="javascript:void(0);" method="post" onsubmit="prepareSubmit()">' +
'<p class="right"><a href="javascript:toggleForm();">Automatisch een bericht versturen.</a></p>' +
'<h3>Een e-mailbericht opstellen</h3>' +
'<p class="text-danger"><span class="small">Velden met</span> * <span class="small">zijn verplicht.</span></p>' +
'<p class="text-info small">Zeer lange berichten kunnen problemen in uw browser veroorzaken.</p>' +
'<div class="form-group">' +
'<label class="control-label col-sm-2" for="naam">Naam:</label>' +
'<div class="col-sm-10">' +
'<input type="text" class="form-control" id="naam" name="naam" placeholder="Naam" required>' +
'<span class="text-danger"> *</span>' +
'</div>' +
'</div>' +
'<div class="form-group">' +
'<label class="control-label col-sm-2" for="email">E-mail adres:</label>' +
'<div class="col-sm-10">' +
'<input type="email" class="form-control" id="email" name="email" placeholder="voorbeeld@mail.nl" required>' +
'<span class="text-danger"> *</span>' +
'</div>' +
'</div>' +
'<div class="form-group">' +
'<label class="control-label col-sm-2" for="nummer">Telefoon nummer:</label>' +
'<div class="col-sm-10">' +
'<input type="tel" class="form-control" id="nummer" name="nummer" placeholder="0612345678">' +
'</div>' +
'</div>' +
'<div class="form-group">' +
'<label class="control-label col-sm-2" for="bericht">Uw bericht:</label>' +
'<div class="col-sm-10">' +
'<textarea class="form-control" rows="5" id="bericht" name="bericht" placeholder="Typ hier uw bericht." required></textarea>' +
'<span class="text-danger"> *</span>' +
'</div>' +
'</div>' +
'<div class="form-group">' +
'<div class="col-sm-offset-2 col-sm-10">' +
'<button type="submit" id="submit" class="btn btn-default">Bericht opstellen</button>' +
'</div>' +
'</div>' +
'</form>';
var mailto = "mailto:%69%6E%66%6F%40%77%6F%62%62%65%73%68%65%65%72%64%2E%6E%6C?FROM=&SUBJECT=Contact%20via%20wobbesheerd.nl&BODY=%0D%0A%0D%0ANaam:%20%0D%0AE-mailadres:%20";
var naam = document.getElementById("naam");
var email = document.getElementById("email");
var nummer = document.getElementById("nummer");
var bericht = document.getElementById("bericht");
var submit = document.getElementById("submit");
naam.onkeyup = email.onkeyup = nummer.onkeyup = bericht.onkeyup = eventHandler;
state = true;
}
}
function eventHandler() {
mailto = "mailto:%69%6E%66%6F%40%77%6F%62%62%65%73%68%65%65%72%64%2E%6E%6C?FROM=" + encodeURIComponent(email.value.toLowerCase()) + "&SUBJECT=Contact%20via%20wobbesheerd.nl&BODY=" + encodeURIComponent(bericht.value) + "%0D%0A%0D%0ANaam:%20" + encodeURIComponent(naam.value) + "%0D%0AE-mailadres:%20" + encodeURIComponent(email.value.toLowerCase()) + ((nummer.value == "") ? "" : "%0D%0ATelefoon%20nummer:%20" + encodeURIComponent(nummer.value.toUpperCase()));
}
function prepareSubmit() {
var form = document.getElementById("form");
form.innerHTML =
'<p class="lead">Uw bericht is opgesteld</p>' +
'<p>en er is een verzoek verstuurt naar uw mailprogramma om het bericht te openen.</p>' +
'<p>Is het verzoek niet goed verstuurt? Klik dan <a href="' + mailto + '" target="_blank">hier</a> om het opnieuw te sturen.</p>';
document.body.insertAdjacentHTML('beforeend', '<iframe src="' + mailto + '" width="0" height="0" frameborder="0" style="border:0;display:none;">');
return false;
}
var state = false;
</script>
FORM
);
}
?>
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
