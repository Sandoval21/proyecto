
<?php
$db=pg_connect("host=localhost port=5432 dbname=pruebas user=postgres password=Sandovalsegura1");
	if(!$db)
	   echo "<p><b>Ocurrio un error conectando a la base de datos : </b></p>";
	else
	echo "<p><b>Conexion exitosa</b></p>";
?>