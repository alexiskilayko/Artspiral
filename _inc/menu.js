$( document ).ready(function() {

$('li.has-sub>a').on('click', function(){
		$(this).removeAttr('href');
		var a = $(this).parent('li');
		if (a.hasClass('open')) {
			a.removeClass('open');
			a.find('li').removeClass('open');
			a.find('ul').slideUp();
		}
		else {
			a.addClass('open');
			a.children('ul').slideDown();
			a.siblings('li').children('ul').slideUp();
			a.siblings('li').removeClass('open');
			a.siblings('li').find('li').removeClass('open');
			a.siblings('li').find('ul').slideUp();
		}
	});
});