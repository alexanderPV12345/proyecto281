<!DOCTYPE html>
<html>
<head>
	<title>Registra Paciente</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <form class="contacto" method="post" action="pagina1.php">
		<div><label>Nombre  :</label> <input type='text' value=''>(*)</div>
		<div><label>Paterno :</label> <input type='text' value=''>(*)</div>
        <div><label>Materno :</label> <input type='text' value=''></div>        
        <div><label>CI:</label> <input type='text' value=''></div>
        <div><label>Telefono:</label> <input type='text' value=''></div>        
        <div><label>Sexo:</label> <input type='radio' name="rad1" value="0">Masculino <input type='radio' name="rad2" value="1">Femenino</div>        
        <div><label>Estado civil:</label><select name="estado">
        									<option value="1">Soltero</option>
        									<option value="2">Casado</option>        									
                                        </select></div>        
		<div class="contacto1"><label>Fecha Nacimiento:</label> <input type='text' value=''> - <input type='text' value=''> - <input type='text' value=''>(*)</div>                                             
        <div><label>Lugar de nacimiento :</label><textarea rows='4'></textarea></div>
        <div><label>Lugar de nacimiento :</label><textarea rows='2'>Calle/Acenida/Numero</textarea></div>        
        <div><label>Zona:</label> <input type='text' value=''></div>        
        <br>
        <div><input type='submit' value='Restaurar'>                                   <input type='submit' value='Regsitrar'></div> 
	</form>
</body>
</html>
