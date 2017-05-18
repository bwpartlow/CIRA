<?php get_header(); ?>
<div id="content">
	<div class="wrap">
		<div class="cards">
			<ul style="margin:0px;">
			<?php query_posts('cat=9'); while (have_posts()) : the_post(); ?>
				<li class="card hvr-rectangle-out d-1of4 t-1of3 m-1of2 last-col bottomMargin topMargin">
					<div class="cardBorder">
						<div class="card_title">
							<h3><?php the_title();?></h3>
						</div>
						<div class="card_image">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="cardButton">
							Click to learn more
						</div>
						<div class="card_content">
							<?php the_excerpt(); ?>
						</div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>
