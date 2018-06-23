<?php
include '../ctrl/userController.php';
?>

<table>
	<thead>
		<tr>
			<th style="width: 10%;">ID</th>
			<th>Name</th>
			<th>Email</th>
			<th style="width: 20%;">Action</th>
		</tr>
		<tbody>
			<?php

			error_reporting(1);
			$search = $_COOKIE['search'];
			if(empty($search)) {
				$search = "";
			}
			foreach ($user->all($search) as $row) {
				$iduser = $row['iduser'];
				echo "<tr>".
						"<td>".$iduser."</td>".
					 	"<td>".$row['name']."</td>".
					 	"<td>".$row['email']."</td>".
					 	"<td>".
					 		"<button class='hijau' onclick='edit(this.value)' value='".$iduser."'>".
					 			"<i class='fa fa-pencil'></i>".
					 		"</button> &nbsp; ".
					 		"<button class='merah' onclick='hapus(this.value)' value='".$iduser."'>".
					 			"<i class='fa fa-trash'></i>".
					 		"</button>".
					 	"</td>".
					 "</tr>";
			}

			?>
		</tbody>
	</thead>
</table>