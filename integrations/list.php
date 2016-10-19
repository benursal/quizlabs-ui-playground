<?php include 'header.php'; ?>

<div class="wrapper wrapper-content">
	<div>
		<h1 class="page-header">Marketing API Integrations</h1>
		<p>Connect your account to your marketing services.</p>
		<hr>
		<p>
			<strong>All Integrations Options</strong>
		</p>
		<?php for( $x = 0; $x < 4; $x++ ) : ?>
		<div class="row padding-left-20">
			<div class="col-md-10 integration-item">
				<div class="col-md-2 integration-image-container">
					<img src="http://dev.quizlabs.co/img/vendors/zapier.jpg" class="img-responsive" alt="Zapier">
				</div>
				<div class="col-md-7 integration-details">
					<h2 class="text-bold">Zapier</h2>
					<label><strong>Detail:</strong> The Detail</label>
					<label><strong>Detail:</strong> The Detail</label>
				</div>
				<div class="col-md-3 text-center">
					<a class="btn btn-primary margin-top-40" href="/integration/w8TwQHaNy8w73Z27s/connect">Connect</a>
				</div>
			</div>
		</div>
		<?php endfor; ?>
	</div>
</div>

<?php include 'footer.php'; ?>
  
  