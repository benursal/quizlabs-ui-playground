<?php include 'header.php'; ?>

<div class="ibox float-e-margins">
	<div class="padding-20">
		<h3 class="text-24">New Popup Opt-in</h3>
		<hr />
		
		<ul class="nav nav-pills nav-secondary">
			<li><a href="new-popup.php">Setup</a></li>
			<li class="active"><a href="new-popup-design.php">Design</a></li>
			<li><a href="new-popup-display-rules.php">Display Settings</a></li>
		</ul>
		
		<form method="post" action="preview.php" data-form-processed="true" target="_blank" class="margin-top-40">
			<div class="row">
				<div class="col-md-5">
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">General</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								
								<div class="form-group margin-top-20">
									<label class="text-14">Popup Type</label>
									<select class="form-control" name="popup_type">
										<option value="1">Quiz-based Opt-in</option>
										<option value="2">Simple Opt-in</option>
									</select>
								</div>
								
								<div class="form-group margin-top-20 quiz-only-fields">
									<label class="text-14">Quiz to Use</label>
									<select class="form-control" name="quiz" id="quizName">
										<option value="0">[ Select Quiz ]</option>
										<option value="1">Are you an Entrepreneur?</option>
										<option value="2">Find out if you are ready for a Rich Life</option>
										<option value="3">How organized are you as a small business owner</option>
										<option value="4">Quiz N</option>
									</select>
								</div>
								
								<div class="form-group margin-top-20 quiz-only-fields">
									<label class="text-14">Use Title and Description of Quiz</label>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										
										<label class="text-14 text-light">
											<input type="checkbox" value="1" name="use_quiz_title" checked /> Yes
										</label>
										
									</div>
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Headline</label>
									
									<div class="form-group margin-top-0 padding-left-20">
										<label class="text-14 text-light">Content</label>
										<input type="text" class="form-control" name="headline_content" value="Take this short quiz!" placeholder="Take this short quiz!" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20">
										<label class="text-14 text-light">Font Color</label>
										<input type="color" value="" name="headline_color" class="form-control" value="#333">
									</div>
									
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Body</label>
									
									<div class="form-group margin-top-0 padding-left-20">
										<label class="text-14 text-light">Content</label>
										<textarea class="form-control" name="body_content" placeholder="content..." rows="3">Enter description here...</textarea>
									</div>
									
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Body Background Color</label>
									<input type="color" value="#ffffff" name="popup_bg_color" class="form-control">
								</div>
								
								
							</div>
						</div>
					</div>
					
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Image Settings</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								
								<div class="form-group margin-top-20">
									<label class="text-14">Image URL</label>
									<input type="text" name="image_url" class="form-control" placeholder="http://" value="http://localhost/quizlabs/opt-ins/preview/ebook.png" />
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Position</label>
									<select class="form-control" name="image_alignment">
										<option value="left">Image on Left of Text</option>
										<option value="right">Image on Right of Text</option>
										<!--<option value="top">Image on Top of Text</option>
										<option value="bottom">Image Below Text</option>-->
									</select>
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Position from the top</label>
									<div class="input-group"> 
										<input type="number" class="form-control" name="image_margin_top" placeholder="30" value="30" /> 
										<div class="input-group-addon">pixels</div> 
									</div>
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="row lp-section" id="quizSettings">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Quiz Settings</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								
								<div class="form-group margin-top-20">
									<label class="text-14">Select Quiz to Use</label>
									<select class="form-control" name="quiz">
										<option value="1">Are you an Entrepreneur?</option>
										<option value="2">Find out if you are ready for a Rich Life</option>
										<option value="3">How organized are you as a small business owner</option>
										<option value="4">Quiz N</option>
									</select>
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Background Color</label>
									<input type="color" value="#0e76bc" name="optin_bg_color" class="form-control">
								</div>
								
								<div class="form-group margin-top-20 cta_1_item">
									<label class="text-14">Call-to-action Button</label>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">Text</label>
										<input type="text" class="form-control" name="cta_button_text" placeholder="Take Quiz!" value="Take Quiz!" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">Button Background Color</label>
										<input type="color" value="#e78a1b" class="form-control" name="cta_button_bg_color" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">Button Text Color</label>
										<input type="color" value="#ffffff" class="form-control" name="cta_button_text_color" />
									</div>
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Opt-in Fields</label>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										
										<label class="text-14 text-light">
											<input type="checkbox" value="1" name="field_name" checked /> Name
										</label><br />
										
										<label class="text-14 text-light">
											<input type="checkbox" value="1" name="field_email" checked disabled /> Email Address
										</label><br />
										
										<label class="text-14 text-light">
											<input type="checkbox" value="1" name="field_phone_num" checked /> Phone #
										</label><br />
										<label class="text-14 text-light">
											<input type="checkbox" value="1" name="field_company_name" checked /> Company Name
										</label>
										
									</div>
									
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="row lp-section" id="optinFormSettings">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Opt-in Form</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								
								<div class="form-group margin-top-20 cta_1_item">
									<label class="text-14">Fields</label>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">
											<input type="checkbox" value="1" name="field_name" checked /> Name
										</label><br />
										
										<label class="text-14 text-light">
											<input type="checkbox" value="1" name="field_email" checked disabled /> Email Address
										</label>
									</div>
									
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Background Color</label>
									<input type="color" value="#0e76bc" name="optin_bg_color" class="form-control">
								</div>
								
								<div class="form-group margin-top-20 cta_1_item">
									<label class="text-14">Call-to-action Button</label>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">Text</label>
										<input type="text" class="form-control" name="cta_button_text" placeholder="Subscribe Now!" value="Subscribe Now!" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">Button Background Color</label>
										<input type="color" value="#e78a1b" class="form-control" name="cta_button_bg_color" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">Button Text Color</label>
										<input type="color" value="#ffffff" class="form-control" name="cta_button_text_color" />
									</div>
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">
										Disclaimer Text <span class="text-italic text-14 text-light">No message will appear if left blank</span>
									</label>
									<textarea class="form-control" name="disclaimer_content" placeholder="disclaimer text..." rows="2">Disclaimer text here...</textarea>
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Success Screen</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								
								<div class="form-group margin-top-20">
									<label class="text-14">Success Headline</label>
									
									<div class="form-group margin-top-0 padding-left-20">
										<label class="text-14 text-light">Content</label>
										<input type="text" class="form-control" name="success_headline_content" placeholder="Thank you for subscribing to our newsletter" value="Thank you for subscribing to our newsletter" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20">
										<label class="text-14 text-light">Font Color</label>
										<input type="color" value="" name="success_headline_color" class="form-control" value="#333" />
									</div>
									
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Message</label>
									<textarea class="form-control" name="success_body_content" placeholder="enter your message here..." rows="3">Enter message here...</textarea>
								</div>
								
								<div class="form-group margin-top-20 cta_1_item">
									<label class="text-14">Success Button</label>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">Text</label>
										<input type="text" class="form-control" name="success_button_text" placeholder="Got It!" value="Got It!" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">
											URL <span class="text-italic text-14 text-light">(Will close the popup if left blank)</span>
										</label>
										<input type="text" class="form-control" name="success_button_url" placeholder="http://" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">Button Background Color</label>
										<input type="color" value="#f7941d" class="form-control" name="success_button_bg_color" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20 cta_1_item">
										<label class="text-14 text-light">Button Text Color</label>
										<input type="color" value="#ffffff" class="form-control" name="success_button_text_color" />
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
					
					<p class="margin-top-20 text-right">
						<a href="index.php" class="btn btn-default">
							<i class="fa fa-ban" aria-hidden="true"></i> Cancel
						</a> 
						<a href="new-popup-display-rules.php" class="btn btn-primary">
							<b>Next:</b> Display Rules <i class="fa fa-chevron-right" aria-hidden="true"></i> 
						</a> 
					</p>
				</div>
				<div class="col-md-7 text-center preview-column">
				
					<div class="ben-preview-panel" data-spy="affix" data-offset-top="300">
						<nav aria-label="...">
							<ul class="pager" id="preview_screen">
								<li><a href="javascript:void(0)" class="active">Opt-in</a></li>
								<li><a href="javascript:void(0)">Success</a></li>
							</ul>
						</nav>
						
						<div class="iframe-container">
							<iframe src="preview/landing-page.php" id="iframePreview"></iframe>
						</div>
						
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script>
var default_quiz_headline = 'Take this short quiz!';
var default_simple_headline = 'Subscribe to Our Newsletter!';

var default_body = 'Enter description here...';

var default_quiz_cta_text = 'Take Quiz!';
var default_simple_cta_text = 'Subscribe Now!';


var quiz_titles = [
	'',
	'Are you an Entrepreneur?',
	'Find out if you are ready for a Rich Life?',
	'How organized are you as a small business owner',
	'Quiz N'
];

var quiz_descriptions = [
	"",
	"Find out if you are truly made to be an entrepreneur or you are just a <b>Wantrepreneur</b>.", 
	"Want to be rich?  Everybody does.  But the question is, <b>are you ready for it?</b>  This short quiz will reveal to you if you have what it takes to be rich.", 
	"Imagine a perfect day:<ul><li>You finish all tasks on time.</li><li>you have more time to spend with your family.</li><li>you get more done in less time.</li></ul>",
	"Enter description..."
];
</script>
<?php include 'footer.php'; ?>