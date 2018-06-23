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
		}
		#myListing img {
			width: 50px;
			height: 50px;
		}
		td a { font-size: 15px; }
		th {
			text-align: left;
			padding: 5px;
			background-color: #fff;
			border-bottom: 1px solid #ccc;
		}
		td {
			padding: 10px;
			border-bottom: 1px solid #ddd;
			background-color: #fff;
		}
		td h4 { margin-top: 5px; }
		#tblEdit {
			color: #555;
			text-decoration: none;
		}
		#tblDel {
			color: #aaa;
			text-decoration: none;
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
	</a></nav>
</div>

<div class="kiri">
	<a href="dashboard-user" style="text-decoration:none; color:black;"><div class="listWizard">My Account</div></a>
	<a href="dashboard-user2" style="text-decoration:none; color:black;"><div class="listWizard" aktif="ya">My Listings</div></a>
	<div class="listWizard">Bookmarks</div>
	<div class="listWizard">Orders</div>
	<div class="listWizard">Downloads</div>
	<div class="listWizard">Addresses</div>
	<a href="dashboard-user3" style="text-decoration:none; color:black;"><div class="listWizard">Account details</div></a>
	<div class="listWizard">Logout</div>
</div>

<div class="container">
	<div class="wrap">
		<h4><div id="icon"><i class="fa fa-home"></i></div> My Listing</h4>
		<p>
			Your listings are shown in the table below.
		</p>
		<table id="myListing">
			<thead>
				<tr>
					<th><i class="fa fa-image"></i></th>
					<th style="width: 45%;">Title</th>
					<th>Listing Type</th>
					<th>Date Posted</th>
					<th>Listing Expires</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><img src="aset/gbr/upin.jpeg"></td>
					<td>
						<h4>Ta'Jil di Swiss-Belhotel Petitenget</h4>
						<a href="#" id="tblEdit">Edit</a> &nbsp;
						<i class="fa fa-angle-right"></i> &nbsp;
						<a href="#" id="tblDel">Delete</a>
					</td>
					<td>Explore</td>
					<td>May 11, 2018</td>
					<td>-</td>
				</tr>
				<tr>
					<td><img src="aset/gbr/upin.jpeg"></td>
					<td>
						<h4>Ta'Jil di Swiss-Belhotel Petitenget</h4>
						<a href="#" id="tblEdit">Edit</a> &nbsp;
						<i class="fa fa-angle-right"></i> &nbsp;
						<a href="#" id="tblDel">Delete</a>
					</td>
					<td>Explore</td>
					<td>May 11, 2018</td>
					<td>-</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

</body>
</html>