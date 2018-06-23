<?php
include 'controller.php';

class user extends controller {
	public function add($a, $b, $c, $d, $e) {
		$q = $this->insert("user", "'$a','$b','$c','$d','$e'");
		return $q;
	}
	public function change($id, $struktur, $val) {
		$q = $this->update("user", $id, $struktur, $val);
		return $q;
	}
	public function remove($id) {
		$q = $this->delete("user", $id);
	}
	public function info($id, $struktur) {
		$q = $this->select("user", array(
			"key" => "iduser",
			"val" => $id
		));
		$r = $this->fetch($q);
		return $r[$struktur];
	}
	public function all($key = NULL) {
		if(empty($key)) {
			$q = $this->select("user");
		}else {
			$q = $this->query("SELECT * FROM user WHERE name LIKE '%$key%'");
		}
		if($this->numRows($q) == 0) {
			echo "User kosong";
		}else {
			while($r = $this->fetch($q)) {
				$hasil[] = $r;
			}
			return $hasil;
		}
	}
}

$user = new user();