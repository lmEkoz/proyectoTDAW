<!DOCTYPE html>
<?php
    include("conexion.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            //si el boton enviar fue presionado
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $boleta=$_POST['boleta'];
            $correo=$_POST['correo'];
            $pass=$_POST['password'];

            //update alumnos set nombre=$nombre, boleta=$boleta, correo=$correo, pass=$pass where id=$id
            $sql="UPDATE alumnos SET nombre='".$nombre."', boleta='".$boleta."',correo='".$correo."', pass='".$pass."' WHERE id='".$id."'";
            $resp=mysqli_query($conexion,$sql);

            if($resp){
                echo "  <script language='JavaScript'>
                            alert('Se actualizo correctamente');
                            location.href='index.php';
                        </script>
                ";
            }else{
                echo "  <script language='JavaScript'>
                            alert('No se actualizo correctamente');
                            location.href='index.php';
                        </script>";
            }

        }else {
            //si el boton enviar no fue presionado
            $id=$_GET['id'];
            $sql="SELECT * FROM alumnos WHERE id='".$id."'";
            $resp=mysqli_query($conexion,$sql);

            $row=mysqli_fetch_assoc($resp);
            $nombre=$row['nombre'];
            $boleta=$row['boleta'];
            $correo=$row['correo'];

            mysqli_close($conexion);
    ?>

    <h1>EDITAR ALUMNO</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre; ?>" required> <br>
        <label>Boleta:</label>
        <input type="text" name="boleta" value="<?php echo $boleta; ?>" required> <br>
        <label>Correo:</label>
        <input type="text" name="correo" value="<?php echo $correo; ?>" required> <br>
        <label>Contraseña:</label>
        <input type="password" name="password" id="password" required> <br>
        <label>Confirmar Contraseña:</label>
        <input type="password" name="confirm_password" id="confirm_password" required> <br>
        <script>
            var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

            function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Las contraseñas no coinciden");
            } else {
                confirm_password.setCustomValidity('');
            }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <input type="submit" name="enviar" value="ACTUALIZAR">
        <a href="index.php">Regresar</a>
    </form>
    <?php
        }
    ?>
</body>
</html>