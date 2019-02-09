var simpleSlides = function() 
{
	// Declare variables.
    var slides = document.querySelectorAll(".slides");
	
    for (var i = 0; i < slides.length; i++) 
	{
      slides[i].setAttribute("style","display:none");
    }
	
    count++;
    if (count > slides.length) 
	{ 
		count = 1; 
	}
	
    slides[count - 1].setAttribute("style","display:block");
    setTimeout(simpleSlides, 1200);
}

var count = 0;
simpleSlides();