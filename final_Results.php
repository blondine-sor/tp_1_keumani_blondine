<?php
require_once("functions.php");

//Page de confirmation du mot de passe



echo'<h1>Confirmation du MDP</h1>';

if($_POST){
    $password= $_POST["password"];
    $password_2 = $_POST["password_2"];

    if(empty($password_2)){
        
    echo'<h3> Veuillez Confirmer votre Mot de passe!</h3>';
    }
    else{
        if($password_2 == $password){
            echo'</br>';
            echo'<h2> HOURA!!! Votre Mot De Passe A Eté Confirmé </h2>'; 
        }
        else{
            echo'</br>';
            echo'<h2> BOUUUH!!! Mot De Passe Invalide</h2>';
        }
    }
}






?>
<a href="index.php">Retour</a>