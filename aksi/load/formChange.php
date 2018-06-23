<?php
include '../ctrl/userController.php';

$id = $_COOKIE['iduser'];
$name = $user->info($id, "name");
$email = $user->info($id, "email");
$password = $user->info($id, "password");
?>
<div>Name :</div>
<input type="text" id="nameChange" class="box" value="<?php echo $name; ?>">
<div>E-Mail :</div>
<input type="text" id="emailChange" class="box" value="<?php echo $email; ?>">
<div>Password :</div>
<input type="text" id="pwdChange" class="box" value="<?php echo $password; ?>">