<?php
require 'conexion.php';
session_start();
$username=$_POST['username'];
$clave=$_POST['clave'];
$sql="SELECT COUNT(*) AS contar from usuarios where username='$username' and clave='$clave'";
$resultado= mysqli_query($conn,$sql);
$array=mysqli_fetch_array($resultado);
if($array['contar']>0){
    header("location: ../index.php?action=stock");
    $_SESSION['username']=$username;
} else{
    header("location: ../index.php?action=error");
}
?>