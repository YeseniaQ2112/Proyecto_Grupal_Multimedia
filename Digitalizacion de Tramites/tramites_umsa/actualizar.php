<?php

$archivo = "json/" . $_POST["archivo"];

$nuevoRegistro = [

    "ru" => $_POST["ru"],
    "nombre" => $_POST["nombre"],
    "materia" => $_POST["materia"],
    "fecha" => date("Y-m-d H:i:s")

];

file_put_contents(
    $archivo,
    json_encode(
        $nuevoRegistro,
        JSON_PRETTY_PRINT
    )
);

header("Location: listar.php");
exit;