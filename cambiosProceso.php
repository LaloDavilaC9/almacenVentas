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
menu();
?>

<br>
<div class="formulario" id="formulario">

    <form action="cambiosProcesaDos.php" method="POST">
        <b>Usuario</b>
        <input type="text" name="usuarioM" id="usuarioM"><br>
        <b>Estado</b>
        <input type="text" name="estadoM" id="estadoM"><br>
        <b>Calle</b>
        <input type="text" name="calleM" id="calleM"><br>
        <b>Numero</b>
        <input type="text" name="numeroM" id="numeroM"><br>
        <b>Colonia</b>
        <input type="text" name="coloniaM" id="coloniaM"><br>
        <?php echo 
        "<input type='hidden' name='idM' value='$id_instalador'>";
        ?>
        <input type="submit" id="button" value="Enviar">
    </form>


</div>
<!-- <?php
// Modificar($id_instalador);

?> -->

<form action="index.php">

<button>Regresar</button>
</form>


    
</body>
</html>