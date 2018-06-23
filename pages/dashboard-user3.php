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
	<link href="aset/css/style.explore-admin.css" rel="stylesheet">
	<style>
		.container {
			left: 30%;width: 65%;
			background-color: #fff;
			color: #444;
			border: 1px solid #ccc;
			margin-bottom: 23px;
		}
		.box {
			font-size: 15px;
			border-radius: 0px;
			border: none;
			border-bottom: 1px solid #ccc;
			padding: 0px;
			height: 55px;
			width: 99%;
		}
		.box:focus {
			border-bottom: 1px solid #cb0029;
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
		<a href="#"><li><i class="fa fa-user"></i> Sign in</li></a>
		<a href="add-explore"><button id="cta" class="tbl"><i class="fa fa-plus-circle"></i> Add Listing</button>
	</nav>
</div>

<div class="kiri">
	<a href="dashboard-user" style="text-decoration:none; color:black;"><div class="listWizard">My Account</div></a>
	<a href="dashboard-user2" style="text-decoration:none; color:black;"><div class="listWizard">My Listings</div></a>
	<div class="listWizard">Bookmarks</div>
	<div class="listWizard">Orders</div>
	<div class="listWizard">Downloads</div>
	<div class="listWizard">Addresses</div>
	<a href="dashboard-user3" style="text-decoration:none; color:black;"><div class="listWizard" aktif="ya">Account details</div></a>
	<div class="listWizard">Logout</div>
</div>

<div class="container">
	<div class="wrap">
		<h4><div id="icon"><i class="fa fa-user-circle"></i></div> Account Details</h4>
		<div class="bag bag-5">
			<div>First name *</div>
			<input type="text" class="box" id="firstName">
		</div>
		<div class="bag bag-5">
			<div>Last name *</div>
			<input type="text" class="box" id="lastName">
		</div>
		<div>
			<div>Email address *</div>
			<input type="text" class="box" id="email">
		</div>
		<div style="margin-top: 12px;">
			<h4>Password change</h4>
			<div>Current password (leave blank to leave unchanged)</div>
			<input type="password" class="box" id="currentPass">
			<div>New password (leave blank to leave unchanged)</div>
			<input type="password" class="box" id="newPass">
			<div>Confirm new password</div>
			<input type="password" class="box" id="confirmPass">
		</div>
		<div class="bag-tombol">
			<button class="merah-2">Save Changes</button>
		</div>
	</div>
</div>
</body>
</html>