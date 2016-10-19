$(document).ready(function(){
	$('.lp-section-title').click(function(){
		var section = $(this).parent().parent();
		
		if( section.find('.lp-section-inside').hasClass('hidden') )
		{
			section.find('.lp-section-inside').removeClass('hidden');
			$(this).find('h3:eq(0)').html('<i class="fa fa-chevron-circle-up" aria-hidden="true"></i>');
		}
		else
		{
			section.find('.lp-section-inside').addClass('hidden');
			$(this).find('h3:eq(0)').html('<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>');
		}
	});
	
	$('.img-layout').click(function(){
		$('.img-layout').removeClass('selected');
		$(this).addClass('selected');
	});
	
	$('select[name="body_layout"]').change(function(){
		alert( this.value );
	});
	
	// froala
	$('textarea[name="header_menu_links"]').froalaEditor({
		heightMin: 150,
		heightMax: 200,
		toolbarButtons: [
			'bold', 'italic', 'underline','formatUL', 'insertLink', 'undo', 'redo'
		]
    });
	
	$('textarea.content').froalaEditor({
		heightMin: 400,
		heightMax: 600
    });
});