<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        Reserveren :: Cafe Restaurant Het Witte Paard
    </title>
	<script>
		var title = document.title = "Reserveren :: Café Restaurant Het Witte Paard";
		if(title != "Reserveren :: Café Restaurant Het Witte Paard") {document.title = "Reserveren :: Cafe Restaurant Het Witte Paard";}
	</script>
    <meta name="description" content="Wilt u lekker genieten voor een heerlijke prijs? Dan bent u bij het goede adres!">
</head>
<?php include 'resources/head.php'; ?>
<?php include 'database.php'; ?>
<script>
    function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.ketCode
        if(charCode > 31 && (charCode < 45 || charCode > 57))
            return false;
        return true;
    }
    $(function(){
        $("#datepicker").datepicker();
        $.datepicker.formatDate("dd-mm-yy", new Date(1,1,2008));
    });
    $(document).ready(function () {
        $('#myform').validate({ // initialize the plugin
            rules: {
                field1: {
                    required: true,
                    email: true
                },
                tel: {
                    required: true,
                    minlength: 5,
                    maxlength: 11
                }
            }
        });
    });
</script>
<?php
    $dezedag=date("l");
    $zondag="<option>15:00</option>
            <option>15:30</option>
            <option>16:00</option>
            <option>16:30</option>
            <option>17:00</option>
            <option>17:30</option>
            <option>18:00</option>
            <option>18:30</option>
            <option>19:00</option>
            <option>19:30</option>
            <option>20:00</option>
            <option>20:30</option>";
    $week="<option>12:00</option>
            <option>12:30</option>
            <option>13:00</option>
            <option>13:30</option>
            <option>14:00</option>
            <option>14:30</option>
            <option>15:00</option>
            <option>15:30</option>
            <option>16:00</option>
            <option>16:30</option>
            <option>17:00</option>
            <option>17:30</option>
            <option>18:00</option>
            <option>18:30</option>
            <option>19:00</option>
            <option>19:30</option>
            <option>20:00</option>
            <option>20:30</option>";
if(isset($_POST['submit']))
{
    $errors= [];
    $voornaam=$_POST['voornaam'];
    $achternaam=$_POST['achternaam'];
    $telnr=$_POST['tel'];
    $email=$_POST['email'];
    $pers=$_POST['pers'];
    $tijd=$_POST['tijd'];
    $inputdate=$_POST['datepicker'];
    $datumnieuw=$inputdate . " " . $tijd;
    $comment=$_POST['comment'];
    //ga verder met het afhandelen
    if(is_numeric($voornaam) || is_numeric($achternaam))
    {
        $errors[] ="Dit lijkt geen echte naam te zijn...";
    }
    $num_length = strlen((string)$telnr);
    if($num_length < 10 || $num_length > 11) {
        $errors[] ="Dit lijkt geen echt telefoonnummer te zijn...";
    }
    if(count($errors) > 0){
        foreach($errors as $e){
          echo  "<script type='text/javascript'>alert('$e');</script>";
        }
    } else
    {
        /*
		Een insert functie die gaat als volgt.
		DB::insert('Gebruiker,Wachtwoord', 'Gebruikers', ['Gebruiker' => 'Naam', 'Wachtwoord' => 'bob'])
        */
        //query kan uitgevoerd worden.
        try
        {
        DB::insert("first_name,last_name,email,phone_number,number_of_persons,datetime,extras","reservations",[
            'first_name' => $voornaam,
            'last_name' =>  $achternaam,
            'email' =>      $email,
            'phone_number' =>$telnr,
            'number_of_persons'=>$pers,
            'datetime'=>    $datumnieuw,
            'extras'=>      $comment
        ]);
            $bericht = $_POST['naam'];
            $to = "jolandapikkert40@gmail.com"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $name = $_POST['voornaam'];
            $surname = $_POST['achternaam'];
            $subject = "Nieuwe reservering binnen";
            $subject2 = "Bevestiging reservering het Witte Paard";
            $message = $name . " ". $surname . " heeft de volgende bestelling geplaatst:" . "\n\n"
            . "Aantal personen: " . $pers . "\n\n"
            . "Voorkeurstijd: " . $tijd . "\n\n"
            . "Datum: " . $datumnieuw . "\n\n"
            . "Extra informatie: " . $comment . "\n\n"
            . "Email: " . $email . "\n\n"
            . "Telefoonnummer: " . $telnr;
            $message2 = $name . " ". $surname . " heeft de volgende bestelling geplaatst:" . "\n\n"
                . "Aantal personen: " . $pers . "\n\n"
                . "Voorkeurstijd: " . $tijd . "\n\n"
                . "Datum: " . $datumnieuw . "\n\n"
                . "Extra informatie: " . $comment . "\n\n"
                . "Email: " . $email . "\n\n"
                . "Telefoonnummer: " . $telnr;
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "<script>if(!alert('Bedankt voor uw bestelling! Er is een bevestigingsmail naar u gestuurd.')) document.location = 'index.php';</script>";
        }catch(Exception $e)
        {
            echo 'Message: ' .$e->getMessage();
        }
    }
}
?>
<body>
<?php include 'resources/header.php'; ?>
<div class="container">
    <div class="row" style="margin-top: 15px;">
        <ol class="breadcrumb">
                <li><a href="http://www.caferestauranthetwittepaard.nl/index.php">Home</a></li>
                <li class="active">Reserveren</li>
        </ol>
    </div>
</div>
<div class="content container ">
    <div class="container-fluid">
        <div class="row reserveren">
            <div class="col-md-7" style="border: 1px solid black; box-shadow: 0px 0px 10px 0px black; background-color: #FFDCAA;">
                <div class="col-xs-12"><h1>Reserveer hier online!</div>
                <div class="col-xs-12"><?php
                    if($dezedag=="Monday")
                    {
                        echo "<h3 style='color:darkred;'>Let op! Houd er rekening mee dat we vandaag en morgen nog gesloten zijn.</h3>";
                    }else if($dezedag=="Tuesday")
                    {
                        echo "<h3 style='color:darkred;'>Let op! Houd er rekening mee dat we vandaag nog gesloten zijn.</h3>";
                    }?>
                    </div>
                <form method="post" action="#" role="form">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="voornaam">Uw voornaam *</label>
                            <input type="text" class="form-control" name="voornaam" id="voornaam" value="<?php echo isset($_POST['voornaam']) ? $_POST['voornaam'] : '' ?>" required style="">
                        </div>
                    </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="achternaam">Uw achternaam *</label>
                            <input type="text" class="form-control" id="achternaam" name="achternaam" value="<?php echo isset($_POST['achternaam']) ? $_POST['achternaam'] : '' ?>" required style="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="email">Uw E-Mail *</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" required style="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="tel">Uw telefoonnummer *</label>
                            <input type="tel" onkeypress="return isNumberKey(event)" name="tel" class="form-control" id="tel" value="<?php echo isset($_POST['tel']) ? $_POST['tel'] : '' ?>" required style="">
                        </div>
                    </div>
                     <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="pers">Aantal personen *</label>
                            <input type="text" class="form-control" name="pers" onkeypress="return isNumberKey(event)" id="pers" value="<?php echo isset($_POST['pers']) ? $_POST['pers'] : '' ?>" required style="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="tijd">Voorkeurstijd *</label>
                            <select  class="form-control" name="tijd" id="tijd" required style="">
                                <?php if($dezedag=="Sunday")
                                {
                                    echo $zondag;
                                } else
                                {
                                    echo $week;
                                }?>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="datepicker">Datum *</label>
                            <input type="text" class="form-control" name="datepicker" value="<?php echo isset($_POST['datepicker']) ? $_POST['datepicker'] : '' ?>" id="datepicker" required style="">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <div class="form-group">
                            <label for="comment" style="">Extra informatie</label>
                            <textarea class="form-control" rows="5" id="comment" style="" name="comment"><?php echo isset($_POST['comment']) ? $_POST['comment'] : '' ?></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-md-12">
                        <p>Vergeet niet de verplichte velden met een (*) in te vullen</p>
                    </div>
                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" id="submit" name="submit" value="Reserveren" class="btn btn-default"><br><br>
                </form>
            </div>
            <div class="col-xs-12 col-md-5" id="informatie">
                <div class="col-xs-12 col-sm-6 col-md-12" style="background-color: #FFDCAA; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px;">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h2>Adres gegevens</h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        Hoofdstraat 217<br>
                        9828 PB Oostwold<br>
                        T: 050 - 5515 282<br>
                        Onze e-mail adres is: <br>
                        <a href="mailto:reserveren@caferestauranthetwittepaard.nl">reserveren@caferestauranthetwittepaard.nl</a><br><br>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12" style="background-color: #FFDCAA; padding-bottom: 20px; box-shadow: 0px 0px 10px 0px gray; border: solid black 1px; border-top: hidden;">
                    <h2>Openingstijden</h2>
                     <?php
                    $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.TIJDEN.1');
                    $data = json_decode($data,1);
                    // var_dump($data);
                    echo $data[1]["Text"];
                    ?>
                </div>
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