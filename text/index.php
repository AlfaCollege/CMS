<?php

/*
	Image request bestand.
	Hier wordt met de parameters gedealt en returned de via database opgehaalde data in een json ding.
*/
header('Content-type: application/JSON');

$db = new PDO('mysql:dbname=CMS;host=127.0.0.1', 'root', 'root');

$query = 'SELECT * FROM Content ';
$first = false;

if (!empty($_GET)){
	//
	//We hebben parameters gekregen
	if (isset($_GET['id']) && !empty($_GET['id'])){
		//
		//SELECT IMAGES WITH ID $_GET['id']
		//query += WHERE ID = $_GET['id']
		if ($first == false){
			$query .= 'WHERE ID = :ID ';
			$first = true;
		} else {
			$query .= 'AND ID = :ID ';
		}

	}

	if (isset($_GET['location']) && !empty($_GET['location'])){
		//
		//query += AND location = $_GET['location']
		if ($first == false){
			$query .= 'WHERE Locatie = :LOC ';
			$first = true;
		} else {
			$query .= 'AND Locatie = :LOC ';
		}
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

	//
	//Haal de data binnen anders geef niks terug.
		$data = $db->prepare($query);
		if (isset($_GET['id'])){
			$data->execute(['LOC' => $_GET['location'], 'ID' => $_GET['id']]);
		} else {
			$data->execute(['LOC' => $_GET['location']]);
		}

		$data = $data->fetchAll();
		//var_dump($query);
		//var_dump($data);

		$json_data;
		$count = 0;
		$json_data[$count] = $count;
		$count++;

		foreach($data as $image){
			$json_data[$count] = [$image['ID'], $image['Text'], $image['Locatie']];
			$count++;
		}
		$count--;
		$json_data[0] = $count;
		
		die(json_encode($json_data));
	
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