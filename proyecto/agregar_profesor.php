<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>

    <script>
        var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    
    </script>

</head>
<body>
    <h1>AGREGAR PROFESOR</h1>
    <?php
        if(isset($_POST['enviar'])){
            $nombre=$_POST['nombre'];
            $boleta=$_POST['boleta'];
            $correo=$_POST['correo'];
            $pass=$_POST['password'];

            include("conexion.php");
            $sql="INSERT INTO profesores(nombre,boleta,correo,pass,tipo) VALUES('$nombre','$boleta','$correo','$pass',1)";

            $resp=mysqli_query($conexion,$sql);

            if($resp){
                echo "  <script language='JavaScript'>
                            alert('Se inserto correctamente');
                            location.href='principal.php';
                        </script>
                ";
            }else{
                echo "  <script language='JavaScript'>
                            alert('No se inserto correctamente');
                            location.href='';
                        </script>";
            }

            mysqli_close($conexion);
        }else{
    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <label for="">Boleta</label>
        <input type="text" name="boleta" id="boleta" required>
        <br><br>
        <label for="">Correo</label>
        <input type="text" name="correo" id="correo" required>
        <br><br>
        <label for="">Contraseña</label>
        <input type="text" name="password" id="password" required>
        <br><br>
        <label for="">Confirmar Contraseña</label>
        <input type="text" name="confirm_password." id="confirm_password." required>
        <br><br>

        <input type="submit" name="enviar" value="AGREGAR">
        <a href="admin.php">Regresar</a>
    </form>

    <?php
        }
    ?>
</body>
</html>