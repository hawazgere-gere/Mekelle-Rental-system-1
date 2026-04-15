<?php
get_header();

// We check if there are results first
if (have_posts()) : 
?>
    <main class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5 text-center">
                    <h2 class="display-6 font-weight-bold">Search Results for: 
                        <span class="text-info">"<?php echo get_search_query(); ?>"</span>
                    </h2>
                    <hr style="width: 60px; border: 2px solid #17a2b8; margin: auto;">
                </div>

                <div class="col-12">
                    <div class="row">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <div style="height: 200px; overflow: hidden; background: #f8f9fa;">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large', ['class' => 'card-img-top w-100 h-100', 'style' => 'object-fit: cover;']); ?>
                                        <?php else : ?>
                                            <div class="d-flex h-100 align-items-center justify-content-center text-muted small">No Photo</div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <div class="card-body">
                                        <h5 class="font-weight-bold"><?php the_title(); ?></h5>
                                        <p class="text-muted small"><?php echo wp_trim_words(get_the_content(), 12); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-info btn-block text-white">View Details</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <?php the_posts_pagination(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php else : ?>
    <main class="mt-5 mb-5" style="min-height: 50vh;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="font-weight-bold">No Properties Found</h3>
                    <p class="text-muted">We couldn't find any rentals matching "<?php echo get_search_query(); ?>". Try searching for <strong>Ayder</strong> or <strong>Hadnet</strong>.</p>
                    <a href="<?php echo site_url('/all-properties'); ?>" class="btn btn-outline-info mt-3 px-5">View All Properties</a>
                </div>
            </div>
        </div>
    </main>
<?php endif; ?>

<?php 
get_footer(); 
?>