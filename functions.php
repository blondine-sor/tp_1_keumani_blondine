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
            "message" => " Le Mot de Passe est trop court "
        ];
        
        
    }
    elseif($passwordLength > 10){
        $validation = [
            "isValid" => false,
            "message" => "Le Mot de Passe est trop long"
        ];
    
    }
    return $validation;
    
}


?>

