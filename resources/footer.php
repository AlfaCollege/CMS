<footer>
    <div id="footer-holder" class="container-fluid">
        <div class="col-xs-12 col-md-8 panel-default ">
            <div id="footer-left" class="col-xs-6 col-sm-4 panel-body">
                <h1><b>Openingstijden</b></h1>
                <?php
                    $data = file_get_contents('http://www.caferestauranthetwittepaard.nl/CMS/text/?location=HWP.TIJDEN.1');
                    $data = json_decode($data,1);
                    // var_dump($data);
                    echo $data[1]["Text"];
                    ?>
            </div>
            <div id="footer-center" class="col-xs-6  col-sm-4 panel-body">
                <h1><b>Contactgegevens</b></h1>
                <p>
                    Restaurant Het Witte Paard<br>
                    Hoofdstraat 217<br>
                    9828 PB Oostwold<br>
                    <a href="tel:0505515282">050 – 5515 282</a><br>
                    info@caferestauranthetwittepaard.nl
                </p>
                <br>
                <a href="https://www.facebook.com/HetWittePaardOostwold" class="webicon facebook">Like us on Facebook</a>
                <a href="https://www.twitter.com/het_witte_paard" class="webicon twitter">Like us on Facebook</a>
                <a href="mailto:info@caferestauranthetwittepaard.nl" class="webicon mail">Like us on Facebook</a>
            </div>
            <div id="footer-right" class="col-xs-6  col-sm-4 panel-body">
                <h1><b>Handige linkjes</b></h1>
                <a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/index.php'?>">Home</a><br>
                <a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/reserveren.php'?>">Reserveren</a><br>
                <a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/contact.php'?>">Contact</a><br>
                <a href="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/kaart/index.php'?>">Menu</a><br>
            </div>
            <div id="copyrightholder" class="col-xs-12 col-sm-9">
                <span>© 2015 Copyright - Restaurant het Witte Paard Oostwold</span>
            </div>
        </div>
        <div id="footer-rightimg" class="col-md-4 visible-md visible-lg" ><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9559.63336911132!2d6.438001!3d53.20156!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfadee8db3e1edc18!2sHet+Witte+Paard!5e0!3m2!1snl!2snl!4v1433156672998" height="260px;" width="380px;" frameborder="0"</iframe>
        </div>
    </div>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-66973506-2', 'auto');
      ga('send', 'pageview');
    </script>
</footer>