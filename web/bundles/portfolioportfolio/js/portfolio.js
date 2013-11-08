$(function (){			
	$("[rel='tooltip']").tooltip();		
	$('#slides').slidesjs({				
		width: 940,				
		height: 400,				
		navigation: false			
	});							
	$(".slider_img").each(function( i ) {	
		var height = $(this).height();			
		var diff =  (parseInt(height) / 4);		
		if (height>400){					
			$(this).css('top', ('-' + diff + 'px'));	
		}	
	});			
	/*$('#home').click(function() {	
		$("#page_studies, #page_contact, #page_projects").css('display', 'none');
		$("#page_home").css('display', 'block');					
		$("#projects, #contact, #studies").css('border-bottom', 'none' );	
		$("#home").css('border-bottom', '1px solid #6E6E6E');
		return false;
	});		
	$('#studies').click(function() {				
		$("#page_home, #page_projects, #page_contact").css('display', 'none');	
		$("#page_studies").css('display', 'block');				
		$("#projects, #home, #contact").css('border-bottom', 'none' );			
		$("#studies").css('border-bottom', '1px solid #6E6E6E');		
		return false;		
	});		
	$('#projects').click(function() {				
		$("#page_studies, #page_contact, #page_home").css('display', 'none');	
		$("#page_projects").css('display', 'block');				
		$("#studies, #contact, #home").css('border-bottom', 'none' );		
		$("#projects").css('border-bottom', '1px solid #6E6E6E');	
		return false;
	});		
	$('#contact').click(function() {
		$("#page_home, #page_projects, #page_studies").css('display', 'none');	
		$("#page_contact").css('display', 'block');					
		$("#projects, #studies, #home").css('border-bottom', 'none' );	
		$("#contact").css('border-bottom', '1px solid #6E6E6E');	
		return false;
	});	*/		
}); 		