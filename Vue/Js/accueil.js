function ScrollToTop() 
{
    $("html").animate({ scrollTop: 0 }, 1000);
};

function ScrollToBottom() 
{
    $("html").animate({ scrollTop: 720 }, 1000);
};

function ScrollToBottom2() 
{
    $("html").animate({ scrollTop: 1450 }, 1000);
};

function ScrollToBottom3()
 {
    $("html").animate({ scrollTop: 1870 }, 1000);
};

function ScrollToBottom4() 
{
    $("html").animate({ scrollTop: 3230 }, 1000);
};

//dipo
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n)
{
	showDivs(slideIndex += n);
}

function currentDiv(n) 
{
	showDivs(slideIndex = n);
}

function showDivs(n) 
{
	var i;
	var x = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("demo");

	if (n > x.length)
	{
		slideIndex = 1
	}

	if (n < 1) 
	{
		slideIndex = x.length
	}

	for (i = 0; i < x.length; i++) 
	{
		x[i].style.display = "none";
	}
	
	for (i = 0; i < dots.length; i++)
	{
		dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
	}
	
	x[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " w3-opacity-off";
}