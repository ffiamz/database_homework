<?php
session_start();
if(!isset($_SESSION["student_login_id"])){
exit("login please");
}

$id = $_SESSION["student_login_id"];
$name = $_POST["name"];
$gender = $_POST["gender"];
$sql = mysqli_connect("localhost","manager","123xyz,","sems");
if(!$sql){
	die("connect error ".mysqli_connect_error());
}
$ret = mysqli_query($sql,
	"update tb_student set studentName='$name', studentGender=$gender ".
	"where studentId=$id");

if($ret){
	echo "succeeded";
}else{
	echo "failed";
}
mysqli_close($sql);

?>
