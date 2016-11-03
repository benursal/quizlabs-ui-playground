<!-- simple popup -->
<div class="overlay popup-overlay">
	<div class="overlay-content">
		
		<div class="row">
			<div class="col-md-8 col-md-offset-2 opt-in popup-opt-in" id="popupOptIn">
				<div class="optin-close">
					<a href="#" class="text-18"><i class="ion-close"></i></a>
				</div>
				
				<div class="quiz-optin" id="popup_optin">
					<div class="row optin-body">
						<div class="col-md-3" id="column_image">
							<img src="img/ebook.png" class="img-responsive margin-top-30" id="popup_image" />
						</div>
						<div class="col-md-8 col-md-offset-1 text-left" id="column_text">
							<h1 class="text-large text-bold" id="headline_content">Take this short quiz!</h1>
							<div class="text-16 margin-top-40" id="body_content">
								Enter description here...
							</div>
						</div>
					</div>
					
					<div class="row optin-form-controls margin-top-10" id="quizButtonContainer">
						
						<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
							<button type="submit" class="btn btn-default btn-block btn-cta btn-orange" id="cta_button">Take Quiz!</button>
						</div>
						
					</div>
					
					<div class="row optin-form-controls margin-top-10" id="optinFormContainer">
						<div class="col-lg-12">
						
							<form class="">
								<div class="row">
									<div class="col-md-4" id="field_column_name">
										<label class="visible-xs">Name</label>
										<input type="text" class="form-control input-lg" id="exampleInputName2" placeholder="Name">
									</div>
									<div class="col-md-4" id="field_column_email">
										<label class="visible-xs">Email</label>
										<input type="email" class="form-control input-lg" id="exampleInputEmail2" placeholder="Email">
									</div>
									<div class="col-md-4">
										<button type="submit" class="btn btn-default btn-block btn-cta btn-orange" id="cta_button">Subscribe Now!</button>
									</div>
								</div>
								<div class="text-center text-white text-14 margin-top-20" id="disclaimer_content">Disclaimer text here...</div>
							</form>
												
						
						</div>
					</div>
					
				</div>
				
				<div class="quiz-optin text-left" id="popup_quiz">
					<?php include 'quiz-view.html'; ?>
				</div>
				
				<div class="quiz-optin" id="popup_quiz_optin">
					<h2 class="text-large text-bold" id="optin_headline_content">Enter your details here</h2>
					<div class="text-16 margin-top-20" id="optin_body_content">
						Enter description here...
					</div>
					
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-left">
							
							<div class="form-group margin-top-20" id="optin_name">
								<label class="text-14">Name</label>
								<input type="text" class="form-control" placeholder="Name" />
							</div>
							
							<div class="form-group margin-top-20" id="optin_email">
								<label class="text-14">Email Address</label>
								<input type="email" class="form-control" placeholder="Email address" />
							</div>
							<div class="form-group margin-top-20" id="optin_company_name">
								<label class="text-14">Company Name</label>
								<input type="text" class="form-control" placeholder="Company name" />
							</div>
							
							<div class="form-group margin-top-20" id="optin_phone_number">
								<label class="text-14">Phone Number</label>
								<input type="email" class="form-control" placeholder="Phone number" />
							</div>
							<button type="submit" class="btn btn-default btn-block btn-cta btn-orange" id="quiz_cta_button">Get Answers</button>
						</div>
					</div>
					
				</div>
				
				
				<div id="popup_success">
					<div class="row optin-body">
						<div class="col-md-12 text-center">
							<h1 class="text-large text-bold" id="success_headline_content">Thank you for subscribing to our newsletter</h1>
							<div class="text-18 margin-top-40" id="success_body_content">
								Enter message here...
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<button type="button" class="btn btn-default btn-block btn-cta btn-orange" id="success_button">Got it!</button>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
		
		<div class="row margin-top-10">
			<div class="col-lg-12 text-center">
				<p class="text-white text-14">Powered by <strong>QuizLabs</strong></p>
			</div>
		</div>
		
	</div>
</div>