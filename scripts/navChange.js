function navChange(evt, navNum) {
	// panggal laman yang tersedia			
	var navmain, navlinks, navName;
	
	navmain = document.getElementsByClassName("navmain");
	for (var i=0; i<navmain.length; i++)
		navmain[i].style.display = "none";
	
	navlinks = document.getElementsByClassName("navlinks");
	for (var i=0; i<navlinks.length; i++)
		if (navNum != i+1)
			navlinks[i].classList.remove("active");
		else
			navlinks[i].classList.add("active");
	
	navName = "nav-" + navNum;
	document.getElementById(navName).style.display = "block";
}

document.getElementById("tab_default").click();