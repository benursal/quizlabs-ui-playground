<?php include 'header.php'; ?>

<div class="border-bottom white-bg page-heading">
	<div class="container-fluid">
		<h2>Landing Page Configuration</h2>
		<span>Proposed Structure and functionality for Landing Page Configuration</span>
	</div>
</div>
<div class="ibox float-e-margins">
	<div class="ibox-content">
		<div class="row">
			<div class="col-md-8 margin-left-30">
				
				<?php for( $x = 0; $x < 4; $x++ ) : ?>
				<?php
					if( $x % 2 == 0 )
					{
						$col_text = '1-Column Row';
						$row_edit_link = 'new-one-column.php';
					}
					else
					{
						$col_text = '2-Column Row';
						$row_edit_link = 'new-two-column.php';
					}
				?>
				<div class="row lp-row">
					<div class="col-md-9">
						<h4 class=""><span class="label label-default text-12"><?php echo $col_text; ?></span></h4>
						
						<h3 class="margin-top-20">Headline for this row</h3>
						<p class="text-14">Lead paragraph of this row.  Some information here that are very nice</p>
					</div>
					<div class="col-md-3 text-right">
						<a href="<?php echo $row_edit_link; ?>" class="btn btn-primary btn-sm">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</a> 
						<button type="button" class="btn btn-danger btn-sm">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				<?php endfor; ?>
				<p class="margin-top-20 text-right">
					<a href="new-one-column.php" class="btn btn-primary btn-sm">
						<i class="fa fa-plus" aria-hidden="true"></i> Add 1-Column Row
					</a> 
					<a href="new-two-column.php" class="btn btn-primary btn-sm">
						<i class="fa fa-plus" aria-hidden="true"></i> Add 2-Column Row
					</a> 
				</p>
				
				
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>
  
  