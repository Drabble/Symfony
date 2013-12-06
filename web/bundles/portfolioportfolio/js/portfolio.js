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
	$("textarea").each(function(){
		$(this).val("");
		$(this).addClass("form-control");
		$(this).attr("rows","6");
		$(this).attr("placeholder","Add a comment");
	});
	$(".form input").each(function(){
		$(this).addClass("form-control");
		$(this).attr("placeholder","Add a comment");
	});
	$(".comment-group").hide();
	$(".comment-group").first().show();
	if($(".comment-group").length > 1) {
		$("#show_comment").append("<a id='comment_btn' href='#'><div class='row'><ul>Show more comments</ul></div></a>");
	}
	
	$(".comment-group").each(function(){
		if($(this).css('display') == "none"){
			$(this).show();
			if($(this).next().attr('class') != "comment-group"){
				$('#comment_btn').replaceWith("<div class='row'><ul></ul></div>");
			}	
			return false;
		}
		return false;
	});
	$("#comment_btn").on( "click", function() {
		$(".comment-group").each(function(){
			if($(this).css('display') == "none"){
				$(this).show();
				if($(this).next().attr('class') != "comment-group"){
					$('#comment_btn').replaceWith("<div class='row'><ul></ul></div>");
				}	
				return false;
			}
		});
		return false;
	});
	if($(".article-group").length > 1) {
		$('.pagination').append("<li><a href='#' class='last'>&laquo;</a></li>");
		$(".article-group").each(function(i){
			$('.pagination').append("<li><a class='page page" + i + "' name='" + i + "' href='#'>" + ( i + 1) + "</a></li>");
		});
		$('.pagination').append("<li><a href='#' class='next'>&raquo;</a></li>");
	}
	$(".article-group").hide();
	$("#0").show();
	$(".page0").parent().addClass("active");
	$(".pagination li .page").on( "click", function() {
	$(".article-group").hide();
	$(".pagination li").removeClass("active");
	$(".page" + $(this).attr('name')).parent().addClass("active");
	$("#" + $(this).attr('name')).show();
	});
	$(".next").on( "click", function() {
		var id = parseInt($(".pagination .active a").attr('name')) + 1 ;
		if(id<$(".article-group").length){
			$(".article-group").hide();
			$(".pagination li").removeClass("active");
			$(".page" + id).parent().addClass("active");
			$("#" + id).show();
			return;
		}
		return false;
	});
	$(".last").on( "click", function() {
		var id = parseInt($(".pagination .active a").attr('name')) - 1 ;
		if(id>=0){
			$(".article-group").hide();
			$(".pagination li").removeClass("active");
			$(".page" + id).parent().addClass("active");
			$(".page" + id).parent().addClass("active");
			$("#" + id).show();
			return;
		}
		return false;
	});
	
	
	$('#article_image figcaption').css('width', $('#article_image img').width());
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