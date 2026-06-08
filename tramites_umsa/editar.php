<?php

$archivo = "json/" . $_GET["archivo"];

$datos = json_decode(
    file_get_contents($archivo),
    true
);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Trámite</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="container">

    <h1>Editar Trámite</h1>

    <form action="actualizar.php" method="POST">

        <input
            type="hidden"
            name="archivo"
            value="<?php echo $_GET["archivo"]; ?>"
        >

        <label>RU</label>

        <input
            type="text"
            name="ru"
            value="<?php echo $datos["ru"]; ?>"
            required
        >

        <label>Nombre</label>

        <input
            type="text"
            name="nombre"
            value="<?php echo $datos["nombre"]; ?>"
            required
        >

        <label>Materia</label>

        <select name="materia">

            <option>INF-111</option>
            <option>INF-112</option>
            <option>INF-121</option>
            <option>INF-131</option>

        </select>

        <button type="submit">
            Actualizar
        </button>

    </form>

</div>

</body>
</html>