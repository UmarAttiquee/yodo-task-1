<?php
/**
 * The template for displaying taxonomy archives.
 */

get_header();

if ( have_posts() ) : ?>

    <header class="page-header">
        <h1 class="page-title"><?php single_term_title(); ?></h1>
        <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
    </header><!-- .page-header -->

    <?php
    // Start the Loop.
    while ( have_posts() ) :
        the_post();

        // Include the content template.
        get_template_part( 'content', get_post_type() );

    endwhile;

    // Previous/next page navigation.
    the_posts_pagination(
        array(
            'prev_text'          => __( 'Previous page', 'textdomain' ),
            'next_text'          => __( 'Next page', 'textdomain' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'textdomain' ) . ' </span>',
        )
    );

// If no content, include the "No posts found" template.
else :
    get_template_part( 'content', 'none' );

endif;

get_footer();
