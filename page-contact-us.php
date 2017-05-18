<?php get_header(); ?>
<div class="wrap">
	<section class="entry-content bottomMargin cf" itemprop="articleBody">
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
	<div class="d-all t-all m-all bottomMargin">
		<div class="d-1of2 t-1of2 m-1of2 contactBox hvr-rectangle-out">
			<h3>Phone:<a href="<?php the_field('phone'); ?>">  <?php the_field('phone'); ?></a></h3>
		</div>
		<div class="d-1of2 t-1of2 m-1of2 contactBox hvr-rectangle-out">
			<h3>Fax:<a href="<?php the_field('fax'); ?>">  <?php the_field('fax'); ?></a></h3>
		</div>
	</div>
	<div class="d-all t-all m-all">
		<div class="d-2of7 t-1of3 m-all">
			<div class="d-all t-all m-all bottomMargin topMargin">
				<h3>Physical Location:</h3> <?php the_field('physical_address'); ?>
			</div>
			<div class="d-all t-all m-all">
				<h3>Mailing Address:</h3> <?php the_field('mailing_address'); ?>
			</div>
		</div>
		<div class="d-5of7 t-2of3 m-all">
			<div class="cards">
				<ul style="margin:0px;">
				<?php
				if( have_rows('cards') ):
				    while ( have_rows('cards') ) : the_row();?>
					<li class="card hvr-rectangle-out d-1of3 t-1of3 m-1of2 last-col bottomMargin ">
					<div class="cardBorder">
						<a href="<?php the_sub_field('card_link'); ?>">
						<div class="card_title">
							<h3><?php the_sub_field('card_title'); ?></h3>
						</div>
						<div class="card_image">
							<img src="<?php the_sub_field('card_image');?>" alt="CIRA Image" />
						</div>
						<div class="card_content"><?php the_sub_field('card_content'); ?></div>
						<div class="cardButton">
							Click to learn more
						</div>
						</a>
						</div>
					</li>
				<?php endwhile; else : endif; ?>
				</ul> 
			</div>
		</div>

		<h3>Join us in the world of social media</h3><hr>
		<div class="d-1of3 t-1of3 m-1of3 last-col bottomMargin">
				<div class="facebook2 hvr-box-shadow-inset">
				<a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i>  Facebook</a>
				</div>
			</div>
			<div class="d-1of3 t-1of3 m-1of3 last-col">
				<div class="twitter2 hvr-box-shadow-inset">
					<a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter-square" aria-hidden="true"></i>  Twitter</a>
				</div>
			</div>
			<div class="d-1of3 t-1of3 m-1of3 last-col">
				<div class="linkedin2 hvr-box-shadow-inset">
					<a href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin-square" aria-hidden="true"></i>  Linked In</a>
				</div>
			</div>
	</div>
</div>
<?php get_footer(); ?>
