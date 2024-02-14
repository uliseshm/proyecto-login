<?php
//traer las variables del formulario
$usr = $_POST['user'];
$psswrd = $_POST['password'];
$btn = $_POST['btn'];

//validación de datos ingresados
if (isset($btn)) {

    if (empty($usr) && empty($psswrd)) {
        echo '<div class="message">Los campos estan vacios.</div>';
    } else {
        //ejem: $usr == "admin@ejemplo.com" && $psswrd =="admin"
        if ($usr == "USER_DATABASE" && $psswrd == "USER_PASS_DATABASE") {
            header("Location: ./home.php");
        } else {
            echo '<div class="message">Usuario o Contraseña incorrecta</div>';
        }

    }

}

?>