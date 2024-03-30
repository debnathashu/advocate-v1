<div class="row">
	<div class="col-md-12 margin20">
		<div class="panel panel-default bounceIn">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-magic"></i> Success
				</h3>
			</div>
			<div class="panel-body">
				<div class="col-sm-12 sky-form-columns contact-sky-option">
					<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
						<fieldset>	
							<p class="margin30">Change success number.</p><br>
							<section>
								<label class="input">
									<i class="icon-append fa fa-image"></i>
									<input type="text" name="success" id="success" value="<?php echo $row_settings['success']; ?>" required>
								</label>
							</section>
						</fieldset>
						<footer>
							<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
							<button type="submit" name="updates" id="updates" class="btn btn-theme-bg btn-lg pull-right">Update</button>
						</footer>
						<div class="message">
							<i class="fa fa-check"></i>
							<p>Success Number Successfully Updated.</p>
							<p><a href="dashboard.php?page=main-home&slug=success">Reload To View</a></p>
						</div>
					</form>	
				</div>					
			</div>
		</div>
	</div><!--experience-->
</div>