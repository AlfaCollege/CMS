<!DOCTYPE html>
<html lang="en">

<head>
    <? require("upload.php");
    ?>

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
    $currentpage = "menu";
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
                        Menu
                    </h1>
                </div>
                    <div class="row clearfix">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-hover" id="tab_logic">
                                <thead>
                                <tr >
                                    <th class="text-center">
                                        Kaart
                                    </th>
                                    <th class="text-center">
                                        Item naam
                                    </th>
                                    <th class="text-center">
                                        Prijs
                                    </th>
                                    <th class="text-center">
                                        Beschrijving
                                    </th>
                                    <th class="text-center">
                                        Categorie
                                    </th>
                                    <th class="text-center">
                                        Option
                                    </th>
                                </tr>
                                </thead>

                                <?php

                                $db = new PDO("mysql:host=127.0.0.1;dbname=CMS","root","root");

                                $sql = "SELECT * FROM menu";
                                $stmt = $db->prepare($sql);
                                $stmt->execute();

                                $sql1 = "SELECT * FROM categorie";
                                $stmt1 = $db->prepare($sql1);
                                $stmt1->execute();

                                $sql2 = "SELECT * FROM kaarten";
                                $stmt2 = $db->prepare($sql2);
                                $stmt2->execute();


                                while ($arr = $stmt->fetch(PDO::FETCH_ASSOC)) {


                                ?>

                                <tbody>
                                    <form method="POST">
                                        <input type="hidden" name="ID" value="<?php echo $arr['ID']; ?>" >
                                        <tr id='addr0' data-id="0">
                                            <td data-name="img">
                                                <select>
                                                    <?php
                                                    while ($arr2 = $stmt2->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <option><?php echo $arr2['naam']; ?></option>
                                                    <?php } ?>
                                                </select>

                                            </td>
                                            <td data-name="name">
                                                <input type="text" name='item' value='<?php echo $arr['naam']; ?>' class="form-control"/>
                                            </td>
                                            <td data-name="prijs">
                                                <span class="input-symbol-euro">
                                                    <input type="text" value="<?php echo $arr['prijs']; ?>"/>
                                           </span>
                                            </td>
                                            <td data-name="desc">
                                                <textarea  name="desc" class="form-control"><?php echo $arr['beschrijving']; ?></textarea>
                                            </td>
                                            <td data-name="cat" class="dropdown">
                                                <select>
                                                    <?php
                                                    while ($arr3 = $stmt1->fetch(PDO::FETCH_ASSOC)) {

                                                    ?>
                                                    <option><?php echo $arr3['naam']; ?></option>
                                                    <?php } ?>
                                                </select>

                                            </td>
                                            <td data-name="save">
                                                <button name="save" class="btn btn-info">Opslaan</button>
                                            </td>
                                            <td data-name="del">
                                                <button name="del0" class='btn btn-danger btn-danger row-remove'>verwijderen</button>
                                            </td>
                                        </tr>
                                    </form>
                                </tbody>

                                <?php } ?>






                            </table>
                        </div>
                    </div>
                    <a id="add_row" class="btn btn-default pull-right">Item Toevoegen</a>
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

</body>

</html>
