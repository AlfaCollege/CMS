<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Contact :: Cafe Restaurant Het Witte Paard
    </title>
	<script>
		var title = document.title = "Contact :: Café Restaurant Het Witte Paard";
		if(title != "Contact :: Café Restaurant Het Witte Paard") {document.title = "Contact :: Cafe Restaurant Het Witte Paard";}
	</script>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<!-- De scripts -->
<?php include 'resources/head.php'; ?>
<style>
    @media (min-width: 420px){
        label {
            width: 30%;
        }
    }
</style>
<body>
<?php include 'resources/header.php'; ?>
<?php
$test= "";
if(isset($_POST['submit']))
{
    $bericht = $_POST['bericht'];
    $to = "jolandapikkert40@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['naam'];

    $subject = "Vraag van het contactformulier";
    $subject2 = "Kopie van uw vraag bij het Witte Paard";
    $message = $name . " schreef het volgende:" . "\n\n" . $bericht;
    $message2 = "Hier is een kopie van uw vraag " . $name . "\n\n" . $bericht;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $test = "<h3 style='color:dodgerblue'>Mail verstuurd. Bedankt " . $name . ", we zullen zo spoedig mogelijk contact met u opnemen.</h3>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
            <li><a href="http://www.caferestauranthetwittepaard.nl/index.php">Home</a></li>
            <li class="active">Contact</li>
        </ol>
    </div>
</div>
    <div class="content container ">
    	<div class="container-fluid">
  			<div class="row contact">
                <div class="col-xs-12 col-md-6">
                    <?php
                    $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.CONTACT.1');
                    $data = json_decode($data,1);
                    // var_dump($data);
                    echo $data[1]["Text"];
                    ?>
                </div>
                <div class="col-xs-12 col-md-6" id="informatie" style="margin-bottom: 100px;">
                    <div class="col-xs-12 col-sm-6 col-md-12" style="background-color: #FFDCAA; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                        <h1>Adres gegevens</h1>
                        <div class="col-xs-12 col-sm-12 col-md-6" >
                            Hoofdstraat 217<br>
                            9828 PB Oostwold<br>
                            T: <a href="tel:0505515282">050 - 5515 282</a><br>
                            Onze e-mail adres is: <br>
                           <a  href="mailto:info@caferestauranthetwittepaard.nl">info@caferestauranthetwittepaard.nl</a><br><br>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-12" style="padding-bottom: 15px; background-color: #FFDCAA; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px; border-top: hidden;">
                        <h2 style="">Openingstijden</h2>
                        <?php
                        $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.TIJDEN.1');
                        $data = json_decode($data,1);
                        // var_dump($data);
                        echo $data[1]["Text"];
                        ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12" style="background-color: #FFDCAA; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                    <div class="col-md-12">
                        <?php if($test){echo $test;} ?>
                        <h2>Heeft u een vraag, stel hem!</h2>
                    </div>
                    <form class="form-horizontal" role="form" action="" style="padding-left: 17px" method="post">
                        <div class="col-sm-12">
                            <p class="text-danger">
                            <span class="small">Velden met</span> 
                            * 
                            <span class="small">zijn verplicht.</span>
                            </p>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-sm-2"  for="naam">Naam:</label>
                                <div class="col-sm-7" style="display: inline-flex;">
                                    <input class="form-control" id="naam" name="naam" placeholder="Naam" required="" type="text">
                                    <span class="text-danger" style="padding-left: 5px; padding-bottom: 20px">*</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-sm-2"  for="email">E-mail adres:</label>
                                <div class="col-sm-7" style="display: inline-flex; vertical-align: text-top;">
                                    <input required type="email" class="form-control" id="email" name="email" placeholder="voorbeeld@mail.nl">
                                    <span class="text-danger" style="padding-left: 5px; padding-bottom: 20px">*</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="bericht">Uw bericht:</label>
                                <div class="col-sm-7" style="display: inline-flex;">
                                    <textarea required class="form-control" rows="5" id="bericht" name="bericht" placeholder="Typ hier uw bericht."></textarea>
                                    <span class="text-danger" style="padding-left: 5px; padding-bottom: 20px">*</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="submit" name="submit" id="submit" value="Verstuur bericht" class="btn btn-default">
                            </div>
                        </div>
                    </form>
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