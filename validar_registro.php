<?php

$usuario=$_REQUEST['nombre']; 
$email=$_REQUEST['email']; 
$password=$_REQUEST['password'];
$password1=$_REQUEST['password1'];

   $link=mysqli_connect("localhost","root","root") or die("Error al Conectar");
   mysqli_select_db($link,"ecommerce") or die("Error al Conectar");

   mysqli_query($link, "INSERT INTO usuarios (nombre,email,password,password1) VALUES ($usuario,'$email','$password','$password1')") or die(mysqli_error($link));
   mysqli_close($link);	
   header("Location:index.php");
?> 