<?php get_header(); ?>
<div id="content" class="wrap">
		<section class="entry-content cf" itemprop="articleBody">
			<?php query_posts('cat=14'); while (have_posts()) : the_post();?>

					<div class="d-all t-all m-all bottomMargin">
					<h3><?php the_title(); ?></h3>
					<h5><?php the_field('author'); ?></h5>
					<h4><?php the_field('journal'); ?> <?php if( get_field('vol') ): ?>v.<?php the_field('vol'); ?><?php endif; ?>
					 <?php the_field('date'); ?></h4>
					<br/>
					<div class="blue-button">
						<a href="<?php the_field('link'); ?>"><h5>Read the full Publication</h5></a>
					</div>
					</div>
					<hr>

			<?php endwhile; ?>

		</section>
		</div>
<?php get_footer(); ?>
