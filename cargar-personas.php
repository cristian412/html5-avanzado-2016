<?php
function insertar($orden){
  ########### CONEXION #########################################
  $user = 'b4924e9e775cc0';
  $pass = '8f4d7791fef8ca1';
  $db   = 'heroku_d00b69afc685a2e';
  $server = 'us-cdbr-iron-east-05.cleardb.net';
  $con = mysqli_connect($server,$user,$pass,$db);
  $res = mysqli_query($con, $orden);
  mysqli_free_result($res);
  mysqli_close($con);
  return $res;
}

$res = '<h2>Respuesta: </h2>';
if( isset($_POST) ){

	$res.= '<pre>';
	foreach($_POST as $key => $v){
		$res.= $key.'  --> '.$v.' ';
	}
	$res.= '</pre>';
	
	insertar("INSERT INTO `personas` (`nombre`, `apellido`) VALUES ('{$_POST['nombrex']}', '{$_POST['apellidox'}')");

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cargar personas</title>
	<style>
		body{
		margin-left: 200px;
		}
		h2{
		color:red;
		}
	</style>
</head>
<body>

<h1>Cargar Personas</h1>

<?=$res?>
	
<form method="post" action="cargar-personas.php">
  <label>NOMBRE</label> <input type="text" name="nombrex" />
  <br><br>
  <label>APELLIDO</label> <input type="text" name="apellidox" />

  <br><br>
	
  <input type="submit" name="submitx"/>

</form>

</body>
</html>
