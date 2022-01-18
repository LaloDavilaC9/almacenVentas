
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Registro cargado con exito</h1>
<form action="alta.php" method="POST">

<input type="button" value="Dar de alta otro usuario">
<button>Regresar</button>
</form>


<?php

    $usuario = $_POST['usuario'];
    $estado = $_POST['estado'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $colonia = $_POST['colonia'];



include("metodos.php");
agregarUsuarios($usuario, $estado, $calle, $numero, $colonia);
mostrar();

?>


    
</body>
</html>