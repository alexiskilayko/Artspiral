$( document ).ready(function() {

$('.has-sub>a').on('click', function(){
		$(this).removeAttr('href');
		var a = $(this).parent('li');
        a.children('ul').slideToggle();
        a.siblings('.has-sub').children('ul').slideUp();    
	});
});