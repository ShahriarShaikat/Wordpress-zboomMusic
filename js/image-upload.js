jQuery(document).ready(function(){
	jQuery('.checkbox_showup').hide();
	jQuery('.checkbox_showup').on('click',function(){
		jQuery('.checkbox_showup label').hide();
		jQuery('.checkbox_showup input').hide();
	});
	jQuery('button.uploadimagee').on('click',function(){

		tb_show('','media-upload.php?post_id=178&type=image&TB_iframe=1');
		window.send_to_editor = function(html){
		jQuery('.checkbox_showup').show();
		var valueupd = jQuery('img' , html).attr('src');
		jQuery('.inserimage').val(valueupd);
		jQuery(".uploadedimage").html('<img src="'+valueupd+'" height="100px" width="100px">');
		tb_remove();
	}
		
     return false;
	});

	

	
})