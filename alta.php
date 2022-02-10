<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<?php
include("metodos.php");
menu();
?>

<br>
<div class="formulario" id="formulario">

    <form action="procesaUsuarios.php" method="POST">
        <b>Usuario</b>
        <input type="text" name="usuario" id="usuario"><br>
        <b>Estado</b>
        <input type="text" name="estado" id="estado"><br>
        <b>Calle</b>
        <input type="text" name="calle" id="calle"><br>
        <b>Numero</b>
        <input type="text" name="numero" id="numero"><br>
        <b>Colonia</b>
        <input type="text" name="colonia" id="colonia"><br>
        <input type="submit" id="button" value="Enviar">
    </form>


</div>







</body>
</html>