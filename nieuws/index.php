<?php
header('Content-type: application/JSON');
include('../libs/database.php');

$data = DB::select('*', 'artikelen');

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
			'Title' 			=> $content['titel'],
			'Text' 		=> $content['text'],
	];
	$count++;
}

$json_data[0] = $count-1;

echo json_encode($json_data);
