<?php
include '../ctrl/umumController.php';

$uname = $_POST['uname'];
$pwd   = $_POST['pwd'];

$umum->login($uname, $pwd);