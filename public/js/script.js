$( document ).ready(function() {
	$('.new_photo_wrapper').hide();

    $('#delete_current_photo').click(function(){
    	$('.current_photo_wrapper').slideUp();
    	$('.new_photo_wrapper').slideDown();
    });

    $('#cancel_new_photo').click(function(){
    	$('.current_photo_wrapper').slideDown();
    	$('.new_photo_wrapper').slideUp();
    });
});