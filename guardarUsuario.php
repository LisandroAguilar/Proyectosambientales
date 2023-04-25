<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar Usuario</title>
</head>
<body>
    <header>
        <div id="title">
            <img src="img/logo_Pet.jpg" alt="mi logo" id="logo">
            <h1>GUAUMIAU</h1>
        </div>
    </header>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $Nombre = $_POST['Nombre'];
        $Correo = $_POST['Correo'];
        $Clave = $_POST['Clave'];
        $Telefono = $_POST['Telefono'];
        $Estado = $_POST['Estado'];
        $Municipio = $_POST['Municipio'];
        $Colonia = $_POST['Colonia'];
        $CodigoPostal = $_POST['CodigoPostal'];

        if (!empty($Nombre) && !empty($Correo) && !empty($Clave) && !empty($Telefono) && !empty($Estado) && !empty($Municipio) && !empty($Colonia) && !empty($CodigoPostal)) {
            require_once 'Models/usuario.php';
            $Usuario = new Usuario();
            $resultado = $Usuario->CrearUsuario($Nombre, $Correo, $Clave, $Telefono, $Estado, $Municipio, $Colonia, $CodigoPostal);
            if ($resultado) {
                echo '<p>El usuario se ha guardado correctamente.</p>';
            } else {
                echo '<p>Ha ocurrido un error al guardar el usuario.</p>';
            }
        } else {
            echo '<p>Debes rellenar todos los campos del formulario.</p>';
        }
    }
    ?>
    
    <a href="index.html">Volver al inicio</a>sdererbbeebebr
</body>
</html>
