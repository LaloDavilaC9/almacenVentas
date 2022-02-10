<?php


function conectar(){
    //Parametros de conexion.
    $servername = 'localhost';
    $database = 'vendedor';
    $username = "root";
    $password = "";

    //Crear la conexion.
    $conn = mysqli_connect($servername, $username, $password, $database);
    //Revisar si se realizo la conexion.
    if(!$conn) {
        die("ERROR: La conexion no se realizó correctamente." . mysqli_connect_error());
    }
    $cbd = mysqli_select_db($conn, $database);
    if(!$cbd) {
        die("ERROR DE CONEXION CON LA BASE DE DATOS");
    }
    return($conn);
}



function menu(){
    echo"<h1>TITULO DEL SISTEMA</h1><BR><BR><div id='menu'>

        <lu><a href='alta.php' class=''>alta</a></lu>
        <lu><a href='cambios.php' class=''>cambios</a></lu>
        <lu><a href='bajas.php' class=''>bajas</a></lu>
        <lu><a href='visualizar.php' class=''>visualizar</a></lu>
        <lu><a href='index.php' class=''>Usuarios</a></lu>
        <lu><a href='productos.php' class=''>Productos</a></lu>
    
    </div>";
}

function agregarUsuarios($usuario, $estado, $calle, $numero, $colonia){
$conn = conectar();
if (!$conn) {
   echo "Error en la conexion";
}else{
$sql = "INSERT INTO instaladores (usuario, estado, calle, numero, colonia) VALUES ('$usuario', '$estado', '$calle', '$numero', '$colonia')";
$conn->query($sql);
}
mysqli_close($conn);

}

function verUsuarios($usuario, $estado, $calle, $numero, $colonia){
    $conn = conectar();
    if (!$conn) {
       echo "Error en la conexion";
    }else{
    $sql = "UPDATE INTO instaladores (usuario, estado, calle, numero, colonia) VALUES ('$usuario', '$estado', '$calle', '$numero', '$colonia')";
    $conn->query($sql);
    }
    mysqli_close($conn);
    
    }

    function mostrar(){
        $conexion = conectar();
        if (!$conexion) {
            echo "Error";
            return;
        }
        $sql = "SELECT * FROM instaladores";
        $result = $conexion->query($sql);
        if ($result->num_rows>0) {
            //si hay            

            echo "<table border=2>
            <th>
             <b>ID</b>
             <td>
             <b>Nombre</b>
             </td>
             <td>
             <b >Estado</b>
             </td>
             <td>
             <b>Calle</b>
             </td>
             <td>
             <b>Numero</b>
             </td>
             <td>
             <b >Colonia</b>
             </td>
            </th>";

            while ($row=$result->fetch_assoc()) {
                $id_instalador=$row['id_instalador'];
                $usuario=$row['usuario'];
                $estado=$row['estado'];
                $calle=$row['calle'];
                $numero=$row['numero'];
                $colonia=$row['colonia'];

               echo  "
                <tr>
                <td>
                    <i  class='id_instalador'>".$id_instalador."</i>
                </td>
                <td>
                    <i  class='usuario'>".$usuario."</i>
                </td>
                <td>
                    <b  class='estado' >".$estado."</b>
                </td>
                <td>
                    <b  class='calle' >".$calle."</b>
                </td>
                <td>
                    <i  class='numero'>".$numero."</i>
                </td>
                <td>
                    <i  class='colonia'>".$colonia."</i>
                </td>
             </tr>";
            }
            echo"</table>";
        }
         mysqli_close($conexion);
    }




    function mostrarProductos(){
        $conexion = conectar();
        if (!$conexion) {
            echo "Error";
            return;
        }
        $sql = "SELECT * FROM instaladores";
        $result = $conexion->query($sql);
        if ($result->num_rows>0) {
            //si hay            

            echo "<table border=2>
            <th>
             <b>ID</b>
             <td>
             <b>Nombre</b>
             </td>
             <td>
             <b >Estado</b>
             </td>
             <td>
             <b>Calle</b>
             </td>
             <td>
             <b>Numero</b>
             </td>
             <td>
             <b >Colonia</b>
             </td>
            </th>";

            while ($row=$result->fetch_assoc()) {
                $id_instalador=$row['id_instalador'];
                $usuario=$row['usuario'];
                $estado=$row['estado'];
                $calle=$row['calle'];
                $numero=$row['numero'];
                $colonia=$row['colonia'];

               echo  "
                <tr>
                <td>
                    <i  class='id_instalador'>".$id_instalador."</i>
                </td>
                <td>
                    <i  class='usuario'>".$usuario."</i>
                </td>
                <td>
                    <b  class='estado' >".$estado."</b>
                </td>
                <td>
                    <b  class='calle' >".$calle."</b>
                </td>
                <td>
                    <i  class='numero'>".$numero."</i>
                </td>
                <td>
                    <i  class='colonia'>".$colonia."</i>
                </td>
                <form action='productosProcesa.php' method='POST'><td>
                <input type='hidden' name='id_instalador' value='".$id_instalador."'>
                <input type='submit' value='AgregarProducto'>
                </form>
                </td>
             </tr>";
            }
            echo"</table>";
        }
         mysqli_close($conexion);
    }

    function borrar($id_instalador){
        $conn = conectar();
        if(!$conn) {
            echo "Error";
            return;
        }
        $conn->query("DELETE FROM instaladores WHERE id_instalador = '$id_instalador'");
        mysqli_close($conn);   
    }

   
  function Modificar($id_instalador,$newUsuario,$newEstado,$newCalle,$newNumero,$newColonia){
        $conn = conectar();
        if(!$conn) {
            echo "Error";
            return;
        }
        $query = "UPDATE instaladores SET usuario = '$newUsuario', estado = '$newEstado',calle = '$newCalle',numero = '$newNumero',colonia = '$newColonia' WHERE id_instalador = '$id_instalador'";

       $conn->query($query);
        mysqli_close($conn);   

    }
     
   


    function mostrarBorrar(){
        $conexion = conectar();
        if (!$conexion) {
            echo "Error";
            return;
        }
        $sql = "SELECT * FROM instaladores";
        $result = $conexion->query($sql);
        if ($result->num_rows>0) {
            //si hay

            echo "
            <table border=2>
            <th>
            
             
             <b>ID</b>
             
             <td>
             <b>Nombre</b>
             </td>
             <td>
             <b >Estado</b>
             </td>
             <td>
             <b>Calle</b>
             </td>
             <td>
             <b>Numero</b>
             </td>
             <td>
             <b >Colonia</b>
             </td>
            
            </th>";
           

            while ($row=$result->fetch_assoc()) {
                
                $id_instalador=$row['id_instalador'];
                $usuario=$row['usuario'];
                $estado=$row['estado'];
                $calle=$row['calle'];
                $numero=$row['numero'];
                $colonia=$row['colonia'];

               echo  "
            <tr>
                
                <td>
                <i>".$id_instalador."</i>
                </td>
                <td>
                    <i  class='usuario'>".$usuario."</i>
                </td>
                <td>
                    <b  class='estado' >".$estado."</b>
                </td>
                <td>
                    <b  class='calle' >".$calle."</b>
                </td>
                <td>
                    <i  class='numero'>".$numero."</i>
                </td>
                <td>
                    <i  class='colonia'>".$colonia."</i>
                </td>
                <td>
               
                </td>
                <form action='bajasProceso.php' method='POST'><td>
                <input type='hidden' name='id_instalador' value='".$id_instalador."'>
                <input type='submit' value='Eliminar'>
                </form>
                </td>

                
             </tr>
             ";
            }
            echo"</table>";
        }
         mysqli_close($conexion);        
    }

    function mostrarModificar(){
        $conexion = conectar();
        if (!$conexion) {
            echo "Error";
            return;
        }
        $sql = "SELECT * FROM instaladores";
        $result = $conexion->query($sql);
        if ($result->num_rows>0) {
            //si hay

            echo "
            <table border=2>
            <th>
            
             
             <b>ID</b>
             
             <td>
             <b>Nombre</b>
             </td>
             <td>
             <b >Estado</b>
             </td>
             <td>
             <b>Calle</b>
             </td>
             <td>
             <b>Numero</b>
             </td>
             <td>
             <b >Colonia</b>
             </td>
            
            </th>";
           

            while ($row=$result->fetch_assoc()) {
                
                $id_instalador=$row['id_instalador'];
                $usuario=$row['usuario'];
                $estado=$row['estado'];
                $calle=$row['calle'];
                $numero=$row['numero'];
                $colonia=$row['colonia'];

               echo  "
            <tr>
                
                <td>
                <i>".$id_instalador."</i>
                </td>
                <td>
                    <i  class='usuario'>".$usuario."</i>
                </td>
                <td>
                    <b  class='estado' >".$estado."</b>
                </td>
                <td>
                    <b  class='calle' >".$calle."</b>
                </td>
                <td>
                    <i  class='numero'>".$numero."</i>
                </td>
                <td>
                    <i  class='colonia'>".$colonia."</i>
                </td>
                <form action='cambiosProceso.php' method='POST'><td>
                <input type='hidden' name='id_instalador' value='".$id_instalador."'>
                <input type='submit' value='Modificar'>
                </form>
                </td>

                
             </tr>
             ";
            }
            echo"</table>";
        }
         mysqli_close($conexion);        
    }

    function selectionUsuarios(){
        $conexionDos = conectar();
        if (!$conexionDos) {
            echo "Error";
            return;
        }
        $conexion = conectar();
        if (!$conexion) {
            echo "Error";
            return;
        }
        $sql = "SELECT * FROM instaladores";
        $sqlDos = "SELECT * FROM producto";
        $resultDos = $conexionDos->query($sqlDos);
        $result = $conexion->query($sql);
        if ($result->num_rows>0 && $resultDos->num_rows>0) {
            //si hay

            echo "
            <table border=3>
            <th>
            
             
             <b>Nombre del Usuario</b>
             
             <td>
             <b>Producto</b>
             </td>
             <td>
             <b >Cantidad</b>
             </td>
             <td>
             <b>Checkbox</b>
             </td>
           
            
            </th>";
           

            while ($row=$result->fetch_assoc()) {
                
                $usuario=$row['usuario'];
                

               echo  "
            <tr>
                <td>
                    <i  class='usuario'>".$usuario."</i>
                </td>
             </tr>
             ";
            }
            while ($row=$resultDos->fetch_assoc()) {
                
                $id_producto=$row['id_producto'];
                

               echo  "
            
                <td>
                    <i  class='producto'>".$id_producto."</i>
                </td>
             
             
                <td>
                    <i  class='cantidad'>Cantidad</i>
                </td>
             
             
                <td>
                <form action='procesoFinal.php' method='POST'><td>
                <input type='hidden' name='id_instalador' value='".$id_producto."'>
                <input type='checkbox' name='checkItem'>
                </form>
                </td>
             
             ";
            }
            echo"</table>";
        }
         mysqli_close($conexion);        
    }
   /*  <form action='procesoFinal.php' method='POST'><td>
    <input type='hidden' name='id_instalador' value='".$id_instalador."'>
    <input type='checkbox' name='checkItem'>
    </form> */


    




?>


<!-- <td>
                    <a href='juego.php?id=$id_instalador&nombre=$nombre'  class='nombreJuego' >".$nombre."</a>
                </td> -->

                