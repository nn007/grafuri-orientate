$(document).ready(function(){
	
	$("#toTopButton").css("display","none");

	window.onscroll= function(){
		const $window = $(window).scrollTop();
		if($window> 100){
			$("#toTopButton").css("display","block");
		}
		else{
			
			$("#toTopButton").css("display","none");
		}
	}
	function scroll(){
		$("#toTopButton").on("click",function(){
		$("html, body").animate({scrollTop: $(".nav").offset().top});
		});
	}
	scroll();

	$("#toTeorie").on("click",function(e){
		e.preventDefault();
		$("html, body").animate({scrollTop: $("#teorie").offset().top});

	});
	$("#toVideo").on("click",function(e){
		e.preventDefault();
		$("html, body").animate({scrollTop: $("#video").offset().top});

	});



	
	
});


