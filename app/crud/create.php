<?php

include_once('./../models/Database.php');

# Comprobando si se han enviado datos
if (isset($_POST['create-button'])) {

    # Creando las variables
    $name        = trim($_POST['name']);
    $description = trim($_POST['description']);
    $image       = $_FILES['image'];
    $price       = floatval(trim($_POST['price']));
    $status      = intval(trim($_POST['status']));

    # Creando la conexión
    $connection = Database::connect();

    # Abriendo el fichero
    $uploadImage = fopen($_FILES['image']['tmp_name'], 'r');

    # Leyendo el fichero
    $binarys     = fread($uploadImage,$_FILES['image']['size']);

    # Convirtiendo la imagen a binarios
    $binarys     = mysqli_escape_string($connection, $binarys);
    $typeImage   = $_FILES['image']['type'];

    # query
    $query = "INSERT INTO `cursos` (
        `nombre`,
        `descripcion`,
        `imagen`,
        `tipo`,
        `precio`,
        `status`
    ) VALUES (
        '$name',
        '$description',
        '$binarys',
        '$typeImage',
        $price,
        $status
    );";

    $result = mysqli_query($connection, $query);

    header('Location: ./../views/view-data.php');
} else {
    header('Location: ./../views/create-form.php');
}
