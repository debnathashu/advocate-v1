<?php
require('connection.php');
// lnews PHP
	$maxRows_lnews = 9;
	$pageNum_lnews = 0;
	if (isset($_GET['pageNum_lnews'])) {
		$pageNum_lnews = $_GET['pageNum_lnews'];
	}
	$startRow_lnews = $pageNum_lnews * $maxRows_lnews;

	mysqli_select_db($connection, $database_connection);
	$query_lnews = "SELECT * FROM lnews";
	$query_limit_lnews = sprintf("%s LIMIT %d, %d", $query_lnews, $startRow_lnews, $maxRows_lnews);
	$lnews = mysqli_query($connection, $query_limit_lnews) or die(mysqli_error());
	$row_lnews = mysqli_fetch_assoc($lnews);

	if (isset($_GET['totalRows_lnews'])) {
		$totalRows_lnews = $_GET['totalRows_lnews'];
	} else {
		$all_lnews = mysqli_query($connection, $query_lnews);
		$totalRows_lnews = mysqli_num_rows($all_lnews);
	}
	$totalPages_lnews = ceil($totalRows_lnews/$maxRows_lnews)-1;
?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 margin30">
				<div class="footer-col">
					<h3>About Advocate</h3>
					<p><?php echo $row_settings['about']; ?></p>
					<ul class="list-inline footer-social">
						<li>
							<a href="http://facebook.com/<?php echo $row_settings['fb']; ?>" target="_blank" class="social-icon si-dark si-gray-round si-colored-facebook">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="http://twitter.com/<?php echo $row_settings['tw']; ?>" target="_blank" class="social-icon si-dark si-gray-round si-colored-twitter">
								<i class="fa fa-twitter"></i>
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="http://plus.google.com/<?php echo $row_settings['gplus']; ?>" target="_blank" class="social-icon si-dark si-gray-round si-colored-google-plus">
								<i class="fa fa-google-plus"></i>
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo $row_settings['link']; ?>" target="_blank" class="social-icon si-dark si-gray-round si-colored-linkedin">
								<i class="fa fa-linkedin"></i>
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
					</ul>
				</div>                        
			</div><!--footer col-->
			<div class="col-md-3 col-sm-6 margin30">
				<div class="footer-col">
					<h3>Contact</h3>
					<ul class="list-unstyled contact">
						<li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> <?php echo $row_settings['address']; ?></p></li> 
						<li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="mailto:<?php echo $row_settings['iemail']; ?>"><?php echo $row_settings['iemail']; ?></a></p></li>
						<li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> +880-<?php echo substr($row_settings['phone'], 1, 4); ?>-<?php echo substr($row_settings['phone'], 5, 10); ?></p></li>
						<li> <p><strong><i class="fa fa-print"></i> Fax</strong> <?php echo $row_settings['fax']; ?></p></li>
						<li> <p><strong><i class="fa fa-skype"></i> Skype</strong> <?php echo $row_settings['skype']; ?></p></li>
					</ul>
				</div>                        
			</div><!--footer col-->
			<div class="col-md-3 col-sm-6 margin30">
				<div class="footer-col">
					<h3>Legal News</h3>
					<ul class="list-inline f2-work">
					<?php do { ?>
						<li><a href="view-legal-news.php?id=<?php echo $row_lnews['id']; ?>" title="<?php echo $row_lnews['name']; ?>"><img src="assets/img/legal-news/<?php echo $row_lnews['image']; ?>" class="img-responsive" alt="<?php echo $row_lnews['name']; ?>"></a></li>
					<?php } while ($row_lnews = mysqli_fetch_assoc($lnews)); ?>
					</ul>
				</div>                        
			</div><!--footer col-->
			<div class="col-md-3 col-sm-6 margin30">
				<div class="footer-col">
					<h3>Follow Us</h3>
					<div class="fb-page" data-href="https://www.facebook.com/LockersITSolution/" data-tabs="timeline" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/LockersITSolution/"><a href="https://www.facebook.com/LockersITSolution/">Lockers It Solution</a></blockquote></div></div>
				</div>                        
			</div><!--footer col-->
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="footer-btm">
					<span>&copy;2016. Designed by <a href="http://it.brainlockerltd.com/" target="_blank">Lockers IT Solution</a>. Sister Corner of <a href="http://brainlockerltd.com/" target="_blank">Brain Locker Ltd.</a></span>
				</div>
			</div>
		</div>
	</div>
</footer>