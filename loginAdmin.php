<?php
if (!isset($_POST['user']) || !isset($_POST['pwd'])){
	header("location:loginMaestro.html");
	exit();
}
include_once "conn.php";
$userxd = $_POST['user'];
$pwdxd = $_POST['pwd'];
session_start();
$sql = "SELECT * FROM admin WHERE nombre = ? AND contrasena = ?";
$statement = $conn->prepare($sql);
$statement->execute([$userxd,$pwdxd]);
$count = $statement->rowCount();
echo $count;
if ($count>0) {
	$_SESSION["user"] = $userxd; 
	header("Location:SesionAdmin.php");
	exit();
}else{
	header("Location:loginAdmin.html");
	exit();
}
$conn = null;
?>