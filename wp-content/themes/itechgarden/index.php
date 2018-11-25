<?php get_header(); ?>
    <section id="main-content">
        <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile;
        // Previous/next page navigation.
        the_posts_pagination( array(
            'prev_text'          => __( 'Previous page', 'fr' ),
            'next_text'          => __( 'Next page', 'fr' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'fr' ) . ' </span>',
        ) );
        else :
            get_template_part( 'content', 'none' );
        endif;
        ?>
    </section>
<?php get_footer(); ?>