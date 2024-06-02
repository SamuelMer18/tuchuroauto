<?php
    //leemos el archivo con los usuarios registrados
    $txttempdatos = file_get_contents('../assets/datos/infotemprecover.txt');
    $datostemp = unserialize($txttempdatos);
if (isset($_POST["enviarcodigo"])) {
    $codigo = $_POST['codigo'];
    if (isset($datostemp[0]['codigo']) && $datostemp[0]['codigo'] == $codigo) {
        foreach ($datostemp as $key => $value) {
            if ($value['codigo'] == $codigo) {
                header("Location: ../publico/recuperarcontrasena2.php");
                exit();
            }

        }
        echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">Usuario no encontrado</div>';
        exit();
    }
    if (isset($datostemp[0]['codigo']) && $datostemp[0]['codigo'] != $codigo) {
        echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">Codigo Incorrecto</div>';
    }
}
if (isset($_POST["cambiarcontra"])) {
    $nuevacontra = $_POST['contra'];
    $txtdatos = file_get_contents('../assets/datos/personaladm.txt');
    $datos = unserialize($txtdatos);
    foreach ($datos as $key => $value) {
        if ($value['correo'] == $datostemp[0]['correo']) {
            $datos[$key]['contra'] = $nuevacontra;
            $datostxt = serialize($datos);
            file_put_contents('../assets/datos/personaladm.txt', $datostxt);
            echo '<p></p><div class="alert alert-success" style="text-align: center;" role="alert">Contraseña cambiada exitosamente</div>';
            file_put_contents('../assets/datos/infotemprecover.txt','');
            exit();
        }
    }
}
?>