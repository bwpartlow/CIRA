<?php /*Template Name: Tabbed Template WITHOUT date */ ?>
<?php get_header(); ?>
	<div id="content" class="bottomMargin">
		<div id="inner-content" class="wrap cf">
			<main class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<section class="entry-content cf" itemprop="articleBody">
						<?php
						the_content();
						wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						) );
						?>
					</section> <?php // end article section ?>
				</article>
			<?php endwhile; endif; ?>
			</main>
		</div>
	<div class="wrap">
	<?php echo do_shortcode("[tab_content]"); ?>
	</div>
	</div>
<?php get_footer(); ?>
