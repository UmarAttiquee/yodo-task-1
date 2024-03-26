<?php
/*
Template Name: Template See ALL News
*/
get_header();
?>


<section class="News">
<div class="container-fluid container-fluid_bg mt-4">

    <div class="row post-grid ">
    
       <div class="col-12">
        <h1 class="post-grid_h1">All News</h1>
        </div>
       <?php
       
        $args = array(
            
            'post_type'      => 'post',
            
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);
       
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
        
                <div class="col-md-4 mb-4">
                    
                    <div class="card h-100">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumbnail', ['class' => 'card-img-top']);
                            }
                            ?>
                            <div class="card-body">
                                
                                <div class="post-excerpt">
                                    <?php
                                    // Display the first 15 words of the post content
                                    $content = get_the_content();
                                    $trimmed_content = wp_trim_words($content, 15, '...');
                                    echo $trimmed_content;
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read more <i class="fas fa-arrow-right fa-arrow-right_i "></i></a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        <?php
         
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>





    </div>
</div>
</section>


<?php get_footer(); ?>