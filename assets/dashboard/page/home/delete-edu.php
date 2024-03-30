<div class="row">
	<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 margin30 sky-form-columns contact-sky-option">
		<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
			<fieldset>	
				<section>
					<div class="team-wrap">
						<h2><?php echo $row_edu['name']; ?></h2>
						<h1><font color="red"><i class="fa fa-warning"></i></font></h1>
						<h1><font color="gray">Are you sure?</font></h1>
						<h5><font color="gray">You will not be able to recover this imaginary file!</font></h5>
						<input type="checkbox" name="confirm" id="confirm" value="<?php echo $row_edu["id"]; ?>" required >Yes! I want to delect <?php echo $row_edu["name"]; ?>.
					</div><!--team-wrap-->
				</section>
			</fieldset>
			<footer>
				<a href="dashboard.php?page=about-me&slug=edu" class="btn btn-theme-bg btn-ico btn-lg"><i class="fa fa-reply"></i> Cancel</a>
				<button type="submit" name="del" id="del" class="btn btn-theme-bg btn-lg pull-right">Delete it!  <i class="fa fa-trash"></i></button>
			</footer>
			<div class="message">
				<i class="fa fa-check"></i>
				<p>Education delete successfully.</p>
				<p><a href="dashboard.php?page=about-me&slug=edu">Back to Education.</a></p>
			</div>
		</form>					
	</div>
</div>