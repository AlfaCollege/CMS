<?php
header('Content-type: application/JSON');
include('../libs/database.php');

$id 		= -1;
$location 	= -1;

$data = DB::select('*', 'recenties', 'akkoord = \'2\'');

if ($data === false){
	//
	echo json_encode([
			'Error' 	=> 304,
			'Message' 	=> 'Geen data gevonden voor de opgegeven query.'
		]);
	exit();
}

$count 			= 1;
$json_data[0] 	= 0;

foreach ($data as $content) {
	//
	$json_data[$count] = [
			'ID' 			=> $content['id'],
			'Naam' 			=> $content['naam'],
			'Recentie' 		=> $content['recentie'],
			'Rating' 		=> $content['rating']
	];
	$count++;
}

$json_data[0] = $count-1;

echo json_encode($json_data);
