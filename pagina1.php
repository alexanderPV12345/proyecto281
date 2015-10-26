<html>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
	$conexion=mysqli_connect("localhost","root","123456789","recepcion") 
	or die("Problemas en la conexion");

	/**mysqli_query($conexion,"Insert into alumnos(nombre,mail,codcurso) 
	values('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codcurso])")
	or die("Problemas el select".mysqli_error($conexion)); 
	**/
	mysql_close($conexion);
	echo "El alumno fue dado de alta";
?>
</body>
</html>
	