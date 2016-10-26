<?php include 'header.php'; ?>

<div class="ibox float-e-margins">
	<div class="padding-20">
		<h3 class="text-24">New Popup Opt-in</h3>
		<hr />
		
		<ul class="nav nav-pills nav-secondary">
			<li class="active"><a data-toggle="pill" href="#home">Setup</a></li>
			<li><a href="new-popup-design.php">Design</a></li>
			<li><a href="new-popup-display-rules.php">Display Settings</a></li>
		</ul>
		
		<form method="post" action="preview.php" data-form-processed="true" target="_blank" class="margin-top-40">
			<div class="row">
				<div class="col-md-8">
					
					<div class="row lp-section">
						<div class="col-lg-12">							
							<div class="lp-section-inside">
								<div class="form-group margin-top-20">
									<label class="text-14">Opt-in Name</label>
									<input type="text" name="optin_name" class="form-control input-lg" placeholder="Enter the name of your popup opt-in" />
								</div>
								
								<div class="form-group margin-top-20">
									<label class="text-14">Email Service Provider</label>
									<select class="form-control input-lg" name="email_service_provider">
										<option value="">[Select Provider]</option>
										<option value="mc">Mailchimp</option>
										<option value="cc">Constant Contact</option>
										<option value="ic">iContact</option>
									</select>
								</div>
								
								<button type="button" id="btnConnectToEmail" class="btn btn-info">
									Connect to <strong id="eprovider"></strong>
								</button> 
								
							</div>
						</div>
					</div>
					
					
					<p class="margin-top-20 text-right">
						<a href="index.php" class="btn btn-default">
							<i class="fa fa-ban" aria-hidden="true"></i> Cancel
						</a> 
						<a href="new-popup-design.php" class="btn btn-primary">
							<b>Next:</b> Design <i class="fa fa-chevron-right" aria-hidden="true"></i> 
						</a> 
					</p>
				</div>
				
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>