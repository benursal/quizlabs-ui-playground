$(document).ready(function(){
	
	$('input[type="color"]').prop('defaultValue', '#ffffff');
	
	$(document).on('click', '#btnNewShowRule', function(e){
		
		var html =	'<tr>' + 
						'<td>' + 
							'<select class="form-control" name="show_url_match">' + 
								'<option value="exact">Exact Match</option>' + 
								'<option value="beginning">Begins With</option>' + 
								'<option value="containing">Containing</option>' + 
							'</select>' + 
						'</td>' + 
						'<td>' + 
							'<input type="text" class="form-control" name="show_rule_url[]" placeholder="/example" />' + 
						'</td>' + 
						'<td class="text-center padding-top-10">' + 
							'<a href="javascript:void(0)" class="button-remove-show-rule text-red text-20">' + 
								'<i class="fa fa-minus-circle" aria-hidden="true"></i>' + 
							'</a>' + 
						'</td>' + 
					'</tr>';
					
		$('.table-show-rules').find('tbody').append( html );

	});
	
	$(document).on('click', '#btnNewHideRule', function(e){
		
		var html =	'<tr>' + 
						'<td>' + 
							'<select class="form-control" name="hide_url_match">' + 
								'<option value="exact">Exact Match</option>' + 
								'<option value="beginning">Begins With</option>' + 
								'<option value="containing">Containing</option>' + 
							'</select>' + 
						'</td>' + 
						'<td>' + 
							'<input type="text" class="form-control" name="show_rule_url[]" placeholder="/example" />' + 
						'</td>' + 
						'<td class="text-center padding-top-10">' + 
							'<a href="javascript:void(0)" class="button-remove-hide-rule text-red text-20">' + 
								'<i class="fa fa-minus-circle" aria-hidden="true"></i>' + 
							'</a>' + 
						'</td>' + 
					'</tr>';
					
		$('.table-hide-rules').find('tbody').append( html );

	});
	
	$(document).on('click', '.button-remove-show-rule, .button-remove-hide-rule', function(e){
		$(this).parent().parent().remove();
	});
	
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
		$('input[name="hero_layout"]').val( this.id );
		
		if( this.id == 1 )
		{
			$('#hero_image_video_group').hide();
		}
		else
		{
			$('#hero_image_video_group').show();
		}
	});
	
	$('select[name="email_service_provider"]').change(function(){
		
		if( this.value != '' )
		{
			$('#btnConnectToEmail').show();
			$('#eprovider').text( $(this).find('option:selected').text() );
		}
		else
		{
			$('#btnConnectToEmail').hide();
		}
	});
	
	$('select[name="body_layout"]').change(function(){
		
		if( this.value == 1 )
		{
			$('#column_2_content').hide();
			$('#column_3_content').hide();
		}
		else if( this.value == 2 )
		{
			$('#column_2_content').show();
			$('#column_3_content').hide();
		}
		else if( this.value == 3 )
		{
			$('#column_2_content').show();
			$('#column_3_content').show();
		}
	});
	
	$('select[name="cta_1_type"]').change(function(){
		if( this.value == 'cta_button' )
		{
			$('.cta_1_item').show();
			$('#cta_1_if_optin').hide();
		}
		else if( this.value == 'optin_form' )
		{
			$('.cta_1_item').hide();
			$('#cta_1_if_optin').show();
		}
	});
	
	$('select[name="cta_2_type"]').change(function(){
		if( this.value == 'cta_button' )
		{
			$('.cta_2_item').show();
			$('#cta_2_if_optin').hide();
		}
		else if( this.value == 'optin_form' )
		{
			$('.cta_2_item').hide();
			$('#cta_2_if_optin').show();
		}
	});
	
	// froala
	$('textarea[name="header_top_right_content"]').froalaEditor({
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
	
	$('textarea.testimonial').froalaEditor({
		heightMin: 200,
		heightMax: 400
    });
});