<?php
require_once("functions.php");
//utilise le script des fonctions

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
}
else{
    echo '</br><h2>"ERREUR!!!! Veuillez Entrer un nouveau!"</h2>';
}

       
       
        
    }//Verification du  champ de texte
    
    

}


?>
</br>
<a href="index.php">Retour</a>