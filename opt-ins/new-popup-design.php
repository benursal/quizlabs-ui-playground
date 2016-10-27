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
								
								<!--<div class="form-group margin-top-20">
									<label class="text-14">Popup Type</label>
									<select class="form-control" name="popup_type">
										<option value="1">Collect Email Addresses</option>
										<option value="2">Call-to-Action Button</option>
									</select>
								</div>-->
								
								<div class="form-group margin-top-20">
									<label class="text-14">Background Color</label>
									<input type="color" value="#ffffff" name="popup_bg_color" class="form-control">
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Headline</label>
									
									<div class="form-group margin-top-0 padding-left-20">
										<label class="text-14 text-light">Content</label>
										<input type="text" class="form-control" name="headline_content" value="Subscribe to our newsletter" placeholder="Subscribe to my newsletter" />
									</div>
									
									<div class="form-group margin-top-0 padding-left-20">
										<label class="text-14 text-light">Font Color</label>
										<input type="color" value="" name="headline_color" class="form-control" value="#333">
									</div>
									
									<!--<div class="form-group margin-top-0 padding-left-20">
										<label class="text-14 text-light">Font Size</label>
										<select class="form-control" name="headline_size">
											<option value="1">Normal</option>
											<option value="2" selected>Large</option>
											<option value="3">Extra Large</option>
										</select>
									</div>-->
									
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Body</label>
									
									<div class="form-group margin-top-0 padding-left-20">
										<label class="text-14 text-light">Content</label>
										<textarea class="form-control" name="body_content" placeholder="content..." rows="3">Enter description here...</textarea>
									</div>
									
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
					
					<div class="row lp-section">
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
<?php include 'footer.php'; ?>