<?php get_header(); ?>

<?php $args = array(
	'post' => 'ID',
    'post_type' => 'conferences'
);
$the_query = new WP_Query( $args );
?>
<div id="content" class="wrap">
<article id="post-<?php the_ID(); ?>" <?php post_class( 'bottomMargin cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<section class="entry-content cf" itemprop="articleBody">
		<h2>Upcoming Events</h2><hr>
		<div class="blocks">
			<ul style="margin:0px;">
<?php if (is_category('20'))
{
 query_posts('cat=20'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<li class="block hvr-rectangle-out d-1of3 t-1of3 m-1of2 bottomMargin">
					<div class="blockBox">
						<div class="blockTitle">
							<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						</div>
						<div class="d-all t-all m-all">
									<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('bones-thumb-150');
									} else { ?>
									<img src="<?php bloginfo('template_directory'); ?>/library/images/CIRAlogo.png" alt="<?php the_title(); ?>" />
									<?php } ?>					
								</div>
						<div class="blockContent">
							<?php echo the_excerpt(); ?>
						</div>

					</div>
				</li>





	<?php endwhile; endif; 
}
else{
	echo "There are currently no conferences scheduled. Please check back later or subscribe below to receive notifications about upcoming conferences.";
} ?>

				
			</ul>

		</div>
		</section>
		</article>
		</div>
		<div id="content" class="wrap">
		<h2>Past Events</h2><hr>
		<div class="blocks">
			<ul style="margin:0px;">
			<?php query_posts('cat=11'); while (have_posts()) : the_post();?>
				<li class="block d-1of3 t-1of3 m-1of2 bottomMargin">
					<div class="blockBox row3 hvr-rectangle-out">
						<div class="blockTitle">
							<h4><a style="color:#5c6b80" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
						</div>
						<div class="d-all t-all m-all">
									<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('bones-thumb-150');
									} else { ?>
									<img src="<?php bloginfo('template_directory'); ?>/library/images/CIRAlogo.png" alt="<?php the_title(); ?>" />
									<?php } ?>					
								</div>
						<div class="blockContent">
							<?php the_excerpt();?>
						</div>

					</div>
				</li>
			<?php endwhile; ?>


			</ul>
		</div>
		</div> 
		
<?php get_footer(); ?>
