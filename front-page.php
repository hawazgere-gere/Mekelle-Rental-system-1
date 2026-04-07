<?php get_header(); ?>

<?php get_template_part('template-parts/home-search-filter'); ?>

<?php get_template_part('template-parts/frontpage', 'top-slider'); ?>

<main>
    <?php get_template_part('template-parts/frontpage', 'special-offer'); ?>
    <?php get_template_part('template-parts/frontpage', 'top-view'); ?>

    <?php get_template_part('template-parts/frontpage', 'cities-pic'); ?>

    <section class="choice-reason-section py-5">
        <div class="container">
            <?php my_the_field('choice_reason'); ?>
        </div>
    </section>

    <?php get_template_part('template-parts/frontpage', 'comments'); ?>

    <?php get_template_part('template-parts/frontpage', 'best-price'); ?>

    <?php get_template_part('template-parts/frontpage', 'website-post'); ?>

    <?php get_template_part('template-parts/register-offer'); ?>
</main>

<?php get_footer(); ?>