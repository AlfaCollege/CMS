<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 27/05/2015
 * Time: 10:52
 */

include_once('database.php');
include_once('Redirect.php');
include_once('validation.php');

if(isset($_POST['submit'])) {
   $auth = new Auth;
    $auth->login();
}

class auth
{

    public $user_data;
    public $_SESSION;
    public $errors;
    public function login()
    {

        if (isset($_POST['submit'])) {

            if (empty($_POST['username'])) {
                $this->errors[] = "er is geen username ingevuld.";
            } elseif (empty($_POST['password'])) {
                $this->errors[] = "er is geen wachtwoord ingevuld.";
            } elseif (!empty($_POST['username']) && !empty($_POST['password'])) {

                $username = $_POST['username'];
                $password = $_POST['password'];

                $username = 'Ruben';
                $password = 'Ruben';

                //query
                $result = DB::select('*', 'gebruikers', 'Naam = ' . $username . 'AND Wachtwoord = ' . $password);
                var_dump($result);
                die();
                $this->user_data = mysql_fetch_array($result);
                $no_rows = mysql_num_rows($result);

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
            }
            return true;

        }
        return false;

    }
    public function get_session(){

    return $_SESSION['login'];
}
}
