<?php
if (!isset($_POST['id']) || !isset($_POST['activity'])){
	header("location:index.html");
	exit();
}
include_once "conn.php";
$idxd = $_POST['id'];
$activityxd = $_POST['activity'];
$sql = "INSERT INTO registro (idregistro, activity, Alumnos_idAlumnos)
VALUES ('$idxd', '$activityxd', '$idxd')";
// use exec() because no results are returned
if ($conn->exec($sql)) {
	echo "registro hecho";
}else{echo "fallo";}
$conn = null;
?>