<div class="row">
	<div class="col-md-12 margin20">
		<div class="panel panel-default bounceIn">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-edit"></i> Change User
				</h3>
			</div>
			<div class="panel-body">
				<div class="col-sm-12 sky-form-columns contact-sky-option">
					<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
						<fieldset>	
							<section>
								<label class="label">Username *</label>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text" name="uname" id="uname" value="<?php echo $row_usere['username']; ?>" readonly>
								</label>
							</section>
							<section>
								<label class="label">Name *</label>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text" name="name" id="name" value="<?php echo $row_usere['name']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Email *</label>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="email" name="email" id="email" value="<?php echo $row_usere['email']; ?>" required>
								</label>
							</section>
							<section>
								<label class="label">Password *</label>
								Recent Password: <?php echo $row_usere['password']; ?>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="password" name="pw" id="pw" placeholder="Enter password">
								</label>
							</section>
							<section>
								<label class="label">Type *</label>
								Recent Type: <?php if($row_usere['usertype']=='admin'){echo 'Admin';}else{echo 'Author';} ?><br>
								<input type="radio" name="ut" value="admin" required> Admin<br>
								<input type="radio" name="ut" value="author"> Author
							</section>
						</fieldset>
						<footer>
							<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
							<button type="submit" name="update" id="update" class="btn btn-theme-bg btn-lg pull-right">Update</button>
						</footer>
						<div class="message">
							<i class="fa fa-check"></i>
							<p>User Successfully Updated.</p>
							<p><a href="dashboard.php?page=user&slug=all">Reload To View</a></p>
						</div>
					</form>	
				</div>					
			</div>
		</div>
	</div><!--why hire us-->
</div>