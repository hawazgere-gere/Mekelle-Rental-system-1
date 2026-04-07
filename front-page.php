<?php get_header(); ?>

<div class="hero-section bg-light border-bottom">
    <div class="container py-4">
        <?php get_template_part('template-parts/home-search-filter'); ?>
    </div>
    <?php get_template_part('template-parts/frontpage', 'top-slider'); ?>
</div>

<main class="main-content-area">

    <section class="featured-listings py-5">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="display-5 fw-bold text-dark">Premium Offers in Mekelle</h2>
                <p class="lead text-muted">Hand-picked properties with exclusive rates for our members.</p>
            </div>
            <?php get_template_part('template-parts/frontpage', 'special-offer'); ?>
            <div class="mt-4">
                <?php get_template_part('template-parts/frontpage', 'top-view'); ?>
            </div>
        </div>
    </section>

    <section class="neighborhoods-section py-5 bg-white">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-6">
                    <h3 class="h2 fw-bold">Explore by Neighborhood</h3>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="btn btn-outline-primary">View All Areas</a>
                </div>
            </div>
            <?php get_template_part('template-parts/frontpage', 'cities-pic'); ?>
        </div>
    </section>

    <section class="choice-reason-section py-5 bg-light shadow-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body">
                            <?php my_the_field('choice_reason'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="trust-signals-section py-5">
        <div class="container">
            <?php get_template_part('template-parts/frontpage', 'comments'); ?>
            <hr class="my-5 opacity-25">
            <?php get_template_part('template-parts/frontpage', 'best-price'); ?>
        </div>
    </section>

    <section class="blog-preview py-5 bg-white border-top">
        <div class="container">
            <h3 class="fw-bold mb-4">Market Insights & Rental Tips</h3>
            <?php get_template_part('template-parts/frontpage', 'website-post'); ?>
        </div>
    </section>

    <section class="final-cta py-5" style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);">
        <div class="container text-white">
            <div class="row py-4 align-items-center">
                <div class="col-lg-12">
                     <?php get_template_part('template-parts/register-offer'); ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>