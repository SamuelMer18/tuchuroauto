<?php
session_start();
if (isset($_POST["log"])) {

    //Pasar txt a Array
    $txtdatos = file_get_contents('../assets/datos/personaladm.txt');
    $datos = unserialize($txtdatos);
    $correo=$_POST['correo'];
    $contrasena=$_POST['contra'];
    $recordar=$_POST['recordar'];

    //Validar si Existe el correo para Iniciar Sesion y si existen usuarios registrados
    if (isset($datos[0])) {
        foreach ($datos as $key => $value) {
            if ($value['correo']==$correo && $value['contra']==$contrasena) {
                $_SESSION['miSesion']=array();
                $_SESSION['correo']=$correo;
                $_SESSION['contrasena']=$contrasena;
                //crear cookie para recordar sesion
                if ($recordar=="on") {
                    setcookie("correo",$correo,time()+104000);

                }
                header("Location: ../admin/indexadmin.php");
                exit();
            }
            if ($value['correo']==$correo && $value['contra']!=$contrasena) {
                echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">Contraseña Incorrecta</div>';
                exit();
            }
        }
        echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">Usuario no encontrado</div>';
        exit();
    }
    echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">Usuario no encontrado</div>';

  
}
?>
