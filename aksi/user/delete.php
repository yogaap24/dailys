<?php
include '../ctrl/userController.php';

$id = $_COOKIE['iduser'];

$user->remove($id);