<?php

$res = '<h2>Respuesta: </h2>';
if( isset($_POST) ){

	$res.= '<pre>';
	$res.= print_r($_POST);
	$res.= '</pre>';

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
	
<form method="post" action="cargar-personas">
  <label>NOMBRE</label> <input type="text" name="nombrex" />
  <br><br>
  <label>APELLIDO</label> <input type="text" name="apellidox" />

  <br><br>
	
  <input type="submit" name="submitx"/>

</form>

</body>
</html>
