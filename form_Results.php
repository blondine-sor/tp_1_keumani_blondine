<?php
require_once("functions.php");
//utilise le script des fonctions

if($_POST){
    $password_1 = $_POST["password_1"];

    if(!empty($password_1 )){
       echo'<h3> Mot de passe : '.$password_1;echo'</h3>';
       
    }//Verification du champ du mot de passes

    else{
        echo'<h3> Veullez Entrer un Mot de passe!</h3>';
        
    }//Verification du  champ de texte
    
    

}


$validationOfPassword = ValidationOfPassword($_POST['password_1']);
echo'</br>' .$validationOfPassword["message"];
//Validation de la longeur du mot de passe
if(!$validationOfPassword["isValid"]){

}
$saltedPassword = AddSaltToPassword($_POST['password_1']);
var_dump($saltedPassword);

?>
</br>
<a href="index.php">Retour</a>