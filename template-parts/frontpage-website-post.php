<?php
$args = array(
    'posts_per_page' => 3,
    'post_type'      => 'advertising_home', // This targets your rental listings
);
$posts = get_posts($args);
if ($posts): ?>

    <div class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center feature mb-4">
                    <h5> Featured Properties </h5>
                    <p> Explore the best house rentals available in Mekelle! </p>
                </div>
            <?php foreach ($posts as $post):
                setup_postdata($post); 
                get_template_part('loop/frontpage','show-post');
            endforeach;
                wp_reset_postdata();
            ?>
            </div>
        </div>
    </div>
<?php endif; ?>