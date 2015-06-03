<?php
/**
 * Created by PhpStorm.
 * User: Ruben
 * Date: 27/05/2015
 * Time: 10:52
 */

include_once('../login.php');
include_once('database.php');

class auth {

    public function __construct() {
        $db = new DB_Class; //nog aanpassen aan database
    }

    public function login($username, $password) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        //query
        $result = mysql_query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
        $user_data = mysql_fetch_array($result);
        $no_rows = mysql_num_rows($result);

        //login
        if ($no_rows == 1) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user_data['id'];

            return true;
        } else {
            return false;
        }
    }
    public function get_session(){
        return $_SESSION['login'];
    }
}
