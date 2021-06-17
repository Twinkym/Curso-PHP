<?php
// creamos una tabla y recuperamos los datos enviados mediante un form con el metodo $_POST que mas seguro.
$tabla = array( );
// Asignamos posiciones en el array y recuperamos los datos del form con method $_POST. 
$tabla[1] = htmlspecialchars($_POST['nombre']);
$tabla[2] = htmlspecialchars($_POST['apellidos']);
$tabla[3] = htmlspecialchars($_POST['telefono']);
$tabla[4] = htmlspecialchars($_POST['email']);
$tabla[5] = htmlspecialchars($_POST['dni']);
$tabla[6] = htmlspecialchars($_POST['fecha']);
// Usamos el bucle for para cargar los datos e ir saltando más una posición en la tabla.
for ($i=0;$i<=sizeof($tabla);$i++) 
// Mostramos con echo la tabla y la posicion siguiente al cerrar el ciclo.
	{
  		echo ($tabla[$i]."<br>");
  }

?>