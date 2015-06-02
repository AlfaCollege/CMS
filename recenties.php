
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WGF-CMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/default.css" rel="stylesheet">

    <!-- Recenties CSS -->
    <link href="css/recenties.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php
    $currentpage = "recenties";
    require_once 'assets/header.php';
    ?>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        WaterGoldFish
                        <small>Content management system</small>
                    </h1>
                    <div class="col-lg-12">
                        <input type="search" class="form-control" id="input-search" placeholder="Zoek recenties" >
                    </div>
                    <div class="searchable-container">
                        <?php

                        $db = new PDO("mysql:host=127.0.0.1;dbname=CMS","root","root");

                        $sql = "SELECT * FROM Recenties";
                        $stmt = $db->prepare($sql);
                        $stmt->execute();

                        while ($arr = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            if($arr['Akkoord'] == 0) {
                                $recenties_kleur = "red";
                            } else {
                                $recenties_kleur = "green";
                            }
                            ?>
                            <div class="items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
                                <div class="info-block block-info clearfix" style="background-color:<?php echo $recenties_kleur; ?>">
                                    <h4>Naam: <?php echo $arr['Naam']; ?></h4>
                                    <div class="caption-full"><p>Recentie: <?php echo $arr['Recentie']; ?></p></div>
                                    <p>Rating: <?php echo $arr['Rating']?></p>
                                    <button class="btn btn-success">Accepteren</button>
                                    <button class="btn btn-danger">Afwijzen</button>

                                </div>
                            </div>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/recenties.js"></script>
</body>

</html>
