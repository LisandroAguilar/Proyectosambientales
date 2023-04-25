<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Ingresar</title>
</head>
<body>
    <header>
        <div id="title">
            <img src="img/logo_Pet.jpg" alt="mi logo" id="logo">
            <h1>GUAUMIAU</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="informacion.html">Información</a></li>
                <li><a href="capacitacion.html">Capacitación</a></li>
                <li><a href="donaciones.html">Donaciones</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="#">Ingresar</a></li>
            </ul>
        </nav>
    </header>
    <h2>Inicio de sesión</h2>
	<form action="procesar_login.php" method="POST">
		<label for="email">Correo electrónico:</label>
		<input type="text" id="email" name="email" required>
        <br>
		<label for="password">Contraseña:</label>
		<input type="password" id="password" name="password" required>
        <br>
		<input type="submit" value="Iniciar sesión">
	</form>
	<p>Registrarse <a href="registro.php">Regístrate aquí</a></p>
</body>
</html>