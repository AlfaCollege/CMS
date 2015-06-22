<?php

$_SESSION['page'] = 0;

if (isset($_SESSION['action'])){
	if($_GET['action'] == 'HetWittePaard') {
	    $_SESSION['page'] = 0;
	} elseif($_GET['action'] == 'Wobbesheerd') {
	    $_SESSION['page'] = 1;
	} else {
	    echo 'ongeldige actie.';
	}
}