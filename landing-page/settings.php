<?php include 'header.php'; ?>

<div class="ibox float-e-margins">
	<div class="padding-20">
		<h3 class="text-24 text-light">Landing Page Settings</h3>
		<hr />
		<form method="post" action="preview.php" data-form-processed="true" target="_blank">
			<div class="row">
				<div class="col-md-8">
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Header Area</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside">
								<?php include 'inside-header-area.html'; ?>
							</div>
						</div>
					</div>
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Hero (Banner) Area</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside hidden">
								<?php include 'inside-hero-area.html'; ?>
							</div>
						</div>
					</div>
					
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Body Area</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside hidden">
								<?php include 'inside-body-area.html'; ?>
							</div>
						</div>
					</div>
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Call-to-action Section 1</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside hidden">
								<?php include 'inside-cta1-area.html'; ?>
							</div>
						</div>
					</div>
					
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Testimonials Area</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside hidden">
								<?php include 'inside-testimonials-area.html'; ?>
							</div>
						</div>
					</div>
					
					<div class="row lp-section">
						<div class="col-lg-12">
							<div class="lp-section-title">
								<h3 class="pull-right"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h3>
								<h3 class="pull-left">Call-to-action Section 2</h3>
								<div class="clearfix"></div>
							</div>
							
							<div class="lp-section-inside hidden">
								<?php include 'inside-cta2-area.html'; ?>
							</div>
						</div>
					</div>
					
					
					<p class="margin-top-20 text-right">
						<a href="index.php" class="btn btn-default">
							<i class="fa fa-ban" aria-hidden="true"></i> Cancel
						</a> 
						<a href="new-one-column.php" class="btn btn-primary">
							<i class="fa fa-check" aria-hidden="true"></i> Save Landing Page
						</a> 
					</p>
				</div>
				<div class="col-md-4 text-center">
					<button type="submit" class="btn btn-lg btn-block btn-info">Preview</button>
					
					<div class="row margin-top-30">
						<div class="col-lg-12 text-left">
							<h4>Show these sections on the Landing Page:</h4>

							<label class="text-14 text-light">
								<input type="checkbox" value="1" name="sections[header]" checked /> Header
							</label>
							<br />
							<label class="text-14 text-light">
								<input type="checkbox" value="1" name="sections[hero]" checked /> Hero (Banner)
							</label>
							<br />
							<label class="text-14 text-light">
								<input type="checkbox" value="1" name="sections[body]" checked /> Body
							</label>
							<br />
							<label class="text-14 text-light">
								<input type="checkbox" value="1" name="sections[cta1]" checked /> Call-to-action 1
							</label>
							<br />
							<label class="text-14 text-light">
								<input type="checkbox" value="1" name="sections[testimonials]" checked /> Testimonials
							</label>
							<br />
							<label class="text-14 text-light">
								<input type="checkbox" value="1" name="sections[cta2]" checked /> Call-to-action 2
							</label>
							<br />

							
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>