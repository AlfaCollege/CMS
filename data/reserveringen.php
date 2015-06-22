<?php
include "../libs/database.php";

function validate($var){
    //
}

if (!empty($_POST)){
    //
    $voornaam       = $_POST['voornaam'];
    $achternaam     = $_POST['achternaam'];
    $email          = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $personen       = $_POST['personen'];
    $voorkeurstijd  = $_POST['voorkeurstijd'];
    $datum          = $_POST['datum'];
    $extrainfo      = $_POST['extra'];
    $url            = $_POST['url'];
} else {
    //
    die(json_encode(
            [
                'Error'     => 500,
                'Message'   => 'Er is geen data opgegeven'
            ]
        ));
}

/*
    TODO:
        DONE - Kijk of er geen duplicaat van de resevering bestaat.
        DONE - ALS hij wel bestaat stuur ze terug naar waar ze vandaan kwamen met een bericht.
        - Anders valideer de waarden die mee gestuurt zijn.
*/
$reseveringen   = DB::select('*', 'reservering', 'voornaam = \''.$voornaam.'\'');

if (empty($reseveringen)){
    //
    //Geen duplicaat
    if (!empty($voornaam) && (count_chars($voornaam) > 3)){
        //
        //Voornaam is legit.
        if (!empty($achternaam) && (count_chars($voornaam) > 3)){
            //
            //Achternaam is legit.
            if (!empty($email) && (count_chars($email) > 4)){
                //
                //Email is legit
                if (!empty($telefoonnummer) && (count_chars($telefoonnummer) < 16)){
                    //
                    //Tel.Nr. is legit
                    if (!empty($personen) && $personen > 1){
                        //
                        //Personen is legit
                        if (!empty($voorkeurstijd)){
                            //
                            //Voorkeurstijd is legit
                            if (!empty($datum)){
                                //
                                //Datum is legit.
                                if (!empty($url)){
                                    //
                                    //URL is legit.
                                    DB::insert('voornaam,achternaam,email,telefoonnummer,personen,voorkeurstijd,personen,datum,extra', 'reservering', [
                                            'voornaam'          => $voornaam,
                                            'achternaam'        => $achternaam,
                                            'email'             => $email,
                                            'telefoonnummer'    => $telefoonnummer,
                                            'personen'          => $personen,
                                            'voorkeurstijd'     => $voorkeurstijd,
                                            'datum'             => $datum,
                                            'extra'             => $extra
                                        ]);

                                    return true;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    //
    die(json_encode([
            'Error'     => 500,
            'Message'   => 'De reservering bestaat al.'
        ]));
}

return false;