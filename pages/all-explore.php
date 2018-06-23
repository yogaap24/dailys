<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1">
	<title>ALL EXPLORE</title>
	<link href="aset/fw/build/fw.css" rel="stylesheet">
	<link href="aset/fw/build/font-awesome.min.css" rel="stylesheet">
	<link href="aset/css/bootstrap.min.css">
	<link href="aset/css/style.index.css" rel="stylesheet">
	<link href="aset/css/style.explore.css" rel="stylesheet">
	<script src="aset/js/embo.js"></script>
	<style>
		.container {
			left: 10%;width: 80%;
		}
		.container h4 {
			color: #cb0029;
			font-family: OLight;
			font-weight: lighter;
			margin: 30px 0px -5px 0px;
		}
		.container h2 {
			font-size: 27px;
			font-family: OBold;
		}
		.container .list {
			width: 31.3%;
			margin: 1% 1%;
		}
	</style>
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
		<a href="#" id="tblLogin"><li><i class="fa fa-user"></i> Sign in</li></a>
		<a href="add-explore"><button id="cta" class="tbl"><i class="fa fa-plus-circle"></i> Add Listing</button>
	</nav>
</div>

<div class="container rata-tengah">
	<div class="wrap">
		<h4>Explore the city</h4>
		<h2>Find listings by category</h2>
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