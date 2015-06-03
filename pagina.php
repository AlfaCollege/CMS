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
    $currentpage = "pagina";
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
                        <textarea class="ckeditor" name="editor1">
                            <?php

                            $db = new PDO("mysql:host=127.0.0.1;dbname=CMS","root","root");

                            $sql = "SELECT * FROM Content";
                            $stmt = $db->prepare($sql);
                            $stmt->execute();

                            while ($arr = $stmt->fetch(PDO::FETCH_ASSOC)) {

                                echo $arr['Text'];

                                ?>



                            <?php
                            }
                            ?>
                        </textarea>
                    <div class="pull-right">
                        <?php
                            $db = new PDO("mysql:host=127.0.0.1;dbname=CMS","root","root" );

                            $sql = "SELECT * FROM Content";
                            $stmt = $db->prepare($sql);
                            $stmt->execute();

                            while ($arr = $stmt->fetch(PDO::FETCH_ASSOC)){

                                echo $arr['Locatie'];
                            }
                        ?>
                    </div>
                    <button name="upload" type="submit" class="btn btn-success">Upload</button>
                        <?php

                        ?>

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
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
</body>

</html>
