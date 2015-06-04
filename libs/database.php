<?php

class DB {
	//
	private function connect(){
		//
		$config = include('./config/database.php');

		$dns 	= $config['type'].':host='.$config['host'].';dbname='.$config['dbname'];
		try {
			$pdo = new PDO($dns, $config['user'], $config['password']);
		} catch (Exception $e) {
			die($e);
		}

		return new PDO($dns, $config['user'], $config['password']);
	}

	/*
		Voert een select query uit.

		DB::select('*', 'Users', 'id = 0')
	*/
	public function select($what, $from, $where = ''){
		//
		$pdo = DB::connect();
		if ($pdo == false)
			return false;

		$query = "SELECT $what FROM $from";
		if (isset($where) && !empty($where))
			$query .= " WHERE $where";

		$return = $pdo->prepare($query);
		$return->execute();

		return $return->fetchAll();
	}

	/*
		Een insert functie die gaat als volgt.
		DB::insert('Gebruiker,Wachtwoord', 'Gebruikers', ['Gebruiker' => 'Naam', 'Wachtwoord' => 'bob'])
	*/
	public function insert($what, $into, $values){
		//
		$pdo = DB::connect();
		if ($pdo == false)
			return false;

		$query 	= "INSERT INTO $into ($what) VALUES (";
		$keys 	= explode(',', $what);
		foreach($keys as $key){
			//
			$query .= ':';
			$query .= "$key,";
		} unset($key);
		$query = rtrim($query, ',');
		$query .= ')';

		$data = $pdo->prepare($query);
		$data->execute($values);
	}
}