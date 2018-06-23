<?php
include 'controller.php';

class umum extends controller {
    public function info($id, $struktur) {
		$q = $this->select("umum", array(
			"key" => "idumum",
			"val" => $id
		));
		$r = $this->fetch($q);
		return $r[$struktur];
	}
    public function login($u, $p) {
        $q = $this->query("SELECT * FROM umum WHERE username = '$u' AND password = '$p'");
        $r = $this->fetch($q);
        if($this->numRows($q) != 0) {
            session_start();
            $_SESSION['nm']=$r['idumum'];
        }else {
            setcookie('kukilogin', 'salah', time() + 40, "/");
        }
    }
    public function auth() {
        session_start();
        $this->sesi = $_SESSION['nm'];
        return $this->sesi;
    }
}

$umum = new umum();