<?php
error_reporting(1);
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
	<link href="aset/css/style.home.css" rel="stylesheet">
	<link href="aset/css/style.index.css" rel="stylesheet">
	<script src="aset/js/embo.js"></script>
	<style>
		body {
			background: url(../gbr/shirt.jpg) top center;
			background-size: cover;
		}
	</style>
</head>
<body>

<div class="bege"></div>
<div class="atas">
	<img src= "aset/gbr/logo.png" class="logoHome">
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
		<a href="add-explore"><button id="cta" class="tbl"><i class="fa fa-plus-circle"></i> Add Listing</button>
	</a></nav>
</div>

<div class="container rata-tengah">
	<div class="wrap">
		<h1>Discover What's New in Hotel</h1>
		<h2>Find Great Places to Eat, Visit and Stay</h2>
		<div class="boxTengah">
			<div class="wrap">
				<div class="option">
					<input type="text" class="box" placeholder="What are you looking for?">
				</div>
				<div class="option">
					<select class="box">
						<option>All categories</option>
						<option>Room</option>
						<option>Food & Beverages</option>
						<option>Event</option>
						<option>Swimming Pool</option>
						<option>Business Center</option>
					</select>
				</div>
				<div class="option">
					<select class="box">
						<option>< 1 juta</option>
						<option>1 - 2 juta</option>
						<option>2 - 3 juta</option>
						<option>> 3 juta</option>
					</select>
				</div>
				<button id="search" class="tbl merah-2">
					<i class="fa fa-search"></i> Search
				</button>
			</div>
		</div>
	</div>
</div>

<div class="bawah rata-tengah">
	<div class="wrap">
		<h4>Categories</h4>
		<h2>What do you need to find?</h2>
		<div id="index">
			<div class="list">
				<img src="aset/gbr/squid.jpg">
				<div class="ket">
					<div class="wrap">
						<div id="iconKet"><i class="fa fa-facebook"></i></div>
						<div id="keterangan">
							<h3>Room</h3>
							<p>4 listings</p>
						</div>
					</div>
				</div>
			</div>
			<div class="list">
				<img src="aset/gbr/squid.jpg">
				<div class="ket">
					<div class="wrap">
						<div id="iconKet"><i class="fa fa-facebook"></i></div>
						<div id="keterangan">
							<h3>Room</h3>
							<p>4 listings</p>
						</div>
					</div>
				</div>
			</div>
			<div class="list">
				<img src="aset/gbr/squid.jpg">
				<div class="ket">
					<div class="wrap">
						<div id="iconKet"><i class="fa fa-facebook"></i></div>
						<div id="keterangan">
							<h3>Room</h3>
							<p>4 listings</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<h4>Latest</h4>
		<h2>Explore Hotels</h2>
		<div id="index">
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