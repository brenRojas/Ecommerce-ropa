<?php session_start(); 

$usuario=$_REQUEST['nombre']; 
$email=$_REQUEST['email']; 
$password=$_REQUEST['password'];
$password1=$_REQUEST['password1'];

   $link=mysqli_connect("localhost","root","root") or die("Error al Conectar");
   mysqli_select_db($link,"ecommerce") or die("Error al Conectar");

   $result = mysqli_query($link,'SELECT password, email FROM usuarios WHERE email=\''.$email.'\'');
   if($row = mysqli_fetch_array($result))
      {
        if($row["password"] == $password)
           {
            $_SESSION["k_username"] = $row['id_colaborador'];           
            header("Location:mi_cuenta.php");
         }
         else {
            header("Location:index.php");
         }
?> 