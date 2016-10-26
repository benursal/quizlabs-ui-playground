<?php include 'header.php'; ?>

<div class="ibox float-e-margins">
	<div class="padding-20">
		<h3 class="text-24">New Popup Opt-in</h3>
		<hr />
		
		<ul class="nav nav-pills nav-secondary">
			<li><a href="new-popup.php">Setup</a></li>
			<li><a href="new-popup-design.php">Design</a></li>
			<li class="active"><a href="#">Display Settings</a></li>
		</ul>
		
		<form method="post" action="preview.php" data-form-processed="true" target="_blank" class="margin-top-40">
			<div class="row">
				<div class="col-md-7">
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Show Rules</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								<p class="text-14">Show on pages that match a "Show" rule.</p>
								
								<table class="table table-show-rules">
									<tbody>
										<tr>
											<td>
												<select class="form-control" name="show_url_match">
													<option value="exact">Exact Match</option>
													<option value="beginning">Begins With</option>
													<option value="containing">Containing</option>
												</select>
											</td>
											<td>
												<input type="text" class="form-control" name="show_rule_url[]" placeholder="/example" />
											</td>
											<td class="text-center padding-top-10">
												<a href="javascript:void(0)" class="button-remove-show-rule text-red text-20">
													<i class="fa fa-minus-circle" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
								
								<p class="text-right">
									<button type="button" class="btn btn-primary btn-xs" id="btnNewShowRule">Add Show Rule</button>
								</p>
								
							</div>
						</div>
					</div>
					
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Hide Rules</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								<p class="text-14">Hide on pages that match a "Hide" rule.</p>
								
								<table class="table table-hide-rules">
									<tbody>
										<tr>
											<td>
												<select class="form-control" name="hide_url_match">
													<option value="exact">Exact Match</option>
													<option value="beginning">Begins With</option>
													<option value="containing">Containing</option>
												</select>
											</td>
											<td>
												<input type="text" class="form-control" name="hide_rule_url[]" placeholder="/example" />
											</td>
											<td class="text-center padding-top-10">
												<a href="javascript:void(0)" class="button-remove-hide-rule text-red text-20">
													<i class="fa fa-minus-circle" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
								
								<p class="text-right">
									<button type="button" class="btn btn-primary btn-xs" id="btnNewHideRule">Add Hide Rule</button>
								</p>
								
							</div>
						</div>
					</div>
					
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Frequency</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								<p class="text-14">Do NOT show the popup to the same visitor again until this much time has passed.</p>
								
								<table class="table table-frequency">
									<tbody>
										<tr>
											<td class="col-lg-5">
												<input type="text" class="form-control" placeholder="" value="1" />
											</td>
											<td class="col-lg-7">
												<select class="form-control">
													<option value="always">always show</option>
													<option value="minute">minutes</option>
													<option value="hour">hours</option>
													<option value="day">days</option>
													<option value="month">months</option>
													<option value="year">years</option>
												</select>
											</td>
										</tr>
									</tbody>
								</table>
								
							</div>
						</div>
					</div>
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Redirection</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								<p class="text-14">
									After a successful subscribe, redirect the user to the specified URL.
									(Your URL must contain "http://" or "https://". Example: http://www.yourwebsite.com/thankyou)
								</p>
								<div class="form-group margin-top-20">
									<label class="text-14">Success Redirect URL</label>
									<input type="text" value="" name="success_url" class="form-control" placeholder="http://" />
								</div>
								
							</div>
						</div>
					</div>
				
					
					<p class="margin-top-20 text-right">
						<a href="index.php" class="btn btn-default">
							<i class="fa fa-ban" aria-hidden="true"></i> Cancel
						</a> 
						<a href="new-one-column.php" class="btn btn-primary">
							<i class="fa fa-check" aria-hidden="true"></i> Publish
						</a> 
					</p>
				</div>
				<div class="col-md-5 text-center">
					
					<h1 class="text-center">Preview Here...</h1>
							
					
				</div>
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>