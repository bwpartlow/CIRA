<?php get_header(); ?>

<!-- *************************ATMOS BREAK HUR PLEASE (WHITE BLOCK) *************************** -->		
<div class="cd-main-content">
<div class="layerThermo" >
	<div class="wrapXL">
		<div class="d-1of2 t-all m-all">
			<h2>Daily Image</h2><hr>
			<div class="dailyImageHolder">
				<div class="d-2of3 t-2of3 m-all">
					<h3 class='dailyImgHeader'>
						<a href="/daily-images-archive/">
						<script>
						var now = new Date();
						var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
						var months = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
						var date = ((now.getDate()<10) ? "0" : "")+ now.getDate();
						function fourdigits(number) {
						    return (number < 1000) ? number + 1900 : number;
						}
						today =  days[now.getDay()] + ", " +
						         months[now.getMonth()] + " " +
						         date + ", " +
						         (fourdigits(now.getYear())) ;
						document.write(today);
						</script>
						</a>
					</h3>
					<div class="whiteBox">
					<div class="dailyImg">
						<a href="/daily-images-archive/">
							<img src="<?php the_field('daily_img'); ?>" alt="Daily Image"/>
						</a>
					</div>
					<h6>Past Images</h6><hr>
						<?php echo do_shortcode('[gallery media_category="4" limit="6"]'); ?>
					</div>
				<div class="d-1of3 t-1of3 m-all ImgCap">
					<div class="dailyImgCap">
						<a href="/daily-images-archive/">
							<?php the_field('daily_img_cap'); ?>
						</a>
						<p class="tinyCap">
							<a href="/daily-images-archive/">
								Click the image to see past daily images
							</a>
						</p>
					</div>
				</div>
				</div>
		</div>
</div>
		<div class="d-1of2 t-all m-all last-col">
			<h2 class="">About CIRA</h2><hr>
				<div class="d-all t-all m-all topMargin bottomMargin content">
					<p><?php the_field('about_content'); ?></p>
				</div>
				<div class="d-all t-1of3 m-1of3 homeButton hvr-rectangle-out">
					<a href="<?php the_field('button_one_link');?>">
					<div><?php the_field('button_one'); ?></div>
					</a>	
				</div>
				<div class="d-all t-1of3 m-1of3 homeButtonTwo last-col hvr-rectangle-out">
					<a href="<?php the_field('button_two_link');?>">
					<div><?php the_field('button_two'); ?></div>
					</a>	
				</div>
				<div class="d-all t-1of3 m-1of3 homeButtonThree last-col bottomMargin hvr-rectangle-out">
					<a href="<?php the_field('button_three_link');?>">
					<div><?php the_field('button_three'); ?></div>
					</a>	
				</div>
						</div>
</div>
</div>
</div>

<!-- *************************ATMOS BREAK HUR PLEASE *************************** -->		
<div id="slide-2" class="d-all t-all m-all layerMeso">
	<div class="bcg">
	<div class="hsContainer">
		<div class="wrap">
			<h2 class="topMargin">About CIRA</h2>
			<hr>
			<div class="d-all t-all m-all topMargin bottomMargin content">
			<p><?php the_field('about_content'); ?></p>
			</div> 
			</div>
		</div>
	</div>
</div>

<!-- *************************ATMOS BREAK HUR PLEASE (WHITE BLOCK) *************************** -->		
	<div class="layerStrato">
		<div class="wrap topMargin bottomMargin">
			<h2>Current Satellite Image</h2>
			<hr class="bottomMargin">
			<div class="d-1of2 t-1of2 m-all">
				<p><?php the_field('second_content'); ?></p>
			</div>
			<div class="d-1of2 t-1of2 m-all">
				<div class="satImg bottomMargin">
					<a href="http://rammb.cira.colostate.edu/ramsdis/online/images/latest/goes-west_goes-east/gwvis01.asp">
				    <img src="http://rammb.cira.colostate.edu/ramsdis/online/images/thumb/goes-west_goes-east/gwvis01.gif" alt=""/>
				    </a>
				    <br/>
				    <a href="http://rammb.cira.colostate.edu/ramsdis/online/goes-west_goes-east.asp" target="_blank">View Current Satellite Loops</a>
				</div>
			</div>
		</div>
	</div>

<!-- *************************ATMOS BREAK HUR PLEASE *************************** -->	

<div id="slide-3" class="layerTropo">
	<div class="bcg">
		<div class="hsContainer">
			<div class="wrap topMargin">
				<h2>CIRA in the world</h2>
				<hr>

				<div class="d-all t-all m-all bottomMargin content">
					<p><?php the_field('content'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

</div>





<?php get_footer(); ?>
