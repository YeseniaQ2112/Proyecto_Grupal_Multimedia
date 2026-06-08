<?php

$archivos = glob("json/*.json");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Trámites</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="container">

    <h1>Trámites Registrados</h1>

    <div class="menu">
        <a href="index.php">Nuevo Trámite</a>
    </div>

    <table>

        <tr>
            <th>RU</th>
            <th>Nombre</th>
            <th>Materia</th>
            <th>Fecha</th>
            <th>Editar</th>
        </tr>

        <?php

        foreach($archivos as $archivo)
        {
            $datos = json_decode(
                file_get_contents($archivo),
                true
            );

            echo "<tr>";

            echo "<td>".$datos["ru"]."</td>";
            echo "<td>".$datos["nombre"]."</td>";
            echo "<td>".$datos["materia"]."</td>";
            echo "<td>".$datos["fecha"]."</td>";

            echo "<td>
                    <a href='editar.php?archivo=".basename($archivo)."'>
                        Editar
                    </a>
                  </td>";

            echo "</tr>";
        }

        ?>

    </table>

</div>

</body>
</html>