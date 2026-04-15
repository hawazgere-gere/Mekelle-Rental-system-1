<?php 
/* Template Name: All Properties Page */
get_header(); ?>

<div class="container py-5">
    <h2 class="text-center font-weight-bold mb-5">Available Rentals in Mekelle</h2>
    <div class="row">
        <?php 
        // This query looks for BOTH standard posts and advertising posts
        $query = new WP_Query(array(
            'post_type' => array('post', 'advertising'), 
            'posts_per_page' => 12
        ));

        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <div style="height: 200px; overflow: hidden;">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top w-100 h-100', 'style' => 'object-fit: cover;']); ?>
                        <?php else : ?>
                            <div class="bg-light d-flex align-items-center justify-content-center h-100 text-muted">No Photo</div>
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-bold"><?php the_title(); ?></h5>
                        <p class="text-muted small"><?php echo wp_trim_words(get_the_content(), 15); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-info btn-block">View Details</a>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); else: ?>
            <div class="col-12 text-center py-5">
                <p>No properties found yet. Keep going!</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>