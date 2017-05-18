		<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
		<div id="pinNavPin"></div>
			<div id="inner-footer" class="wrap cf">
				<div class="d-5of7 t-1of2 m-1of2">
					<p>Cooperative Institute for Research in the Atmosphere</p>
					<p>Colorado State University</p>
					<p>Fort Collins, CO 80523-1375</p>
				<p>Phone: <a style="color:#fff;" href="tel:+9704918448">970.491.8448</a></p>
				<p>Fax: 970.491.8241</p>
				</div>
				<div class="d-2of7 t-1of2 m-1of2">
					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                          
    					'container_class' => 'footer-links cf',        
    					'menu' => __( 'Footer Links', 'bonestheme' ),  
    					'menu_class' => 'nav footer-nav cf',           
    					'theme_location' => 'footer-links',             
    					'before' => '',                                 
    					'after' => '',                                  
    					'link_before' => '',                            
    					'link_after' => '',                             
    					'depth' => 0,                                   
    					'fallback_cb' => 'bones_footer_links_fallback'  
						)); ?>
					</nav>
				</div>
			</div>
		</footer>
			<footer class="CSUfooter">
				<div class="wrap">
					<div class="csuFootMenu">
					<?php wp_nav_menu( array( 'theme_location' => 'csu-menu' ) ); ?>
					</div>
					<br/>
					<div class="">
	            		<p id="copyright">
	            		<?php if (is_user_logged_in()) : ?>
	            			<a href="<?php echo wp_logout_url(get_permalink()); ?>">Log Out | </a>
	            			<a href="/wp-admin">Dashboard</a>
						<?php else : ?> 
							<a href="<?php echo wp_login_url(get_permalink()); ?>">Login </a>
						<?php endif;?>
						</p>
						</div>

					</div>
					</div>

</footer>
</div>
		<?php wp_footer(); ?>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/imagesloaded.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/modernizr.js"></script>
 
        <script src="<?php echo get_template_directory_uri(); ?>/library/js/_main.js"></script>

		<script>
		var scene1 = new ScrollMagic.Scene({
		  triggerElement: "#pinned-trigger1", 
		  duration: 0, 
		  triggerHook: 0, 
		  reverse: true 
		})
		.setPin("#pinned-element1") 
		.addTo(controller);
		jQuery(document).ready(function() {
		  jQuery(window).scroll(function () {  
		       console.log($(window).scrollTop())
		     if ($(window).scrollTop() > 182) {
		       $('.textBannerBarHome').addClass('textBannerBarHome-fixed', {duration:50} );
		    }
		     if ($(window).scrollTop() < 183) {
		       $('.textBannerBarHome').removeClass('textBannerBarHome-fixed', {duration:50});
		     }
		  });

		});

		jQuery(document).ready(function($) {
  
  $('a.facebook, .feed-facebook').hover(function() {
            if ($('.feed-facebook').hasClass('activated')) {
                $('.feed-facebook').stop().removeClass('activated').hide();
                $('.feed-facebook').removeClass('visible');
                $('a.facebook').removeClass('hover');
            } else {
                $('.feed-facebook').stop().addClass('activated').show();
                $('.feed-facebook').addClass('visible');
                $('a.facebook').addClass('hover');
            }
        });
  
  $('a.twitter, .feed-twitter').hover(function() {
            if ($('.feed-twitter').hasClass('activated')) {
                $('.feed-twitter').stop().removeClass('activated').hide();
                $('.feed-twitter').removeClass('visible');
                $('a.twitter').removeClass('hover');
            } else {
                $('.feed-twitter').stop().addClass('activated').show();
                $('.feed-twitter').addClass('visible');
                $('a.twitter').addClass('hover');
            }
        });
  
  
});
		</script> 
	</body>
</html> <!-- end of site. what a ride! -->
