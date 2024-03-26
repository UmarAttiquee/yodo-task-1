<?php get_header(); ?>

<section class="category-posts">
    <div class="container">
        <h2><?php single_cat_title(); ?></h2>

        <div class="row">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => get_the_title()]); ?>
                            </a>
                        <?php endif; ?>

                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
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
                    </div>
                </div>

            <?php endwhile; else : ?>
                <p>No posts found</p>
            <?php endif; ?>

        </div>

    </div>
</section>

<?php get_footer(); ?>
