<?php
require_once 'loginconnect.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    
    $user = checkUser($email, $wachtwoord);

    if ($user !== false) {
        
      header("location:../index.html");
     exit();   

    } else {
      
      echo '<script type="text/javascript">  
      alert("Wrong E-mail/password!");
      window.location.href = "../html/login.html";
     </script>';

    exit();

    }
} else {
    echo "Form not submitted";
}
?>
