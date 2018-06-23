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
	<link href="aset/css/style.explore-admin.css" rel="stylesheet">
	<script src="aset/js/embo.js"></script>
</head>
<body style="background-color: #ecf0f1;">

<div class="atas merah-2">
	<img src= "aset/gbr/logo.png" class="logoHome">
	<div class="pencarian">
		<i class="fa fa-search"></i>
		<input type="text" class="box" plaeholder="Type your search...">
	</div>
	<nav class="menu">
		<a href="./"><li>Home</li></a>
		<a href="explore"><li>Explore</li></a>
		<a href="all-explore"><li>City</li></a>
		<a href="#" id="tblLogin"><li><i class="fa fa-user"></i> Sign in</li></a>
		<a href="add-explore"><button id="cta" class="tbl"><i class="fa fa-plus-circle"></i> Add Listing</button>
	</a></nav>
</div>

<div class="kiri">
	<div class="listWizard" aktif="ya" id="tblAddListing">Add Listing</div>
	<div class="listWizard" id="tblEvtImg">Event Images</div>
	<div class="listWizard" id="tblContact">Contact Information</div>
	<div class="listWizard" id="tblLoc">Location</div>
	<div class="listWizard" id="tblEvtDetail">Event Details</div>
	<div class="listWizard" id="tblPrice">Price Promotions</div>
</div>

<div class="form">
	<div id="addListing" class="bagForm">
		<div class="wrap">
			<h4><div id="icon"><i class="fa fa-pencil"></i></div> Add Listing</h4>
			<div class="isi">Title</div>
			<input type="text" class="box" placeholder="Event Name..." id="eventName">
			<div class="isi">Tagline</div>
			<input type="text" class="box" placeholder="Tagline..." id="tagline">
			<div class="isi">Description</div>
			<textarea class="box" placeholder="Event description..." id="description"></textarea>
				<button class="tbl merah-2" id="toEvtImg">NEXT</button>
		</div>
	</div>
	<div id="eventImages" class="bagForm">
		<div class="wrap">
			<h4><div id="icon"><i class="fa fa-camera"></i></div> Event Images</h4>
			<div class="isi">Logo (optional)</div>
			<input type="file" class="box">
			<div class="ket">Maximum file size : 32 MB</div>

			<div class="isi">Cover Image (optional)</div>
			<input type="file" class="box">
			<div class="ket">Maximum file size : 32 MB</div>

			<div class="isi">Gallery Image (optional)</div>
			<input type="file" class="box">
			<div class="ket">Maximum file size : 32 MB</div>

			<div style="margin-top: 13px;">
				<button class="tbl merah-2" id="toContactInfo">NEXT</button>
			</div>
		</div>
	</div>
	<div id="contactInformation" class="bagForm">
		<div class="wrap">
			<h4><div id="icon"><i class="fa fa-phone"></i></div> Contact Information</h4>
			<div class="isi">Phone Number (optional)</div>
			<input type="text" class="box" placeholder='e.g "62821343290"' id="phoneNumber">
			<div class="ket">
				only insert your number without symbol like + () or space, like the example use 62 instead of 0. We'll generate button with your whatsapp number so your customer will easier to contact you.
			</div>

			<div class="isi">Contact Email</div>
			<input type="text" class="box" placeholder="Your email address" id="contactEmail">

			<div class="isi">Social Network (optional)</div>
			<input type="text" class="box" id="socialNetwork" style="display: none;" placeholder="URL...">
			<button class="tbl" style="color: #cb0029;font-family: OLight;width: 235px;margin-top: 8px;" id="addSocNet">Add</button>
			<div class="ket">Add website if you want insert call to action link</div>

			<div style="margin-top: 13px;">
				<button class="tbl merah-2" id="toLocation">NEXT</button>
			</div>
		</div>
	</div>

	<div id="location" class="bagForm">
		<div class="wrap">
			<h4><div id="icon"><i class="fa fa-map-marker"></i></div> Location</h4>
			<div class="isi">Region (optional)</div>
			<input type="text" class="box">

			<div class="isi">Address (optional)</div>
			<input type="text" class="box" placeholder='e.g. "Surabaya"'>
			<input type="checkbox" id="coord">
			<label for="coord">Pick coordinates</label>

			<div style="margin-top: 13px;">
				<button class="tbl merah-2" id="toEventDetail">NEXT</button>
			</div>
		</div>
	</div>

	<div id="eventDetail" class="bagForm">
		<div class="wrap">
			<h4><div id="icon"><i class="fa fa-pencil"></i></div> Event Details</h4>
			<div class="isi">Date (optional)</div>
			<input type="date" class="box">

			<div class="isi">Related Listing (optional)</div>
			<select class="box">
				<option>Select listing</option>
			</select>

			<div class="isi">Category</div>
			<input type="text" class="box" placeholder="Choose a category...">

			<div style="margin-top: 13px;">
				<button class="tbl merah-2">NEXT</button>
			</div>
		</div>
	</div>

	<div id="pricePromotion" class="bagForm">
		<div class="wrap">
			<h4><div id="icon"><i class="fa fa-money"></i></div> Price Promotions</h4>
			<div class="isi">Pricing (optional)</div>
			<input type="text" class="box" placeholder='e.g. "1400000"'>
			<div class="ket">Enter a price for hotel promotions, only insert the number</div>

			<div class="bag-tombol">
				<button class="merah-2">Preview</button>
			</div>
		</div>
	</div>
</div>

<div class="bege"></div>
<div class="notif">
	<h3 class="merah-2 rata-tengah">ALERT!</h3>
	<div class="wrap">
		<p>
			<div id="isiNotif">
				Event Name must be filled
			</div>
		</p>
		<div class="bag-tombol">
			<button class="merah-2" id="closeNotif">CLOSE</button>
		</div>
	</div>
</div>

<script src="aset/js/addExplore.js"></script>
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