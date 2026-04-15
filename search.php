<?php get_header(); ?>
<main class="mt-5 mb-5">
    <div class="container">
        <?php if (have_posts()) : ?>
            <h2 class="text-center font-weight-bold mb-5">Search Results for: <span class="text-info">"<?php echo get_search_query(); ?>"</span></h2>
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <div style="height: 200px; overflow: hidden;">
                                <?php if (has_post_thumbnail()) : the_post_thumbnail('medium_large', ['class' => 'card-img-top w-100 h-100', 'style' => 'object-fit: cover;']); ?>
                                <?php else : ?><div class="bg-light d-flex align-items-center justify-content-center h-100">No Photo</div><?php endif; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="font-weight-bold"><?php the_title(); ?></h5>
                                <a href="<?php the_permalink(); ?>" class="btn btn-info btn-block text-white">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <div class="text-center py-5">
                <h3>No Properties Found</h3>
                <p>Try searching for "Hadnet" or "Ayder".</p>
                <a href="<?php echo site_url('/all-properties'); ?>" class="btn btn-outline-info">Browse All</a>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>