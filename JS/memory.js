$(document).ready(function(){
	$(".pic").mouseenter(function(){
		$(this).next(".cap").next(".bubble").animate({opacity: "1"});
		$(this).next(".cap").animate({opacity: "1"});
	});
	$(".pic").mouseleave(function(){
		$(this).next(".cap").next(".bubble").animate({opacity: "0"});
		$(this).next(".cap").animate({opacity: "0"});
	});
});