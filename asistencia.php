<html>
<head>
<?php
$nombre = $_post["select"];
$personal = $_post["pe"];
$es = $_post["in"];
$fecha = strftime(%D);
$hora =  strftime(%T);
$registro = "
Nombre: $nombre
Personal: $personal
ES: $es
Hora: $hora";

$archivo = fopen("$fecha.txt","a");
fwrite($archivo;$registro); 


?>
</head>
<body>
<div align="center">
<h2> Datos ingresados correctamente </h2>
</div>
</body>
</html>

