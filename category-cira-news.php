<?php get_header(); ?>
<div id="content">
	<section class="entry-content cf" itemprop="articleBody">
		<div class="wrap">
			<div class="blocks">
				<ul style="margin:0px;">
					<?php query_posts('cat=13'); while (have_posts()) : the_post();?>
						<li class="block d-1of3 t-1of3 m-1of2 bottomMargin">
							<div class="blockBox row3 d-all t-all m-all hvr-rectangle-out">
								<h4 class="blockTitle"><?php the_title(); ?></h4>
								<div class="d-all t-all m-all">
									<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('bones-thumb-220');
									} else { ?>
									<img src="<?php bloginfo('template_directory'); ?>/library/images/CIRAlogo.png" alt="<?php the_title(); ?>" />
									<?php } ?>					
								</div>
								<div class="blockContent d-all t-all m-all">
								<?php the_excerpt();?>
								</div>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>