<div class="row">
	<div class="col-md-12 margin20">
		<div class="panel panel-default bounceIn">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-book"></i> Add Education
				</h3>
			</div>
			<div class="panel-body">
				<div class="col-sm-12 sky-form-columns contact-sky-option">
					<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
						<fieldset>	
							<section>
								<label class="label">Education Name *</label>
								<label class="input">
									<i class="icon-append fa fa-book"></i>
									<input type="text" name="ename" id="ename" placeholder="Enter education" required>
								</label>
							</section>
							<section>
								<label class="label">Institution Name *</label>
								<label class="input">
									<i class="icon-append fa fa-institution"></i>
									<input type="text" name="iname" id="iname" placeholder="Enter institution" required>
								</label>
							</section>
							<section>
								<label class="label">year *</label>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text" name="year" id="year" placeholder="Enter year" required>
								</label>
							</section>
							<section>
								<label class="label">Point *</label>
								<input type="radio" name="gread" value="CGPA" required> CGPA &nbsp; <input type="radio" name="gread" value="GPA"> GPA
							</section>
							<section>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text" name="point" id="point" placeholder="Enter point" required>
								</label>
							</section>
						</fieldset>
						<footer>
							<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
							<button type="submit" name="add" id="add" class="btn btn-theme-bg btn-lg pull-right">Add</button>
						</footer>
						<div class="message">
							<i class="fa fa-check"></i>
							<p>Successfully Added.</p>
							<p><a href="dashboard.php?page=about-me&slug=edu">Reload To View</a></p>
						</div>
					</form>	
				</div>					
			</div>
		</div>
	</div><!--why hire us-->
</div>