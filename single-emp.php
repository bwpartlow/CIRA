<?php get_header(); ?>
<div id="content">
	<div class="wrap empCards">
	  <section class="entry-content cf" itemprop="articleBody">
		<div class="empImg d-2of7 t-1of2 m-1of3">
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail('bones-thumb-330');
		} else { ?>
		<img src="<?php bloginfo('template_directory'); ?>/library/images/Emptemp-01.png" alt="<?php the_title(); ?>" />
		<?php } ?>			
		</div>
		<div class="d-5of7 t-1of2 m-2of3 employeeCards">
			<div class="name empItmeList">
				<h2><?php the_field('employee_full_name'); ?></h2>
			</div>
			<div class="title empItmeList">
			<div style="display: flex; align-items: baseline;">
				<h5>Job Title:   </h5>
				<h4> <?php the_field('job_title'); ?></h4>
			</div>
			</div>
			<div class="email empItmeList">
				<h5 class="employeeCards" >Email Address:</h5>
				<a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a>
			</div>
			<div class="phone">
			<?php if( get_field('phone_number') ): ?>
				<div class="empItmeList">
					<h5 class="employeeCards" >Phone Number:</h5>
					<p class="empText"><?php the_field('phone_number'); ?></p>
				</div>
				<?php endif; ?>
			</div>
			<div class="fax">
				<?php if( get_field('fax_number') ): ?>
					<div class="empItmeList">
					<h5 class="employeeCards" >Fax Number:</h5>
					<p class="empText"><?php the_field('fax_number'); ?></p>
					</div>
				<?php endif; ?>
			</div>
			<div class="address">
			<?php if( get_field('physical_address') ): ?>
						<div class="empItmeList">
			<h5>Mailing Addresss:</h5>
			<?php the_field('physical_address'); ?>
			</div>
				<?php endif; ?>
			</div>
			<div class="address">
			<?php if( get_field('office') ): ?>
								<div class="empItmeList">
			<h5>Office Location:</h5>
			<?php the_field('office'); ?>
			</div>
				<?php endif; ?>
			</div>
		</div>
		</section>
	</div>

	<div class="wrap empCards">
	  <section class="entry-content cf" itemprop="articleBody">
	  	  	<?php if( get_field('affiliations_checkbox') ): ?>
	  <div class="affiliations">
	  		<div class="empItmeList">
	  		<h5>Affiliations:</h5>
	  		</div>
	  		<?php
$colors = get_field('affiliations_checkbox');

if( $colors ): ?>
<ul>
	<?php foreach( $colors as $color ): ?>
		<li><?php echo $color; ?></li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>

		</div>
	  		<?php endif; ?>

		<div class="bio bottomMargin">
		<?php if( get_field('staff_bio') ): ?>
			<h5 class="empItmeList">About Me:</h5>
			<div class="bumps">
			<p><?php the_field('staff_bio'); ?></p>
			</div>
		<?php endif; ?>
		</div>
		<div class="website bottomMargin">
		<?php if( get_field('professional_website') ): ?>
			<h5 class="empItmeList">Website:</h5>
			<p><a href="<?php the_field('professional_website'); ?>"><?php the_field('professional_website'); ?></a></p>
		<?php endif; ?>
		</div>
		<div class="resume bottomMargin">
		<?php if( get_field('resume_link') ): ?>
			<h5>Resume: </h5>
			<a href="<?php the_field('resume_link'); ?>">Click here for my Resume.</a>
		<?php endif; ?>
		</div>
		<div class="d-all t-all m-all works">
		<?php if( get_field('recent_work') ): ?>
			<div class="recentWork">
	  		<h5 class="empItmeList">Past Projects:</h5>
	  		<?php if( have_rows('recent_work') ): while ( have_rows('recent_work') ) : the_row();?>
	  		<div class="d-all t-all m-all recentWorkCard">
	  		<h3><?php the_sub_field('title');?></h3>
	  		<h5><?php the_sub_field('date');?></h5>
		  		<div class="d-3of4 t-2of3 m-1of2">
		  			<?php the_sub_field('content'); ?>
		  		</div>
		  		<div class="d-1of4 t-1of3 m-1of2">
		  			<img src="<?php the_sub_field('image');?>"/>
		  		</div>
	  		</div>
			<?php endwhile; else : endif; ?>
	   </div>
		</div>
	  		<?php endif; ?>
		</div>
		</section>
	</div>
</div>
<?php get_footer(); ?>