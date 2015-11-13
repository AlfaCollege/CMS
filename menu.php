<?php
session_start();

if($_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    die();
}

require_once('libs/database.php');

if(isset($_GET['delete'])){

    DB::query("DELETE FROM `menu` WHERE `id`='" . $_GET['delete'] . "'", []);

}

if(!empty($_POST)) {
    $ids = "";

    foreach($_POST as $name=>$content) {
        $name = explode('-', $name);
        $id = $name[0];
        $name = $name[1];

        $insert[$id][$name] = $content;
    }


    foreach($insert as $id=>$row) {

        if(0 != DB::query("SELECT `id` FROM `menu` WHERE `id`=" . $id, [])->rowCount()) {
            DB::update('`menu`', $row, '`id`=' . $id);
        }else {
            $columns = "";

            foreach($row as $column=>$value){
                
                if($columns != "") {
                    $columns .= ",";
                }

                $values[$column] = $value;
                $columns .= $column;
            }

            DB::insert($columns, '`menu`', $values);
        }
          
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HetWittePaard</title>

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
                        <small>Content management system</small>
                    </h1>
                </div>
                    <div class="row clearfix">
                        <form method="POST" action="">
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
                                        Verwijderen
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                

                                <?php

//                                $db = new PDO("mysql:host=127.0.0.1;dbname=CMS","root","root");
//
//                                $sql = "SELECT * FROM menu";
//                                $stmt = $db->prepare($sql);
//                                $stmt->execute();
//
//                                $sql1 = "SELECT * FROM categorie";
//                                $stmt1 = $db->prepare($sql1);
//                                $stmt1->execute();
//
//                                $sql2 = "SELECT * FROM kaarten";
//                                $stmt2 = $db->prepare($sql2);
//                                $stmt2->execute();


                                $items = json_decode(json_encode(DB::select('*', '`menu`')),false);
                                $subcategories = json_decode(json_encode(DB::select('*', '`kaarten`')),false);


                                foreach($items as $item) {


//                                while ($arr = $stmt->fetch(PDO::FETCH_ASSOC)) {


                                    ?>

                                        <tr id='<?php echo $item->id; ?>' data-id="0">
                                            <td data-name="img">
                                                <select name="<?php echo $item->id; ?>-kaarten_id">
                                                    <?php
                                                        foreach($subcategories as $subcategory) {
                                                    ?>
                                                            <option value="<?php echo $subcategory->id ;?>" <?php echo ($subcategory->id == $item->kaarten_id) ? 'selected="selected"' : '' ;?>>
                                                                <?php echo $subcategory->naam; ?>
                                                            </option>


                                                    <?php
                                                        }
                                                    ?>
                                                </select>

                                            </td>
                                            <td data-name="name">
                                                <input type="text" name="<?php echo $item->id; ?>-naam" value='<?php echo $item->naam; ?>'
                                                       class="form-control"/>
                                            </td>
                                            <td data-name="prijs">
                                                <span class="input-symbol-euro">
                                                    <input type="text" name="<?php echo $item->id; ?>-prijs" value="<?php echo $item->prijs; ?>"/>
                                           </span>
                                            </td>
                                            <td data-name="desc">
                                                <textarea name="<?php echo $item->id; ?>-beschrijving"
                                                          class="form-control"><?php echo $item->beschrijving; ?></textarea>
                                            </td>
                                            <td data-name="cat" class="dropdown">
                                                <select name="<?php echo $item->id; ?>-categorie_id">

                                                    <?php

                                                    $categories = json_decode(json_encode(DB::select('*', '`categorie`', 'kaarten_id="' . $item->kaarten_id . '"')),false);



                                                    foreach($categories as $category) {
                                                        ?>
                                                        <option value="<?php echo $category->id ;?>" <?php echo ($category->id == $item->categorie_id) ? 'selected="selected"' : '' ;?>>
                                                            <?php echo $category->naam; ?>
                                                        </option>


                                                    <?php
                                                    }
                                                    ?>


                                                </select>

                                            </td>

                                            <td data-name="del">
                                                <a href="?delete=<?php echo $item->id;?>" class='btn btn-danger btn-danger row-remove'>
                                                    verwijderen

                                            </td>
                                        </tr>
                                    


                                    <?php
                                    }
                                    ?>
                                    

                                </tbody>

                            </table>
                        </div>
                    </div>
                        <input type="submit" value="Opslaan" class="btn btn-success pull-right"/>
                        <a id="add_row" class="btn btn-default pull-right">Item Toevoegen</a>
                    </form>
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

<script type="text/javascript">
    var id = parseInt($('#tab_logic tbody tr:last-child').attr('id')) + 1;

    $('a#add_row').click(function() {
        $('#tab_logic tbody').append('<tr>'+
'                <td data-name="img">'+
'                    <select name="'+ id +'-kaarten_id">'+
''+
'<?php
    foreach($subcategories as $subcategory) {
        echo'<option name="$subcategory->naam">' . $subcategory->naam . '</option>';
    }
?>'+
'                    </select>'+
''+
'                </td>'+
'                <td data-name="name">'+
'                    <input type="text" name="'+ id +'-naam"class="form-control">'+
'                </td>'+
'                <td data-name="prijs">'+
'                    <span class="input-symbol-euro">'+
'                        <input type="text" name="'+ id +'-prijs">'+
'               </span>'+
'                </td>'+
'                <td data-name="desc">'+
'                    <textarea name="'+ id +'-beschrijving" class="form-control"></textarea>'+
'                </td>'+
'                <td data-name="cat" class="dropdown">'+
'                    <select name="'+ id +'-categorie_id">'+
'                        '+
''+
'                    </select>'+
''+
'                </td>'+
''+
'                <td data-name="del">'+
'                    <a href="?delete='+ id +'" class="btn btn-danger btn-danger row-remove">'+
'                        verwijderen'+
''+
'                </a></td>'+
'            </tr>'+
''+
'        ');
    });
</script>

</body>

</html>
