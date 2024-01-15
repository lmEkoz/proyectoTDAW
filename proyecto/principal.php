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
		width: 200px;
		border-radius: 1em;
		background-color: #000000;
		color: #FFFFFF;
		text-align:center;
		font-size: 30px;
	}
	.curso{
		height: 80px;
		width: 2170px;
		margin-top:-80px;
		margin-left: 200px;
		border-radius: 1em;
		background-color: #0000FF;
		color: #FFFFFF;
		text-align:center;
		font-size: 50px;
	}
	.Botones{
		height: 100px;
		width: 2367px;
		margin-top:5px;
		border-radius: 1em;
		background-color: #000000;
		color: #FFFFFF;
		text-align: center;
	}
	.Principal{
		height: 900px;
		width: 1670px;
		margin-top: 5px;
		border-radius: 1em;
		text-align: center;
		background-color: #A4A4A4;
	}
	.Inicio{
		height: 900px;
		width: 690px;
		margin-top: -900px;
		margin-left: 1680px;
		border-radius: 1em;
		text-align: center;
		background-color: #04d9ff;
		font-size: 30px;
	}
	.Info{
		height: 95px;
		width: 2376px;
		border-radius: 1em;
		background-color: #000000;
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
	<!--primer div-->
		<div class="logo">ESCOM IPN</div>	<!--este div es el logo de la pagina-->
	<!--segundo div-->
		<div class="curso">Curso de electronica analogica y circuitos</div>		<!--tipo de curso-->
	<!--tercer div-->
		<div class="Botones">
			<button type="send" class="primero">Principal</button>
			<button type="send" class="segundob">Acerca de</button>
			<button type="send" class="tercero">Preguntas Frecuentes</button>
			<button type="send" class="cuartob">Contacto</button>
			<button type="send" class="quintob">Ayuda</button>
		</div>		
	<!--botones de navegacion-->
	<!--cuarto div-->
		<div class="Principal">Principal
			<p>En este sitio web podrás encontrar un curso de fundamentos de circuitos</p>
			<p>y de electronica analogica que incluyen actividades como rompecabezas,</p>
			<p>memorama, libros, videos y carrusel de imagenes lo cual va a veneficiar</p>
			<p>al alumno en poder aprender de forma más rapida y censilla.</p>
		</div>		<!--presentacion de la web-->
	<!--quinto div-->
		<div class="Inicio">Inicio de seción
			<p>Usuario:</p> <input type="text" height="50px;">
			<p>contrase&ntilde;a:</p> <input type="password" height="50px;">
			<br><br>
				<select name="tipo" id="tipo">
					<option value="Alumno">Alumno</option>
					<option value="Profesor">Profesor</option>
					<option value="Administrador">Administrador</option>
					<option value="Coordinador">Coordinador</option>
				</select>
			<button type="send">Entrar</button>
		</div>		
	<!--inicio de secion y tipo de usuario-->
	<!--sexto div-->
		<div class="Info">
			<p class="uno">copyright @Veruete Hernandez Bryan David</p>
			<p class="dos">copyright @Alcantara Sanchez Francisco</p>
			<p class="tres">copyright @Castro Macías Julio César</p>
		</div>		<!--info-->
</body>
</html>