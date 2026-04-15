<?php get_header(); ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'card-img-top']); ?>
                <?php endif; ?>

                <div class="card-body">
                    <h1 class="font-weight-bold"><?php the_title(); ?></h1>
                    <hr>
                    <div class="property-content" style="font-size: 1.2rem;">
                        <?php the_content(); ?>
                    </div>
                    <a href="<?php echo site_url('/all-properties'); ?>" class="btn btn-secondary mt-4">
                        ← Back to All Properties
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>