<?php get_header(); ?>
<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?' ); ?></h2>

<?php get_search_form(); ?>

<h3>Check out some of our popular content:</h3>

<?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 10, 'format' => 'custom', 'before' => '', 'after' => '<br />' ) ); ?>

<?php get_footer(); ?>