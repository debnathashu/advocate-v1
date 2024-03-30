<div class="row">
	<div class="col-md-12 margin20">
		<div class="panel panel-default bounceIn">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-user"></i> Add User
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
									<input type="text" name="uname" id="uname" placeholder="Enter username" required>
								</label>
							</section>
							<section>
								<label class="label">Name *</label>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text" name="name" id="name" placeholder="Enter name" required>
								</label>
							</section>
							<section>
								<label class="label">Email *</label>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="email" name="email" id="email" placeholder="Enter email" required>
								</label>
							</section>
							<section>
								<label class="label">Password *</label>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="password" name="pw" id="pw" placeholder="Enter password" required>
								</label>
							</section>
							<section>
								<label class="label">Type *</label>
								<input type="radio" name="ut" value="admin" required> Admin<br>
								<input type="radio" name="ut" value="author"> Author
							</section>
						</fieldset>
						<footer>
							<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
							<button type="submit" name="add" id="add" class="btn btn-theme-bg btn-lg pull-right">Add</button>
						</footer>
						<div class="message">
							<i class="fa fa-check"></i>
							<p>User Successfully Added.</p>
							<p><a href="dashboard.php?page=user&slug=all">Reload To View</a></p>
						</div>
					</form>	
				</div>					
			</div>
		</div>
	</div><!--why hire us-->
</div>