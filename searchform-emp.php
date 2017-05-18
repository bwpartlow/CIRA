<?php /*Template Name: Employee Search Page */ ?>


<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
        <input type="search" id="s" name="s" value="" placeholder="search here..." />
        <button type="submit" id="searchsubmit" class="fa fa-arrow-right"><?php _e('GO','bonestheme'); ?></button>
        <input type="hidden" value="16" name="cat" id="scat" />
</form>
