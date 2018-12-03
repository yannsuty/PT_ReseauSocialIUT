function posFixed(){
	var div = document.getElementById("headerBas");
	
	// 259 = div.offsetTop;	
	
	if (document.documentElement.scrollTop > 259) {
		div.className = "bandeScroll";
	}else{
		div.className = "";
	}
}
