<div class="row">
	<div class="col-md-12 margin30">
		<!--<h4 class="margin30">মামলার সংক্ষিপ্ত বিবরণ:</h4>-->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-graduation-cap"></i> User
					<a class="pull-right" href="dashboard.php?page=about-me&slug=add-edu" title="Add"><i class="fa fa-plus"></i></a>
				</h3>
			</div>
			<div class="panel-body">
				<?php do { ?>
					<div class="panel panel-default bounceIn">
						<div class="panel-heading">
							<h3 class="panel-title">
								<i class="fa fa-book"></i>Name: <?php echo $row_edu['name']; ?> &nbsp;
								<i class="fa fa-institution"></i>From: <?php echo $row_edu['ins']; ?>
								<a class="pull-right" href="dashboard.php?page=about-me&slug=delete-edu&id=<?php echo $row_edu['id']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
								<a class="pull-right" href="dashboard.php?page=about-me&slug=edit-edu&id=<?php echo $row_edu['id']; ?>" title="Edit"><i class="fa fa-edit"></i></a>
							</h3>
						</div>
					</div>
				<?php } while ($row_edu = mysqli_fetch_assoc($edu)); ?>
			</div>
		</div>
	</div>
</div>