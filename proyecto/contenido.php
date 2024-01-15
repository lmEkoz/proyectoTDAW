<!DOCTYPE html>
<html>
	<head>
		<title>Vista de usuario</title>
		<meta charset="UTF-8">
	</head>
	<style>
		body{
			background-color: white;
		}
		.navegacion{
			width: 1000px;
			margin: 30px auto;
			background-color: honeydew;	
		}
		.navegacion ul {
			list-style: none;
			text-align: center;
		}
		.menu>li {
			display: inline-block;
		}
		.menu>li>a{
			display: block;
			padding: 15px 20px;
			color: red;
			font-family: 'Georgia';
			text-decoration: none;
		}
		.menu li a:hover{
			color: #bdb76b;
			transition: all .3s;
		}
		.submenu{
			position: absolute;
			background: green;
			width: auto;
			display: none;
		}
		.submenu li a{
			display: block;
			padding: 15px;
			color: purple;
			font-family: 'Georgia';
			text-decoration: none;
		}
		.menu li:hover .submenu{
			display: block; 	
		}
		.submenu li a:hover{
			font-size: large;
		}
		.encabezado{
			background-color: red;
			height: 100px;
			width: 100%;
			text-align: center;
			color: white;
		}
		* {
		margin: 0;
		padding: 0%;
		-webkit-animation-sizing: border-box;	
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		}
		.inicio{
			background-color: blue;
			float: right;
			height:800px;
			width: 45%;
			text-align: center;
			color: white;
			border-radius: 2em;
			size: 20px;
		}
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
				<button type="send" class="cuarto">Contacto</button>
				<button type="send" class="quinto">Ayuda</button>
			</div>
			<div class="Lista">
				<ul class="menu">
					<li>
                        <a href="">Primer Parcial</a>
                        <ul class="submenu">
                            <li><a href="https://www.rapidtables.org/electric/Electric_units.html#:~:text=Definiciones%20de%20unidades%20el%C3%A9ctricas%201%20Voltio%20%28V%29%20El,%28F%29%20...%208%20Enrique%20%28H%29%20...%20More%20items"> 1.1 Unidades eléctricas</a></li>
                            <li><a href="https://mielectronicafacil.com/electronica-basica/voltaje/#comprendiendo-el-concepto"> 1.1.1 Voltaje</a></li>
                            <li><a href="https://www.fluke.com/es-mx/informacion/blog/electrica/que-es-la-corriente"> 1.1.2 Corriente</a></li>
                            <li><a href="https://solar-energia.net/electricidad/corriente-electrica/potencia-electrica#:~:text=La%20potencia%20el%C3%A9ctrica%20es%20la%20proporci%C3%B3n%20de%20corriente,unidad%20de%20potencia%20se%20expresa%20en%20vatios%20%28W%29."> 1.1.3 Potencia eléctrica</a></li>
                            <li><a href="https://solar-energia.net/electricidad/leyes/ley-de-ohm"> 1.2 Ley de Ohm</a></li>
                            <li><a href="https://www.fluke.com/es-mx/informacion/blog/electrica/que-es-la-resistencia"> 1.2.1 Resistencia</a></li>
                            <li><a href="https://www.electronicauniversal.com.mx/2019/11/06/tipos-de-resistencias/"> 1.2.2 Tipo de resistencia</a></li>
                            <li><a href="https://www.digikey.com.mx/es/resources/conversion-calculators/conversion-calculator-resistor-color-code#:~:text=La%20calculadora%20de%20c%C3%B3digo%20de%20colores%20de%20resistencias,4%2C%205%20y%206%20bandas%20con%20orificio%20pasante."> 1.2.3 Codigo de colores</a></li>
                            <li><a href="https://telcomplus.org/elementos-activos-y-pasivos-del-circuito-electrico/#:~:text=Algunos%20ejemplos%20de%20componentes%20activos%20son%3A%201%20Transistores%3A,tensi%C3%B3n%20el%C3%A9ctrica.%204%20SCR%3A%20Controla%20la%20corriente%20el%C3%A9ctrica."> 1.3 Elementos activos de circuitos eléctricos</a></li>
                            <li><a href="https://www.electronicafacil.top/corriente-voltaje/fuente-de-corriente-de-voltaje-independiente-dependiente-ideal/#:~:text=Cuando%20el%20voltaje%20de%20los%20terminales%20de%20una,denominarse%20fuente%20constante%20o%20fuente%20de%20variante%20temporal."> 1.3.1 Fuentes de voltaje independientes</a></li>
                            <li><a href="https://blog.utp.edu.co/ricosta/files/2019/08/1-MEDICI%c3%93N-DE-VARIABLES-EL%c3%89CTRICAS-1.pdf"> 1.4 Medición de variables eléctricas en DC</a></li>
                            <li><a href="https://www.ingenierizando.com/laboratorio/multimetro/"> 1.4.1 Multímetro</a></li>
                            <li><a href="https://concepto.de/voltaje/"> 1.4.2 Medición de voltaje</a></li>
                            <li><a href="https://www.electricity-magnetism.org/es/como-se-mide-la-corriente-electrica-2/#:~:text=La%20corriente%20el%C3%A9ctrica%20se%20mide%20en%20amperios%20%28A%29,coulombs%20y%20t%20es%20el%20tiempo%20en%20segundos."> 1.4.3 Medición de corriente</a></li>
                            <li><a href="https://www.lifeder.com/ohm/"> 1.4.4 Medición de resistencia</a></li>
                            <li><a href="https://es.khanacademy.org/science/electrical-engineering/ee-circuit-analysis-topic/ee-dc-circuit-analysis/a/ee-circuit-analysis-overview"> 1.5 Análisis de circuitos den CD mediante software de simulación de circuitos eléctricos</a></li>
                            <li><a href="https://www.lifeder.com/leyes-kirchhoff/"> 1.6 Ley de Kirchhoff</a></li>
                            <li><a href="https://solar-energia.net/electricidad/leyes/leyes-de-kirchhoff#:~:text=La%20ley%20de%20corrientes%20de%20Kirchhoff%2C%20tambi%C3%A9n%20conocida,la%20corriente%20que%20sale%20de%20ese%20mismo%20nodo."> 1.6.1 Nodo</a></li>
                            <li><a href="https://solar-energia.net/electricidad/leyes/leyes-de-kirchhoff"> 1.6.2 Malla</a></li>
                            <li><a href="https://www.picuino.com/es/electric-serie-paralelo.html"> 1.6.3 Elementos en serie</a></li>
                            <li><a href="https://www.lifeder.com/circuito-paralelo/#:~:text=Componentes%20en%20paralelo%201%20Resistencias%20en%20paralelo%20La,de%20cada%20uno%3A%204%20Bater%C3%ADas%20en%20paralelo%20"> 1.6.4 Elementos en paralelo</a></li>
                            <li><a href="https://www.ingmecafenix.com/electronica/leyes/ley-de-corriente-de-kirchhoff/#:~:text=Le%20ley%20de%20corriente%20o%20tambi%C3%A9n%20conocida%20como,pasan%20por%20el%20nodo%20es%20igual%20a%20cero%C2%BB."> 1.6.5 Ley de Kirchhoff de corriente</a></li>
                            <li><a href="https://www.ingmecafenix.com/electronica/leyes/ley-de-voltaje-de-kirchhoff/"> 1.6.6 Ley de Kirchhoff de voltaje</a></li>
                        </ul>
			        </li>
			        <li>
				        <a href="">Segundo Parcial</a>
				        <ul class="submenu">
                            <li><a href="https://www.areatecnologia.com/electronica/divisor-de-corriente.html"> 2.2 Divisor de corriente</a></li>
                            <li><a href="https://www.electricity-magnetism.org/es/que-es-el-analisis-de-mallas-y-como-se-aplica-a-los-circuitos-electricos/#:~:text=El%20an%C3%A1lisis%20de%20mallas%20es%20una%20herramienta%20esencial,de%20determinar%20corrientes%20y%20voltajes%20en%20componentes%20individuales."> 2.3 Análisis de mallas</a></li>
                            <li><a href="http://wwwprof.uniandes.edu.co/~ant-sala/cursos/FDC/Contenidos/03_Analisis_por_Nodos_y_Mallas.pdf"> 2.3.1 Análisis de mallas con fuentes de voltaje independientes</a></li>
                            <li><a href="https://sensoricx.com/circuitos-electricos-dc/como-efectuar-analisis-de-circuitos-por-mallas/#:~:text=1-%20Asignar%20corrientes%20de%20malla%20I1%2C%20I2%E2%80%A6.In%20a,simult%C3%A1neas%20resultantes%20para%20obtener%20las%20corrientes%20de%20malla."> 2.3.2 Análisis de mallas con fuentes de voltaje y de corriente independientes</a></li>
                            <li><a href="https://sensoricx.com/circuitos-electricos-dc/analisis-de-circuitos-empleando-nodos/"> 2.4 Análisis de nodos</a></li>
                            <li><a href="https://unicrom.com/analisis-de-nodos-en-circuitos-resistivos/#:~:text=Los%20pasos%20a%20seguir%20en%20el%20an%C3%A1lisis%20de,una%20tabla%20para%20formar%20las%20ecuaciones%20de%20nodos."> 2.4.1 Análisis de nodos con fuentes de voltaje independientes</a></li>
                            <li><a href="https://unicrom.com/analisis-de-nodos-en-circuitos-resistivos/#:~:text=Los%20pasos%20a%20seguir%20en%20el%20an%C3%A1lisis%20de,1%2C%20V%202%2C%20V%203%2C%20V%204%2C%20etc."> 2.4.2 Análisis de nodos con fuentes de voltaje y de corriente independientes</a></li>
                            <li><a href="https://personales.unican.es/peredaj/pdf_Apuntes_AC/Presentacion-Teoremas.pdf"> 2.5 Teoremas de circuitos</a></li>
                            <li><a href="https://www.lifeder.com/teorema-de-superposicion/"> 2.5.1 Teorema de superposición</a></li>
                            <li><a href="https://escom.ipn.mx/docs/oferta/matDidacticoISC2009/AFCrcts/Apuntes_AFCircuitos.pdf"> 2.5.2 Teorema del intercambio de Fuentes</a></li>
                            <li><a href="https://www.lifeder.com/teorema-de-thevenin/"> 2.5.3 Teorema de Thevenin</a></li>
                            <li><a href="https://www.lifeder.com/teorema-de-norton/"> 2.5.4 Teorema de Norton</a></li>
                            <li><a href=""> 2.5.5 Teorema de máxima transferencia de potencia</a></li>
                        </ul>
			        <li>	
				        <a href="">Tercer Parcial</a>
				        <ul class="submenu">
                            <li><a href="https://incorruptible.mx/la-funcion-de-la-electricidad-todo-lo-que-necesitas-saber/#:~:text=Algunas%20de%20las%20principales%20funciones%20de%20la%20electricidad,o%20fr%C3%ADo%2C%20dependiendo%20de%20nuestras%20necesidades.%20More%20items"> 3.1 Funciones eléctricas</a></li>
                            <li><a href="https://eoc.cat/que-son-cuadros-electricos/#:~:text=Las%20se%C3%B1ales%20que%20avisan%20de%20que%20puede%20haber,el%C3%A9ctricos%20son%20el%20centro%20de%20todo%20el%20sistema."> 3.1.2 Cuadrada</a></li>
                            <li><a href="https://www.ingenierizando.com/electronica/onda-triangular/#:~:text=Por%20lo%20tanto%2C%20una%20onda%20triangular%20tiene%20un,1%20y%200%20o%20entre%201%20y%20-1."> 3.1.3 Triangular</a></li>
                            <li><a href="https://www.lifeder.com/onda-senoidal/"> 3.1.4 Senoidal(amplitud, freciencia, periodo, ángulo, valor medio y valor eficaz)</a></li>
                            <li><a href="https://www.equiposylaboratorio.com/portal/articulo-ampliado/definicion-uso-y-tipos-de-osciloscopios#:~:text=Un%20osciloscopio%20es%20un%20instrumento%20de%20medici%C3%B3n%20electr%C3%B3nico,se%C3%B1al%2C%20frecuentemente%20junto%20a%20un%20analizador%20de%20espectro."> 3.2 Equipo electrónico para señales alternas</a></li>
                            <li><a href="https://www.ingenierizando.com/laboratorio/osciloscopio/"> 3.2.1 Osciloscopio</a></li>
                            <li><a href="https://acmax.mx/que-es-un-generador-de-funciones"> 3.2.2 Generador de funciones</a></li>
                            <li><a href="https://solucioningenieril.com/circuitos/elementos_pasivos_de_circuitos_electricos"> 3.3 Elementos pasivos de circuitos eléctricos variantes en el tiempo</a></li>
                            <li><a href="https://www.ingmecafenix.com/electronica/componentes/el-capacitor/"> 3.3.1 Capacitor</a></li>
                            <li><a href="https://www.learningaboutelectronics.com/Articulos/Tipos-de-capacitores.php"> 3.3.2 Tipos de capacitores</a></li>
                            <li><a href="https://www.electricity-magnetism.org/es/cual-es-la-relacion-entre-la-capacitancia-el-voltaje-y-la-corriente/#:~:text=La%20relaci%C3%B3n%20entre%20la%20corriente%20y%20el%20voltaje,de%20cambio%20del%20voltaje%20a%20trav%C3%A9s%20del%20tiempo."> 3.3.3 Relaciones integro-diferenciales de voltaje y corriente del capacitor</a></li>
                            <li><a href="https://www.mecatronicalatam.com/es/tutoriales/electronica/componentes-electronicos/inductor/"> 3.3.4 Inductor</a></li>
                            <li><a href="https://masam.cuautitlan.unam.mx/dycme/dsf/modelos-electricos/#:~:text=La%20inductancia%20es%20la%20relaci%C3%B3n%20entre%20el%20voltaje,v%20L%20%3D%20L%20d%20i%20d%20t"> 3.3.5 Relaciones integro-diferenciales de voltaje y corriente del inductor</a></li>
                            <li><a href="https://espanol.libretexts.org/Ingenieria/Ingenier%C3%ADa_El%C3%A9ctrica_(Johnson)/04%3A_Dominio_de_frecuencia/4.01%3A_Introducci%C3%B3n_al_Dominio_de_la_Frecuencia#:~:text=El%20estudio%20del%20dominio%20de%20la%20frecuencia%20combina,la%20idea%20crucial%20del%20espectro%20de%20una%20se%C3%B1al."> 3.4 Dominio de la frecuencia(s)</a></li>
                            <li><a href="https://www.bing.com/search?q=Transformada+de+Laplace+electronica&qs=n&form=QBRE&sp=-1&ghc=2&lq=0&pq=transformada+de+laplace+electronica&sc=9-35&sk=&cvid=9C12A997BF714B179C1DC604F5FD7FE8&ghsh=0&ghacc=0&ghpl="> 3.4.1 Transformada de Laplace</a></li>
                            <li><a href="https://www.bing.com/search?q=Transformada+de+Laplace+electronica&qs=n&form=QBRE&sp=-1&ghc=2&lq=0&pq=transformada+de+laplace+electronica&sc=9-35&sk=&cvid=9C12A997BF714B179C1DC604F5FD7FE8&ghsh=0&ghacc=0&ghpl="> 3.4.2 Transformada de Laplace y funciones simple en el tiempo</a></li>
                            <li><a href="https://www.electricity-magnetism.org/es/que-es-la-admitancia-y-como-se-calcula-en-los-circuitos-de-corriente-alterna/#:~:text=Representa%20cu%C3%A1n%20f%C3%A1cilmente%20un%20circuito%20permite%20el%20flujo,letra%20%E2%80%98Y%E2%80%99%20y%20sus%20unidades%20son%20Siemens%20%28S%29."> 3.4.3 Impedancia y admitancia Z(s) y Y(s)</a></li>
                            <li><a href="https://www.lifeder.com/reactancia-capacitiva/"> 3.4.4 Reactancia y susceptancia capacitiva</a></li>
                            <li><a href="https://es.lambdageeks.com/inductor-inductive-reactance/#:~:text=La%20reactancia%20es%20inversamente%20proporcional%20a%20la%20corriente.,G%2C%20que%20es%20la%20inversa%20de%20la%20resistencia."> 3.4.5 Reactancia y susceptancia inductiva</a></li>
                            <li><a href="https://www.electricity-magnetism.org/es/que-es-la-admitancia-y-como-se-calcula-en-los-circuitos-de-corriente-alterna/#:~:text=Conexi%C3%B3n%20en%20Serie%3A%20Para%20calcular%20la%20admitancia%20total,la%20suma%20de%20las%20admitancias%20de%20cada%20componente."> 3.4.6 Impedancia y admitancia en serie</a></li>
                            <li><a href="https://unigal.mx/diferencia-entre-impedancia-y-admitancia/#:~:text=Normalmente%20tomamos%20la%20impedancia%20del%20circuito%20en%20serie,estas%20impedancias%20y%20admitancias%20son%20de%20mucha%20importancia."> 3.4.7 Impedancia y admitancia en paralelo</a></li>
                            <li><a href="https://studylib.es/doc/7657277/transformada-de-laplace--an%C3%A1lisis-de-circuitos-en-el-domi...#:~:text=Mediante%20la%20cual%2C%20el%20an%C3%A1lisis%20de%20circuitos%20se,en%20frecuencia%2C%20estabilidad%2C%20frecuencia%20de%20quiebre%2C%20entre%20otros."> 3.5 Análisis de circuitos en el dominio de s</a></li>
                            <li><a href="https://es.khanacademy.org/science/physics/circuits-topic/circuits-resistance/a/ee-kirchhoffs-laws"> 3.5.1 Leyes de Kirchhoff</a></li>
                            <li><a href="https://www.eeweb.com/mesh-analysis/#:~:text=Let%20us%20first%20consider%20a%20method"> 3.5.2 Mallas</a></li>
                            <li><a href="https://electropreguntas.com/como-funciona-el-nodo-en-electronica/#:~:text=El%20nodo%20es%20un%20punto%20de%20interconexi%C3%B3n%20en,crucial%20en%20la%20funci%C3%B3n%20y%20operaci%C3%B3n%20del%20circuito."> 3.5.3 Nodos</a></li>
                            <li><a href="https://www.geniolandia.com/13075039/como-calcular-polos-y-ceros"> 3.5.4 Polos, ceros y funciones de transferencia</a></li>
                        </ul>
			        </li>
						<a href="rompecabezas.php">Rompecabezas</a>
					</li>
					<li>
						<a href="memorama.php">Memorama</a>
				</ul>
			</div>
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

			<div class="Info">
					<p class="uno">copyright @Veruete Hernandez Bryan David</p>
					<p class="dos">copyright @Alcantara Sanchez Francisco</p>
					<p class="tres">copyright @Castro Macías Julio César</p>
			</div>		<!--info-->
		</div>
	</body>
</html>			