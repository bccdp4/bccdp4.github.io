function showhide() {
	var x = document.getElementById("description");
	var y = document.getElementById("description2");
	var z = document.getElementById("description3");
	if(x.style.display === "none") {
		x.style.display = "block";
	}
	else if(y.style.display === "none") {
		y.style.display = "block";		
	}
	else if(z.style.display === "none") {
		z.style.display = "block";		
	}
	else {
		x.style.display = "none";
		y.style.display = "none";
		z.style.display = "none";
	}
}

function openFile() {
	window.location('Resume-Bryan-Corcoro-2018.pdf');
}

function email() {
	var userName = document.getElementById("contact").elements[0].value;
	var userEmail = document.getElementById("contact").elements[1].vlaue;
	var userMessage = document.getElementById("contact").elements[2].value;	
	
	var link = "mailto:bryan.corcoro@gmail.com"
			+ "?cc=" + userEmail
			+ "?subject" + escape("Message from: " + userName)
			+ "&body" + escape(userMessage);
			
	window.location.href = link;
}