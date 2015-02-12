<?php 
if (!empty($_POST)){
	$nombre = $_POST['txtNombre'];
	$URL = $_POST['txtURL'];
	$descripcion = $_POST['txtDescripcion'];

	echo('! Exito los datos se recibieron correcta mente !  <br/>');
	echo ("nombre: ".$nombre."<br/>");
	echo ("URL: ".$URL."<br/>");
	echo ("Descripcion: ".$descripcion."<br/>");
}
?>