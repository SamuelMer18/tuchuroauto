<?php
if (isset($_POST['regauto']) ) {
     //Pasar txt a Array
     $txtdatos = file_get_contents('../assets/datos/autos.txt');
     $datos = unserialize($txtdatos);

    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $marca = $_POST['marca'];
    $estado = $_POST['estado'];
    $descripcion = $_POST['descripcion'];
    $datos[]=array(
        'correo'=>$correo,
        'contra'=>$contrasena,
    );
    if (isset($datos[0])) {
        $modelo=$_POST['modelo'];
        //verificamos si existen algun auto registrado
        foreach ($datos as $key => $value) {
            if ($value['modelo']==$modelo) {
                echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">El auto ya se encuetra registrado</div>';
                exit();
            }
            
        }
    }
    foreach ($datos as $key => $value) {
        if ($value['correo']==$correo) {
            echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">El correo ya se encuetra registrado</div>';
            exit();
        }
    }
    //guardar el array en un txt
    $datostxt = serialize($datos);
    file_put_contents('../assets/datos/autos.txt', $datostxt);
//guardar imagenes en directorio

}
?>