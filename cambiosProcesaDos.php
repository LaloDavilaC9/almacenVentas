<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require('metodos.php');
        $newUsuario = $_POST['usuarioM'];
        $newEstado = $_POST['estadoM'];
        $newCalle = $_POST['calleM'];
        $newNumero = $_POST['numeroM'];
        $newColonia = $_POST['coloniaM'];
        $id_instalador = $_POST['idM'];

        Modificar($id_instalador,$newUsuario,$newEstado,$newCalle,$newNumero,$newColonia);
    ?>
    <form action="index.php">
    <button>Regresar</button>
    </form>
</body>
</html>