<?php
	$slider = $connection->query("select * from slider where id='1'");
	$row_slider = $slider->fetch_array(MYSQLI_BOTH);
?>
<div class="fullwidthbanner">
	<div class="tp-banner">
		<ul>
			<!-- SLIDE -->
			<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Developed By Locker IT Solution">
				<!-- MAIN IMAGE -->
				<img src="assets/img/slider/<?php echo $row_slider['si1']; ?>"  alt="Developed By Locker IT Solution"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
				<div class="caption title-2 sft" data-x="right" data-y="237" data-speed="1000" data-start="1000" data-easing="easeOutExpo">
					<img src="assets/img/slider/<?php echo $row_slider['si2']; ?>" alt="Adv Mahbub Alam" />
				</div>
				<div class="caption text sfl" data-x="right" data-y="160" data-speed="1000" data-start="1800" data-easing="easeOutExpo">
					<?php echo $row_slider['text']; ?>
				</div>
			</li>
		</ul>
	</div>
</div><!--full width banner-->

