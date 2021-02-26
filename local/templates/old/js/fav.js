$(document).ready(function(){
$('.add-to-fav-btn').click(function()
	{
		var this_id = $(this).attr('id');
		
		
		
		if($(this).hasClass('in-fav')) {
		$(this).removeClass('in-fav');
			
			$('#'+this_id).text('В избранное');
			
		} else {
			$(this).addClass('in-fav');
			$('#'+this_id).html('<span style="font-size:80%">Удалить из избранного</span>');
			
			
			
		}
		var data = {id: this_id};
		$.get( "/fav.php", data);
    
	});
});