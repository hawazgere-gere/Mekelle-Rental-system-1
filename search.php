<?php
get_header();

// We check if there are results first
if (have_posts()) : 
?>
    <main class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-5 text-center">
                    <h2 class="display-6">Search Results for: 
                        <span class="text-danger">"<?php echo get_search_query(); ?>"</span>
                    </h2>
                    <hr style="width: 50px; border: 2px solid #e74c3c; margin: auto;">
                </div>

                <div class="col-12">
                    <div class="row">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-12 col-md-6 col-lg-4 mb-4">
                                <?php get_template_part('loop/archive', 'post'); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-12">
                            <?php get_template_part('template-parts/pagination'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php else : ?>
    <main class="mt-5 mb-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 py-5">
                    <i class="fa fa-search-minus fa-3x mb-3 text-muted"></i>
                    <h3>No Properties Found</h3>
                    <p class="text-muted">We couldn't find any rentals matching "<?php echo get_search_query(); ?>". Try a different location in Mekelle.</p>
                    <a href="<?php echo home_url(); ?>" class="btn btn-danger mt-3">Back to Home</a>
                </div>
            </div>
        </div>
    </main>
<?php endif; ?>

<?php 
// Only show the "Register/Offer" banner, DO NOT call 'home-search-filter' here
get_template_part('template-parts/register-offer'); 

get_footer(); 
?>