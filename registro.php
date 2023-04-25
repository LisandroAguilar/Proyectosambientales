<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Nuevo Usuario</title>
</head>
<body>
    <header>
        <div id="title">
            <img src="img/logo_Pet.jpg" alt="mi logo" id="logo">
            <h1>GUAUMIAU</h1>
        </div>
    </header>
    <form action="guardarUsuario.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="Nombre"> <br>
        <label >Correo:</label>
        <input type="text" name="Correo"><br>
        <label >Contraseña:</label>
        <input type="text" name="Clave"><br>
        <label >Telefono:</label>
        <input type="number" name="Telefono"><br>
        <label >Estado:</label>
        <input type="text" name="Estado"><br>
        <label >Municipio:</label>
        <input type="text" name="Municipio"><br>
        <label >Colonia:</label>
        <input type="text" name="Colonia"><br>
        <label >Codigo Postal:</label>
        <input type="number" name="CodigoPostal"><br>
        <input type="submit" value="Quiero registrarme">
    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Municipio</th>
                <th>Colonia</th>
                <th>C.P.</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once 'Models/usuario.php';
                $producto=new Usuario();
                $resultado=$producto->ObtenerUsuario();
                if(count($resultado)>0){
                    foreach ($resultado as $registro) {
                        echo '<tr>';
                        echo '<td>'.$registro['Id'].'</td>';
                        echo '<td>'.$registro['Nombre'].'</td>';
                        echo '<td>'.$registro['Correo'].'</td>';
                        echo '<td>'.$registro['Clave'].'</td>';
                        echo '<td>'.$registro['Estado'].'</td>';
                        echo '<td>'.$registro['Municipio'].'</td>';
                        echo '<td>'.$registro['Colonia'].'</td>';
                        echo '<td>'.$registro['CodigoPostal'].'</td>';
                        echo '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>
   
</body>
</html>