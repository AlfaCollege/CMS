<?php
session_start();

if($_SESSION['logged_in'] === true) {
    header('Location: index.php');
}


//if(isset($_POST['submit'])) {
//    $auth = new Auth;
//    $auth->login();
//}

if(!empty($_POST)) {
    if($_POST['username'] == "foo" && $_POST['password'] == "bar") {
        $_SESSION['logged_in'] = true;

        header('Location: index.php');
    }
}

?>

<!DOCTYPE html>
<html>
<head><!-- CDN hosted by Cachefly -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Watergoldfish-CMS</title>

    <!-- Eigen CSS -->
    <link href="css/login.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form action="" class="login" method="post">
                    <input name="username" type="text" placeholder="Username" />
                    <input name="password" type="password" placeholder="Password" />
                    <input type="submit" name="submit" value="Sign In" class="btn btn-success btn-sm" />
                    <!-- <div class="remember-forgot">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" />
                                        Mij Onthouden
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>
