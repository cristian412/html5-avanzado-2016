<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
# echo '<pre>';
# print_r($url);
# echo '</pre>';

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
function peticion($orden){
  ########### CONEXION #########################################
  $user = 'b4924e9e775cc0';
  $pass = '8f4d7791fef8ca1';
  $db   = 'heroku_d00b69afc685a2e';
  $server = 'us-cdbr-iron-east-05.cleardb.net';
  $con = mysqli_connect($server,$user,$pass,$db);
  $res = mysqli_query($con, $orden);
  while ($row = mysqli_fetch_assoc($res)) $li[] = $row;
  mysqli_free_result($res);
  mysqli_close($con);
  return $li;
}
$lista = '';
$re = peticion("Select id_personas, nombre, apellido from personas");
foreach($re as $value){
  $lista.='<tr><td>'.$value['id_personas'].'</td><td>'.$value['nombre'].'</td><td>'.$value['apellido'].'</td></tr>';
}

$res = '<h2>Respuesta: </h2>';
if( isset($_POST['nombrex']) ){
	$res.= '<pre>';
	foreach($_POST as $key => $v){
		$res.= $key.'  --> '.$v.' ';
	}
	$res.= '</pre>';
	$nom = $_POST['nombrex'];
	$ape = $_POST['apellidox'];
	insertar("INSERT INTO `personas` (`nombre`, `apellido`) VALUES ('{$nom}', '{$ape}')");
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

<table>
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Apellido</th>

		</tr>
	</thead>
	<tbody>
		<?=$lista?>
	</tbody>
</table>
	
</body>
</html>
