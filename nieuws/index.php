<?php
include('../libs/database.php');

$data   = DB::select('*', 'artikelen');

$count  = 1;
$json_data[0] = $count;
foreach($data as $nieuws){
    //
    $json_data[$count] = [
        'ID'    => $nieuws['id'],
        'Title' => $nieuws['titel'],
        'Text'  => $nieuws['text']
    ];
}
$json_data[0] = $count-1;

die(json_encode($json_data));
