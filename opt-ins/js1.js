var iframe;

$(document).ready(function(){
	
	// assign
	iframe = $('#iframePreview').contents();
	//iframe2 = $('#iframePreview2').contents();
	
	//$('.iframe-container:eq(1)').hide();
	
	$('#simple_preview_screen li a:eq(0)').click(function(){
		iframe.find('#popup_success').hide();
		iframe.find('#popup_optin').show();
		
		$(this).addClass('active');
		$('#simple_preview_screen li a:eq(1)').removeClass('active');
	});
	
	$('#simple_preview_screen li a:eq(1)').click(function(){
		iframe.find('#popup_success').show();
		iframe.find('#popup_optin').hide();
		
		$(this).addClass('active');
		$('#simple_preview_screen li a:eq(0)').removeClass('active');
	});
	
	
	// Quiz Preview Screen
	$('#quiz_preview_screen li a:eq(0)').click(function(){
		
		iframe.find('.quiz-optin').hide();
		iframe.find('.quiz-optin:eq(0)').show();
		
		$('#quiz_preview_screen li a').removeClass('active');
		$(this).addClass('active');
	});
	
	$('#quiz_preview_screen li a:eq(1)').click(function(){
		
		iframe.find('.quiz-optin').hide();
		iframe.find('.quiz-optin:eq(1)').show();
		
		$('#quiz_preview_screen li a').removeClass('active');
		$(this).addClass('active');
	});
	
	$('#quiz_preview_screen li a:eq(2)').click(function(){
		
		iframe.find('.quiz-optin').hide();
		iframe.find('.quiz-optin:eq(2)').show();
		
		$('#quiz_preview_screen li a').removeClass('active');
		$(this).addClass('active');
	});
	
	$('#quiz_preview_screen li a:eq(3)').click(function(){
		
		iframe.find('.quiz-optin').hide();
		iframe.find('.quiz-optin:eq(3)').show();
		
		$('#quiz_preview_screen li a').removeClass('active');
		$(this).addClass('active');
	});
	
	//$('input[type="color"]').prop('defaultValue', '#ffffff');
	
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
	
	// froala
	$('textarea[name="body_content"], textarea[name="optin_body_content"]').froalaEditor({
		heightMin: 150,
		heightMax: 200,
		toolbarButtons: [
			'bold', 'italic', 'underline','formatUL', 'insertLink', 'undo', 'redo'
		]
    });
	// off
	//$('textarea[name="body_content"]').froalaEditor('edit.off');
	
	/*
	$('textarea.content').froalaEditor({
		heightMin: 400,
		heightMax: 600
    });
	
	$('textarea.testimonial').froalaEditor({
		heightMin: 200,
		heightMax: 400
    });*/
	
	
	// edit
	
	
	$('select[name="popup_type"]').change(function(){
		
		iframe.find('#popup_success, .quiz-optin').hide();
		iframe.find('#popup_optin').show();
		
		if( this.value == 1 ) // if it is 1 (or Quiz-based)
		{
			iframe.find('#quizButtonContainer').show();
			iframe.find('#optinFormContainer').hide();
			
			$('#quizSettings').show();
			$('#optinFormSettings').hide();
			
			// show quiz only fields
			$('.quiz-only-fields').show();
			
			show_quiz_content();
			
			$('#quiz_preview_screen').show();
			$('#simple_preview_screen').hide();
			
			
			$('#quiz_preview_screen li a:eq(0)').trigger('click');
		}
		else
		{
			iframe.find('#quizButtonContainer').hide();
			iframe.find('#optinFormContainer').show();
			
			$('#quizSettings').hide();
			$('#optinFormSettings').show();
			
			// hide quiz only fields
			$('.quiz-only-fields').hide();
			
			// default opt-in headline
			$('input[name="headline_content"]').val( default_simple_headline );
			iframe.find('#headline_content').text( default_simple_headline );
			
			
			$('#simple_preview_screen').show();
			$('#quiz_preview_screen').hide();
			
			$('#simple_preview_screen li a:eq(0)').trigger('click');
		}
		
	});
	
	
	$('select[name="quiz"]').change(function(){
		
		var val = parseInt( this.value );
		
		if( this.value != '' && $('input[name="use_quiz_title"]').is(':checked') ) // Quiz
		{
			// set headline
			$('input[name="headline_content"]').val( quiz_titles[val] );
			iframe.find('#headline_content').html( quiz_titles[val] );
			
			iframe.find('#body_content').html( $.parseHTML(quiz_descriptions[val]) );
			$('textarea[name="body_content"]').froalaEditor('html.set', quiz_descriptions[val]);
			
		}
		else
		{
			$('input[name="headline_content"]').val( default_quiz_headline );
			iframe.find('#headline_content').text( default_quiz_headline );
			
			$('textarea[name="body_content"]').froalaEditor('html.set', default_body);
			iframe.find('#body_content').html( default_body );
			
			
		}
	});
		
	
	$('input[name="popup_bg_color"]').change(function(){
		iframe.find('#popupOptIn').css( 'background-color', this.value );
	});
	
	$('input[name="headline_content"]').keyup(function(e){
		iframe.find('#headline_content').text( this.value );
	});
	
	$('input[name="headline_color"]').change(function(){
		iframe.find('#headline_content').css( 'color', this.value );
	});
	
	///$(document).on('keyup', 'textarea[name="body_content"]', function(e){
	
		
	$('textarea[name="body_content"]').froalaEditor('events.on', 'keyup', function (e) { 
		
		iframe.find('#body_content').html( $('textarea[name="body_content"]').froalaEditor('html.get'));
		iframe.find('#column_text').find('ul').addClass('imaged-list margin-bottom-10');
		
	}, true);
	
	$('textarea[name="body_content"]').on('froalaEditor.commands.after', function (e, editor, cmd, param1, param2) {
		
		iframe.find('#body_content').html( $('textarea[name="body_content"]').froalaEditor('html.get'));
		iframe.find('#column_text').find('ul').addClass('imaged-list margin-bottom-10');
		
    });
	
	
	$('textarea[name="optin_body_content"]').froalaEditor('events.on', 'keyup', function (e) { 
		iframe.find('#optin_body_content').html( $('textarea[name="optin_body_content"]').froalaEditor('html.get'));
	}, true);
	
	$('textarea[name="optin_body_content"]').on('froalaEditor.commands.after', function (e, editor, cmd, param1, param2) {
		iframe.find('#optin_body_content').html( $('textarea[name="optin_body_content"]').froalaEditor('html.get'));
    });
	
	//});
	
	//$('textarea[name="optin_body_content"]').froalaEditor('html.set', quiz_descriptions[val]);
	
	$('input[name="body_color"]').change(function(){
		iframe.find('#body_content').css( 'color', this.value );
	});
	
	$('input[name="image_url"]').keyup(function(e){
		iframe.find('#popup_image').attr( 'src', this.value );
	});
	
	$('select[name="image_alignment"]').change(function(){
		//iframe.find('#headline_content').css( 'color', this.value );
		
		var col_image = iframe.find('#column_image').prop('outerHTML');
		var col_text = iframe.find('#column_text').prop('outerHTML');
		
		if( this.value == 'left' )
		{
			iframe.find('#popupOptIn .optin-body').html(col_image + col_text);		
			
			// add offset on text column
			iframe.find('#column_text').addClass('col-md-offset-1');
			// remove offset from image column
			iframe.find('#column_image').removeClass('col-md-offset-1');
		}
		else if( this.value == 'right' )
		{
			iframe.find('#popupOptIn .optin-body').html(col_text + col_image);
		
			// remove offset on text column
			iframe.find('#column_text').removeClass('col-md-offset-1');
			// add offset from image column
			//iframe.find('#column_image').addClass('col-md-offset-1');
		}
		
	});
	
	$('input[name="border_color"]').change(function(){
		iframe.find('.optin-form-controls').css( 'background-color', this.value );
		iframe.find('#popupOptIn').css( 'border-color', this.value );
	});
	
	$('input[name="use_quiz_title"]').click(function(){
		show_quiz_content();
	});
	
	$('input[name="field_name"]').click(function(){
		
		if( $(this).is(':checked') ) // if checked
		{
			iframe.find('#field_column_name').show();
			iframe.find('#field_column_email').attr('class', 'col-md-4');
		}
		else
		{
			iframe.find('#field_column_name').hide();
			iframe.find('#field_column_email').attr('class', 'col-md-6 col-md-offset-1');
		}
		
	});
	
	$('input[name="a_field"]').click(function(){
		
		// name
		if( this.id == 'fd_name' )
		{
			if( $(this).is(':checked') )
			{
				iframe.find('#optin_name').show();
			}
			else
			{
				iframe.find('#optin_name').hide();
			}
		}
		
		// phone number
		if( this.id == 'fd_phone' )
		{
			if( $(this).is(':checked') )
			{
				iframe.find('#optin_phone_number').show();
			}
			else
			{
				iframe.find('#optin_phone_number').hide();
			}
		}
		
		// company name
		if( this.id == 'fd_company' )
		{
			if( $(this).is(':checked') )
			{
				iframe.find('#optin_company_name').show();
			}
			else
			{
				iframe.find('#optin_company_name').hide();
			}
		}
	});
	
	$('input[name="image_margin_top"]').keyup(function(e){
		iframe.find('#popup_image').removeClass('margin-top-30');
		iframe.find('#popup_image').css('margin-top', this.value + "px");
	});
	
	$('input[name="image_margin_top"]').change(function(){
		iframe.find('#popup_image').removeClass('margin-top-30');
		iframe.find('#popup_image').css('margin-top', this.value + "px");
	});
	
	$('textarea[name="disclaimer_content"]').keyup(function(e){
		
		iframe.find('#disclaimer_content').text( this.value );
		
		if( this.value != '' )
		{
			
			iframe.find('#disclaimer_content').show();
		}
		else
		{
			iframe.find('#disclaimer_content').hide();
		}
	});
	
	$('input[name="quiz_cta_button_text"]').keyup(function(e){
		iframe.find('#quiz_cta_button').text( this.value );
	});
	
	$('input[name="quiz_cta_button_bg_color"]').change(function(){
		iframe.find('#quiz_cta_button').css( 'background-color', this.value );
	});
	
	$('input[name="quiz_cta_button_text_color"]').change(function(){
		iframe.find('#quiz_cta_button').css( 'color', this.value );
	});
	
	
	$('input[name="cta_button_text"]').keyup(function(e){
		iframe.find('#cta_button').text( this.value );
	});
	
	$('input[name="cta_button_bg_color"]').change(function(){
		iframe.find('#cta_button').css( 'background-color', this.value );
	});
	
	$('input[name="cta_button_text_color"]').change(function(){
		//alert(this.value);
		iframe.find('#cta_button').css( 'color', this.value );
	});
	
	
	$('input[name="optin_headline_content"]').keyup(function(e){
		iframe.find('#optin_headline_content').text( this.value );
	});
	
	$('input[name="optin_headline_color"]').change(function(){
		iframe.find('#optin_headline_content').css( 'color', this.value );
	});
	
	
	$('input[name="success_headline_content"]').keyup(function(e){
		iframe.find('#success_headline_content').text( this.value );
	});
	
	$('input[name="success_headline_color"]').change(function(){
		iframe.find('#success_headline_content').css( 'color', this.value );
	});
	
	
	$('textarea[name="success_body_content"]').keyup(function(e){
		
		iframe.find('#success_body_content').text( this.value );
		
	});
	
	$('input[name="success_button_text"]').keyup(function(e){
		iframe.find('#success_button').text( this.value );
	});
	
	$('input[name="success_button_bg_color"]').change(function(){
		iframe.find('#success_button').css( 'background-color', this.value );
	});
	
	$('input[name="success_button_text_color"]').change(function(){
		iframe.find('#success_button').css( 'color', this.value );
	});
});

function show_quiz_content()
{
	var val = parseInt( $('select[name="quiz"]').val() );
		
	if( $('input[name="use_quiz_title"]').is(':checked') ) // if checked
	{
		// set headline
		$('input[name="headline_content"]').val( quiz_titles[val] );
		iframe.find('#headline_content').text( quiz_titles[val] );
		
		// body
		iframe.find('#body_content').html( $.parseHTML(quiz_descriptions[val]) );
		$('textarea[name="body_content"]').froalaEditor('html.set', quiz_descriptions[val]);
		
		
		//$('input[name="headline_content"]').attr('disabled', true);
		//$('textarea[name="body_content"]').froalaEditor('edit.off');
		
	}
	else
	{
		
		$('input[name="headline_content"]').val( default_quiz_headline );
		iframe.find('#headline_content').text( default_quiz_headline );
		
		$('textarea[name="body_content"]').froalaEditor('html.set', default_body);
		iframe.find('#body_content').html( default_body );
		
		//$('input[name="headline_content"]').attr('disabled', false);
		//$('textarea[name="body_content"]').froalaEditor('edit.on');
	}
	
}