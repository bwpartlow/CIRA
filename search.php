<?php /**  The template for displaying search results pages. **/ get_header('sub'); ?>
<?php $posts = query_posts($query_string . '&orderby=title&order=asc'); ?>
	<section class="wrap">
		<main>
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h3><?php printf( __( 'Search Results for: %s', 'CIRA' ), get_search_query() ); ?></h3>
			</header>
			<?php while ( have_posts() ) : the_post(); ?>
<div class="blocks">
			<ul style="margin:0px;">
				<li class="block d-1of3 t-1of3 m-1of2 bottomMargin">
				<div class="blockBox row2 d-all t-all m-all hvr-rectangle-out">
				<h3 class="blockTitle" id="name"><?php the_field('employee_full_name'); ?></h3>
				<div class="block_image d-all t-all m-all">
					<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('bones-thumb-150');
					} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/library/images/Emptemp-01.png" alt="<?php the_title(); ?>" />
					<?php } ?>					
					</div>
					<div class="blockContent d-all t-all m-all">
					<ul>
					<li><?php the_field('job_title'); ?> </li>
					<li>
					<?php if( get_field('phone_number') ): ?>
					<a href="tel:+<?php the_field('phone_number'); ?>"><i class="fa fa-phone" aria-hidden="true"></i>  <?php the_field('phone_number'); ?></a>
				<?php endif; ?>
					</li>
					<li>
					<a href="<?php the_field('email_address'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i>  <?php the_field('email_address'); ?></a>
					</li>
					<div class="blockButton">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h5>Read More</h5></a>
					</div>
					</ul>
					</div>
					</div>
				</li>
			</ul>
		</div>
	<?php endwhile; ?>
		</main>
	</section>
	<section class="wrap">
	<div class="d-all t-all m-all">
		<?php the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
		</div>
	</section>
<?php get_footer(); ?>
