<?php

function ValidationOfPassword($passwordToValidate){

    $passwordLength = strlen($passwordToValidate);
    $validation =[
        "isValid" => true,
        "message" => ''
    ];
    
    if($passwordLength < 6){
        $validation =[
            "isValid" => false,
            "message" => " Votre Mot de Passe est trop court "
        ];
        
        
    }
    elseif($passwordLength > 10){
        $validation = [
            "isValid" => false,
            "message" => "Votre Mot de Passe est trop long"
        ];
    
    }
    return $validation;
    
}
// fonction de validation de la longeur du mot de passe

function AddSaltToPassword($passwordToSalt){
    $saltToAdd = "BcjC2a34d@#";
    $saltedPassword = $saltToAdd.$passwordToSalt.$saltToAdd;
    return $saltedPassword;
}
//ajout du <<Salt>> au mot de passe

function EncryptedPassword($saltedPassword){
    $encryptedPassword = sha1($saltedPassword);
    return $encryptedPassword;
}
//encodage du nouveau mot de passe


?>

