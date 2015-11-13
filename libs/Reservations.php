<?php
$url = 'http://172.20.7.79:8080//';

// Data vangen van de API
$data = json_decode(file_get_contents($url), false);
$reservations = $data->reservations;



foreach($reservations as $reservation) {
    var_dump($reservation->personal_details->first_name);
}