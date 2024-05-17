<?php

include 'dbconnect.php';
  
$username = $_POST['gebruikersnaam'];
$email = $_POST['email'];
$password = $_POST['wachtwoord'];
insertData($username, $email, $password);
?>
