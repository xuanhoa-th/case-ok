$(document).ready(function(){
	$.('.motmon').click(function(e){
		var url = $(this).attr('href');
		alert(url);
	});
});