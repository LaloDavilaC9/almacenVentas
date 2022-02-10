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

$id_instalador = $_POST['id_instalador'];
echo $id_instalador;
include("metodos.php");
checkboxUsuarios();




?>


<br>
<br>
<br>
<br>
<br>
<br>

<form action="productos.php">

<button>Regresar</button>
</form>


    
</body>
</html>