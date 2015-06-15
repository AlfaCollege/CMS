<?php
    require_once 'libs/database.php';
?>

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
    $currentpage = "reserveringen";
    require_once 'assets/header.php';
    ?>
        <!-- /.navbar-collapse -->


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
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>Email adres</th>
                                <th>Telefoonnummer</th>
                                <th>Aantal personen</th>
                                <th>Datum en tijd</th>
                                <th>Extra's</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $reservations = json_decode(json_encode(DB::select('*', 'reservations')), false);
                                    // var_dump($reservations);


                                    foreach($reservations as $reservation) {
                                        
                                        echo '<tr>',
                                            '<td>', $reservation->first_name, '</td>',
                                            '<td>', $reservation->last_name, '</td>',
                                            '<td>', $reservation->email, '</td>',
                                            '<td>', $reservation->phone_number, '</td>',
                                            '<td>', $reservation->number_of_persons, '</td>',
                                            '<td>', $reservation->datetime, '</td>',
                                            '<td>', $reservation->extras, '</td>',
                                            '</tr>';
                                    }
                                ?>
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
