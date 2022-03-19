<!DOCTYPE html>
<html>
<head>
	
	
	<link rel="stylesheet" type="text/css" href="../css/styles-registro.css"> <!-- Conexion HTML con CSS -->
<!--	<script src="Mostrar-ocultar-Habitaciones-Resgistr0.js"></script> --> <!--Conexion Js -->
	<link rel="preconnect" href="https://fonts.googleapis.com"> <!-- google fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet"> <!-- titulo fuente -->
	<link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet"> <!-- fuente general-->
	<title>Sistema hotelero (beta 1)</title>
</head>
<body>
	<div id="general">

		<!-- aqui comienza la Barra de navegacion lateral -->
		<div id="navegacion">

			<div id="navegacion-alineacion">

				<img src="..\img\img2.png" id="img1"> <!-- logo -->
			<a href="index.php">
				<button class="animacion-btn" id="btn">Inicio</button> <!-- Btn-lateral-inicio-->
			</a>

			<!--<a href="registro.php">
				<button class="animacion-btn" id="btn">Registro</button> <!-- Btn-lateral-Regristo
			</a>
			 -->
			<a href="habitaciones.php">
				<button class="animacion-btn" id="btn">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
            </a>
			<a href="datos-registrados.php">
				<button class="animacion-btn" id="btn">Datos registrados</button> <!-- Btn-lateral-Regristo -->
			</a>
		</div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->

		<!-- aqui comienza La estructura del cuerpo -->
		<div id="cuerpo">
			<div id="contenido-cuerpo" style="height:1040px;"> <!--Cuadro branco -->
			<h1 style="text-align: center;">Registro</h1>
			<br>
			<div class="contenedor-registro">

			<?php
				$coneccion=mysqli_connect('localhost','root','','sistema_web');
			?>

			<h2 style="font-weight:normal; margin-left:30px">Informacion habitacion</h2>
				<hr style="margin-left:30px; margin-right: 20px;">
				<br>
				<br>

				<div class="tabla">

            <table>
                <tr id="espacio">
                    <th>No. habitacion</th>
                    <th>Tipo de habitacion</th>
                    <th>tipo de cama</th>
                    <th id ="nombre">Limite de personas </th>
                    <th id="nombre">Estado</th>
                    <th>Precio por noche</th>
                    
                    
                </tr>
				<?php
					$sql="select * from habitaciones";
					$result=mysqli_query($coneccion,$sql);
					
					while($mostrar=mysqli_fetch_array($result)){

					
				?>
                <tr>
                    <th><?php echo $mostrar['No. habitación']?></th>
					<th><?php echo $mostrar['Tipo de habitación']?></th>
					<th><?php echo $mostrar['Tipo de cama']?></th>
					<th><?php echo $mostrar['Limite de personas']?></th>
					<th><?php echo $mostrar['Estado']?></th>
					<th><?php echo $mostrar['Precio por noche']?></th>
                </tr>
				<?php
				}
				?>
            </table>



				<!-- 
				<div class="registro-personal">	
					<div  class="registro">
						No. Habitacion
						<input type="text" name="Nombre" class="input" >
					</div>
					<div  class="registro">
						Tipo de habitacion
						<input type="text" name="Nombre" class="input" value="." id="tipo-habitacion">
					</div>
					<div class="registro">
						Limite de peronas
						<input type="text" name="Nombre" class="input">
					</div>
					<div class="registro">
						Precio por noche
						<input type="text" name="Nombre" class="input">
					</div>
				</div>
				-->


				<br>
				<br>
				<br>


				<h2 style="font-weight:normal; margin-left:30px">Registro personal</h2>
				<hr style="margin-left:30px; margin-right: 20px;">
				<br>
				<br>
				<div class="registro-personal">	
					<div  class="registro">
						Nombre
						<input type="text" name="Nombre" class="input">
					</div>
					<div  class="registro">
						Apellido
						<input type="text" name="Nombre" class="input">
					</div>
					<div class="registro">
						Numero de telefono
						<input type="text" name="Nombre" class="input">
					</div>
					<div class="registro">
						Correo
						<input type="text" name="Nombre" class="input">
					</div>
				</div>
					
			

			</div>
			

		



		</div>
	</div>
	
</body>
</html>