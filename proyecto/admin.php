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
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
    
    include("conexion.php");
    $sql="SELECT * FROM ayuda";
    $result=mysqli_query($conexion,$sql);
?>

    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CORREO</th>
                <th>ASUNTO</th>
                <th>TIPO</th>
                <th>MENSAJE</th>
            </tr>
        </thead>
        <tbody>
            <a href="agregar_alumno.php">Agregar Alumno</a><br>
            <a href="agregar_profesor.php">Agregar Profesor</a>
            <?php
                while($rows=mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td> <?php  echo $rows['id']        ?> </td>
                <td> <?php  echo $rows['nombre']    ?> </td>
                <td> <?php  echo $rows['correo']    ?></td>
                <td> <?php  echo $rows['asunto']    ?></td>
                <td> <?php  echo $rows['tipo']    ?></td>
                <td> <?php  echo $rows['mensaje']    ?></td>
                <td>
                    <?php   echo "<a href='eliminar_profesor.php?id=".$rows['id']."' onclick='return confirmar()'>ELIMIAR </a>"; ?>
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