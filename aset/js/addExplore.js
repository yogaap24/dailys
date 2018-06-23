function hilangkan(kecuali) {
	hilang("#addListing")
	hilang("#eventImages")
	hilang("#contactInformation")
	hilang("#location")
	hilang("#eventDetail")
	hilang("#pricePromotion")
	muncul(kecuali)
}
function set(kecuali) {
	pilih("#tblAddListing").setAttribute("aktif", "tidak")
	pilih("#tblEvtImg").setAttribute("aktif", "tidak")
	pilih("#tblContact").setAttribute("aktif", "tidak")
	pilih("#tblLoc").setAttribute("aktif", "tidak")
	pilih("#tblEvtDetail").setAttribute("aktif", "tidak")
	pilih("#tblPrice").setAttribute("aktif", "tidak")
	pilih(kecuali).setAttribute("aktif", "ya")
}
function setNotif(val) {
	muncul(".bege")
	muncul(".notif")
	tulis("#isiNotif", val)
}

function toEvtImg() {
	var evtName 	= pilih("#eventName")
	var tagline 	= pilih("#tagline")
	var description = pilih("#description")
	if(evtName.value == "") {
		setNotif("Event name must be filled")
		return false
	}else if(tagline.value == "") {
		setNotif("Tagline must be filled")
		return false
	}else if(description.value == "") {
		setNotif("Description must be filled")
		return false
	}
	hilangkan("#eventImages")
	set("#tblEvtImg")
}

function toContactInfo() {
	hilangkan("#contactInformation")
	set("#tblContact")
}

function toLocation() {
	var email = pilih("#contactEmail")
	if(email.value == "") {
		setNotif("Contact email must be filled")
		return false
	}
	hilangkan("#location")
	set("#tblLoc")
}

function toEventDetail() {
	hilangkan("#eventDetail")
	set("#tblEvtDetail")
}

klik("#tblAddListing", function() {
	hilangkan("#addListing")
	set("#tblAddListing")
})
klik("#tblEvtImg", function() {
	toEvtImg()
})
klik("#tblContact", function() {
	toContactInfo()
})
klik("#tblLoc", function() {
	toLocation()
})
klik("#tblEvtDetail", function() {
	toEventDetail()
})
klik("#tblPrice", function() {
	hilangkan("#pricePromotion")
	set("#tblPrice")
})
klik("#toEvtImg", function() {
	toEvtImg()
})
tekan("Escape", function() {
	hilang(".bege")
	hilang(".notif")
})
klik("#closeNotif", function() {
	hilang(".bege")
	hilang(".notif")
})
klik("#toContactInfo", function() {
	toContactInfo()
})

klik("#addSocNet", function() {
	muncul("#socialNetwork")
})

klik("#toLocation", function() {
	toLocation()
})
klik("#toEventDetail", function() {
	toEventDetail()
})