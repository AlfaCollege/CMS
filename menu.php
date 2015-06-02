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
                            <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                <thead>
                                <tr >
                                    <th class="text-center">
                                        Image
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
                                        Option
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id='addr0' data-id="0" class="hidden">
                                    <td data-name="prijs">


                                    </td>
                                    <td data-name="name">
                                        <input type="text" name='item' placeholder='Item' class="form-control"/>
                                    </td>
                                    <td data-name="prijs">
                                        <span class="input-symbol-euro">
                                            <input type="text" />
                                   </span>
                                    </td>
                                    <td data-name="desc">
                                        <textarea  name="desc" placeholder="Beschrijving" class="form-control"></textarea>
                                    </td>
                                    <td data-name="save">
                                        <button name="save" class="btn btn-info">Opslaan</button>
                                    </td>
                                    <td data-name="del">
                                        <button name="del0" class='btn btn-danger btn-danger row-remove'>verwijderen</button>
                                    </td>
                                </tr>
                                </tbody>
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
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menu.js"></script>
</body>

</html>
