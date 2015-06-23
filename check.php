<?php
include('libs/redirect.php');
@session_start();
$_SESSION['page'] = 0;

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'HetWittePaard') {
        $_SESSION['page'] = 0;

        redirect::to('index.php');
    } elseif ($_GET['action'] == 'Wobbesheerd') {
        $_SESSION['page'] = 1;

        redirect::to('index.php');
    } else {
        echo 'ongeldige actie.';
    }
}