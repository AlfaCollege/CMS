<?php
header('Content-type: application/JSON');
include('../libs/database.php');

$id 		= -1;
$location 	= -1;
$options 	= 'Locatie LIKE \'';

if (isset($_GET['id']))
	$id = $_GET['id'];

if (isset($_GET['location']))
	$location = $_GET['location'];

if ($location === -1){
	//
	echo json_encode([
			'Error' 	=> 500,
			'Message' 	=> 'Ongeldige locatie parameter opgegeven.'
		]);
	exit();
}

$options 	.= $location.'\'';

if ($id !== -1)
	$options .= ' AND ID = \''.$id.'\'';

$data = DB::select('*', 'content', $options);

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
			'ID' 		=> $content['ID'],
			'Location' 	=> $content['Locatie'],
			'Text' 		=> $content['Text']
	];
	$count++;
}

$json_data[0] = $count-1;

echo json_encode($json_data);