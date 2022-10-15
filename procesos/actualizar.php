<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();

    $id = $_POST['id'];
    $datos = array(
        "plato" => $_POST['plato'],
        "ingredientes" => $_POST['ingredientes'],
        "categoria" => $_POST['categoria'],
        "precio" => $_POST['precio']
    );

    $respuesta = $Crud->actualizar($id, $datos);

    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'update';
        header("location:../index.php");
    } else {
        print_r($respuesta);
    }

?>