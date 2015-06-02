<?php

/*
	Image request bestand.
	Hier wordt met de parameters gedealt en returned de via database opgehaalde data in een json ding.
*/
header('Content-type: application/JSON');

if (!empty($_GET)){
	//
	//We hebben parameters gekregen
	if (isset($_GET['id']) && !empty($_GET['id'])){
		//
		//SELECT IMAGES WITH ID $_GET['id']
		//query += WHERE ID = $_GET['id']
	}

	if (isset($_GET['location']) && !empty($_GET['location'])){
		//
		//query += AND location = $_GET['location']
	} else {
		//
		//Geen locatie dus gooi een fout melding
		die (json_encode(
				[
					'Error' => 500,
					'Message' => 'Er is een ongeldige locatie parameter mee gegeven.'
				]
			));
	}
} else {
	//
	//Niks gekregen
	die(json_encode(
			[
				'Error' => 500,
				'Message' => 'Er zijn geen keys opgegeven.'
			]
		));
}