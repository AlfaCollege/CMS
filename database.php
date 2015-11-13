<?php

class DB {
	//
	private static function connect(){
		//
		$config = @include('./config.php');
		if (empty($config))
			$config = @include('config.php');

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
	public static function select($what, $from, $where = ''){
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
	public static function insert($what, $into, $values){
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


	public static function update($table, $update, $where) {
		$pdo = DB::connect();
		if ($pdo == false)
			return false;

		$set = "";

		foreach($update as $column=>$content) {
			
			if($set != "") {
				$set .= ", ";
			}

			$set .= "$column='$content'";
		}

		$query 	= "UPDATE $table SET $set WHERE $where";

		$data = $pdo->prepare($query);
		$data->execute();

		return $data;
	}

	/*
		Voegt een query uit voor als de functie er voor nog niet bestaat.
		!LET OP! Als dit verkeerd gebruikt wordt kan het veel schade toe brengen.
		DB::query('DROP DATABASE :db', ['db' => 'brains'])
	*/
	public static function query($query, $values){
		//
		$pdo = DB::connect();
		$data = $pdo->prepare($query);
		$data->execute($values);

		return $data;
	}
}