<?php
if (isset($_POST["contrasenya1"]) && isset($_POST["contrasenya2"])) {
    $sonIguals = false;
    if ($_POST["contrasenya1"] != $_POST["contrasenya2"]) {
        echo "ERROR: les contrasenyes han de coincidir";
        $sonIguals = true;
    }

    if($sonIguals == true) {

    }
}
?>