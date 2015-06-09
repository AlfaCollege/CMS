<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 27/05/2015
 * Time: 10:52
 */
session_start();

include_once('database.php');
include_once('Redirect.php');
class auth
{

    public $user_data = array();
    public $_SESSION;
    public $errors = array();

    public function login()
    {


        if (empty($_POST['username'])) {
            $this->errors[] = "er is geen username ingevuld.";
        } elseif (empty($_POST['password'])) {
            $this->errors[] = "er is geen wachtwoord ingevuld.";
        } elseif (!empty($_POST['username']) && !empty($_POST['password'])) {

            $username = $_POST['username'];
            $password = $_POST['password'];


            //query
            $result = DB::select('*', 'gebruikers', 'Naam = $username AND wachtwoord = $password');
            $this->user_data = mysql_fetch_array($result);
            $no_rows = mysql_num_rows($result);

            print_r($username);

            //login
            if ($no_rows == 1) {
                $_SESSION['login'] = true;
                $_SESSION['id'] = $this->user_data['ID'];
                $_SESSION['username'] = $this->user_data['Naam'];

                Redirect::to('index.php');
                return true;
            } else {
                echo('de ingevoerde gegevens kloppen niet.');
                return false;
            }
        } return true;

    } public function get_session(){
            return $_SESSION['login'];
    }
}