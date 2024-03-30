<?php
	$slider = $connection->query("select * from slider where id='1'");
	$row_slider = $slider->fetch_array(MYSQLI_BOTH);
?>
<div class="fullwidthbanner">
	<div class="tp-banner-boxed">
		<ul>
			<!-- SLIDE -->
			<li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Developed By Locker IT Solution">
				<!-- MAIN IMAGE -->
				<img src="assets/img/slider/<?php echo $row_slider['si1']; ?>"  alt="Developed By Locker IT Solution"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
				<div class="tp-caption lft" data-x="578"data-y="137" data-speed="900" data-start="2100" data-easing="Sine.easeOut">
					<img src="assets/img/slider/<?php echo $row_slider['si2']; ?>" alt="" />
				</div>
				<div class="caption sft text " data-x="right" data-y="70" data-speed="500" data-start="800" data-easing="Sine.easeOut">
					<?php echo $row_slider['text']; ?>
				</div>
			</li>
		</ul>
	</div>
</div><!--full width banner-->