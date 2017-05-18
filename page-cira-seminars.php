<?php get_header(); ?>
<div id="content" class="wrap">
		<div class="semCards">
			<ul style="margin:0px;">
			<?php query_posts('cat=15'); while (have_posts()) : the_post();?>
				<li class="semCard hvr-rectangle-out d-1of2 t-1of2 m-1of2 last-col bottomMargin topMargin">
				<div class="semCardBorder">
					<div class="semCard_title">
						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					</div>
					<div class="semCard_image">
						<?php the_post_thumbnail();?>					
					</div>
					<div class="semCard_content">
					<?php echo the_excerpt();?>
					</div>

					</div>
				</li>
			<?php endwhile; ?>
			</ul>
		</div>
	</div>
<?php get_footer(); ?>
