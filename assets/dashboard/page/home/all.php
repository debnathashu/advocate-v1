<div class="row">
	<div class="col-md-12 margin30">
		<!--<h4 class="margin30">মামলার সংক্ষিপ্ত বিবরণ:</h4>-->
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title"><i class="fa fa-users"></i> User</h3>
			</div>
			<div class="panel-body">
				<?php do { ?>
					<div class="panel panel-default bounceIn">
						<div class="panel-heading">
							<h3 class="panel-title">
								<i class="fa fa-user"></i>Name: <?php echo $row_user['name']; ?> &nbsp;
								<i class="fa fa-hand-o-right"></i>Username: <?php echo $row_user['username']; ?>&nbsp;
								<i class="fa fa-steam"></i>User Type: <?php echo $row_user['usertype']; ?>
								<?php
									if($row_user['username'] == 'admin' or $row_user['username'] == 'lockersitsolution'){
										echo "<a class=\"pull-right\" href=\"#\" title=\"Read Only\"><i class=\"fa fa-bug\"></i></a>";
									}else{
										echo "<a class=\"pull-right\" href=\"dashboard.php?page=user&slug=delete&id=".$row_user['id']."\" title=\"Delete\"><i class=\"fa fa-trash\"></i></a>";
										echo "<a class=\"pull-right\" href=\"dashboard.php?page=user&slug=edit&id=".$row_user['id']."\" title=\"Edit\"><i class=\"fa fa-edit\"></i></a>";
									}
								?>
							</h3>
						</div>
					</div>
				<?php } while ($row_user = mysqli_fetch_assoc($user)); ?>
			</div>
		</div>
	</div>
</div>