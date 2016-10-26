<?php include 'header.php'; ?>

<div class="wrapper wrapper-content">
	<div>
		<div class="row">
			<div class="col-md-3">
				<h1 class="text-bold">My Opt-ins</h1>
			</div>
			<div class="col-md-7 ">
		
				<div class="dropdown margin-top-20">
					<button class="btn btn-primary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
						Add New Opt-in
						<span class="caret"></span>
					</button>
					<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						<li role="presentation"><a role="menuitem" tabindex="-1" href="new-popup.php">Popup</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Welcome Gate</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Inline</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Scrollbox</a></li>
						<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sidebar</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<hr>
		
		<?php for( $x = 0; $x < 4; $x++ ) : ?>
		<div class="row padding-left-20">
			<div class="col-md-10 optin-item">
				<div class="col-md-8 optin-details">
					<h3 class="text-bold margin-top-30">
						<a href="#">Get your free ebook</a> 
						<span class="label label-warning">Popup</span>
					</h3>
				</div>
				<div class="col-md-4 text-center">
					<a class="btn btn-success margin-top-20" href="#">Analytics</a>
					<a class="btn btn-success margin-top-20" href="#">Edit</a>
					<a class="btn btn-danger margin-top-20 margin-left-30" href="#">Delete</a>
				</div>
			</div>
		</div>
		<?php endfor; ?>
	</div>
</div>

<?php include 'footer.php'; ?>
  
  