<?php
include('database.php');
@session_start();

class auth{
	//
	public function login($username, $password){
		//
		$data = DB::select('*', 'gebruikers', 'naam = \''.$username.'\' AND wachtwoord = \''.sha1($password).'\'');

		if (empty($data)){
			//
			return false;
		} else {
			//
			$_SESSION['logged_in'] 	= true;
			$_SESSION['UID'] 		= $data[0]['ID'];
			$_SESSION['Naam'] 		= $data[0]['naam'];
			return true;
		}
	}
}
