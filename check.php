<?php
include('libs/redirect.php');
$_SESSION['page'] = 0;

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'HetWittePaard') {
        $_SESSION['page'] = 0;
        echo 'dit is het witte paard';
    } elseif ($_GET['action'] == 'Wobbesheerd') {
        $_SESSION['page'] = 1;

        echo 'dit is wobbesheerd';
    } else {
        echo 'ongeldige actie.';
    }
}