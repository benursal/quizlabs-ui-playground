<?php include 'header.php'; ?>
<div class="border-bottom white-bg page-heading">
	<div class="container-fluid">
		<h2>Landing Page Configuration</h2>
		<span>Proposed Structure and functionality for Landing Page Configuration</span>
	</div>
</div>
<div class="ibox float-e-margins">
	<div class="ibox-content">
		<h3 class="text-24 text-light">Add New <b>1-Column</b> Row</h3>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group margin-top-20">
					<label class="text-14">Row Headline (optional)</label>
					<input type="text" class="form-control" placeholder="Headline" />
				</div>
				<div class="form-group margin-top-20">
					<label class="text-14">Lead Paragraph (optional)</label>
					<input type="text" class="form-control" placeholder="Lead paragraph" />
				</div>
				<div class="form-group margin-top-20">
					<label class="text-14">Content <span class="text-red text-12 text-italic">Note to Alex: this is meant to be a WYSIWYG Editor</span></label>
					<textarea class="form-control" placeholder="Content" rows="10"></textarea>
				</div>
				<p class="margin-top-20 text-right">
					<a href="index.php" class="btn btn-default">
						<i class="fa fa-ban" aria-hidden="true"></i> Cancel
					</a> 
					<a href="new-one-column.php" class="btn btn-primary">
						<i class="fa fa-check" aria-hidden="true"></i> Save Row
					</a> 
				</p>
			</div>
			<div class="col-md-4 col-md-offset-1 lp-additional-settings">
				<h3 class="text-14 text-center">Additional Settings</h3>
				<div class="form-group margin-top-20">
					<label class="text-12 text-light">Content Width</label>
					<select class="form-control">
						<option value="">Narrow</option>
						<option value="">Wide</option>
					</select>
				</div>
				<div class="form-group margin-top-20">
					<label class="text-12 text-light">Background Color</label><br />
					<a href="javascript:void(0)" class="text-12 text-bold text-underline">Choose a Color</a>
				</div>
				<div class="form-group margin-top-20">
					<label class="text-12 text-light">Background Image</label><br />
					<a href="javascript:void(0)" class="btn btn-info btn-sm">Choose an Image</a>
				</div>
				<div class="form-group margin-top-20">
					<label class="text-14">Custom CSS</label>
					<textarea class="form-control" placeholder="custom css here..." rows="7"></textarea>
				</div>
				
			</div>
			
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>