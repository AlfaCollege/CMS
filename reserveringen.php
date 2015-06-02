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
    <link href="fonts/font-awesome/css/font-awesome.min.csss" rel="stylesheet" type="text/css">

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
    $currentpage = "reserveringen";
    require_once 'assets/header.php';
    ?>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <form class="form-horizontal">
                    <fieldset>

                        <!-- Form Name -->
                        <h1 class="page-header">Reservations</h1>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Check</th>
                                <th>Volledige naam</th>
                                <th>Email adres</th>
                                <th>Telefoonnummer</th>
                                <th>Aantal personen</th>
                                <th>Extra benodigdheden</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"><span class="glyphicon glyphicon-ok"></span></th>
                                <td>Harry</td>
                                <td>ja@nee.nl</td>
                                <td>0612345678</td>
                                <td>2</td>
                                <td>None</td>
                                    <td><div class="controls">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Bevestigen</button>
                                            <button id="singlebutton" name="singlebutton" class="btn btn-danger">Afwijzen</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="glyphicon glyphicon-remove"></span></th>
                                <td>Martin</td>
                                <td>ja@nee.nl</td>
                                <td>0612345678</td>
                                <td>2</td>
                                <td>None</td>
                                <td><div class="controls">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Bevestigen</button>
                                        <button id="singlebutton" name="singlebutton" class="btn btn-danger">Afwijzen</button>
                                    </div></td>
                            </tr>
                            <tr>
                                <th scope="row"><span class="glyphicon glyphicon-ok"></span></th>
                                <td>KJ</td>
                                <td>ja@nee.nl</td>
                                <td>0612345678</td>
                                <td>2</td>
                                <td>None</td>
                                <td><div class="controls">
                                        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Bevestigen</button>
                                        <button id="singlebutton" name="singlebutton" class="btn btn-danger">Afwijzen</button>
                                    </div></td>
                                <!-- Button -->

                            </tr>
                            </tbody>
                        </table>


                    </fieldset>
                </form>

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
