<html>
<head>
<?php
$nombre = $_POST["select"];
$personal = $_POST["pe"];
$es = $_POST["in"];


$registro = "
Nombre: $nombre
Personal: $personal
ES: $es";


$archivo = fopen("prueba.txt","a");
fwrite($archivo;$registro); 


?>
</head>
<body>
<div align="center">
<h2> Datos ingresados correctamente </h2>
</div>
</body>
</html>

