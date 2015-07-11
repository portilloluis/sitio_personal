$( document ).ready(function() {
	$("#mensaje").val("");
    var $container = $('.center');
	$container.isotope({
		itemSelector: '.item',
		layoutMode: 'fitRows'
	});
	
	$("#menuExpand").click(function() {
  		$("#menuNav").toggle("slow");
	});

	$(".grey").on("mouseover",function(){
		var titulo = $(this).find("h2");
		titulo.css("color","#222");
	});

	$(".grey").on("mouseout",function(){
		var titulo = $(this).find("h2");
		titulo.css("color","#747273");
	});

});

