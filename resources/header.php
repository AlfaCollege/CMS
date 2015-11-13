<?php 
@session_start(); 
    $index          =   "link";
    $OverOns          =   "link";
    $Reserveren          =   "link";
    $Nieuws          =   "link";
    $Gastenboek          =   "link";
    $Contact          =   "link";
    $menuLinks=basename($_SERVER['PHP_SELF'],".php");
    switch ($menuLinks) {
        case 'index':
            $index              = "linkActive";
            break;
        case 'overons':
            $OverOns              = "linkActive";
            break;
        case 'reserveren':
            $Reserveren              = "linkActive";
            break;
        case 'nieuws':
            $Nieuws              = "linkActive";
            break;
        case 'gastenboek':
            $Gastenboek              = "linkActive";
            break;
        case 'contact':
            $Contact              = "linkActive";
            break;
    }
?>
<div class="container">
    <div class="masthead">
        <nav class="navbar-default navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="active navbar-brand <?php echo $index; ?>" href="index.php" >Home</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="<?php echo $OverOns ?> "       href="http://caferestauranthetwittepaard.nl/overons.php">Over ons</a></li>
                    <li><a class="<?php echo $Reserveren ?> "     href="http://caferestauranthetwittepaard.nl/reserveren.php">Reserveren</a></li>
                    <li><a class="<?php echo $Nieuws ?> "         href="http://caferestauranthetwittepaard.nl/nieuws.php">Nieuws</a></li>
                    <li><a class="<?php echo $Gastenboek  ?> "     href="http://caferestauranthetwittepaard.nl/gastenboek.php">Gastenboek</a></li>
                    <li><a class="<?php echo $Contact ?> "        href="http://caferestauranthetwittepaard.nl/contact.php">Contact</a></li>
                    <li class="dropdown">
                        <a href="kaart/index.php" id="dropdownmenu">Onze kaart <b class="caret"></b></a>
                        <ul id="dropdownmenus" class="dropdown-menu">
                            <li><a  id="dropdownmenu" href="http://caferestauranthetwittepaard.nl/kaart/lunch.php">Lunch</a></li>
                            <li><a  id="dropdownmenu" href="http://caferestauranthetwittepaard.nl/kaart/diner.php">Diner</a></li>
                            <li><a id="dropdownmenu" href="http://caferestauranthetwittepaard.nl/kaart/dessert.php">Dessert</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<script>
    $(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
    });
</script>