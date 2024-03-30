<div class="row">
	<div class="col-md-12 margin20">
		<div class="panel panel-default bounceIn">
			<div class="panel-heading">
				<h3 class="panel-title">
					<i class="fa fa-asterisk"></i> Experience
				</h3>
			</div>
			<div class="panel-body">
				<div class="col-sm-12 sky-form-columns contact-sky-option">
					<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
						<fieldset>	
							<p class="margin30">Change Experience.</p><br>
							<section>
								Type<xmp>" <br> "</xmp> for line break
								<label class="textarea">
									<i class="icon-append fa fa-comment"></i>
									<textarea rows="4" name="exp" id="exp"><?php echo $row_settings['exp']; ?></textarea>
								</label>
							</section>
						</fieldset>
						<footer>
							<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
							<button type="submit" name="updatee" id="updatee" class="btn btn-theme-bg btn-lg pull-right">Update</button>
						</footer>
						<div class="message">
							<i class="fa fa-check"></i>
							<p>Experience Successfully Updated.</p>
							<p><a href="dashboard.php?page=main-home&slug=exp">Reload To View</a></p>
						</div>
					</form>	
				</div>					
			</div>
		</div>
	</div><!--experience-->
</div>