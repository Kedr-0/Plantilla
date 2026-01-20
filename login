<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

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

        .login-container {
            background-color: #1e1e1e;
            padding: 35px 40px;
            border-radius: 12px;
            width: 100%;
            max-width: 380px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.6);
        }

        .login-container h1 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 1.8rem;
            letter-spacing: 1px;
        }

        label {
            font-size: 0.9rem;
            color: #cccccc;
        }

        input[type="text"],
        input[type="password"],
	input[type="token"] {
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

        input::placeholder {
            color: #888888;
        }

        input:focus {
            outline: none;
            background-color: #333333;
            box-shadow: 0 0 0 2px #4da3ff55;
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

        input[type="submit"]:active {
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <div class="login-container">
        <h1>Iniciar Sesión</h1>

        <form action="auth_login.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" id="user" name="user" required>

            <label for="pass">Contraseña</label>
            <input type="password" id="pass" name="pass" required>
	    
	    <label for="token">Token</label>
	    <input type="token" id="token" name="token" required>
            <input type="submit" value="Entrar">
        </form>
    </div>

</body>
</html>

