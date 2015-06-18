<?php

session_start();
unset($_SESSION['logged_in']);
unset($_SESSION['UID']);
unset($_SESSION['Naam']);

header('Location: login.php');

