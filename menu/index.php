<?php
header('Content-type: application/JSON');
include('../libs/database.php');

if (!isset($_GET['kaart'])){
    //
    die(json_encode([
        'Error'     => 500,
        'Message'   => 'Geen kaart opgegeven.'
        ]
    ));
} else {
    //
    $data = DB::select('*', 'menu', 'kaarten_id = '.$_GET['kaart']);
    if (empty($data)){
        //
        die(json_encode([
                'Error'     => 500,
                'Message'   => 'Geen waarden gevonden.'
            ]
        ));
    } else {
        //
        $count = 1;
        $json_data[0] = $count;
        foreach($data as $menu){
            //
            $kaart      = DB::select('*', 'kaarten', 'id = '.$menu['kaarten_id']);
            $category   = DB::select('*', 'categorie', 'id = '.$menu['categorie_id']);
            $json_data[$count] = [
                'Naam'          => $menu['naam'],
                'Prijs'         => $menu['prijs'],
                'Beschrijving'  => $menu[0],
                'Kaart'         => $kaart[0]['naam'],
                'Categorie'     => $category[0]['naam']
            ];
            $count++;
        } unset($menu);
        $json_data[0] = $count-1;

        die(json_encode($json_data));
    }
}
