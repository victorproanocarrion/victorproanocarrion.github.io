<form action="asistencia.php" method="post">
  <p>Nombre: 
<select name="select">
  <option value="value1">Value 1</option>
  <option value="value2" selected>Value 2</option>
  <option value="value3">Value 3</option>
</select>

</p>
  
  <p>Personal:
    <input type="radio" name="pe" value="A"> Administrativo
    <input type="radio" name="pe" value="D"> Docente
    <input type="radio" name="pe" value="S"> De Servicio
  </p>

<p>Seleccione:
    <input type="radio" name="in" value="E"> Entrada
    <input type="radio" name="in" value="S"> Salida
    
  </p>
  <p>
 <input type="submit" value="Enviar">
   </p>
</form>