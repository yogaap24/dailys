<?php
include '../ctrl/userController.php';

$id = $_COOKIE['iduser'];
$name = $user->info($id, "name");
?>
Sure want to delete <b><?php echo $name; ?></b>