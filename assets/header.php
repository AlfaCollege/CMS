<!DOCTYPE html>
<html lang="en">
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">HetWittePaard</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Welkom <?php echo (isset($_SESSION['Name'])? 'Niemand' : $_SESSION['Naam']) ?><b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="divider"></li>
                <li>
                    <a href="check.php?action=HetWittePaard"><i class="fa fa-cutlery"></i> Het Witte Paard</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="check.php?action=Wobbesheerd"><i class="glyphicon glyphicon-knight"></i> Wobbesheerd</a>

                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class= "<?php if($currentpage =='index'){echo 'active';}?>">
                <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="<?php if($currentpage =='reserveringen'){echo 'active';}?>">
                <a href="reserveringen.php"><i class=" glyphicon glyphicon-credit-card"></i> Reserveringen</a>
            </li>
            <li class="<?php if($currentpage =='menu'){echo 'active';}?>">
                <a href="menu.php"><i class="glyphicon glyphicon-pushpin"></i> Menu</a>
            </li>
            <li class="<?php if($currentpage =='pagina'){echo 'active';}?>">
                <a href="pagina.php?id=1"><i class="glyphicon glyphicon-pushpin"></i> Pagina's</a>
            </li>
            <li class="<?php if($currentpage =='recenties'){echo 'active';}?>">
                <a href="recenties.php"><i class="glyphicon glyphicon-pushpin"></i> Recenties</a>
            </li>
            <li class="<?php if($currentpage =='nieuws'){echo 'active';}?>">
                <a href="nieuws.php"><i class="glyphicon glyphicon-pushpin"></i> Nieuws</a>
            </li>
        </ul>
        </li>
        </ul>
    </div>
</nav>
</body>
