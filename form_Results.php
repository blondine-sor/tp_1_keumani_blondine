<?php
require_once("functions.php");
//utilise le script des fonctions

echo'<h1> Validation de Mot de passe</h1>';

echo'<p></p>';


if($_POST){
    $password_1 = $_POST["password_1"];

    if(empty($password_1 )){
        echo'<h3> Veuillez Entrer un Mot de passe!</h3>';
       
    }//Verification du champ du mot de passes

    else{
       
        $validationOfPassword = ValidationOfPassword($_POST['password_1']);
          echo'</br>' .$validationOfPassword["message"];
           //Validation de la longeur du mot de passe

      if($validationOfPassword["isValid"]){
      
    $saltedPassword = AddSaltToPassword($_POST['password_1']);

    $encodedPassword = EncryptedPassword($saltedPassword);
        echo'</br>';
        echo'<h2> Votre mot de passe a été créé!'; echo'</h2>';
        echo'<h3> Mot de passe Validé : '.$encodedPassword;echo'</h3>';
        echo'<h3> Veuillez  confirmer le mot de passe</h3>';
        require_once("index_2.php");
  
       
      }
     else{
       echo '</br><h2>"ERREUR!!!! Veuillez Entrer un nouveau!"</h2>';

      }
    
    }
       
 ?>
 <?php      
        
    }//Verification du  champ de texte
    
 
    








?>
</br>
<a href="index.php">Retour</a>