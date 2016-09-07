<!DOCTYPE HTML>
<html lang="es">
<head>
  <meta content="text/html; charset=utf-8">
  <title>Operaciones</title>
</head>
<body>
<h2>LANZAMIENTOS DE DADOS</h2>
<form action="" method="post"> 
  <table>
  <tr><td>Numero de Dados : </td><td><select type="text" name="a" >
        <option>2</option>
        <option>5</option>
		</select></td></tr><br> 
  <tr><td> </td><td><input type="submit" value="Operar"> </td></tr>
  </table>
 </form>
<?PHP 
	$x=(isset($_POST['a']))? $_POST['a']: ' ';
	echo "<center><h2>".$x."  Dados Lanzados <br></h2>";
	switch($x)
	{
	case 2:
	$d1=rand(6,-1);
	$d2=rand(6,-1);
	echo("<img src='Dados/cara_".$d1.".jpg'>");
	echo("<img src='Dados/cara_".$d2.".jpg'>");
	break;
	case 5:
	$d1=rand(6,-1);
	$d2=rand(6,-1);
	$d3=rand(6,-1);
	$d4=rand(6,-1);
	$d5=rand(6,-1);
	echo("<img src='Dados/cara_".$d1.".jpg'>");
	echo("<img src='Dados/cara_".$d2.".jpg'>");
	echo("<img src='Dados/cara_".$d3.".jpg'>");
	echo("<img src='Dados/cara_".$d4.".jpg'>");
	echo("<img src='Dados/cara_".$d5.".jpg'>");
	break;
	
	default:
	} 
?>
<a href="index.php">Ir al inicio....</a>	
</body>
</html>