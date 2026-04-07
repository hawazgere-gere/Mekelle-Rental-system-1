<?php get_header(); ?>

<section class="hero-wrapper bg-light border-bottom">
    <div class="container py-3">
        <?php get_template_part('template-parts/home-search-filter'); ?>
    </div>
    <?php get_template_part('template-parts/frontpage', 'top-slider'); ?>
</section>

<main class="site-main-content">

    <section class="featured-listings py-4">
        <div class="container">
            <div class="section-header text-center mb-4">
                <h2 class="fw-bold text-dark">Premium Offers in Mekelle</h2>
                <div class="title-divider mx-auto" style="width: 50px; height: 3px; background: #0056b3; margin-top: 10px;"></div>
            </div>
            <?php get_template_part('template-parts/frontpage', 'special-offer'); ?>
            <div class="mt-3">
                <?php get_template_part('template-parts/frontpage', 'top-view'); ?>
            </div>
        </div>
    </section>

    <section class="neighborhood-gallery py-4 bg-white border-top">
        <div class="container">
            <div class="row align-items-center mb-3">
                <div class="col-md-8">
                    <h3 class="fw-bold">Explore by Neighborhood</h3>
                    <p class="text-muted small">Find your perfect spot in Ayder, Hadnet, or Kedamay Weyane.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3">View All Areas</a>
                </div>
            </div>
            <?php get_template_part('template-parts/frontpage', 'cities-pic'); ?>
        </div>
    </section>

    <section class="choice-reason-section py-4 bg-light border-top border-bottom">
        <div class="container text-center">
            <?php my_the_field('choice_reason'); ?>
        </div>
    </section>

    <section class="trust-signals py-4">
        <div class="container">
            <?php get_template_part('template-parts/frontpage', 'comments'); ?>
            <div class="mt-4">
                <?php get_template_part('template-parts/frontpage', 'best-price'); ?>
            </div>
        </div>
    </section>

    <section class="cta-registration py-4">
        <div class="container">
            <div class="cta-banner-wrapper p-4 text-white rounded-3 shadow-lg text-center">
                <?php get_template_part('template-parts/register-offer'); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>