<?php
include 'aksi/ctrl/umumController.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>DAILYHOTEL</title>
	<link href="aset/fw/build/fw.css" rel="stylesheet">
	<link href="aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="aset/css/bootstrap.min.css">
	<link href="aset/css/style.index.css" rel="stylesheet">
	<link href="aset/css/style.explore.css" rel="stylesheet">
	<script src="aset/js/jquery-3.1.1.js"></script>
	<script src="aset/js/embo.js"></script>
</head>
<body style="background-color: #ecf0f1;">

<div class="atas merah-2">
	<img src= "aset/gbr/logo.png" class="logoHome">
	<div class="pencarian">
		<i class="fa fa-search"></i>
		<input type="text" class="box" placeholder="Type your search...">
	</div>
	<nav class="menu">
		<a href="./"><li>Home</li></a>
		<a href="explore"><li>Explore</li></a>
		<a href="all-explore"><li>City</li></a>
		<?php
		if($umum->auth() == "") {
		?>
		<a href="#" id="tblLogin"><li><i class="fa fa-user"></i> Sign in</li></a>
		<?php
		}else {
			echo $umum->info($umum->auth(), "username");
		}
		?>
		<a href="add-explore"><button id="cta" class="tbl"><i class="fa fa-plus-circle"></i>Add Listing</button>
	</a></nav>
</div>

<div class="kiri">
	<div class="wrap">
		<h2>What are you looking for?</h2>
		<h4>Search or select categories</h4>
		<div id="filter">
			<input type="text" class="box" placeholder="What are you looking for?">
			<select class="box">
				<option>City</option>
				<option>Surabaya</option>
				<option>Jakarta</option>
				<option>Bandung</option>
			</select>
			<input type="text" class="box" placeholder="Where to look?">
			<div class="isi">Tags</div>
			<div class="label">
				<input type="checkbox" id="check1">
				<label for="check1">Wireless Internet</label>
			</div>
			<div class="label">
				<input type="checkbox" id="check2">
				<label for="check2">Parking Street</label>
			</div>
			<div class="label">
				<input type="checkbox" id="check3">
				<label for="check3">Smoking Allowed</label>
			</div>
			<div class="label">
				<input type="checkbox" id="check4">
				<label for="check4">Bike Parking</label>
			</div>
			<select class="box">
				<option>Latest</option>
			</select>
			<div class="bag bag-5" style="margin-top: 13px;">
				From :
				<input type="date" placeholder="From..." class="box">
			</div>
			<div class="bag bag-5" style="margin-top: 13px;">
				To :
				<input type="date" placeholder="From..." class="box">
			</div>
		</div>
		<div class="bag-tombol">
			<button class="merah-2">Search</button>
		</div>
	</div>
</div>

<div class="container">
	<div class="wrap">
		<div id="hotels">
			<div class="listHotel">
				<img src="aset/gbr/sponbob.jpg">
				<div class="ketBuka">
					<div id="open">OPEN</div>
				</div>
				<div class="ketHotel rata-tengah">
					<img src="aset/gbr/sponbob.jpg" id="iconHotel">
					<h4>ARTOTEL Surabaya</h4>
					<p>
						Designed with colonial architecture and twist of
					</p>
				</div>
			</div>
			<div class="listHotel">
				<img src="aset/gbr/sponbob.jpg">
				<div class="ketBuka">
					<div id="open">OPEN</div>
				</div>
				<div class="ketHotel rata-tengah">
					<img src="aset/gbr/sponbob.jpg" id="iconHotel">
					<h4>ARTOTEL Surabaya</h4>
					<p>
						Designed with colonial architecture and twist of
					</p>
				</div>
			</div>
			<div class="listHotel">
				<img src="aset/gbr/sponbob.jpg">
				<div class="ketBuka">
					<div id="open">OPEN</div>
				</div>
				<div class="ketHotel rata-tengah">
					<img src="aset/gbr/sponbob.jpg" id="iconHotel">
					<h4>ARTOTEL Surabaya</h4>
					<p>
						Designed with colonial architecture and twist of
					</p>
				</div>
			</div>
			<div class="listHotel">
				<img src="aset/gbr/sponbob.jpg">
				<div class="ketBuka">
					<div id="open">OPEN</div>
				</div>
				<div class="ketHotel rata-tengah">
					<img src="aset/gbr/sponbob.jpg" id="iconHotel">
					<h4>ARTOTEL Surabaya</h4>
					<p>
						Designed with colonial architecture and twist of
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg"></div>
<div class="formLogin">
	<form class="wrap" id="formLogin">
		<h4><i class="fa fa-user"></i> &nbsp; Sign in</h4>
		<input type="text" class="box" id="uname" placeholder="Username"><br />
		<input type="password" class="box" id="pwd" placeholder="Password"><br />
		<div class="bag-tombol">
			<button class="merah-2">Sign in</button>
		</div>
		<div class="bag bag-5">
			<input type="checkbox" id="rememberMe"> <label for="rememberMe">Remember me</label>
		</div>
		<div class="bag bag-5 rata-kanan">
			<a href="#">Forgot password?</a>
		</div>
		&nbsp;
	</form>
</div>

<script>
	window.addEventListener("scroll", function() {
		var skrol = window.pageYOffset
		if(skrol >= 40) {
			pengaya(".atas", "background: #cb0029")
		}else {
			pengaya(".atas", "background: none")
		}
	})

	klik(".bg", function() {
		hilang(".bg")
		hilang(".formLogin")
	})
	klik("#tblLogin", function() {
		muncul(".bg")
		muncul(".formLogin")
	})

	pilih("#formLogin").onsubmit = function() {
		let uname = pilih("#uname").value
		let pwd = pilih("#pwd").value
		let log = "uname="+uname+"&pwd="+pwd
		pos("aksi/user/login.php", log, function() {
			mengarahkan("./explore")
		})
		return false
	}
</script>
</body>
</html>