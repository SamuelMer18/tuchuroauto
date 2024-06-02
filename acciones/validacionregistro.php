<?php
//$codigotxt = serialize(1010);
//file_put_contents('../assets/datos/codigoseguridad.txt', $codigotxt);
ob_start();
echo '<button class="btn btn-primary" type="submit" name="reg" disabled="disabled">Registrarse</button>';
if (isset($_POST["ver"])) {
    $txtcodigo = file_get_contents('../assets/datos/codigoseguridad.txt');
    $txtcodigo = unserialize($txtcodigo);
    $codigo = $_POST['codigo'];
    if ($codigo == $txtcodigo) {
        ob_clean();
        echo '<button class="btn btn-primary" type="submit" name="reg" >Registrarse</button>';
        echo '<p></p><div class="alert alert-success" style="text-align: center;" role="alert">Codigo Correcto <br>Proceda con el registro</div>';
    } else {
        echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">Codigo Incorrecto</div>';
    }
}
if ((isset($_POST["reg"]))) {

    //Pasar txt a Array
    $txtdatos = file_get_contents('../assets/datos/personaladm.txt');
    $datos = unserialize($txtdatos);
    $correo = $_POST['correo'];
    $contrasena = $_POST['contra'];

    //Registrar Usuario
    if (!isset($_POST['log'])) {
        //Validar si existe algun usuario registrado
        if (isset($datos[0])) {
            //verificamos si existen el correo
            foreach ($datos as $key => $value) {
                if ($value['correo'] == $correo) {
                    echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">El correo ya se encuetra registrado</div>';
                    exit();
                }
            }
        }
        //si no existe usuarios registrados, se registra directamente
        //verificamos si la contraseña es mayor a 5 caracteres
        if (strlen($contrasena) >= 5) {
            $datos[] = array(
                'correo' => $correo,
                'contra' => $contrasena,
            );
            //guardar el array en un txt
            $datostxt = serialize($datos);
            file_put_contents('../assets/datos/personaladm.txt', $datostxt);
            echo '<p></p><div class="alert alert-success" style="text-align: center;" role="alert">
            Registro Exitoso <br>Puede Iniciar Sesión';
        } else {
            echo '<p></p><div class="alert alert-danger" role="alert">La contrasena debe ser mayor a 5 digitos</div>';
        }
    }
}
