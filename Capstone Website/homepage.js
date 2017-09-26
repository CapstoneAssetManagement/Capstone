

function allTogetherNow(){
	
	$('#glyphicon-chevron-left').toggle(
		"use strict";
		openNav();
		closeNav();

			function openNav(){
				document.getElementById("menu-container").css('left', '0')

				document.getElementById("body-container").css('left', '0');

				document.getElementById("top-navbar").style.marginLeft="300.5px";

	//			$('.top-menu-items').onclick(function() {
	//				  					  
	//				$(this).find('i').toggleClass('glyphicon-chevron-right').toggleClass('glyphicon-chevron-left');
	//				
	//			});  
			},	function closeNav(){
					document.getElementById("menu-container").style.width="100px";

					document.getElementById("body-container").style.marginLeft="0px";

					document.getElementById("active").style.width="0px";

					document.getElementById("bottom-navbar").style.width="0px";

					document.getElementById("top-navbar").style.marginLeft="50px";

					document.getElementById("sidebar-nav").style.width="0px";
	//				  $('.top-menu-items').onclick(function() {
	//
	//					$(this).find('i').toggleClass('glyphicon-chevron-left').toggleClass('glyphicon-chevron-right');
	//				});  

				}  
		)
}