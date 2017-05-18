<?php get_header(); ?>
	<div id="content">
		<div id="inner-content" class="wrap cf">
			<section class="entry-content bottomMargin cf" itemprop="articleBody">
			<h2>Research by Theme:</h2>
				<div class="cards">
			<ul style="margin:0px;">
			<?php
			if( have_rows('by_theme') ):
			    while ( have_rows('by_theme') ) : the_row();?>
				<li class="d-1of3 t-1of2 m-all bottomMargin">
				<div class="cardBorder row3 card_research hvr-rectangle-in">
				<div class="cardBackground">
				<img src="<?php the_sub_field('image');?>" alt="CIRA Image" />
				</div>
				<div class="card_content_research">
					<a href="<?php the_sub_field('link'); ?>">
						<h4><?php the_sub_field('title'); ?></h4>
						<?php the_sub_field('excerpt'); ?>
						</div>
					<div class="blockButton">
						Click to learn more
					</div>
					</a>
					</div>
				</li>
			<?php endwhile; else : endif; ?>
			</ul> 

		</div>
			</section>

		<section class="entry-content bottomMargin cf" itemprop="articleBody">
		<h2>Research by Project:</h2>
				<div class="cards">
			<ul style="margin:0px;">
			<?php
			if( have_rows('by_project') ):
			    while ( have_rows('by_project') ) : the_row();?>
				<li class="d-1of3 t-1of2 m-all bottomMargin">
				<div class="cardBorder row3 card_research hvr-rectangle-in">
				<div class="cardBackground">
				<img src="<?php the_sub_field('image');?>" alt="CIRA Image" />
				</div>
				<div class="card_content_research">
					<a href="<?php the_sub_field('link'); ?>">
						<h3><?php the_sub_field('title'); ?></h3>
						<?php the_sub_field('excerpt'); ?>
						</div>
					<div class="blockButton">
						Click to learn more
					</div>
					</a>
					</div>
				</li>
			<?php endwhile; else : endif; ?>
			</ul> 

		</div>
		</section>

		<section class="entry-content bottomMargin cf" itemprop="articleBody">
		<h2>Objectives</h2>
		<?php the_field('description'); ?>
		<hr>
		<?php echo do_shortcode("[tab_content]"); ?>

		</section>
		<section class="entry-content bottomMargin cf" itemprop="articleBody">
				<h2>Publications</h2>
				<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
		</section>
 	</div>
</div>
<?php get_footer(); ?>
