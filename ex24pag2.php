<?php
if (isset($_POST["contrasenya1"]) && isset($_POST["contrasenya2"])) {
    $sonIguals = false;
    if ($_POST["contrasenya1"] == $_POST["contrasenya2"]) {
        $sonIguals = true;
    }

    if($sonIguals == true) {
        $pass = $_POST["contrasenya1"];
        $longitud = strlen($pass);
        $cant = 0;
        for ($i = 0; $i < $longitud; $i++) {
            if (is_numeric($pass[$i])) {
                $cant += 1;
            } 
        }

        if ($cant == 0) {
            echo "ERROR: la contrasenya ha de tenir al menys un número";
        }

    } else {
        echo "ERROR: les contrasenyes han de coincidir";
    }
}
?>