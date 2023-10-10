<?php
require_once("index.php");
function ConfirmationOfPassword ($passwordToConfirm){
    if($_POST["password_1"] == $passwordToConfirm){
        
            echo'</br>';
            echo'<h2> HOURA!!! Votre Mot De Passe A Eté Confirmé </h2>'; 
    }
        else{
            echo'</br>';
            echo'<h2> BOUUUH!!! Mot De Passe Invalide</h2>';
        }
    
}







?>