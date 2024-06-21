<?php

require_once("session.php");
require_once ('Cookies.php');
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

function insertData($username,$email, $password){
    $conn=dbconnection();

try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO signup (gebruikersnaam, email, wachtwoord)
    VALUES ('$username', '$email', '$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
}


function checkUser($email,$wachtwoord)
{
    $con = dbconnection();

    $query="SELECT * FROM signup WHERE email=:email AND wachtwoord=:wachtwoord";
    $stmt = $con->prepare($query);
    try{
        $stmt->execute(array(':email'=>$email, ':wachtwoord'=>$wachtwoord));
        $result =$stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($result);
        if(!$result) {
            return $result;
          } 

 else {
      
  logSession($result["gebruikersnaam"],$result["email"],$result["wachtwoord"]);
  setCookies($result["gebruikersnaam"]);

  }

    } catch(PDOException $e) {echo 'Exception because'.$e;
    
    }
}

?>