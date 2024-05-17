<?php

function dbconnection(){
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=ala", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 return $conn;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
}

function insertData($username, $email, $password){
    $conn=dbconnection();

try {

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO signup (gebruikersnaam, email, wachtwoord)
    VALUES ('$username', '$email', '$password')";

    $conn->exec($sql);
    header("location:../index.html");
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
}
  
  $conn = null;
  ?>






