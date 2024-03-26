<?php
get_header();

// Get the current category
$current_category = get_queried_object();

if (have_posts()) :
    while (have_posts()) : the_post();

        // Check if the post belongs to the current category
        if (has_category($current_category->slug)) :
?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-content">
                    <h1><?php the_title(); ?></h1>
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    }
                    ?>
                    <div class="post-excerpt">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
<?php
        endif;
    endwhile;
else :
    echo '<p>No content found.</p>';
endif;

get_footer();
?>
