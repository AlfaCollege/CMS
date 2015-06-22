<?php

$_SESSION['page'] = 0;

if($_POST['action'] == 'HetWittePaard') {
    $_SESSION['page'] = 0;
} elseif($_POST['action'] == 'Wobbesheerd') {
    $_SESSION['page'] = 1;
} else {
    echo 'ongeldige actie.';
}