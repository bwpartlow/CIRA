<?php get_header(); ?>
<div class="wrap">
	<section class="empSearch bottomMargin">
		<h3>Search for employees:</h3>
		<?php get_template_part( 'searchform-emp' ); ?><br><br>
		<a class="blue-button d-1of6 t-1of3 m-1of3" href="#directors">CIRA Directors</a>
		<a class="blue-button d-1of6 t-1of3 m-1of3" href="#fortCollins">Fort Collins, CO</a>
		<a class="blue-button d-1of6 t-1of3 m-1of3" href="#boulder">Boulder, CO</a>
		<a class="blue-button d-1of6 t-1of3 m-1of3" href="#collegePark">College Park, MD</a>
		<a class="blue-button d-1of6 t-1of3 m-1of3" href="#silverSprings">Silver Springs, MD</a>
		<a class="blue-button d-1of6 t-1of3 m-1of3" href="#kansasCity">Kansas City, MO</a>
	</section>
	</div>
<div id="content" class="wrap">
	<section class="entry-content cf" itemprop="articleBody">
		<div id="directors"></div>
	<h2>CIRA Director's Office</h2><hr>
		<div class="blocks">
			<ul style="margin:0px;">
			<?php query_posts('cat=18'.'&orderby=title&order=ASC'); while (have_posts()) : the_post();?>
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
			<?php endwhile; ?>
			</ul>
		</div>
		</section>

		<div id="fortCollins" class="anchor"></div>
	<section class="entry-content cf" itemprop="articleBody">
		<h2>Fort Collins, Colorado</h2><hr>
		<div class="blocks">
			<ul style="margin:0px;">
			<?php query_posts('cat=21'.'&orderby=title&order=ASC'.'&posts_per_page=-1000'); while (have_posts()) : the_post();?>
				<li class="block d-1of3 t-1of2 m-1of2 bottomMargin">
				<div class="blockBox row2 d-all t-all m-all hvr-rectangle-out">
				<h3 class="blockTitle"><?php the_field('employee_full_name'); ?></h3>
				<div class="block_image d-all t-all m-all">
					<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('bones-thumb-150');
					} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/library/images/Emptemp-01.png" alt="<?php the_title(); ?>" />
					<?php } ?>					
					</div>
					<div class="blockContent">
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
			<?php endwhile; ?>
			</ul>
		</div>
</section>
		<div id="boulder" class="anchor"></div>
	<section class="entry-content cf" itemprop="articleBody">
		<h2>Boulder, Colorado</h2><hr>
		<div class="blocks">
			<ul style="margin:0px;">
			<?php query_posts('cat=17'.'&orderby=title&order=ASC'.'&posts_per_page=-1000'); while (have_posts()) : the_post();?>
				<li class="block d-1of3 t-1of2 m-1of2 bottomMargin">
				<div class="blockBox row2 d-all t-all m-all hvr-rectangle-out">
				<h3 class="blockTitle"><?php the_field('employee_full_name'); ?></h3>
				<div class="block_image d-all t-all m-all">
					<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('bones-thumb-150');
					} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/library/images/Emptemp-01.png" alt="<?php the_title(); ?>" />
					<?php } ?>					
					</div>
					<div class="blockContent">
					<ul>
					<li><?php the_field('job_title'); ?> </li>
					<li>
					<?php if( get_field('phone_number') ): ?>
					<a href="tel:+<?php the_field('phone_number'); ?>"><i class="fa fa-phone" aria-hidden="true"></i>  <?php the_field('phone_number'); ?></a>
				<?php endif;?>
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
			<?php endwhile; ?>
			</ul>
		</div>
</section>
<div id="collegePark" class="anchor"></div>
<section class="entry-content cf" itemprop="articleBody">
		<h2>College Park, Maryland</h2><hr>
		<div class="blocks">
			<ul style="margin:0px;">
			<?php query_posts('cat=19'.'&orderby=title&order=ASC'.'&posts_per_page=-1000'); while (have_posts()) : the_post();?>
				<li class="block d-1of3 t-1of2 m-1of2 bottomMargin">
				<div class="blockBox row2 d-all t-all m-all hvr-rectangle-out">
				<h3 class="blockTitle"><?php the_field('employee_full_name'); ?></h3>
				<div class="block_image d-all t-all m-all">
					<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail('bones-thumb-150');
					} else { ?>
					<img src="<?php bloginfo('template_directory'); ?>/library/images/Emptemp-01.png" alt="<?php the_title(); ?>" />
					<?php } ?>					
					</div>
					<div class="blockContent">
					<ul>
					<li><?php the_field('job_title'); ?> </li>
					<li>
					<?php if( get_field('phone_number') ): ?>
					<a href="tel:+<?php the_field('phone_number'); ?>"><i class="fa fa-phone" aria-hidden="true"></i>  <?php the_field('phone_number'); ?></a>
				<?php endif;?>
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
			<?php endwhile; ?>
			</ul>
		</div>
</section>
		<div id="silverSprings" class="anchor"></div>

<section class="entry-content cf" itemprop="articleBody">
	<h2>Silver Springs, Maryland</h2><hr>
		<div class="blocks">
			<ul style="margin:0px;">
			<?php query_posts('cat=23'.'&orderby=title&order=ASC'); while (have_posts()) : the_post();?>
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
			<?php endwhile; ?>
			</ul>
		</div>
		</section>

		<div id="kansasCity" class="anchor"></div>

<section class="entry-content cf" itemprop="articleBody">
	<h2>Kansas City, Missouri</h2><hr>
		<div class="blocks">
			<ul style="margin:0px;">
			<?php query_posts('cat=22'.'&orderby=title&order=ASC'); while (have_posts()) : the_post();?>
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
			<?php endwhile; ?>
			</ul>
		</div>
		</section>


	</div>
<?php get_footer(); ?>
