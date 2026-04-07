<?php get_header(); ?>

<section class="hero-wrapper bg-light border-bottom">
    <div class="container py-4">
        <?php get_template_part('template-parts/home-search-filter'); ?>
    </div>
    <?php get_template_part('template-parts/frontpage', 'top-slider'); ?>
</section>

<main class="site-main-content">

    <section class="featured-properties py-5">
        <div class="container">
            <div class="section-title-wrap text-center mb-5">
                <h2 class="display-6 fw-bold">Premium Offers in Mekelle</h2>
                <p class="text-muted lead">Hand-picked properties with exclusive rates for our community.</p>
                <div class="title-divider mx-auto"></div>
            </div>
            
            <?php get_template_part('template-parts/frontpage', 'special-offer'); ?>
            
            <div class="mt-5">
                <?php get_template_part('template-parts/frontpage', 'top-view'); ?>
            </div>
        </div>
    </section>

    <section class="neighborhood-gallery py-5 bg-white border-top">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-8">
                    <h3 class="fw-bold">Explore by Neighborhood</h3>
                    <p class="text-muted">Find your perfect spot in Ayder, Hadnet, or Kedamay Weyane.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4">View All Areas</a>
                </div>
            </div>
            <?php get_template_part('template-parts/frontpage', 'cities-pic'); ?>
        </div>
    </section>

    <section class="benefits-section py-5 bg-light border-top border-bottom">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <?php my_the_field('choice_reason'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="community-insights py-5">
        <div class="container">
            <?php get_template_part('template-parts/frontpage', 'comments'); ?>
            <hr class="my-5 opacity-25">
            <?php get_template_part('template-parts/frontpage', 'best-price'); ?>
            <div class="my-5"></div>
            <h3 class="fw-bold mb-4">Real Estate Market Insights</h3>
            <?php get_template_part('template-parts/frontpage', 'website-post'); ?>
        </div>
    </section>

    <section class="cta-registration py-5">
        <div class="container">
            <div class="cta-banner-wrapper p-5 text-white rounded-3 shadow-lg">
                <?php get_template_part('template-parts/register-offer'); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>