<?php

$ru = $_POST["ru"];
$nombre = $_POST["nombre"];
$materia = $_POST["materia"];

$registro = [

    "ru" => $ru,
    "nombre" => $nombre,
    "materia" => $materia,
    "fecha" => date("Y-m-d H:i:s")

];

$id = uniqid("tramite_");

$archivo = __DIR__ . "/json/" . $id . ".json";

file_put_contents(
    $archivo,
    json_encode(
        $registro,
        JSON_PRETTY_PRINT
    )
);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Guardado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="container">

    <h2>Trámite registrado correctamente</h2>

    <a href="index.php">Registrar otro trámite</a>

</div>

</body>
</html>