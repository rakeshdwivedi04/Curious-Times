<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

       
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search' , 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s"  />
        <input type="hidden" name="post_type" value="news" />

    <input type="submit" class="search-submit" value="" />
</form>