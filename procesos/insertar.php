<?php session_start();

    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new Crud();

    $datos = array(
        "plato" => $_POST['plato'],
        "ingredientes" => $_POST['ingredientes'],
        "categoria" => $_POST['categoria'],
        "precio" => $_POST['precio']
    );

    $respuesta = $Crud->insertarDatos($datos);

    if ($respuesta->getInsertedId() > 0) {
        $_SESSION['mensaje_crud'] = 'insert';
        header("location:../index.php"); 
    } else {
        print_r($respuesta);
    }
?>