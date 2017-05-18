<?php /*Template Name: Card Template */ ?>
<?php get_header(); ?>
<div class="wrap">
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
	</section>
	<section class="entry-content cf" itemprop="articleBody">
		<div class="cards">
			<ul style="margin:0px;">
			<?php
			if( have_rows('cards') ):
			    while ( have_rows('cards') ) : the_row();?>
				<li class="d-1of3 t-1of3 m-1of2 bottomMargin">
				<div class="cardBorder row3 card hvr-rectangle-out">
					<a href="<?php the_sub_field('card_link'); ?>">
					<div class="card_title">
						<h3><?php the_sub_field('card_title'); ?></h3>
					</div>
					<div class="">
					<div class="card_image">
						<img src="<?php the_sub_field('card_image');?>" alt="CIRA Image" />
					</div>
					<div class="card_content"><?php the_sub_field('card_content'); ?></div>
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
</div>
<?php get_footer(); ?>
