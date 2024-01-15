<!DOCTYPE html>
<html lang="es">
<head>
	<!--Principio de meta-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="author" content="Veruete Hernandez Bryan David"/>
		<meta name="author" content="Alcantara Sanchez Francisco"/>
		<meta name="author" content="Castro Macías Julio César"/>
		<meta name="keywords" content="html, css, maquetado"/>
		<meta name="copyright" content="VHBD"/>
		<meta name="description" content="ejercicios de maquetado"/>
		<meta name="viewport" content="width=divice-width, initial-scale=1.0">
	<!--Fin de meta-->
</head>
<!--Inicio de CSS-->
<style>
	.logo{
		height: 80px;
		width: 20%;
		border-radius: 1em;
		background-color: #000000;
		color: #FFFFFF;
		text-align:center;
		font-size: 30px;
	}
	.curso{
		height: 80px;
		margin-top:-80px;
		margin-left: 20%;
		border-radius: 1em;
		background-color: #0000FF;
		color: #FFFFFF;
		text-align:center;
		font-size: 50px;
	}
	.Botones{
		height: 100px;
		width: 100%;
		border-radius: 1em;
		background-color: #000000;
		color: #FFFFFF;
		text-align: center;
	}
	.Botones button{
		height: 40px;
		width: 15%;
		margin-top: 25px;
		border-radius: 1em;
		background-color: #FFFFFF;
		color: #000000;
		text-align: center;
		font-size: 20px;
	}
	.container{
		height: 80%;
		width: 100%;
		border-radius: 1em;
		background-color: #FFFFFF;
	}
	.top{
		height: 100px;
		width: 100%;
		border-radius: 1em;
		color: #FFFFFF;
		text-align: center;
	}
	.content {
		display: block;
		height: 100%;
		width: 100%;
		border-radius: 1em;
	
	}
	.Principal{
		position: absolute;
		height: 100%;
		width: 74%;
		border-radius: 1em;
		text-align: center;
		background-color: #A4A4A4;
	}
	.Inicio{
		position: absolute;
		height: 100%;
		width: 25%;
		margin-left: 74%;
		border-radius: 1em;
		text-align: center;
		background-color: #04d9ff;
		font-size: 30px;
	}
	.Inicio h1{
		font-size: 36px;
		text-align: center;
	}
	.input-box input{
		width: 100%;
		height: 30%;
		background: transparent;
		border: none;
		outline: none;
		border: 2px solid rgba(255,255,255);
		border-radius: 40px;
		font-size: 16px;
		color: black;
	}
	.input-box input::placeholder{
		color: black;
	}
	.input-box i{
		position: absolute;
		right: 20px;
		top: 50%;
		transform: translateY(-50%);
		font-size: 20px;
	}
	.input-box #user{
		position: relative;
		width: 100%;
		height: 50px;
		margin: 30px 0;
	}
	.input-box #pass{
		position: relative;
		width: 60%;
		height: 50px;
		margin: 30px 0;
	}
	.input-box #type{
		width: 30%;
		height: 50px;
		margin: 30px 0;
	}
	.Inicio .btn{
		width: 100%;
		height: 45px;
		background: #00;
		border: none;
		outline: none;
		border-radius: 40px;
		box-shadow: 0 0 10px rgba(0, 0, 0, .1);
		cursor: pointer;
		font-size: 16px;
		color:black;
		font-weight:400;
	}

	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		/* display: none; <- Crashes Chrome on hover */
		-webkit-appearance: none;
		margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
	}

	input[type=number] {
		-moz-appearance:textfield; /* Firefox */
	}
	
	.Info{
		height: 95px;
		width: 100%;
		border-radius: 1em;
		background-color: #00000;
		margin-top: 5px;
	}
	<!--botones-->
	.primero{
		height: 65px;
		width: 80px;
		text-align: center;
		margin-right: 150px;
		margin-left: -2000px;
		margin-top: 20px;
	}
	<!--Info-->
	.Info{
		border-radius: 1em;
		color: #FFFFFF;
		text-align:center;
		font-size: 30px;
	}
	.uno{
		background-color: #FFFFFF;
	}
	.dos{
		background-color: #FFFFFF;
	}
	.tres{
		background-color: #FFFFFF;
	}
</style>
<!--Fin de CSS-->
<body>
<?php
    if(isset($_POST['help'])){
        include("conexion.php");

        $nombre=$_POST['nombre_form'];
        $correo=$_POST['correo_form'];
        $asunto=$_POST['asunto'];
        $tipo=$_POST['tipo_user'];
        $mensaje=$_POST['mensaje_form'];

        $sql="INSERT INTO ayuda(nombre,correo,asunto,tipo,mensaje) VALUES('".$nombre."','".$correo."','".$asunto."','".$tipo."','".$mensaje."')";
        $resp=mysqli_query($conexion,$sql);

        if($resp){
            echo "  <script language='JavaScript'>
                        alert('Se inserto correctamente');
                        location.href='';
                    </script>";
        }else{
            echo "  <script language='JavaScript'>
                        alert('No se inserto correctamente');
                        location.href='';
                    </script>";
        }
    }

    if(isset($_POST['enviar'])){  
    
		if(empty($_POST['boleta'])||empty($_POST['password'])){
			echo "  <script language='JavaScript'>
						alert('No se inserto correctamente');
						location.href='login.php';
					</script>";
		}else{
			include("conexion.php");

			$boleta=$_POST['boleta'];
			$pass=$_POST['password'];
			$tipo=$_POST['tipo'];

			if($tipo==0){
        		$sql="SELECT * FROM administrador WHERE boleta='".$boleta."' AND pass='".$pass."'";
				$resp=mysqli_query($conexion,$sql);

				if($row=mysqli_fetch_assoc($resp)){
					echo "  <script language='JavaScript'>
							alert('Se inserto correctamente');
							location.href='';
							</script>";
				}else{
					echo "  <script language='JavaScript'>
                        alert('No se inserto correctamente');
                        location.href='login.php';
                    </script>";
				}	
			}else if($tipo==1){
				$sql="SELECT * FROM profesores WHERE boleta='".$boleta."' AND pass='".$pass."'";
				$resp=mysqli_query($conexion,$sql);

				if($row=mysqli_fetch_assoc($resp)){
					echo "  <script language='JavaScript'>
                        alert('Se inserto correctamente');
                        location.href='index.php';
                    </script>";
				}else{
					echo "  <script language='JavaScript'>
                        alert('No se inserto correctamente');
                        location.href='';
						</script>";
				}
        }else if($tipo==2){
        	$sql="SELECT * FROM alumnos WHERE boleta='".$boleta."' AND pass='".$pass."'";
			$resp=mysqli_query($conexion,$sql);

			if($row=mysqli_fetch_assoc($resp)){
				session_start();
				$_SESSION['boleta']=$boleta;
				$_SESSION['pass']=$pass;
				
				echo "  <script language='JavaScript'>
                        alert('Se inserto correctamente');
                        location.href='';
						document.getElementByClassName('Inicio').style.display='none';
                    </script>";
			}else{
				echo "  <script language='JavaScript'>
							alert('No se inserto correctamente');
							location.href='agregar_alumno.php';
						</script>";
				}
			}
		}
	}else{
?>

	<div class="container">
		<div class="top">
			<!--primer div-->
			<div class="logo">ESCOM IPN</div>	<!--este div es el logo de la pagina-->
			<!--segundo div-->
			<div class="curso">Curso de electronica analogica y circuitos</div>		<!--tipo de curso-->
			<!--tercer div-->
		</div>
		<div class="Botones">
            <a href="contenido.php"><button type="send" class="cero">Curso</button></a>
			<a href="principal.php"><button type="send" class="primero">Principal</button></a>
			<a href="acerca_de.php"><button type="send" class="segundo">Acerca de</button></a>
			<a href="faq.php"><button type="send" class="tercero">Preguntas Frecuentes</button></a>
			<a href="contacto.php"><button type="send" class="cuarto">Contacto</button>
			<a href="help.php"><button type="send" class="quinto">Ayuda</button>
		</div>		
	<!--botones de navegacion-->
	<!--cuarto div-->
		<div class="content">
			<div class="Principal">
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <label for="nombre_form">Nombre</label>
                <input type="text" name="nombre_form" id="nombre_form" placeholder="Nombre" required>
                <label for="correo_form">Correo</label>
                <input type="email" name="correo_form" id="correo_form" placeholder="Correo" required>
                <br>
                <label for="asunto">Asunto</label>
                <input type="text" name="asunto" id="asunto" placeholder="Asunto" required>
                <label for="tipo_user">Tipo de Usuario</label>
                <input type="number" name="tipo_user" id="tipo_user" placeholder="Tipo de Usuario" required>
                <br>
                <label for="mensaje_form">Mensaje</label>
                <textarea style="resize: none; height:200px; width:200px;" name="mensaje_form" id="mensaje_form" placeholder="Mensaje" required></textarea>
                <input type="submit" name="help" value="Enviar">
            </form>
			</div>		<!--presentacion de la web-->
		<!--quinto div-->
			<div class="Inicio">
				<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					<h1>Inicio de Sesion</h1>
					<div class="input-box">
						<input type="text" name="boleta" placeholder="Boleta" id="user" required>
						<i class='bx bxs-user'></i>
					</div>
					<div class="input-box pass">
						<input type="password" name="password" placeholder="Contraseña" id="pass" required>
						<input type="number" name="tipo" min=0 max=2  placeholder="Tipo" title="Tipo de usuario 0-2" id="type" required>
						<i class='bx bx-lock-alt' ></i>
					</div>
					
					<button type="submit" name="enviar" class="btn">Acceder</button>
				</form>
			</div>	
		</div>
		<!--inicio de secion y tipo de usuario-->
		<!--sexto div-->
		<div class="Info">
				<p class="uno">copyright @Veruete Hernandez Bryan David</p>
				<p class="dos">copyright @Alcantara Sanchez Francisco</p>
				<p class="tres">copyright @Castro Macías Julio César</p>
		</div>		<!--info-->
	</div>	
	<!--fin de la pagina-->
	<?php
		}
	?>
</body>
</html>