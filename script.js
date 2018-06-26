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

function emailMessage() {
	alert("I am an alert box!");
}

$(function() {
    var selectedClass = "";
    $(".filter").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
        setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('animation');
            $("#gallery").fadeTo(300, 1);
        }, 300);
    });
});

