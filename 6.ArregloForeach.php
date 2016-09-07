<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
</head>
<body>

	<center>
	
	<!--UNA FORMA-->
	<?php 
		$rows = array(
			array(  'nombre' => 'Antonio','apellidos' =>'Gómez Gómez','telefono' =>'12345678','correo'=>'antoniogomez@gmail.com'),
			array('nombre' => 'Pablo', 'apellidos' => 'Gutierrez Gastón', 'telefono' => '23456789','correo'=>'pablogutierrez@gmail.com'),
			array('nombre' => 'Dolores', 'apellidos' => 'Candela Quema', 'telefono' => '34567891','correo'=>'dolorescandela@gmail.com'),
			array('nombre' => 'Rubén', 'apellidos' => 'Condori Jurado', 'telefono' => '45678912','correo'=>'rubencondori@gmail.com')
		);

		foreach($rows as $valor) {
			echo 'NOMBRE: ' . $valor['nombre'] . '<br />'; 
			echo 'APELLIDOS: ' . $valor['apellidos'] . '<br />';
			echo 'TELEFONO: ' . $valor['telefono'] . '<br />';
			echo 'CORREO: ' . $valor['correo'] . '<br />';
			echo '<br>';
		} 
	?>

	<!--OTRA FORMA-->
	<?php
		$MESYDELAÑO[0] = "Enero";
		$MESYDELAÑO[1] = "Febrero";
		$MESYDELAÑO[2] = "MArzo";
		$MESYDELAÑO[3] = "Abril";
		$MESYDELAÑO[4] = "Mayo";
		$MESYDELAÑO[5] = "Junio";
		$MESYDELAÑO[6] = "Julio";
		$MESYDELAÑO[7] = "Agosto";
		$MESYDELAÑO[8] = "Septiembre";
		$MESYDELAÑO[9] = "Octubre";
		$MESYDELAÑO[10] = "Noviembre";
		$MESYDELAÑO[11] = "Diciembre";
		foreach($MESYDELAÑO as $valor) {   
			echo 'MES DEL AÑO: '. $valor.'<br/>'; 
		}
	?>
	</center>
	<a href="index.php">Ir al inicio....</a>
</body>
</html>