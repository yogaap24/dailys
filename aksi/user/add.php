<?php
include '../ctrl/userController.php';

$id = rand(1,9999);
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$added = time();

$user->add($id, $name, $email, $pwd, $added);