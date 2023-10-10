<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
<form name="form2" method="post" action="final_Results.php">
        <fieldset>
            <legend><h2>Formulaire</h2></legend>
    <input type="password" id="motdepasse" name="password" value="<?php echo $password_1?>">
    <label for="password2">Confirmation of Password</label>
    <input type ="password" id="motDePasse_2" name="password_2" value="">

</br>
    <button type="submit">Valider</button>

        </fieldset>
    </form>
</body>
</html>