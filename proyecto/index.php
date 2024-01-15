<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <script>
        function confirmar(){
            return confirm('Estas seguro?, se eliminara el registro');
        }
    </script>
</head>
<body>

<?php
    
    include("conexion.php");
    $sql="SELECT * FROM alumnos";
    $result=mysqli_query($conexion,$sql);
?>

    <a href="agregar_alumno.php">Registrar Alumno</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>BOLETA</th>
                <th>CORREO</th>
                <th>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($rows=mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td> <?php  echo $rows['id']        ?> </td>
                <td> <?php  echo $rows['nombre']    ?> </td>
                <td> <?php  echo $rows['boleta']    ?></td>
                <td> <?php  echo $rows['correo']    ?></td>
                <td>
                    <?php   echo "<a href='editar.php?id=".$rows['id']."'>EDITAR</a>"; ?>
                    -
                    <?php   echo "<a href='eliminar.php?id=".$rows['id']."' onclick='return confirmar()'>ELIMIAR </a>"; ?>
                </td>
            </tr>
        </tbody>
        <?php
            }
        ?>
    </table>
    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>