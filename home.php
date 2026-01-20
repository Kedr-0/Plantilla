<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Búsqueda de Persona</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #ffffff;
        }

        .container {
            background-color: #1e1e1e;
            padding: 35px 40px;
            border-radius: 12px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.7rem;
            letter-spacing: 1px;
        }

        /* Radios ocultos */
        input[type="radio"] {
            display: none;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
        }

        .buttons label {
            flex: 1;
            padding: 10px;
            text-align: center;
            background-color: #2b2b2b;
            border-radius: 6px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }

        #optDni:checked ~ .buttons label[for="optDni"],
        #optNombre:checked ~ .buttons label[for="optNombre"] {
            background-color: #4da3ff;
            color: #000000;
            font-weight: bold;
        }

        label {
            font-size: 0.85rem;
            color: #cccccc;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            margin-bottom: 18px;
            border: none;
            border-radius: 6px;
            background-color: #2b2b2b;
            color: #ffffff;
            font-size: 1rem;
        }

        input:focus {
            outline: none;
            background-color: #333333;
            box-shadow: 0 0 0 2px #4da3ff55;
        }

        .box {
            display: none;
        }

        #optDni:checked ~ form #dniBox {
            display: block;
        }

        #optNombre:checked ~ form #nameBox {
            display: block;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #4da3ff;
            color: #000000;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #3b8ad9;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Búsqueda de Persona</h1>

    <!-- Radios -->
    <input type="radio" name="tipo" id="optDni" checked>
    <input type="radio" name="tipo" id="optNombre">

    <!-- Botones -->
    <div class="buttons">
        <label for="optDni">Buscar por DNI</label>
        <label for="optNombre">Buscar por Nombres</label>
    </div>

    <form action="buscar.php" method="POST">

        <!-- DNI -->
        <div id="dniBox" class="box">
            <label for="dni">Número de DNI</label>
            <input type="text" id="dni" name="dni" placeholder="Ej: 12345678">
        </div>

        <!-- Nombres -->
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
</div>

</body>
</html>
