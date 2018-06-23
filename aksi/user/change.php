<?php
include '../ctrl/userController.php';

$id = $_COOKIE['iduser'];
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$yangDiubah = "name,email,password";
$d = explode(",", $yangDiubah);

$value = $name.",".$email.",".$pwd;
$v = explode(",", $value);

for ($i=0; $i < count($v); $i++) { 
	$user->change($id, $d[$i], $v[$i]);
}