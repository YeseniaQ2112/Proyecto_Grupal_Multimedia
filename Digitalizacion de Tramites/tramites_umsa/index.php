<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trámites UMSA</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<div class="container">

    <h1>Sistema de Inscripción de Materias</h1>

    <div class="menu">
        <a href="index.php">Nuevo Trámite</a>
        <a href="listar.php">Ver Trámites</a>
    </div>

    <form action="guardar.php" method="POST">

        <label>RU</label>
        <input type="text" name="ru" required>

        <label>Nombre Completo</label>
        <input type="text" name="nombre" required>

        <label>Materia</label>
        <select name="materia">

            <option>INF-111</option>
            <option>INF-112</option>
            <option>INF-121</option>
            <option>INF-131</option>

        </select>

        <button type="submit">
            Registrar Trámite
        </button>

    </form>

</div>

</body>
</html>