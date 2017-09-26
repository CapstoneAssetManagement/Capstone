// JavaScript Document
function tableHighlight(){
	   $('#table').on('click', 'tr', function(event) {
		  if($('#table').hasClass('active')){
			$(this).removeClass('highlight'); 
		  } else {					  
			  $(this).addClass('highlight').siblings().removeClass('highlight');
		  }
	    
		});
   }