<?php

session_start();

function logSession($gebruikersnaam, $email, $wachtwoord)
{
    $_SESSION['gebruikersnaam']=$gebruikersnaam;
    $_SESSION['email']=$email;
    $_SESSION['wachtwoord']=$wachtwoord;
}



?>