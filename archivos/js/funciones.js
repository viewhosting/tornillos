$(document).ready(function(){
	var target = null;
	$('.imagen_thumb').hover(function(e){
		target = $(this);
		$(target[0].firstElementChild).fadeIn(200);
		//alert("holas");
		//document.getElementById("bur").style.webkitFilter = "blur(6px)";
		//$('bur').css("blur", "60px");
	}, function(){
		$(target[0].firstElementChild).fadeOut(200);
		//document.getElementById("bur").style.webkitFilter = "blur(0px)";
		});
		
	
   
});