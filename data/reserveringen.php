<?php
include "../libs/database.php";
$voornaam = $achternaam = $email = $telefoonnummer = $personen = $voorkeurstijd = $datum = $extrainfo = "";
$minname = "2";
$max = "255";
$maxpersonen = 3;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = test_input($_POST["voornaam"]);
    $achternaam = test_input($_POST["achternaam"]);
    $email = test_input($_POST["email"]);
    $telefoonnummer = test_input($_POST["telefoonnummer"]);
    $personen = test_input($_POST["personen"]);
    $voorkeurstijd = test_input($_POST["voorkeurstijd"]);
    $datum = test_input($_POST["datum"]);
    $extrainfo = test_input($_POST["extrainfo"]);
}



elseif ($voornaam < $minname) {
    echo "naam moet op zijn minst 2 letters zijn";
} elseif ($voornaam < $max) {
    echo "naam moet minder dan 255 letters zijn";
}
elseif ($achternaam < $minname){
    echo "achternaam moet op zijn minst 2 letters zijn";
}
elseif($achternaam < $max){
    echo "achternaam moet minder dan 255 letters zijn";
}
elseif($personen < $maxpersonen){
    echo "achternaam moet minder dan 3 cijfers zijn";
}



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

DB::insert("voornaam,achternaam,email,telefoonnumer,aantal,extra,datum,tijd", "reserveringen", ["voornaam" =>$voornaam, "achternaam" => $achternaam, "email" => $email, "telefoonnummer" => $telefoonnummer, "aantal" => $personen, "extra" => $extrainfo, "datum" => $datum, "tijd" => $voorkeurstijd,]);