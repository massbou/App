$(document).ready(function (){

	$('#model li').click(function(){

		var text= $(this).children('div');

		if(text.is(':hidden')){
				text.slideDown('500');
				$(this).children('span').html('-');
		}
		else {
					text.slideUp('500');
					$(this).children('span').html('+');
				}
	});
});