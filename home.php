<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de Persona</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

<div class="container">
    <h1>Búsqueda de Persona</h1>

    
    <input type="radio" name="tipo" id="optDni" checked>
    <input type="radio" name="tipo" id="optNombre">

    
    <div class="buttons">
        <label for="optDni">Buscar por DNI</label>
        <label for="optNombre">Buscar por Nombres</label>
    </div>

    <form action="buscar.php" method="POST">

        <div id="dniBox" class="box">
            <label for="dni">Número de DNI</label>
            <input type="text" id="dni" name="dni" placeholder="Ej: 12345678">
        </div>
        
        <div id="nameBox" class="box">
            <label for="nombre1">Primer Nombre</label>
            <input type="text" id="nombre1" name="nombre1">

            <label for="nombre2">Segundo Nombre</label>
            <input type="text" id="nombre2" name="nombre2">

            <label for="apellidoP">Apellido Paterno</label>
            <input type="text" id="apellidoP" name="apellidoP">

            <label for="apellidoM">Apellido Materno</label>
            <input type="text" id="apellidoM" name="apellidoM">
        </div>

        <input type="submit" value="Buscar">

    </form>

    <div class="result-box">
        
        <h2>Resultado</h2>

        <div class="result-content">
        
            <p class="placeholder">Los resultados aparecerán aquí</p>
        </div>
    </div>

</div>


</body>
</html>
