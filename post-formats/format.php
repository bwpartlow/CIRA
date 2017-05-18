<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
  <section class="entry-content bottomMargin cf" itemprop="articleBody">
  <div class="d-all t-all m-all">
    <div class="d-2of7 t-1of4 m-1of2 singleImg">
      <?php if ( has_post_thumbnail() ) {
      the_post_thumbnail('bones-thumb-220');
      } else { ?>
      <img src="<?php bloginfo('template_directory'); ?>/library/images/CIRAlogo.png" alt="<?php the_title(); ?>" />
      <?php } ?>          
    </div>
    <div class="d-5of7 t-2of4 m-1of2">
    <?php the_content();?>
    </div>
    </div>
  </section> <?php // end article section ?>
</article> <?php // end article ?>
